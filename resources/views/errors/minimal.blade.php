<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}code{font-size:1em}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}code{font-family:Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-gray-400{--border-opacity:1;border-color:#cbd5e0;border-color:rgba(203,213,224,var(--border-opacity))}.border-t{border-top-width:1px}.border-r{border-right-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-xl{max-width:36rem}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.uppercase{text-transform:uppercase}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.tracking-wider{letter-spacing:.05em}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@-webkit-keyframes spin{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@keyframes spin{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@-webkit-keyframes ping{0%{transform:scale(1);opacity:1}75%,to{transform:scale(2);opacity:0}}@keyframes ping{0%{transform:scale(1);opacity:1}75%,to{transform:scale(2);opacity:0}}@-webkit-keyframes pulse{0%,to{opacity:1}50%{opacity:.5}}@keyframes pulse{0%,to{opacity:1}50%{opacity:.5}}@-webkit-keyframes bounce{0%,to{transform:translateY(-25%);-webkit-animation-timing-function:cubic-bezier(.8,0,1,1);animation-timing-function:cubic-bezier(.8,0,1,1)}50%{transform:translateY(0);-webkit-animation-timing-function:cubic-bezier(0,0,.2,1);animation-timing-function:cubic-bezier(0,0,.2,1)}}@keyframes bounce{0%,to{transform:translateY(-25%);-webkit-animation-timing-function:cubic-bezier(.8,0,1,1);animation-timing-function:cubic-bezier(.8,0,1,1)}50%{transform:translateY(0);-webkit-animation-timing-function:cubic-bezier(0,0,.2,1);animation-timing-function:cubic-bezier(0,0,.2,1)}}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        <style>
            * {
                border: 0 !important;
                box-sizing: border-box !important;
                margin: 0 !important;
                padding: 0 !important;
            }
            :root {
                font-size: calc(16px + (20 - 16)*(100vw - 320px)/(1024 - 320)) !important;
            }
            body {
                background: #f1f1f1  !important;
                color: #242424 !important;
                font: 1em "Hind", Arial, sans-serif !important;
                line-height: 1.5 !important;
            }
            .max-w-xl {
                max-width: 100%;
            }
            .code {
                border-right: 2px solid;
                font-size: 16px !important;
                padding: 0 15px 0 15px;
                text-align: left !important;
            }
            .message{
                text-align: left;
            }
            a {
                color: #2762f3 !important;
                text-decoration: none !important;
            }
            a:hover {
                text-decoration: underline !important;
            }
            a:active {
                color: #0c48db !important;
            }
            a:visited {
                color: #5785f6 !important;
            }
            h1 {
                font: 2em "Ubuntu", Arial, sans-serif ;
                line-height: 1.5 !important;
                margin-bottom: .75em !important;
            }
            p, ul {
                margin-bottom: 1.5em !important;
            }
            ul {
                margin-left: 1.5em !important;
            }
            body, canvas {
                display: block !important;
            }
            canvas {
                display: block !important;
                margin: 0 auto 1.5em auto !important;
                width: 100% !important;
                height: auto !important;
                -webkit-tap-highlight-color: transparent !important;
            }
            .wrap {
                margin: auto !important;
                padding: 1.5em !important;
                max-width: 37.5em !important;
            }
            @media (prefers-color-scheme: dark) {
                body {
                    background: #242424 !important;
                    color: #f1f1f1 !important;
                }
                a {
                    color: #5785f6 !important;
                }
                a:active {
                    color: #2762f3 !important;
                }
                a:visited {
                    color: #87a9f9 !important;
                }    
            }
            @media (min-width: 200px) and (max-width: 767px) {
                .flex-center {
                    display: inline-block !important;
                }
            }
        </style>
        
        <script>
            window.addEventListener("DOMContentLoaded",game);
        
            function game() {
                var canvas = document.querySelector("canvas"),
                    c = canvas.getContext("2d"),
                    W = canvas.width,
                H = canvas.height,
                S = 2,
                assets = [
                    "https://i.ibb.co/dDcTzrQ/nowhere.png",
                    "https://i.ibb.co/S7zPTv5/tumbleweed.png"
                ],
                sprites = [],
                score = 0,
                world = {
                    friction: 0.1,
                    gravity: 0.1
                },
                tumbleweed = {
                    inPlay: false,
                    x: -160,
                    y: 200,
                    r: 32,
                    rotation: 0,
                    xVel: 11.5,
                    yVel: 0,
                    mass: 2.5,
                    restitution: 0.3
                },
                loadSprite = url => {
                    return new Promise((resolve,reject) => {
                        let sprite = new Image();
                        sprite.src = url;
                        sprite.onload = () => {
                            resolve(sprite);
                        };
                        sprite.onerror = () => {
                            reject(url);
                        };
                    });
                },
                spritePromises = assets.map(loadSprite),
                applyForce = e => {
                    let ex = e.clientX - canvas.offsetLeft,
                        ey = e.clientY - (canvas.offsetTop - window.pageYOffset);
        
                    ex = ex / canvas.offsetWidth * W;
                    ey = ey / canvas.offsetHeight * H;
        
                    let insideX = Math.abs(ex - tumbleweed.x) <= tumbleweed.r,
                        insideY = Math.abs(ey - tumbleweed.y) <= tumbleweed.r;
        
                    if (insideX && insideY) {
                        let xForce = tumbleweed.x - ex, 
                            yForce = tumbleweed.y - ey,
                            xAccel = xForce / tumbleweed.mass,
                            yAccel = yForce / tumbleweed.mass;
        
                        tumbleweed.xVel += xAccel;
                        tumbleweed.yVel += yAccel;
        
                        ++score;
                        
                        // when enabled, the tumbleweed will be allowed to touch the left side after rolling in
                        if (!tumbleweed.inPlay)
                            tumbleweed.inPlay = true;
                    }
                },
                update = () => {
                    // A. Background
                    c.clearRect(0,0,W,H);
                    c.drawImage(sprites[0],0,0,W,H);
        
                    // B. Tumbleweed
                    tumbleweed.x += tumbleweed.xVel;
                    
                    // 1. Friction to the right
                    if (tumbleweed.xVel > 0) {
                        tumbleweed.xVel -= world.friction;
                        if (tumbleweed.xVel < 0)
                            tumbleweed.xVel = 0;
                    
                    // 2. Friction to the left
                    } else if (tumbleweed.xVel < 0) {
                        tumbleweed.xVel += world.friction;
                        if (tumbleweed.xVel > 0)
                            tumbleweed.xVel = 0;
                    }
                    
                    // 3. Horizontal collision
                    let hitLeftBound = tumbleweed.x <= tumbleweed.r && tumbleweed.inPlay,
                        hitRightBound = tumbleweed.x >= W - tumbleweed.r;
        
                    if (hitLeftBound)
                        tumbleweed.x = tumbleweed.r;
                    else if (hitRightBound)
                        tumbleweed.x = W - tumbleweed.r;
        
                    if (hitLeftBound || hitRightBound)
                        tumbleweed.xVel *= -tumbleweed.restitution;
                    
                    // 4. Vertical collision
                    tumbleweed.y += tumbleweed.yVel;
                    tumbleweed.yVel += world.gravity;
        
                    let hitTopBound = tumbleweed.y <= tumbleweed.r,
                        hitBottomBound = tumbleweed.y >= H - tumbleweed.r;
        
                    if (hitTopBound) {
                        tumbleweed.y = tumbleweed.r;
        
                    } else if (hitBottomBound) {
                        tumbleweed.y = H - tumbleweed.r;
                        score = 0;
                    }
                    if (hitTopBound || hitBottomBound)
                        tumbleweed.yVel *= -tumbleweed.restitution;
                    
                    // 5. Rotation
                    tumbleweed.rotation += tumbleweed.xVel;
        
                    if (tumbleweed.rotation >= 360)
                        tumbleweed.rotation -= 360;
                    else if (tumbleweed.rotation < 0)
                        tumbleweed.rotation += 360;
                    
                    // 6. Drawing
                    c.save();
                    c.translate(tumbleweed.x,tumbleweed.y);
                    c.rotate(tumbleweed.rotation * Math.PI/180);
                    c.drawImage(
                        sprites[1],
                        -tumbleweed.r,
                        -tumbleweed.r,
                        tumbleweed.r * 2,
                        tumbleweed.r * 2
                    );
                    c.translate(-tumbleweed.x,-tumbleweed.y);
                    c.restore();
        
                    // C. Score
                    if (score > 0) {
                        c.fillStyle = "#7f7f7f";
                        c.font = "48px Hind, sans-serif";
                        c.textAlign = "center";
                        c.fillText(score,W/2,48);
                    }
                },
                render = () => {
                    update();
                    requestAnimationFrame(render);
                };
            
            // ensure proper resolution
            canvas.width = W * S;
            canvas.height = H * S;
            c.scale(S,S);
            
            // load sprites
            Promise.all(spritePromises).then(loaded => {
                for (let sprite of loaded)
                    sprites.push(sprite);
        
                render();
                canvas.addEventListener("click",applyForce);
        
            }).catch(urls => {
                console.log(urls+" couldn???t be loaded");
            });
            }
        </script>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <div class="flex items-center pt-8 sm:justify-start sm:pt-0">
                    <div class="px-4 text-lg text-gray-500 border-r border-gray-400 tracking-wider">
                        @yield('code')
                    </div>

                    <div class="ml-4 text-lg text-gray-500 uppercase tracking-wider">
                        @yield('message')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
