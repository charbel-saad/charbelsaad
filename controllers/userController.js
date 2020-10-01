const userModel = require('../models/userModel')

const index = (req,res,next) =>{
    userModel.find()
    .then(response =>{
        res.json({
            response
        })
    })
    .catch(error =>{
        res.json({
            message :'an error occured '
        })
    })
}
//////////////////


const show =(req,res,next) =>{
    let userID = req.body.userID
    userModel.findById(userID)
    .then(response =>{
        res.json({
            response
        })
    })
    .catch(error =>{
        res.json({
            message :'an error occured '
        })
    })
}

////////////
const store =(req,res,next) =>{
    let user = new userModel({
        id:req.body.id,
        fname:req.body.name,
        lname:req.body.lname,
        username:req.body.username,
        email:req.body.email,
        age:req.body.id

    })
    user.save()
    .then(response =>{
        res.json({
            message:'Employee  added  Succefuly'
        })
    })
    .catch(error =>{
        res.json({
            message :'an error occured while adding  '
        })
    })
}
////////////////////

const update =(req,res,next) =>{
    let userID = req.body.userID
    let updatedData ={
        id:req.body.id,
        fname:req.body.name,
        lname:req.body.lname,
        username:req.body.username,
        email:req.body.email,
        age:req.body.id
    }
    userModel.findByIdAndUpdate(userID,{$set:updatedData})
    .then(response =>{
        res.json({
            message:'updated succefuly '
        })
    })
    .catch(error =>{
        res.json({
            message :'an error occured while updating  '
        })
    })
}

///////////////////////

const destroy =(req,res,next) =>{
    let userID = req.body.userID
    userModel.findByIdAndRemove(userID)
    .then(response =>{
        res.json({
            message:'user  deleted  Succefuly'
        })
    })
    .catch(error =>{
        res.json({
            message :'an error occured while deleting  '
        })
    })
}


module.exports = {
        index,show,store,update,destroy
}