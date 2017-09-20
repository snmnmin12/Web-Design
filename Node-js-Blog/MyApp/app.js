var express             = require("express"),
    app                 = express(),
    methodOverride      = require("method-override"),
    expressSanitizer    = require("express-sanitizer"),
    bodyParser          = require("body-parser"),
    mongoose            = require("mongoose"),
    passport            = require("passport"),
    LocalStrategy       = require("passport-local"),
    User                = require("./models/user"),
    seedDB              = require("./seeds"),
    Comment             = require("./models/comment"),
    Blog                = require("./models/blog");
    
//requring routes
var commentRoutes    = require("./controller/comments"),
    blogRoutes = require("./controller/blogs"),
    indexRoutes      = require("./controller/index")
    
    
    //seedDB();
    mongoose.connect("mongodb://localhost/blog_data",{
        useMongoClient: true,
    });
    
    app.set("view engine", "ejs");
    app.use(express.static(__dirname+"/public"));
    app.use(bodyParser.urlencoded({extended: true}));
    app.use(expressSanitizer());
    app.use(methodOverride("_method"));
    
    
    //PASSPORT CONFIGURATION
    app.use(require("express-session")({
        secret: "Once again Rusty wins cutest dog!",
        resave: false,
        saveUninitialized: false
    }));
    app.use(passport.initialize());
    app.use(passport.session());
    passport.use(new LocalStrategy(User.authenticate()));
    passport.serializeUser(User.serializeUser());
    passport.deserializeUser(User.deserializeUser());
    
    app.use(function(req, res, next){
    res.locals.currentUser = req.user;
    next();
    });
    
        
    app.use("/", indexRoutes);
    app.use("/blogs", blogRoutes);
    app.use("/blogs/:id/comments", commentRoutes);

    app.listen(process.env.PORT, process.ip, function() {
        console.log("SERVER IS RUNNING!");
    });

    
  
