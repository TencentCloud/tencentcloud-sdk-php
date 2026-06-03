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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表的全部列名数据列表
 *
 * @method array getList() 获取表中的列的列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setList(array $List) 设置表中的列的列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranId() 获取异步事务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranId(string $TranId) 设置异步事务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTranStatus() 获取异步事务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranStatus(integer $TranStatus) 设置异步事务状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableColumnListData extends AbstractModel
{
    /**
     * @var array 表中的列的列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $List;

    /**
     * @var string 异步事务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranId;

    /**
     * @var integer 异步事务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranStatus;

    /**
     * @param array $List 表中的列的列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranId 异步事务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TranStatus 异步事务状态
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
        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new TableColumn();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("TranId",$param) and $param["TranId"] !== null) {
            $this->TranId = $param["TranId"];
        }

        if (array_key_exists("TranStatus",$param) and $param["TranStatus"] !== null) {
            $this->TranStatus = $param["TranStatus"];
        }
    }
}
