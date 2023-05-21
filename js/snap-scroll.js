(function ($) {
  $.fn.SnapScroll = function (options) {
    var _instance = null;

    //Public
    var defaults = {
      events: true,
      eventChangeActive: "snapscroll_change-active",
      eventChangeVisible: "snapscroll_change-visible",
      classes: true,
      classSnap: "snap-scroll",
      classVisible: "snap-scroll-visible",
      classActive: "snap-scroll-active",
      hashes: false,

      scrollDelay: 300,
      wheelInterval: 1000,
      animateDuration: 250,
      animateTimeBuffer: 100,

      snapTop: true,
      snapBottom: true,
      snaps: [],

      maxWheelDeviation: 100,
    };
    $.fn.SnapScroll.defaults = defaults;

    var _consts = {
      _NUM_WHEEL_EVENT_DELTAS: 100,
    };

    var _vars = {
      _$this: this,
      _resizer: null,

      _snaps: null,
      _currentSnapIndex: -1,
      _scrollTimeout: 0,
      _lastanimateDuration: 0,

      _wheelDir: 0,
      _lastWheelTime: 0,
      _wheelEventDeltas: [],
      _wheelEventDeltaAvg: 0,
      _lastWheelEventTime: 0,
    };

    var _methods = {
      init: function () {
        if (_instance.classes) {
          _vars._$this.addClass(_instance.classSnap);
        }
        _vars._resizer = new Resizer({ onResize: _methods._handler_resize });
        _methods._handler_resize(); //Call initially

        $(document).on("scroll", _methods._handler_document_scroll);
        $(document).on("keydown", _methods._handler_document_keydown);
        $(window).on(
          "DOMMouseScroll mousewheel wheel",
          _methods._handler_window_mousewheel
        );
      },

      destroy: function () {
        $(document).off("scroll", _methods._handler_document_scroll);
        $(document).off("keydown", _methods._handler_document_keydown);
        $(window).off(
          "DOMMouseScroll mousewheel wheel",
          _methods._handler_window_mousewheel
        );

        if (_vars._resizer) {
          _vars._resizer.destroy();
          _vars._resizer = null;
        }

        _vars._snaps = null;
        _vars._currentSnapIndex = -1;
        if (_vars._scrollTimeout) {
          clearTimeout(_vars._scrollTimeout);
          _vars._scrollTimeout = 0;
        }
        _vars._lastanimateDuration = 0;

        _vars._wheelDir = 0;
        _vars._lastWheelTime = 0;
        _vars._wheelEventDeltas.splice(0, _vars._wheelEventDeltas.length);
        _vars._wheelEventDeltaAvg = 0;
        _vars._lastWheelEventTime = 0;

        if (_instance.classes) {
          _vars._$this.removeClass(_instance.classSnap);
        }
      },

      snapClosest: function () {
        var scrollPosition = _methods._getScrollPosition();
        var closestIndex = -1;
        var closestDist = -1;
        var snaps = _vars._snaps;
        var snapsLen = snaps.length;
        for (var i = 0; i < snapsLen; i++) {
          var dist = Math.abs(snaps[i] - scrollPosition);
          if (closestDist == -1 || dist < closestDist) {
            closestDist = dist;
            closestIndex = i;
          }
        }
        _instance.snapIndex(closestIndex);
      },

      snapPrev: function () {
        _instance.snapIndex(_vars._currentSnapIndex - 1);
      },

      snapNext: function () {
        _instance.snapIndex(_vars._currentSnapIndex + 1);
      },

      snapIndex: function (index) {
        index = Math.min(Math.max(index, 0), _vars._snaps.length - 1);
        _vars._currentSnapIndex = index;
        var snap = _vars._snaps[index];

        var $dirtyEls = [];
        var $active = null;
        _vars._$this.each(function () {
          var $el = $(this);
          if (!$active && $el.offset().top == snap) {
            $active = $el;
          }
          if (_instance.classes) {
            if ($active == $el) {
              if (!$el.hasClass(_instance.classActive)) {
                $el.addClass(_instance.classActive);
                $dirtyEls.push($el);
              }
            } else {
              if ($el.hasClass(_instance.classActive)) {
                $el.removeClass(_instance.classActive);
                $dirtyEls.push($el);
              }
            }
          }
        });
        if (_instance.events) {
          var dirtyElsLen = $dirtyEls.length;
          if (dirtyElsLen) {
            for (var i = 0; i < dirtyElsLen; i++) {
              $dirtyEls[i].trigger(_instance.eventChangeActive, $active);
            }
          }
        }
        if (_instance.hashes) {
          var hash = "";
          if ($active) {
            var activeId = $active.attr("id");
            if (activeId) {
              hash = "#" + activeId;
            }
          }
          history.replaceState(
            {},
            window.location.href,
            window.location.href.replace(/#.*$/, "") + hash
          );
        }
        _methods._evalVisibility();

        _methods._scrollTo(snap);
      },

      getSnapIndex: function () {
        return _vars._currentSnapIndex;
      },

      update: function () {
        var snaps = _instance.snaps.concat();
        var pageBottom = $(document).height() - window.innerHeight;

        var $tags = _vars._$this;
        $tags.each(function () {
          snaps.push($(this).offset().top);
        });

        if (_instance.snapTop) {
          snaps.push(0);
        }
        if (_instance.snapBottom) {
          snaps.push(pageBottom);
        }

        snaps = snaps.reduce(function (arr, snap) {
          if (arr.indexOf(snap) == -1 && snap <= pageBottom) {
            arr.push(snap);
          }
          return arr;
        }, []);

        snaps.sort(_methods._sortNumeric);

        _vars._snaps = snaps;
        return _vars._snaps;
      },

      isVisible: function ($el) {
        var elTop = $el.offset().top;
        var elBottom = elTop + $el.height();
        var scrollTop = _methods._getScrollPosition();
        var scrollBottom = scrollTop + window.innerHeight;
        if (
          (elTop >= scrollTop && elTop < scrollBottom) ||
          (elBottom > scrollTop && elBottom <= scrollBottom)
        ) {
          return true;
        }
        return false;
      },

      _evalVisibility: function () {
        if (!_instance.classes) {
          return;
        }
        var $dirtyEls = [];
        var $visibleEls = [];
        _vars._$this.each(function () {
          var $el = $(this);
          if (_instance.isVisible($el)) {
            if (!$el.hasClass(_instance.classVisible)) {
              $el.addClass(_instance.classVisible);
              $dirtyEls.push($el);
            }
            $visibleEls.push($el);
          } else {
            if ($el.hasClass(_instance.classVisible)) {
              $el.removeClass(_instance.classVisible);
              $dirtyEls.push($el);
            }
          }
        });
        if (_instance.events) {
          var dirtyElsLen = $dirtyEls.length;
          for (var i = 0; i < dirtyElsLen; i++) {
            $dirtyEls[i].trigger(_instance.eventChangeVisible, {
              data: $visibleEls,
            });
          }
        }
      },

      _sortNumeric: function (a, b) {
        return a - b;
      },

      _handler_document_scroll: function (evt) {
        if (_instance.classes) {
          _methods._evalVisibility();
        }
        if (_vars._scrollTimeout) {
          clearTimeout(_vars._scrollTimeout);
        }
        var animateDelay =
          _vars._lastanimateDuration +
          _instance.animateDuration +
          _instance.animateTimeBuffer -
          new Date().getTime();
        _vars._scrollTimeout = setTimeout(
          _methods._handler_scroll_timeout,
          Math.max(_instance.scrollDelay, animateDelay)
        );
      },

      _handler_scroll_timeout: function () {
        clearTimeout(_vars._scrollTimeout);
        _vars._scrollTimeout = 0;

        _instance.snapClosest();
      },

      _scrollTo: function (top) {
        var scrollPosition = _methods._getScrollPosition();
        if (scrollPosition == top) {
          return;
        }
        _vars._lastanimateDuration = new Date().getTime();

        var $htmlBody = $("html,body");
        $htmlBody.stop(true);
        $htmlBody.animate(
          {
            scrollTop: top,
          },
          _instance.animateDuration
        );
      },

      _handler_window_mousewheel: function (evt) {
        // evt.preventDefault();

        var shouldScroll = false;
        var now = new Date().getTime();
        if (_vars._lastWheelEventTime) {
          var eventDelta = now - _vars._lastWheelEventTime;
          var wheelEventDeltasLen = _vars._wheelEventDeltas.length;
          if (wheelEventDeltasLen == _consts._NUM_WHEEL_EVENT_DELTAS) {
            _vars._wheelEventDeltas.shift();
          }
          _vars._wheelEventDeltas.push(eventDelta);
          wheelEventDeltasLen++;

          _vars._wheelEventDeltaAvg =
            (_vars._wheelEventDeltaAvg * (wheelEventDeltasLen - 1) +
              eventDelta) /
            wheelEventDeltasLen;

          var deviation = Math.abs(eventDelta - _vars._wheelEventDeltaAvg);
          if (deviation >= _instance.maxWheelDeviation) {
            _vars._wheelEventDeltas.splice(0, wheelEventDeltasLen);
            shouldScroll = true;
          }
        } else {
          shouldScroll = true;
        }
        _vars._lastWheelEventTime = now;

        var delta = Math.max(
          -1,
          Math.min(
            1,
            evt.originalEvent.deltaY ||
              evt.originalEvent.wheelDelta ||
              -evt.originalEvent.detail
          )
        );
        _vars._wheelDir = Math.abs(delta) / delta;
        if (
          shouldScroll ||
          new Date().getTime() >= _vars._lastWheelTime + _instance.wheelInterval
        ) {
          _methods._handler_wheel_timeout();
        }

        return false;
      },

      _handler_wheel_timeout: function () {
        _vars._lastWheelTime = new Date().getTime();
        if (_vars._wheelDir < 0) {
          _instance.snapPrev();
        } else if (_vars._wheelDir > 0) {
          _instance.snapNext();
        }
      },

      _handler_document_keydown: function (evt) {
        switch (evt.keyCode) {
          case 38:
            _instance.snapPrev();
            break;
          case 40:
            _instance.snapNext();
            break;
        }
      },

      _handler_resize: function (width, height) {
        _instance.update();
        if (_vars._currentSnapIndex == -1) {
          _instance.snapClosest();
        } else {
          _instance.snapIndex(_vars._currentSnapIndex);
        }
      },

      _getScrollPosition: function () {
        return (
          window.scrollY ||
          document.body.scrollTop ||
          document.documentElement.scrollTop
        );
      },
    };

    _instance = $.extend(
      {
        init: _methods.init,
        destroy: _methods.destroy,
        snapClosest: _methods.snapClosest,
        snapPrev: _methods.snapPrev,
        snapNext: _methods.snapNext,
        snapIndex: _methods.snapIndex,
        getSnapIndex: _methods.getSnapIndex,
        update: _methods.update,
        isVisible: _methods.isVisible,
      },
      defaults,
      options
    );
    _instance.init();
    return _instance;
  };

  function Resizer(params) {
    var _instance = null;

    var _vars = {
      callbackDelay: 300,

      _lastOrientation: window.orientation,
      _timeout: 0,
    };

    var _methods = {
      init: function () {
        if (window.addEventListener) {
          window.addEventListener("resize", _methods._handler_resize, false);
          window.addEventListener(
            "orientationchange",
            _methods._handler_resize,
            false
          );
        } else if (window.attachEvent) {
          window.attachEvent("onresize", _methods._handler_resize);
          window.attachEvent("onorientationchange", _methods._handler_resize);
        }
      },

      destroy: function () {
        var timeout = _vars._timeout;
        if (timeout) {
          clearTimeout(timeout);
          _vars._timeout = 0;
        }
        _instance.onResize = null;

        if (window.removeEventListener) {
          window.removeEventListener("resize", _methods._handler_resize);
          window.removeEventListener(
            "orientationchange",
            _methods._handler_resize
          );
        } else if (window.detachEvent) {
          window.detachEvent("onresize", _methods._handler_resize);
          window.detachEvent("onorientationchange", _methods._handler_resize);
        }
      },

      getWidth: function () {
        return (
          window.innerWidth ||
          document.documentElement.clientWidth ||
          document.body.clientWidth
        );
      },

      getHeight: function () {
        return (
          window.innerHeight ||
          document.documentElement.clientHeight ||
          document.body.clientHeight
        );
      },

      _handler_resize: function () {
        if ("onorientationchange" in window) {
          var orientation = window.orientation;
          if (orientation == _vars._lastOrientation) {
            return;
          }
          _vars._lastOrientation = orientation;
        }
        if (_vars._timeout) {
          clearTimeout(_vars._timeout);
        }
        _vars._timeout = setTimeout(
          _methods._handler_timeout,
          _instance.callbackDelay
        );
      },

      _handler_timeout: function () {
        clearTimeout(_vars._timeout);
        _vars._timeout = 0;
        _instance.onResize(_instance.getWidth(), _instance.getHeight());
      },
    };

    _instance = {
      callbackDelay: _vars.callbackDelay,

      init: _methods.init,
      destroy: _methods.destroy,
      getWidth: _methods.getWidth,
      getHeight: _methods.getHeight,
      onResize: null,
    };
    for (var param in params) {
      _instance[param] = params[param];
    }
    _instance.init();
    return _instance;
  }
})(jQuery);
