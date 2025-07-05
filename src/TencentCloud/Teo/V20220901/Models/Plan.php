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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 套餐信息
 *
 * @method string getPlanType() 获取套餐类型。取值有：
<li>plan-trial: 试用版套餐；</li>
<li>plan-personal: 个人版套餐；</li>
<li>plan-basic: 基础版套餐；</li>
<li>plan-standard: 标准版套餐；</li>
<li>plan-enterprise-v2: 企业版套餐；</li>
<li>plan-enterprise-model-a: 企业版 Model A 套餐。</li>
<li>plan-enterprise: 旧企业版套餐。</li>
 * @method void setPlanType(string $PlanType) 设置套餐类型。取值有：
<li>plan-trial: 试用版套餐；</li>
<li>plan-personal: 个人版套餐；</li>
<li>plan-basic: 基础版套餐；</li>
<li>plan-standard: 标准版套餐；</li>
<li>plan-enterprise-v2: 企业版套餐；</li>
<li>plan-enterprise-model-a: 企业版 Model A 套餐。</li>
<li>plan-enterprise: 旧企业版套餐。</li>
 * @method string getPlanId() 获取套餐 ID。形如 edgeone-2y041pblwaxe。
 * @method void setPlanId(string $PlanId) 设置套餐 ID。形如 edgeone-2y041pblwaxe。
 * @method string getArea() 获取服务区域，取值有：
<li>mainland: 中国大陆；</li>
<li>overseas: 全球（不包括中国大陆）；</li>
<li>global: 全球（包括中国大陆）。</li>
 * @method void setArea(string $Area) 设置服务区域，取值有：
<li>mainland: 中国大陆；</li>
<li>overseas: 全球（不包括中国大陆）；</li>
<li>global: 全球（包括中国大陆）。</li>
 * @method boolean getAutoRenewal() 获取自动续费开关。取值有：
<li>true: 已开启自动续费；</li>
<li>false: 未开启自动续费。</li>
 * @method void setAutoRenewal(boolean $AutoRenewal) 设置自动续费开关。取值有：
<li>true: 已开启自动续费；</li>
<li>false: 未开启自动续费。</li>
 * @method string getStatus() 获取套餐状态，取值有：
<li>normal：正常状态；</li>
<li>expiring-soon：即将到期状态；</li>
<li>expired：到期状态；</li>
<li>isolated：隔离状态；</li>
<li>overdue-isolated：欠费隔离状态。</li>
 * @method void setStatus(string $Status) 设置套餐状态，取值有：
<li>normal：正常状态；</li>
<li>expiring-soon：即将到期状态；</li>
<li>expired：到期状态；</li>
<li>isolated：隔离状态；</li>
<li>overdue-isolated：欠费隔离状态。</li>
 * @method integer getPayMode() 获取付费类型，取值有：
<li>0: 后付费；</li>
<li>1: 预付费。</li>
 * @method void setPayMode(integer $PayMode) 设置付费类型，取值有：
