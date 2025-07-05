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
 * CreateFunctionRule请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method array getFunctionRuleConditions() 获取规则条件列表，相同触发规则的不同条件匹配项之间为或关系。
 * @method void setFunctionRuleConditions(array $FunctionRuleConditions) 设置规则条件列表，相同触发规则的不同条件匹配项之间为或关系。
 * @method string getFunctionId() 获取函数 ID，命中触发规则条件后执行的函数。
 * @method void setFunctionId(string $FunctionId) 设置函数 ID，命中触发规则条件后执行的函数。
 * @method string getRemark() 获取规则描述，最大支持 60 个字符。
 * @method void setRemark(string $Remark) 设置规则描述，最大支持 60 个字符。
 */
class CreateFunctionRuleRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var array 规则条件列表，相同触发规则的不同条件匹配项之间为或关系。
     */
    public $FunctionRuleConditions;

    /**
     * @var string 函数 ID，命中触发规则条件后执行的函数。
     */
    public $FunctionId;

    /**
     * @var string 规则描述，最大支持 60 个字符。
     */
    public $Remark;

    /**
     * @param string $ZoneId 站点 ID。
     * @param array $FunctionRuleConditions 规则条件列表，相同触发规则的不同条件匹配项之间为或关系。
     * @param string $FunctionId 函数 ID，命中触发规则条件后执行的函数。
     * @param string $Remark 规则描述，最大支持 60 个字符。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("FunctionRuleConditions",$param) and $param["FunctionRuleConditions"] !== null) {
            $this->FunctionRuleConditions = [];
            foreach ($param["FunctionRuleConditions"] as $key => $value){
                $obj = new FunctionRuleCondition();
                $obj->deserialize($value);
                array_push($this->FunctionRuleConditions, $obj);
            }
        }

        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
