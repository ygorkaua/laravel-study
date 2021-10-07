@extends('layout')

@section('css')
<link rel="stylesheet" type="text/css" href="/style/seriesIndex.css" />
@endsection

@section('content')
<div class="lateral-menu">
    <div class="logo">
        <a href="http://localhost:8000/series"><img src="icons/my-series-temp-logo.png" alt="My Series Logo"></a>
    </div>
    <div class="options">
        <ul>
            <a href="#">
                <div class="menu-list">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#b00000">
                        <g fill="none">
                            <path d="M0 0h24v24H0V0z" />
                            <path d="M0 0h24v24H0V0z" opacity=".87" />
                        </g>
                        <path d="M4 13c.55 0 1-.45 1-1s-.45-1-1-1-1 .45-1 1 .45 1 1 1zm0 4c.55 0 1-.45 1-1s-.45-1-1-1-1 .45-1 1 .45 1 1 1zm0-8c.55 0 1-.45 1-1s-.45-1-1-1-1 .45-1 1 .45 1 1 1zm4 4h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1s.45 1 1 1zm0 4h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1s.45 1 1 1zM7 8c0 .55.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1zm-3 5c.55 0 1-.45 1-1s-.45-1-1-1-1 .45-1 1 .45 1 1 1zm0 4c.55 0 1-.45 1-1s-.45-1-1-1-1 .45-1 1 .45 1 1 1zm0-8c.55 0 1-.45 1-1s-.45-1-1-1-1 .45-1 1 .45 1 1 1zm4 4h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1s.45 1 1 1zm0 4h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1s.45 1 1 1zM7 8c0 .55.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1z" />
                    </svg>
                    <li class="menu-button"><button>Menu</button></li>
                </div>
            </a>
            <a href="#">
                <div class="options-list">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <path d="M21 2H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h7v2H9c-.55 0-1 .45-1 1s.45 1 1 1h6c.55 0 1-.45 1-1s-.45-1-1-1h-1v-2h7c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 14H4c-.55 0-1-.45-1-1V5c0-.55.45-1 1-1h16c.55 0 1 .45 1 1v10c0 .55-.45 1-1 1z" />
                    </svg>
                    <li class="options-buttons"><button>Assistir</button></li>
                </div>
            </a>
            <a href="#">
                <div class="options-list">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V18c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-1.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05.02.01.03.03.04.04 1.14.83 1.93 1.94 1.93 3.41V18c0 .35-.07.69-.18 1H22c.55 0 1-.45 1-1v-1.5c0-2.33-4.67-3.5-7-3.5z" />
                    </svg>
                    <li class="options-buttons"><button>Amigos e Séries</button></li>
                </div>
            </a>
            <a href="#">
                <div class="options-list">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <g>
                            <rect fill="none" height="24" width="24" />
                        </g>
                        <g>
                            <g>
                                <path d="M15,9H9c-0.55,0-1,0.45-1,1v12c0,0.55,0.45,1,1,1h6c0.55,0,1-0.45,1-1V10C16,9.45,15.55,9,15,9z M12,14.25 c-0.69,0-1.25-0.56-1.25-1.25s0.56-1.25,1.25-1.25s1.25,0.56,1.25,1.25S12.69,14.25,12,14.25z" />
                                <path d="M7.82,6.82L7.82,6.82c0.35,0.35,0.9,0.38,1.3,0.1C9.93,6.34,10.93,6,12,6c1.07,0,2.07,0.34,2.88,0.91 c0.4,0.28,0.95,0.26,1.3-0.09l0,0c0.43-0.43,0.39-1.15-0.09-1.5C14.94,4.49,13.53,4,12,4c-1.53,0-2.94,0.49-4.09,1.32 C7.42,5.67,7.39,6.39,7.82,6.82z" />
                                <path d="M12,0C9.36,0,6.94,0.93,5.05,2.47c-0.46,0.38-0.5,1.07-0.08,1.49l0,0c0.36,0.36,0.93,0.39,1.32,0.07 C7.84,2.77,9.83,2,12,2c2.17,0,4.16,0.77,5.7,2.04c0.39,0.32,0.96,0.29,1.32-0.07l0,0c0.42-0.42,0.38-1.11-0.08-1.49 C17.06,0.93,14.64,0,12,0z" />
                            </g>
                        </g>
                    </svg>
                    <li class="options-buttons"><button>Minhas Séries</button></li>
                </div>
            </a>
            <a href="#">
                <div class="options-list">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <g>
                            <path d="M0,0h24v24H0V0z" fill="none" />
                            <path d="M0,0h24v24H0V0z" fill="none" />
                        </g>
                        <g>
                            <path d="M12,17.27l4.15,2.51c0.76,0.46,1.69-0.22,1.49-1.08l-1.1-4.72l3.67-3.18c0.67-0.58,0.31-1.68-0.57-1.75l-4.83-0.41 l-1.89-4.46c-0.34-0.81-1.5-0.81-1.84,0L9.19,8.63L4.36,9.04c-0.88,0.07-1.24,1.17-0.57,1.75l3.67,3.18l-1.1,4.72 c-0.2,0.86,0.73,1.54,1.49,1.08L12,17.27z" />
                        </g>
                    </svg>
                    <li class="options-buttons"><button>Séries Favoritas</button></li>
                </div>
            </a>
        </ul>
    </div>
    <div class="integrations">
        <ul>
            <p>Integrações</p>
            <a href="#">
                <div class="integration-list">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="48px" viewBox="0 0 24 24" width="48px" fill="#000000">
                        <g>
                            <rect fill="none" height="24" width="24" />
                        </g>
                        <g>
                            <g>
                                <path d="M15.82,13.55l-0.62-5.76C15.08,6.77,14.23,6,13.21,6H6.79C5.77,6,4.92,6.77,4.81,7.78l-0.62,5.76 C4.09,14.32,4.69,15,5.46,15c0.34,0,0.67-0.14,0.91-0.38L8,13h4l1.62,1.62c0.24,0.24,0.57,0.38,0.91,0.38 C15.31,15,15.91,14.32,15.82,13.55z M9.25,9.75H8V11H7.5V9.75H6.25v-0.5H7.5V8H8v1.25h1.25V9.75z M11.5,9C11.22,9,11,8.78,11,8.5 C11,8.22,11.22,8,11.5,8S12,8.22,12,8.5C12,8.78,11.78,9,11.5,9z M12.5,11c-0.28,0-0.5-0.22-0.5-0.5c0-0.28,0.22-0.5,0.5-0.5 s0.5,0.22,0.5,0.5C13,10.78,12.78,11,12.5,11z" />
                            </g>
                        </g>
                    </svg>
                    <li class="integration-buttons"><button>MyGames</button></li>
                </div>
            </a>
            <a href="#">
                <div class="integration-list">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000">
                        <g>
                            <rect fill="none" height="24" width="24" />
                        </g>
                        <g>
                            <g enable-background="new">
                                <path d="M20,4v12H5.17L4,17.17V4H20 M20,2H4C2.9,2,2,2.9,2,4v15.59c0,0.89,1.08,1.34,1.71,0.71L6,18h14c1.1,0,2-0.9,2-2V4 C22,2.9,21.1,2,20,2L20,2z" />
                            </g>
                        </g>
                    </svg>
                    <li class="integration-buttons"><button>Discord</button></li>
                </div>
            </a>
        </ul>
    </div>
    <div class="exit">
        <ul>
            <a href="#">
                <div class="exit-link">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <g>
                            <path d="M0,0h24v24H0V0z" fill="none" />
                        </g>
                        <g>
                            <g>
                                <path d="M5,5h6c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h6c0.55,0,1-0.45,1-1v0 c0-0.55-0.45-1-1-1H5V5z" />
                                <path d="M20.65,11.65l-2.79-2.79C17.54,8.54,17,8.76,17,9.21V11h-7c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h7v1.79 c0,0.45,0.54,0.67,0.85,0.35l2.79-2.79C20.84,12.16,20.84,11.84,20.65,11.65z" />
                            </g>
                        </g>
                    </svg>
                    <li class="exit-button"><button>Sair</button></li>
                </div>
            </a>
        </ul>
    </div>
