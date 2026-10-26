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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DB Custom 资源任务状态信息。
 *
 * @method string getResourceId() 获取<p>资源ID。如节点ID dbcn-tnjzxz3n</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID。如节点ID dbcn-tnjzxz3n</p>
 * @method string getStatus() 获取<p>任务状态</p><p>枚举值：</p><ul><li>Running： 运行中</li><li>Succeeded： 成功</li><li>Failed： 失败</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务状态</p><p>枚举值：</p><ul><li>Running： 运行中</li><li>Succeeded： 成功</li><li>Failed： 失败</li></ul>
 */
class TaskResourceStatus extends AbstractModel
{
    /**
     * @var string <p>资源ID。如节点ID dbcn-tnjzxz3n</p>
     */
    public $ResourceId;

    /**
     * @var string <p>任务状态</p><p>枚举值：</p><ul><li>Running： 运行中</li><li>Succeeded： 成功</li><li>Failed： 失败</li></ul>
     */
    public $Status;

    /**
     * @param string $ResourceId <p>资源ID。如节点ID dbcn-tnjzxz3n</p>
     * @param string $Status <p>任务状态</p><p>枚举值：</p><ul><li>Running： 运行中</li><li>Succeeded： 成功</li><li>Failed： 失败</li></ul>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
