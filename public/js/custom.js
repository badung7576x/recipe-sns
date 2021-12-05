$(document).ready(function() {
  $(".create-recipe-add-step").click(function() {
    var numItems = $(".recipe-step").length;
    if (numItems) {
      $(this).before(`
      <tr>
        <td class="create-recipe-td recipe-step">${numItems + 1}</td>
        <input type="hidden" name="recipe_step[]" class="create-recipe-input" value="${numItems + 1}"/>
        <td><input type="text" name="step_description[]" class="create-recipe-input"/></td>
      </tr>`);
    }
  });
});

$(document).ready(function() {
  $(".create-recipe-add-material").click(function() {
    $(this).before(`
        <tr>
        <td>
          <input type="text" name="material_name[]"/>
        </td>
        <td>
          <input type="text" name="material_quantity[]" class="ml-10"/>
        </td>
        <td>
          <input type="text" name="material_unit[]" class=""/>
        </td>
      </tr>
        `)
  });
});
