<table id="settingtabale">
<tr>
    <td>نام سند:</td>
    <td>
        <input id="nameofproject" type="text" value="" readonly="readonly"><span class="l-btn-left l-btn-icon-left" onclick="nameofproject();"><span class="l-btn-text l-btn-empty">&nbsp;</span><span class="l-btn-icon icon-edit">&nbsp;</span></span>
    </td>
</tr>
<tr>
    <td>plain</td>
    <td>
    <label class="switch" title="plain">
        <input class="switch" id="plain" type="checkbox" onclick="setTabs()">
        <span class="slider round"></span>
    </label><br>
    </td>
</tr>
<tr>
    <td>narrow</td>
    <td>
    <label class="switch" title="narrow">
        <input class="switch" id="narrow" type="checkbox" onclick="setTabs()">
        <span class="slider round"></span>
    </label><br>
    </td>
</tr>
<tr>
    <td>pill</td>
    <td>
    <label class="switch" title="pill">
        <input class="switch" id="pill" type="checkbox" onclick="setTabs()">
        <span class="slider round"></span>
    </label><br>
    </td>
</tr>
<tr>
    <td>justified</td>
    <td>
    <label class="switch" title="justified">
        <input class="switch" id="justified" type="checkbox" onclick="setTabs()">
        <span class="slider round"></span>
    </label><br>
    </td>
</tr>
<tr>
    <td>انتخاب قالب</td>
    <td>
        {$obj->themez}
    </td>
</tr>
</table>