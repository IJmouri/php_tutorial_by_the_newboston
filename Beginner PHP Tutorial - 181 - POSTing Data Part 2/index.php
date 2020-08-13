<html>

<head>
    <script type="text/javascript">
        function insert(){
            if(window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
            }

            xmlhttp.onreadystatechange = function () {
                if( xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    
                }
            }
        }
    </script>

</head>

<body>
Insert: <input type="text" id="text" name="text"> <input type="button"  value="Submit" onclick="insert();">
</body>

</html>