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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterMonitorInfos请求参数结构体
 *
 * @method string getDataEngineId() 获取引擎Id
 * @method void setDataEngineId(string $DataEngineId) 设置引擎Id
 * @method string getTimeStart() 获取任务创建时间的起始时间
 * @method void setTimeStart(string $TimeStart) 设置任务创建时间的起始时间
 * @method string getTimeEnd() 获取任务创建时间的结束时间
 * @method void setTimeEnd(string $TimeEnd) 设置任务创建时间的结束时间
 * @method string getMetricName() 获取指标名称
 * @method void setMetricName(string $MetricName) 设置指标名称
 */
class DescribeClusterMonitorInfosRequest extends AbstractModel
{
    /**
     * @var string 引擎Id
     */
    public $DataEngineId;

    /**
     * @var string 任务创建时间的起始时间
     */
    public $TimeStart;

    /**
     * @var string 任务创建时间的结束时间
     */
    public $TimeEnd;

    /**
     * @var string 指标名称
     */
    public $MetricName;

    /**
     * @param string $DataEngineId 引擎Id
     * @param string $TimeStart 任务创建时间的起始时间
     * @param string $TimeEnd 任务创建时间的结束时间
     * @param string $MetricName 指标名称
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
        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("TimeStart",$param) and $param["TimeStart"] !== null) {
            $this->TimeStart = $param["TimeStart"];
        }

        if (array_key_exists("TimeEnd",$param) and $param["TimeEnd"] !== null) {
            $this->TimeEnd = $param["TimeEnd"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }
    }
}