<li>0: 后付费；</li>
<li>1: 预付费。</li>
 * @method array getZonesInfo() 获取套餐绑定的站点信息，包括站点id和站点名称，站点状态。
 * @method void setZonesInfo(array $ZonesInfo) 设置套餐绑定的站点信息，包括站点id和站点名称，站点状态。
 * @method integer getSmartRequestCapacity() 获取套餐内智能加速请求数规格，单位：次。
 * @method void setSmartRequestCapacity(integer $SmartRequestCapacity) 设置套餐内智能加速请求数规格，单位：次。
 * @method integer getVAUCapacity() 获取套餐内VAU规格，单位：个。
 * @method void setVAUCapacity(integer $VAUCapacity) 设置套餐内VAU规格，单位：个。
 * @method integer getAccTrafficCapacity() 获取套餐内内容加速流量规格，单位：字节。
 * @method void setAccTrafficCapacity(integer $AccTrafficCapacity) 设置套餐内内容加速流量规格，单位：字节。
 * @method integer getSmartTrafficCapacity() 获取套餐内智能加速流量规格，单位：字节。
 * @method void setSmartTrafficCapacity(integer $SmartTrafficCapacity) 设置套餐内智能加速流量规格，单位：字节。
 * @method integer getDDoSTrafficCapacity() 获取套餐内DDoS防护流量规格，单位：字节。
 * @method void setDDoSTrafficCapacity(integer $DDoSTrafficCapacity) 设置套餐内DDoS防护流量规格，单位：字节。
 * @method integer getSecTrafficCapacity() 获取套餐内安全流量规格，单位：字节。
 * @method void setSecTrafficCapacity(integer $SecTrafficCapacity) 设置套餐内安全流量规格，单位：字节。
 * @method integer getSecRequestCapacity() 获取套餐内安全请求数规格，单位：次。
 * @method void setSecRequestCapacity(integer $SecRequestCapacity) 设置套餐内安全请求数规格，单位：次。
 * @method integer getL4TrafficCapacity() 获取套餐内四层加速流量规格，单位：字节。
 * @method void setL4TrafficCapacity(integer $L4TrafficCapacity) 设置套餐内四层加速流量规格，单位：字节。
 * @method integer getCrossMLCTrafficCapacity() 获取套餐内中国大陆网络优化流量规格，单位：字节。
 * @method void setCrossMLCTrafficCapacity(integer $CrossMLCTrafficCapacity) 设置套餐内中国大陆网络优化流量规格，单位：字节。
 * @method string getBindable() 获取套餐是否允许绑定新站点，取值有：
<li>true: 允许绑定新站点；</li>
<li>false: 不允许绑定新站点。</li>
 * @method void setBindable(string $Bindable) 设置套餐是否允许绑定新站点，取值有：
