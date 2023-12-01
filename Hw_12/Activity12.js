$(document).ready(function() {
    // Add click event handlers to the sidebar links
    $("#nav_list a").click(function(e) {
      e.preventDefault(); // Prevent the default link behavior
  
      var jsonFile = $(this).attr("title") + ".json"; // Get the JSON file name from the link's title attribute
  
      // Clear the content in the main element
      $("main").empty();
  
      // Make an Ajax request to retrieve the speaker data from the JSON file
      $.ajax({
        url: jsonFile,
        dataType: "json",
        success: function(data) {
          var speaker = data.speakers[0]; // Assuming there is only one speaker in each JSON file
  
          // Create HTML elements to display the speaker's information
          var image = $("<img>").attr("src", speaker.image);
          var heading = $("<h2>").html(speaker.month + "<br>" + speaker.speaker);
          var paragraph = $("<p>").text(speaker.text);
  
          // Append the elements to the main element
          $("main").append(image, heading, paragraph);
        },
        error: function() {
          console.log("Error loading JSON file.");
        }
      });
    });
  });
  