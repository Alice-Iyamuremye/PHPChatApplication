<!DOCTYPE html>
<html>

<body>

    <p>Click the button to wait 3 seconds, then alert "Hello".</p>
    <h1>After clicking away the alert box, an new alert box will appear in 3 seconds. This goes on forever...</h1>
    <button onclick="keepfindingtext('dd')">Try it</button>
    <button onclick="end_get_messages()">Remove it</button>

    <script>

        function dan(daniel = "paris") { alert(daniel); }
        var stol = "";
        function end_get_messages() {
            clearInterval(settfunc);
        }


        function get_messages_again(l) {

            url = "private/find_messages.php?chat=" + l;
            let xhr = new XMLHttpRequest();
            xhr.open("GET", url, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log("yes");
                    var d = new Date();
                    var t = d.toLocaleTimeString();
                    let result = xhr.responseText + t;
                    let target = document.querySelector("h1");
                    target.innerHTML = result;
                }
            }
            xhr.send();
        }

        var settfunc = "";
        function keepfindingtext(l) {
            const lp = l;
            settfunc = setInterval(get_messages_again, 1050, l);
        }


    </script>

</body>

</html>