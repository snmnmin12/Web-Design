package edu.ming.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import edu.ming.dao.ReviewDao;
import edu.ming.model.Review;
import edu.ming.model.ReviewPK;
import edu.ming.service.ReviewService;

@Service
public class ReviewServiceImpl implements ReviewService{
	@Autowired
	ReviewDao reviewDao;
	@Override
	public void add(Review review) {
		reviewDao.add(review);
	}

	@Override
	public List<Review> findAll() {
		return reviewDao.findAll();
	}

	@Override
	public List<Review> findReviewByCarid(int carid) {
		
		return reviewDao.findAllByIdCarid(carid);
	}

	@Override
	public List<Review> findReviewByUsername(String username) {
		return reviewDao.findAllByIdUsername(username);
	}

	@Override
	public Review find(ReviewPK rpk) {
		return reviewDao.find(rpk);
	}

	@Override
	public void edit(Review review) {
		reviewDao.edit(review);
	}

	@Override
	public void delete(ReviewPK rpk) {
		reviewDao.delete(rpk);
	}
	
}
