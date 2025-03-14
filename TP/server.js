const express = require('express');
const { exec } = require('child_process');
const path = require('path');

const app = express();
const PORT = 3000;

// Route pour exécuter PHP
app.get('/', (req, res) => {
  exec('php index.php', (error, stdout) => {
    if (error) {
      res.status(500).send(error.message);
      return;
    }
    res.send(stdout);
  });
});

// Lancer le serveur
app.listen(PORT, () => {
  console.log(`Serveur Node.js sur http://localhost:${PORT}`);
});
