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
 * DescribeUserCosSnapshotList请求参数结构体
 *
 * @method string getCosBucket() 获取cos桶名
 * @method void setCosBucket(string $CosBucket) 设置cos桶名
 * @method string getBasePath() 获取bucket 桶下的备份路径
 * @method void setBasePath(string $BasePath) 设置bucket 桶下的备份路径
 * @method string getClusterInstanceId() 获取云上集群迁移集群名
 * @method void setClusterInstanceId(string $ClusterInstanceId) 设置云上集群迁移集群名
 */
class DescribeUserCosSnapshotListRequest extends AbstractModel
{
    /**
     * @var string cos桶名
     */
    public $CosBucket;

    /**
     * @var string bucket 桶下的备份路径
     */
    public $BasePath;

    /**
     * @var string 云上集群迁移集群名
     */
    public $ClusterInstanceId;

    /**
     * @param string $CosBucket cos桶名
     * @param string $BasePath bucket 桶下的备份路径
     * @param string $ClusterInstanceId 云上集群迁移集群名
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
        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("BasePath",$param) and $param["BasePath"] !== null) {
            $this->BasePath = $param["BasePath"];
        }

        if (array_key_exists("ClusterInstanceId",$param) and $param["ClusterInstanceId"] !== null) {
            $this->ClusterInstanceId = $param["ClusterInstanceId"];
        }
    }
}
