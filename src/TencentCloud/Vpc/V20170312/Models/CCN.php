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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网（CCN）对象
 *
 * @method string getCcnId() 获取云联网唯一ID
 * @method void setCcnId(string $CcnId) 设置云联网唯一ID
 * @method string getCcnName() 获取云联网名称
 * @method void setCcnName(string $CcnName) 设置云联网名称
 * @method string getCcnDescription() 获取云联网描述信息
 * @method void setCcnDescription(string $CcnDescription) 设置云联网描述信息
 * @method integer getInstanceCount() 获取关联实例数量
 * @method void setInstanceCount(integer $InstanceCount) 设置关联实例数量
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getState() 获取实例状态， 'ISOLATED': 隔离中（欠费停服），'AVAILABLE'：运行中。
 * @method void setState(string $State) 设置实例状态， 'ISOLATED': 隔离中（欠费停服），'AVAILABLE'：运行中。
 * @method string getQosLevel() 获取实例服务质量，’PT’：白金，'AU'：金，'AG'：银。
 * @method void setQosLevel(string $QosLevel) 设置实例服务质量，’PT’：白金，'AU'：金，'AG'：银。
 * @method string getInstanceChargeType() 获取付费类型，PREPAID为预付费，POSTPAID为后付费。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置付费类型，PREPAID为预付费，POSTPAID为后付费。
 * @method string getBandwidthLimitType() 获取限速类型，`INTER_REGION_LIMIT` 为地域间限速；`OUTER_REGION_LIMIT` 为地域出口限速。
 * @method void setBandwidthLimitType(string $BandwidthLimitType) 设置限速类型，`INTER_REGION_LIMIT` 为地域间限速；`OUTER_REGION_LIMIT` 为地域出口限速。
 * @method array getTagSet() 获取标签键值对。
 * @method void setTagSet(array $TagSet) 设置标签键值对。
 * @method boolean getRoutePriorityFlag() 获取是否支持云联网路由优先级的功能。`False`：不支持，`True`：支持。
 * @method void setRoutePriorityFlag(boolean $RoutePriorityFlag) 设置是否支持云联网路由优先级的功能。`False`：不支持，`True`：支持。
 * @method integer getRouteTableCount() 获取实例关联的路由表个数。
 * @method void setRouteTableCount(integer $RouteTableCount) 设置实例关联的路由表个数。
 * @method boolean getRouteTableFlag() 获取是否开启云联网多路由表特性。`False`：未开启，`True`：开启。
 * @method void setRouteTableFlag(boolean $RouteTableFlag) 设置是否开启云联网多路由表特性。`False`：未开启，`True`：开启。
 * @method boolean getIsSecurityLock() 获取`true`：实例已被封禁，流量不通，`false`:解封禁。
 * @method void setIsSecurityLock(boolean $IsSecurityLock) 设置`true`：实例已被封禁，流量不通，`false`:解封禁。
 * @method boolean getRouteBroadcastPolicyFlag() 获取是否开启云联网路由传播策略。`False` 未开启，`True` 开启。
 * @method void setRouteBroadcastPolicyFlag(boolean $RouteBroadcastPolicyFlag) 设置是否开启云联网路由传播策略。`False` 未开启，`True` 开启。
 * @method boolean getRouteECMPFlag() 获取是否开启等价路由功能。`False` 未开启，`True` 开启。
 * @method void setRouteECMPFlag(boolean $RouteECMPFlag) 设置是否开启等价路由功能。`False` 未开启，`True` 开启。
 * @method boolean getRouteOverlapFlag() 获取是否开启路由重叠功能。`False` 未开启，`True` 开启。
 * @method void setRouteOverlapFlag(boolean $RouteOverlapFlag) 设置是否开启路由重叠功能。`False` 未开启，`True` 开启。
 * @method boolean getTrafficMarkingPolicyFlag() 获取是否开启QOS。
 * @method void setTrafficMarkingPolicyFlag(boolean $TrafficMarkingPolicyFlag) 设置是否开启QOS。
 * @method boolean getRouteSelectPolicyFlag() 获取是否开启路由表选择策略。
 * @method void setRouteSelectPolicyFlag(boolean $RouteSelectPolicyFlag) 设置是否开启路由表选择策略。
 * @method boolean getDirectConnectAccelerateChannelFlag() 获取是否开启二层云联网通道。
 * @method void setDirectConnectAccelerateChannelFlag(boolean $DirectConnectAccelerateChannelFlag) 设置是否开启二层云联网通道。
 * @method boolean getIpv6Flag() 获取是否支持ipv6路由表
 * @method void setIpv6Flag(boolean $Ipv6Flag) 设置是否支持ipv6路由表
 * @method boolean getMrtbAggregatePolicyFlag() 获取是否支持路由表聚合策略
 * @method void setMrtbAggregatePolicyFlag(boolean $MrtbAggregatePolicyFlag) 设置是否支持路由表聚合策略
 * @method boolean getMrtbPolicyValueFlag() 获取是否支持策略值
 * @method void setMrtbPolicyValueFlag(boolean $MrtbPolicyValueFlag) 设置是否支持策略值
 */
