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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApmServiceMetric返回参数结构体
 *
 * @method array getServiceMetricList() 获取应用指标列表
 * @method void setServiceMetricList(array $ServiceMetricList) 设置应用指标列表
 * @method integer getTotalCount() 获取符合筛选条件的应用数
 * @method void setTotalCount(integer $TotalCount) 设置符合筛选条件的应用数
 * @method integer getWarningErrorCount() 获取警示异常应用数
 * @method void setWarningErrorCount(integer $WarningErrorCount) 设置警示异常应用数
 * @method integer getApplicationCount() 获取应用总数
 * @method void setApplicationCount(integer $ApplicationCount) 设置应用总数
 * @method integer getPage() 获取页码
 * @method void setPage(integer $Page) 设置页码
 * @method integer getPageSize() 获取页大小
 * @method void setPageSize(integer $PageSize) 设置页大小
 * @method integer getErrorCount() 获取异常应用数
 * @method void setErrorCount(integer $ErrorCount) 设置异常应用数
 * @method integer getWarningCount() 获取警示应用数
 * @method void setWarningCount(integer $WarningCount) 设置警示应用数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeApmServiceMetricResponse extends AbstractModel
{
    /**
     * @var array 应用指标列表
     */
    public $ServiceMetricList;

    /**
     * @var integer 符合筛选条件的应用数
     */
    public $TotalCount;

    /**
     * @var integer 警示异常应用数
     */
    public $WarningErrorCount;

    /**
     * @var integer 应用总数
     */
    public $ApplicationCount;

    /**
     * @var integer 页码
     */
    public $Page;

    /**
     * @var integer 页大小
     */
    public $PageSize;

    /**
     * @var integer 异常应用数
     */
    public $ErrorCount;

    /**
     * @var integer 警示应用数
     */
    public $WarningCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ServiceMetricList 应用指标列表
     * @param integer $TotalCount 符合筛选条件的应用数
     * @param integer $WarningErrorCount 警示异常应用数
     * @param integer $ApplicationCount 应用总数
     * @param integer $Page 页码
     * @param integer $PageSize 页大小
     * @param integer $ErrorCount 异常应用数
     * @param integer $WarningCount 警示应用数
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
        if (array_key_exists("ServiceMetricList",$param) and $param["ServiceMetricList"] !== null) {
            $this->ServiceMetricList = [];
            foreach ($param["ServiceMetricList"] as $key => $value){
                $obj = new ApmServiceMetric();
                $obj->deserialize($value);
                array_push($this->ServiceMetricList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("WarningErrorCount",$param) and $param["WarningErrorCount"] !== null) {
            $this->WarningErrorCount = $param["WarningErrorCount"];
        }

        if (array_key_exists("ApplicationCount",$param) and $param["ApplicationCount"] !== null) {
            $this->ApplicationCount = $param["ApplicationCount"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ErrorCount",$param) and $param["ErrorCount"] !== null) {
            $this->ErrorCount = $param["ErrorCount"];
        }

        if (array_key_exists("WarningCount",$param) and $param["WarningCount"] !== null) {
            $this->WarningCount = $param["WarningCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
