package edu.ming.model;

import java.lang.reflect.Field;
import java.util.HashMap;
import java.util.Map;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;

import org.springframework.util.StringUtils;

@Entity(name="styles")
public class Style {
	@Id
	@Column
	private int styleid;
	@Column
	private String stylename;
	@Column
	private int numDoors;
	@Column
	private String mCode;
	@Column
	private String body;
	@Column
	private String transmission;
	@Column
	private int engineid;
	@Column
	private String driveWheels;
	@Column
	private int MPG;
	@Column
	private String trim;
	public int getStyleid() {
		return styleid;
	}
	public void setStyleid(int styleid) {
		this.styleid = styleid;
	}
	public String getStylename() {
		return stylename;
	}
	public void setStylename(String stylename) {
		this.stylename = stylename;
	}
	public int getNumDoors() {
		return numDoors;
	}
	public void setNumDoors(int numDoors) {
		this.numDoors = numDoors;
	}
	public String getmCode() {
		return mCode;
	}
	public void setmCode(String mCode) {
		this.mCode = mCode;
	}
	public String getBody() {
		return body;
	}
	public void setBody(String body) {
		this.body = body;
	}
	public String getTransmission() {
		return transmission;
	}
	public void setTransmission(String transmission) {
		this.transmission = transmission;
	}
	public int getEngineid() {
		return engineid;
	}
	public void setEngineid(int engineid) {
		this.engineid = engineid;
	}
	public String getDriveWheels() {
		return driveWheels;
	}
	public void setDriveWheels(String driveWheels) {
		this.driveWheels = driveWheels;
	}
	public int getMPG() {
		return MPG;
	}
	public void setMPG(int mPG) {
		MPG = mPG;
	}
	public String getTrim() {
		return trim;
	}
	public void setTrim(String trim) {
		this.trim = trim;
	}
	public Map<String, Object> getProperties() {
		Map<String, Object> res = new HashMap<String, Object>();
		Field[] fields = Style.class.getDeclaredFields();
		
		for (Field field: fields) {
			try {
				res.put(StringUtils.capitalize(field.getName().toString()), field.get(this));
			} catch (IllegalArgumentException | IllegalAccessException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		}
		return res;
	}
}
