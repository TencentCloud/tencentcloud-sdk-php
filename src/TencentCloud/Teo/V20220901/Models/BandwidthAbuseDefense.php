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
 * 流量防盗刷（仅适用中国大陆地区）的具体配置。
 *
 * @method string getEnabled() 获取流量防盗刷（仅适用中国大陆地区）是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
 * @method void setEnabled(string $Enabled) 设置流量防盗刷（仅适用中国大陆地区）是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
 * @method SecurityAction getAction() 获取流量防盗刷（仅适用中国大陆地区）的处置方式，当 Enabled 为 on 时，此字段必填。SecurityAction 的 Name 取值支持：<li>Monitor：观察；</li><li>Deny：拦截；</li><li>Challenge：挑战，其中ChallengeActionParameters.Name仅支持JSChallenge。</li>
 * @method void setAction(SecurityAction $Action) 设置流量防盗刷（仅适用中国大陆地区）的处置方式，当 Enabled 为 on 时，此字段必填。SecurityAction 的 Name 取值支持：<li>Monitor：观察；</li><li>Deny：拦截；</li><li>Challenge：挑战，其中ChallengeActionParameters.Name仅支持JSChallenge。</li>
 */
class BandwidthAbuseDefense extends AbstractModel
{
    /**
     * @var string 流量防盗刷（仅适用中国大陆地区）是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
     */
    public $Enabled;

    /**
     * @var SecurityAction 流量防盗刷（仅适用中国大陆地区）的处置方式，当 Enabled 为 on 时，此字段必填。SecurityAction 的 Name 取值支持：<li>Monitor：观察；</li><li>Deny：拦截；</li><li>Challenge：挑战，其中ChallengeActionParameters.Name仅支持JSChallenge。</li>
     */
    public $Action;

    /**
     * @param string $Enabled 流量防盗刷（仅适用中国大陆地区）是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
     * @param SecurityAction $Action 流量防盗刷（仅适用中国大陆地区）的处置方式，当 Enabled 为 on 时，此字段必填。SecurityAction 的 Name 取值支持：<li>Monitor：观察；</li><li>Deny：拦截；</li><li>Challenge：挑战，其中ChallengeActionParameters.Name仅支持JSChallenge。</li>
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
    }
}
