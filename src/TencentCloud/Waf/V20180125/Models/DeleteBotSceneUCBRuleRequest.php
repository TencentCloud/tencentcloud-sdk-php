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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteBotSceneUCBRule请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getRuleId() 获取自定义规则ID
 * @method void setRuleId(string $RuleId) 设置自定义规则ID
 * @method string getSceneId() 获取1.BOT全局白名单处调用时，传"global";2.BOT场景配置时，传具体的场景ID
 * @method void setSceneId(string $SceneId) 设置1.BOT全局白名单处调用时，传"global";2.BOT场景配置时，传具体的场景ID
 */
class DeleteBotSceneUCBRuleRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 自定义规则ID
     */
    public $RuleId;

    /**
     * @var string 1.BOT全局白名单处调用时，传"global";2.BOT场景配置时，传具体的场景ID
     */
    public $SceneId;

    /**
     * @param string $Domain 域名
     * @param string $RuleId 自定义规则ID
     * @param string $SceneId 1.BOT全局白名单处调用时，传"global";2.BOT场景配置时，传具体的场景ID
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }
    }
}
