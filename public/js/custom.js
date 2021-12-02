$(document).ready(function () {
    $(".create-recipe-add-step").click(function () {
        var numItems = $(".recipe-step").length;
        if (numItems) {
            $(this).before('<tr><td class="create-recipe-td recipe-step">'+(numItems+1)+'</td><td><input type="text" name="step[]" class="create-recipe-input"/></td></tr>')
        }
    });
});
