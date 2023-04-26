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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApplicationProxy请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getProxyName() 获取当 ProxyType=hostname 时，表示域名或子域名；
当 ProxyType=instance 时，表示代理名称。
 * @method void setProxyName(string $ProxyName) 设置当 ProxyType=hostname 时，表示域名或子域名；
当 ProxyType=instance 时，表示代理名称。
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
 * @method Ipv6 getIpv6() 获取Ipv6 访问配置。
不填写表示关闭 Ipv6 访问。
 * @method void setIpv6(Ipv6 $Ipv6) 设置Ipv6 访问配置。
不填写表示关闭 Ipv6 访问。
 * @method array getApplicationProxyRules() 获取规则详细信息。
不填写则不创建规则。
 * @method void setApplicationProxyRules(array $ApplicationProxyRules) 设置规则详细信息。
不填写则不创建规则。
 * @method AccelerateMainland getAccelerateMainland() 获取中国大陆加速优化配置。不填写表示关闭中国大陆加速优化。
 * @method void setAccelerateMainland(AccelerateMainland $AccelerateMainland) 设置中国大陆加速优化配置。不填写表示关闭中国大陆加速优化。
 */
class CreateApplicationProxyRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 当 ProxyType=hostname 时，表示域名或子域名；
当 ProxyType=instance 时，表示代理名称。
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
     * @var Ipv6 Ipv6 访问配置。
不填写表示关闭 Ipv6 访问。
     */
    public $Ipv6;

    /**
     * @var array 规则详细信息。
不填写则不创建规则。
     */
    public $ApplicationProxyRules;

    /**
     * @var AccelerateMainland 中国大陆加速优化配置。不填写表示关闭中国大陆加速优化。
     */
    public $AccelerateMainland;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $ProxyName 当 ProxyType=hostname 时，表示域名或子域名；
当 ProxyType=instance 时，表示代理名称。
     * @param string $PlatType 调度模式，取值有：
<li>ip：表示Anycast IP调度；</li>
<li>domain：表示CNAME调度。</li>
     * @param integer $SecurityType 是否开启安全，取值有：
<li>0：关闭安全；</li>
<li>1：开启安全。</li>
     * @param integer $AccelerateType 是否开启加速，取值有：
<li>0：关闭加速；</li>
<li>1：开启加速。</li>
     * @param string $ProxyType 四层代理模式，取值有：
<li>hostname：表示子域名模式；</li>
<li>instance：表示实例模式。</li>不填写使用默认值instance。
     * @param integer $SessionPersistTime 会话保持时间，取值范围：30-3600，单位：秒。
不填写使用默认值600。
     * @param Ipv6 $Ipv6 Ipv6 访问配置。
不填写表示关闭 Ipv6 访问。
     * @param array $ApplicationProxyRules 规则详细信息。
不填写则不创建规则。
     * @param AccelerateMainland $AccelerateMainland 中国大陆加速优化配置。不填写表示关闭中国大陆加速优化。
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

        if (array_key_exists("ProxyType",$param) and $param["ProxyType"] !== null) {
            $this->ProxyType = $param["ProxyType"];
        }

        if (array_key_exists("SessionPersistTime",$param) and $param["SessionPersistTime"] !== null) {
            $this->SessionPersistTime = $param["SessionPersistTime"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = new Ipv6();
            $this->Ipv6->deserialize($param["Ipv6"]);
        }

        if (array_key_exists("ApplicationProxyRules",$param) and $param["ApplicationProxyRules"] !== null) {
            $this->ApplicationProxyRules = [];
            foreach ($param["ApplicationProxyRules"] as $key => $value){
                $obj = new ApplicationProxyRule();
                $obj->deserialize($value);
                array_push($this->ApplicationProxyRules, $obj);
            }
        }

        if (array_key_exists("AccelerateMainland",$param) and $param["AccelerateMainland"] !== null) {
            $this->AccelerateMainland = new AccelerateMainland();
            $this->AccelerateMainland->deserialize($param["AccelerateMainland"]);
        }
    }
}
