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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * tke资源元数据
 *
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 * @method string getPodName() 获取pod name
 * @method void setPodName(string $PodName) 设置pod name
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getDeployment() 获取工作负载
 * @method void setDeployment(string $Deployment) 设置工作负载
 * @method string getPodIP() 获取pod ip
 * @method void setPodIP(string $PodIP) 设置pod ip
 * @method string getNodeIP() 获取node ip
 * @method void setNodeIP(string $NodeIP) 设置node ip
 */
class TkeMeta extends AbstractModel
{
    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @var string pod name
     */
    public $PodName;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 工作负载
     */
    public $Deployment;

    /**
     * @var string pod ip
     */
    public $PodIP;

    /**
     * @var string node ip
     */
    public $NodeIP;

    /**
     * @param string $Region 地域
     * @param string $ClusterID 集群ID
     * @param string $PodName pod name
     * @param string $Namespace 命名空间
     * @param string $Deployment 工作负载
     * @param string $PodIP pod ip
     * @param string $NodeIP node ip
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
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

        if (array_key_exists("Deployment",$param) and $param["Deployment"] !== null) {
            $this->Deployment = $param["Deployment"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("NodeIP",$param) and $param["NodeIP"] !== null) {
            $this->NodeIP = $param["NodeIP"];
        }
    }
}
