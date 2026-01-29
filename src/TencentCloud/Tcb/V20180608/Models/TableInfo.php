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
 * 表信息
 *
 * @method string getTableName() 获取表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取表中文档数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置表中文档数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取表的大小（即表中文档总大小），单位：字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置表的大小（即表中文档总大小），单位：字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndexCount() 获取索引数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexCount(integer $IndexCount) 设置索引数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndexSize() 获取索引占用空间，单位：字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexSize(integer $IndexSize) 设置索引占用空间，单位：字节
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableInfo extends AbstractModel
{
    /**
     * @var string 表名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var integer 表中文档数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var integer 表的大小（即表中文档总大小），单位：字节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var integer 索引数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexCount;

    /**
     * @var integer 索引占用空间，单位：字节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexSize;

    /**
     * @param string $TableName 表名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 表中文档数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size 表的大小（即表中文档总大小），单位：字节
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IndexCount 索引数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IndexSize 索引占用空间，单位：字节
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("IndexCount",$param) and $param["IndexCount"] !== null) {
            $this->IndexCount = $param["IndexCount"];
        }

        if (array_key_exists("IndexSize",$param) and $param["IndexSize"] !== null) {
            $this->IndexSize = $param["IndexSize"];
        }
    }
}
