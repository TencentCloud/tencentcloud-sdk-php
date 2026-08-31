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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网（CCN）对象
 *
 * @method string getCcnId() 获取<p>云联网唯一ID</p>
 * @method void setCcnId(string $CcnId) 设置<p>云联网唯一ID</p>
 * @method string getCcnName() 获取<p>云联网名称</p>
 * @method void setCcnName(string $CcnName) 设置<p>云联网名称</p>
 * @method string getCcnDescription() 获取<p>云联网描述信息</p>
 * @method void setCcnDescription(string $CcnDescription) 设置<p>云联网描述信息</p>
 * @method integer getInstanceCount() 获取<p>关联实例数量</p>
 * @method void setInstanceCount(integer $InstanceCount) 设置<p>关联实例数量</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getState() 获取<p>实例状态， &#39;ISOLATED&#39;: 隔离中（欠费停服），&#39;AVAILABLE&#39;：运行中。</p>
 * @method void setState(string $State) 设置<p>实例状态， &#39;ISOLATED&#39;: 隔离中（欠费停服），&#39;AVAILABLE&#39;：运行中。</p>
 * @method string getQosLevel() 获取<p>实例服务质量，’PT’：白金，&#39;AU&#39;：金，&#39;AG&#39;：银。</p>
 * @method void setQosLevel(string $QosLevel) 设置<p>实例服务质量，’PT’：白金，&#39;AU&#39;：金，&#39;AG&#39;：银。</p>
 * @method string getInstanceChargeType() 获取<p>付费类型，PREPAID为预付费，POSTPAID为后付费。</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>付费类型，PREPAID为预付费，POSTPAID为后付费。</p>
 * @method string getInstanceMeteringType() 获取<p>计量类型</p>
 * @method void setInstanceMeteringType(string $InstanceMeteringType) 设置<p>计量类型</p>
 * @method string getBandwidthLimitType() 获取<p>限速类型，<code>INTER_REGION_LIMIT</code> 为地域间限速；<code>OUTER_REGION_LIMIT</code> 为地域出口限速。</p>
 * @method void setBandwidthLimitType(string $BandwidthLimitType) 设置<p>限速类型，<code>INTER_REGION_LIMIT</code> 为地域间限速；<code>OUTER_REGION_LIMIT</code> 为地域出口限速。</p>
 * @method array getTagSet() 获取<p>标签键值对。</p>
 * @method void setTagSet(array $TagSet) 设置<p>标签键值对。</p>
 * @method boolean getRoutePriorityFlag() 获取<p>是否支持云联网路由优先级的功能。<code>False</code>：不支持，<code>True</code>：支持。</p>
 * @method void setRoutePriorityFlag(boolean $RoutePriorityFlag) 设置<p>是否支持云联网路由优先级的功能。<code>False</code>：不支持，<code>True</code>：支持。</p>
 * @method integer getRouteTableCount() 获取<p>实例关联的路由表个数。</p>
 * @method void setRouteTableCount(integer $RouteTableCount) 设置<p>实例关联的路由表个数。</p>
 * @method boolean getRouteTableFlag() 获取<p>是否开启云联网多路由表特性。<code>False</code>：未开启，<code>True</code>：开启。</p>
 * @method void setRouteTableFlag(boolean $RouteTableFlag) 设置<p>是否开启云联网多路由表特性。<code>False</code>：未开启，<code>True</code>：开启。</p>
 * @method boolean getIsSecurityLock() 获取<p><code>true</code>：实例已被封禁，流量不通，<code>false</code>:解封禁。</p>
 * @method void setIsSecurityLock(boolean $IsSecurityLock) 设置<p><code>true</code>：实例已被封禁，流量不通，<code>false</code>:解封禁。</p>
 * @method boolean getRouteBroadcastPolicyFlag() 获取<p>是否开启云联网路由传播策略。<code>False</code> 未开启，<code>True</code> 开启。</p>
 * @method void setRouteBroadcastPolicyFlag(boolean $RouteBroadcastPolicyFlag) 设置<p>是否开启云联网路由传播策略。<code>False</code> 未开启，<code>True</code> 开启。</p>
 * @method boolean getRouteECMPFlag() 获取<p>是否开启等价路由功能。<code>False</code> 未开启，<code>True</code> 开启。</p>
 * @method void setRouteECMPFlag(boolean $RouteECMPFlag) 设置<p>是否开启等价路由功能。<code>False</code> 未开启，<code>True</code> 开启。</p>
 * @method boolean getRouteOverlapFlag() 获取<p>是否开启路由重叠功能。<code>False</code> 未开启，<code>True</code> 开启。</p>
 * @method void setRouteOverlapFlag(boolean $RouteOverlapFlag) 设置<p>是否开启路由重叠功能。<code>False</code> 未开启，<code>True</code> 开启。</p>
 * @method boolean getTrafficMarkingPolicyFlag() 获取<p>是否开启QOS。</p>
 * @method void setTrafficMarkingPolicyFlag(boolean $TrafficMarkingPolicyFlag) 设置<p>是否开启QOS。</p>
 * @method boolean getRouteSelectPolicyFlag() 获取<p>是否开启路由表选择策略。</p>
 * @method void setRouteSelectPolicyFlag(boolean $RouteSelectPolicyFlag) 设置<p>是否开启路由表选择策略。</p>
 * @method boolean getDirectConnectAccelerateChannelFlag() 获取<p>是否开启二层云联网通道。</p>
 * @method void setDirectConnectAccelerateChannelFlag(boolean $DirectConnectAccelerateChannelFlag) 设置<p>是否开启二层云联网通道。</p>
 * @method boolean getIpv6Flag() 获取<p>是否支持ipv6路由表</p>
 * @method void setIpv6Flag(boolean $Ipv6Flag) 设置<p>是否支持ipv6路由表</p>
 * @method boolean getMrtbAggregatePolicyFlag() 获取<p>是否支持路由表聚合策略</p>
 * @method void setMrtbAggregatePolicyFlag(boolean $MrtbAggregatePolicyFlag) 设置<p>是否支持路由表聚合策略</p>
 * @method boolean getMrtbPolicyValueFlag() 获取<p>是否支持AsPath策略值</p>
 * @method void setMrtbPolicyValueFlag(boolean $MrtbPolicyValueFlag) 设置<p>是否支持AsPath策略值</p>
 * @method boolean getRouteTablePolicyValueCommunityFlag() 获取<p>是否支持Community策略值</p>
 * @method void setRouteTablePolicyValueCommunityFlag(boolean $RouteTablePolicyValueCommunityFlag) 设置<p>是否支持Community策略值</p>
 * @method boolean getPolicyBasedRoutingFlag() 获取<p>是否支持策略路由</p>
 * @method void setPolicyBasedRoutingFlag(boolean $PolicyBasedRoutingFlag) 设置<p>是否支持策略路由</p>
 * @method integer getServiceLevelMode() 获取<p>服务等级模式</p><p>枚举值：</p><ul><li>0： 云联网模式</li><li>1： 地域间模式</li></ul>
 * @method void setServiceLevelMode(integer $ServiceLevelMode) 设置<p>服务等级模式</p><p>枚举值：</p><ul><li>0： 云联网模式</li><li>1： 地域间模式</li></ul>
 */
