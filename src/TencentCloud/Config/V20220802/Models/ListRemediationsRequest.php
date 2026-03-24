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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListRemediations请求参数结构体
 *
 * @method integer getLimit() 获取分页条数。默认20， 取值1~200
 * @method void setLimit(integer $Limit) 设置分页条数。默认20， 取值1~200
 * @method array getRuleIds() 获取规则ID
 * @method void setRuleIds(array $RuleIds) 设置规则ID
 */
class ListRemediationsRequest extends AbstractModel
{
    /**
     * @var integer 分页条数。默认20， 取值1~200
     */
    public $Limit;

    /**
     * @var array 规则ID
     */
    public $RuleIds;

    /**
     * @param integer $Limit 分页条数。默认20， 取值1~200
     * @param array $RuleIds 规则ID
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

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }
    }
}
