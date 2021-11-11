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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 部署配置
 *
 * @method string getNodeSelectType() 获取部署类型，取值范围：
- SPECIFIC：专有模式
- AUTO：普通模式
 * @method void setNodeSelectType(string $NodeSelectType) 设置部署类型，取值范围：
- SPECIFIC：专有模式
- AUTO：普通模式
 * @method array getNodes() 获取指定的节点
 * @method void setNodes(array $Nodes) 设置指定的节点
 */
class DeployConfig extends AbstractModel
{
    /**
     * @var string 部署类型，取值范围：
- SPECIFIC：专有模式
- AUTO：普通模式
     */
    public $NodeSelectType;

    /**
     * @var array 指定的节点
     */
    public $Nodes;

    /**
     * @param string $NodeSelectType 部署类型，取值范围：
- SPECIFIC：专有模式
- AUTO：普通模式
     * @param array $Nodes 指定的节点
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
        if (array_key_exists("NodeSelectType",$param) and $param["NodeSelectType"] !== null) {
            $this->NodeSelectType = $param["NodeSelectType"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = $param["Nodes"];
        }
    }
}
