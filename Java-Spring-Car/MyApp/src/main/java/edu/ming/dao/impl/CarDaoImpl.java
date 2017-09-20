package edu.ming.dao.impl;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import javax.persistence.Query;

import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import edu.ming.dao.CarDao;
import edu.ming.model.Car;
import edu.ming.model.PageBean;

@Repository
@Transactional
public class CarDaoImpl implements CarDao {

    @PersistenceContext
    private EntityManager entityManager;
	public void add(Car car) {
		entityManager.merge(car);
	}
	public PageBean<Car> findAll(int pc, int pr)
    {
        PageBean<Car> pb=new PageBean<>();
        pb.setPc(pc);
        pb.setPr(pr);
        
        String hql = "FROM car";
        Query query = entityManager.createQuery(hql, Car.class);
        
        pb.setTr(query.getResultList().size());
        query.setFirstResult((pc-1)*pr);
        
        query.setMaxResults(pr);
        List results = query.getResultList();
        pb.setBeanList(results);
        return pb;
    }
	
    public Car find(int carid)
    {
    	return (Car)entityManager.find(Car.class, carid);
    }
    
    public void edit(Car car)
    {
    	entityManager.merge(car);
    }
    public void delete(int carid)
    {
    	entityManager.remove(find(carid));
    }
}
