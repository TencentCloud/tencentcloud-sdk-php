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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServerlessMetrics返回参数结构体
 *
 * @method float getStorage() 获取storage指标值，单位byte
 * @method void setStorage(float $Storage) 设置storage指标值，单位byte
 * @method float getIndexTraffic() 获取IndexTraffic指标值，单位byte
 * @method void setIndexTraffic(float $IndexTraffic) 设置IndexTraffic指标值，单位byte
 * @method integer getReadReqTimes() 获取读请求数，单位次数
 * @method void setReadReqTimes(integer $ReadReqTimes) 设置读请求数，单位次数
 * @method integer getWriteReqTimes() 获取写请求数，单位次数
 * @method void setWriteReqTimes(integer $WriteReqTimes) 设置写请求数，单位次数
 * @method integer getDocCount() 获取文档数量，单位个数
 * @method void setDocCount(integer $DocCount) 设置文档数量，单位个数
 * @method array getMetricMapList() 获取指标数据数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricMapList(array $MetricMapList) 设置指标数据数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeServerlessMetricsResponse extends AbstractModel
{
    /**
     * @var float storage指标值，单位byte
     */
    public $Storage;

    /**
     * @var float IndexTraffic指标值，单位byte
     */
    public $IndexTraffic;

    /**
     * @var integer 读请求数，单位次数
     */
    public $ReadReqTimes;

    /**
     * @var integer 写请求数，单位次数
     */
    public $WriteReqTimes;

    /**
     * @var integer 文档数量，单位个数
     */
    public $DocCount;

    /**
     * @var array 指标数据数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricMapList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $Storage storage指标值，单位byte
     * @param float $IndexTraffic IndexTraffic指标值，单位byte
     * @param integer $ReadReqTimes 读请求数，单位次数
     * @param integer $WriteReqTimes 写请求数，单位次数
     * @param integer $DocCount 文档数量，单位个数
     * @param array $MetricMapList 指标数据数据
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
        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("IndexTraffic",$param) and $param["IndexTraffic"] !== null) {
            $this->IndexTraffic = $param["IndexTraffic"];
        }

        if (array_key_exists("ReadReqTimes",$param) and $param["ReadReqTimes"] !== null) {
            $this->ReadReqTimes = $param["ReadReqTimes"];
        }

        if (array_key_exists("WriteReqTimes",$param) and $param["WriteReqTimes"] !== null) {
            $this->WriteReqTimes = $param["WriteReqTimes"];
        }

        if (array_key_exists("DocCount",$param) and $param["DocCount"] !== null) {
            $this->DocCount = $param["DocCount"];
        }

        if (array_key_exists("MetricMapList",$param) and $param["MetricMapList"] !== null) {
            $this->MetricMapList = [];
            foreach ($param["MetricMapList"] as $key => $value){
                $obj = new MetricMapByIndexId();
                $obj->deserialize($value);
                array_push($this->MetricMapList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
