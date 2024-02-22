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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据不一致详情
 *
 * @method string getDb() 获取数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDb(string $Db) 设置数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTable() 获取集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTable(string $Table) 设置集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcChunk() 获取源端ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcChunk(string $SrcChunk) 设置源端ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDstChunk() 获取目标端ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstChunk(string $DstChunk) 设置目标端ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcItem() 获取源端值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcItem(string $SrcItem) 设置源端值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDstItem() 获取目标端值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstItem(string $DstItem) 设置目标端值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class DifferenceData extends AbstractModel
{
    /**
     * @var string 数据库名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Db;

    /**
     * @var string 集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Table;

    /**
     * @var string 源端ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcChunk;

    /**
     * @var string 目标端ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstChunk;

    /**
     * @var string 源端值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcItem;

    /**
     * @var string 目标端值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstItem;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @param string $Db 数据库名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Table 集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcChunk 源端ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DstChunk 目标端ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcItem 源端值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DstItem 目标端值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 更新时间
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
        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("SrcChunk",$param) and $param["SrcChunk"] !== null) {
            $this->SrcChunk = $param["SrcChunk"];
        }

        if (array_key_exists("DstChunk",$param) and $param["DstChunk"] !== null) {
            $this->DstChunk = $param["DstChunk"];
        }

        if (array_key_exists("SrcItem",$param) and $param["SrcItem"] !== null) {
            $this->SrcItem = $param["SrcItem"];
        }

        if (array_key_exists("DstItem",$param) and $param["DstItem"] !== null) {
            $this->DstItem = $param["DstItem"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