</div>
<div class="main-content">
    <div class="header">
        <div class="search">
            <div class="dropdown">
                <p>Todas</p>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
                        <path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z" />
                    </svg>
                </a>
                <p class="separator">|</p>
                <input type="text" placeholder="Procurar Série..." name="series-search" id="">
            </div>
            <a href="#">
                <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M15.5 14h-.79l-.28-.27c1.2-1.4 1.82-3.31 1.48-5.34-.47-2.78-2.79-5-5.59-5.34-4.23-.52-7.79 3.04-7.27 7.27.34 2.8 2.56 5.12 5.34 5.59 2.03.34 3.94-.28 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0 .41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                </svg>
            </a>
        </div>
        <div class="watched-minutes">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                <circle cx="12" cy="17" r="1" />
                <circle cx="7" cy="12" r="1" />
                <circle cx="17" cy="12" r="1" />
                <path d="M12 3c-.55 0-1 .45-1 1v2c0 .55.45 1 1 1s1-.45 1-1v-.92c3.31.48 5.87 3.25 6 6.66.14 3.85-3.03 7.2-6.88 7.26C8.19 19.06 5 15.91 5 12c0-1.68.59-3.22 1.58-4.42l4.71 4.72c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L7.26 5.46c-.38-.38-1-.39-1.4-.02C4.1 7.07 3 9.4 3 12c0 5.04 4.14 9.12 9.21 9 4.7-.11 8.63-4.01 8.78-8.71C21.16 7.19 17.07 3 12 3z" />
            </svg>
            <div class="minutes">
                <h2>Minutos Assistidos</h2>
                <p class="minute">100 Min</p>
            </div>
        </div>
        <div class="icons">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z" />
                </svg>
            </a>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z" />
                </svg>
            </a>
        </div>
    </div>
    <div class="first-row">
        <div class="banner">
            <div class="text-banner">
                <p>Lancamento</p>
                <h2>Round 6</h2>
            </div>
            <div class="button-banner">
                <a href="#"><button>Assistir</button></a>
            </div>
        </div>
        <div class="friends-activity">
            <div class="title">
                <h2>Amigos e Séries</h2>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <rect fill="none" height="24" width="24" />
                        <path d="M14.29,5.71L14.29,5.71c-0.39,0.39-0.39,1.02,0,1.41L18.17,11H3c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h15.18l-3.88,3.88 c-0.39,0.39-0.39,1.02,0,1.41l0,0c0.39,0.39,1.02,0.39,1.41,0l5.59-5.59c0.39-0.39,0.39-1.02,0-1.41L15.7,5.71 C15.32,5.32,14.68,5.32,14.29,5.71z" />
                    </svg>
                </a>
            </div>
            <div>
                <img src="" alt="">
                <p class="name">Nome</p>
                <p class="activity">Atividade</p>
            </div>
            <div>
                <img src="" alt="">
                <p class="name">Nome</p>
                <p class="activity">Atividade</p>
            </div>
            <div>
                <img src="" alt="">
                <p class="name">Nome</p>
                <p class="activity">Atividade</p>
            </div>
        </div>
    </div>
    <div class="second-row">
        <div class="my-progression">
            <div class="title">
                <h2>Progressão</h2>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <rect fill="none" height="24" width="24" />
                        <path d="M14.29,5.71L14.29,5.71c-0.39,0.39-0.39,1.02,0,1.41L18.17,11H3c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h15.18l-3.88,3.88 c-0.39,0.39-0.39,1.02,0,1.41l0,0c0.39,0.39,1.02,0.39,1.41,0l5.59-5.59c0.39-0.39,0.39-1.02,0-1.41L15.7,5.71 C15.32,5.32,14.68,5.32,14.29,5.71z" />
                    </svg>
                </a>
            </div>
            <div>
                <img src="" alt="">
                <p class="name">Nome</p>
                <p class="activity">Episódio</p>
                <p class="percent">50.00%</p>
            </div>
            <div>
                <img src="" alt="">
                <p class="name">Nome</p>
                <p class="activity">Episódio</p>
                <p class="percent">50.00%</p>
            </div>
            <div>
                <img src="" alt="">
                <p class="name">Nome</p>
                <p class="activity">Episódio</p>
                <p class="percent">50.00%</p>
            </div>
            <div>
                <button class="all-series">Todas as séries</button>
            </div>
        </div>
        <div class="popular-series">
            <div class="title">
                <h2>Séries Populares</h2>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <rect fill="none" height="24" width="24" />
                        <path d="M14.29,5.71L14.29,5.71c-0.39,0.39-0.39,1.02,0,1.41L18.17,11H3c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h15.18l-3.88,3.88 c-0.39,0.39-0.39,1.02,0,1.41l0,0c0.39,0.39,1.02,0.39,1.41,0l5.59-5.59c0.39-0.39,0.39-1.02,0-1.41L15.7,5.71 C15.32,5.32,14.68,5.32,14.29,5.71z" />
                    </svg>
                </a>
            </div>
            <div>
                <img src="" alt="">
                <p class="name">Nome</p>
                <p class="description">Série muito boa</p>
                <p class="ranking">9.5</p>
                <button class="watch">Assistir</button>
            </div>
            <div>
                <img src="" alt="">
                <p class="name">Nome</p>
                <p class="description">Série muito boa</p>
                <p class="ranking">9.5</p>
                <button class="watch">Assistir</button>
            </div>
            <div>
                <img src="" alt="">
                <p class="name">Nome</p>
                <p class="description">Série muito boa</p>
                <p class="ranking">9.5</p>
                <button class="watch">Assistir</button>
            </div>
            <div>
                <img src="" alt="">
                <p class="name">Nome</p>
                <p class="description">Série muito boa</p>
                <p class="ranking">9.5</p>
                <button class="watch">Assistir</button>
            </div>
        </div>
        <div class="social-media-activity">
            <div class="buttons-social-media">
                <a href="#">
                    <button>Ultimas Atualizações</button>
                </a>
                <a href="#">
                    <button>Atualizar</button>
                </a>
            </div>
            <div>
                <div>
                    <img src="" alt="">
                    <p class="name">Nome</p>
                    <p class="source">via Twitter</p>
                </div>
                <p class="post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nemo velit suscipit tempora perferendis quaerat rerum nulla veritatis praesentium, non dolorem voluptatem iusto ullam at voluptatibus unde qui totam officia.</p>
            </div>
            <div>
                <div>
                    <img src="" alt="">
                    <p class="name">Nome</p>
                    <p class="source">via Twitter</p>
                </div>
                <p class="post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nemo velit suscipit tempora perferendis quaerat rerum nulla veritatis praesentium, non dolorem voluptatem iusto ullam at voluptatibus unde qui totam officia.</p>
            </div>
            <div>
                <div>
                    <img src="" alt="">
                    <p class="name">Nome</p>
                    <p class="source">via Twitter</p>
                </div>
                <p class="post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nemo velit suscipit tempora perferendis quaerat rerum nulla veritatis praesentium, non dolorem voluptatem iusto ullam at voluptatibus unde qui totam officia.</p>
            </div>
            <div class="my-post">
                <p>@seutwitter</p>
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                    <path d="M0,0h24v24H0V0z" fill="none" />
                    <path d="M4,18h11c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H4c-0.55,0-1,0.45-1,1v0C3,17.55,3.45,18,4,18z M4,13h8c0.55,0,1-0.45,1-1v0 c0-0.55-0.45-1-1-1H4c-0.55,0-1,0.45-1,1v0C3,12.55,3.45,13,4,13z M3,7L3,7c0,0.55,0.45,1,1,1h11c0.55,0,1-0.45,1-1v0 c0-0.55-0.45-1-1-1H4C3.45,6,3,6.45,3,7z M20.3,14.88L17.42,12l2.88-2.88c0.39-0.39,0.39-1.02,0-1.41l0,0 c-0.39-0.39-1.02-0.39-1.41,0l-3.59,3.59c-0.39,0.39-0.39,1.02,0,1.41l3.59,3.59c0.39,0.39,1.02,0.39,1.41,0l0,0 C20.68,15.91,20.69,15.27,20.3,14.88z" />
                    <path d="M0,0h24v24H0V0z" fill="none" />
                </svg>
                <input type="text" name="tweet" id="">
            </div>
        </div>
    </div>

    <!-- @if (!empty($message))
<div class="sucess-message">
    {{$message}}
</div>
@endif

<div class="series-list">
    <div class="now-watching">
        <h2>Assistindo no momento</h2>
        <ul class="series-group">
            @foreach ($seriesWatching as $serie => $url)
            <a href="<?= $url ?>">
                <li class="series-item"><?= $serie; ?></li>
            </a>
            @endforeach
        </ul>
    </div>
    <div class="to-watch">
        <h2>Para assistir</h2>
        <ul class="series-group">
            @foreach ($seriesToWatch as $serie)
            <a href="/series/{{$serie->id}}">
                <li class="series-item">{{ $serie->name; }}</li>
            </a>
            @endforeach
        </ul>
    </div>
</div>
<a class="btn-add" href="/series/adicionar">Adicionar Série</a> -->
    @endsection
