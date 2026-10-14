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
 * LLM waf 自定义词库实体
 *
 * @method string getName() 获取词库名
 * @method void setName(string $Name) 设置词库名
 * @method string getDescription() 获取词库描述
 * @method void setDescription(string $Description) 设置词库描述
 * @method string getType() 获取词库类型，custom 或 builtin
 * @method void setType(string $Type) 设置词库类型，custom 或 builtin
 * @method array getKeywords() 获取关键词列表
 * @method void setKeywords(array $Keywords) 设置关键词列表
 * @method string getRuleId() 获取词库规则 id
 * @method void setRuleId(string $RuleId) 设置词库规则 id
 * @method array getReferencedRules() 获取被引用的规则 id 列表
 * @method void setReferencedRules(array $ReferencedRules) 设置被引用的规则 id 列表
 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 * @method string getCategory() 获取词库类别：black-黑库(默认)，white-白库；空值按黑库处理
 * @method void setCategory(string $Category) 设置词库类别：black-黑库(默认)，white-白库；空值按黑库处理
 */
class LLMKeywordLibrary extends AbstractModel
{
    /**
     * @var string 词库名
     */
    public $Name;

    /**
     * @var string 词库描述
     */
    public $Description;

    /**
     * @var string 词库类型，custom 或 builtin
     */
    public $Type;

    /**
     * @var array 关键词列表
     */
    public $Keywords;

    /**
     * @var string 词库规则 id
     */
    public $RuleId;

    /**
     * @var array 被引用的规则 id 列表
     */
    public $ReferencedRules;

    /**
     * @var integer 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 词库类别：black-黑库(默认)，white-白库；空值按黑库处理
     */
    public $Category;

    /**
     * @param string $Name 词库名
     * @param string $Description 词库描述
     * @param string $Type 词库类型，custom 或 builtin
     * @param array $Keywords 关键词列表
     * @param string $RuleId 词库规则 id
     * @param array $ReferencedRules 被引用的规则 id 列表
     * @param integer $UpdateTime 更新时间
     * @param string $Category 词库类别：black-黑库(默认)，white-白库；空值按黑库处理
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("ReferencedRules",$param) and $param["ReferencedRules"] !== null) {
            $this->ReferencedRules = $param["ReferencedRules"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
