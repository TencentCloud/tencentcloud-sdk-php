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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestartInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例名称，例如“cdwpg-xxxx"
 * @method void setInstanceId(string $InstanceId) 设置实例名称，例如“cdwpg-xxxx"
 * @method array getNodeTypes() 获取需要重启的节点类型么，gtm/cn/dn/fn
 * @method void setNodeTypes(array $NodeTypes) 设置需要重启的节点类型么，gtm/cn/dn/fn
 * @method array getNodeIds() 获取需要重启的节点编号，指定重启节点
 * @method void setNodeIds(array $NodeIds) 设置需要重启的节点编号，指定重启节点
 */
class RestartInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例名称，例如“cdwpg-xxxx"
     */
    public $InstanceId;

    /**
     * @var array 需要重启的节点类型么，gtm/cn/dn/fn
     */
    public $NodeTypes;

    /**
     * @var array 需要重启的节点编号，指定重启节点
     */
    public $NodeIds;

    /**
     * @param string $InstanceId 实例名称，例如“cdwpg-xxxx"
     * @param array $NodeTypes 需要重启的节点类型么，gtm/cn/dn/fn
     * @param array $NodeIds 需要重启的节点编号，指定重启节点
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

        if (array_key_exists("NodeTypes",$param) and $param["NodeTypes"] !== null) {
            $this->NodeTypes = $param["NodeTypes"];
        }

        if (array_key_exists("NodeIds",$param) and $param["NodeIds"] !== null) {
            $this->NodeIds = $param["NodeIds"];
        }
    }
}
