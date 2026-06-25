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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteExporterIntegration请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID</p>
 * @method string getKind() 获取<p>类型(可通过 DescribeExporterIntegrations获取)</p>
 * @method void setKind(string $Kind) 设置<p>类型(可通过 DescribeExporterIntegrations获取)</p>
 * @method string getName() 获取<p>名字</p>
 * @method void setName(string $Name) 设置<p>名字</p>
 * @method integer getKubeType() 获取<p>Kubernetes 集群类型，取值如下：</p><li> 1= 容器集群(TKE) </li><li> 2=弹性集群(EKS) </li><li> 3= Prometheus管理的弹性集群(MEKS) </li>
 * @method void setKubeType(integer $KubeType) 设置<p>Kubernetes 集群类型，取值如下：</p><li> 1= 容器集群(TKE) </li><li> 2=弹性集群(EKS) </li><li> 3= Prometheus管理的弹性集群(MEKS) </li>
 * @method string getClusterId() 获取<p>集群 ID，可不填</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID，可不填</p>
 */
class DeleteExporterIntegrationRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>类型(可通过 DescribeExporterIntegrations获取)</p>
     */
    public $Kind;

    /**
     * @var string <p>名字</p>
     */
    public $Name;

    /**
     * @var integer <p>Kubernetes 集群类型，取值如下：</p><li> 1= 容器集群(TKE) </li><li> 2=弹性集群(EKS) </li><li> 3= Prometheus管理的弹性集群(MEKS) </li>
     */
    public $KubeType;

    /**
     * @var string <p>集群 ID，可不填</p>
     */
    public $ClusterId;

    /**
     * @param string $InstanceId <p>实例 ID</p>
     * @param string $Kind <p>类型(可通过 DescribeExporterIntegrations获取)</p>
     * @param string $Name <p>名字</p>
     * @param integer $KubeType <p>Kubernetes 集群类型，取值如下：</p><li> 1= 容器集群(TKE) </li><li> 2=弹性集群(EKS) </li><li> 3= Prometheus管理的弹性集群(MEKS) </li>
     * @param string $ClusterId <p>集群 ID，可不填</p>
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

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("KubeType",$param) and $param["KubeType"] !== null) {
            $this->KubeType = $param["KubeType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
