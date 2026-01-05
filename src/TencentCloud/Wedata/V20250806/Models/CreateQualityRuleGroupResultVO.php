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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控任务
 *
 * @method array getRuleGroupResultList() 获取任务创建结构
 * @method void setRuleGroupResultList(array $RuleGroupResultList) 设置任务创建结构
 */
class CreateQualityRuleGroupResultVO extends AbstractModel
{
    /**
     * @var array 任务创建结构
     */
    public $RuleGroupResultList;

    /**
     * @param array $RuleGroupResultList 任务创建结构
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
        if (array_key_exists("RuleGroupResultList",$param) and $param["RuleGroupResultList"] !== null) {
            $this->RuleGroupResultList = [];
            foreach ($param["RuleGroupResultList"] as $key => $value){
                $obj = new QualityRuleGroupResult();
                $obj->deserialize($value);
                array_push($this->RuleGroupResultList, $obj);
            }
        }
    }
}
