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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportTkeCluster请求参数结构体
 *
 * @method string getPartitionName() 获取<p>资源池对应的分区名称。</p>
 * @method void setPartitionName(string $PartitionName) 设置<p>资源池对应的分区名称。</p>
 * @method string getEmrClusterId() 获取<p>EMR 集群 ID（注意：不是 TKE 集群 ID）。</p>
 * @method void setEmrClusterId(string $EmrClusterId) 设置<p>EMR 集群 ID（注意：不是 TKE 集群 ID）。</p>
 * @method string getCosBucketId() 获取<p>COS Bucket 名称（含 AppId 后缀），例如 my-bucket-1250000000。</p>
 * @method void setCosBucketId(string $CosBucketId) 设置<p>COS Bucket 名称（含 AppId 后缀），例如 my-bucket-1250000000。</p>
 * @method string getPrometheusInstanceId() 获取<p>Prometheus 托管实例 ID，例如 prom-xxxxxxxx。</p>
 * @method void setPrometheusInstanceId(string $PrometheusInstanceId) 设置<p>Prometheus 托管实例 ID，例如 prom-xxxxxxxx。</p>
 * @method string getLoadBalancerId() 获取<p>负载均衡实例 ID，例如 lb-xxxxxxxx。</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置<p>负载均衡实例 ID，例如 lb-xxxxxxxx。</p>
 * @method string getContainerLogTopicId() 获取<p>容器日志 CLS 日志主题 ID。</p>
 * @method void setContainerLogTopicId(string $ContainerLogTopicId) 设置<p>容器日志 CLS 日志主题 ID。</p>
 * @method array getNodeLabels() 获取<p>节点标签键值对（Key-Value 列表），用于将资源池调度限定到具备对应标签的 EMR-TKE 节点。</p>
 * @method void setNodeLabels(array $NodeLabels) 设置<p>节点标签键值对（Key-Value 列表），用于将资源池调度限定到具备对应标签的 EMR-TKE 节点。</p>
 * @method string getPartitionDescription() 获取<p>资源池对应的默认分区描述，透传给下游 ResourceManager 用于分区创建。</p>
 * @method void setPartitionDescription(string $PartitionDescription) 设置<p>资源池对应的默认分区描述，透传给下游 ResourceManager 用于分区创建。</p>
 */
class ImportTkeClusterRequest extends AbstractModel
{
    /**
     * @var string <p>资源池对应的分区名称。</p>
     */
    public $PartitionName;

    /**
     * @var string <p>EMR 集群 ID（注意：不是 TKE 集群 ID）。</p>
     */
    public $EmrClusterId;

    /**
     * @var string <p>COS Bucket 名称（含 AppId 后缀），例如 my-bucket-1250000000。</p>
     */
    public $CosBucketId;

    /**
     * @var string <p>Prometheus 托管实例 ID，例如 prom-xxxxxxxx。</p>
     */
    public $PrometheusInstanceId;

    /**
     * @var string <p>负载均衡实例 ID，例如 lb-xxxxxxxx。</p>
     */
    public $LoadBalancerId;

    /**
     * @var string <p>容器日志 CLS 日志主题 ID。</p>
     */
    public $ContainerLogTopicId;

    /**
     * @var array <p>节点标签键值对（Key-Value 列表），用于将资源池调度限定到具备对应标签的 EMR-TKE 节点。</p>
     */
    public $NodeLabels;

    /**
     * @var string <p>资源池对应的默认分区描述，透传给下游 ResourceManager 用于分区创建。</p>
     */
    public $PartitionDescription;

    /**
     * @param string $PartitionName <p>资源池对应的分区名称。</p>
     * @param string $EmrClusterId <p>EMR 集群 ID（注意：不是 TKE 集群 ID）。</p>
     * @param string $CosBucketId <p>COS Bucket 名称（含 AppId 后缀），例如 my-bucket-1250000000。</p>
     * @param string $PrometheusInstanceId <p>Prometheus 托管实例 ID，例如 prom-xxxxxxxx。</p>
     * @param string $LoadBalancerId <p>负载均衡实例 ID，例如 lb-xxxxxxxx。</p>
     * @param string $ContainerLogTopicId <p>容器日志 CLS 日志主题 ID。</p>
     * @param array $NodeLabels <p>节点标签键值对（Key-Value 列表），用于将资源池调度限定到具备对应标签的 EMR-TKE 节点。</p>
     * @param string $PartitionDescription <p>资源池对应的默认分区描述，透传给下游 ResourceManager 用于分区创建。</p>
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
        if (array_key_exists("PartitionName",$param) and $param["PartitionName"] !== null) {
            $this->PartitionName = $param["PartitionName"];
        }

        if (array_key_exists("EmrClusterId",$param) and $param["EmrClusterId"] !== null) {
            $this->EmrClusterId = $param["EmrClusterId"];
        }

        if (array_key_exists("CosBucketId",$param) and $param["CosBucketId"] !== null) {
            $this->CosBucketId = $param["CosBucketId"];
        }

        if (array_key_exists("PrometheusInstanceId",$param) and $param["PrometheusInstanceId"] !== null) {
            $this->PrometheusInstanceId = $param["PrometheusInstanceId"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ContainerLogTopicId",$param) and $param["ContainerLogTopicId"] !== null) {
            $this->ContainerLogTopicId = $param["ContainerLogTopicId"];
        }

        if (array_key_exists("NodeLabels",$param) and $param["NodeLabels"] !== null) {
            $this->NodeLabels = [];
            foreach ($param["NodeLabels"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->NodeLabels, $obj);
            }
        }

        if (array_key_exists("PartitionDescription",$param) and $param["PartitionDescription"] !== null) {
            $this->PartitionDescription = $param["PartitionDescription"];
        }
    }
}
