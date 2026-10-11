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
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getClusterID() 获取<p>集群ID</p>
 * @method void setClusterID(string $ClusterID) 设置<p>集群ID</p>
 * @method string getPodName() 获取<p>pod name</p>
 * @method void setPodName(string $PodName) 设置<p>pod name</p>
 * @method string getNamespace() 获取<p>命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>命名空间</p>
 * @method string getDeployment() 获取<p>工作负载</p>
 * @method void setDeployment(string $Deployment) 设置<p>工作负载</p>
 * @method string getPodIP() 获取<p>pod ip</p>
 * @method void setPodIP(string $PodIP) 设置<p>pod ip</p>
 * @method string getNodeIP() 获取<p>node ip</p>
 * @method void setNodeIP(string $NodeIP) 设置<p>node ip</p>
 */
class TkeMeta extends AbstractModel
{
    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterID;

    /**
     * @var string <p>pod name</p>
     */
    public $PodName;

    /**
     * @var string <p>命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>工作负载</p>
     */
    public $Deployment;

    /**
     * @var string <p>pod ip</p>
     */
    public $PodIP;

    /**
     * @var string <p>node ip</p>
     */
    public $NodeIP;

    /**
     * @param string $Region <p>地域</p>
     * @param string $ClusterID <p>集群ID</p>
     * @param string $PodName <p>pod name</p>
     * @param string $Namespace <p>命名空间</p>
     * @param string $Deployment <p>工作负载</p>
     * @param string $PodIP <p>pod ip</p>
     * @param string $NodeIP <p>node ip</p>
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
