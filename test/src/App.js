// App.jsx
import React from 'react';

const App = () => {
  return (
    <div>
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
