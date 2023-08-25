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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 定时伸缩配置参数
 *
 * @method string getPeriod() 获取定时伸缩周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriod(string $Period) 设置定时伸缩周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartAt() 获取定时伸缩开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartAt(string $StartAt) 设置定时伸缩开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetReplicas() 获取定时伸缩目标节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetReplicas(integer $TargetReplicas) 设置定时伸缩目标节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCrontab() 获取定时伸缩cron表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontab(string $Crontab) 设置定时伸缩cron表达式
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudNativeAPIGatewayStrategyCronScalerConfigParam extends AbstractModel
{
    /**
     * @var string 定时伸缩周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Period;

    /**
     * @var string 定时伸缩开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartAt;

    /**
     * @var integer 定时伸缩目标节点数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetReplicas;

    /**
     * @var string 定时伸缩cron表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Crontab;

    /**
     * @param string $Period 定时伸缩周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartAt 定时伸缩开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetReplicas 定时伸缩目标节点数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Crontab 定时伸缩cron表达式
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartAt",$param) and $param["StartAt"] !== null) {
            $this->StartAt = $param["StartAt"];
        }

        if (array_key_exists("TargetReplicas",$param) and $param["TargetReplicas"] !== null) {
            $this->TargetReplicas = $param["TargetReplicas"];
        }

        if (array_key_exists("Crontab",$param) and $param["Crontab"] !== null) {
            $this->Crontab = $param["Crontab"];
        }
    }
}
