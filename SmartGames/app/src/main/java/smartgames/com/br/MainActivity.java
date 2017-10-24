package smartgames.com.br;

import android.app.ProgressDialog;
import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.os.AsyncTask;
import android.preference.PreferenceManager;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    EditText edit_cpf, edit_senha;
    Button btn_logar, btn_cadastrar;
    String url = "";
    String parametros = "";
    Context context = this;


    SharedPreferences preferences;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        edit_cpf = (EditText)findViewById(R.id.edit_cpf);
        edit_senha = (EditText)findViewById(R.id.edit_senha);
        btn_logar = (Button)findViewById(R.id.btn_logar);
        btn_cadastrar = (Button)findViewById(R.id.btn_cadastrar);

        getAplication();

       // preferences = PreferenceManager.getDefaultSharedPreferences(this);
    }

    private void getAplication() {
        /*esqueci_senha.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(getContext(), MudarSenhaActivity.class);
                startActivity(intent);
            }
        });*/
        btn_logar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                /*ConnectivityManager connMgr = (ConnectivityManager)getSystemService(Context.CONNECTIVITY_SERVICE);
                NetworkInfo networkInfo = connMgr.getActiveNetworkInfo();
                if (networkInfo != null && networkInfo.isConnected()){

                    String email = edit_cpf.getText().toString();
                    String senha = edit_senha.getText().toString();

                    if(email.isEmpty() || senha.isEmpty()){
                        Toast.makeText(context, "Preencha todos os campos", Toast.LENGTH_LONG).show();

                    }else{

                        url =  context.getString(R.string.link)+"login.php";

                        parametros = "cpf=" + email +"&senha=" + senha;

                        new MainActivity.SolicitaDados().execute(url);

                    }
                }else{
                    Snackbar.make(v, "Sem Conexão!", Snackbar.LENGTH_INDEFINITE)
                            .setAction("Fechar", new View.OnClickListener() {
                                        @Override
                                        public void onClick(View v) {
                                            Intent intent = new Intent(context, MainActivity.class);
                                            startActivity(intent);
                                        }
                                    }
                            ).show();

                }*/
                Intent intent = new Intent(context, HomeActivity.class);
                startActivity(intent);
            }
        });
    }




    private class SolicitaDados extends AsyncTask<String, Void, String> {

        ProgressDialog progressDialog;
        @Override
        protected void onPreExecute() {
            super.onPreExecute();

            progressDialog = ProgressDialog.show(context, "Aguarde...", "Estamos Trabalhando");

        }

        @Override
        protected String doInBackground(String... urls){

            return Conexao.postDados(urls[0], parametros);

        }

        // onPostExecute displays the results of the AsyncTask.
        @Override
        protected void onPostExecute(String resultado){


            progressDialog.dismiss();

            if(resultado.contains("login_ok")){

                String[] dados = resultado.split(",");

                Intent abreInicio = new Intent(context, HomeActivity.class);

                preferences.edit().putString("id_usuario", dados[1]).commit();
                preferences.edit().putString("nome_usuario", dados[2]).commit();
                preferences.edit().putString("email_usuario", dados[3]).commit();
                preferences.edit().putString("celular_usuario", dados[4]).commit();
                preferences.edit().putString("dt_nasc", dados[5]).commit();
                preferences.edit().putString("senha_usuario", dados[6]).commit();
                preferences.edit().putString("cpf_usuario", dados[7]).commit();


                startActivity(abreInicio);

            }else{

                Toast.makeText(context, "Usuário ou senha incorretos", Toast.LENGTH_LONG).show();

            }

        }

    }


}
