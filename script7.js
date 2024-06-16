document.addEventListener('DOMContentLoaded', function() {
    const preguntasYRespuestas = [
        {
            pregunta: "1-¿Has observado el lado positivo y generoso de los demás?",
            respuestas: [
                "si",
                "no"
            ]
        },
        {
            pregunta: "2-¿Alguien te ha ayudado en momentos difíciles?",
            respuestas: [
                "si",
                "no"
            ]
        },
        {
            pregunta: "3-¿Alguna vez has roto el corazón de alguien?",
            respuestas: [
                "si",
                "no"
            ]
        },
        {
            pregunta: "4-¿Has traicionado a alguien?",
            respuestas: [
                "si",
                "no"
            ]
        },
        {
            pregunta: "5-¿Has pensado en quitarte la vida?",
            respuestas: [
                "si",
                "no"
            ]
        },
        {
            pregunta: "6-¿Te sientes cómodo/a expresando tus emociones?",
            respuestas: [
                "si",
                "no"
            ]
        },
        {
            pregunta: "7-¿Te consideras una persona empática?",
            respuestas: [
                "si",
                "no"
            ]
        },
        {
            pregunta: "8-¿has ayudado a alguien?",
            respuestas: [
                "si",
                "no"
            ]
        },
        {
            pregunta: "9-¿Te consideras alguien sentimental?",
            respuestas: [
                "si",
                "no"
            ]
        },
        {
            pregunta: "10-¿Podrias decir que eres alguien explosivo?",
            respuestas: [
                "si",
                "no"
            ]
        },
    ];
    
    let preguntaActual = 0;
    let aciertos = 0; 

    function mostrarPregunta() {
        const contenedor = document.getElementById('formularioPreguntas');
        const preguntaYRespuestas = preguntasYRespuestas[preguntaActual];
        let htmlRespuestas = '';
        preguntaYRespuestas.respuestas.forEach((respuesta, respuestaCorrecta) => {
            htmlRespuestas += `
                <label>
                    <input type="radio" name="respuesta" value="${respuestaCorrecta}" required>
                    ${respuesta}
                </label>
            `;
        });

        contenedor.innerHTML = `
            <div class="pregunta">
                <p>${preguntaYRespuestas.pregunta}</p>
                ${htmlRespuestas}
                <button onclick="siguientePregunta()">Siguiente</button>
            </div>
        `;
    }
    
    window.siguientePregunta = function() {
        const respuestaSeleccionada = document.querySelector('input[name="respuesta"]:checked').value;
        if (parseInt(respuestaSeleccionada) === preguntasYRespuestas[preguntaActual].respuestaCorrecta) {
            aciertos++;
        }
        preguntaActual++;
        if (preguntaActual < preguntasYRespuestas.length) {
            mostrarPregunta();
        } else {
            document.getElementById('formularioPreguntas').innerHTML = '<p>Gracias por completar la encuesta. </p>';
        }
    };

    mostrarPregunta();
})

// swith
const swith = document.querySelector('.switch');

swith.addEventListener('click', e => {
    swith.classList.toggle('active');
    document.body.classList.toggle("active");
})
