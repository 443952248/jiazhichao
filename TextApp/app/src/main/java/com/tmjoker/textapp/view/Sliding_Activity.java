package com.tmjoker.textapp.view;

import android.app.Activity;
import android.os.Bundle;

import com.jeremyfeinstein.slidingmenu.lib.SlidingMenu;
import com.tmjoker.textapp.R;

public class Sliding_Activity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_sliding);
		//创建侧滑菜单
		SlidingMenu menu = new SlidingMenu(this);
		menu.setMode(SlidingMenu.LEFT);
		//设置触摸屏幕的模式
		menu.setTouchModeAbove(SlidingMenu.TOUCHMODE_FULLSCREEN);
		//设置渐入淡出效果的值
		menu.setFadeDegree(0.55f);
		menu.attachToActivity(this,SlidingMenu.SLIDING_CONTENT);
		//侧滑菜单的布局
		menu.setMenu(R.layout.menu_layout);

		//设置SlidingMenu边框距离
		menu.setBehindOffset(getWindowManager().getDefaultDisplay().getWidth() / 4);






	}
}
