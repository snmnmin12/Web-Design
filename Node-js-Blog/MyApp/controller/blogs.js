    var express = require("express");
    var router  = express.Router();
    var Blog    = require("../models/blog");
    var middleware = require("../middleware");
    
    router.get("/", function(req, res) {
        
        var page = 1;
        var pagelimit = 5;
        if (req.query.page) {
            page = Math.max(0,req.query.page);
        }
        
 
        Blog.find({}, function(err, blogs){
            if (err) {
                console.log("ERROR!");
            } else {
                
            var count = blogs.length/pagelimit;
            //Blog.find({}, function(err, blogs){
            Blog.paginate({}, {page:page, limit: pagelimit}, function(err, blogs){
                if (err) {
                    console.log("ERROR!");
                } else {
                    res.render("blogs/index",{blogs: blogs.docs, page:page, maxp: count});
                }
            });
          }
        });
    });
    
    // CREATE ROUTE
    router.post("/", isLoggedIn, function(req, res){
        req.body.blog.body = req.sanitize(req.body.blog.body);
        var blog = req.body.blog;
        var author = {
            id: req.user._id,
            username: req.user.username
        }
        var newblog = {title:blog.title, image:blog.image, body:blog.body, author:author}
        Blog.create(newblog, function(err, newBlog){
            if(err){
                res.render("blogs/new");
            } else {
                //then, redirect to the index
                res.redirect("/blogs");
            }
        });
    });
    
    // NEW ROUTE
    router.get("/new", isLoggedIn, function(req, res){
        res.render("blogs/new");
    });
    
    
    //SHOW ROUTE
    router.get("/:id", function(req, res) {
        Blog.findById(req.params.id).populate("comments").exec(function(err, foundBlog){
        if (err) {
            res.redirect("/blogs");
        } else {
            res.render("blogs/show", {blog: foundBlog});
        }  
            
        });
    });
    
        // EDIT ROUTE
    router.get("/:id/edit", middleware.checkBlogOwnership, function(req, res){
        Blog.findById(req.params.id, function(err, foundBlog){
            if(err){
                res.redirect("/blogs");
            } else {
                var regex = /<br\s*[\/]?>/gi;
                foundBlog.body = foundBlog.body.replace(/<br ?\/?>/g, "\n");
                res.render("blogs/edit", {blog: foundBlog});
            }
        });
    })
    
    // UPDATE ROUTE
    router.put("/:id", middleware.checkBlogOwnership, function(req, res){
       req.body.blog.body = req.sanitize(req.body.blog.body);
       Blog.findByIdAndUpdate(req.params.id, req.body.blog, function(err, updatedBlog){
          if(err){
              res.redirect("/blogs");
          }  else {
              res.redirect("/blogs/" + req.params.id);
          }
       });
    });
    
    
    // DELETE ROUTE
    router.delete("/:id", middleware.checkBlogOwnership, function(req, res){
       //destroy blog
       Blog.findByIdAndRemove(req.params.id, function(err){
           if(err){
               res.redirect("/blogs");
           } else {
               res.redirect("/blogs");
           }
       })
       //redirect somewhere
    });
    
    
        //middleware
    function isLoggedIn(req, res, next){
        if(req.isAuthenticated()){
            return next();
        }
        res.redirect("/login");
    }
    
    module.exports = router;