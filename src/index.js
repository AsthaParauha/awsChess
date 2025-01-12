import React from "react";
import ReactDOM from "react-dom/client";
import ChessGame from "./App.js";

function startChessGame(){
    const rootElement=document.getElementById('root');
    rootElement.style.display='block';

    const root = ReactDOM.createRoot(rootElement);
    root.render(<ChessGame/>);
    document.getElementById('midpart').style.display='none';
}

document.addEventListener('DOMContentLoaded', ()=>{
    const play_button=document.getElementById('playnow');
    play_button.addEventListener('click', startChessGame);
});