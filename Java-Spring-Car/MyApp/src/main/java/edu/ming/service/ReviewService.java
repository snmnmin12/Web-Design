package edu.ming.service;

import java.util.List;

import edu.ming.model.Review;
import edu.ming.model.ReviewPK;

public interface ReviewService {
	public void add(Review review);
	public List<Review> findAll();
    public List<Review> findReviewByCarid(int carid);
    public List<Review> findReviewByUsername(String username);
    public Review find(ReviewPK rpk);
    public void edit(Review review);
    public void delete(ReviewPK rpk);
}
