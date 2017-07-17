package edu.ming.dao.impl;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import javax.persistence.Query;

import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import edu.ming.dao.ReviewDao;
import edu.ming.model.Review;
import edu.ming.model.ReviewPK;

@Repository
@Transactional
public class ReviewDaoImpl implements ReviewDao {
    @PersistenceContext
    private EntityManager entityManager;
    
	@Override
	public void add(Review review) {
		entityManager.merge(review);
	}

	@Override
	public List<Review> findAll() {
        String hql = "FROM reviews";
        return entityManager.createQuery(hql, Review.class).getResultList();
	}

	public Review find(ReviewPK rpk) {
		return (Review)entityManager.find(Review.class, rpk);
	}
	
	@Override
	public List<Review> findAllByIdCarid(int carid) {
		Query query = entityManager.createQuery("SELECT r FROM Review r WHERE r.reviewkey.carid LIKE :id", Review.class);
		query.setParameter("id", carid);
		return query.getResultList();
	}

	@Override
	public List<Review> findAllByIdUsername(String username) {
		// TODO Auto-generated method stub
		Query query = entityManager.createQuery("SELECT r FROM Review r WHERE r.reviewkey.username LIKE :username", Review.class);
		query.setParameter("username", username);
		return query.getResultList();
	}

	@Override
	public void edit(Review review) {
		entityManager.merge(review);
	}

	@Override
	public void delete(ReviewPK rpk) {
		entityManager.remove(find(rpk));
	}

}
