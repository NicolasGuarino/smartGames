package smartgames.com.br;

import android.content.Context;
import android.content.SharedPreferences;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.os.AsyncTask;
import android.os.Bundle;
import android.preference.PreferenceManager;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v4.view.ViewPager;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.util.Log;
import android.view.View;
import android.support.design.widget.NavigationView;
import android.support.v4.view.GravityCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.ActionBarDrawerToggle;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.AdapterViewFlipper;
import android.widget.ArrayAdapter;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;
import android.widget.ViewFlipper;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.google.gson.Gson;
import com.google.gson.GsonBuilder;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Timer;
import java.util.TimerTask;

public class HomeActivity extends AppCompatActivity
        implements NavigationView.OnNavigationItemSelectedListener {
    Context context;

    String parametros, url_foto = "", url="";
    SharedPreferences preferences;


    TextView nome_cliente_nav, email_cliente_nav;
    String nome_cliente, email_cliente;


    ViewPager view_pager;
    private final String TAG = "HomeActivity";
    private RecyclerView recyclerView, recyclerView_ps4;
    private RecyclerView.LayoutManager layoutManager, layoutManager_ps4;
    private RecyclerView.Adapter recyclerAdapter, recyclerAdapter_ps4;





    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);

        context = this;

        preferences = PreferenceManager.getDefaultSharedPreferences(this);


        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        ActionBarDrawerToggle toggle = new ActionBarDrawerToggle(
                this, drawer, toolbar, R.string.navigation_drawer_open, R.string.navigation_drawer_close);
        drawer.setDrawerListener(toggle);
        toggle.syncState();

        NavigationView navigationView = (NavigationView) findViewById(R.id.nav_view);
        View nav = navigationView.getHeaderView(0);

        //Criando o ADAPTER DO SLIDER

        view_pager = (ViewPager) findViewById(R.id.view_pager);
        ViewPagerAdapter viewPagerAdapter = new ViewPagerAdapter(this);
        view_pager.setAdapter(viewPagerAdapter);

        Timer timer = new Timer();
        timer.scheduleAtFixedRate(new MyTimerTask(), 4000, 4000);
        //Finalizando SLIDER




        // Criando Uma Recycler para colocar os produtos na home.
        recyclerView = (RecyclerView) findViewById(R.id.recycler_home);
        recyclerView.setHasFixedSize(true);

        layoutManager =  new LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL,false);
        recyclerView.setLayoutManager(layoutManager);

        requestJsonObject();
        // ------------------------------------------------------------




        nome_cliente_nav = (TextView) nav.findViewById(R.id.nome_cliente_nav);
        email_cliente_nav = (TextView) nav.findViewById(R.id.email_cliente_nav);

        nome_cliente = preferences.getString("nome_usuario", "");
        email_cliente = preferences.getString("email_usuario", "");


        email_cliente_nav.setText(email_cliente);
        nome_cliente_nav.setText(nome_cliente);
    }

    private void requestJsonObject() {

        RequestQueue queue = Volley.newRequestQueue(this);
        String url = this.getString(R.string.link)+"listar_xbox_home.php";
        StringRequest stringRequest = new StringRequest(Request.Method.POST, url, new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {
                Log.d(TAG, "Response " + response);
                GsonBuilder builder = new GsonBuilder();
                Gson mGson = builder.create();
                List<Produto> posts = new ArrayList<Produto>();
                posts = Arrays.asList(mGson.fromJson(response, Produto[].class));
                recyclerAdapter = new RecyclerViewAdapter(HomeActivity.this, posts);
                recyclerView.setAdapter(recyclerAdapter);
            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Log.d(TAG, "Error " + error.getMessage());
            }
        });
        queue.add(stringRequest);
    }


    @Override
    public void onBackPressed() {
        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        if (drawer.isDrawerOpen(GravityCompat.START)) {
            drawer.closeDrawer(GravityCompat.START);
        } else {
            super.onBackPressed();
        }
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.home, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }

    @SuppressWarnings("StatementWithEmptyBody")
    @Override
    public boolean onNavigationItemSelected(MenuItem item) {
        // Handle navigation view item clicks here.
        int id = item.getItemId();

        if (id == R.id.nav_inicio) {
            // Handle the camera action
        } else if (id == R.id.nav_promocoes) {

        } else if (id == R.id.nav_lancamentos) {

        } else if (id == R.id.nav_sair) {

        }

        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        drawer.closeDrawer(GravityCompat.START);
        return true;
    }

    public class MyTimerTask extends TimerTask {

        @Override
        public void run() {
            HomeActivity.this.runOnUiThread(new Runnable() {
                @Override
                public void run() {
                    if (view_pager.getCurrentItem() == 0) {
                        view_pager.setCurrentItem(1);
                    }else if (view_pager.getCurrentItem() == 1){
                        view_pager.setCurrentItem(2);
                    }else if (view_pager.getCurrentItem() == 2){
                        view_pager.setCurrentItem(3);
                    }else if (view_pager.getCurrentItem() == 3){
                        view_pager.clearAnimation();
                        view_pager.setCurrentItem(0);
                    }
                }
            });
        }
    }

}
