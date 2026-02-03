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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLibraDBClusterProject请求参数结构体
 *
 * @method array getClusterIdSet() 获取分析集群 ID 列表
 * @method void setClusterIdSet(array $ClusterIdSet) 设置分析集群 ID 列表
 * @method integer getProjectId() 获取项目 ID
 * @method void setProjectId(integer $ProjectId) 设置项目 ID
 */
class ModifyLibraDBClusterProjectRequest extends AbstractModel
{
    /**
     * @var array 分析集群 ID 列表
     */
    public $ClusterIdSet;

    /**
     * @var integer 项目 ID
     */
    public $ProjectId;

    /**
     * @param array $ClusterIdSet 分析集群 ID 列表
     * @param integer $ProjectId 项目 ID
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
        if (array_key_exists("ClusterIdSet",$param) and $param["ClusterIdSet"] !== null) {
            $this->ClusterIdSet = $param["ClusterIdSet"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