class CCN extends AbstractModel
{
    /**
     * @var string <p>云联网唯一ID</p>
     */
    public $CcnId;

    /**
     * @var string <p>云联网名称</p>
     */
    public $CcnName;

    /**
     * @var string <p>云联网描述信息</p>
     */
    public $CcnDescription;

    /**
     * @var integer <p>关联实例数量</p>
     */
    public $InstanceCount;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>实例状态， &#39;ISOLATED&#39;: 隔离中（欠费停服），&#39;AVAILABLE&#39;：运行中。</p>
     */
    public $State;

    /**
     * @var string <p>实例服务质量，’PT’：白金，&#39;AU&#39;：金，&#39;AG&#39;：银。</p>
     */
    public $QosLevel;

    /**
     * @var string <p>付费类型，PREPAID为预付费，POSTPAID为后付费。</p>
     */
    public $InstanceChargeType;

    /**
     * @var string <p>计量类型</p>
     */
    public $InstanceMeteringType;

    /**
     * @var string <p>限速类型，<code>INTER_REGION_LIMIT</code> 为地域间限速；<code>OUTER_REGION_LIMIT</code> 为地域出口限速。</p>
     */
    public $BandwidthLimitType;

    /**
     * @var array <p>标签键值对。</p>
     */
    public $TagSet;

    /**
     * @var boolean <p>是否支持云联网路由优先级的功能。<code>False</code>：不支持，<code>True</code>：支持。</p>
     */
    public $RoutePriorityFlag;

    /**
     * @var integer <p>实例关联的路由表个数。</p>
     */
    public $RouteTableCount;

    /**
     * @var boolean <p>是否开启云联网多路由表特性。<code>False</code>：未开启，<code>True</code>：开启。</p>
     */
    public $RouteTableFlag;

    /**
     * @var boolean <p><code>true</code>：实例已被封禁，流量不通，<code>false</code>:解封禁。</p>
     */
    public $IsSecurityLock;

    /**
     * @var boolean <p>是否开启云联网路由传播策略。<code>False</code> 未开启，<code>True</code> 开启。</p>
     */
    public $RouteBroadcastPolicyFlag;

    /**
     * @var boolean <p>是否开启等价路由功能。<code>False</code> 未开启，<code>True</code> 开启。</p>
     */
    public $RouteECMPFlag;

    /**
     * @var boolean <p>是否开启路由重叠功能。<code>False</code> 未开启，<code>True</code> 开启。</p>
     */
    public $RouteOverlapFlag;

    /**
     * @var boolean <p>是否开启QOS。</p>
     */
    public $TrafficMarkingPolicyFlag;

