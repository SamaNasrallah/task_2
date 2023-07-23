

    $(document).ready(function() {
        // Event handler for the "Save" button (with ID "btn-add")
        $("#btn-primary").click(function() {
            alert("Added successfully");
        });
    
        // Event handler for the "Update" button (with ID "btn-update")
        $("#btn-update").click(function() {
            alert("Updated successfully");
        });
    
        $("#btn-delete").click(function(event) {
            alert("Delete successfully");
        });
        
        $(".btn-activation").each(function() {
            var btnId = $(this).attr("id");
            var formId = btnId.replace("btn-activation", "activationForm");
            $("#" + btnId).click(function(event) {
                var isActive = $(this).find(".fa-check-circle").length > 0;
                if (isActive) {
                    alert("Folder will become in_active!");
                } else {
                    alert("Folder will become active!");
                }

            });
        });


    });

