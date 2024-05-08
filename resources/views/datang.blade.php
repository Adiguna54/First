<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
    /* #myAnimation {
  width: 50px;
  height: 50px;
  position: absolute;
  background-color: red;
} */
    #tulisan {
        position: absolute;
        bottom: 50px;
    }
</style>

<body>
    <!-- <div id ="myAnimation"></div></div> -->

    <!-- gray container parent -->
    <div class="bg-gray-600 h-screen flex items-center justify-center">
        <!-- testing javascript -->
        <!-- <p>
            <button onclick="myMoveRight()">Right</button>
        </p>
        <br>
        <p>
            <button onclick="myMoveLeft()">Left</button>
        </p> -->
        
        <!-- <button id="tes">click me</button> -->
        <!-- anak pertama  -->
        <div class="text-white" style="position: relative;">
            <h1 class="pb-48 font-mono text-7xl w-[500px]" id="tulisan">Let's Talk</h1>
            <!-- anak kedua -->
            <div class="flex justify-between gap-44 font-mono">
                <ul>
                    <li class="pb-3">Bali, Indonesia</li>
                    <li>Emadika Technology</li>
                    <li>Jalan Raya Abianbase,</li>
                    <li>No.20 , Badung, Bali - 80117,</li>
                    <li>Indonesia</li>
                </ul>

                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Project</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>

                <ul>
                    <li>IG FB</li>
                    <li>© 2024 Emadika Technology</li>
                    <li>Terms</li>
                    <li>Office Map</li>
                    <li><button onclick="window.print()">Print this Page</button></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- <div>
        <input type="text" value="{{$data}}"
        <h1>{{$data == "" ? "saya ganteng" : "saya jelek"}}</h1>
    </div> -->
    <script>
        // var x = document.getElementById('tulisan')
        // console.log(x)
        var id
        var pos = 0
        var isLeft = false;

        console.log(!isLeft);
        function myMoveRight() {
            var elem = document.getElementById("tulisan");
            // var pos = 0;
            clearInterval(id);
            id = setInterval(frame, 2);

            function frame() {
                if (pos >= 450 || pos < 0 )
                    isLeft = !isLeft
                // if (pos <= 0 )
                //     isLeft =true
                pos += isLeft ? 1 : -1;
                elem.style.right = pos + 'px';
                elem.style.left = pos + 'px';
                // if (isLeft) {
                //     if (pos == 450) {
                //         isLeft = false;
                //     }
                //     pos++;
                //     elem.style.right = pos + 'px';
                //     elem.style.left = pos + 'px';

                // } else {
                //     if (pos == 0) {
                //         isLeft = true
                //     }
                //     pos--;
                //     elem.style.right = pos + 'px';
                //     elem.style.left = pos + 'px';
                // }
            }

        }
        myMoveRight()
        // function myMoveLeft() {
        //     var elem = document.getElementById("tulisan");
        //     // var pos = 500;
        //     clearInterval(id);
        //     id = setInterval(frame, 2);

        //     function frame() {
        //         if (pos == 0) {
        //             // clearInterval(id);

        //         } else {
        //             pos--;
        //             elem.style.right = pos + 'px';
        //             elem.style.left = pos + 'px';
        //         }
        //     }
        // }

        // const isu = document.getElementById('tes')
        // isu.addEventListener("click", function() {
        //     alert("Yeahgahahahah")
        // })
    </script>
</body>

</html>