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
namespace TencentCloud\Hasim\V20210716\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRules请求参数结构体
 *
 * @method integer getRuleID() 获取自动化规则ID
 * @method void setRuleID(integer $RuleID) 设置自动化规则ID
 * @method array getRuleIDs() 获取自动化规则ID
 * @method void setRuleIDs(array $RuleIDs) 设置自动化规则ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getType() 获取类型
 * @method void setType(integer $Type) 设置类型
 * @method integer getIsActive() 获取是否激活
 * @method void setIsActive(integer $IsActive) 设置是否激活
 * @method integer getLimit() 获取翻页大小
 * @method void setLimit(integer $Limit) 设置翻页大小
 * @method integer getOffset() 获取翻页偏移
 * @method void setOffset(integer $Offset) 设置翻页偏移
 */
class DescribeRulesRequest extends AbstractModel
{
    /**
     * @var integer 自动化规则ID
     */
    public $RuleID;

    /**
     * @var array 自动化规则ID
     */
    public $RuleIDs;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 类型
     */
    public $Type;

    /**
     * @var integer 是否激活
     */
    public $IsActive;

    /**
     * @var integer 翻页大小
     */
    public $Limit;

    /**
     * @var integer 翻页偏移
     */
    public $Offset;

    /**
     * @param integer $RuleID 自动化规则ID
     * @param array $RuleIDs 自动化规则ID
     * @param string $Name 名称
     * @param integer $Type 类型
     * @param integer $IsActive 是否激活
     * @param integer $Limit 翻页大小
     * @param integer $Offset 翻页偏移
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RuleIDs",$param) and $param["RuleIDs"] !== null) {
            $this->RuleIDs = $param["RuleIDs"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IsActive",$param) and $param["IsActive"] !== null) {
            $this->IsActive = $param["IsActive"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
