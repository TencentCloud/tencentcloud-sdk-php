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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扫描结果详情（按子引擎分组）
 *
 * @method string getScanType() 获取<p>子引擎类型：AI（AI 分析）/ STATIC（静态分析）</p>
 * @method void setScanType(string $ScanType) 设置<p>子引擎类型：AI（AI 分析）/ STATIC（静态分析）</p>
 * @method array getRuleList() 获取<p>该引擎命中的规则列表</p>
 * @method void setRuleList(array $RuleList) 设置<p>该引擎命中的规则列表</p>
 */
class SkillScanItem extends AbstractModel
{
    /**
     * @var string <p>子引擎类型：AI（AI 分析）/ STATIC（静态分析）</p>
     */
    public $ScanType;

    /**
     * @var array <p>该引擎命中的规则列表</p>
     */
    public $RuleList;

    /**
     * @param string $ScanType <p>子引擎类型：AI（AI 分析）/ STATIC（静态分析）</p>
     * @param array $RuleList <p>该引擎命中的规则列表</p>
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
