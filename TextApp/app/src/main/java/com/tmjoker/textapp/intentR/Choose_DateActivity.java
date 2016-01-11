package com.tmjoker.textapp.intentR;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.TimePicker;

import com.tmjoker.textapp.R;

public class Choose_DateActivity extends AppCompatActivity {
	private TimePicker timePicker;
	private Button btn_send;
	private int date_h;
	private int date_m;
	public static String EXTRA_DATE = "com.tmjoker.textapp.intentR.Choose_DateActivity.date";

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_choose_date);


		btn_send = (Button) findViewById(R.id.btn_send);
		timePicker = (TimePicker) findViewById(R.id.timePicker);
		timePicker.setIs24HourView(true);
		timePicker.setOnTimeChangedListener(new TimePicker.OnTimeChangedListener() {
			@Override
			public void onTimeChanged(TimePicker view, int hourOfDay, int minute) {
				date_h = hourOfDay;
				date_m = minute;
//				String date = date_h + "时" + date_m + "分";
//				Intent intent = new Intent();
//				intent.putExtra(EXTRA_DATE, date);
//				setResult(1, intent);
//				finish();
			}
		});
		btn_send.setOnClickListener(new View.OnClickListener() {
			@Override
			public void onClick(View v) {
				String date = date_h + "时" + date_m + "分";
				Intent intent = new Intent();
				intent.putExtra(EXTRA_DATE, date);
				setResult(1, intent);
				finish();
			}
		});


	}

}
