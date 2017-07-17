package edu.ming.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import edu.ming.dao.EngineDao;
import edu.ming.model.Engine;
import edu.ming.service.EngineService;

@Service
public class EngineServiceImpl implements EngineService {
	@Autowired
	private EngineDao engineDao;
	
	@Override
	public void add(Engine engine) {
		engineDao.add(engine);
	}

	@Override
	public List findAll() {
		return engineDao.findAll();
	}

	@Override
	public Engine find(int id) {
		return engineDao.find(id);
	}

	@Override
	public void edit(Engine engine) {
		engineDao.edit(engine);	
	}

	@Override
	public void delete(int id) {
		engineDao.delete(id);
	}

}
