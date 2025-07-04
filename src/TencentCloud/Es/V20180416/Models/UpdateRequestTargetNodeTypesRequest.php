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
 * UpdateRequestTargetNodeTypes请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method array getTargetNodeTypes() 获取接收请求的目标节点类型列表
 * @method void setTargetNodeTypes(array $TargetNodeTypes) 设置接收请求的目标节点类型列表
 */
class UpdateRequestTargetNodeTypesRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var array 接收请求的目标节点类型列表
     */
    public $TargetNodeTypes;

    /**
     * @param string $InstanceId 实例ID
     * @param array $TargetNodeTypes 接收请求的目标节点类型列表
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

        if (array_key_exists("TargetNodeTypes",$param) and $param["TargetNodeTypes"] !== null) {
            $this->TargetNodeTypes = $param["TargetNodeTypes"];
        }
    }
}
