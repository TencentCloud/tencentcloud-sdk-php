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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DMSTable信息
 *
 * @method DMSTable getTable() 获取DMS表信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTable(DMSTable $Table) 设置DMS表信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Asset getAsset() 获取基础对象信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsset(Asset $Asset) 设置基础对象信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class DMSTableInfo extends AbstractModel
{
    /**
     * @var DMSTable DMS表信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Table;

    /**
     * @var Asset 基础对象信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Asset;

    /**
     * @param DMSTable $Table DMS表信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Asset $Asset 基础对象信息
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
        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = new DMSTable();
            $this->Table->deserialize($param["Table"]);
        }

        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = new Asset();
            $this->Asset->deserialize($param["Asset"]);
        }
    }
}
