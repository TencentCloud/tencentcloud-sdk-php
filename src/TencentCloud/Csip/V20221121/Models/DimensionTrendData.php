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
 * 维度趋势数据
 *
 * @method string getDimensionId() 获取维度ID
枚举值：
risk_governance：风险治理
threat_detection：威胁检测
 * @method void setDimensionId(string $DimensionId) 设置维度ID
枚举值：
risk_governance：风险治理
threat_detection：威胁检测
 * @method array getDataPoints() 获取每日数据点
 * @method void setDataPoints(array $DataPoints) 设置每日数据点
 */
class DimensionTrendData extends AbstractModel
{
    /**
     * @var string 维度ID
枚举值：
risk_governance：风险治理
threat_detection：威胁检测
     */
    public $DimensionId;

    /**
     * @var array 每日数据点
     */
    public $DataPoints;

    /**
     * @param string $DimensionId 维度ID
枚举值：
risk_governance：风险治理
threat_detection：威胁检测
     * @param array $DataPoints 每日数据点
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
        if (array_key_exists("DimensionId",$param) and $param["DimensionId"] !== null) {
            $this->DimensionId = $param["DimensionId"];
        }

        if (array_key_exists("DataPoints",$param) and $param["DataPoints"] !== null) {
            $this->DataPoints = [];
            foreach ($param["DataPoints"] as $key => $value){
                $obj = new TrendDataPoint();
                $obj->deserialize($value);
                array_push($this->DataPoints, $obj);
            }
        }
    }
}
