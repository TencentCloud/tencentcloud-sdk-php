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
 * UnlinkCluster请求参数结构体
 *
 * @method string getMeshId() 获取网格Id
 * @method void setMeshId(string $MeshId) 设置网格Id
 * @method string getClusterId() 获取取消关联的集群Id
 * @method void setClusterId(string $ClusterId) 设置取消关联的集群Id
 */
class UnlinkClusterRequest extends AbstractModel
{
    /**
     * @var string 网格Id
     */
    public $MeshId;

    /**
     * @var string 取消关联的集群Id
     */
    public $ClusterId;

    /**
     * @param string $MeshId 网格Id
     * @param string $ClusterId 取消关联的集群Id
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
        if (array_key_exists("MeshId",$param) and $param["MeshId"] !== null) {
            $this->MeshId = $param["MeshId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
