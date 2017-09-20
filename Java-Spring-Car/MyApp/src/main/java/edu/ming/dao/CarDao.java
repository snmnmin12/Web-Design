package edu.ming.dao;


import edu.ming.model.Car;
import edu.ming.model.PageBean;

public interface CarDao {
	public void add(Car c);
	public PageBean<Car> findAll(int pc, int pr);
    public Car find(int id);
    public void edit(Car car);
    public void delete(int id);
}
