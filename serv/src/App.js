// App.jsx
import React from 'react';

const App = () => {
  return (
    <div class="bg-yellow-100 p-4">
      <h1>Site Maxime et Mehdi</h1>
      <p>Bouton pour avoir des crédits sociaux</p>
      <MyButton />
    </div>
  );
};

function MyButton() {
  return (
    <button>Je suis un bouton</button>
  );
}

export default App;
