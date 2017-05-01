<html>
<head>
    <title>Badge Generator - Alpha</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        body {
            background-color: lightblue;
        }

        h1 {
            color: navy;
            margin-left: 20px;
        }

        .line-separator{

            height:1px;

            background:#717171;

            border-bottom:1px solid #313030;

        }
    </style>
</head>
<body>
    <h1>PRINT TEMPLATE PRINT <strong>ONE</strong> CLIENT</h1>

    {{--<h3>Header column with punch-out holes</h3>--}}
    <div class="container" style="background: #FFFFFF;">
        <div class="col-md-12" style="height: 80px;">.col-md-12</div>
    </div>

    {{--<h3>Header column</h3>--}}
    <div class="container" style="background: #FFFFFF;">
        <div class="col-md-1" style="height: 50px; border: 1px solid red">.col-md-1</div>
        <div class="col-md-6" style="height: 50px; border: 1px solid red">.col-md-6</div>
        <div class="col-md-4" style="height: 50px; border: 1px solid red">.col-md-4</div>
        <div class="col-md-1" style="height: 50px; border: 1px solid red">.col-md-1</div>
    </div>

    {{--<h3>Blank row</h3>--}}
    <div class="container" style="background: #FFFFFF;">
        <div class="col-md-12" style="height: 10px;"></div>
    </div>

    {{--<h3>Seperator</h3>--}}
    <div class="container" style="background: #FFFFFF;">
        <div class="col-md-12 line-separator" style="height: 2px;"></div>
    </div>

    {{--<h3>Blank row</h3>--}}
    <div class="container" style="background: #FFFFFF;">
        <div class="col-md-12" style="height: 14px;"></div>
    </div>

    {{--<h3>Body</h3>--}}
    <div class="container" style="background: #FFFFFF;">
        <div class="col-md-1" style="height: 300px; border: 1px solid red">.col-md-1</div>
        <div class="col-md-4" style="height: 300px; border: 1px solid red">.col-md-4</div>
        <div class="col-md-6" style="height: 300px; border: 1px solid red">.col-md-6</div>
        <div class="col-md-1" style="height: 300px; border: 1px solid red">.col-md-1</div>
    </div>

    {{--<h3>Body 2</h3>--}}
    <div class="container" style="background: #FFFFFF;">
        <div class="col-md-1" style="height: 100px; border: 1px solid red">.col-md-1</div>
        <div class="col-md-4" style="height: 100px; border: 1px solid red">.col-md-4</div>
        <div class="col-md-6" style="height: 100px; border: 1px solid red">.col-md-6</div>
        <div class="col-md-1" style="height: 100px; border: 1px solid red">.col-md-1</div>
    </div>

    {{--<h3>Blank row</h3>--}}
    <div class="container" style="background: #FFFFFF;">
        <div class="col-md-12" style="height: 10px;"></div>
    </div>

    {{--<h3>Seperator</h3>--}}
    <div class="container" style="background: #FFFFFF;">
        <div class="col-md-12 line-separator" style="height: 2px;"></div>
    </div>

    {{--<h3>Blank row</h3>--}}
    <div class="container" style="background: #FFFFFF;">
        <div class="col-md-12" style="height: 14px;"></div>
    </div>

    {{--<h3>Footer</h3>--}}
    <div class="container" style="background: #FFFFFF;">
        <div class="col-md-1" style="height: 80px; border: 1px solid red">.col-md-1</div>
        <div class="col-md-2" style="height: 80px; border: 1px solid red">.col-md-2</div>
        <div class="col-md-8" style="height: 80px; border: 1px solid red">.col-md-8</div>
        <div class="col-md-1" style="height: 80px; border: 1px solid red">.col-md-1</div>
    </div>

    {{--<h3>Blank row</h3>--}}
    <div class="container" style="background: #FFFFFF;">
        <div class="col-md-12" style="height: 25px;"></div>
    </div>


