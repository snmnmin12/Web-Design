package edu.ming.dao.impl;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;

import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import edu.ming.dao.UserDao;
import edu.ming.model.User;


@Repository
@Transactional
public class UserDaoImpl implements UserDao {
	
    @PersistenceContext
    private EntityManager entityManager;
    
	public void add(User user) {
		entityManager.merge(user);
	}
	public List<User> findAll()
    {
        String hql = "FROM users";
        return entityManager.createQuery(hql, User.class).getResultList();
    }
	
    public User find(String username)
    {
    	return (User) entityManager.find(User.class, username);
    }
    
    public void edit(User user)
    {
    	entityManager.merge(user);
    }
    public void delete(String username)
    {
    	entityManager.remove(find(username));
    }
}
