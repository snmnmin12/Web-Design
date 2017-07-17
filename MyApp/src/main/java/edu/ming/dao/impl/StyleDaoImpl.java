package edu.ming.dao.impl;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;

import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import edu.ming.dao.StyleDao;
import edu.ming.model.Style;

@Repository
@Transactional
public class StyleDaoImpl implements StyleDao {
    @PersistenceContext
    private EntityManager entityManager;
	public void add(Style s) {
		entityManager.merge(s);
	}
	public List<Style> findAll()
    {
        String hql = "FROM styles";
        return entityManager.createQuery(hql, Style.class).getResultList();
    }
	
    public Style find(int id)
    {
    	return (Style) entityManager.find(Style.class, id);
    }
    
    public void edit(Style Style)
    {
    	entityManager.merge(Style);
    }
    public void delete(int id)
    {
    	entityManager.remove(find(id));
    }
}
