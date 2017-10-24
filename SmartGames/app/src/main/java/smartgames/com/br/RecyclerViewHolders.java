package smartgames.com.br;

import android.support.v7.widget.RecyclerView;
import android.view.View;
import android.widget.ImageView;
import android.widget.TextView;
public class RecyclerViewHolders extends RecyclerView.ViewHolder implements View.OnClickListener{

    public int id_produto;
    public ImageView img_produto;
    public TextView preco_produto;
    public TextView marca_produto;
    public TextView nome_produto;
    public RecyclerViewHolders(View itemView) {
        super(itemView);
        itemView.setOnClickListener(this);
        img_produto = (ImageView)itemView.findViewById(R.id.img_produto);
        preco_produto = (TextView)itemView.findViewById(R.id.preco_produto);
        nome_produto = (TextView)itemView.findViewById(R.id.nome_produto);
        marca_produto = (TextView)itemView.findViewById(R.id.marca_produto);
    }
    @Override
    public void onClick(View view) {
    }
}