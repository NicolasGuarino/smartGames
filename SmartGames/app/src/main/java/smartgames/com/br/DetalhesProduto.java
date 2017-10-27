package smartgames.com.br;

import android.content.Context;
import android.content.Intent;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.graphics.drawable.BitmapDrawable;
import android.graphics.drawable.Drawable;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.net.Uri;
import android.os.AsyncTask;
import android.os.Build;
import android.os.Bundle;
import android.support.design.widget.CollapsingToolbarLayout;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v4.app.FragmentManager;
import android.support.v4.app.FragmentTransaction;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import com.google.gson.Gson;

import java.io.IOException;
import java.net.MalformedURLException;
import java.net.URL;

public class DetalhesProduto extends AppCompatActivity {

    Integer id_produto_vem;
    String url, parametros , url_local;
    Context context;
    Button btn_encontrar_loja;

    TextView cep_produto;

    String latitude, longitude, cep;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_detalhes_produto);
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);

        context = this;

        id_produto_vem = getIntent().getExtras().getInt("id_produto");

        buscarLocal();

        btn_encontrar_loja = (Button) findViewById(R.id.btn_encontrar_loja);
        btn_encontrar_loja.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent =  new Intent(Intent.ACTION_VIEW);
                intent.setData(Uri.parse("geo:"+latitude+","+longitude));
                Intent mudar = Intent.createChooser(intent, "Abrir Maps");
                startActivity(mudar);
            }
        });

        buscarProduto();


    }

    private void buscarLocal() {
        ConnectivityManager connMgr = (ConnectivityManager)this.getSystemService(Context.CONNECTIVITY_SERVICE);
        NetworkInfo networkInfo = connMgr.getActiveNetworkInfo();
        if (networkInfo != null && networkInfo.isConnected()){

            url_local =  this.getString(R.string.link)+"localizacao_produto.php";

            parametros = "id_produto=" + id_produto_vem;

            new DetalhesProduto.preencher_localizcao().execute(url_local);

        }else{

            Toast.makeText(this, "Nenhuma Conexao foi detectada", Toast.LENGTH_LONG).show();
        }

    }

    public class preencher_localizcao extends AsyncTask<String, Void, String> {

        @Override
        protected String doInBackground(String... params) {
            return Conexao.postDados(params[0], parametros);
        }

        @Override
        protected void onPostExecute(String resultado) {

            Gson gson = new Gson();
            LocalizacaoProduto[] localizacaoProduto = gson.fromJson(resultado, LocalizacaoProduto[].class);

            cep_produto = (TextView) findViewById(R.id.cep_produto);
            cep_produto.setText(localizacaoProduto[0].getCep());

            latitude = localizacaoProduto[0].getLatitude();
            longitude = localizacaoProduto[0].getLongitude();

        }
    }



    private void buscarProduto() {
        ConnectivityManager connMgr = (ConnectivityManager)this.getSystemService(Context.CONNECTIVITY_SERVICE);
        NetworkInfo networkInfo = connMgr.getActiveNetworkInfo();
        if (networkInfo != null && networkInfo.isConnected()){

            url =  this.getString(R.string.link)+"detalhes_produto.php";

            parametros = "id_produto=" + id_produto_vem;

            new DetalhesProduto.preencher_produto().execute(url);

        }else{

            Toast.makeText(this, "Nenhuma Conexao foi detectada", Toast.LENGTH_LONG).show();
        }

    }

    public class preencher_produto extends AsyncTask<String, Void, String> {
        @Override
        protected String doInBackground(String... urls) {
            return Conexao.postDados(urls[0], parametros);
        }

        @Override
        protected void onPostExecute(String resultado) {
            Gson gson = new Gson();
            DetalhesProdutoGetSetter[] detalhesProduto = gson.fromJson(resultado, DetalhesProdutoGetSetter[].class);

            CollapsingToolbarLayout produto = (CollapsingToolbarLayout) findViewById(R.id.toolbar_layout);

            TextView nome_detalhes_produto = (TextView) findViewById(R.id.nome_detalhes_produto);
            TextView marca_detalhes_produto = (TextView) findViewById(R.id.marca_detalhes_produto);
            TextView descricao_detalhes_produto = (TextView) findViewById(R.id.descricao_detalhes_produto);
            TextView preco_detalhes_produto = (TextView) findViewById(R.id.preco_detalhes_produto);

            try {
                URL url_foto = new URL(getString(R.string.link_imagens) +  detalhesProduto[0].getFoto_produto());
                Bitmap image = BitmapFactory.decodeStream(url_foto.openConnection().getInputStream());
                Drawable d = new BitmapDrawable(getResources(), image);

                if (Build.VERSION.SDK_INT > 16) {
                    produto.setBackground(d);
                } else {
                    Toast.makeText(context, "Celular Insuficiente para esse tipo de ação", Toast.LENGTH_SHORT).show();
                }



            } catch (MalformedURLException e) {
                e.printStackTrace();
            } catch (IOException e) {
                e.printStackTrace();
            }

            produto.setTitle(detalhesProduto[0].getNome_detalhes_produto());

            nome_detalhes_produto.setText(detalhesProduto[0].getNome_detalhes_produto());
            marca_detalhes_produto.setText(detalhesProduto[0].getMarca_detalhes_produto());
            descricao_detalhes_produto.setText(detalhesProduto[0].getDescricao_detalhes_produto());
            preco_detalhes_produto.setText(detalhesProduto[0].getPreco_detalhes_produto());

        }
    }


}
