package edu.ming.dao;

import java.util.List;

import edu.ming.model.Style;

public interface StyleDao {
	public void add(Style style);
	public List<Style> findAll();
    public Style find(int id);
    public void edit(Style style);
    public void delete(int id);
}
