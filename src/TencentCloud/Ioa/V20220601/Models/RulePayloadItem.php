<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 条件
 *
 * @method string getFieldKey() 获取字段Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldKey(string $FieldKey) 设置字段Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOption() 获取选项（eq:等于,neq:不等于,like,nlike,gt:大于,lt:小于,egt:大于等于,elt:小于等于）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOption(string $Option) 设置选项（eq:等于,neq:不等于,like,nlike,gt:大于,lt:小于,egt:大于等于,elt:小于等于）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValue() 获取值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(array $Value) 设置值
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGroups() 获取嵌套条件组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroups(array $Groups) 设置嵌套条件组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRelateOption() 获取RelateOption 关系操作符（and/or），用于根级别条件关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelateOption(string $RelateOption) 设置RelateOption 关系操作符（and/or），用于根级别条件关系
注意：此字段可能返回 null，表示取不到有效值。
 */
class RulePayloadItem extends AbstractModel
{
    /**
     * @var string 字段Key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldKey;

    /**
     * @var string 选项（eq:等于,neq:不等于,like,nlike,gt:大于,lt:小于,egt:大于等于,elt:小于等于）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Option;

    /**
     * @var array 值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var array 嵌套条件组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Groups;

    /**
     * @var string RelateOption 关系操作符（and/or），用于根级别条件关系
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelateOption;

    /**
     * @param string $FieldKey 字段Key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Option 选项（eq:等于,neq:不等于,like,nlike,gt:大于,lt:小于,egt:大于等于,elt:小于等于）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Value 值
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Groups 嵌套条件组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RelateOption RelateOption 关系操作符（and/or），用于根级别条件关系
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
        if (array_key_exists("FieldKey",$param) and $param["FieldKey"] !== null) {
            $this->FieldKey = $param["FieldKey"];
        }

        if (array_key_exists("Option",$param) and $param["Option"] !== null) {
            $this->Option = $param["Option"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = [];
            foreach ($param["Groups"] as $key => $value){
                $obj = new RulePayloadItem();
                $obj->deserialize($value);
                array_push($this->Groups, $obj);
            }
        }

        if (array_key_exists("RelateOption",$param) and $param["RelateOption"] !== null) {
            $this->RelateOption = $param["RelateOption"];
        }
    }
}
