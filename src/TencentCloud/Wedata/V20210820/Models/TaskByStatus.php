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
 * 状态趋势统计
 *
 * @method string getCountGroup() 获取统计值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountGroup(string $CountGroup) 设置统计值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShowTimeGroup() 获取日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShowTimeGroup(string $ShowTimeGroup) 设置日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleUnit() 获取周期单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleUnit(string $CycleUnit) 设置周期单位
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskByStatus extends AbstractModel
{
    /**
     * @var string 统计值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CountGroup;

    /**
     * @var string 日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShowTimeGroup;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 周期单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleUnit;

    /**
     * @param string $CountGroup 统计值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShowTimeGroup 日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleUnit 周期单位
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
        if (array_key_exists("CountGroup",$param) and $param["CountGroup"] !== null) {
            $this->CountGroup = $param["CountGroup"];
        }

        if (array_key_exists("ShowTimeGroup",$param) and $param["ShowTimeGroup"] !== null) {
            $this->ShowTimeGroup = $param["ShowTimeGroup"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }
    }
}
