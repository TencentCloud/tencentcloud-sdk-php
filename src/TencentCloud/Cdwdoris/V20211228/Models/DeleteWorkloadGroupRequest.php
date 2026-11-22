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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteWorkloadGroup请求参数结构体
 *
 * @method string getInstanceId() 获取<p>集群id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>集群id</p>
 * @method string getWorkloadGroupName() 获取<p>需要删除的资源组名称</p>
 * @method void setWorkloadGroupName(string $WorkloadGroupName) 设置<p>需要删除的资源组名称</p>
 * @method string getComputeGroup() 获取<p>资源组归属的计算组ID</p>
 * @method void setComputeGroup(string $ComputeGroup) 设置<p>资源组归属的计算组ID</p>
 */
class DeleteWorkloadGroupRequest extends AbstractModel
{
    /**
     * @var string <p>集群id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>需要删除的资源组名称</p>
     */
    public $WorkloadGroupName;

    /**
     * @var string <p>资源组归属的计算组ID</p>
     */
    public $ComputeGroup;

    /**
     * @param string $InstanceId <p>集群id</p>
     * @param string $WorkloadGroupName <p>需要删除的资源组名称</p>
     * @param string $ComputeGroup <p>资源组归属的计算组ID</p>
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

        if (array_key_exists("WorkloadGroupName",$param) and $param["WorkloadGroupName"] !== null) {
            $this->WorkloadGroupName = $param["WorkloadGroupName"];
        }

        if (array_key_exists("ComputeGroup",$param) and $param["ComputeGroup"] !== null) {
            $this->ComputeGroup = $param["ComputeGroup"];
        }
    }
}
