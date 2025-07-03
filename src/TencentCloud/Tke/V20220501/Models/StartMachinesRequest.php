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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartMachines请求参数结构体
 *
 * @method string getClusterId() 获取集群 ID
 * @method void setClusterId(string $ClusterId) 设置集群 ID
 * @method array getMachineNames() 获取节点名字列表，一次请求，传入节点数量上限为100个
 * @method void setMachineNames(array $MachineNames) 设置节点名字列表，一次请求，传入节点数量上限为100个
 */
class StartMachinesRequest extends AbstractModel
{
    /**
     * @var string 集群 ID
     */
    public $ClusterId;

    /**
     * @var array 节点名字列表，一次请求，传入节点数量上限为100个
     */
    public $MachineNames;

    /**
     * @param string $ClusterId 集群 ID
     * @param array $MachineNames 节点名字列表，一次请求，传入节点数量上限为100个
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

        if (array_key_exists("MachineNames",$param) and $param["MachineNames"] !== null) {
            $this->MachineNames = $param["MachineNames"];
        }
    }
}