<li>true: 允许绑定新站点；</li>
<li>false: 不允许绑定新站点。</li>
 * @method string getEnabledTime() 获取套餐生效时间。
 * @method void setEnabledTime(string $EnabledTime) 设置套餐生效时间。
 * @method string getExpiredTime() 获取套餐过期时间。
 * @method void setExpiredTime(string $ExpiredTime) 设置套餐过期时间。
 * @method array getFeatures() 获取套餐所支持的功能，取值有：<li>ContentAcceleration：内容加速功能；</li><li>SmartAcceleration：智能加速功能；</li><li>L4：四层加速功能；</li><li>Waf：高级 Web 防护；</li><li>QUIC：QUIC功能；</li><li>CrossMLC：中国大陆网络优化功能；</li><li>ProcessMedia：媒体处理功能；</li><li>L4DDoS：四层DDoS防护功能；</li>L7DDoS功能只会出现以下所有规格中的一项<li>L7DDoS.CM30G；七层DDoS防护功能-中国大陆30G保底带宽规格；</li><li>L7DDoS.CM60G；七层DDoS防护功能-中国大陆60G保底带宽规格；</li><li>L7DDoS.CM100G；七层DDoS防护功能-中国大陆100G保底带宽规格；</li><li>L7DDoS.Anycast300G；七层DDoS防护功能-中国大陆以外Anycast300G保底带宽规格；</li><li>L7DDoS.AnycastUnlimited；七层DDoS防护功能-中国大陆以外Anycast无上限全力防护规格；</li><li>L7DDoS.CM30G_Anycast300G；七层DDoS防护功能-中国大陆30G保底带宽规格，中国大陆以外Anycast300G保底带宽规格；</li><li>L7DDoS.CM60G_Anycast300G；七层DDoS防护功能-中国大陆60G保底带宽规格，中国大陆以外Anycast300G保底带宽规格；</li><li>L7DDoS.CM100G_Anycast300G；七层DDoS防护功能-中国大陆100G保底带宽规格，中国大陆以外Anycast300G保底带宽规格；</li><li>L7DDoS.CM30G_AnycastUnlimited；七层DDoS防护功能-中国大陆30G保底带宽规格，中国大陆以外Anycast无上限全力防护规格；</li><li>L7DDoS.CM60G_AnycastUnlimited；七层DDoS防护功能-中国大陆60G保底带宽规格，中国大陆以外Anycast无上限全力防护规格；</li><li>L7DDoS.CM100G_AnycastUnlimited；七层DDoS防护功能-中国大陆100G保底带宽规格，中国大陆以外Anycast无上限全力防护规格；</li>
 * @method void setFeatures(array $Features) 设置套餐所支持的功能，取值有：<li>ContentAcceleration：内容加速功能；</li><li>SmartAcceleration：智能加速功能；</li><li>L4：四层加速功能；</li><li>Waf：高级 Web 防护；</li><li>QUIC：QUIC功能；</li><li>CrossMLC：中国大陆网络优化功能；</li><li>ProcessMedia：媒体处理功能；</li><li>L4DDoS：四层DDoS防护功能；</li>L7DDoS功能只会出现以下所有规格中的一项<li>L7DDoS.CM30G；七层DDoS防护功能-中国大陆30G保底带宽规格；</li><li>L7DDoS.CM60G；七层DDoS防护功能-中国大陆60G保底带宽规格；</li><li>L7DDoS.CM100G；七层DDoS防护功能-中国大陆100G保底带宽规格；</li><li>L7DDoS.Anycast300G；七层DDoS防护功能-中国大陆以外Anycast300G保底带宽规格；</li><li>L7DDoS.AnycastUnlimited；七层DDoS防护功能-中国大陆以外Anycast无上限全力防护规格；</li><li>L7DDoS.CM30G_Anycast300G；七层DDoS防护功能-中国大陆30G保底带宽规格，中国大陆以外Anycast300G保底带宽规格；</li><li>L7DDoS.CM60G_Anycast300G；七层DDoS防护功能-中国大陆60G保底带宽规格，中国大陆以外Anycast300G保底带宽规格；</li><li>L7DDoS.CM100G_Anycast300G；七层DDoS防护功能-中国大陆100G保底带宽规格，中国大陆以外Anycast300G保底带宽规格；</li><li>L7DDoS.CM30G_AnycastUnlimited；七层DDoS防护功能-中国大陆30G保底带宽规格，中国大陆以外Anycast无上限全力防护规格；</li><li>L7DDoS.CM60G_AnycastUnlimited；七层DDoS防护功能-中国大陆60G保底带宽规格，中国大陆以外Anycast无上限全力防护规格；</li><li>L7DDoS.CM100G_AnycastUnlimited；七层DDoS防护功能-中国大陆100G保底带宽规格，中国大陆以外Anycast无上限全力防护规格；</li>
 */
class Plan extends AbstractModel
{
    /**
     * @var string 套餐类型。取值有：
<li>plan-trial: 试用版套餐；</li>
<li>plan-personal: 个人版套餐；</li>
<li>plan-basic: 基础版套餐；</li>
<li>plan-standard: 标准版套餐；</li>
<li>plan-enterprise-v2: 企业版套餐；</li>
<li>plan-enterprise-model-a: 企业版 Model A 套餐。</li>
<li>plan-enterprise: 旧企业版套餐。</li>
     */
    public $PlanType;

    /**
     * @var string 套餐 ID。形如 edgeone-2y041pblwaxe。
     */
    public $PlanId;

    /**
     * @var string 服务区域，取值有：
<li>mainland: 中国大陆；</li>
<li>overseas: 全球（不包括中国大陆）；</li>
<li>global: 全球（包括中国大陆）。</li>
     */
    public $Area;

    /**
     * @var boolean 自动续费开关。取值有：
<li>true: 已开启自动续费；</li>
<li>false: 未开启自动续费。</li>
     */
    public $AutoRenewal;

