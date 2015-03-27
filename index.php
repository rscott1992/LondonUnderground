
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/london_underground_icon.png">

    <title>Network Analysis</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <script src = "//code.jquery.com/jquery-1.10.2.js"></script>
    <script src = "//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="js/autocomplete.js"></script>
    <!-- START SIGMA IMPORTS -->
    <script src="js/src/sigma.core.js"></script>
    <script src="js/src/conrad.js"></script>
    <script src="js/src/utils/sigma.utils.js"></script>
    <script src="js/src/utils/sigma.polyfills.js"></script>
    <script src="js/src/sigma.settings.js"></script>
    <script src="js/src/classes/sigma.classes.dispatcher.js"></script>
    <script src="js/src/classes/sigma.classes.configurable.js"></script>
    <script src="js/src/classes/sigma.classes.graph.js"></script>
    <script src="js/src/classes/sigma.classes.camera.js"></script>
    <script src="js/src/classes/sigma.classes.quad.js"></script>
    <script src="js/src/classes/sigma.classes.edgequad.js"></script>
    <script src="js/src/captors/sigma.captors.mouse.js"></script>
    <script src="js/src/captors/sigma.captors.touch.js"></script>
    <script src="js/src/renderers/sigma.renderers.canvas.js"></script>
    <script src="js/src/renderers/sigma.renderers.webgl.js"></script>
    <script src="js/src/renderers/sigma.renderers.svg.js"></script>
    <script src="js/src/renderers/sigma.renderers.def.js"></script>
    <script src="js/src/renderers/webgl/sigma.webgl.nodes.def.js"></script>
    <script src="js/src/renderers/webgl/sigma.webgl.nodes.fast.js"></script>
    <script src="js/src/renderers/webgl/sigma.webgl.edges.def.js"></script>
    <script src="js/src/renderers/webgl/sigma.webgl.edges.fast.js"></script>
    <script src="js/src/renderers/webgl/sigma.webgl.edges.arrow.js"></script>
    <script src="js/src/renderers/canvas/sigma.canvas.labels.def.js"></script>
    <script src="js/src/renderers/canvas/sigma.canvas.hovers.def.js"></script>
    <script src="js/src/renderers/canvas/sigma.canvas.nodes.def.js"></script>
    <script src="js/src/renderers/canvas/sigma.canvas.edges.def.js"></script>
    <script src="js/src/renderers/canvas/sigma.canvas.edges.curve.js"></script>
    <script src="js/src/renderers/canvas/sigma.canvas.edges.arrow.js"></script>
    <script src="js/src/renderers/canvas/sigma.canvas.edges.curvedArrow.js"></script>
    <script src="js/src/renderers/canvas/sigma.canvas.edgehovers.def.js"></script>
    <script src="js/src/renderers/canvas/sigma.canvas.edgehovers.curve.js"></script>
    <script src="js/src/renderers/canvas/sigma.canvas.edgehovers.arrow.js"></script>
    <script src="js/src/renderers/canvas/sigma.canvas.edgehovers.curvedArrow.js"></script>
    <script src="js/src/renderers/canvas/sigma.canvas.extremities.def.js"></script>
    <script src="js/src/renderers/svg/sigma.svg.utils.js"></script>
    <script src="js/src/renderers/svg/sigma.svg.nodes.def.js"></script>
    <script src="js/src/renderers/svg/sigma.svg.edges.def.js"></script>
    <script src="js/src/renderers/svg/sigma.svg.edges.curve.js"></script>
    <script src="js/src/renderers/svg/sigma.svg.labels.def.js"></script>
    <script src="js/src/renderers/svg/sigma.svg.hovers.def.js"></script>
    <script src="js/src/middlewares/sigma.middlewares.rescale.js"></script>
    <script src="js/src/middlewares/sigma.middlewares.copy.js"></script>
    <script src="js/src/misc/sigma.misc.animation.js"></script>
    <script src="js/src/misc/sigma.misc.bindEvents.js"></script>
    <script src="js/src/misc/sigma.misc.bindDOMEvents.js"></script>
    <script src="js/src/misc/sigma.misc.drawHovers.js"></script>

    <!-- END SIGMA IMPORTS -->
    <!-- SIGMA PLUGINS -->
    <script src="js/plugins/sigma.renderers.edgeLabels/settings.js"></script>
    <script src="js/plugins/sigma.renderers.edgeLabels/sigma.canvas.edges.labels.curve.js"></script>
    <script src="js/plugins/sigma.renderers.edgeLabels/sigma.canvas.edges.labels.curvedArrow.js"></script>
    <script src="js/plugins/sigma.parsers.json/sigma.parsers.json.js"></script>
    <script src="js/plugins/sigma.renderers.edgeLabels/sigma.canvas.edges.labels.def.js"></script>

    <!--Graph drawing -->
    <script src="js/initial_graph_draw.js"></script>

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">London Underground Route Planner</a>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><img class='logo' src='img/london_underground.png' alt='London Underground Logo'></li>
            <li><br></li>
            <li>Location</li>
            <li><input type='text' class="suggest" id='location'></li>
<!--             <li><ul id='location_list'></ul></li> -->
            <li><br></li>
            <li>Destination</li>
            <li><input type='text' class="suggest" id='destination'></li>
            <li><br></li>
            <li><input type='submit' value='Submit'></li>
        </div>
        <div id="container">
          <div id="graph-container"></div>
        </div>    
      </div>
    </div>

  </body>
</html>