import React, {useState} from 'react';
import {Chess} from 'chess.js';
import {Chessboard} from 'react-chessboard';

const ChessGame = () => {
  const [game, setGame] = useState(new Chess());
  const [computerColor] = useState("b"); // 'b' for black, 'w' for white

  const makeComputerMove = () => {
    const moves = game.moves();
    if (moves.length > 0) {
      const randomMove = moves[Math.floor(Math.random() * moves.length)];
      game.move(randomMove);
      setGame(new Chess(game.fen())); // Update the game state
    }
  };

  const onDrop = (sourceSquare, targetSquare) => {
    const move = game.move({
      from: sourceSquare,
      to: targetSquare,
      promotion: "q", // Always promote to a queen for simplicity
    });

    if (move) {
      setGame(new Chess(game.fen())); // Update the game state
      setTimeout(() => {
        makeComputerMove(); // Trigger the computer's move
      }, 500);
    }
  };

  return (
    <div>
      <Chessboard
        position={game.fen()}
        onPieceDrop={onDrop}
        orientation={computerColor === "b" ? "white" : "black"}
      />
    </div>
  );
};

export default ChessGame;
