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
namespace TencentCloud\Svp\V20240125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSavingPlanCoverage返回参数结构体
 *
 * @method array getDetailSet() 获取节省计划覆盖率明细数据
 * @method void setDetailSet(array $DetailSet) 设置节省计划覆盖率明细数据
 * @method array getRateSet() 获取节省计划覆盖率聚合数据
 * @method void setRateSet(array $RateSet) 设置节省计划覆盖率聚合数据
 * @method integer getTotalCount() 获取查询命中的节省计划覆盖率明细数据总条数
 * @method void setTotalCount(integer $TotalCount) 设置查询命中的节省计划覆盖率明细数据总条数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSavingPlanCoverageResponse extends AbstractModel
{
    /**
     * @var array 节省计划覆盖率明细数据
     */
    public $DetailSet;

    /**
     * @var array 节省计划覆盖率聚合数据
     */
    public $RateSet;

    /**
     * @var integer 查询命中的节省计划覆盖率明细数据总条数
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DetailSet 节省计划覆盖率明细数据
     * @param array $RateSet 节省计划覆盖率聚合数据
     * @param integer $TotalCount 查询命中的节省计划覆盖率明细数据总条数
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DetailSet",$param) and $param["DetailSet"] !== null) {
            $this->DetailSet = [];
            foreach ($param["DetailSet"] as $key => $value){
                $obj = new SavingPlanCoverageDetail();
                $obj->deserialize($value);
                array_push($this->DetailSet, $obj);
            }
        }

        if (array_key_exists("RateSet",$param) and $param["RateSet"] !== null) {
            $this->RateSet = [];
            foreach ($param["RateSet"] as $key => $value){
                $obj = new SavingPlanCoverageRate();
                $obj->deserialize($value);
                array_push($this->RateSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
