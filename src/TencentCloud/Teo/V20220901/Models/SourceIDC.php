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
 * IDC 规则配置的具体内容。
 *
 * @method SecurityAction getBaseAction() 获取来自指定 IDC 请求的处置方式。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Disabled：未启用，不启用指定规则；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Allow：放行（待废弃）。</li>
 * @method void setBaseAction(SecurityAction $BaseAction) 设置来自指定 IDC 请求的处置方式。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Disabled：未启用，不启用指定规则；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Allow：放行（待废弃）。</li>
 * @method array getBotManagementActionOverrides() 获取指定 IDC 请求的处置方式。
 * @method void setBotManagementActionOverrides(array $BotManagementActionOverrides) 设置指定 IDC 请求的处置方式。
 */
class SourceIDC extends AbstractModel
{
    /**
     * @var SecurityAction 来自指定 IDC 请求的处置方式。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Disabled：未启用，不启用指定规则；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Allow：放行（待废弃）。</li>
     */
    public $BaseAction;

    /**
     * @var array 指定 IDC 请求的处置方式。
     */
    public $BotManagementActionOverrides;

    /**
     * @param SecurityAction $BaseAction 来自指定 IDC 请求的处置方式。 SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>Disabled：未启用，不启用指定规则；</li><li>Challenge：挑战，其中 ChallengeActionParameters 中的 ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Allow：放行（待废弃）。</li>
     * @param array $BotManagementActionOverrides 指定 IDC 请求的处置方式。
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
        if (array_key_exists("BaseAction",$param) and $param["BaseAction"] !== null) {
            $this->BaseAction = new SecurityAction();
            $this->BaseAction->deserialize($param["BaseAction"]);
        }

        if (array_key_exists("BotManagementActionOverrides",$param) and $param["BotManagementActionOverrides"] !== null) {
            $this->BotManagementActionOverrides = [];
            foreach ($param["BotManagementActionOverrides"] as $key => $value){
                $obj = new BotManagementActionOverrides();
                $obj->deserialize($value);
                array_push($this->BotManagementActionOverrides, $obj);
            }
        }
    }
}
