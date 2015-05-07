<?php
/**
 * This is the positions file. It is a simple array that holds the structure that will be loaded in the block manager
 * We have commented each line to help you understand what is happening
 */
$positions =  array(
    'header'    =>  array(                                  // Add a new row in the block manager with the name "header"
        'is_default'    =>  true,                           // Make it default. This means that this row will be editable only in the default layout
        'title' =>  'strings.header',                       // Give it a title.
        'grids' =>  array(                                  // This array holds the columns of the row.
            '1' => array(                                   // We named this column as "1". You can give any alphanumeric name here. No spaces and special chars
                'cols'      =>  2,                          // Give it a width of 2 cols. Twitter Bootstrap is used. So a row is 12 cols
                'title'     =>  '2 Cols'                    // Give it a title.

            ),
            '2' => array(                                   // Name this as "2"
                'cols'      =>  10,                         // Width for this one is 10 cols
                'title'     =>  '10 Cols'                   // Another title

            )
        )
    ),
    'body'    =>  array(                                    // Add new row and name it "body"
        'is_default'    =>  false,                          // We want this to be editable in all layouts
        'title' =>  'strings.body',                         // Title
        'grids' =>  array(                                  // Let's create some columns
            '1' => array(                                   // Name: "1"
                'cols'      =>  12,                         // Full width (12 cols)
                'title'     =>  '12 Cols'                   // Another name

            ),                                              // The same is for all bellow
            '2' => array(
                'cols'      =>  12,
                'title'     =>  '12 Cols'

            ),
            '3' => array(
                'cols'      =>  12,
                'title'     =>  '12 Cols'

            ),
            '4' => array(
                'cols'      =>  12,
                'title'     =>  '12 Cols'

            ),
            '5' => array(
                'cols'      =>  12,
                'title'     =>  '12 Cols'

            ),
            '6' => array(
                'cols'      =>  12,
                'title'     =>  '12 Cols'

            ),
        )
    ),
    'footer'    =>  array(                                  // Add new row and name it "footer"
        'is_default'    =>  true,                           // Editable only from the default layout
        'title' =>  'strings.footer',                       // A title
        'grids' =>  array(
            '1' => array(
                'cols'      =>  4,                          // 4 Columns width
                'title'     =>  '3 Cols'

            ),
            '2' => array(
                'cols'      =>  4,                          // 4 Columns width
                'title'     =>  '3 Cols'

            ),
            '3' => array(
                'cols'      =>  4,                          // 4 Columns width
                'title'     =>  '3 Cols'

            )
        )
    ),
);

return $positions;                                          // Return the positions