<div class="container hidden">
    <br><br>
    <h3>Three equal columns</h3>
    <p>Get three equal-width columns <strong>starting at desktops and scaling to large desktops</strong>. On mobile devices, tablets and below, the columns will automatically stack.</p>
    <div class="row" style="background: #FFFFFF; height: 50px;">
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
    </div>

    <div class="row" style="background: #FFFFFF; height: 50px;">
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
    </div>

    <h3>Three unequal columns</h3>
    <p>Get three columns <strong>starting at desktops and scaling to large desktops</strong> of various widths. Remember, grid columns should add up to twelve for a single horizontal block. More than that, and columns start stacking no matter the viewport.</p>
    <div class="row">
        <div class="col-md-3">.col-md-3</div>
        <div class="col-md-6">.col-md-6</div>
        <div class="col-md-3">.col-md-3</div>
    </div>

    <h3>Two columns</h3>
    <p>Get two columns <strong>starting at desktops and scaling to large desktops</strong>.</p>
    <div class="row">
        <div class="col-md-8">.col-md-8</div>
        <div class="col-md-4">.col-md-4</div>
    </div>

    <h3>Full width, single column</h3>
    <p class="text-warning">No grid classes are necessary for full-width elements.</p>

    <hr>

    <h3>Two columns with two nested columns</h3>
    <p>Per the documentation, nesting is easy—just put a row of columns within an existing column. This gives you two columns <strong>starting at desktops and scaling to large desktops</strong>, with another two (equal widths) within the larger column.</p>
    <p>At mobile device sizes, tablets and down, these columns and their nested columns will stack.</p>
    <div class="row">
        <div class="col-md-8">
            .col-md-8
            <div class="row">
                <div class="col-md-6">.col-md-6</div>
                <div class="col-md-6">.col-md-6</div>
            </div>
        </div>
        <div class="col-md-4">.col-md-4</div>
    </div>

    <hr>

    <h3>Mixed: mobile and desktop</h3>
    <p>The Bootstrap 3 grid system has four tiers of classes: xs (phones), sm (tablets), md (desktops), and lg (larger desktops). You can use nearly any combination of these classes to create more dynamic and flexible layouts.</p>
    <p>Each tier of classes scales up, meaning if you plan on setting the same widths for xs and sm, you only need to specify xs.</p>
    <div class="row">
        <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
    </div>
    <div class="row">
        <div class="col-xs-6">.col-xs-6</div>
        <div class="col-xs-6">.col-xs-6</div>
    </div>

    <hr>

    <h3>Mixed: mobile, tablet, and desktop</h3>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-8">.col-xs-12 .col-sm-6 .col-lg-8</div>
        <div class="col-xs-6 col-lg-4">.col-xs-6 .col-lg-4</div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
        <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
        <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
    </div>

    <hr>

    <h3>Column clearing</h3>
    <p><a href="http://getbootstrap.com/css/#grid-responsive-resets">Clear floats</a> at specific breakpoints to prevent awkward wrapping with uneven content.</p>
    <div class="row">
        <div class="col-xs-6 col-sm-3">
            .col-xs-6 .col-sm-3
            <br>
            Resize your viewport or check it out on your phone for an example.
        </div>
        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>

        <!-- Add the extra clearfix for only the required viewport -->
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
        <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
    </div>

    <hr>

    <h3>Offset, push, and pull resets</h3>
    <p>Reset offsets, pushes, and pulls at specific breakpoints.</p>
    <div class="row">
        <div class="col-sm-5 col-md-6">.col-sm-5 .col-md-6</div>
        <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">.col-sm-5 .col-sm-offset-2 .col-md-6 .col-md-offset-0</div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-5 col-lg-6">.col-sm-6 .col-md-5 .col-lg-6</div>
        <div class="col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0">.col-sm-6 .col-md-5 .col-md-offset-2 .col-lg-6 .col-lg-offset-0</div>
    </div>


    </div> <!-- /container -->

</body>
</html>