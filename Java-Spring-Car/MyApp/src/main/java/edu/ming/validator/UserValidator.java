package edu.ming.validator;

import org.springframework.stereotype.Component;
import org.springframework.util.StringUtils;
import org.springframework.validation.Errors;
import org.springframework.validation.Validator;

import edu.ming.model.User;


@Component
public class UserValidator implements Validator {

	@Override
	public boolean supports(Class<?> cls) {
		// TODO Auto-generated method stub
		return User.class.isAssignableFrom(cls);
	}

	@Override
	public void validate(Object target, Errors errors) {
		// TODO Auto-generated method stub
		User user = (User) target;
		if (!StringUtils.hasText(user.getUsername()))
			errors.rejectValue("username","error.field.empty");
		if (!StringUtils.hasText(user.getPassword()))
			errors.rejectValue("password","error.field.empty");
	}
		

}
