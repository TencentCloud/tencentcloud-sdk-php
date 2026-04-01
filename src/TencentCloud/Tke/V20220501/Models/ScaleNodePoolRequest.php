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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleNodePool请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群 ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID</p>
 * @method string getNodePoolId() 获取<p>节点池 ID</p>
 * @method void setNodePoolId(string $NodePoolId) 设置<p>节点池 ID</p>
 * @method integer getReplicas() 获取<p>期望节点数</p>
 * @method void setReplicas(integer $Replicas) 设置<p>期望节点数</p>
 */
class ScaleNodePoolRequest extends AbstractModel
{
    /**
     * @var string <p>集群 ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>节点池 ID</p>
     */
    public $NodePoolId;

    /**
     * @var integer <p>期望节点数</p>
     */
    public $Replicas;

    /**
     * @param string $ClusterId <p>集群 ID</p>
     * @param string $NodePoolId <p>节点池 ID</p>
     * @param integer $Replicas <p>期望节点数</p>
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

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }
    }
}
