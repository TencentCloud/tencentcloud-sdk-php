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
 * DescribeClusterGroupClusters请求参数结构体
 *
 * @method string getId() 获取<p>计算组 ID</p>
 * @method void setId(string $Id) 设置<p>计算组 ID</p>
 * @method integer getSampleLimit() 获取<p>返回样例 ClusterId 的最大数量（默认 5）</p>
 * @method void setSampleLimit(integer $SampleLimit) 设置<p>返回样例 ClusterId 的最大数量（默认 5）</p>
 * @method array getStatus() 获取<p>Cluster 状态列表</p><p>枚举值：</p><ul><li>running： 运行中</li></ul>
 * @method void setStatus(array $Status) 设置<p>Cluster 状态列表</p><p>枚举值：</p><ul><li>running： 运行中</li></ul>
 */
class DescribeClusterGroupClustersRequest extends AbstractModel
{
    /**
     * @var string <p>计算组 ID</p>
     */
    public $Id;

    /**
     * @var integer <p>返回样例 ClusterId 的最大数量（默认 5）</p>
     */
    public $SampleLimit;

    /**
     * @var array <p>Cluster 状态列表</p><p>枚举值：</p><ul><li>running： 运行中</li></ul>
     */
    public $Status;

    /**
     * @param string $Id <p>计算组 ID</p>
     * @param integer $SampleLimit <p>返回样例 ClusterId 的最大数量（默认 5）</p>
     * @param array $Status <p>Cluster 状态列表</p><p>枚举值：</p><ul><li>running： 运行中</li></ul>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SampleLimit",$param) and $param["SampleLimit"] !== null) {
            $this->SampleLimit = $param["SampleLimit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
