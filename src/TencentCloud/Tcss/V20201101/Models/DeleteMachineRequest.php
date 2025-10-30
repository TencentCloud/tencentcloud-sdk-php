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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteMachine请求参数结构体
 *
 * @method string getUuid() 获取客户端Uuid
 * @method void setUuid(string $Uuid) 设置客户端Uuid
 * @method array getNodeUniqueIds() 获取超级节点唯一id
 * @method void setNodeUniqueIds(array $NodeUniqueIds) 设置超级节点唯一id
 * @method array getUUIDs() 获取uuid列表
 * @method void setUUIDs(array $UUIDs) 设置uuid列表
 */
class DeleteMachineRequest extends AbstractModel
{
    /**
     * @var string 客户端Uuid
     */
    public $Uuid;

    /**
     * @var array 超级节点唯一id
     */
    public $NodeUniqueIds;

    /**
     * @var array uuid列表
     */
    public $UUIDs;

    /**
     * @param string $Uuid 客户端Uuid
     * @param array $NodeUniqueIds 超级节点唯一id
     * @param array $UUIDs uuid列表
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("NodeUniqueIds",$param) and $param["NodeUniqueIds"] !== null) {
            $this->NodeUniqueIds = $param["NodeUniqueIds"];
        }

        if (array_key_exists("UUIDs",$param) and $param["UUIDs"] !== null) {
            $this->UUIDs = $param["UUIDs"];
        }
    }
}
