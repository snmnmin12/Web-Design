package edu.ming.dao;

import java.util.List;

import edu.ming.model.User;

public interface UserDao {
	public void add(User username);
	public List<User> findAll();
    public User find(String username);
    public void edit(User user);
    public void delete(String username);
}
