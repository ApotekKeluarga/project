package com.example.aprian_pc.akonline.Fragment;

import android.content.Context;
import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.ImageView;

import com.example.aprian_pc.akonline.MainActivity;
import com.example.aprian_pc.akonline.ObatHerbal;
import com.example.aprian_pc.akonline.R;

public class HomeFragment extends Fragment {

    public HomeFragment() {
        // Required empty public constructor
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {

        View rootView = inflater.inflate(R.layout.fragment_home, container, false);
        ImageButton b = (ImageButton)rootView.findViewById(R.id.herbal);
        b.setOnClickListener(new View.OnClickListener()
        {
            public void onClick(View v)
            {
                Intent intent = new Intent(HomeFragment.this.getActivity(), ObatHerbal.class);
                startActivity(intent);

            }

        });
        return rootView;

    }

}
