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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableClusterMonitor请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID。</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID。</p>
 * @method string getPrometheusId() 获取<p>Prometheus实例ID</p>
 * @method void setPrometheusId(string $PrometheusId) 设置<p>Prometheus实例ID</p>
 */
class EnableClusterMonitorRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID。</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Prometheus实例ID</p>
     */
    public $PrometheusId;

    /**
     * @param string $ClusterId <p>集群ID。</p>
     * @param string $PrometheusId <p>Prometheus实例ID</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("PrometheusId",$param) and $param["PrometheusId"] !== null) {
            $this->PrometheusId = $param["PrometheusId"];
        }
    }
}
