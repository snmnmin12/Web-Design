package edu.ming.model;

import java.lang.reflect.Field;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;

import org.springframework.util.StringUtils;

@Entity(name="engines")
public class Engine {
	@Id
	@Column
	private int engineid;
	@Column
	private String name;
	@Column
	private String code;
	@Column
	private float comRatio;
	@Column
	private String comType;
	@Column
	private String configuration;
	@Column
	private String cylinder;
	@Column
	private float displacement;
	@Column
	private String fuelType;
	@Column
	private int horsePower;
	@Column
	private int rpm;
	@Column
	private int size;
	@Column
	private String type;
	
	public int getEngineid() {
		return engineid;
	}
	public void setEngineid(int engineid) {
		this.engineid = engineid;
	}
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getCode() {
		return code;
	}
	public void setCode(String code) {
		this.code = code;
	}
	public float getComRatio() {
		return comRatio;
	}
	public void setComRatio(float comRatio) {
		this.comRatio = comRatio;
	}
	public String getComType() {
		return comType;
	}
	public void setComType(String comType) {
		this.comType = comType;
	}
	public String getConfiguration() {
		return configuration;
	}
	public void setConfiguration(String configuration) {
		this.configuration = configuration;
	}
	public String getCylinder() {
		return cylinder;
	}
	public void setCylinder(String cylinder) {
		this.cylinder = cylinder;
	}
	public float getDisplacement() {
		return displacement;
	}
	public void setDisplacement(float displacement) {
		this.displacement = displacement;
	}
	public String getFuelType() {
		return fuelType;
	}
	public void setFuelType(String fuelType) {
		this.fuelType = fuelType;
	}
	public int getSize() {
		return size;
	}
	public void setSize(int size) {
		this.size = size;
	}
	public String getType() {
		return type;
	}
	public void setType(String type) {
		this.type = type;
	}
	public int getHorsePower() {
		return horsePower;
	}
	public void setHorsePower(int horsePower) {
		this.horsePower = horsePower;
	}
	public int getRpm() {
		return rpm;
	}
	public void setRpm(int rpm) {
		this.rpm = rpm;
	}
	public Map<String, Object> getProperties() {
		Map<String, Object> res = new HashMap<String, Object>();
		Field[] fields = Engine.class.getDeclaredFields();
		
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
