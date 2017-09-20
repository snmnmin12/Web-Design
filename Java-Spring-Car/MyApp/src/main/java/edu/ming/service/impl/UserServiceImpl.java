package edu.ming.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import edu.ming.dao.UserDao;
import edu.ming.model.User;
import edu.ming.service.UserService;

@Service
public class UserServiceImpl implements UserService {
	@Autowired
	private UserDao userDao;
	public void add(User user) {
		userDao.add(user);
	}
    public List findAll() {
    	return userDao.findAll();
    }
    public User find(String username) {
    	return userDao.find(username);
    }
    public void edit(User user) {
    	userDao.edit(user);
    }
    public void delete(String username) {
    	userDao.delete(username);
    }
}
