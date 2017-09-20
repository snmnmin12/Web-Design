package edu.ming.service.impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import edu.ming.dao.CarDao;
import edu.ming.model.Car;
import edu.ming.model.PageBean;
import edu.ming.service.CarService;


@Service
@Transactional
public class CarServiceImpl implements CarService {
	
	@Autowired
	private CarDao carDao;
	
	public void add(Car car)
	{
		carDao.add(car);
	}
	
    public PageBean<Car> findAll(int pc,int pr)
    {
        return carDao.findAll(pc,pr);
    }

    public Car find(int id)
    {
        return carDao.find(id);
    }

    public void edit(Car car)
    {
        carDao.edit(car);
    }

    public void delete(int id)
    {
        carDao.delete(id);
    }
}
