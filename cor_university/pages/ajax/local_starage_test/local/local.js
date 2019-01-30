/* jStorage is a simple wrapper plugin for Prototype, MooTools and jQuery to cache data (string, numbers, objects, even XML nodes) on browser side. Note that functions, DOM nodes, host objects and such can not be saved.
Website: http://www.jstorage.info/
*/

//Clear fields function
function clear_all() {
  $('#key').val('');
  $('#value').val('');
}

//Store Data
$("#submit").click(function() {

  //Var Key and Value
  var the_key = $('#key').val();
  var the_value = $('#value').val();

  //Check if Key or Value is empty
  if ($.trim(the_key) == '' || $.trim(the_value) == '') {
    $('.notice').text('Please enter a KEY and a VALUE');
  }

  //If not empty then store data
  else {
    $.jStorage.set(the_key, the_value);
    clear_all();
    $('.notice').html(
      "Data saved. <br /> You can now retrieve it with: $.jStorage.get('" + the_key + "') <br />" +
      "where <strong>" + the_key + "</strong> is the <u>KEY</u> you defined, and <strong>" + the_value + "</strong> is the <u>VALUE</u> you defined." +
      "<br /> <br /><strong>Example: $.jStorage.get('" + the_key + "')" +
      " » Returns: " + $.jStorage.get(the_key) + "</strong><br /> <br />You can check the value in the Developer Tools of your browser on: Resources -> Local Storage -> https://s.codepen.io -> jStorage"
    );
  }
});

//Clear Data
$("#clear").click(function() {
  $.jStorage.flush();
  clear_all();
  $('.notice').text('Data cleared');
});