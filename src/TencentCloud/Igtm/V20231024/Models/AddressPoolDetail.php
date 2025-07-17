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
 * 地址池详情
 *
 * @method integer getPoolId() 获取地址池 id
 * @method void setPoolId(integer $PoolId) 设置地址池 id
 * @method string getPoolName() 获取地址池名
 * @method void setPoolName(string $PoolName) 设置地址池名
 * @method string getAddrType() 获取地址池地址类型：IPV4、IPV6、DOMAIN
 * @method void setAddrType(string $AddrType) 设置地址池地址类型：IPV4、IPV6、DOMAIN
 * @method string getTrafficStrategy() 获取流量策略: WEIGHT负载均衡，ALL解析全部
 * @method void setTrafficStrategy(string $TrafficStrategy) 设置流量策略: WEIGHT负载均衡，ALL解析全部
 * @method integer getMonitorId() 获取监控器id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorId(integer $MonitorId) 设置监控器id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedOn() 获取创建时间
 * @method void setCreatedOn(string $CreatedOn) 设置创建时间
 * @method string getUpdatedOn() 获取更新时间
 * @method void setUpdatedOn(string $UpdatedOn) 设置更新时间
 */
class AddressPoolDetail extends AbstractModel
{
    /**
     * @var integer 地址池 id
     */
    public $PoolId;

    /**
     * @var string 地址池名
     */
    public $PoolName;

    /**
     * @var string 地址池地址类型：IPV4、IPV6、DOMAIN
     */
    public $AddrType;

    /**
     * @var string 流量策略: WEIGHT负载均衡，ALL解析全部
     */
    public $TrafficStrategy;

    /**
     * @var integer 监控器id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorId;

    /**
     * @var string 创建时间
     */
    public $CreatedOn;

    /**
     * @var string 更新时间
     */
    public $UpdatedOn;

    /**
     * @param integer $PoolId 地址池 id
     * @param string $PoolName 地址池名
     * @param string $AddrType 地址池地址类型：IPV4、IPV6、DOMAIN
     * @param string $TrafficStrategy 流量策略: WEIGHT负载均衡，ALL解析全部
     * @param integer $MonitorId 监控器id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedOn 创建时间
     * @param string $UpdatedOn 更新时间
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
        if (array_key_exists("PoolId",$param) and $param["PoolId"] !== null) {
            $this->PoolId = $param["PoolId"];
        }

        if (array_key_exists("PoolName",$param) and $param["PoolName"] !== null) {
            $this->PoolName = $param["PoolName"];
        }

        if (array_key_exists("AddrType",$param) and $param["AddrType"] !== null) {
            $this->AddrType = $param["AddrType"];
        }

        if (array_key_exists("TrafficStrategy",$param) and $param["TrafficStrategy"] !== null) {
            $this->TrafficStrategy = $param["TrafficStrategy"];
        }

        if (array_key_exists("MonitorId",$param) and $param["MonitorId"] !== null) {
            $this->MonitorId = $param["MonitorId"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }
    }
}
