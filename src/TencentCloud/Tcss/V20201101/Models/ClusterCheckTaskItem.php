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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群检查任务入参
 *
 * @method string getClusterId() 获取指定要扫描的集群ID
 * @method void setClusterId(string $ClusterId) 设置指定要扫描的集群ID
 * @method string getClusterRegion() 获取集群所属地域
 * @method void setClusterRegion(string $ClusterRegion) 设置集群所属地域
 * @method string getNodeIp() 获取指定要扫描的节点IP
 * @method void setNodeIp(string $NodeIp) 设置指定要扫描的节点IP
 * @method string getWorkloadName() 获取按照要扫描的workload名字
 * @method void setWorkloadName(string $WorkloadName) 设置按照要扫描的workload名字
 */
class ClusterCheckTaskItem extends AbstractModel
{
    /**
     * @var string 指定要扫描的集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群所属地域
     */
    public $ClusterRegion;

    /**
     * @var string 指定要扫描的节点IP
     */
    public $NodeIp;

    /**
     * @var string 按照要扫描的workload名字
     */
    public $WorkloadName;

    /**
     * @param string $ClusterId 指定要扫描的集群ID
     * @param string $ClusterRegion 集群所属地域
     * @param string $NodeIp 指定要扫描的节点IP
     * @param string $WorkloadName 按照要扫描的workload名字
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

        if (array_key_exists("ClusterRegion",$param) and $param["ClusterRegion"] !== null) {
            $this->ClusterRegion = $param["ClusterRegion"];
        }

        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }

        if (array_key_exists("WorkloadName",$param) and $param["WorkloadName"] !== null) {
            $this->WorkloadName = $param["WorkloadName"];
        }
    }
}
