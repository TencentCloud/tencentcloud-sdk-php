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
 * ModifyWorkloadGroup请求参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method WorkloadGroupConfig getWorkloadGroup() 获取修改的资源组信息
 * @method void setWorkloadGroup(WorkloadGroupConfig $WorkloadGroup) 设置修改的资源组信息
 */
class ModifyWorkloadGroupRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var WorkloadGroupConfig 修改的资源组信息
     */
    public $WorkloadGroup;

    /**
     * @param string $InstanceId 集群id
     * @param WorkloadGroupConfig $WorkloadGroup 修改的资源组信息
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

        if (array_key_exists("WorkloadGroup",$param) and $param["WorkloadGroup"] !== null) {
            $this->WorkloadGroup = new WorkloadGroupConfig();
            $this->WorkloadGroup->deserialize($param["WorkloadGroup"]);
        }
    }
}
