package com.tmjoker.textapp.refresh;

import android.content.Context;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ListView;
import android.widget.TextView;

import com.handmark.pulltorefresh.library.PullToRefreshBase;
import com.handmark.pulltorefresh.library.PullToRefreshListView;
import com.tmjoker.textapp.R;

import java.util.ArrayList;


public class PullToRefreshActivity extends AppCompatActivity {

	private PullToRefreshListView list_refresh;
	private ArrayList<Music> musics = new ArrayList<>();
	private DataAdapter dataAdapter;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_pull_to_refresh);
		list_refresh = (PullToRefreshListView) findViewById(R.id.list_refresh);

		loadDate();
		dataAdapter = new DataAdapter(this,musics);
		list_refresh.setAdapter(dataAdapter);

		list_refresh.setOnRefreshListener(new PullToRefreshBase.OnRefreshListener<ListView>() {
			@Override
			public void onRefresh(PullToRefreshBase<ListView> refreshView) {

			}
		});
	}

	//模拟数据
	private int count = 1;
	public void loadDate(){
		for(int i = 0;i<10;i++){
			musics.add(new Music("歌曲"+count,"歌手"+count));
			count++;
		}
	}

	static class DataAdapter extends BaseAdapter{
		private Context context;
		private ArrayList<Music> musics;

		public DataAdapter(Context context,ArrayList<Music> musics){
			this.context = context;
			this.musics = musics;
		}
		@Override
		public int getCount() {
			return musics.size();
		}

		@Override
		public Object getItem(int position) {
			return musics.get(position);
		}

		@Override
		public long getItemId(int position) {
			return position;
		}

		@Override
		public View getView(int position, View convertView, ViewGroup parent) {
			ViewHolder viewHolder;
			if (convertView == null) {
				convertView = LayoutInflater.from(context).inflate(R.layout.item_refresh, null);
				viewHolder = new ViewHolder();
				viewHolder.tv_singger = (TextView) convertView.findViewById(R.id.tv_singger);
				viewHolder.tv_title = (TextView) convertView.findViewById(R.id.tv_title);
				convertView.setTag(viewHolder);
			}
			viewHolder = (ViewHolder) convertView.getTag();
			Music music = musics.get(position);
			viewHolder.tv_title.setText(music.getName());
			viewHolder.tv_singger.setText(music.getSinger());
			return convertView;
		}

		static class ViewHolder{
			TextView tv_title;
			TextView tv_singger;
		}
	}

}
