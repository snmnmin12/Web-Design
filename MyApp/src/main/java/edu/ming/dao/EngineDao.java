package edu.ming.dao;

import java.util.List;

import edu.ming.model.Engine;

public interface EngineDao {
	public void add(Engine engine);
	public List<Engine> findAll();
    public Engine find(int id);
    public void edit(Engine engine);
    public void delete(int id);
}
