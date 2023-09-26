<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 列表查询返回的每条记录的操作属性
 *
 * @method boolean getShowEdit() 获取编辑是否可见
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShowEdit(boolean $ShowEdit) 设置编辑是否可见
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsEdit() 获取编辑是否可点击
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsEdit(boolean $IsEdit) 设置编辑是否可点击
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEditText() 获取编辑按钮的文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEditText(string $EditText) 设置编辑按钮的文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEditTips() 获取编辑不可用时的提示文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEditTips(string $EditTips) 设置编辑不可用时的提示文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getShowDel() 获取删除是否可见
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShowDel(boolean $ShowDel) 设置删除是否可见
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDel() 获取删除是否可点击
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDel(boolean $IsDel) 设置删除是否可点击
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDelText() 获取删除按钮的文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelText(string $DelText) 设置删除按钮的文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDelTips() 获取删除不可用时的提示文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelTips(string $DelTips) 设置删除不可用时的提示文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getShowCopy() 获取复制是否可见
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShowCopy(boolean $ShowCopy) 设置复制是否可见
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getShowView() 获取是否可见
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShowView(boolean $ShowView) 设置是否可见
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getShowRename() 获取是否可重命名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShowRename(boolean $ShowRename) 设置是否可重命名
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaseStateAction extends AbstractModel
{
    /**
     * @var boolean 编辑是否可见
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShowEdit;

    /**
     * @var boolean 编辑是否可点击
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsEdit;

    /**
     * @var string 编辑按钮的文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EditText;

    /**
     * @var string 编辑不可用时的提示文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EditTips;

    /**
     * @var boolean 删除是否可见
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShowDel;

    /**
     * @var boolean 删除是否可点击
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDel;

    /**
     * @var string 删除按钮的文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelText;

    /**
     * @var string 删除不可用时的提示文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelTips;

    /**
     * @var boolean 复制是否可见
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShowCopy;

    /**
     * @var boolean 是否可见
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShowView;

    /**
     * @var boolean 是否可重命名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShowRename;

    /**
     * @param boolean $ShowEdit 编辑是否可见
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsEdit 编辑是否可点击
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EditText 编辑按钮的文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EditTips 编辑不可用时的提示文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ShowDel 删除是否可见
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDel 删除是否可点击
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DelText 删除按钮的文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DelTips 删除不可用时的提示文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ShowCopy 复制是否可见
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ShowView 是否可见
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ShowRename 是否可重命名
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ShowEdit",$param) and $param["ShowEdit"] !== null) {
            $this->ShowEdit = $param["ShowEdit"];
        }

        if (array_key_exists("IsEdit",$param) and $param["IsEdit"] !== null) {
            $this->IsEdit = $param["IsEdit"];
        }

        if (array_key_exists("EditText",$param) and $param["EditText"] !== null) {
            $this->EditText = $param["EditText"];
        }

        if (array_key_exists("EditTips",$param) and $param["EditTips"] !== null) {
            $this->EditTips = $param["EditTips"];
        }

        if (array_key_exists("ShowDel",$param) and $param["ShowDel"] !== null) {
            $this->ShowDel = $param["ShowDel"];
        }

        if (array_key_exists("IsDel",$param) and $param["IsDel"] !== null) {
            $this->IsDel = $param["IsDel"];
        }

        if (array_key_exists("DelText",$param) and $param["DelText"] !== null) {
            $this->DelText = $param["DelText"];
        }

        if (array_key_exists("DelTips",$param) and $param["DelTips"] !== null) {
            $this->DelTips = $param["DelTips"];
        }

        if (array_key_exists("ShowCopy",$param) and $param["ShowCopy"] !== null) {
            $this->ShowCopy = $param["ShowCopy"];
        }

        if (array_key_exists("ShowView",$param) and $param["ShowView"] !== null) {
            $this->ShowView = $param["ShowView"];
        }

        if (array_key_exists("ShowRename",$param) and $param["ShowRename"] !== null) {
            $this->ShowRename = $param["ShowRename"];
        }
    }
}
