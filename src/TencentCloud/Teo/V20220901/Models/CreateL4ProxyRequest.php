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
 * CreateL4Proxy请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getProxyName() 获取四层代理实例名称，可输入 1-50 个字符，允许的字符为 a-z、0-9、-，且 - 不能单独注册或连续使用，不能放在开头或结尾。创建完成后不支持修改。

 * @method void setProxyName(string $ProxyName) 设置四层代理实例名称，可输入 1-50 个字符，允许的字符为 a-z、0-9、-，且 - 不能单独注册或连续使用，不能放在开头或结尾。创建完成后不支持修改。

 * @method string getArea() 获取四层代理实例加速区域。
<li>mainland：中国大陆可用区；</li>
<li>overseas：全球可用区（不含中国大陆）；</li>
<li>global：全球可用区。</li>
 * @method void setArea(string $Area) 设置四层代理实例加速区域。
<li>mainland：中国大陆可用区；</li>
<li>overseas：全球可用区（不含中国大陆）；</li>
<li>global：全球可用区。</li>
 * @method string getIpv6() 获取是否开启 IPv6 访问，不填写时默认为 off。该配置仅在部分加速区域和安全防护配置下支持开启，详情请参考 [新建四层代理实例](https://cloud.tencent.com/document/product/1552/90025) 。取值为：
<li>on：开启；</li>
<li>off：关闭。</li>


 * @method void setIpv6(string $Ipv6) 设置是否开启 IPv6 访问，不填写时默认为 off。该配置仅在部分加速区域和安全防护配置下支持开启，详情请参考 [新建四层代理实例](https://cloud.tencent.com/document/product/1552/90025) 。取值为：
<li>on：开启；</li>
<li>off：关闭。</li>


 * @method string getStaticIp() 获取是否开启固定 IP，不填写时默认为 off。该配置仅在部分加速区域和安全防护配置下支持开启，详情请参考 [新建四层代理实例](https://cloud.tencent.com/document/product/1552/90025) 。取值为：
<li>on：开启；</li>
<li>off：关闭。</li>

 * @method void setStaticIp(string $StaticIp) 设置是否开启固定 IP，不填写时默认为 off。该配置仅在部分加速区域和安全防护配置下支持开启，详情请参考 [新建四层代理实例](https://cloud.tencent.com/document/product/1552/90025) 。取值为：
<li>on：开启；</li>
<li>off：关闭。</li>

 * @method string getAccelerateMainland() 获取是否开启中国大陆网络优化，不填写时默认为 off。该配置仅在部分加速区域和安全防护配置下支持开启，详情请参考 [新建四层代理实例](https://cloud.tencent.com/document/product/1552/90025) 。取值为：
<li>on：开启；</li>
<li>off：关闭。</li>

 * @method void setAccelerateMainland(string $AccelerateMainland) 设置是否开启中国大陆网络优化，不填写时默认为 off。该配置仅在部分加速区域和安全防护配置下支持开启，详情请参考 [新建四层代理实例](https://cloud.tencent.com/document/product/1552/90025) 。取值为：
<li>on：开启；</li>
<li>off：关闭。</li>

 * @method DDosProtectionConfig getDDosProtectionConfig() 获取L3/L4 DDoS 防护配置，不填写时默认使用平台默认防护选项。详情参考 [独立 DDoS 防护](https://cloud.tencent.com/document/product/1552/95994)。
 * @method void setDDosProtectionConfig(DDosProtectionConfig $DDosProtectionConfig) 设置L3/L4 DDoS 防护配置，不填写时默认使用平台默认防护选项。详情参考 [独立 DDoS 防护](https://cloud.tencent.com/document/product/1552/95994)。
 */
class CreateL4ProxyRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 四层代理实例名称，可输入 1-50 个字符，允许的字符为 a-z、0-9、-，且 - 不能单独注册或连续使用，不能放在开头或结尾。创建完成后不支持修改。

     */
    public $ProxyName;

    /**
     * @var string 四层代理实例加速区域。
<li>mainland：中国大陆可用区；</li>
<li>overseas：全球可用区（不含中国大陆）；</li>
<li>global：全球可用区。</li>
     */
    public $Area;

    /**
     * @var string 是否开启 IPv6 访问，不填写时默认为 off。该配置仅在部分加速区域和安全防护配置下支持开启，详情请参考 [新建四层代理实例](https://cloud.tencent.com/document/product/1552/90025) 。取值为：
<li>on：开启；</li>
<li>off：关闭。</li>


     */
    public $Ipv6;

    /**
     * @var string 是否开启固定 IP，不填写时默认为 off。该配置仅在部分加速区域和安全防护配置下支持开启，详情请参考 [新建四层代理实例](https://cloud.tencent.com/document/product/1552/90025) 。取值为：
<li>on：开启；</li>
<li>off：关闭。</li>

     */
    public $StaticIp;

    /**
     * @var string 是否开启中国大陆网络优化，不填写时默认为 off。该配置仅在部分加速区域和安全防护配置下支持开启，详情请参考 [新建四层代理实例](https://cloud.tencent.com/document/product/1552/90025) 。取值为：
<li>on：开启；</li>
<li>off：关闭。</li>

     */
    public $AccelerateMainland;

    /**
     * @var DDosProtectionConfig L3/L4 DDoS 防护配置，不填写时默认使用平台默认防护选项。详情参考 [独立 DDoS 防护](https://cloud.tencent.com/document/product/1552/95994)。
     */
    public $DDosProtectionConfig;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $ProxyName 四层代理实例名称，可输入 1-50 个字符，允许的字符为 a-z、0-9、-，且 - 不能单独注册或连续使用，不能放在开头或结尾。创建完成后不支持修改。

     * @param string $Area 四层代理实例加速区域。
<li>mainland：中国大陆可用区；</li>
<li>overseas：全球可用区（不含中国大陆）；</li>
<li>global：全球可用区。</li>
     * @param string $Ipv6 是否开启 IPv6 访问，不填写时默认为 off。该配置仅在部分加速区域和安全防护配置下支持开启，详情请参考 [新建四层代理实例](https://cloud.tencent.com/document/product/1552/90025) 。取值为：
<li>on：开启；</li>
<li>off：关闭。</li>


     * @param string $StaticIp 是否开启固定 IP，不填写时默认为 off。该配置仅在部分加速区域和安全防护配置下支持开启，详情请参考 [新建四层代理实例](https://cloud.tencent.com/document/product/1552/90025) 。取值为：
<li>on：开启；</li>
<li>off：关闭。</li>

     * @param string $AccelerateMainland 是否开启中国大陆网络优化，不填写时默认为 off。该配置仅在部分加速区域和安全防护配置下支持开启，详情请参考 [新建四层代理实例](https://cloud.tencent.com/document/product/1552/90025) 。取值为：
<li>on：开启；</li>
<li>off：关闭。</li>

     * @param DDosProtectionConfig $DDosProtectionConfig L3/L4 DDoS 防护配置，不填写时默认使用平台默认防护选项。详情参考 [独立 DDoS 防护](https://cloud.tencent.com/document/product/1552/95994)。
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

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = $param["Ipv6"];
        }

        if (array_key_exists("StaticIp",$param) and $param["StaticIp"] !== null) {
            $this->StaticIp = $param["StaticIp"];
        }

        if (array_key_exists("AccelerateMainland",$param) and $param["AccelerateMainland"] !== null) {
            $this->AccelerateMainland = $param["AccelerateMainland"];
        }

        if (array_key_exists("DDosProtectionConfig",$param) and $param["DDosProtectionConfig"] !== null) {
            $this->DDosProtectionConfig = new DDosProtectionConfig();
            $this->DDosProtectionConfig->deserialize($param["DDosProtectionConfig"]);
        }
    }
}
