package com.tmjoker.textapp.refresh;

/**
 * Created by Administrator on 2016/1/6.
 */
public class Music {
	private String name;
	private String singer;

	public Music() {
	}


	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getSinger() {
		return singer;
	}

	public void setSinger(String singer) {
		this.singer = singer;
	}

	public Music(String name, String singer) {
		this.name = name;
		this.singer = singer;
	}


}
