package edu.ming.dao;

import java.util.List;

import edu.ming.model.Review;
import edu.ming.model.ReviewPK;

public interface ReviewDao {
	public void add(Review review);
	public List<Review> findAll();
    public List<Review> findAllByIdCarid(int carid);
    public List<Review> findAllByIdUsername(String username);
    public Review find(ReviewPK rpk);
    public void edit(Review review);
    public void delete(ReviewPK rpk);
}
