package edu.ming.service;

import java.util.List;

import edu.ming.model.Style;

public interface StyleService {
	public void add(Style style);
    public List findAll();
    public Style find(int id);
    public void edit(Style style);
    public void delete(int id);
}
