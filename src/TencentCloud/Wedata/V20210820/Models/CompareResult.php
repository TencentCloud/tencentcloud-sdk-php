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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 质量检查对比结果
 *
 * @method array getItems() 获取对比结果项列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置对比结果项列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalRows() 获取检测总行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalRows(integer $TotalRows) 设置检测总行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPassRows() 获取检测通过行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassRows(integer $PassRows) 设置检测通过行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTriggerRows() 获取检测不通过行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerRows(integer $TriggerRows) 设置检测不通过行数
注意：此字段可能返回 null，表示取不到有效值。
 */
class CompareResult extends AbstractModel
{
    /**
     * @var array 对比结果项列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @var integer 检测总行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalRows;

    /**
     * @var integer 检测通过行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PassRows;

    /**
     * @var integer 检测不通过行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerRows;

    /**
     * @param array $Items 对比结果项列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalRows 检测总行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PassRows 检测通过行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TriggerRows 检测不通过行数
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new CompareResultItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("TotalRows",$param) and $param["TotalRows"] !== null) {
            $this->TotalRows = $param["TotalRows"];
        }

        if (array_key_exists("PassRows",$param) and $param["PassRows"] !== null) {
            $this->PassRows = $param["PassRows"];
        }

        if (array_key_exists("TriggerRows",$param) and $param["TriggerRows"] !== null) {
            $this->TriggerRows = $param["TriggerRows"];
        }
    }
}
