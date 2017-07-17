package edu.ming.service;

import edu.ming.model.Car;
import edu.ming.model.PageBean;

public interface CarService {
	public void add(Car car);
    public PageBean<Car> findAll(int pc,int pr);
    public Car find(int id);
    public void edit(Car car);
    public void delete(int id);
}
