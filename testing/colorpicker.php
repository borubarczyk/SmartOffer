<label>Main
        <input type="color" id="colorpick1" value="#767631">
    </label>
    <label>header
        <input type="color" id="colorpick2" value="#767631">
    </label>
    <label>Background
        <input type="color" id="colorpick3" value="#767631">
    </label>
    <script>
        var theInput1 = document.getElementById("colorpick1");
        var theInput2 = document.getElementById("colorpick2");
        var theInput3 = document.getElementById("colorpick3");
        theInput1.addEventListener("input", function(){

        var theColor1 = theInput1.value;

        document.documentElement.style.setProperty('--main-color', theColor1);
        }, false);

        theInput2.addEventListener("input", function(){

        var theColor2 = theInput2.value;

        document.documentElement.style.setProperty('--main-color1', theColor2);
        }, false);

        theInput3.addEventListener("input", function(){

        var theColor3 = theInput3.value;

        document.documentElement.style.setProperty('--main-color2', theColor3);
        }, false);
    </script>