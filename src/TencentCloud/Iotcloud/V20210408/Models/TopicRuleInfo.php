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
 * 规则详细信息
 *
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method string getDescription() 获取规则描述
 * @method void setDescription(string $Description) 设置规则描述
 * @method integer getCreatedAt() 获取创建时间
 * @method void setCreatedAt(integer $CreatedAt) 设置创建时间
 * @method boolean getRuleDisabled() 获取不生效
 * @method void setRuleDisabled(boolean $RuleDisabled) 设置不生效
 * @method string getTopicPattern() 获取规则模式
 * @method void setTopicPattern(string $TopicPattern) 设置规则模式
 */
class TopicRuleInfo extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var string 规则描述
     */
    public $Description;

    /**
     * @var integer 创建时间
     */
    public $CreatedAt;

    /**
     * @var boolean 不生效
     */
    public $RuleDisabled;

    /**
     * @var string 规则模式
     */
    public $TopicPattern;

    /**
     * @param string $RuleName 规则名称
     * @param string $Description 规则描述
     * @param integer $CreatedAt 创建时间
     * @param boolean $RuleDisabled 不生效
     * @param string $TopicPattern 规则模式
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("RuleDisabled",$param) and $param["RuleDisabled"] !== null) {
            $this->RuleDisabled = $param["RuleDisabled"];
        }

        if (array_key_exists("TopicPattern",$param) and $param["TopicPattern"] !== null) {
            $this->TopicPattern = $param["TopicPattern"];
        }
    }
}
