
 $(document).ready(function() {
 // show the table as soon as the DOM is ready
 $("#id_data").show();
 // shows the table on clicking the noted link
  $("#id_radio1").click(function() {
   $("#id_data").show("slow");
  });
 // hides the table on clicking the noted link
   $("#id_radio2").click(function() {
   $("#id_data").hide("fast");
   });
 });
 
  $(document).ready(function(){} – When document load.
  $("#id_data").show(); – shows div which contain id #id_data.
  $("#id_radio1").click(function() – Checks  radio button is clicked containing id #id_radio1.
  $("#id_data").show("slow"); – shows div containing id #id_data.
  $("#id_data").hide("fast"); -hides div when click on radio button containing id #id_data.