    /**
     * @var boolean <p>是否开启路由表选择策略。</p>
     */
    public $RouteSelectPolicyFlag;

    /**
     * @var boolean <p>是否开启二层云联网通道。</p>
     */
    public $DirectConnectAccelerateChannelFlag;

    /**
     * @var boolean <p>是否支持ipv6路由表</p>
     */
    public $Ipv6Flag;

    /**
     * @var boolean <p>是否支持路由表聚合策略</p>
     */
    public $MrtbAggregatePolicyFlag;

    /**
     * @var boolean <p>是否支持AsPath策略值</p>
     */
    public $MrtbPolicyValueFlag;

    /**
     * @var boolean <p>是否支持Community策略值</p>
     */
    public $RouteTablePolicyValueCommunityFlag;

    /**
     * @var boolean <p>是否支持策略路由</p>
     */
    public $PolicyBasedRoutingFlag;

    /**
     * @var integer <p>服务等级模式</p><p>枚举值：</p><ul><li>0： 云联网模式</li><li>1： 地域间模式</li></ul>
     */
    public $ServiceLevelMode;

    /**
     * @param string $CcnId <p>云联网唯一ID</p>
     * @param string $CcnName <p>云联网名称</p>
     * @param string $CcnDescription <p>云联网描述信息</p>
     * @param integer $InstanceCount <p>关联实例数量</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $State <p>实例状态， &#39;ISOLATED&#39;: 隔离中（欠费停服），&#39;AVAILABLE&#39;：运行中。</p>
     * @param string $QosLevel <p>实例服务质量，’PT’：白金，&#39;AU&#39;：金，&#39;AG&#39;：银。</p>
     * @param string $InstanceChargeType <p>付费类型，PREPAID为预付费，POSTPAID为后付费。</p>
     * @param string $InstanceMeteringType <p>计量类型</p>
     * @param string $BandwidthLimitType <p>限速类型，<code>INTER_REGION_LIMIT</code> 为地域间限速；<code>OUTER_REGION_LIMIT</code> 为地域出口限速。</p>
     * @param array $TagSet <p>标签键值对。</p>
     * @param boolean $RoutePriorityFlag <p>是否支持云联网路由优先级的功能。<code>False</code>：不支持，<code>True</code>：支持。</p>
     * @param integer $RouteTableCount <p>实例关联的路由表个数。</p>
     * @param boolean $RouteTableFlag <p>是否开启云联网多路由表特性。<code>False</code>：未开启，<code>True</code>：开启。</p>
     * @param boolean $IsSecurityLock <p><code>true</code>：实例已被封禁，流量不通，<code>false</code>:解封禁。</p>
     * @param boolean $RouteBroadcastPolicyFlag <p>是否开启云联网路由传播策略。<code>False</code> 未开启，<code>True</code> 开启。</p>
     * @param boolean $RouteECMPFlag <p>是否开启等价路由功能。<code>False</code> 未开启，<code>True</code> 开启。</p>
     * @param boolean $RouteOverlapFlag <p>是否开启路由重叠功能。<code>False</code> 未开启，<code>True</code> 开启。</p>
     * @param boolean $TrafficMarkingPolicyFlag <p>是否开启QOS。</p>
     * @param boolean $RouteSelectPolicyFlag <p>是否开启路由表选择策略。</p>
     * @param boolean $DirectConnectAccelerateChannelFlag <p>是否开启二层云联网通道。</p>
     * @param boolean $Ipv6Flag <p>是否支持ipv6路由表</p>
     * @param boolean $MrtbAggregatePolicyFlag <p>是否支持路由表聚合策略</p>
     * @param boolean $MrtbPolicyValueFlag <p>是否支持AsPath策略值</p>
     * @param boolean $RouteTablePolicyValueCommunityFlag <p>是否支持Community策略值</p>
     * @param boolean $PolicyBasedRoutingFlag <p>是否支持策略路由</p>
     * @param integer $ServiceLevelMode <p>服务等级模式</p><p>枚举值：</p><ul><li>0： 云联网模式</li><li>1： 地域间模式</li></ul>
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

        if (array_key_exists("InstanceMeteringType",$param) and $param["InstanceMeteringType"] !== null) {
            $this->InstanceMeteringType = $param["InstanceMeteringType"];
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

        if (array_key_exists("RouteTablePolicyValueCommunityFlag",$param) and $param["RouteTablePolicyValueCommunityFlag"] !== null) {
            $this->RouteTablePolicyValueCommunityFlag = $param["RouteTablePolicyValueCommunityFlag"];
        }

        if (array_key_exists("PolicyBasedRoutingFlag",$param) and $param["PolicyBasedRoutingFlag"] !== null) {
            $this->PolicyBasedRoutingFlag = $param["PolicyBasedRoutingFlag"];
        }

        if (array_key_exists("ServiceLevelMode",$param) and $param["ServiceLevelMode"] !== null) {
            $this->ServiceLevelMode = $param["ServiceLevelMode"];
        }
    }
}
