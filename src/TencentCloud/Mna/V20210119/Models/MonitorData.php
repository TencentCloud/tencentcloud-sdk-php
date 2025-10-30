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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流量监控指标
 *
 * @method string getTime() 获取时间点：s
 * @method void setTime(string $Time) 设置时间点：s
 * @method float getBusinessMetrics() 获取业务指标（bps/ms/%）
 * @method void setBusinessMetrics(float $BusinessMetrics) 设置业务指标（bps/ms/%）
 * @method array getSlotNetInfo() 获取网卡状态信息
 * @method void setSlotNetInfo(array $SlotNetInfo) 设置网卡状态信息
 */
class MonitorData extends AbstractModel
{
    /**
     * @var string 时间点：s
     */
    public $Time;

    /**
     * @var float 业务指标（bps/ms/%）
     */
    public $BusinessMetrics;

    /**
     * @var array 网卡状态信息
     */
    public $SlotNetInfo;

    /**
     * @param string $Time 时间点：s
     * @param float $BusinessMetrics 业务指标（bps/ms/%）
     * @param array $SlotNetInfo 网卡状态信息
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("BusinessMetrics",$param) and $param["BusinessMetrics"] !== null) {
            $this->BusinessMetrics = $param["BusinessMetrics"];
        }

        if (array_key_exists("SlotNetInfo",$param) and $param["SlotNetInfo"] !== null) {
            $this->SlotNetInfo = [];
            foreach ($param["SlotNetInfo"] as $key => $value){
                $obj = new SlotNetInfo();
                $obj->deserialize($value);
                array_push($this->SlotNetInfo, $obj);
            }
        }
    }
}
