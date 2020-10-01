const mongoose  = require('mongoose')
const Schema = mongoose.Schema

const userSchema    = new Schema({

    id:{
        type:Number
    },

    fname:{
        type:String
    },
    lname:{
        type:String
    },
    username:{
        type:String
    },
    email:{
        type:String
    },
    age:{
        type:Number
    }
    

})

const userModel =mongoose.model('userModel',userSchema)

module.exports = userModel