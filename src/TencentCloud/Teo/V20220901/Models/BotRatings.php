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
 * 基于客户端和请求特征，将请求来源分为人类来源请求、合法 Bot 请求、疑似 Bot 请求和高风险 Bot 请求，并提供请求处置选项。
 *
 * @method SecurityAction getHighRiskBotRequestsAction() 获取恶意 Bot 请求的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Allow：放行；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge。</li>
 * @method void setHighRiskBotRequestsAction(SecurityAction $HighRiskBotRequestsAction) 设置恶意 Bot 请求的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Allow：放行；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge。</li>
 * @method SecurityAction getLikelyBotRequestsAction() 获取疑似 Bot 请求的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Allow：放行；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge。</li>
 * @method void setLikelyBotRequestsAction(SecurityAction $LikelyBotRequestsAction) 设置疑似 Bot 请求的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Allow：放行；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge。</li>
 * @method SecurityAction getVerifiedBotRequestsAction() 获取友好 Bot 请求的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Allow：放行；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge。</li>
 * @method void setVerifiedBotRequestsAction(SecurityAction $VerifiedBotRequestsAction) 设置友好 Bot 请求的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Allow：放行；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge。</li>
 * @method SecurityAction getHumanRequestsAction() 获取正常 Bot 请求的执行动作。 SecurityAction 的 Name 取值支持：<li>Allow：放行。</li>
 * @method void setHumanRequestsAction(SecurityAction $HumanRequestsAction) 设置正常 Bot 请求的执行动作。 SecurityAction 的 Name 取值支持：<li>Allow：放行。</li>
 */
class BotRatings extends AbstractModel
{
    /**
     * @var SecurityAction 恶意 Bot 请求的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Allow：放行；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge。</li>
     */
    public $HighRiskBotRequestsAction;

    /**
     * @var SecurityAction 疑似 Bot 请求的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Allow：放行；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge。</li>
     */
    public $LikelyBotRequestsAction;

    /**
     * @var SecurityAction 友好 Bot 请求的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Allow：放行；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge。</li>
     */
    public $VerifiedBotRequestsAction;

    /**
     * @var SecurityAction 正常 Bot 请求的执行动作。 SecurityAction 的 Name 取值支持：<li>Allow：放行。</li>
     */
    public $HumanRequestsAction;

    /**
     * @param SecurityAction $HighRiskBotRequestsAction 恶意 Bot 请求的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Allow：放行；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge。</li>
     * @param SecurityAction $LikelyBotRequestsAction 疑似 Bot 请求的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Allow：放行；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge。</li>
     * @param SecurityAction $VerifiedBotRequestsAction 友好 Bot 请求的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Allow：放行；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge。</li>
     * @param SecurityAction $HumanRequestsAction 正常 Bot 请求的执行动作。 SecurityAction 的 Name 取值支持：<li>Allow：放行。</li>
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
        if (array_key_exists("HighRiskBotRequestsAction",$param) and $param["HighRiskBotRequestsAction"] !== null) {
            $this->HighRiskBotRequestsAction = new SecurityAction();
            $this->HighRiskBotRequestsAction->deserialize($param["HighRiskBotRequestsAction"]);
        }

        if (array_key_exists("LikelyBotRequestsAction",$param) and $param["LikelyBotRequestsAction"] !== null) {
            $this->LikelyBotRequestsAction = new SecurityAction();
            $this->LikelyBotRequestsAction->deserialize($param["LikelyBotRequestsAction"]);
        }

        if (array_key_exists("VerifiedBotRequestsAction",$param) and $param["VerifiedBotRequestsAction"] !== null) {
            $this->VerifiedBotRequestsAction = new SecurityAction();
            $this->VerifiedBotRequestsAction->deserialize($param["VerifiedBotRequestsAction"]);
        }

        if (array_key_exists("HumanRequestsAction",$param) and $param["HumanRequestsAction"] !== null) {
            $this->HumanRequestsAction = new SecurityAction();
            $this->HumanRequestsAction->deserialize($param["HumanRequestsAction"]);
        }
    }
}
