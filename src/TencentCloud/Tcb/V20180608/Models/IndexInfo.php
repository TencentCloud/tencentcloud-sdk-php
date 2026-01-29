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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 索引信息
 *
 * @method string getName() 获取索引名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置索引名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取索引大小，单位: 字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置索引大小，单位: 字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKeys() 获取索引键值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeys(array $Keys) 设置索引键值
注意：此字段可能返回 null，表示取不到有效值。
 * @method IndexAccesses getAccesses() 获取索引使用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccesses(IndexAccesses $Accesses) 设置索引使用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUnique() 获取是否为唯一索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnique(boolean $Unique) 设置是否为唯一索引
注意：此字段可能返回 null，表示取不到有效值。
 */
class IndexInfo extends AbstractModel
{
    /**
     * @var string 索引名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 索引大小，单位: 字节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var array 索引键值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keys;

    /**
     * @var IndexAccesses 索引使用信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Accesses;

    /**
     * @var boolean 是否为唯一索引
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unique;

    /**
     * @param string $Name 索引名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size 索引大小，单位: 字节
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Keys 索引键值
注意：此字段可能返回 null，表示取不到有效值。
     * @param IndexAccesses $Accesses 索引使用信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Unique 是否为唯一索引
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = [];
            foreach ($param["Keys"] as $key => $value){
                $obj = new Indexkey();
                $obj->deserialize($value);
                array_push($this->Keys, $obj);
            }
        }

        if (array_key_exists("Accesses",$param) and $param["Accesses"] !== null) {
            $this->Accesses = new IndexAccesses();
            $this->Accesses->deserialize($param["Accesses"]);
        }

        if (array_key_exists("Unique",$param) and $param["Unique"] !== null) {
            $this->Unique = $param["Unique"];
        }
    }
}
