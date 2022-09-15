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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReplaceTopicRule请求参数结构体
 *
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method TopicRulePayload getTopicRulePayload() 获取替换的规则包体
 * @method void setTopicRulePayload(TopicRulePayload $TopicRulePayload) 设置替换的规则包体
 */
class ReplaceTopicRuleRequest extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var TopicRulePayload 替换的规则包体
     */
    public $TopicRulePayload;

    /**
     * @param string $RuleName 规则名称
     * @param TopicRulePayload $TopicRulePayload 替换的规则包体
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("TopicRulePayload",$param) and $param["TopicRulePayload"] !== null) {
            $this->TopicRulePayload = new TopicRulePayload();
            $this->TopicRulePayload->deserialize($param["TopicRulePayload"]);
        }
    }
}
