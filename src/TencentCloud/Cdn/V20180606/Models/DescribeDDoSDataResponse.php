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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDDoSData返回参数结构体
 *
 * @method array getData() 获取DDoS统计数据数组
 * @method void setData(array $Data) 设置DDoS统计数据数组
 * @method string getInterval() 获取时间粒度：
min：1 分钟粒度
5min：5 分钟粒度
hour：1 小时粒度
day：天粒度
 * @method void setInterval(string $Interval) 设置时间粒度：
min：1 分钟粒度
5min：5 分钟粒度
hour：1 小时粒度
day：天粒度
 * @method array getAttackBandwidthData() 获取DDoS统计攻击带宽峰值数组
 * @method void setAttackBandwidthData(array $AttackBandwidthData) 设置DDoS统计攻击带宽峰值数组
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDDoSDataResponse extends AbstractModel
{
    /**
     * @var array DDoS统计数据数组
     */
    public $Data;

    /**
     * @var string 时间粒度：
min：1 分钟粒度
5min：5 分钟粒度
hour：1 小时粒度
day：天粒度
     */
    public $Interval;

    /**
     * @var array DDoS统计攻击带宽峰值数组
     */
    public $AttackBandwidthData;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data DDoS统计数据数组
     * @param string $Interval 时间粒度：
min：1 分钟粒度
5min：5 分钟粒度
hour：1 小时粒度
day：天粒度
     * @param array $AttackBandwidthData DDoS统计攻击带宽峰值数组
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new DDoSStatsData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("AttackBandwidthData",$param) and $param["AttackBandwidthData"] !== null) {
            $this->AttackBandwidthData = [];
            foreach ($param["AttackBandwidthData"] as $key => $value){
                $obj = new DDoSAttackBandwidthData();
                $obj->deserialize($value);
                array_push($this->AttackBandwidthData, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
