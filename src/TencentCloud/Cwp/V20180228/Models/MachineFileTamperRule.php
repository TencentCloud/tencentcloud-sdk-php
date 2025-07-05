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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询主机相关核心文件监控规则详情
 *
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method integer getRuleCategory() 获取规则类型 0 ：系统规则  1：用户规则
 * @method void setRuleCategory(integer $RuleCategory) 设置规则类型 0 ：系统规则  1：用户规则
 * @method array getRule() 获取规则
 * @method void setRule(array $Rule) 设置规则
 * @method integer getId() 获取唯一id
 * @method void setId(integer $Id) 设置唯一id
 */
class MachineFileTamperRule extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var integer 规则类型 0 ：系统规则  1：用户规则
     */
    public $RuleCategory;

    /**
     * @var array 规则
     */
    public $Rule;

    /**
     * @var integer 唯一id
     */
    public $Id;

    /**
     * @param string $Name 规则名称
     * @param integer $RuleCategory 规则类型 0 ：系统规则  1：用户规则
     * @param array $Rule 规则
     * @param integer $Id 唯一id
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

        if (array_key_exists("RuleCategory",$param) and $param["RuleCategory"] !== null) {
            $this->RuleCategory = $param["RuleCategory"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = [];
            foreach ($param["Rule"] as $key => $value){
                $obj = new FileTamperRule();
                $obj->deserialize($value);
                array_push($this->Rule, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
