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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskTableMetricOverview返回参数结构体
 *
 * @method array getTaskTableMetricInfos() 获取表粒度指标集合
 * @method void setTaskTableMetricInfos(array $TaskTableMetricInfos) 设置表粒度指标集合
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method string getMetricType() 获取返回列表类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricType(string $MetricType) 设置返回列表类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTaskTableMetricOverviewResponse extends AbstractModel
{
    /**
     * @var array 表粒度指标集合
     */
    public $TaskTableMetricInfos;

    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var string 返回列表类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricType;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $TaskTableMetricInfos 表粒度指标集合
     * @param integer $TotalCount 总数
     * @param string $MetricType 返回列表类型
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TaskTableMetricInfos",$param) and $param["TaskTableMetricInfos"] !== null) {
            $this->TaskTableMetricInfos = [];
            foreach ($param["TaskTableMetricInfos"] as $key => $value){
                $obj = new TaskTableMetricInfo();
                $obj->deserialize($value);
                array_push($this->TaskTableMetricInfos, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
