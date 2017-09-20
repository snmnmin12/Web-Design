package edu.ming.model;

import java.util.List;

@SuppressWarnings("hiding")
public class PageBean<Object> {
	private int pc;//current page code
    private int tr;//tatal records
    private int pr;//page records
    private List<Object> beanList;//current page records
    private String url;
	public int getPc() {
		return pc;
	}
	public void setPc(int pc) {
		this.pc = pc;
	}
	public int getTr() {
		return tr;
	}
	
    public int getTp()
    {
        int tp=tr/pr;
        return tr % pr == 0 ? tp : tp + 1 ;
    }
	
	public void setTr(int tr) {
		this.tr = tr;
	}
	public int getPr() {
		return pr;
	}
	public void setPr(int pr) {
		this.pr = pr;
	}
	public List<Object> getBeanList() {
		return beanList;
	}
	public void setBeanList(List<Object> beanList) {
		this.beanList = beanList;
	}
	public String getUrl() {
		return url;
	}
	public void setUrl(String url) {
		this.url = url;
	}
}
