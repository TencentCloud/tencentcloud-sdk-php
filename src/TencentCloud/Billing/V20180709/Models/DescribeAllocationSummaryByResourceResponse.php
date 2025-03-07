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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAllocationSummaryByResource返回参数结构体
 *
 * @method integer getRecordNum() 获取总条数

 * @method void setRecordNum(integer $RecordNum) 设置总条数

 * @method AllocationOverviewTotal getTotal() 获取分账账单概览金额汇总

 * @method void setTotal(AllocationOverviewTotal $Total) 设置分账账单概览金额汇总

 * @method array getDetail() 获取分账账单按资源汇总明细

 * @method void setDetail(array $Detail) 设置分账账单按资源汇总明细

 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAllocationSummaryByResourceResponse extends AbstractModel
{
    /**
     * @var integer 总条数

     */
    public $RecordNum;

    /**
     * @var AllocationOverviewTotal 分账账单概览金额汇总

     */
    public $Total;

    /**
     * @var array 分账账单按资源汇总明细

     */
    public $Detail;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $RecordNum 总条数

     * @param AllocationOverviewTotal $Total 分账账单概览金额汇总

     * @param array $Detail 分账账单按资源汇总明细

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
        if (array_key_exists("RecordNum",$param) and $param["RecordNum"] !== null) {
            $this->RecordNum = $param["RecordNum"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = new AllocationOverviewTotal();
            $this->Total->deserialize($param["Total"]);
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = [];
            foreach ($param["Detail"] as $key => $value){
                $obj = new AllocationSummaryByResource();
                $obj->deserialize($value);
                array_push($this->Detail, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
