<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra Deslizante</title>
    <style>
        .value-display {
            font-size: 1.2em;
            font-weight: bold;
            display: flex;
        }

        input[type="range"] {
            width: 600px;
            height: 50px;
        }

        .color {
            background-color: green;
        }

        .color1 {
            background-color: blue;
        }
    </style>
</head>

<body>

    <input type="range" id="slider" min="0" max="260" value="0" oninput="updateValue(this.value)">
    <input class="value-display" type="number" id="sliderValue">


    <script>
        function updateValue(val) {
            var sliderValueElement = document.getElementById('sliderValue');
            sliderValueElement.value = val;

            // Primero eliminar todas las clases de color
            sliderValueElement.classList.remove('color', 'color1');

            // Agregar la clase correspondiente basada en el valor
            if (val >= 0 && val < 20) {
                sliderValueElement.classList.add('color');
            } else if (val >= 20 && val < 40) {
                sliderValueElement.classList.add('color1');
            }
        }
    </script>
</body>

</html>
