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
 * 按权重分配的 SecurityAction。
 *
 * @method SecurityAction getSecurityAction() 获取Bot 自定义规则的处置方式。取值有：<li>Allow：放行，其中 AllowActionParameters 支持 MinDelayTime 和 MaxDelayTime 配置；</li><li>Deny：拦截，其中 DenyActionParameters 中支持 BlockIp、ReturnCustomPage 和 Stall 配置；</li><li>Monitor：观察；</li><li>Challenge：挑战，其中 ChallengeActionParameters.ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Redirect：重定向至URL。</li>
 * @method void setSecurityAction(SecurityAction $SecurityAction) 设置Bot 自定义规则的处置方式。取值有：<li>Allow：放行，其中 AllowActionParameters 支持 MinDelayTime 和 MaxDelayTime 配置；</li><li>Deny：拦截，其中 DenyActionParameters 中支持 BlockIp、ReturnCustomPage 和 Stall 配置；</li><li>Monitor：观察；</li><li>Challenge：挑战，其中 ChallengeActionParameters.ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Redirect：重定向至URL。</li>
 * @method integer getWeight() 获取当前 SecurityAction 的权重，仅支持 10 ~ 100 且必须为 10 的倍数，其中 Weight 参数全部相加须等于 100。
 * @method void setWeight(integer $Weight) 设置当前 SecurityAction 的权重，仅支持 10 ~ 100 且必须为 10 的倍数，其中 Weight 参数全部相加须等于 100。
 */
class SecurityWeightedAction extends AbstractModel
{
    /**
     * @var SecurityAction Bot 自定义规则的处置方式。取值有：<li>Allow：放行，其中 AllowActionParameters 支持 MinDelayTime 和 MaxDelayTime 配置；</li><li>Deny：拦截，其中 DenyActionParameters 中支持 BlockIp、ReturnCustomPage 和 Stall 配置；</li><li>Monitor：观察；</li><li>Challenge：挑战，其中 ChallengeActionParameters.ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Redirect：重定向至URL。</li>
     */
    public $SecurityAction;

    /**
     * @var integer 当前 SecurityAction 的权重，仅支持 10 ~ 100 且必须为 10 的倍数，其中 Weight 参数全部相加须等于 100。
     */
    public $Weight;

    /**
     * @param SecurityAction $SecurityAction Bot 自定义规则的处置方式。取值有：<li>Allow：放行，其中 AllowActionParameters 支持 MinDelayTime 和 MaxDelayTime 配置；</li><li>Deny：拦截，其中 DenyActionParameters 中支持 BlockIp、ReturnCustomPage 和 Stall 配置；</li><li>Monitor：观察；</li><li>Challenge：挑战，其中 ChallengeActionParameters.ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Redirect：重定向至URL。</li>
     * @param integer $Weight 当前 SecurityAction 的权重，仅支持 10 ~ 100 且必须为 10 的倍数，其中 Weight 参数全部相加须等于 100。
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
        if (array_key_exists("SecurityAction",$param) and $param["SecurityAction"] !== null) {
            $this->SecurityAction = new SecurityAction();
            $this->SecurityAction->deserialize($param["SecurityAction"]);
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
