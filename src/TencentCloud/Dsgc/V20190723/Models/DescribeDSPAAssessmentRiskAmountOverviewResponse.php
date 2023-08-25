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
 * DescribeDSPAAssessmentRiskAmountOverview返回参数结构体
 *
 * @method integer getTotalRiskCount() 获取风险总数
 * @method void setTotalRiskCount(integer $TotalRiskCount) 设置风险总数
 * @method integer getTotalAffectedAssetCount() 获取受影响的资产数
 * @method void setTotalAffectedAssetCount(integer $TotalAffectedAssetCount) 设置受影响的资产数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDSPAAssessmentRiskAmountOverviewResponse extends AbstractModel
{
    /**
     * @var integer 风险总数
     */
    public $TotalRiskCount;

    /**
     * @var integer 受影响的资产数
     */
    public $TotalAffectedAssetCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalRiskCount 风险总数
     * @param integer $TotalAffectedAssetCount 受影响的资产数
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
        if (array_key_exists("TotalRiskCount",$param) and $param["TotalRiskCount"] !== null) {
            $this->TotalRiskCount = $param["TotalRiskCount"];
        }

        if (array_key_exists("TotalAffectedAssetCount",$param) and $param["TotalAffectedAssetCount"] !== null) {
            $this->TotalAffectedAssetCount = $param["TotalAffectedAssetCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
