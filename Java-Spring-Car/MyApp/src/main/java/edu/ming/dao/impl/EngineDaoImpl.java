package edu.ming.dao.impl;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;

import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import edu.ming.dao.EngineDao;
import edu.ming.model.Engine;

@Repository
@Transactional
public class EngineDaoImpl  implements EngineDao{
    @PersistenceContext
    private EntityManager entityManager;
    
	public void add(Engine e) {
		entityManager.merge(e);
	}
	public List<Engine> findAll()
    {
        String hql = "FROM engines";
        return entityManager.createQuery(hql, Engine.class).getResultList();
    }
	
    public Engine find(int id)
    {
    	return (Engine) entityManager.find(Engine.class, id);
    }
    
    public void edit(Engine engine)
    {
    	entityManager.merge(engine);
    }
    public void delete(int id)
    {
    	entityManager.remove(find(id));
    }
}
