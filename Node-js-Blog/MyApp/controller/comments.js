    var express = require("express");
    var router  = express.Router({mergeParams: true});
    var Blog    = require("../models/blog");
    var Comment = require("../models/comment");  
  
  //============================
    //COMMENTS ROUTEs
    //============================
    router.get("/new", isLoggedIn, function(req, res){
        // find campground by id
        Blog.findById(req.params.id, function(err,blog){
            if(err){
                console.log(err);
            } else {
                 res.render("comments/new", {blog: blog});
            }
        })
    });
    
    
    router.post("/", isLoggedIn, function(req, res){
   //lookup campground using ID
       Blog.findById(req.params.id, function(err, blog){
           if(err){
               console.log(err);
               res.redirect("/blogs");
           } else {
            Comment.create(req.body.comment, function(err, comment){
               if(err){
                   console.log(err);
               } else {
                   //add username and it to commet
                   comment.author.id = req.user._id;
                   comment.author.username = req.user.username;
                   //save comment
                   comment.save();
                   
                   blog.comments.push(comment);
                   blog.save();
                   res.redirect('/blogs/' + blog._id);
               }
            });
           }
       });
       //create new comment
    });
    
    
    //middleware
    function isLoggedIn(req, res, next){
        if(req.isAuthenticated()){
            return next();
        }
        res.redirect("/login");
    }
    
    
    module.exports = router;