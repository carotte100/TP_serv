// App.jsx
import React from 'react';

const App = () => {
  return (
    <div class="bg-yellow-100 p-4">
      <h1>Bienvenue dans mon projet React ! 🚀</h1>
      <p>Voila mon boutton.</p>
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
