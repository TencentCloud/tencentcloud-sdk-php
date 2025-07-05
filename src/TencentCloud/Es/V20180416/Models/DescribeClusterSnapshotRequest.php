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
 * DescribeClusterSnapshot请求参数结构体
 *
 * @method string getInstanceId() 获取集群实例Id，格式：es-xxxx
 * @method void setInstanceId(string $InstanceId) 设置集群实例Id，格式：es-xxxx
 * @method string getRepositoryName() 获取快照仓库名称
 * @method void setRepositoryName(string $RepositoryName) 设置快照仓库名称
 * @method string getSnapshotName() 获取集群快照名称
 * @method void setSnapshotName(string $SnapshotName) 设置集群快照名称
 */
class DescribeClusterSnapshotRequest extends AbstractModel
{
    /**
     * @var string 集群实例Id，格式：es-xxxx
     */
    public $InstanceId;

    /**
     * @var string 快照仓库名称
     */
    public $RepositoryName;

    /**
     * @var string 集群快照名称
     */
    public $SnapshotName;

    /**
     * @param string $InstanceId 集群实例Id，格式：es-xxxx
     * @param string $RepositoryName 快照仓库名称
     * @param string $SnapshotName 集群快照名称
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RepositoryName",$param) and $param["RepositoryName"] !== null) {
            $this->RepositoryName = $param["RepositoryName"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }
    }
}