class CCN extends AbstractModel
{
    /**
     * @var string 云联网唯一ID
     */
    public $CcnId;

    /**
     * @var string 云联网名称
     */
    public $CcnName;

    /**
     * @var string 云联网描述信息
     */
    public $CcnDescription;

    /**
     * @var integer 关联实例数量
     */
    public $InstanceCount;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 实例状态， 'ISOLATED': 隔离中（欠费停服），'AVAILABLE'：运行中。
     */
    public $State;

    /**
     * @var string 实例服务质量，’PT’：白金，'AU'：金，'AG'：银。
     */
    public $QosLevel;

    /**
     * @var string 付费类型，PREPAID为预付费，POSTPAID为后付费。
     */
    public $InstanceChargeType;

    /**
     * @var string 限速类型，`INTER_REGION_LIMIT` 为地域间限速；`OUTER_REGION_LIMIT` 为地域出口限速。
     */
    public $BandwidthLimitType;

    /**
     * @var array 标签键值对。
     */
    public $TagSet;

    /**
     * @var boolean 是否支持云联网路由优先级的功能。`False`：不支持，`True`：支持。
     */
    public $RoutePriorityFlag;

    /**
     * @var integer 实例关联的路由表个数。
     */
    public $RouteTableCount;

    /**
     * @var boolean 是否开启云联网多路由表特性。`False`：未开启，`True`：开启。
     */
    public $RouteTableFlag;

    /**
     * @var boolean `true`：实例已被封禁，流量不通，`false`:解封禁。
     */
    public $IsSecurityLock;

    /**
     * @var boolean 是否开启云联网路由传播策略。`False` 未开启，`True` 开启。
     */
    public $RouteBroadcastPolicyFlag;

    /**
     * @var boolean 是否开启等价路由功能。`False` 未开启，`True` 开启。
     */
    public $RouteECMPFlag;

    /**
     * @var boolean 是否开启路由重叠功能。`False` 未开启，`True` 开启。
     */
    public $RouteOverlapFlag;

    /**
     * @var boolean 是否开启QOS。
     */
    public $TrafficMarkingPolicyFlag;

    /**
     * @var boolean 是否开启路由表选择策略。
     */
    public $RouteSelectPolicyFlag;

    /**
     * @var boolean 是否开启二层云联网通道。
     */
    public $DirectConnectAccelerateChannelFlag;

    /**
     * @var boolean 是否支持ipv6路由表
     */
    public $Ipv6Flag;

    /**
     * @var boolean 是否支持路由表聚合策略
     */
    public $MrtbAggregatePolicyFlag;

    /**
     * @var boolean 是否支持策略值
     */
    public $MrtbPolicyValueFlag;

