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
 * 适用于四层代理或 Web 站点服务的独立 DDoS 防护规格配置。
 *
 * @method string getLevelMainland() 获取中国大陆地区独立 DDoS 防护的规格。详情请参考 [独立 DDoS 防护相关费用](https://cloud.tencent.com/document/product/1552/94162)
<li>PLATFORM：平台默认防护，即不开启独立 DDoS 防护；</li>
<li>BASE30_MAX300：开启独立 DDoS 防护，提供 30 Gbps 保底防护带宽以及 300 Gbps 弹性防护带宽；</li>
<li>BASE60_MAX600：开启独立 DDoS 防护，提供 60 Gbps 保底防护带宽以及 600 Gbps 弹性防护带宽。</li>不填写参数时，取默认值 PLATFORM。
 * @method void setLevelMainland(string $LevelMainland) 设置中国大陆地区独立 DDoS 防护的规格。详情请参考 [独立 DDoS 防护相关费用](https://cloud.tencent.com/document/product/1552/94162)
<li>PLATFORM：平台默认防护，即不开启独立 DDoS 防护；</li>
<li>BASE30_MAX300：开启独立 DDoS 防护，提供 30 Gbps 保底防护带宽以及 300 Gbps 弹性防护带宽；</li>
<li>BASE60_MAX600：开启独立 DDoS 防护，提供 60 Gbps 保底防护带宽以及 600 Gbps 弹性防护带宽。</li>不填写参数时，取默认值 PLATFORM。
 * @method integer getMaxBandwidthMainland() 获取中国大陆地区独立 DDoS 防护的弹性防护带宽配置。
仅当开启中国大陆区域独立 DDos 防护时有效（详见 LevelMainland 参数配置），且取值范围有如下限制：
<li>开启中国大陆地区独立 DDoS 防护，使用 30 Gbps 保底防护带宽规格时（ LevelMainland 参数值为 BASE30_MAX300 ）：有效取值范围为 30 至 300，单位为 Gbps；</li>
<li>开启中国大陆地区独立 DDoS 防护，使用 60 Gbps 保底防护带宽规格时（ LevelMainland 参数值为 BASE60_MAX600 ）：有效取值范围为 60 至 600，单位为 Gbps；</li>
<li>使用平台默认防护（ LevelMainland 参数值为 PLATFORM ）：不支持配置，本参数值无效。</li>
 * @method void setMaxBandwidthMainland(integer $MaxBandwidthMainland) 设置中国大陆地区独立 DDoS 防护的弹性防护带宽配置。
仅当开启中国大陆区域独立 DDos 防护时有效（详见 LevelMainland 参数配置），且取值范围有如下限制：
<li>开启中国大陆地区独立 DDoS 防护，使用 30 Gbps 保底防护带宽规格时（ LevelMainland 参数值为 BASE30_MAX300 ）：有效取值范围为 30 至 300，单位为 Gbps；</li>
<li>开启中国大陆地区独立 DDoS 防护，使用 60 Gbps 保底防护带宽规格时（ LevelMainland 参数值为 BASE60_MAX600 ）：有效取值范围为 60 至 600，单位为 Gbps；</li>
<li>使用平台默认防护（ LevelMainland 参数值为 PLATFORM ）：不支持配置，本参数值无效。</li>
 * @method string getLevelOverseas() 获取全球（除中国大陆以外）地区独立 DDoS 防护的规格。
<li>PLATFORM：平台默认防护，即不开启独立 DDoS 防护；</li>
<li>ANYCAST300：开启独立 DDoS 防护，提供 300 Gbps 防护带宽；</li>
<li>ANYCAST_ALLIN：开启独立 DDoS 防护，使用全部可用防护资源进行防护。</li>不填写参数时，取默认值 PLATFORM。
 * @method void setLevelOverseas(string $LevelOverseas) 设置全球（除中国大陆以外）地区独立 DDoS 防护的规格。
<li>PLATFORM：平台默认防护，即不开启独立 DDoS 防护；</li>
<li>ANYCAST300：开启独立 DDoS 防护，提供 300 Gbps 防护带宽；</li>
<li>ANYCAST_ALLIN：开启独立 DDoS 防护，使用全部可用防护资源进行防护。</li>不填写参数时，取默认值 PLATFORM。
 */
class DDosProtectionConfig extends AbstractModel
{
    /**
     * @var string 中国大陆地区独立 DDoS 防护的规格。详情请参考 [独立 DDoS 防护相关费用](https://cloud.tencent.com/document/product/1552/94162)
<li>PLATFORM：平台默认防护，即不开启独立 DDoS 防护；</li>
<li>BASE30_MAX300：开启独立 DDoS 防护，提供 30 Gbps 保底防护带宽以及 300 Gbps 弹性防护带宽；</li>
<li>BASE60_MAX600：开启独立 DDoS 防护，提供 60 Gbps 保底防护带宽以及 600 Gbps 弹性防护带宽。</li>不填写参数时，取默认值 PLATFORM。
     */
    public $LevelMainland;

    /**
     * @var integer 中国大陆地区独立 DDoS 防护的弹性防护带宽配置。
仅当开启中国大陆区域独立 DDos 防护时有效（详见 LevelMainland 参数配置），且取值范围有如下限制：
<li>开启中国大陆地区独立 DDoS 防护，使用 30 Gbps 保底防护带宽规格时（ LevelMainland 参数值为 BASE30_MAX300 ）：有效取值范围为 30 至 300，单位为 Gbps；</li>
<li>开启中国大陆地区独立 DDoS 防护，使用 60 Gbps 保底防护带宽规格时（ LevelMainland 参数值为 BASE60_MAX600 ）：有效取值范围为 60 至 600，单位为 Gbps；</li>
<li>使用平台默认防护（ LevelMainland 参数值为 PLATFORM ）：不支持配置，本参数值无效。</li>
     */
    public $MaxBandwidthMainland;

    /**
     * @var string 全球（除中国大陆以外）地区独立 DDoS 防护的规格。
<li>PLATFORM：平台默认防护，即不开启独立 DDoS 防护；</li>
<li>ANYCAST300：开启独立 DDoS 防护，提供 300 Gbps 防护带宽；</li>
<li>ANYCAST_ALLIN：开启独立 DDoS 防护，使用全部可用防护资源进行防护。</li>不填写参数时，取默认值 PLATFORM。
     */
    public $LevelOverseas;

    /**
     * @param string $LevelMainland 中国大陆地区独立 DDoS 防护的规格。详情请参考 [独立 DDoS 防护相关费用](https://cloud.tencent.com/document/product/1552/94162)
<li>PLATFORM：平台默认防护，即不开启独立 DDoS 防护；</li>
<li>BASE30_MAX300：开启独立 DDoS 防护，提供 30 Gbps 保底防护带宽以及 300 Gbps 弹性防护带宽；</li>
<li>BASE60_MAX600：开启独立 DDoS 防护，提供 60 Gbps 保底防护带宽以及 600 Gbps 弹性防护带宽。</li>不填写参数时，取默认值 PLATFORM。
     * @param integer $MaxBandwidthMainland 中国大陆地区独立 DDoS 防护的弹性防护带宽配置。
仅当开启中国大陆区域独立 DDos 防护时有效（详见 LevelMainland 参数配置），且取值范围有如下限制：
<li>开启中国大陆地区独立 DDoS 防护，使用 30 Gbps 保底防护带宽规格时（ LevelMainland 参数值为 BASE30_MAX300 ）：有效取值范围为 30 至 300，单位为 Gbps；</li>
<li>开启中国大陆地区独立 DDoS 防护，使用 60 Gbps 保底防护带宽规格时（ LevelMainland 参数值为 BASE60_MAX600 ）：有效取值范围为 60 至 600，单位为 Gbps；</li>
<li>使用平台默认防护（ LevelMainland 参数值为 PLATFORM ）：不支持配置，本参数值无效。</li>
     * @param string $LevelOverseas 全球（除中国大陆以外）地区独立 DDoS 防护的规格。
<li>PLATFORM：平台默认防护，即不开启独立 DDoS 防护；</li>
<li>ANYCAST300：开启独立 DDoS 防护，提供 300 Gbps 防护带宽；</li>
<li>ANYCAST_ALLIN：开启独立 DDoS 防护，使用全部可用防护资源进行防护。</li>不填写参数时，取默认值 PLATFORM。
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
        if (array_key_exists("LevelMainland",$param) and $param["LevelMainland"] !== null) {
            $this->LevelMainland = $param["LevelMainland"];
        }

        if (array_key_exists("MaxBandwidthMainland",$param) and $param["MaxBandwidthMainland"] !== null) {
            $this->MaxBandwidthMainland = $param["MaxBandwidthMainland"];
        }

        if (array_key_exists("LevelOverseas",$param) and $param["LevelOverseas"] !== null) {
            $this->LevelOverseas = $param["LevelOverseas"];
        }
    }
}
