var languages = ["Html", "Php", "JavaScript", "ActionScript", "AppleScript", "Asp", "Lisp", "Perl", "Python"];

        $(document).ready(function () {
            $("#BDate").datepicker();

            $("#PLanguage").autocomplete({
                source: languages
            });

            $("form").submit(function (event) {
                var isValid = true;
                var email = $("#email").val();
                var website = $("#website").val();
                var pLanguage = $("#PLanguage").val();

                if (!isValidEmail(email)) {
                    alert("Invalid email address");
                    isValid = false;
                }

                if (!isValidUrl(website)) {
                    alert("Invalid website URL");
                    isValid = false;
                }

                if (pLanguage.trim() === "") {
                    alert("Please enter a programming language");
                    isValid = false;
                }

                if (!isValid) {
                    event.preventDefault(); // Prevent form submission
                }
            });
        });

        function isValidEmail(email) {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function isValidUrl(url) {
            var urlRegex = /^(ftp|http|https):\/\/[^ "]+$/;
            return urlRegex.test(url);
        }