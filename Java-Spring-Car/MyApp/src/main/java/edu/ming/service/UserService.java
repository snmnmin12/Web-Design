package edu.ming.service;

import java.util.List;

import edu.ming.model.User;

public interface UserService {
	public void add(User user);
    public List findAll();
    public User find(String username);
    public void edit(User user);
    public void delete(String username);
}
