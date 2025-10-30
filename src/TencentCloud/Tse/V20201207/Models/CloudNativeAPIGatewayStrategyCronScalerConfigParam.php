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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 定时伸缩配置参数
 *
 * @method string getPeriod() 获取定时伸缩周期
 * @method void setPeriod(string $Period) 设置定时伸缩周期
 * @method string getStartAt() 获取定时伸缩开始时间
 * @method void setStartAt(string $StartAt) 设置定时伸缩开始时间
 * @method integer getTargetReplicas() 获取定时伸缩目标节点数，不超过指标伸缩中定义的最大节点数
 * @method void setTargetReplicas(integer $TargetReplicas) 设置定时伸缩目标节点数，不超过指标伸缩中定义的最大节点数
 * @method string getCrontab() 获取定时伸缩cron表达式，无需输入
 * @method void setCrontab(string $Crontab) 设置定时伸缩cron表达式，无需输入
 */
class CloudNativeAPIGatewayStrategyCronScalerConfigParam extends AbstractModel
{
    /**
     * @var string 定时伸缩周期
     */
    public $Period;

    /**
     * @var string 定时伸缩开始时间
     */
    public $StartAt;

    /**
     * @var integer 定时伸缩目标节点数，不超过指标伸缩中定义的最大节点数
     */
    public $TargetReplicas;

    /**
     * @var string 定时伸缩cron表达式，无需输入
     */
    public $Crontab;

    /**
     * @param string $Period 定时伸缩周期
     * @param string $StartAt 定时伸缩开始时间
     * @param integer $TargetReplicas 定时伸缩目标节点数，不超过指标伸缩中定义的最大节点数
     * @param string $Crontab 定时伸缩cron表达式，无需输入
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
