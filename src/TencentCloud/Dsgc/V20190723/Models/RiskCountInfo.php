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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 待处理风险项数量信息
 *
 * @method string getRiskLevel() 获取风险等级
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级
 * @method integer getCount() 获取该等级风险项数量
 * @method void setCount(integer $Count) 设置该等级风险项数量
 * @method string getRiskLevelName() 获取风险等级名称
 * @method void setRiskLevelName(string $RiskLevelName) 设置风险等级名称
 */
class RiskCountInfo extends AbstractModel
{
    /**
     * @var string 风险等级
     */
    public $RiskLevel;

    /**
     * @var integer 该等级风险项数量
     */
    public $Count;

    /**
     * @var string 风险等级名称
     */
    public $RiskLevelName;

    /**
     * @param string $RiskLevel 风险等级
     * @param integer $Count 该等级风险项数量
     * @param string $RiskLevelName 风险等级名称
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
        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("RiskLevelName",$param) and $param["RiskLevelName"] !== null) {
            $this->RiskLevelName = $param["RiskLevelName"];
        }
    }
}
