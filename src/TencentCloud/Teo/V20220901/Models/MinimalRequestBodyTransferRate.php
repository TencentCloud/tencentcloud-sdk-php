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
 * 正文传输最小速率阈值的具体配置。
 *
 * @method string getMinimalAvgTransferRateThreshold() 获取正文传输最小速率阈值，单位仅支持bps。
 * @method void setMinimalAvgTransferRateThreshold(string $MinimalAvgTransferRateThreshold) 设置正文传输最小速率阈值，单位仅支持bps。
 * @method string getCountingPeriod() 获取正文传输最小速率统计时间范围，取值有：<li>10s：10秒；</li><li>30s：30秒；</li><li>60s：60秒；</li><li>120s：120秒。</li> 
 * @method void setCountingPeriod(string $CountingPeriod) 设置正文传输最小速率统计时间范围，取值有：<li>10s：10秒；</li><li>30s：30秒；</li><li>60s：60秒；</li><li>120s：120秒。</li> 
 * @method string getEnabled() 获取正文传输最小速率阈值是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
 * @method void setEnabled(string $Enabled) 设置正文传输最小速率阈值是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
 */
class MinimalRequestBodyTransferRate extends AbstractModel
{
    /**
     * @var string 正文传输最小速率阈值，单位仅支持bps。
     */
    public $MinimalAvgTransferRateThreshold;

    /**
     * @var string 正文传输最小速率统计时间范围，取值有：<li>10s：10秒；</li><li>30s：30秒；</li><li>60s：60秒；</li><li>120s：120秒。</li> 
     */
    public $CountingPeriod;

    /**
     * @var string 正文传输最小速率阈值是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
     */
    public $Enabled;

    /**
     * @param string $MinimalAvgTransferRateThreshold 正文传输最小速率阈值，单位仅支持bps。
     * @param string $CountingPeriod 正文传输最小速率统计时间范围，取值有：<li>10s：10秒；</li><li>30s：30秒；</li><li>60s：60秒；</li><li>120s：120秒。</li> 
     * @param string $Enabled 正文传输最小速率阈值是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
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
        if (array_key_exists("MinimalAvgTransferRateThreshold",$param) and $param["MinimalAvgTransferRateThreshold"] !== null) {
            $this->MinimalAvgTransferRateThreshold = $param["MinimalAvgTransferRateThreshold"];
        }

        if (array_key_exists("CountingPeriod",$param) and $param["CountingPeriod"] !== null) {
            $this->CountingPeriod = $param["CountingPeriod"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
