package edu.ming.service;

import java.util.List;

import edu.ming.model.Engine;

public interface EngineService {
	public void add(Engine engine);
    public List findAll();
    public Engine find(int id);
    public void edit(Engine engine);
    public void delete(int id);
}
