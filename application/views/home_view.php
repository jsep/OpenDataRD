<body>
<div id="page">
    <div id="content" class="row-fluid">

        <div id="search-wrapper" class="row-fluid ">
            <div id="search" class="offset1 span10 content ">

                <h1 id="title" class="text-center">OpenData<span>RD</span></h1>
                <div id="input-search" class="span4 text-center">
                    <input type="text" class="txt typeahead1">
                    <input type="text" class="txt typeahead2">
                    <input type="text" class="txt typeahead3">
                </div>
                <button id="btn-search" class="span1" type="submit"><i class="icon-search icon-white"></i></button>
            </div>
        </div>
    </div>
   <!-- <div id="indicators-wrapper" class="row-fluid ">
        <div class="offset1 span10 content">
            <h3 class="text-center ">Indicadores</h3>
        </div>
    </div>-->
    <div id="data-wrapper" class="row-fluid">
        <div id="data" class="span10 offset1 content">
            <div id="navbar">
                <ul class="nav nav-tabs">
                    <li>
                        <a href="#noticias"><i class="icon-globe icon-white"></i>Demograficas</a>
                    </li>
                    <li>
                        <a href="#lugares"><i class=" icon-map-marker icon-white"></i>Lugares</a>
                    </li>
                    <li>
                        <a href="#estadisticas"><i class="icon-tasks icon-white"></i>Estadisticas</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="data-show">

        </div>
    </div>
</div>
<!-- Scripts -->
<script src="<?php echo base_url ?>javascripts/jquery.js"></script>
<script src="<?php echo base_url ?>javascripts/bootstrap-tab.js"></script>
<script src="<?php echo base_url ?>javascripts/bootstrap-typeahead.js"></script>
<script src="<?php echo base_url ?>javascripts/chosen.jquery.min.js"></script>
<script src="<?php echo base_url ?>javascripts/data.js"></script>
<script src="<?php echo base_url ?>javascripts/main.js"></script>
</body>
</html>
