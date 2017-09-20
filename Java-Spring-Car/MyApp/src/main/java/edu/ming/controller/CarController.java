package edu.ming.controller;

import java.util.Date;
import java.util.List;
import javax.servlet.ServletRequest;
import javax.servlet.http.HttpSession;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.MessageSource;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.SessionAttributes;

import edu.ming.model.Car;
import edu.ming.model.Engine;
import edu.ming.model.PageBean;
import edu.ming.model.Review;
import edu.ming.model.Style;
import edu.ming.model.User;
import edu.ming.service.CarService;
import edu.ming.service.EngineService;
import edu.ming.service.ReviewService;
import edu.ming.service.StyleService;
import edu.ming.service.UserService;

@Controller
//@SessionAttributes("car")
public class CarController {
	@Autowired
	private CarService carService;
	@Autowired
	private EngineService engineService;
	@Autowired
	private StyleService styleService;
	@Autowired
	private UserService userService;
	@Autowired
	private ReviewService reviewService;
	
	@Autowired
	MessageSource msgSource;
	
	@RequestMapping(value="/all", method = RequestMethod.GET)
	public String list(ServletRequest context, ModelMap models) {
		String value=context.getParameter("pc");
		int pc = 1;
        if (!(value == null || value.trim().isEmpty()))
        	pc = Integer.parseInt(value);
  
        int pr= 9;//set pr to 10 record per page
        PageBean<Car> pb= carService.findAll(pc,pr);
        pb.setUrl("#");
		models.put("pb", pb);
		return "all";
	}
	
	@RequestMapping(value="/details/{id}")
	public String detail(@PathVariable int id, ModelMap models) {
		Car car = carService.find(id);
		Style style = styleService.find(car.getStyleId());
		Engine engine = engineService.find(style.getEngineid());
		List<Review> reviews =  reviewService.findReviewByCarid(id);
		models.put("car", car);
		models.put("style", style.getProperties());
		models.put("engine", engine.getProperties());
		models.put("singlereview", new Review());
		models.put("review", reviews);
		System.out.println(reviews.size());
		return "details";
	}
	
	@RequestMapping(value="/details/{id}/comment/add")
	public String detail(@PathVariable int id, @ModelAttribute Review singleReview, BindingResult result) {
		singleReview.setDate(new Date(System.currentTimeMillis()));
		reviewService.add(singleReview);
		return "redirect:/details/"+id;
	}
	
	@RequestMapping(value="/add", method=RequestMethod.GET)
	public String add(ModelMap models) {
    	models.put("car", new Car());
    	return "add";
	}
	
    @RequestMapping(value="/add", method=RequestMethod.POST)
    public String add(@ModelAttribute Car car, BindingResult result) {
    	carService.add(car);
    	return "redirect:/index";
    }
	
	@RequestMapping(value="/details/do", method=RequestMethod.POST)
	public String edit(@ModelAttribute Car car, BindingResult result, @RequestParam String action, ModelMap models) {
		switch(action.toLowerCase()){
		case "edit":
			carService.edit(car);
			break;
		case "delete":
			carService.delete(car.getId());
			break;
		}
		return "redirect:/index";
	}
	
	@RequestMapping(value="/showusers")
	public String showusers(ServletRequest context, ModelMap models) {
		List<User> alluser = userService.findAll();
		String id = context.getParameter("id");
		User user = new User();
		if (id != null) {
			user = userService.find(id);
		}else {
			if (alluser.size() != 0) 
				user = alluser.get(0);
		}
		models.put("user", user);
		models.put("allusers", alluser);
		return "showuser";
	}
	
	
	@RequestMapping(value="/showusers", method = RequestMethod.POST)
	public String showusers(@ModelAttribute User user, BindingResult result, @RequestParam String action, ModelMap models) {
		User userResult = new User();
		switch(action.toLowerCase()){
			case "add":
				userService.add(user);
				userResult = user;
				break;
			case "edit":
				System.out.println(user.getPhone());
				userService.edit(user);
				userResult = user;
				break;
			case "delete":
				userService.delete(user.getUsername());
				userResult = new User();
				break;
		}
		List<User> alluser = userService.findAll();
		if (alluser.size() != 0)  userResult = alluser.get(0);
		models.put("user", userResult);
		models.put("allusers", alluser);
		return "showuser";
	}
	
	
	@RequestMapping(value="/login", method = RequestMethod.GET)
	public String login(ModelMap models) {
		return "login";
	}
	
	@RequestMapping(value="/login", method = RequestMethod.POST)
	public String login(@RequestParam String username, @RequestParam String password, ModelMap models, HttpSession session) {
		User user = userService.find(username);
		if (user == null || !user.getPassword().equals(password))
		{
			String msg = msgSource.getMessage("error.field", null, "Hello world!", null);
			models.put("loginError", msg);
			return "login";
		}else {
			models.put("loggedInUser", user);
		}
		return "welcome";
	}
	
	@RequestMapping(value="/register", method = RequestMethod.GET)
	public String register(ModelMap models) {
		models.put("user", new User());
		return "register";
	}

	@RequestMapping(value="/register", method = RequestMethod.POST)
	public String register(@ModelAttribute User user, BindingResult result) {
		if (!"".equals(user.getUsername().trim())) {
//			user.setPassword(mh5(user.getPassword()));
			userService.add(user);
		}
		return "redirect:/index";
	}
	
	@RequestMapping(value="/logout", method = RequestMethod.GET)
	public String logout(ModelMap models, HttpSession session) {
		session.removeAttribute("loggedInUser");
		return "welcome";
	}
	
	
	@RequestMapping(value="/*", method = RequestMethod.GET)
	public String home(ModelMap models) {
		return "welcome";
	}
	
}
