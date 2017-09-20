    var mongoose     = require("mongoose");
    var mongoosePaginate = require('mongoose-paginate');
    
    var blogSchema = new mongoose.Schema({
        title:      String,
        image:      String, // {type: String, default: "placeholder.png"}
        body:       String,
        created:    {type:Date, default: Date.now},
        author: {
          id: {
             type: mongoose.Schema.Types.ObjectId,
             ref: "User"
          },
          username: String
        },
        comments: [
            {
                type: mongoose.Schema.Types.ObjectId,
                ref: "Comment"
            }
        ]
    });
    
    blogSchema.plugin(mongoosePaginate);
    
    module.exports = mongoose.model("Blog", blogSchema);