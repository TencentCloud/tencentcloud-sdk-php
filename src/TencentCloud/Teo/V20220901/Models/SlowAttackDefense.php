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
 * 慢速攻击防护的具体配置。
 *
 * @method string getEnabled() 获取慢速攻击防护是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
 * @method void setEnabled(string $Enabled) 设置慢速攻击防护是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
 * @method SecurityAction getAction() 获取慢速攻击防护的处置方式，当 Enabled 为 on 时，此字段必填。SecurityAction 的 Name 取值支持：<li>Monitor：观察；</li><li>Deny：拦截；</li>
 * @method void setAction(SecurityAction $Action) 设置慢速攻击防护的处置方式，当 Enabled 为 on 时，此字段必填。SecurityAction 的 Name 取值支持：<li>Monitor：观察；</li><li>Deny：拦截；</li>
 * @method MinimalRequestBodyTransferRate getMinimalRequestBodyTransferRate() 获取正文传输最小速率阈值的具体配置，当 Enabled 为 on 时，此字段必填。
 * @method void setMinimalRequestBodyTransferRate(MinimalRequestBodyTransferRate $MinimalRequestBodyTransferRate) 设置正文传输最小速率阈值的具体配置，当 Enabled 为 on 时，此字段必填。
 * @method RequestBodyTransferTimeout getRequestBodyTransferTimeout() 获取正文传输超时时长的具体配置，当 Enabled 为 on 时，此字段必填。
 * @method void setRequestBodyTransferTimeout(RequestBodyTransferTimeout $RequestBodyTransferTimeout) 设置正文传输超时时长的具体配置，当 Enabled 为 on 时，此字段必填。
 */
class SlowAttackDefense extends AbstractModel
{
    /**
     * @var string 慢速攻击防护是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
     */
    public $Enabled;

    /**
     * @var SecurityAction 慢速攻击防护的处置方式，当 Enabled 为 on 时，此字段必填。SecurityAction 的 Name 取值支持：<li>Monitor：观察；</li><li>Deny：拦截；</li>
     */
    public $Action;

    /**
     * @var MinimalRequestBodyTransferRate 正文传输最小速率阈值的具体配置，当 Enabled 为 on 时，此字段必填。
     */
    public $MinimalRequestBodyTransferRate;

    /**
     * @var RequestBodyTransferTimeout 正文传输超时时长的具体配置，当 Enabled 为 on 时，此字段必填。
     */
    public $RequestBodyTransferTimeout;

    /**
     * @param string $Enabled 慢速攻击防护是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
     * @param SecurityAction $Action 慢速攻击防护的处置方式，当 Enabled 为 on 时，此字段必填。SecurityAction 的 Name 取值支持：<li>Monitor：观察；</li><li>Deny：拦截；</li>
     * @param MinimalRequestBodyTransferRate $MinimalRequestBodyTransferRate 正文传输最小速率阈值的具体配置，当 Enabled 为 on 时，此字段必填。
     * @param RequestBodyTransferTimeout $RequestBodyTransferTimeout 正文传输超时时长的具体配置，当 Enabled 为 on 时，此字段必填。
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

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new SecurityAction();
            $this->Action->deserialize($param["Action"]);
        }

        if (array_key_exists("MinimalRequestBodyTransferRate",$param) and $param["MinimalRequestBodyTransferRate"] !== null) {
            $this->MinimalRequestBodyTransferRate = new MinimalRequestBodyTransferRate();
            $this->MinimalRequestBodyTransferRate->deserialize($param["MinimalRequestBodyTransferRate"]);
        }

        if (array_key_exists("RequestBodyTransferTimeout",$param) and $param["RequestBodyTransferTimeout"] !== null) {
            $this->RequestBodyTransferTimeout = new RequestBodyTransferTimeout();
            $this->RequestBodyTransferTimeout->deserialize($param["RequestBodyTransferTimeout"]);
        }
    }
}
