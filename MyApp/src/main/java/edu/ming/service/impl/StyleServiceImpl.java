package edu.ming.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import edu.ming.dao.StyleDao;
import edu.ming.model.Style;
import edu.ming.service.StyleService;

@Service
public class StyleServiceImpl implements StyleService {
	
	@Autowired
	private StyleDao styleDao;
	
	public void add(Style style) {
		styleDao.add(style);	
	}


	public List findAll() {
		return styleDao.findAll();
	}


	public Style find(int id) {
		return styleDao.find(id);
	}

	@Override
	public void edit(Style style) {
		styleDao.edit(style);
	}

	@Override
	public void delete(int id) {
		styleDao.delete(id);
	}

}
