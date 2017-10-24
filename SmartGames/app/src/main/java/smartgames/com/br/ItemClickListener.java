package smartgames.com.br;

/**
 * Created by nicol on 22/10/2017.
 */

import android.view.View;

public interface ItemClickListener {

    void onClick(View view, int position, boolean isLongClick);
}