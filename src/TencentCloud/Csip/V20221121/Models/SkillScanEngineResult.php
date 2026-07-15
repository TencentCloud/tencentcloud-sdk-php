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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子引擎扫描结果
 *
 * @method string getScanType() 获取子引擎类型
枚举值：
AI：AI 引擎
STATIC：静态分析引擎
 * @method void setScanType(string $ScanType) 设置子引擎类型
枚举值：
AI：AI 引擎
STATIC：静态分析引擎
 * @method array getRuleList() 获取命中规则列表
 * @method void setRuleList(array $RuleList) 设置命中规则列表
 */
class SkillScanEngineResult extends AbstractModel
{
    /**
     * @var string 子引擎类型
枚举值：
AI：AI 引擎
STATIC：静态分析引擎
     */
    public $ScanType;

    /**
     * @var array 命中规则列表
     */
    public $RuleList;

    /**
     * @param string $ScanType 子引擎类型
枚举值：
AI：AI 引擎
STATIC：静态分析引擎
     * @param array $RuleList 命中规则列表
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
        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("RuleList",$param) and $param["RuleList"] !== null) {
            $this->RuleList = [];
            foreach ($param["RuleList"] as $key => $value){
                $obj = new SkillScanRuleHit();
                $obj->deserialize($value);
                array_push($this->RuleList, $obj);
            }
        }
    }
}
