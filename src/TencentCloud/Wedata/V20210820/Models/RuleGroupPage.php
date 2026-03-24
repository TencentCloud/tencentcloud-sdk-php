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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则组分页
 *
 * @method integer getTotalCount() 获取查询结果总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置查询结果总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getItems() 获取规则组列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置规则组列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMonitorEnabledCount() 获取已开启监控任务数量（在查询结果总量中）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorEnabledCount(integer $MonitorEnabledCount) 设置已开启监控任务数量（在查询结果总量中）
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleGroupPage extends AbstractModel
{
    /**
     * @var integer 查询结果总数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var array 规则组列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @var integer 已开启监控任务数量（在查询结果总量中）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorEnabledCount;

    /**
     * @param integer $TotalCount 查询结果总数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Items 规则组列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MonitorEnabledCount 已开启监控任务数量（在查询结果总量中）
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new RuleGroup();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("MonitorEnabledCount",$param) and $param["MonitorEnabledCount"] !== null) {
            $this->MonitorEnabledCount = $param["MonitorEnabledCount"];
        }
    }
}
