package edu.ming.model;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

@Entity(name="car")
public class Car {
	@Id
	@Column(name="idcar")
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private int  id;
	@Column(name="modelname")
	private String modelName;
	@Column(name="makename")
	private String makeName;
	@Column
	private int prodyear;
	@Column
	private int styleId;
	@Column
	private String picture;
	
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	public String getModelName() {
		return modelName;
	}
	public void setModelName(String modelName) {
		this.modelName = modelName;
	}
	public String getMakeName() {
		return makeName;
	}
	public void setMakeName(String makerName) {
		this.makeName = makerName;
	}
	public int getProdyear() {
		return prodyear;
	}
	public void setProdyear(int prodyear) {
		this.prodyear = prodyear;
	}
	public int getStyleId() {
		return styleId;
	}
	public void setStyleId(int styleId) {
		this.styleId = styleId;
	}
	public String getPicture() {
		return picture;
	}
	public void setPicture(String picture) {
		this.picture = picture;
	}
}
