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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPADiscoveryRules请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取返回上限，默认值10， 最大值10000。
 * @method void setLimit(integer $Limit) 设置返回上限，默认值10， 最大值10000。
 * @method integer getRuleId() 获取规则ID
 * @method void setRuleId(integer $RuleId) 设置规则ID
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method boolean getFilterRuleSource() 获取是否需要过滤别名
 * @method void setFilterRuleSource(boolean $FilterRuleSource) 设置是否需要过滤别名
 */
class DescribeDSPADiscoveryRulesRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID
     */
    public $DspaId;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 返回上限，默认值10， 最大值10000。
     */
    public $Limit;

    /**
     * @var integer 规则ID
     */
    public $RuleId;

    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var boolean 是否需要过滤别名
     */
    public $FilterRuleSource;

    /**
     * @param string $DspaId DSPA实例ID
     * @param integer $Offset 偏移量
     * @param integer $Limit 返回上限，默认值10， 最大值10000。
     * @param integer $RuleId 规则ID
     * @param string $Name 规则名称
     * @param boolean $FilterRuleSource 是否需要过滤别名
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("FilterRuleSource",$param) and $param["FilterRuleSource"] !== null) {
            $this->FilterRuleSource = $param["FilterRuleSource"];
        }
    }
}
