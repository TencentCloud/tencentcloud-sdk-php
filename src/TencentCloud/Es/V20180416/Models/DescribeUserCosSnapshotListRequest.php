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
 * @method string getCosBucket() 获取<p>cos桶名</p>
 * @method void setCosBucket(string $CosBucket) 设置<p>cos桶名</p>
 * @method string getBasePath() 获取<p>bucket 桶下的备份路径</p>
 * @method void setBasePath(string $BasePath) 设置<p>bucket 桶下的备份路径</p>
 * @method string getClusterInstanceId() 获取<p>云上集群迁移集群名</p>
 * @method void setClusterInstanceId(string $ClusterInstanceId) 设置<p>云上集群迁移集群名</p>
 * @method string getPaasEsRepository() 获取<p>es 集群仓库</p>
 * @method void setPaasEsRepository(string $PaasEsRepository) 设置<p>es 集群仓库</p>
 */
class DescribeUserCosSnapshotListRequest extends AbstractModel
{
    /**
     * @var string <p>cos桶名</p>
     */
    public $CosBucket;

    /**
     * @var string <p>bucket 桶下的备份路径</p>
     */
    public $BasePath;

    /**
     * @var string <p>云上集群迁移集群名</p>
     */
    public $ClusterInstanceId;

    /**
     * @var string <p>es 集群仓库</p>
     */
    public $PaasEsRepository;

    /**
     * @param string $CosBucket <p>cos桶名</p>
     * @param string $BasePath <p>bucket 桶下的备份路径</p>
     * @param string $ClusterInstanceId <p>云上集群迁移集群名</p>
     * @param string $PaasEsRepository <p>es 集群仓库</p>
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

        if (array_key_exists("PaasEsRepository",$param) and $param["PaasEsRepository"] !== null) {
            $this->PaasEsRepository = $param["PaasEsRepository"];
        }
    }
}
