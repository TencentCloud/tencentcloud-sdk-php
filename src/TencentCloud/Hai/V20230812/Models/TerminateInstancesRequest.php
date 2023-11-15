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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TerminateInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取实例ID列表
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID列表
 * @method boolean getDryRun() 获取默认为False，True代表只验证接口连通性
 * @method void setDryRun(boolean $DryRun) 设置默认为False，True代表只验证接口连通性
 */
class TerminateInstancesRequest extends AbstractModel
{
    /**
     * @var array 实例ID列表
     */
    public $InstanceIds;

    /**
     * @var boolean 默认为False，True代表只验证接口连通性
     */
    public $DryRun;

    /**
     * @param array $InstanceIds 实例ID列表
     * @param boolean $DryRun 默认为False，True代表只验证接口连通性
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
