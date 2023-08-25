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
 * DescribeDSPAAssessmentRiskOverview返回参数结构体
 *
 * @method integer getTotalCount() 获取风险总数
 * @method void setTotalCount(integer $TotalCount) 设置风险总数
 * @method integer getHighRiskCount() 获取高危风险数
 * @method void setHighRiskCount(integer $HighRiskCount) 设置高危风险数
 * @method float getHighRiskWeekRatio() 获取周同比
 * @method void setHighRiskWeekRatio(float $HighRiskWeekRatio) 设置周同比
 * @method float getHighRiskDayRatio() 获取高危风险数日环比
 * @method void setHighRiskDayRatio(float $HighRiskDayRatio) 设置高危风险数日环比
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDSPAAssessmentRiskOverviewResponse extends AbstractModel
{
    /**
     * @var integer 风险总数
     */
    public $TotalCount;

    /**
     * @var integer 高危风险数
     */
    public $HighRiskCount;

    /**
     * @var float 周同比
     */
    public $HighRiskWeekRatio;

    /**
     * @var float 高危风险数日环比
     */
    public $HighRiskDayRatio;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 风险总数
     * @param integer $HighRiskCount 高危风险数
     * @param float $HighRiskWeekRatio 周同比
     * @param float $HighRiskDayRatio 高危风险数日环比
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("HighRiskCount",$param) and $param["HighRiskCount"] !== null) {
            $this->HighRiskCount = $param["HighRiskCount"];
        }

        if (array_key_exists("HighRiskWeekRatio",$param) and $param["HighRiskWeekRatio"] !== null) {
            $this->HighRiskWeekRatio = $param["HighRiskWeekRatio"];
        }

        if (array_key_exists("HighRiskDayRatio",$param) and $param["HighRiskDayRatio"] !== null) {
            $this->HighRiskDayRatio = $param["HighRiskDayRatio"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
