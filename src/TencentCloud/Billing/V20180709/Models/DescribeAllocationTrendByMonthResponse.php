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
 * DescribeAllocationTrendByMonth返回参数结构体
 *
 * @method AllocationBillTrendDetail getCurrent() 获取当月费用信息
 * @method void setCurrent(AllocationBillTrendDetail $Current) 设置当月费用信息
 * @method array getPrevious() 获取之前月份费用信息
 * @method void setPrevious(array $Previous) 设置之前月份费用信息
 * @method AllocationStat getStat() 获取费用统计信息
 * @method void setStat(AllocationStat $Stat) 设置费用统计信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAllocationTrendByMonthResponse extends AbstractModel
{
    /**
     * @var AllocationBillTrendDetail 当月费用信息
     */
    public $Current;

    /**
     * @var array 之前月份费用信息
     */
    public $Previous;

    /**
     * @var AllocationStat 费用统计信息
     */
    public $Stat;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param AllocationBillTrendDetail $Current 当月费用信息
     * @param array $Previous 之前月份费用信息
     * @param AllocationStat $Stat 费用统计信息
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
        if (array_key_exists("Current",$param) and $param["Current"] !== null) {
            $this->Current = new AllocationBillTrendDetail();
            $this->Current->deserialize($param["Current"]);
        }

        if (array_key_exists("Previous",$param) and $param["Previous"] !== null) {
            $this->Previous = [];
            foreach ($param["Previous"] as $key => $value){
                $obj = new AllocationBillTrendDetail();
                $obj->deserialize($value);
                array_push($this->Previous, $obj);
            }
        }

        if (array_key_exists("Stat",$param) and $param["Stat"] !== null) {
            $this->Stat = new AllocationStat();
            $this->Stat->deserialize($param["Stat"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
