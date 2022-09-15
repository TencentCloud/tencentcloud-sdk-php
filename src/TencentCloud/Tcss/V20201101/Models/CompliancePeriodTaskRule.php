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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表示一个定时任务的周期设置
 *
 * @method integer getFrequency() 获取执行的频率（几天一次），取值为：1,3,7。
 * @method void setFrequency(integer $Frequency) 设置执行的频率（几天一次），取值为：1,3,7。
 * @method string getExecutionTime() 获取在这天的什么时间执行，格式为：HH:mm:SS。
 * @method void setExecutionTime(string $ExecutionTime) 设置在这天的什么时间执行，格式为：HH:mm:SS。
 * @method boolean getEnable() 获取是否开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(boolean $Enable) 设置是否开启
注意：此字段可能返回 null，表示取不到有效值。
 */
class CompliancePeriodTaskRule extends AbstractModel
{
    /**
     * @var integer 执行的频率（几天一次），取值为：1,3,7。
     */
    public $Frequency;

    /**
     * @var string 在这天的什么时间执行，格式为：HH:mm:SS。
     */
    public $ExecutionTime;

    /**
     * @var boolean 是否开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @param integer $Frequency 执行的频率（几天一次），取值为：1,3,7。
     * @param string $ExecutionTime 在这天的什么时间执行，格式为：HH:mm:SS。
     * @param boolean $Enable 是否开启
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
        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("ExecutionTime",$param) and $param["ExecutionTime"] !== null) {
            $this->ExecutionTime = $param["ExecutionTime"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
