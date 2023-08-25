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
 * DescribeDSPAAssessmentRiskDealedOverview返回参数结构体
 *
 * @method integer getTotalCount() 获取遗留待处理风险总数
 * @method void setTotalCount(integer $TotalCount) 设置遗留待处理风险总数
 * @method integer getYesterdayDealedCount() 获取昨日完成风险处置数
 * @method void setYesterdayDealedCount(integer $YesterdayDealedCount) 设置昨日完成风险处置数
 * @method float getUnDealedRiskWeekRatio() 获取遗留待处理风险数周同比
 * @method void setUnDealedRiskWeekRatio(float $UnDealedRiskWeekRatio) 设置遗留待处理风险数周同比
 * @method float getUnDealedRiskDayRatio() 获取遗留待处理风险数日环比
 * @method void setUnDealedRiskDayRatio(float $UnDealedRiskDayRatio) 设置遗留待处理风险数日环比
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDSPAAssessmentRiskDealedOverviewResponse extends AbstractModel
{
    /**
     * @var integer 遗留待处理风险总数
     */
    public $TotalCount;

    /**
     * @var integer 昨日完成风险处置数
     */
    public $YesterdayDealedCount;

    /**
     * @var float 遗留待处理风险数周同比
     */
    public $UnDealedRiskWeekRatio;

    /**
     * @var float 遗留待处理风险数日环比
     */
    public $UnDealedRiskDayRatio;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 遗留待处理风险总数
     * @param integer $YesterdayDealedCount 昨日完成风险处置数
     * @param float $UnDealedRiskWeekRatio 遗留待处理风险数周同比
     * @param float $UnDealedRiskDayRatio 遗留待处理风险数日环比
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

        if (array_key_exists("YesterdayDealedCount",$param) and $param["YesterdayDealedCount"] !== null) {
            $this->YesterdayDealedCount = $param["YesterdayDealedCount"];
        }

        if (array_key_exists("UnDealedRiskWeekRatio",$param) and $param["UnDealedRiskWeekRatio"] !== null) {
            $this->UnDealedRiskWeekRatio = $param["UnDealedRiskWeekRatio"];
        }

        if (array_key_exists("UnDealedRiskDayRatio",$param) and $param["UnDealedRiskDayRatio"] !== null) {
            $this->UnDealedRiskDayRatio = $param["UnDealedRiskDayRatio"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
