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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器告警全局统计
 *
 * @method integer getTotalCount() 获取<p>总告警条数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>总告警条数</p>
 * @method integer getClustersCount() 获取<p>存在告警的集群数量（COUNT(DISTINCT cluster_id)，排除空 cluster_id）</p>
 * @method void setClustersCount(integer $ClustersCount) 设置<p>存在告警的集群数量（COUNT(DISTINCT cluster_id)，排除空 cluster_id）</p>
 */
class EdrContainerGlobalCount extends AbstractModel
{
    /**
     * @var integer <p>总告警条数</p>
     */
    public $TotalCount;

    /**
     * @var integer <p>存在告警的集群数量（COUNT(DISTINCT cluster_id)，排除空 cluster_id）</p>
     */
    public $ClustersCount;

    /**
     * @param integer $TotalCount <p>总告警条数</p>
     * @param integer $ClustersCount <p>存在告警的集群数量（COUNT(DISTINCT cluster_id)，排除空 cluster_id）</p>
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ClustersCount",$param) and $param["ClustersCount"] !== null) {
            $this->ClustersCount = $param["ClustersCount"];
        }
    }
}
