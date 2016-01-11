package com.tmjoker.textapp;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import com.tmjoker.textapp.intentR.Choose_DateActivity;
import com.tmjoker.textapp.refresh.PullToRefreshActivity;
import com.tmjoker.textapp.view.Sliding_Activity;

public class MainActivity extends AppCompatActivity {
	private TextView tv_date;
	private Button btn_timechoose;
	private Button btn_sliding;
	private Button btn_refresh;
	public static int EXTRA_CHOOSEDATE = 11;


	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);

		init();
	}

	private void init() {
		tv_date = (TextView) findViewById(R.id.tv_date);
		btn_timechoose = (Button) findViewById(R.id.btn_timechoose);
		btn_sliding = (Button) findViewById(R.id.btn_sliding);
		btn_refresh = (Button) findViewById(R.id.btn_refresh);

		onClink();

	}

	private void onClink() {

		/**
		 * 时间选择，intent跳转回调。
		 *
		 */
		btn_timechoose.setOnClickListener(new View.OnClickListener() {
			@Override
			public void onClick(View v) {
				Intent intent = new Intent();
				intent.setClass(MainActivity.this,Choose_DateActivity.class);
				startActivityForResult(intent, EXTRA_CHOOSEDATE);
			}
		});


		/**
		 * SlidingMenu 侧滑
		 */
		btn_sliding.setOnClickListener(new View.OnClickListener() {

			@Override
			public void onClick(View v) {
				Intent intent = new Intent() ;
				intent.setClass(MainActivity.this, Sliding_Activity.class);
				startActivity(intent);

			}
		});

		/**
		 * PullToRefresh上拉下拉刷新
		 */
		btn_refresh.setOnClickListener(new View.OnClickListener() {
			@Override
			public void onClick(View v) {
				Intent intent = new Intent();
				intent.setClass(MainActivity.this, PullToRefreshActivity.class);
				startActivity(intent);
			}
		});

	}


	/**
	 * intent回调信息
	 * @param requestCode
	 * @param resultCode
	 * @param data
	 */
	@Override
	protected void onActivityResult(int requestCode, int resultCode, Intent data) {
		super.onActivityResult(requestCode, resultCode, data);
		if (requestCode == MainActivity.EXTRA_CHOOSEDATE){
			String s = data.getStringExtra(Choose_DateActivity.EXTRA_DATE);
			tv_date.setText(s);

		}
	}
}
