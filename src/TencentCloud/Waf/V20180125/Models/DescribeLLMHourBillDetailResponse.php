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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLLMHourBillDetail返回参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getDate() 获取查询日期，归一化为YYYY-MM-DD格式
 * @method void setDate(string $Date) 设置查询日期，归一化为YYYY-MM-DD格式
 * @method string getEstimatedTotalFee() 获取当日账单预估总额（元，扣减免费额度后的净费用）
 * @method void setEstimatedTotalFee(string $EstimatedTotalFee) 设置当日账单预估总额（元，扣减免费额度后的净费用）
 * @method LLMBillItemFee getItemFees() 获取当日按计费项拆分的费用
 * @method void setItemFees(LLMBillItemFee $ItemFees) 设置当日按计费项拆分的费用
 * @method array getHourlyTrend() 获取24小时账单趋势，固定24条，无数据补0
 * @method void setHourlyTrend(array $HourlyTrend) 设置24小时账单趋势，固定24条，无数据补0
 * @method array getHourlyDetail() 获取24小时账单明细，固定24条，无数据补0
 * @method void setHourlyDetail(array $HourlyDetail) 设置24小时账单明细，固定24条，无数据补0
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLLMHourBillDetailResponse extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 查询日期，归一化为YYYY-MM-DD格式
     */
    public $Date;

    /**
     * @var string 当日账单预估总额（元，扣减免费额度后的净费用）
     */
    public $EstimatedTotalFee;

    /**
     * @var LLMBillItemFee 当日按计费项拆分的费用
     */
    public $ItemFees;

    /**
     * @var array 24小时账单趋势，固定24条，无数据补0
     */
    public $HourlyTrend;

    /**
     * @var array 24小时账单明细，固定24条，无数据补0
     */
    public $HourlyDetail;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Date 查询日期，归一化为YYYY-MM-DD格式
     * @param string $EstimatedTotalFee 当日账单预估总额（元，扣减免费额度后的净费用）
     * @param LLMBillItemFee $ItemFees 当日按计费项拆分的费用
     * @param array $HourlyTrend 24小时账单趋势，固定24条，无数据补0
     * @param array $HourlyDetail 24小时账单明细，固定24条，无数据补0
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("EstimatedTotalFee",$param) and $param["EstimatedTotalFee"] !== null) {
            $this->EstimatedTotalFee = $param["EstimatedTotalFee"];
        }

        if (array_key_exists("ItemFees",$param) and $param["ItemFees"] !== null) {
            $this->ItemFees = new LLMBillItemFee();
            $this->ItemFees->deserialize($param["ItemFees"]);
        }

        if (array_key_exists("HourlyTrend",$param) and $param["HourlyTrend"] !== null) {
            $this->HourlyTrend = [];
            foreach ($param["HourlyTrend"] as $key => $value){
                $obj = new LLMHourBillTrendItem();
                $obj->deserialize($value);
                array_push($this->HourlyTrend, $obj);
            }
        }

        if (array_key_exists("HourlyDetail",$param) and $param["HourlyDetail"] !== null) {
            $this->HourlyDetail = [];
            foreach ($param["HourlyDetail"] as $key => $value){
                $obj = new LLMHourBillDetailItem();
                $obj->deserialize($value);
                array_push($this->HourlyDetail, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
