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
 * DescribeBashPolicies请求参数结构体
 *
 * @method integer getLimit() 获取返回数量，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，最大值为100。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getFilters() 获取过滤条件。
<li>Name - String - 是否必填：否 - 规则名称</li>
<li>Rule - String - 是否必填：否 - 规则内容</li>
<li>Level - Int - 是否必填：否 - 威胁等级</li>
<li>White - Int - 是否必填：否 - 白名单类型</li>
<li>Category - Int - 是否必填：否 - 策略类型</li>
<li>BashAction - Int - 是否必填：否 - 操作动作</li>
<li>Enable - Int - 是否必填：否 - 生效状态</li>
<li>Id - Int - 是否必填：否 - 策略ID</li>
<li>PolicyId - Int - 是否必填：否 - 策略ID</li>
<li>RuleId - Int - 是否必填：否 - 策略ID</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>Name - String - 是否必填：否 - 规则名称</li>
<li>Rule - String - 是否必填：否 - 规则内容</li>
<li>Level - Int - 是否必填：否 - 威胁等级</li>
<li>White - Int - 是否必填：否 - 白名单类型</li>
<li>Category - Int - 是否必填：否 - 策略类型</li>
<li>BashAction - Int - 是否必填：否 - 操作动作</li>
<li>Enable - Int - 是否必填：否 - 生效状态</li>
<li>Id - Int - 是否必填：否 - 策略ID</li>
<li>PolicyId - Int - 是否必填：否 - 策略ID</li>
<li>RuleId - Int - 是否必填：否 - 策略ID</li>
 */
class DescribeBashPoliciesRequest extends AbstractModel
{
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
<li>Category - Int - 是否必填：否 - 策略类型</li>
<li>BashAction - Int - 是否必填：否 - 操作动作</li>
<li>Enable - Int - 是否必填：否 - 生效状态</li>
<li>Id - Int - 是否必填：否 - 策略ID</li>
<li>PolicyId - Int - 是否必填：否 - 策略ID</li>
<li>RuleId - Int - 是否必填：否 - 策略ID</li>
     */
    public $Filters;

    /**
     * @param integer $Limit 返回数量，最大值为100。
     * @param integer $Offset 偏移量，默认为0。
     * @param array $Filters 过滤条件。
<li>Name - String - 是否必填：否 - 规则名称</li>
<li>Rule - String - 是否必填：否 - 规则内容</li>
<li>Level - Int - 是否必填：否 - 威胁等级</li>
<li>White - Int - 是否必填：否 - 白名单类型</li>
<li>Category - Int - 是否必填：否 - 策略类型</li>
<li>BashAction - Int - 是否必填：否 - 操作动作</li>
<li>Enable - Int - 是否必填：否 - 生效状态</li>
<li>Id - Int - 是否必填：否 - 策略ID</li>
<li>PolicyId - Int - 是否必填：否 - 策略ID</li>
<li>RuleId - Int - 是否必填：否 - 策略ID</li>
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
