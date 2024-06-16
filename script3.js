document.addEventListener('DOMContentLoaded', function() {
    const preguntasYRespuestas = [
        {
            pregunta: "1-¿Qué es el bullying escolar?",
            respuestas: [
                "Un comportamiento repetitivo y agresivo hacia un estudiante o grupo de estudiantes por parte de otro u otros estudiantes.",
                "Un incidente aislado de pelea en la escuela.",
                "Una actividad recreativa entre compañeros.",
                "Un juego inofensivo."

            ],
            respuestaCorrecta: 1
        },
        {
            pregunta: "2-¿Cuáles son los diferentes tipos de bullying escolar?",
            respuestas: [
                "Físico, verbal, social y ciberbullying.",
                "Solo físico y verbal.",
                "Solo ciberbullying.",
                "Social y verbal."

            ],
            respuestaCorrecta: 1
        },
        {
            pregunta: "3-¿Cómo se puede identificar el bullying escolar?",
            respuestas: [
                "Es difícil de identificar y no hay señales claras.",
                "Se puede identificar por cambios en el comportamiento, problemas de salud física o emocional, y quejas de otros estudiantes o padres.",
                "Solo los maestros pueden identificarlo.",
                "No es necesario identificarlo."

            ],
            respuestaCorrecta: 2
        },
        {
            pregunta: "4-¿Cómo se puede prevenir el bullying escolar?",
            respuestas: [
                "Ignorando el problema.",
                "Educando y concienciando a estudiantes, padres y personal escolar.",
                "Castigando severamente a los acosadores.",
                "No se puede prevenir."

            ],
            respuestaCorrecta: 2
        },
        {
            pregunta: "5-¿Qué pueden hacer los padres para ayudar a prevenir el bullying escolar?",
            respuestas: [
                "Hablar con sus hijos sobre el bullying escolar, enseñarles habilidades sociales y emocionales, y trabajar con la escuela para abordar el problema.",
                "Ignorar el problema y esperar a que se resuelva solo.",
                "Culpar a la escuela por no prevenir el bullying.",
                "No hacer nada."

            ],
            respuestaCorrecta: 1
        },
        {
            pregunta: "6-¿Qué deben hacer los estudiantes si son víctimas de bullying escolar?",
            respuestas: [
                "Ignorar el acoso y esperar a que desaparezca.",
                "Buscar apoyo en adultos de confianza, denunciar el acoso y no enfrentarlo solos.",
                "Culpar a otros compañeros por no intervenir.",
                "No decir nada."

            ],
            respuestaCorrecta: 2
        },
        {
            pregunta: "7-¿Qué rol juegan los testigos en situaciones de bullying?",
            respuestas: [
                "Son tan responsables como los acosadores si no intervienen.",
                "No tienen ninguna responsabilidad en el acoso.",
                "Solo deben intervenir si son amigos de la víctima.",
                "Pueden ayudar a detener el acoso al informar a un adulto o autoridad."
        
            ],
            respuestaCorrecta: 4
        },
        {
            pregunta: "8-¿Qué consecuencias puede tener el bullying para la víctima?",
            respuestas: [
                "No suele tener consecuencias serias.",
                "Puede causar problemas de autoestima, ansiedad y depresión.",
                "Solo afecta durante el momento del acoso y luego se olvida.",
                "Solo tiene consecuencias si la víctima es sensible."
        
            ],
            respuestaCorrecta: 2
        },
        {
            pregunta: "9-¿Cómo pueden los padres detectar si su hijo está siendo acosado?",
            respuestas: [
                "Observando si hay cambios en su comportamiento y emociones.",
                "Esperando a que el hijo lo comunique directamente.",
                "Suponiendo que está bien si no dice nada.",
                "Revisando sus mensajes y redes sociales sin su consentimiento."
        
            ],
            respuestaCorrecta: 1
        },
        {
            pregunta: "10-¿Qué debería hacer un estudiante si ve que otro está siendo acosado?",
            respuestas: [
                "Unirse al acosador para no ser el siguiente objetivo.",
                "Ignorarlo y seguir con su día.",
                "Informar a un maestro o adulto de confianza inmediatamente.",
                "Grabar el incidente para tener pruebas."

            ],
            respuestaCorrecta: 3
        }
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
            document.getElementById('formularioPreguntas').innerHTML = '<p>Gracias por completar la encuesta. Tuviste ' + aciertos + ' aciertos.</p>';
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
