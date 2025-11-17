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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterExtraArgsTaskState请求参数结构体
 *
 * @method string getClusterId() 获取集群实例ID
 * @method void setClusterId(string $ClusterId) 设置集群实例ID
 * @method string getOperation() 获取操作类型：
abort 取消并回退任务
 * @method void setOperation(string $Operation) 设置操作类型：
abort 取消并回退任务
 */
class ModifyClusterExtraArgsTaskStateRequest extends AbstractModel
{
    /**
     * @var string 集群实例ID
     */
    public $ClusterId;

    /**
     * @var string 操作类型：
abort 取消并回退任务
     */
    public $Operation;

    /**
     * @param string $ClusterId 集群实例ID
     * @param string $Operation 操作类型：
abort 取消并回退任务
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

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }
    }
}
