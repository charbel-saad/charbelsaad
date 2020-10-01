const express = require('express')
const mongoose = require('mongoose')
const morgan =require('morgan')
const bodyParser = require('body-parser')

const userRoute = require('./routes/user')

mongoose.connect('mongodb://localhost:27017/rainmakersTable',{useNewUrlParser:true,useUnifiedTopology:true})
const db=mongoose.connection;

db.on('error',(err) =>{
    console.log(err)
})

db.once('open' ,() =>{
    console.log('Database  connected')
})

const app = express()

app.use(morgan('dev'))
app.use(bodyParser.urlencoded({extended :true}))
app.use(bodyParser.json())



app.listen(3000,() =>{

    console.log('listen on 3000')
})

app.use('/api/user',userRoute)

