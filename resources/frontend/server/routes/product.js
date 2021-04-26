const express = require('express');
const router= express.Router();
const axios= require('axios'); //http router purpose


//get post 
const apiUrl= 'https://jsonplaceholder.typicode.com';

//here we use node.js method of using axios

//here we send ---Resulting Data from api to Frontend
router.get('/', (req,res)=>{
     axios.get(`${apiUrl}/posts`).then(posts => {
          //res.status(200).json(posts.data)
          res.json(posts.data);
     })

     .catch(error => {
          res.status(500).send(error)
     })
});

module.exports=router;
