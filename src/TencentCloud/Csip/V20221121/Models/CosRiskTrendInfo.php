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
 * 对象存储风险趋势图
 *
 * @method string getCurrentDateStr() 获取当前日期
 * @method void setCurrentDateStr(string $CurrentDateStr) 设置当前日期
 * @method array getRiskDataSet() 获取风险数据信息
 * @method void setRiskDataSet(array $RiskDataSet) 设置风险数据信息
 */
class CosRiskTrendInfo extends AbstractModel
{
    /**
     * @var string 当前日期
     */
    public $CurrentDateStr;

    /**
     * @var array 风险数据信息
     */
    public $RiskDataSet;

    /**
     * @param string $CurrentDateStr 当前日期
     * @param array $RiskDataSet 风险数据信息
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
        if (array_key_exists("CurrentDateStr",$param) and $param["CurrentDateStr"] !== null) {
            $this->CurrentDateStr = $param["CurrentDateStr"];
        }

        if (array_key_exists("RiskDataSet",$param) and $param["RiskDataSet"] !== null) {
            $this->RiskDataSet = [];
            foreach ($param["RiskDataSet"] as $key => $value){
                $obj = new CosRiskInfo();
                $obj->deserialize($value);
                array_push($this->RiskDataSet, $obj);
            }
        }
    }
}
