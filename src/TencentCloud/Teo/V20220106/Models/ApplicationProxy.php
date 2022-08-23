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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用代理实例
 *
 * @method string getProxyId() 获取代理ID。
 * @method void setProxyId(string $ProxyId) 设置代理ID。
 * @method string getProxyName() 获取当ProxyType=hostname时，表示域名或子域名；
当ProxyType=instance时，表示代理名称。
 * @method void setProxyName(string $ProxyName) 设置当ProxyType=hostname时，表示域名或子域名；
当ProxyType=instance时，表示代理名称。
 * @method string getPlatType() 获取调度模式，取值有：
<li>ip：表示Anycast IP调度；</li>
<li>domain：表示CNAME调度。</li>
 * @method void setPlatType(string $PlatType) 设置调度模式，取值有：
<li>ip：表示Anycast IP调度；</li>
<li>domain：表示CNAME调度。</li>
 * @method integer getSecurityType() 获取是否开启安全，取值有：
<li>0：关闭安全；</li>
<li>1：开启安全。</li>
 * @method void setSecurityType(integer $SecurityType) 设置是否开启安全，取值有：
<li>0：关闭安全；</li>
<li>1：开启安全。</li>
 * @method integer getAccelerateType() 获取是否开启加速，取值有：
<li>0：关闭加速；</li>
<li>1：开启加速。</li>
 * @method void setAccelerateType(integer $AccelerateType) 设置是否开启加速，取值有：
<li>0：关闭加速；</li>
<li>1：开启加速。</li>
 * @method string getForwardClientIp() 获取字段已经废弃。
 * @method void setForwardClientIp(string $ForwardClientIp) 设置字段已经废弃。
 * @method boolean getSessionPersist() 获取字段已经废弃。
 * @method void setSessionPersist(boolean $SessionPersist) 设置字段已经废弃。
 * @method array getRule() 获取规则列表。
 * @method void setRule(array $Rule) 设置规则列表。
 * @method string getStatus() 获取状态，取值有：
<li>online：启用；</li>
<li>offline：停用；</li>
<li>progress：部署中；</li>
<li>stopping：停用中；</li>
<li>fail：部署失败/停用失败。</li>
 * @method void setStatus(string $Status) 设置状态，取值有：
<li>online：启用；</li>
<li>offline：停用；</li>
<li>progress：部署中；</li>
<li>stopping：停用中；</li>
<li>fail：部署失败/停用失败。</li>
 * @method array getScheduleValue() 获取调度信息。
 * @method void setScheduleValue(array $ScheduleValue) 设置调度信息。
 * @method string getUpdateTime() 获取更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method string getZoneName() 获取站点名称。
 * @method void setZoneName(string $ZoneName) 设置站点名称。
 * @method integer getSessionPersistTime() 获取会话保持时间。
 * @method void setSessionPersistTime(integer $SessionPersistTime) 设置会话保持时间。
 * @method string getProxyType() 获取四层代理模式，取值有：
<li>hostname：表示子域名模式；</li>
<li>instance：表示实例模式。</li>
 * @method void setProxyType(string $ProxyType) 设置四层代理模式，取值有：
<li>hostname：表示子域名模式；</li>
<li>instance：表示实例模式。</li>
 * @method string getHostId() 获取当ProxyType=hostname时：
表示代理加速唯一标识。
 * @method void setHostId(string $HostId) 设置当ProxyType=hostname时：
表示代理加速唯一标识。
 * @method Ipv6Access getIpv6() 获取Ipv6访问配置。
 * @method void setIpv6(Ipv6Access $Ipv6) 设置Ipv6访问配置。
 * @method string getArea() 获取加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
默认值：overseas
 * @method void setArea(string $Area) 设置加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
默认值：overseas
 * @method string getBanStatus() 获取封禁状态，取值有：
<li>banned：已封禁;</li>
<li>banning：封禁中；</li>
<li>recover：已解封；</li>
<li>recovering：解封禁中。</li>
 * @method void setBanStatus(string $BanStatus) 设置封禁状态，取值有：
<li>banned：已封禁;</li>
<li>banning：封禁中；</li>
<li>recover：已解封；</li>
<li>recovering：解封禁中。</li>
 */
class ApplicationProxy extends AbstractModel
{
    /**
     * @var string 代理ID。
     */
    public $ProxyId;

    /**
     * @var string 当ProxyType=hostname时，表示域名或子域名；
当ProxyType=instance时，表示代理名称。
     */
    public $ProxyName;

    /**
     * @var string 调度模式，取值有：
<li>ip：表示Anycast IP调度；</li>
<li>domain：表示CNAME调度。</li>
     */
    public $PlatType;

    /**
     * @var integer 是否开启安全，取值有：
<li>0：关闭安全；</li>
<li>1：开启安全。</li>
     */
    public $SecurityType;

    /**
     * @var integer 是否开启加速，取值有：
<li>0：关闭加速；</li>
<li>1：开启加速。</li>
     */
    public $AccelerateType;

    /**
     * @var string 字段已经废弃。
     */
    public $ForwardClientIp;

