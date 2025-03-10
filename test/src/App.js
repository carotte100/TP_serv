// App.jsx
import React from 'react';

const App = () => {
  return (
    <div style={styles.container}>
      <h1>Bienvenue dans mon projet React ! 🚀</h1>
      <p>Ceci est un composant de base.</p>
    </div>
  );
};

const styles = {
  container: {
    display: 'flex',
    flexDirection: 'column',
    justifyContent: 'center',
    alignItems: 'center',
    height: '100vh',
    backgroundColor: '#f4f4f4',
    fontFamily: 'Arial, sans-serif',
  },
};

export default App;
