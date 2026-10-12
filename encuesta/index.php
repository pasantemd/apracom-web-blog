<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votación PBX | Apracom</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2563eb;
            --secondary: #10b981;
            --neutral: #64748b;
            --bg: #f0f4f8;
            --white: #ffffff;
        }

        *, *::before, *::after { box-sizing: border-box; }

        html, body { width: 100%; overflow-x: clip; }

        body {
            font-family: 'Outfit', sans-serif; background: var(--bg); margin: 0;
            display: flex; justify-content: center; align-items: center; min-height: 100vh;
            position: relative; padding: 20px;
        }

        .shape { position: absolute; filter: blur(80px); z-index: -1; opacity: 0.4; animation: float 10s infinite alternate; }
        .shape-1 { width: 300px; height: 300px; background: var(--primary); top: -10%; left: -5%; }
        .shape-2 { width: 250px; height: 250px; background: var(--secondary); bottom: -5%; right: -5%; }

        @keyframes float { from { transform: translate(0,0); } to { transform: translate(30px, 50px); } }

        .container {
            background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(10px);
            padding: 3rem 2rem; border-radius: 40px; width: 100%; max-width: 550px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1); text-align: center;
        }

        .badge {
            display: inline-block; background: #0f172a; color: white;
            padding: 6px 16px; border-radius: 50px; font-size: 0.7rem; font-weight: 700;
            letter-spacing: 2px; margin-bottom: 1.5rem;
        }

        h1 { font-weight: 800; font-size: 2.5rem; margin: 0; color: #0f172a; letter-spacing: -2px; }

        .welcome-text { color: #475569; font-size: 1rem; line-height: 1.6; margin: 1.5rem 0 2rem; }

        .option-card {
            background: var(--white); border-radius: 25px; padding: 1.5rem;
            margin-bottom: 1rem; border: 1px solid #e2e8f0; transition: 0.3s;
            display: flex; flex-direction: column; gap: 10px;
        }

        .option-card:hover { transform: translateY(-5px); border-color: var(--primary); }

        .card-top { display: flex; justify-content: space-between; align-items: center; }
        .card-top span { font-weight: 700; color: #1e293b; }

        audio { width: 100%; height: 35px; }

        .btn-vote {
            background: #0f172a; color: white; border: none; padding: 8px 20px;
            border-radius: 12px; font-weight: 600; cursor: pointer; transition: 0.3s;
        }

        .btn-vote:hover { background: var(--primary); }

        /* Estilo para opción NINGUNA */
        .none-card { background: #f1f5f9; border: 2px dashed #cbd5e1; }
        .btn-none { background: #64748b; }

        /* Resultados y Comentarios */
        .results-area { display: none; margin-top: 2.5rem; animation: fadeIn 0.8s ease; }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

        .bar-group { margin-bottom: 1.2rem; text-align: left; }
        .progress-track { background: #e2e8f0; height: 12px; border-radius: 10px; overflow: hidden; }
        .progress-fill { height: 100%; width: 0%; transition: width 1.5s ease-in-out; background: var(--primary); }

        .comment-box {
            margin-top: 2rem; text-align: left; background: #fff; padding: 1.5rem;
            border-radius: 20px; border: 1px solid #e2e8f0;
        }
        textarea {
            width: 100%; border: 1px solid #e2e8f0; border-radius: 10px; padding: 10px;
            font-family: inherit; resize: none; margin-top: 10px; box-sizing: border-box;
        }
        .btn-send {
            background: var(--primary); color: white; border: none; padding: 10px;
            width: 100%; border-radius: 10px; margin-top: 10px; cursor: pointer; font-weight: 600;
        }
    </style>
</head>
<body>

<div class="shape shape-1"></div>
<div class="shape shape-2"></div>

<div class="container">
    <div class="badge">PBX 04-3755215</div>
    <h1>APRACOM</h1>
    
    <div class="welcome-text">
        Hola, has sido seleccionado para elegir nuestro próximo <b>PBX</b>. Escucha y vota por tu favorita o dinos si prefieres otra opción.
    </div>

    <div class="option-card">
        <div class="card-top">
            <span>🎙️ Opción A</span>
            <button class="btn-vote" id="btn1" onclick="votar(1)">VOTAR</button>
        </div>
        <audio controls src="audio1.mp3"></audio>
    </div>

    <div class="option-card">
        <div class="card-top">
            <span>🎙️ Opción B</span>
            <button class="btn-vote" id="btn2" onclick="votar(2)">VOTAR</button>
        </div>
        <audio controls src="audio2.mp3"></audio>
    </div>

    <div class="option-card none-card">
        <div class="card-top">
            <span>🚫 Ninguna me convence</span>
            <button class="btn-vote btn-none" id="btn3" onclick="votar(3)">SELECCIONAR</button>
        </div>
    </div>

    <div id="results" class="results-area">
        <h2 style="font-size: 1.2rem;">Resultados en Tiempo Real</h2>
        
        <div class="bar-group">
            <div style="display:flex; justify-content:space-between; font-size:0.8rem; margin-bottom:5px">
                <span>Opción A</span> <span id="txt1">0%</span>
            </div>
            <div class="progress-track"><div id="bar1" class="progress-fill"></div></div>
        </div>

        <div class="bar-group">
            <div style="display:flex; justify-content:space-between; font-size:0.8rem; margin-bottom:5px">
                <span>Opción B</span> <span id="txt2">0%</span>
            </div>
            <div class="progress-track"><div id="bar2" class="progress-fill" style="background:var(--secondary)"></div></div>
        </div>

        <div class="bar-group">
            <div style="display:flex; justify-content:space-between; font-size:0.8rem; margin-bottom:5px">
                <span>Ninguna</span> <span id="txt3">0%</span>
            </div>
            <div class="progress-track"><div id="bar3" class="progress-fill" style="background:var(--neutral)"></div></div>
        </div>

        <div class="comment-box" id="commentSection">
            <label style="font-weight:600; font-size:0.9rem;">¿Tienes algún comentario o sugerencia?</label>
            <textarea id="commentText" rows="3" placeholder="Escribe aquí tu opinión..."></textarea>
            <button class="btn-send" onclick="enviarComentario()">Enviar Comentario</button>
        </div>
        <p id="graciasMsg" style="display:none; color:var(--secondary); font-weight:600; margin-top:10px;">¡Gracias por tus comentarios!</p>
    </div>
</div>

<script>
    let dataVotos = { v1: 0, v2: 0, v3: 0 };

    async function init() {
        try {
            const r = await fetch('votos.json?t=' + Date.now());
            dataVotos = await r.json();
        } catch (e) { console.log("Iniciando..."); }
    }

    async function votar(op) {
        document.getElementById('btn1').disabled = true;
        document.getElementById('btn2').disabled = true;
        document.getElementById('btn3').disabled = true;

        const v = {v1: op===1?1:0, v2: op===2?1:0, v3: op===3?1:0};

        try {
            const resp = await fetch('save.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify(v)
            });
            dataVotos = await resp.json();
            render();
        } catch (err) { alert("Error al votar"); }
    }

    function render() {
        const total = dataVotos.v1 + dataVotos.v2 + dataVotos.v3;
        const p1 = total > 0 ? Math.round((dataVotos.v1 / total) * 100) : 0;
        const p2 = total > 0 ? Math.round((dataVotos.v2 / total) * 100) : 0;
        const p3 = total > 0 ? Math.round((dataVotos.v3 / total) * 100) : 0;

        document.getElementById('results').style.display = 'block';
        
        setTimeout(() => {
            document.getElementById('bar1').style.width = p1 + '%';
            document.getElementById('bar2').style.width = p2 + '%';
            document.getElementById('bar3').style.width = p3 + '%';
            document.getElementById('txt1').innerText = p1 + '%';
            document.getElementById('txt2').innerText = p2 + '%';
            document.getElementById('txt3').innerText = p3 + '%';
        }, 100);
    }

    async function enviarComentario() {
        const text = document.getElementById('commentText').value;
        if(!text) return alert("Escribe algo antes de enviar");

        await fetch('save_comment.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({ comentario: text })
        });

        document.getElementById('commentSection').style.display = 'none';
        document.getElementById('graciasMsg').style.display = 'block';
    }

    init();
</script>
</body>
</html>
