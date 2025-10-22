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
 * Bot 规则项的具体配置，用于覆盖上层的默认配置。
 *
 * @method array getIds() 获取Bot 规则组下的具体项，用于改写此单条规则项配置的内容，Ids 所对应的具体信息请参考 DescribeBotManagedRules 接口返回的信息。
 * @method void setIds(array $Ids) 设置Bot 规则组下的具体项，用于改写此单条规则项配置的内容，Ids 所对应的具体信息请参考 DescribeBotManagedRules 接口返回的信息。
 * @method SecurityAction getAction() 获取Ids 中指定 Bot 规则项的处置动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Disabled：未启用，不启用指定规则；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Allow：放行（仅限Bot基础特征管理）。</li>

 * @method void setAction(SecurityAction $Action) 设置Ids 中指定 Bot 规则项的处置动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Disabled：未启用，不启用指定规则；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Allow：放行（仅限Bot基础特征管理）。</li>
 */
class BotManagementActionOverrides extends AbstractModel
{
    /**
     * @var array Bot 规则组下的具体项，用于改写此单条规则项配置的内容，Ids 所对应的具体信息请参考 DescribeBotManagedRules 接口返回的信息。
     */
    public $Ids;

    /**
     * @var SecurityAction Ids 中指定 Bot 规则项的处置动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Disabled：未启用，不启用指定规则；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Allow：放行（仅限Bot基础特征管理）。</li>

     */
    public $Action;

    /**
     * @param array $Ids Bot 规则组下的具体项，用于改写此单条规则项配置的内容，Ids 所对应的具体信息请参考 DescribeBotManagedRules 接口返回的信息。
     * @param SecurityAction $Action Ids 中指定 Bot 规则项的处置动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Disabled：未启用，不启用指定规则；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Allow：放行（仅限Bot基础特征管理）。</li>
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new SecurityAction();
            $this->Action->deserialize($param["Action"]);
        }
    }
}
