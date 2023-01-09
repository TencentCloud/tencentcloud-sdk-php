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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteClusterVirtualNode请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method array getNodeNames() 获取虚拟节点列表
 * @method void setNodeNames(array $NodeNames) 设置虚拟节点列表
 * @method boolean getForce() 获取是否强制删除：如果虚拟节点上有运行中Pod，则非强制删除状态下不会进行删除
 * @method void setForce(boolean $Force) 设置是否强制删除：如果虚拟节点上有运行中Pod，则非强制删除状态下不会进行删除
 */
class DeleteClusterVirtualNodeRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var array 虚拟节点列表
     */
    public $NodeNames;

    /**
     * @var boolean 是否强制删除：如果虚拟节点上有运行中Pod，则非强制删除状态下不会进行删除
     */
    public $Force;

    /**
     * @param string $ClusterId 集群ID
     * @param array $NodeNames 虚拟节点列表
     * @param boolean $Force 是否强制删除：如果虚拟节点上有运行中Pod，则非强制删除状态下不会进行删除
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

        if (array_key_exists("NodeNames",$param) and $param["NodeNames"] !== null) {
            $this->NodeNames = $param["NodeNames"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
