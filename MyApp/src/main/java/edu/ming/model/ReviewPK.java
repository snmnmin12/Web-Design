package edu.ming.model;

import java.io.Serializable;

import javax.persistence.Column;
import javax.persistence.Embeddable;

@Embeddable
public class ReviewPK implements Serializable {
	private static final long serialVersionUID = 1L;
	@Column
	protected String username;
	@Column
	protected int carid;
	
	public ReviewPK(){}
	public ReviewPK(String username, int carid) {
		this.username = username;
		this.carid = carid;
	}
    @Override
    public int hashCode() {
       return (int)username.hashCode() + carid;
    }
    
    @Override
    public boolean equals(Object obj) {
        if (this == obj)
            return true;
        if (obj == null)
            return false;
        if (!(obj instanceof ReviewPK))
            return false;
        ReviewPK other = (ReviewPK) obj;
        if (username == null) {
            if (other.username != null)
                return false;
        } else if (!username.equals(other.username))
            return false;
        return this.carid==other.carid;
    }
	public String getUsername() {
		return username;
	}
	public void setUsername(String username) {
		this.username = username;
	}
	public int getCarid() {
		return carid;
	}
	public void setCarid(int carid) {
		this.carid = carid;
	}
    
}
