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
 * DescribeTkeClusterImportInfo返回参数结构体
 *
 * @method string getPartitionName() 获取<p>分区名称。</p>
 * @method void setPartitionName(string $PartitionName) 设置<p>分区名称。</p>
 * @method string getEmrClusterId() 获取<p>EMR 集群 ID。</p>
 * @method void setEmrClusterId(string $EmrClusterId) 设置<p>EMR 集群 ID。</p>
 * @method string getCosBucketId() 获取<p>COS Bucket 名称。</p>
 * @method void setCosBucketId(string $CosBucketId) 设置<p>COS Bucket 名称。</p>
 * @method string getPrometheusInstanceId() 获取<p>Prometheus 托管实例 ID。</p>
 * @method void setPrometheusInstanceId(string $PrometheusInstanceId) 设置<p>Prometheus 托管实例 ID。</p>
 * @method string getPrometheusInstanceName() 获取<p>Prometheus 托管实例名称；查询失败或未命中返回空字符串。</p>
 * @method void setPrometheusInstanceName(string $PrometheusInstanceName) 设置<p>Prometheus 托管实例名称；查询失败或未命中返回空字符串。</p>
 * @method string getLoadBalancerId() 获取<p>负载均衡实例 ID。</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置<p>负载均衡实例 ID。</p>
 * @method string getLoadBalancerName() 获取<p>负载均衡实例名称；查询失败或未命中返回空字符串。</p>
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置<p>负载均衡实例名称；查询失败或未命中返回空字符串。</p>
 * @method string getContainerLogTopicId() 获取<p>容器日志 CLS 日志主题 ID。</p>
 * @method void setContainerLogTopicId(string $ContainerLogTopicId) 设置<p>容器日志 CLS 日志主题 ID。</p>
 * @method string getContainerLogTopicName() 获取<p>容器日志 CLS 日志主题名称；查询失败或未命中返回空字符串。</p>
 * @method void setContainerLogTopicName(string $ContainerLogTopicName) 设置<p>容器日志 CLS 日志主题名称；查询失败或未命中返回空字符串。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTkeClusterImportInfoResponse extends AbstractModel
{
    /**
     * @var string <p>分区名称。</p>
     */
    public $PartitionName;

    /**
     * @var string <p>EMR 集群 ID。</p>
     */
    public $EmrClusterId;

    /**
     * @var string <p>COS Bucket 名称。</p>
     */
    public $CosBucketId;

    /**
     * @var string <p>Prometheus 托管实例 ID。</p>
     */
    public $PrometheusInstanceId;

    /**
     * @var string <p>Prometheus 托管实例名称；查询失败或未命中返回空字符串。</p>
     */
    public $PrometheusInstanceName;

    /**
     * @var string <p>负载均衡实例 ID。</p>
     */
    public $LoadBalancerId;

    /**
     * @var string <p>负载均衡实例名称；查询失败或未命中返回空字符串。</p>
     */
    public $LoadBalancerName;

    /**
     * @var string <p>容器日志 CLS 日志主题 ID。</p>
     */
    public $ContainerLogTopicId;

    /**
     * @var string <p>容器日志 CLS 日志主题名称；查询失败或未命中返回空字符串。</p>
     */
    public $ContainerLogTopicName;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $PartitionName <p>分区名称。</p>
     * @param string $EmrClusterId <p>EMR 集群 ID。</p>
     * @param string $CosBucketId <p>COS Bucket 名称。</p>
     * @param string $PrometheusInstanceId <p>Prometheus 托管实例 ID。</p>
     * @param string $PrometheusInstanceName <p>Prometheus 托管实例名称；查询失败或未命中返回空字符串。</p>
     * @param string $LoadBalancerId <p>负载均衡实例 ID。</p>
     * @param string $LoadBalancerName <p>负载均衡实例名称；查询失败或未命中返回空字符串。</p>
     * @param string $ContainerLogTopicId <p>容器日志 CLS 日志主题 ID。</p>
     * @param string $ContainerLogTopicName <p>容器日志 CLS 日志主题名称；查询失败或未命中返回空字符串。</p>
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

        if (array_key_exists("PrometheusInstanceName",$param) and $param["PrometheusInstanceName"] !== null) {
            $this->PrometheusInstanceName = $param["PrometheusInstanceName"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("ContainerLogTopicId",$param) and $param["ContainerLogTopicId"] !== null) {
            $this->ContainerLogTopicId = $param["ContainerLogTopicId"];
        }

        if (array_key_exists("ContainerLogTopicName",$param) and $param["ContainerLogTopicName"] !== null) {
            $this->ContainerLogTopicName = $param["ContainerLogTopicName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
