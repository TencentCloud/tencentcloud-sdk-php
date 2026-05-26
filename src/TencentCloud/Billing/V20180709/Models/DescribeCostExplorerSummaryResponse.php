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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCostExplorerSummary返回参数结构体
 *
 * @method integer getTotal() 获取<p>数据条数</p>
 * @method void setTotal(integer $Total) 设置<p>数据条数</p>
 * @method AnalyseHeaderDetail getHeader() 获取<p>表头信息</p>
 * @method void setHeader(AnalyseHeaderDetail $Header) 设置<p>表头信息</p>
 * @method array getDetail() 获取<p>数据明细</p>
 * @method void setDetail(array $Detail) 设置<p>数据明细</p>
 * @method AnalyseDetail getTotalDetail() 获取<p>数据总计</p>
 * @method void setTotalDetail(AnalyseDetail $TotalDetail) 设置<p>数据总计</p>
 * @method AnalyseConditionDetail getConditionValue() 获取<p>筛选框</p>
 * @method void setConditionValue(AnalyseConditionDetail $ConditionValue) 设置<p>筛选框</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCostExplorerSummaryResponse extends AbstractModel
{
    /**
     * @var integer <p>数据条数</p>
     */
    public $Total;

    /**
     * @var AnalyseHeaderDetail <p>表头信息</p>
     */
    public $Header;

    /**
     * @var array <p>数据明细</p>
     */
    public $Detail;

    /**
     * @var AnalyseDetail <p>数据总计</p>
     */
    public $TotalDetail;

    /**
     * @var AnalyseConditionDetail <p>筛选框</p>
     */
    public $ConditionValue;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total <p>数据条数</p>
     * @param AnalyseHeaderDetail $Header <p>表头信息</p>
     * @param array $Detail <p>数据明细</p>
     * @param AnalyseDetail $TotalDetail <p>数据总计</p>
     * @param AnalyseConditionDetail $ConditionValue <p>筛选框</p>
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = new AnalyseHeaderDetail();
            $this->Header->deserialize($param["Header"]);
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = [];
            foreach ($param["Detail"] as $key => $value){
                $obj = new AnalyseDetail();
                $obj->deserialize($value);
                array_push($this->Detail, $obj);
            }
        }

        if (array_key_exists("TotalDetail",$param) and $param["TotalDetail"] !== null) {
            $this->TotalDetail = new AnalyseDetail();
            $this->TotalDetail->deserialize($param["TotalDetail"]);
        }

        if (array_key_exists("ConditionValue",$param) and $param["ConditionValue"] !== null) {
            $this->ConditionValue = new AnalyseConditionDetail();
            $this->ConditionValue->deserialize($param["ConditionValue"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
