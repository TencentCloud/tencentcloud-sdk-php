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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteEdgeUnitPod请求参数结构体
 *
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 * @method string getPodName() 获取Pod名称
 * @method void setPodName(string $PodName) 设置Pod名称
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 */
class DeleteEdgeUnitPodRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @var string Pod名称
     */
    public $PodName;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @param string $ClusterID 集群ID
     * @param string $PodName Pod名称
     * @param string $Namespace 命名空间
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