    /**
     * @var string 套餐状态，取值有：
<li>normal：正常状态；</li>
<li>expiring-soon：即将到期状态；</li>
<li>expired：到期状态；</li>
<li>isolated：隔离状态；</li>
<li>overdue-isolated：欠费隔离状态。</li>
     */
    public $Status;

    /**
     * @var integer 付费类型，取值有：
<li>0: 后付费；</li>
<li>1: 预付费。</li>
     */
    public $PayMode;

    /**
     * @var array 套餐绑定的站点信息，包括站点id和站点名称，站点状态。
     */
    public $ZonesInfo;

    /**
     * @var integer 套餐内智能加速请求数规格，单位：次。
     */
    public $SmartRequestCapacity;

    /**
     * @var integer 套餐内VAU规格，单位：个。
     */
    public $VAUCapacity;

    /**
     * @var integer 套餐内内容加速流量规格，单位：字节。
     */
    public $AccTrafficCapacity;

    /**
     * @var integer 套餐内智能加速流量规格，单位：字节。
     */
    public $SmartTrafficCapacity;

    /**
     * @var integer 套餐内DDoS防护流量规格，单位：字节。
     */
    public $DDoSTrafficCapacity;

    /**
     * @var integer 套餐内安全流量规格，单位：字节。
     */
    public $SecTrafficCapacity;

    /**
     * @var integer 套餐内安全请求数规格，单位：次。
     */
    public $SecRequestCapacity;

    /**
     * @var integer 套餐内四层加速流量规格，单位：字节。
     */
    public $L4TrafficCapacity;

    /**
     * @var integer 套餐内中国大陆网络优化流量规格，单位：字节。
     */
    public $CrossMLCTrafficCapacity;

    /**
     * @var string 套餐是否允许绑定新站点，取值有：
<li>true: 允许绑定新站点；</li>
<li>false: 不允许绑定新站点。</li>
     */
    public $Bindable;

    /**
     * @var string 套餐生效时间。
     */
    public $EnabledTime;

    /**
     * @var string 套餐过期时间。
     */
    public $ExpiredTime;

    /**
     * @var array 套餐所支持的功能，取值有：<li>ContentAcceleration：内容加速功能；</li><li>SmartAcceleration：智能加速功能；</li><li>L4：四层加速功能；</li><li>Waf：高级 Web 防护；</li><li>QUIC：QUIC功能；</li><li>CrossMLC：中国大陆网络优化功能；</li><li>ProcessMedia：媒体处理功能；</li><li>L4DDoS：四层DDoS防护功能；</li>L7DDoS功能只会出现以下所有规格中的一项<li>L7DDoS.CM30G；七层DDoS防护功能-中国大陆30G保底带宽规格；</li><li>L7DDoS.CM60G；七层DDoS防护功能-中国大陆60G保底带宽规格；</li><li>L7DDoS.CM100G；七层DDoS防护功能-中国大陆100G保底带宽规格；</li><li>L7DDoS.Anycast300G；七层DDoS防护功能-中国大陆以外Anycast300G保底带宽规格；</li><li>L7DDoS.AnycastUnlimited；七层DDoS防护功能-中国大陆以外Anycast无上限全力防护规格；</li><li>L7DDoS.CM30G_Anycast300G；七层DDoS防护功能-中国大陆30G保底带宽规格，中国大陆以外Anycast300G保底带宽规格；</li><li>L7DDoS.CM60G_Anycast300G；七层DDoS防护功能-中国大陆60G保底带宽规格，中国大陆以外Anycast300G保底带宽规格；</li><li>L7DDoS.CM100G_Anycast300G；七层DDoS防护功能-中国大陆100G保底带宽规格，中国大陆以外Anycast300G保底带宽规格；</li><li>L7DDoS.CM30G_AnycastUnlimited；七层DDoS防护功能-中国大陆30G保底带宽规格，中国大陆以外Anycast无上限全力防护规格；</li><li>L7DDoS.CM60G_AnycastUnlimited；七层DDoS防护功能-中国大陆60G保底带宽规格，中国大陆以外Anycast无上限全力防护规格；</li><li>L7DDoS.CM100G_AnycastUnlimited；七层DDoS防护功能-中国大陆100G保底带宽规格，中国大陆以外Anycast无上限全力防护规格；</li>
     */
    public $Features;

