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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBgpBizTrend返回参数结构体
 *
 * @method array getDataList() 获取曲线图各个时间点的值
 * @method void setDataList(array $DataList) 设置曲线图各个时间点的值
 * @method integer getTotal() 获取曲线图取值个数
 * @method void setTotal(integer $Total) 设置曲线图取值个数
 * @method string getMetricName() 获取统计纬度
 * @method void setMetricName(string $MetricName) 设置统计纬度
 * @method integer getMaxData() 获取返回数组最大值
 * @method void setMaxData(integer $MaxData) 设置返回数组最大值
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBgpBizTrendResponse extends AbstractModel
{
    /**
     * @var array 曲线图各个时间点的值
     */
    public $DataList;

    /**
     * @var integer 曲线图取值个数
     */
    public $Total;

    /**
     * @var string 统计纬度
     */
    public $MetricName;

    /**
     * @var integer 返回数组最大值
     */
    public $MaxData;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DataList 曲线图各个时间点的值
     * @param integer $Total 曲线图取值个数
     * @param string $MetricName 统计纬度
     * @param integer $MaxData 返回数组最大值
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
        if (array_key_exists("DataList",$param) and $param["DataList"] !== null) {
            $this->DataList = $param["DataList"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("MaxData",$param) and $param["MaxData"] !== null) {
            $this->MaxData = $param["MaxData"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
