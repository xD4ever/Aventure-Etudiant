<script>
        // JavaScript to toggle between Sign Up and Sign In forms
        document.getElementById("signInButton").addEventListener("click", function() {
            document.getElementById("Signup").style.display = "none";
            document.getElementById("sign").style.display = "block";
        });

        document.getElementById("signUPButton").addEventListener("click", function() {
            document.getElementById("Signup").style.display = "block";
            document.getElementById("sign").style.display = "none";
        });
    </script>