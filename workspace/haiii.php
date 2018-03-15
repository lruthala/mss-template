<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <!-- meta tags start for Facebook -->
      <meta property="og:url"   content="/events/ibm-think/index.php" />
      <meta property="og:type"  content="article" />
      <meta property="og:title" content="Platinium sponsors again" />
      <meta property="og:description"  content="How much does culture influence creative thinking?" />
      
      <!-- meta tags end for facebook   -->
      <title>Think 2018 | Miracle</title>
      <link href="/css/bootstrap.min.css" rel="stylesheet">
      <link href="/css/font-awesome.min.css" rel="stylesheet">
      <link href="/css/animate.css" rel="stylesheet">
      <link href="/css/main.css" rel="stylesheet">
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="/css/default.css" />
      <link rel="stylesheet" type="text/css" href="/css/component.css" />
      <link href="/css/think-2018.css" rel="stylesheet">
      <link rel="shortcut icon" href="../../images/favicon.ico">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.js"></script>
     
     
      
   </head>





<script>
   (function($) {
  $.fn.dragevent = function(opts) {
    var defaults = {
      throttle: 0
    },
      options = $.extend(defaults, opts),
      lastX,
      lastY;

    return this.each(function() {
      var element = $(this),
        dragging = false,
        firstMove = false;

      element.prop("draggable", false);

      element.on("mousedown", function() {
        dragging = true;
      });

      element.on("mouseup", function() {
        if (dragging) {
          element.trigger("dragend");
        }
        dragging = false;
        lastX = null;
        lastY = null;
        firstMove = false;
      });

      element.on("mousemove", function(e) {
        if (dragging && !firstMove) {
          element.trigger("dragstart");
          firstMove = true;
        }

        if (dragging) {
          var moveX = Number.isFinite(lastX) ? e.pageX - lastX : 0,
            moveY = Number.isFinite(lastY) ? e.pageY - lastY : 0;

          element.trigger("dragmove", [e.pageX, e.pageY, moveX, moveY]);
          lastX = e.pageX;
          lastY = e.pageY;
        }
      });
    });
  };
})(jQuery);

$(".carousel").each(function() {
  var carousel = $(this);
  var list = carousel.find(".carousel-list");
  var clonedItems = list.find(".carousel-item").clone();
  var listWidth = list.outerWidth();
  var winWidth = $(window).width();
  var animationDuration = 20000;
  var listX = 0;
  var dragging = false;
  var lastTouchX;
  var didDrag = false;
  
  function loop(val, min, max) {
	    var p = max - min + 1;
	    var mod = (val - min) % p;

	    if(mod < 0) {
	        mod += p;
	    }

	    return min + mod;
	}

  clonedItems.attr("role", "presentation");
  list.append(clonedItems);

  carousel.dragevent();

  function animate() {
    list
      .velocity(
        {
          translateX: 0
        },
        {
          duration: 0
        }
      )
      .velocity(
        {
          translateX: 0 - listWidth
        },
        {
          duration: animationDuration,
          easing: "linear",
          complete: animate
        }
      );
  }

  carousel.on("mouseover", function() {
    console.log('mouseover')
    list.velocity("pause");
  });
 

  carousel.on("mouseout", function() {
    console.log('mouseout')
    if(!didDrag) {
      list.velocity("resume");
    }
    else {
      list.velocity(
        {
          translateX: [0 - listWidth]
        },
        {
          duration: animationDuration * ((listWidth - Math.abs(listX)) / listWidth),
          easing: "linear",
          complete: animate
        }
      );
    }
    didDrag = false;
  });

  carousel.on("dragstart", function(e) {
    list.velocity("stop");
    listX = list.offset().left;
  });

  carousel.on("dragend", function() {
    didDrag = true;
  });

  carousel.on("dragmove", function(e, pageX, pageY, moveX, moveY) {
    listX = loop(listX + moveX, 0 - listWidth, 0);

    list.velocity('stop').velocity(
      {
        translateX: listX
      },
      { duration: 0 }
    );
  });

  animate();
});
 
</script>

<style>* {
  box-sizing: border-box;
}

.carousel {
  overflow-x: hidden;
}

.carousel-list {
  display: table;
  cursor: -moz-grab;
  cursor: -webkit-grab;
  cursor: grab;
}

.carousel-item {
  display: table-cell;
  padding: 0 1em;
}

.box {
  width: 300px;
  height: 300px;
  background-color: #c00;
  color: #fff;
  font-size: 50px;
  text-align: center;
  padding-top: 110px;
}

.box-green {
  background-color: #090;
}

.box-blue {
  background-color: #00c;
}
.box-yellow {
  background-color: #fc0;
}
.box-purple {
  background-color: #c0c;
}
</style>
<body>
  
  <div class="carousel">
  <div class="carousel-list">
    <div class="carousel-item">
      <div class="box">1</div>
    </div>
    <div class="carousel-item">
      <div class="box box-blue">2</div>
    </div>
    <div class="carousel-item">
      <div class="box box-green">3</div>
    </div>
    <div class="carousel-item">
      <div class="box box-yellow">4</div>
    </div>
    <div class="carousel-item">
      <div class="box box-purple">5</div>
    </div>
  </div>
</div>
  
</body>

</html>