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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeK8sApiAbnormalRuleScopeList请求参数结构体
 *
 * @method string getRuleID() 获取规则ID
 * @method void setRuleID(string $RuleID) 设置规则ID
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取需要返回的数量，默认为10，最大值为100
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为10，最大值为100
 * @method array getFilters() 获取过滤条件。
<li>Action - string -是否必填: 否 - 执行动作</li>
<li>RiskLevel - string  - 是否必填: 否 -威胁等级筛选</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>Action - string -是否必填: 否 - 执行动作</li>
<li>RiskLevel - string  - 是否必填: 否 -威胁等级筛选</li>
 */
class DescribeK8sApiAbnormalRuleScopeListRequest extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $RuleID;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 需要返回的数量，默认为10，最大值为100
     */
    public $Limit;

    /**
     * @var array 过滤条件。
<li>Action - string -是否必填: 否 - 执行动作</li>
<li>RiskLevel - string  - 是否必填: 否 -威胁等级筛选</li>
     */
    public $Filters;

    /**
     * @param string $RuleID 规则ID
     * @param integer $Offset 偏移量
     * @param integer $Limit 需要返回的数量，默认为10，最大值为100
     * @param array $Filters 过滤条件。
<li>Action - string -是否必填: 否 - 执行动作</li>
<li>RiskLevel - string  - 是否必填: 否 -威胁等级筛选</li>
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RunTimeFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
