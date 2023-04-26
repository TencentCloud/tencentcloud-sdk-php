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
 * ModifyApplicationProxy请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getProxyId() 获取代理 ID。
 * @method void setProxyId(string $ProxyId) 设置代理 ID。
 * @method string getProxyName() 获取当 ProxyType=hostname 时，表示域名或子域名；
当 ProxyType=instance 时，表示代理名称。
 * @method void setProxyName(string $ProxyName) 设置当 ProxyType=hostname 时，表示域名或子域名；
当 ProxyType=instance 时，表示代理名称。
 * @method integer getSessionPersistTime() 获取会话保持时间，取值范围：30-3600，单位：秒。
不填写保持原有配置。
 * @method void setSessionPersistTime(integer $SessionPersistTime) 设置会话保持时间，取值范围：30-3600，单位：秒。
不填写保持原有配置。
 * @method string getProxyType() 获取四层代理模式，取值有：
<li>hostname：表示子域名模式；</li>
<li>instance：表示实例模式。</li>不填写保持原有配置。
 * @method void setProxyType(string $ProxyType) 设置四层代理模式，取值有：
<li>hostname：表示子域名模式；</li>
<li>instance：表示实例模式。</li>不填写保持原有配置。
 * @method Ipv6 getIpv6() 获取Ipv6 访问配置，不填写保持原有配置。
 * @method void setIpv6(Ipv6 $Ipv6) 设置Ipv6 访问配置，不填写保持原有配置。
 * @method AccelerateMainland getAccelerateMainland() 获取中国大陆加速优化配置。 不填写表示保持原有配置。
 * @method void setAccelerateMainland(AccelerateMainland $AccelerateMainland) 设置中国大陆加速优化配置。 不填写表示保持原有配置。
 */
class ModifyApplicationProxyRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 代理 ID。
     */
    public $ProxyId;

    /**
     * @var string 当 ProxyType=hostname 时，表示域名或子域名；
当 ProxyType=instance 时，表示代理名称。
     */
    public $ProxyName;

    /**
     * @var integer 会话保持时间，取值范围：30-3600，单位：秒。
不填写保持原有配置。
     */
    public $SessionPersistTime;

    /**
     * @var string 四层代理模式，取值有：
<li>hostname：表示子域名模式；</li>
<li>instance：表示实例模式。</li>不填写保持原有配置。
     */
    public $ProxyType;

    /**
     * @var Ipv6 Ipv6 访问配置，不填写保持原有配置。
     */
    public $Ipv6;

    /**
     * @var AccelerateMainland 中国大陆加速优化配置。 不填写表示保持原有配置。
     */
    public $AccelerateMainland;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $ProxyId 代理 ID。
     * @param string $ProxyName 当 ProxyType=hostname 时，表示域名或子域名；
当 ProxyType=instance 时，表示代理名称。
     * @param integer $SessionPersistTime 会话保持时间，取值范围：30-3600，单位：秒。
不填写保持原有配置。
     * @param string $ProxyType 四层代理模式，取值有：
<li>hostname：表示子域名模式；</li>
<li>instance：表示实例模式。</li>不填写保持原有配置。
     * @param Ipv6 $Ipv6 Ipv6 访问配置，不填写保持原有配置。
     * @param AccelerateMainland $AccelerateMainland 中国大陆加速优化配置。 不填写表示保持原有配置。
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

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("ProxyName",$param) and $param["ProxyName"] !== null) {
            $this->ProxyName = $param["ProxyName"];
        }

        if (array_key_exists("SessionPersistTime",$param) and $param["SessionPersistTime"] !== null) {
            $this->SessionPersistTime = $param["SessionPersistTime"];
        }

        if (array_key_exists("ProxyType",$param) and $param["ProxyType"] !== null) {
            $this->ProxyType = $param["ProxyType"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = new Ipv6();
            $this->Ipv6->deserialize($param["Ipv6"]);
        }

        if (array_key_exists("AccelerateMainland",$param) and $param["AccelerateMainland"] !== null) {
            $this->AccelerateMainland = new AccelerateMainland();
            $this->AccelerateMainland->deserialize($param["AccelerateMainland"]);
        }
    }
}
