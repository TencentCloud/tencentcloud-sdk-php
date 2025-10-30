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
 * 地址池
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
 * @method string getStatus() 获取OK正常，DOWN故障，WARN风险，UNKNOWN未知
 * @method void setStatus(string $Status) 设置OK正常，DOWN故障，WARN风险，UNKNOWN未知
 * @method integer getAddressNum() 获取地址数
 * @method void setAddressNum(integer $AddressNum) 设置地址数
 * @method integer getMonitorGroupNum() 获取探点数
 * @method void setMonitorGroupNum(integer $MonitorGroupNum) 设置探点数
 * @method integer getMonitorTaskNum() 获取探测任务数
 * @method void setMonitorTaskNum(integer $MonitorTaskNum) 设置探测任务数
 * @method array getInstanceInfo() 获取实例相关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceInfo(array $InstanceInfo) 设置实例相关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAddressSet() 获取地址池地址信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddressSet(array $AddressSet) 设置地址池地址信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedOn() 获取创建时间
 * @method void setCreatedOn(string $CreatedOn) 设置创建时间
 * @method string getUpdatedOn() 获取更新时间
 * @method void setUpdatedOn(string $UpdatedOn) 设置更新时间
 */
class AddressPool extends AbstractModel
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
     * @var string OK正常，DOWN故障，WARN风险，UNKNOWN未知
     */
    public $Status;

    /**
     * @var integer 地址数
     */
    public $AddressNum;

    /**
     * @var integer 探点数
     */
    public $MonitorGroupNum;

    /**
     * @var integer 探测任务数
     */
    public $MonitorTaskNum;

    /**
     * @var array 实例相关信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceInfo;

    /**
     * @var array 地址池地址信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddressSet;

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
     * @param string $Status OK正常，DOWN故障，WARN风险，UNKNOWN未知
     * @param integer $AddressNum 地址数
     * @param integer $MonitorGroupNum 探点数
     * @param integer $MonitorTaskNum 探测任务数
     * @param array $InstanceInfo 实例相关信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AddressSet 地址池地址信息
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AddressNum",$param) and $param["AddressNum"] !== null) {
            $this->AddressNum = $param["AddressNum"];
        }

        if (array_key_exists("MonitorGroupNum",$param) and $param["MonitorGroupNum"] !== null) {
            $this->MonitorGroupNum = $param["MonitorGroupNum"];
        }

        if (array_key_exists("MonitorTaskNum",$param) and $param["MonitorTaskNum"] !== null) {
            $this->MonitorTaskNum = $param["MonitorTaskNum"];
        }

        if (array_key_exists("InstanceInfo",$param) and $param["InstanceInfo"] !== null) {
            $this->InstanceInfo = [];
            foreach ($param["InstanceInfo"] as $key => $value){
                $obj = new InstanceInfo();
                $obj->deserialize($value);
                array_push($this->InstanceInfo, $obj);
            }
        }

        if (array_key_exists("AddressSet",$param) and $param["AddressSet"] !== null) {
            $this->AddressSet = [];
            foreach ($param["AddressSet"] as $key => $value){
                $obj = new Address();
                $obj->deserialize($value);
                array_push($this->AddressSet, $obj);
            }
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }
    }
}