    /**
     * @var boolean 字段已经废弃。
     */
    public $SessionPersist;

    /**
     * @var array 规则列表。
     */
    public $Rule;

    /**
     * @var string 状态，取值有：
<li>online：启用；</li>
<li>offline：停用；</li>
<li>progress：部署中；</li>
<li>stopping：停用中；</li>
<li>fail：部署失败/停用失败。</li>
     */
    public $Status;

    /**
     * @var array 调度信息。
     */
    public $ScheduleValue;

    /**
     * @var string 更新时间。
     */
    public $UpdateTime;

    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var string 站点名称。
     */
    public $ZoneName;

    /**
     * @var integer 会话保持时间。
     */
    public $SessionPersistTime;

    /**
     * @var string 四层代理模式，取值有：
<li>hostname：表示子域名模式；</li>
<li>instance：表示实例模式。</li>
     */
    public $ProxyType;

    /**
     * @var string 当ProxyType=hostname时：
表示代理加速唯一标识。
     */
    public $HostId;

    /**
     * @var Ipv6Access Ipv6访问配置。
     */
    public $Ipv6;

    /**
     * @var string 加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
默认值：overseas
     */
    public $Area;

    /**
     * @var string 封禁状态，取值有：
<li>banned：已封禁;</li>
<li>banning：封禁中；</li>
<li>recover：已解封；</li>
<li>recovering：解封禁中。</li>
     */
    public $BanStatus;

    /**
     * @param string $ProxyId 代理ID。
     * @param string $ProxyName 当ProxyType=hostname时，表示域名或子域名；
当ProxyType=instance时，表示代理名称。
     * @param string $PlatType 调度模式，取值有：
<li>ip：表示Anycast IP调度；</li>
<li>domain：表示CNAME调度。</li>
     * @param integer $SecurityType 是否开启安全，取值有：
<li>0：关闭安全；</li>
<li>1：开启安全。</li>
     * @param integer $AccelerateType 是否开启加速，取值有：
<li>0：关闭加速；</li>
<li>1：开启加速。</li>
     * @param string $ForwardClientIp 字段已经废弃。
     * @param boolean $SessionPersist 字段已经废弃。
     * @param array $Rule 规则列表。
     * @param string $Status 状态，取值有：
<li>online：启用；</li>
<li>offline：停用；</li>
<li>progress：部署中；</li>
<li>stopping：停用中；</li>
<li>fail：部署失败/停用失败。</li>
     * @param array $ScheduleValue 调度信息。
     * @param string $UpdateTime 更新时间。
     * @param string $ZoneId 站点ID。
     * @param string $ZoneName 站点名称。
     * @param integer $SessionPersistTime 会话保持时间。
     * @param string $ProxyType 四层代理模式，取值有：
<li>hostname：表示子域名模式；</li>
<li>instance：表示实例模式。</li>
     * @param string $HostId 当ProxyType=hostname时：
表示代理加速唯一标识。
     * @param Ipv6Access $Ipv6 Ipv6访问配置。
     * @param string $Area 加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
默认值：overseas
     * @param string $BanStatus 封禁状态，取值有：
<li>banned：已封禁;</li>
<li>banning：封禁中；</li>
<li>recover：已解封；</li>
<li>recovering：解封禁中。</li>
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
        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("ProxyName",$param) and $param["ProxyName"] !== null) {
            $this->ProxyName = $param["ProxyName"];
        }

        if (array_key_exists("PlatType",$param) and $param["PlatType"] !== null) {
            $this->PlatType = $param["PlatType"];
        }

        if (array_key_exists("SecurityType",$param) and $param["SecurityType"] !== null) {
            $this->SecurityType = $param["SecurityType"];
        }

        if (array_key_exists("AccelerateType",$param) and $param["AccelerateType"] !== null) {
            $this->AccelerateType = $param["AccelerateType"];
        }

        if (array_key_exists("ForwardClientIp",$param) and $param["ForwardClientIp"] !== null) {
            $this->ForwardClientIp = $param["ForwardClientIp"];
        }

        if (array_key_exists("SessionPersist",$param) and $param["SessionPersist"] !== null) {
            $this->SessionPersist = $param["SessionPersist"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = [];
            foreach ($param["Rule"] as $key => $value){
                $obj = new ApplicationProxyRule();
                $obj->deserialize($value);
                array_push($this->Rule, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ScheduleValue",$param) and $param["ScheduleValue"] !== null) {
            $this->ScheduleValue = $param["ScheduleValue"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("SessionPersistTime",$param) and $param["SessionPersistTime"] !== null) {
            $this->SessionPersistTime = $param["SessionPersistTime"];
        }

        if (array_key_exists("ProxyType",$param) and $param["ProxyType"] !== null) {
            $this->ProxyType = $param["ProxyType"];
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = new Ipv6Access();
            $this->Ipv6->deserialize($param["Ipv6"]);
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("BanStatus",$param) and $param["BanStatus"] !== null) {
            $this->BanStatus = $param["BanStatus"];
        }
    }
}