    /**
     * @param string $CcnId 云联网唯一ID
     * @param string $CcnName 云联网名称
     * @param string $CcnDescription 云联网描述信息
     * @param integer $InstanceCount 关联实例数量
     * @param string $CreateTime 创建时间
     * @param string $State 实例状态， 'ISOLATED': 隔离中（欠费停服），'AVAILABLE'：运行中。
     * @param string $QosLevel 实例服务质量，’PT’：白金，'AU'：金，'AG'：银。
     * @param string $InstanceChargeType 付费类型，PREPAID为预付费，POSTPAID为后付费。
     * @param string $BandwidthLimitType 限速类型，`INTER_REGION_LIMIT` 为地域间限速；`OUTER_REGION_LIMIT` 为地域出口限速。
     * @param array $TagSet 标签键值对。
     * @param boolean $RoutePriorityFlag 是否支持云联网路由优先级的功能。`False`：不支持，`True`：支持。
     * @param integer $RouteTableCount 实例关联的路由表个数。
     * @param boolean $RouteTableFlag 是否开启云联网多路由表特性。`False`：未开启，`True`：开启。
     * @param boolean $IsSecurityLock `true`：实例已被封禁，流量不通，`false`:解封禁。
     * @param boolean $RouteBroadcastPolicyFlag 是否开启云联网路由传播策略。`False` 未开启，`True` 开启。
     * @param boolean $RouteECMPFlag 是否开启等价路由功能。`False` 未开启，`True` 开启。
     * @param boolean $RouteOverlapFlag 是否开启路由重叠功能。`False` 未开启，`True` 开启。
     * @param boolean $TrafficMarkingPolicyFlag 是否开启QOS。
     * @param boolean $RouteSelectPolicyFlag 是否开启路由表选择策略。
     * @param boolean $DirectConnectAccelerateChannelFlag 是否开启二层云联网通道。
     * @param boolean $Ipv6Flag 是否支持ipv6路由表
     * @param boolean $MrtbAggregatePolicyFlag 是否支持路由表聚合策略
     * @param boolean $MrtbPolicyValueFlag 是否支持策略值
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CcnName",$param) and $param["CcnName"] !== null) {
            $this->CcnName = $param["CcnName"];
        }

        if (array_key_exists("CcnDescription",$param) and $param["CcnDescription"] !== null) {
            $this->CcnDescription = $param["CcnDescription"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("QosLevel",$param) and $param["QosLevel"] !== null) {
            $this->QosLevel = $param["QosLevel"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("BandwidthLimitType",$param) and $param["BandwidthLimitType"] !== null) {
            $this->BandwidthLimitType = $param["BandwidthLimitType"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("RoutePriorityFlag",$param) and $param["RoutePriorityFlag"] !== null) {
            $this->RoutePriorityFlag = $param["RoutePriorityFlag"];
        }

        if (array_key_exists("RouteTableCount",$param) and $param["RouteTableCount"] !== null) {
            $this->RouteTableCount = $param["RouteTableCount"];
        }

        if (array_key_exists("RouteTableFlag",$param) and $param["RouteTableFlag"] !== null) {
            $this->RouteTableFlag = $param["RouteTableFlag"];
        }

        if (array_key_exists("IsSecurityLock",$param) and $param["IsSecurityLock"] !== null) {
            $this->IsSecurityLock = $param["IsSecurityLock"];
        }

        if (array_key_exists("RouteBroadcastPolicyFlag",$param) and $param["RouteBroadcastPolicyFlag"] !== null) {
            $this->RouteBroadcastPolicyFlag = $param["RouteBroadcastPolicyFlag"];
        }

        if (array_key_exists("RouteECMPFlag",$param) and $param["RouteECMPFlag"] !== null) {
            $this->RouteECMPFlag = $param["RouteECMPFlag"];
        }

        if (array_key_exists("RouteOverlapFlag",$param) and $param["RouteOverlapFlag"] !== null) {
            $this->RouteOverlapFlag = $param["RouteOverlapFlag"];
        }

        if (array_key_exists("TrafficMarkingPolicyFlag",$param) and $param["TrafficMarkingPolicyFlag"] !== null) {
            $this->TrafficMarkingPolicyFlag = $param["TrafficMarkingPolicyFlag"];
        }

        if (array_key_exists("RouteSelectPolicyFlag",$param) and $param["RouteSelectPolicyFlag"] !== null) {
            $this->RouteSelectPolicyFlag = $param["RouteSelectPolicyFlag"];
        }

        if (array_key_exists("DirectConnectAccelerateChannelFlag",$param) and $param["DirectConnectAccelerateChannelFlag"] !== null) {
            $this->DirectConnectAccelerateChannelFlag = $param["DirectConnectAccelerateChannelFlag"];
        }

        if (array_key_exists("Ipv6Flag",$param) and $param["Ipv6Flag"] !== null) {
            $this->Ipv6Flag = $param["Ipv6Flag"];
        }

        if (array_key_exists("MrtbAggregatePolicyFlag",$param) and $param["MrtbAggregatePolicyFlag"] !== null) {
            $this->MrtbAggregatePolicyFlag = $param["MrtbAggregatePolicyFlag"];
        }

        if (array_key_exists("MrtbPolicyValueFlag",$param) and $param["MrtbPolicyValueFlag"] !== null) {
            $this->MrtbPolicyValueFlag = $param["MrtbPolicyValueFlag"];
        }
    }
}
