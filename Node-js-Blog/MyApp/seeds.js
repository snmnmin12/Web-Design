
var mongodb = require("mongoose");
var Blog = require("./models/blog");
var Comment = require("./models/comment");

var data = [
    {
        title: "The first post",
        image: "https://source.unsplash.com/random/1000x800",
        body: "The Matrix is a 1999 science fiction action film written and directed by The Wachowskis,"+
              "starring Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss, Hugo Weaving, and Joe Pantoliano."
    },
    {
        title: "The second post",
        image: "https://source.unsplash.com/random/800x600",
        body: "The Universe is all of space and time (spacetime) and its contents,[12] which includes planets, moons, minor planets,"+
        "stars, galaxies, the contents of intergalactic space and all matter and energy. The size of the entire Universe is still unknown."+
        "The earliest scientific models of the Universe were developed by ancient Greek and Indian philosophers and were geocentric," + 
        "placing Earth at the centre of the Universe.[15][16] Over the centuries, more precise astronomical observations led Nicolaus" + 
        "Copernicus to develop the heliocentric model with the Sun at the centre of the Solar System. In developing the law of universal gravitation," + 
        " Sir Isaac Newton built upon Copernicus's work as well as observations by Tycho Brahe and Johannes Kepler's laws of planetary motion."
    },
    {
        title: "The third post",
        image: "https://source.unsplash.com/random/1200x900",
        body: "Further observational improvements led to the realization that our Solar System is located in the Milky Way galaxy, which is one of many galaxies" +  
        " in the Universe. It is assumed that galaxies are distributed uniformly and the same in all directions, meaning that the Universe has neither an edge nor" + 
        " a center. Discoveries in the early 20th century have suggested that the Universe had a beginning and that it is expanding[17] at an increasing rate. "  + 
        "The majority of mass in the Universe appears to exist in an unknown form called dark matter."
    }
];

function seedDB() {
    
    Blog.remove({}, function(err) {
        
        if (err) {
            console.log(err);
        }
        console.log("removed blogs");
            //add a few camgrounds
        data.forEach(function(seed) {
            Blog.create(seed, function(err, blog) {
               if (err) {
                   console.log(err);
               }  else {
                   console.log("added a blog!");
                   
                   //created comment
                   Comment.create(
                    {
                        text: "This blog is great!",
                        author: "Homer"
                    }, function(err, comment) {
                        if (err) {
                            console.log(err);
                        } else {
                            blog.comments.push(comment);
                            blog.save();
                            console.log("Created a new comment!");
                        }
                    }
                   );
               }
            });
        });
        
    });
    
}

module.exports = seedDB;