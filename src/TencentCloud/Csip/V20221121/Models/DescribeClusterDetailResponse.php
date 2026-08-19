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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterDetail返回参数结构体
 *
 * @method ClusterListItem getClusterBaseInfo() 获取<p>集群基础信息</p>
 * @method void setClusterBaseInfo(ClusterListItem $ClusterBaseInfo) 设置<p>集群基础信息</p>
 * @method string getRuntimeComponent() 获取<p>运行时组件</p>
 * @method void setRuntimeComponent(string $RuntimeComponent) 设置<p>运行时组件</p>
 * @method string getMasterIP() 获取<p>master ip</p>
 * @method void setMasterIP(string $MasterIP) 设置<p>master ip</p>
 * @method integer getNodeCount() 获取<p>节点数</p>
 * @method void setNodeCount(integer $NodeCount) 设置<p>节点数</p>
 * @method integer getNamespaceCount() 获取<p>命名空间数</p>
 * @method void setNamespaceCount(integer $NamespaceCount) 设置<p>命名空间数</p>
 * @method integer getPodCount() 获取<p>pod数</p>
 * @method void setPodCount(integer $PodCount) 设置<p>pod数</p>
 * @method integer getContainerCount() 获取<p>容器数</p>
 * @method void setContainerCount(integer $ContainerCount) 设置<p>容器数</p>
 * @method integer getServiceCount() 获取<p>service数</p>
 * @method void setServiceCount(integer $ServiceCount) 设置<p>service数</p>
 * @method integer getIngressCount() 获取<p>ingress数</p>
 * @method void setIngressCount(integer $IngressCount) 设置<p>ingress数</p>
 * @method integer getImageCount() 获取<p>镜像数</p>
 * @method void setImageCount(integer $ImageCount) 设置<p>镜像数</p>
 * @method integer getSystemComponentCount() 获取<p>系统组件数量</p>
 * @method void setSystemComponentCount(integer $SystemComponentCount) 设置<p>系统组件数量</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterDetailResponse extends AbstractModel
{
    /**
     * @var ClusterListItem <p>集群基础信息</p>
     */
    public $ClusterBaseInfo;

    /**
     * @var string <p>运行时组件</p>
     */
    public $RuntimeComponent;

    /**
     * @var string <p>master ip</p>
     */
    public $MasterIP;

    /**
     * @var integer <p>节点数</p>
     */
    public $NodeCount;

    /**
     * @var integer <p>命名空间数</p>
     */
    public $NamespaceCount;

    /**
     * @var integer <p>pod数</p>
     */
    public $PodCount;

    /**
     * @var integer <p>容器数</p>
     */
    public $ContainerCount;

    /**
     * @var integer <p>service数</p>
     */
    public $ServiceCount;

    /**
     * @var integer <p>ingress数</p>
     */
    public $IngressCount;

    /**
     * @var integer <p>镜像数</p>
     */
    public $ImageCount;

    /**
     * @var integer <p>系统组件数量</p>
     */
    public $SystemComponentCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ClusterListItem $ClusterBaseInfo <p>集群基础信息</p>
     * @param string $RuntimeComponent <p>运行时组件</p>
     * @param string $MasterIP <p>master ip</p>
     * @param integer $NodeCount <p>节点数</p>
     * @param integer $NamespaceCount <p>命名空间数</p>
     * @param integer $PodCount <p>pod数</p>
     * @param integer $ContainerCount <p>容器数</p>
     * @param integer $ServiceCount <p>service数</p>
     * @param integer $IngressCount <p>ingress数</p>
     * @param integer $ImageCount <p>镜像数</p>
     * @param integer $SystemComponentCount <p>系统组件数量</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ClusterBaseInfo",$param) and $param["ClusterBaseInfo"] !== null) {
            $this->ClusterBaseInfo = new ClusterListItem();
            $this->ClusterBaseInfo->deserialize($param["ClusterBaseInfo"]);
        }

        if (array_key_exists("RuntimeComponent",$param) and $param["RuntimeComponent"] !== null) {
            $this->RuntimeComponent = $param["RuntimeComponent"];
        }

        if (array_key_exists("MasterIP",$param) and $param["MasterIP"] !== null) {
            $this->MasterIP = $param["MasterIP"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("NamespaceCount",$param) and $param["NamespaceCount"] !== null) {
            $this->NamespaceCount = $param["NamespaceCount"];
        }

        if (array_key_exists("PodCount",$param) and $param["PodCount"] !== null) {
            $this->PodCount = $param["PodCount"];
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("IngressCount",$param) and $param["IngressCount"] !== null) {
            $this->IngressCount = $param["IngressCount"];
        }

        if (array_key_exists("ImageCount",$param) and $param["ImageCount"] !== null) {
            $this->ImageCount = $param["ImageCount"];
        }

        if (array_key_exists("SystemComponentCount",$param) and $param["SystemComponentCount"] !== null) {
            $this->SystemComponentCount = $param["SystemComponentCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
