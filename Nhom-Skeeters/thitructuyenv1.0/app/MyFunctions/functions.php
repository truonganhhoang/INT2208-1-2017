<?php
/**
 * Created by PhpStorm.
 * User: quy
 * Date: 30/04/2017
 * Time: 06:13
 */
function menuMulti($data, $parent_id = 0, $str = "---|", $select = 0)
{
    foreach ($data as $value) {
        $id = $value['id'];
        $name = $value['name'];
        if ($value['parent_id'] == $parent_id) {
            if ($select != 0 && $id == $select) {
                echo '<option value="' . $id . '" selected>' . $str . " " . $name . '</option>';
            } else {
                echo '<option value="' . $id . '">' . $str . " " . $name . '</option>';
            }
            menuMulti($data, $id, $str . " ---|", $select);
        }
    }
}

function listCate($data, $parent = 0, $str = "")
{
    foreach ($data as $value) {
        $id = $value['id'];
        $name = $value['name'];
        if ($value['parent_id'] == $parent) {
            echo '
                <tr class="list_data">';
            if ($str == '') {
                echo '<td class="list_td alignleft"><b>' . $str . ' ' . $name . '</b></td>';
            } else {
                echo '<td class="list_td alignleft">' . $str . ' ' . $name . '</td>';
            }

            echo '<td class="list_td aligncenter">
                    <a href="edit/'.$id.'"><img src="/images/edit.png" /></a>&nbsp;&nbsp;&nbsp;
                    <a href="delete/'.$id.'" onclick="return confirmDel(\'Bạn có chắc muốn xóa danh mục này?\')"><img src="/images/delete.png" /></a>
                    </td>
                </tr>
            ';
            listCate($data, $id, $str . " ---|");
        }
    }
}

function subMenu($data, $id){
    echo '<ul>';
    foreach ($data as $item){
        if($item['parent_id'] == $id){
            echo '<li><a href="../../the-loai/"'.$item['id'].'/'.$item['slug'].'>'.$item['name'].'</a>';
            subMenu($data, $item['id']);
            echo '</li>';
        }
    }
    echo '</ul>';
}

?>