    /**
     * @param string $PlanType 套餐类型。取值有：
<li>plan-trial: 试用版套餐；</li>
<li>plan-personal: 个人版套餐；</li>
<li>plan-basic: 基础版套餐；</li>
<li>plan-standard: 标准版套餐；</li>
<li>plan-enterprise-v2: 企业版套餐；</li>
<li>plan-enterprise-model-a: 企业版 Model A 套餐。</li>
<li>plan-enterprise: 旧企业版套餐。</li>
     * @param string $PlanId 套餐 ID。形如 edgeone-2y041pblwaxe。
     * @param string $Area 服务区域，取值有：
<li>mainland: 中国大陆；</li>
<li>overseas: 全球（不包括中国大陆）；</li>
<li>global: 全球（包括中国大陆）。</li>
     * @param boolean $AutoRenewal 自动续费开关。取值有：
<li>true: 已开启自动续费；</li>
<li>false: 未开启自动续费。</li>
     * @param string $Status 套餐状态，取值有：
<li>normal：正常状态；</li>
<li>expiring-soon：即将到期状态；</li>
<li>expired：到期状态；</li>
<li>isolated：隔离状态；</li>
<li>overdue-isolated：欠费隔离状态。</li>
     * @param integer $PayMode 付费类型，取值有：
<li>0: 后付费；</li>
<li>1: 预付费。</li>
     * @param array $ZonesInfo 套餐绑定的站点信息，包括站点id和站点名称，站点状态。
     * @param integer $SmartRequestCapacity 套餐内智能加速请求数规格，单位：次。
     * @param integer $VAUCapacity 套餐内VAU规格，单位：个。
     * @param integer $AccTrafficCapacity 套餐内内容加速流量规格，单位：字节。
     * @param integer $SmartTrafficCapacity 套餐内智能加速流量规格，单位：字节。
     * @param integer $DDoSTrafficCapacity 套餐内DDoS防护流量规格，单位：字节。
     * @param integer $SecTrafficCapacity 套餐内安全流量规格，单位：字节。
     * @param integer $SecRequestCapacity 套餐内安全请求数规格，单位：次。
     * @param integer $L4TrafficCapacity 套餐内四层加速流量规格，单位：字节。
     * @param integer $CrossMLCTrafficCapacity 套餐内中国大陆网络优化流量规格，单位：字节。
     * @param string $Bindable 套餐是否允许绑定新站点，取值有：
<li>true: 允许绑定新站点；</li>
<li>false: 不允许绑定新站点。</li>
     * @param string $EnabledTime 套餐生效时间。
     * @param string $ExpiredTime 套餐过期时间。
     * @param array $Features 套餐所支持的功能，取值有：<li>ContentAcceleration：内容加速功能；</li><li>SmartAcceleration：智能加速功能；</li><li>L4：四层加速功能；</li><li>Waf：高级 Web 防护；</li><li>QUIC：QUIC功能；</li><li>CrossMLC：中国大陆网络优化功能；</li><li>ProcessMedia：媒体处理功能；</li><li>L4DDoS：四层DDoS防护功能；</li>L7DDoS功能只会出现以下所有规格中的一项<li>L7DDoS.CM30G；七层DDoS防护功能-中国大陆30G保底带宽规格；</li><li>L7DDoS.CM60G；七层DDoS防护功能-中国大陆60G保底带宽规格；</li><li>L7DDoS.CM100G；七层DDoS防护功能-中国大陆100G保底带宽规格；</li><li>L7DDoS.Anycast300G；七层DDoS防护功能-中国大陆以外Anycast300G保底带宽规格；</li><li>L7DDoS.AnycastUnlimited；七层DDoS防护功能-中国大陆以外Anycast无上限全力防护规格；</li><li>L7DDoS.CM30G_Anycast300G；七层DDoS防护功能-中国大陆30G保底带宽规格，中国大陆以外Anycast300G保底带宽规格；</li><li>L7DDoS.CM60G_Anycast300G；七层DDoS防护功能-中国大陆60G保底带宽规格，中国大陆以外Anycast300G保底带宽规格；</li><li>L7DDoS.CM100G_Anycast300G；七层DDoS防护功能-中国大陆100G保底带宽规格，中国大陆以外Anycast300G保底带宽规格；</li><li>L7DDoS.CM30G_AnycastUnlimited；七层DDoS防护功能-中国大陆30G保底带宽规格，中国大陆以外Anycast无上限全力防护规格；</li><li>L7DDoS.CM60G_AnycastUnlimited；七层DDoS防护功能-中国大陆60G保底带宽规格，中国大陆以外Anycast无上限全力防护规格；</li><li>L7DDoS.CM100G_AnycastUnlimited；七层DDoS防护功能-中国大陆100G保底带宽规格，中国大陆以外Anycast无上限全力防护规格；</li>
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
        if (array_key_exists("PlanType",$param) and $param["PlanType"] !== null) {
            $this->PlanType = $param["PlanType"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("AutoRenewal",$param) and $param["AutoRenewal"] !== null) {
            $this->AutoRenewal = $param["AutoRenewal"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ZonesInfo",$param) and $param["ZonesInfo"] !== null) {
            $this->ZonesInfo = [];
            foreach ($param["ZonesInfo"] as $key => $value){
                $obj = new ZoneInfo();
                $obj->deserialize($value);
                array_push($this->ZonesInfo, $obj);
            }
        }

        if (array_key_exists("SmartRequestCapacity",$param) and $param["SmartRequestCapacity"] !== null) {
            $this->SmartRequestCapacity = $param["SmartRequestCapacity"];
        }

        if (array_key_exists("VAUCapacity",$param) and $param["VAUCapacity"] !== null) {
            $this->VAUCapacity = $param["VAUCapacity"];
        }

        if (array_key_exists("AccTrafficCapacity",$param) and $param["AccTrafficCapacity"] !== null) {
            $this->AccTrafficCapacity = $param["AccTrafficCapacity"];
        }

        if (array_key_exists("SmartTrafficCapacity",$param) and $param["SmartTrafficCapacity"] !== null) {
            $this->SmartTrafficCapacity = $param["SmartTrafficCapacity"];
        }

        if (array_key_exists("DDoSTrafficCapacity",$param) and $param["DDoSTrafficCapacity"] !== null) {
            $this->DDoSTrafficCapacity = $param["DDoSTrafficCapacity"];
        }

        if (array_key_exists("SecTrafficCapacity",$param) and $param["SecTrafficCapacity"] !== null) {
            $this->SecTrafficCapacity = $param["SecTrafficCapacity"];
        }

        if (array_key_exists("SecRequestCapacity",$param) and $param["SecRequestCapacity"] !== null) {
            $this->SecRequestCapacity = $param["SecRequestCapacity"];
        }

        if (array_key_exists("L4TrafficCapacity",$param) and $param["L4TrafficCapacity"] !== null) {
            $this->L4TrafficCapacity = $param["L4TrafficCapacity"];
        }

        if (array_key_exists("CrossMLCTrafficCapacity",$param) and $param["CrossMLCTrafficCapacity"] !== null) {
            $this->CrossMLCTrafficCapacity = $param["CrossMLCTrafficCapacity"];
        }

        if (array_key_exists("Bindable",$param) and $param["Bindable"] !== null) {
            $this->Bindable = $param["Bindable"];
        }

        if (array_key_exists("EnabledTime",$param) and $param["EnabledTime"] !== null) {
            $this->EnabledTime = $param["EnabledTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("Features",$param) and $param["Features"] !== null) {
            $this->Features = $param["Features"];
        }
    }
}
