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
 * AddVulIgnoreRule请求参数结构体
 *
 * @method array getRuleDetailList() 获取忽略规则集合
 * @method void setRuleDetailList(array $RuleDetailList) 设置忽略规则集合
 */
class AddVulIgnoreRuleRequest extends AbstractModel
{
    /**
     * @var array 忽略规则集合
     */
    public $RuleDetailList;

    /**
     * @param array $RuleDetailList 忽略规则集合
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
        if (array_key_exists("RuleDetailList",$param) and $param["RuleDetailList"] !== null) {
            $this->RuleDetailList = [];
            foreach ($param["RuleDetailList"] as $key => $value){
                $obj = new VulIgnoreRule();
                $obj->deserialize($value);
                array_push($this->RuleDetailList, $obj);
            }
        }
    }
}
