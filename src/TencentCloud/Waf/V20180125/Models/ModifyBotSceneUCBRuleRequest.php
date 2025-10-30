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
 * ModifyBotSceneUCBRule请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getSceneId() 获取1.BOT全局白名单处调用时，传"global";2.BOT场景配置时，传具体的场景ID
 * @method void setSceneId(string $SceneId) 设置1.BOT全局白名单处调用时，传"global";2.BOT场景配置时，传具体的场景ID
 * @method InOutputBotUCBRule getRule() 获取规则内容, 增加编码SceneId信息,1.BOT全局白名单处调用时，SceneId为"global", RuleType传10, Action为"permit";2.BOT场景配置时，SceneId为场景ID
 * @method void setRule(InOutputBotUCBRule $Rule) 设置规则内容, 增加编码SceneId信息,1.BOT全局白名单处调用时，SceneId为"global", RuleType传10, Action为"permit";2.BOT场景配置时，SceneId为场景ID
 * @method array getBatchRules() 获取530改批量操作
 * @method void setBatchRules(array $BatchRules) 设置530改批量操作
 */
class ModifyBotSceneUCBRuleRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 1.BOT全局白名单处调用时，传"global";2.BOT场景配置时，传具体的场景ID
     */
    public $SceneId;

    /**
     * @var InOutputBotUCBRule 规则内容, 增加编码SceneId信息,1.BOT全局白名单处调用时，SceneId为"global", RuleType传10, Action为"permit";2.BOT场景配置时，SceneId为场景ID
     */
    public $Rule;

    /**
     * @var array 530改批量操作
     */
    public $BatchRules;

    /**
     * @param string $Domain 域名
     * @param string $SceneId 1.BOT全局白名单处调用时，传"global";2.BOT场景配置时，传具体的场景ID
     * @param InOutputBotUCBRule $Rule 规则内容, 增加编码SceneId信息,1.BOT全局白名单处调用时，SceneId为"global", RuleType传10, Action为"permit";2.BOT场景配置时，SceneId为场景ID
     * @param array $BatchRules 530改批量操作
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

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new InOutputBotUCBRule();
            $this->Rule->deserialize($param["Rule"]);
        }

        if (array_key_exists("BatchRules",$param) and $param["BatchRules"] !== null) {
            $this->BatchRules = [];
            foreach ($param["BatchRules"] as $key => $value){
                $obj = new InOutputBotUCBRule();
                $obj->deserialize($value);
                array_push($this->BatchRules, $obj);
            }
        }
    }
}
