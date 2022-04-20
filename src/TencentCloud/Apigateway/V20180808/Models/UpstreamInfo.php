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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 后端通道详细信息
 *
 * @method string getUpstreamId() 获取后端通道唯一ID
 * @method void setUpstreamId(string $UpstreamId) 设置后端通道唯一ID
 * @method string getUpstreamName() 获取后端通道名字
 * @method void setUpstreamName(string $UpstreamName) 设置后端通道名字
 * @method string getUpstreamDescription() 获取后端通道描述
 * @method void setUpstreamDescription(string $UpstreamDescription) 设置后端通道描述
 * @method string getScheme() 获取后端协议，取值范围：HTTP, HTTPS
 * @method void setScheme(string $Scheme) 设置后端协议，取值范围：HTTP, HTTPS
 * @method string getAlgorithm() 获取负载均衡算法，取值范围：ROUND_ROBIN
 * @method void setAlgorithm(string $Algorithm) 设置负载均衡算法，取值范围：ROUND_ROBIN
 * @method string getUniqVpcId() 获取VPC唯一ID
 * @method void setUniqVpcId(string $UniqVpcId) 设置VPC唯一ID
 * @method integer getRetries() 获取请求重试次数
 * @method void setRetries(integer $Retries) 设置请求重试次数
 * @method array getNodes() 获取后端节点
 * @method void setNodes(array $Nodes) 设置后端节点
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method UpstreamHealthChecker getHealthChecker() 获取健康检查配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthChecker(UpstreamHealthChecker $HealthChecker) 设置健康检查配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpstreamType() 获取后端的类型，取值范围：IP_PORT, K8S
 * @method void setUpstreamType(string $UpstreamType) 设置后端的类型，取值范围：IP_PORT, K8S
 * @method array getK8sServices() 获取K8S容器服务配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setK8sServices(array $K8sServices) 设置K8S容器服务配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpstreamHost() 获取网关转发给后端的Host请求头
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamHost(string $UpstreamHost) 设置网关转发给后端的Host请求头
注意：此字段可能返回 null，表示取不到有效值。
 */
class UpstreamInfo extends AbstractModel
{
    /**
     * @var string 后端通道唯一ID
     */
    public $UpstreamId;

    /**
     * @var string 后端通道名字
     */
    public $UpstreamName;

    /**
     * @var string 后端通道描述
     */
    public $UpstreamDescription;

    /**
     * @var string 后端协议，取值范围：HTTP, HTTPS
     */
    public $Scheme;

    /**
     * @var string 负载均衡算法，取值范围：ROUND_ROBIN
     */
    public $Algorithm;

    /**
     * @var string VPC唯一ID
     */
    public $UniqVpcId;

    /**
     * @var integer 请求重试次数
     */
    public $Retries;

    /**
     * @var array 后端节点
     */
    public $Nodes;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var UpstreamHealthChecker 健康检查配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthChecker;

    /**
     * @var string 后端的类型，取值范围：IP_PORT, K8S
     */
    public $UpstreamType;

    /**
     * @var array K8S容器服务配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $K8sServices;

    /**
     * @var string 网关转发给后端的Host请求头
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamHost;

    /**
     * @param string $UpstreamId 后端通道唯一ID
     * @param string $UpstreamName 后端通道名字
     * @param string $UpstreamDescription 后端通道描述
     * @param string $Scheme 后端协议，取值范围：HTTP, HTTPS
     * @param string $Algorithm 负载均衡算法，取值范围：ROUND_ROBIN
     * @param string $UniqVpcId VPC唯一ID
     * @param integer $Retries 请求重试次数
     * @param array $Nodes 后端节点
     * @param string $CreatedTime 创建时间
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param UpstreamHealthChecker $HealthChecker 健康检查配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpstreamType 后端的类型，取值范围：IP_PORT, K8S
     * @param array $K8sServices K8S容器服务配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpstreamHost 网关转发给后端的Host请求头
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("UpstreamId",$param) and $param["UpstreamId"] !== null) {
            $this->UpstreamId = $param["UpstreamId"];
        }

        if (array_key_exists("UpstreamName",$param) and $param["UpstreamName"] !== null) {
            $this->UpstreamName = $param["UpstreamName"];
        }

        if (array_key_exists("UpstreamDescription",$param) and $param["UpstreamDescription"] !== null) {
            $this->UpstreamDescription = $param["UpstreamDescription"];
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("Retries",$param) and $param["Retries"] !== null) {
            $this->Retries = $param["Retries"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = [];
            foreach ($param["Nodes"] as $key => $value){
                $obj = new UpstreamNode();
                $obj->deserialize($value);
                array_push($this->Nodes, $obj);
            }
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("HealthChecker",$param) and $param["HealthChecker"] !== null) {
            $this->HealthChecker = new UpstreamHealthChecker();
            $this->HealthChecker->deserialize($param["HealthChecker"]);
        }

        if (array_key_exists("UpstreamType",$param) and $param["UpstreamType"] !== null) {
            $this->UpstreamType = $param["UpstreamType"];
        }

        if (array_key_exists("K8sServices",$param) and $param["K8sServices"] !== null) {
            $this->K8sServices = [];
            foreach ($param["K8sServices"] as $key => $value){
                $obj = new K8sService();
                $obj->deserialize($value);
                array_push($this->K8sServices, $obj);
            }
        }

        if (array_key_exists("UpstreamHost",$param) and $param["UpstreamHost"] !== null) {
            $this->UpstreamHost = $param["UpstreamHost"];
        }
    }
}
