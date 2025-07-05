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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAddressPool请求参数结构体
 *
 * @method string getPoolName() 获取地址池名称，不允许重复
 * @method void setPoolName(string $PoolName) 设置地址池名称，不允许重复
 * @method string getTrafficStrategy() 获取流量策略：WEIGHT负载均衡，ALL解析所有健康地址
 * @method void setTrafficStrategy(string $TrafficStrategy) 设置流量策略：WEIGHT负载均衡，ALL解析所有健康地址
 * @method array getAddressSet() 获取地址列表
 * @method void setAddressSet(array $AddressSet) 设置地址列表
 * @method integer getMonitorId() 获取监控器id
 * @method void setMonitorId(integer $MonitorId) 设置监控器id
 */
class CreateAddressPoolRequest extends AbstractModel
{
    /**
     * @var string 地址池名称，不允许重复
     */
    public $PoolName;

    /**
     * @var string 流量策略：WEIGHT负载均衡，ALL解析所有健康地址
     */
    public $TrafficStrategy;

    /**
     * @var array 地址列表
     */
    public $AddressSet;

    /**
     * @var integer 监控器id
     */
    public $MonitorId;

    /**
     * @param string $PoolName 地址池名称，不允许重复
     * @param string $TrafficStrategy 流量策略：WEIGHT负载均衡，ALL解析所有健康地址
     * @param array $AddressSet 地址列表
     * @param integer $MonitorId 监控器id
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
        if (array_key_exists("PoolName",$param) and $param["PoolName"] !== null) {
            $this->PoolName = $param["PoolName"];
        }

        if (array_key_exists("TrafficStrategy",$param) and $param["TrafficStrategy"] !== null) {
            $this->TrafficStrategy = $param["TrafficStrategy"];
        }

        if (array_key_exists("AddressSet",$param) and $param["AddressSet"] !== null) {
            $this->AddressSet = [];
            foreach ($param["AddressSet"] as $key => $value){
                $obj = new Address();
                $obj->deserialize($value);
                array_push($this->AddressSet, $obj);
            }
        }

        if (array_key_exists("MonitorId",$param) and $param["MonitorId"] !== null) {
            $this->MonitorId = $param["MonitorId"];
        }
    }
}
