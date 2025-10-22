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
 * IP 情报库（原客户端画像分析）配置。
 *
 * @method string getEnabled() 获取IP 情报库（原客户端画像分析）。取值有：<li>on：开启；</li><li>off：关闭。</li>
 * @method void setEnabled(string $Enabled) 设置IP 情报库（原客户端画像分析）。取值有：<li>on：开启；</li><li>off：关闭。</li>
 * @method IPReputationGroup getIPReputationGroup() 获取IP 情报库（原客户端画像分析）的具体配置内容。
 * @method void setIPReputationGroup(IPReputationGroup $IPReputationGroup) 设置IP 情报库（原客户端画像分析）的具体配置内容。
 */
class IPReputation extends AbstractModel
{
    /**
     * @var string IP 情报库（原客户端画像分析）。取值有：<li>on：开启；</li><li>off：关闭。</li>
     */
    public $Enabled;

    /**
     * @var IPReputationGroup IP 情报库（原客户端画像分析）的具体配置内容。
     */
    public $IPReputationGroup;

    /**
     * @param string $Enabled IP 情报库（原客户端画像分析）。取值有：<li>on：开启；</li><li>off：关闭。</li>
     * @param IPReputationGroup $IPReputationGroup IP 情报库（原客户端画像分析）的具体配置内容。
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("IPReputationGroup",$param) and $param["IPReputationGroup"] !== null) {
            $this->IPReputationGroup = new IPReputationGroup();
            $this->IPReputationGroup->deserialize($param["IPReputationGroup"]);
        }
    }
}
