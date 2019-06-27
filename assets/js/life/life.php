<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Conway's Game of Life</title>
<meta name="description" content="A JavaScript version of Conway's Game of Life, based on the Hashlife-algorithm.">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<link rel="stylesheet" href="life.css" type="text/css">
<script src="life.js"></script>
<script src="formats.js"></script>
<script src="draw.js"></script>
<script src="macrocell.js"></script>
<script src="main.js"></script>

<link href="color-picker.min.css" rel="stylesheet">
<script src="color-picker.min.js"></script>

</head>
<body>
<div id="toolbar" style="display: none;">

    <div class="button" id="about_button">About</div>
    
    <div class="button" id="settings_button">Settings</div>
    <div id="export_button" class="button">Export</div>
    <div id="import_button" class="button">Import</div>
    <div class="button" id="clear_button">Clear</div>
    <div class="button" style="display: none" id="superstep_button">Superstep</div>
    <div class="button" id="step_button">Step</div>
    <div class="button" id="rewind_button">Back</div>
    <div class="button" id="run_button">Run</div>
    <table id="controls">
        <tr>
            <td title="Slower"><div id="slower_button">&#8592;</div></td>
            <td title="Faster"><div id="faster_button">&#8594;</div></td>
            <td title="Fit pattern"><div id="initial_pos_button">F</div></td>
            <td title="Zoom in"><div id="zoomin_button">+</div></td>
            <td title="Zoom out"><div id="zoomout_button">&ndash;</div></td>
        </tr>
        
    </table>
</div>
<div id="statusbar" style="display: none;">
    <div id="label_zoom" title="Zoom"></div>
    <div id="label_mou" title="Mouse Coordinates">0, 0</div>
    <div id="label_fps" title="Frames per Second">0</div>
    <div id="label_gen" title="Generation">0</div>
    <div id="label_pop" title="Population">0</div>
    <div id="label_step" title="Generation per Step">1</div>
    
    <span id="pattern_name" class="link" title="Pattern infos"></span>
</div>
<div id="overlay">
    <div id="about">
        
        <div id="notice">

        </div>

        <br>
        <br>
        <div id="about_main" style="display: none">
            If you encounter any bugs or have feedback, you can contact me at <a title="Click to show Email" href="?pattern=email">this email</a>.<br>
            <br>
            Click on the pattern name on the bottom left to get some informations about the current pattern.
            <br>
            <br>
            <a href="examples/" target="_blank">List of all patterns</a> &mdash;
            <a href="https://github.com/copy/life" target="_blank">Source code on Github</a> &mdash;
            <a href="https://github.com/copy/life/issues" target="_blank">Report an issue</a>
            <br>
            <br>
            <b>Controls:</b>
            <pre>
        Left mouse          - Move around
        Right mouse         - Create / Delete cells
        Mouse wheel         - Zoom

        Arrow keys, HJKL    - Move around
        +, -                - Zoom
        Space               - One generation forward
        Tab                 - Many generations forward
        Enter               - Run/Pause
        Backspace           - Rewind
        ]                   - Faster
        [                   - Slower
        Escape              - Close Popups
            </pre>
        </div>
        <br>
        <br>
        <br>
        <span class="button2" id="about_close" style="display: none">Ok</span>
    </div>
    <div id="import_dialog" style="display: none;">
        <h2>Import Pattern</h2>
        Supports .rle & .txt files
        <br>
        <textarea id = "text_import" placeholder="Paste pattern file here" id="import_text"></textarea>
        <br>
        <input type="file" id="import_file">
        <br>
        <br>
        <div id="import_info"></div>
        <br>
        <br>
        <br>
        <span id="import_submit" class="button2">Import</span>
        <span id="import_abort" class="button2">EXIT</span>
    </div>

    <div id="pattern_chooser" style="display: none;">
        Source: <a href="http://www.conwaylife.com/wiki/Main_Page" target="_blank">www.conwaylife.com</a>. Thanks!
        &mdash; <a href="examples/" target="_blank">List of all patterns</a>
        <div id="pattern_list"></div>
        <span class="button2" id="pattern_close">Close</span>
    </div>
    <div id="settings_dialog" style="display: none;">
        <h2>Settings</h2>
        <div class="left" id="select_rules">
            Rule<br>
            <small>
                Presets:
                <span class="link" data-rule="23/3">Conway</span>
                <span class="link" data-rule="1234/3">Maze</span>
                <span class="link" data-rule="012345678/3">Life Without Death</span>
                <span class="link" data-rule="34678/3678">Day & Night</span>
            </small>
        </div>
        <div class="right">
            <input type="text" id="rule">
        </div>
        <br>
        <div id = "fps_left" class="left">
            Max FPS
        </div>
        <div id = "fps_right" class="right">
            <input type="number" min="1" id="max_fps" style="width: 60px">
        </div>
        <br class="clear">
        <br>
        <div class="left">
            Generation step<br>
            <small>Only powers of 2</small>
        </div>
        <div class="right">
            <input type="number" step="any" id="gen_step" style="width: 60px">
        </div>
        <br>
        <br>
        <br>

        <hr>
        <br>
        <form id="background_color_submit">
            Dead Cells Color:
            <pre></pre>
            <input id="new_bg_color" type="text" />
            <input class = "submit_buttons" id="submit_bg_color" value="CHANGE" type="button" />
        </form>
        <br>
        <form id="cell_color_submit">
            Alive Cells Color:
            <pre></pre>
            <input id="new_cell_color" type="text" />
            <input class = "submit_buttons" id="submit_cell_color" value="CHANGE" type="button" />
        </form>
        <br>
        <hr>
        <br>
        <span id="settings_submit" class="button2">Save</span>
        <span id="settings_reset" class="button2">Reset</span>
        <span id="settings_abort" class="button2">EXIT</span>
        <span id="settings_background"></span>
    </div>
    <div id="loading_popup" style="display: none; font-size: 16px">
        <div style="text-align: center">
            <h2>LOADING</h2>
            Please wait.<br><br>
            
        </div>
    </div>
</div>
<script>document.getElementById("overlay").style.display = "none"</script>
</body>
</html>
