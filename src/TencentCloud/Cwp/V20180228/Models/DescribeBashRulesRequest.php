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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBashRules请求参数结构体
 *
 * @method integer getType() 获取0-系统规则; 1-用户规则
 * @method void setType(integer $Type) 设置0-系统规则; 1-用户规则
 * @method integer getLimit() 获取返回数量，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，最大值为100。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getFilters() 获取过滤条件。
<li>Name - String - 是否必填：否 - 规则名称</li>
<li>Rule - String - 是否必填：否 - 规则内容</li>
<li>Level - Int - 是否必填：否 - 威胁等级</li>
<li>White - Int - 是否必填：否 - 白名单类型</li>
<li>RuleCategory - Int - 是否必填：否 - 策略类型</li>
<li>BashAction - Int - 是否必填：否 - 操作动作</li>
<li>Status - Int - 是否必填：否 - 生效状态</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>Name - String - 是否必填：否 - 规则名称</li>
<li>Rule - String - 是否必填：否 - 规则内容</li>
<li>Level - Int - 是否必填：否 - 威胁等级</li>
<li>White - Int - 是否必填：否 - 白名单类型</li>
<li>RuleCategory - Int - 是否必填：否 - 策略类型</li>
<li>BashAction - Int - 是否必填：否 - 操作动作</li>
<li>Status - Int - 是否必填：否 - 生效状态</li>
 */
class DescribeBashRulesRequest extends AbstractModel
{
    /**
     * @var integer 0-系统规则; 1-用户规则
     */
    public $Type;

    /**
     * @var integer 返回数量，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤条件。
<li>Name - String - 是否必填：否 - 规则名称</li>
<li>Rule - String - 是否必填：否 - 规则内容</li>
<li>Level - Int - 是否必填：否 - 威胁等级</li>
<li>White - Int - 是否必填：否 - 白名单类型</li>
<li>RuleCategory - Int - 是否必填：否 - 策略类型</li>
<li>BashAction - Int - 是否必填：否 - 操作动作</li>
<li>Status - Int - 是否必填：否 - 生效状态</li>
     */
    public $Filters;

    /**
     * @param integer $Type 0-系统规则; 1-用户规则
     * @param integer $Limit 返回数量，最大值为100。
     * @param integer $Offset 偏移量，默认为0。
     * @param array $Filters 过滤条件。
<li>Name - String - 是否必填：否 - 规则名称</li>
<li>Rule - String - 是否必填：否 - 规则内容</li>
<li>Level - Int - 是否必填：否 - 威胁等级</li>
<li>White - Int - 是否必填：否 - 白名单类型</li>
<li>RuleCategory - Int - 是否必填：否 - 策略类型</li>
<li>BashAction - Int - 是否必填：否 - 操作动作</li>
<li>Status - Int - 是否必填：否 - 生效状态</li>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
