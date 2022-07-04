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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProbeMetricData返回参数结构体
 *
 * @method string getMetricSet() 获取返回指标 JSON 序列化后的字符串,具体如下所示：
"[{\"name\":\"task_navigate_request_gauge\",\"columns\":[\"time\",\"avg(first_screen_time) / 1000\"],\"values\":[[1641571200,6.756600000000001]],\"tags\":null}]"
 * @method void setMetricSet(string $MetricSet) 设置返回指标 JSON 序列化后的字符串,具体如下所示：
"[{\"name\":\"task_navigate_request_gauge\",\"columns\":[\"time\",\"avg(first_screen_time) / 1000\"],\"values\":[[1641571200,6.756600000000001]],\"tags\":null}]"
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeProbeMetricDataResponse extends AbstractModel
{
    /**
     * @var string 返回指标 JSON 序列化后的字符串,具体如下所示：
"[{\"name\":\"task_navigate_request_gauge\",\"columns\":[\"time\",\"avg(first_screen_time) / 1000\"],\"values\":[[1641571200,6.756600000000001]],\"tags\":null}]"
     */
    public $MetricSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MetricSet 返回指标 JSON 序列化后的字符串,具体如下所示：
"[{\"name\":\"task_navigate_request_gauge\",\"columns\":[\"time\",\"avg(first_screen_time) / 1000\"],\"values\":[[1641571200,6.756600000000001]],\"tags\":null}]"
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
        if (array_key_exists("MetricSet",$param) and $param["MetricSet"] !== null) {
            $this->MetricSet = $param["MetricSet"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
