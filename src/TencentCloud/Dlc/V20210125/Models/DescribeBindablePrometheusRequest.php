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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBindablePrometheus请求参数结构体
 *
 * @method string getClusterId() 获取<p>TKE 集群 ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>TKE 集群 ID</p>
 * @method string getInstanceId() 获取<p>Prometheus 实例 ID（用于列表精确搜索）</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>Prometheus 实例 ID（用于列表精确搜索）</p>
 * @method integer getLimit() 获取<p>分页大小，默认 20，最大 100</p>
 * @method void setLimit(integer $Limit) 设置<p>分页大小，默认 20，最大 100</p>
 * @method integer getOffset() 获取<p>分页偏移，默认 0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移，默认 0</p>
 */
class DescribeBindablePrometheusRequest extends AbstractModel
{
    /**
     * @var string <p>TKE 集群 ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Prometheus 实例 ID（用于列表精确搜索）</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>分页大小，默认 20，最大 100</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移，默认 0</p>
     */
    public $Offset;

    /**
     * @param string $ClusterId <p>TKE 集群 ID</p>
     * @param string $InstanceId <p>Prometheus 实例 ID（用于列表精确搜索）</p>
     * @param integer $Limit <p>分页大小，默认 20，最大 100</p>
     * @param integer $Offset <p>分页偏移，默认 0</p>
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
