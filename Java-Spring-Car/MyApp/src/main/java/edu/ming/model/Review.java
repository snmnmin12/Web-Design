package edu.ming.model;
import java.sql.Timestamp;
import java.util.Date;

import javax.persistence.Column;
import javax.persistence.EmbeddedId;
import javax.persistence.Entity;
import javax.persistence.Table;
import org.springframework.format.annotation.DateTimeFormat;


@Entity
@Table(name="reviews")
public class Review {
	
	@EmbeddedId
	private ReviewPK  reviewkey;
	
	@Column
	String comments;
	
	@Column
	@DateTimeFormat(pattern="dd/MM/yyyy")
	Date date;
	
	public ReviewPK getReviewkey() {
		return reviewkey;
	}
	public void setReviewkey(ReviewPK reviewkey) {
		this.reviewkey = reviewkey;
	}
	public String getComments() {
		return comments;
	}
	public void setComments(String comments) {
		this.comments = comments;
	}
	public Date getDate() {
		return date;
	}
	public void setDate(Date date) {
		this.date = date;
	}
}
