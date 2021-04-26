const express = require('express');
const app = express();
const path= require('path');
const port = 4000;


const api= require('./server/routes/product');

app.use(express.static(path.join(__dirname, 'dist/Demo')))

app.use('/product', api);

app.get('*', (req,res)=> {
   res.sendFile(path.join(__dirname, 'dist/Demo/index.html'))
});

app.listen(port, () => {
    console.log(api);
  });