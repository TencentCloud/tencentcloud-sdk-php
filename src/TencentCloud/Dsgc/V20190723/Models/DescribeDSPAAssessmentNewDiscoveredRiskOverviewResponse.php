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
 * DescribeDSPAAssessmentNewDiscoveredRiskOverview返回参数结构体
 *
 * @method integer getNewDiscoveredRiskCount() 获取待处理的风险数
 * @method void setNewDiscoveredRiskCount(integer $NewDiscoveredRiskCount) 设置待处理的风险数
 * @method integer getAffectedAssetCount() 获取受影响的资产数
 * @method void setAffectedAssetCount(integer $AffectedAssetCount) 设置受影响的资产数
 * @method float getWeekRatio() 获取周同比
 * @method void setWeekRatio(float $WeekRatio) 设置周同比
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDSPAAssessmentNewDiscoveredRiskOverviewResponse extends AbstractModel
{
    /**
     * @var integer 待处理的风险数
     */
    public $NewDiscoveredRiskCount;

    /**
     * @var integer 受影响的资产数
     */
    public $AffectedAssetCount;

    /**
     * @var float 周同比
     */
    public $WeekRatio;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $NewDiscoveredRiskCount 待处理的风险数
     * @param integer $AffectedAssetCount 受影响的资产数
     * @param float $WeekRatio 周同比
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
        if (array_key_exists("NewDiscoveredRiskCount",$param) and $param["NewDiscoveredRiskCount"] !== null) {
            $this->NewDiscoveredRiskCount = $param["NewDiscoveredRiskCount"];
        }

        if (array_key_exists("AffectedAssetCount",$param) and $param["AffectedAssetCount"] !== null) {
            $this->AffectedAssetCount = $param["AffectedAssetCount"];
        }

        if (array_key_exists("WeekRatio",$param) and $param["WeekRatio"] !== null) {
            $this->WeekRatio = $param["WeekRatio"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
