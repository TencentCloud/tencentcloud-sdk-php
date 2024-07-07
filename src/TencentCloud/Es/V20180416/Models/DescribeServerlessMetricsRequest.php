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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServerlessMetrics请求参数结构体
 *
 * @method string getSpaceId() 获取space空间id
 * @method void setSpaceId(string $SpaceId) 设置space空间id
 * @method string getIndexId() 获取index索引id
 * @method void setIndexId(string $IndexId) 设置index索引id
 * @method array getMetricType() 获取指标类型，暂时只支持Storage
 * @method void setMetricType(array $MetricType) 设置指标类型，暂时只支持Storage
 */
class DescribeServerlessMetricsRequest extends AbstractModel
{
    /**
     * @var string space空间id
     */
    public $SpaceId;

    /**
     * @var string index索引id
     */
    public $IndexId;

    /**
     * @var array 指标类型，暂时只支持Storage
     */
    public $MetricType;

    /**
     * @param string $SpaceId space空间id
     * @param string $IndexId index索引id
     * @param array $MetricType 指标类型，暂时只支持Storage
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("IndexId",$param) and $param["IndexId"] !== null) {
            $this->IndexId = $param["IndexId"];
        }

        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }
    }
}
