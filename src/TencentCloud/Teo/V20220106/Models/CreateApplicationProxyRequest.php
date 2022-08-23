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
 * CreateApplicationProxy请求参数结构体
 *
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method string getZoneName() 获取站点名称。
 * @method void setZoneName(string $ZoneName) 设置站点名称。
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
 * @method boolean getSessionPersist() 获取字段已经废弃。
 * @method void setSessionPersist(boolean $SessionPersist) 设置字段已经废弃。
 * @method string getForwardClientIp() 获取字段已经废弃。
 * @method void setForwardClientIp(string $ForwardClientIp) 设置字段已经废弃。
 * @method array getRule() 获取规则详细信息。
 * @method void setRule(array $Rule) 设置规则详细信息。
 * @method string getProxyType() 获取四层代理模式，取值有：
<li>hostname：表示子域名模式；</li>
<li>instance：表示实例模式。</li>不填写使用默认值instance。
 * @method void setProxyType(string $ProxyType) 设置四层代理模式，取值有：
<li>hostname：表示子域名模式；</li>
<li>instance：表示实例模式。</li>不填写使用默认值instance。
 * @method integer getSessionPersistTime() 获取会话保持时间，取值范围：30-3600，单位：秒。
不填写使用默认值600。
 * @method void setSessionPersistTime(integer $SessionPersistTime) 设置会话保持时间，取值范围：30-3600，单位：秒。
不填写使用默认值600。
 * @method Ipv6Access getIpv6() 获取Ipv6访问配置。
不填写表示关闭Ipv6访问。
 * @method void setIpv6(Ipv6Access $Ipv6) 设置Ipv6访问配置。
不填写表示关闭Ipv6访问。
 */
class CreateApplicationProxyRequest extends AbstractModel
{
    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var string 站点名称。
     */
    public $ZoneName;

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
     * @var boolean 字段已经废弃。
     */
    public $SessionPersist;

    /**
     * @var string 字段已经废弃。
     */
    public $ForwardClientIp;

    /**
     * @var array 规则详细信息。
     */
    public $Rule;

    /**
     * @var string 四层代理模式，取值有：
<li>hostname：表示子域名模式；</li>
<li>instance：表示实例模式。</li>不填写使用默认值instance。
     */
    public $ProxyType;

    /**
     * @var integer 会话保持时间，取值范围：30-3600，单位：秒。
不填写使用默认值600。
     */
    public $SessionPersistTime;

    /**
     * @var Ipv6Access Ipv6访问配置。
不填写表示关闭Ipv6访问。
     */
    public $Ipv6;

    /**
     * @param string $ZoneId 站点ID。
     * @param string $ZoneName 站点名称。
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
     * @param boolean $SessionPersist 字段已经废弃。
     * @param string $ForwardClientIp 字段已经废弃。
     * @param array $Rule 规则详细信息。
     * @param string $ProxyType 四层代理模式，取值有：
<li>hostname：表示子域名模式；</li>
<li>instance：表示实例模式。</li>不填写使用默认值instance。
     * @param integer $SessionPersistTime 会话保持时间，取值范围：30-3600，单位：秒。
不填写使用默认值600。
     * @param Ipv6Access $Ipv6 Ipv6访问配置。
不填写表示关闭Ipv6访问。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
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

        if (array_key_exists("SessionPersist",$param) and $param["SessionPersist"] !== null) {
            $this->SessionPersist = $param["SessionPersist"];
        }

        if (array_key_exists("ForwardClientIp",$param) and $param["ForwardClientIp"] !== null) {
            $this->ForwardClientIp = $param["ForwardClientIp"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = [];
            foreach ($param["Rule"] as $key => $value){
                $obj = new ApplicationProxyRule();
                $obj->deserialize($value);
                array_push($this->Rule, $obj);
            }
        }

        if (array_key_exists("ProxyType",$param) and $param["ProxyType"] !== null) {
            $this->ProxyType = $param["ProxyType"];
        }

        if (array_key_exists("SessionPersistTime",$param) and $param["SessionPersistTime"] !== null) {
            $this->SessionPersistTime = $param["SessionPersistTime"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = new Ipv6Access();
            $this->Ipv6->deserialize($param["Ipv6"]);
        }
    }
}
