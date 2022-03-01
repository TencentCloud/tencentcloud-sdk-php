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
 * ModifyUpstream请求参数结构体
 *
 * @method string getUpstreamId() 获取VPC通道唯一ID
 * @method void setUpstreamId(string $UpstreamId) 设置VPC通道唯一ID
 * @method string getUpstreamName() 获取VPC通道名字
 * @method void setUpstreamName(string $UpstreamName) 设置VPC通道名字
 * @method string getUpstreamDescription() 获取VPC通道描述
 * @method void setUpstreamDescription(string $UpstreamDescription) 设置VPC通道描述
 * @method string getScheme() 获取后端协议，HTTP, HTTPS其中之一
 * @method void setScheme(string $Scheme) 设置后端协议，HTTP, HTTPS其中之一
 * @method string getAlgorithm() 获取负载均衡算法目前支持ROUND_ROBIN
 * @method void setAlgorithm(string $Algorithm) 设置负载均衡算法目前支持ROUND_ROBIN
 * @method string getUniqVpcId() 获取VPC唯一ID
 * @method void setUniqVpcId(string $UniqVpcId) 设置VPC唯一ID
 * @method integer getRetries() 获取请求重试次数，默认3次
 * @method void setRetries(integer $Retries) 设置请求重试次数，默认3次
 * @method string getUpstreamHost() 获取请求到后端的，host头
 * @method void setUpstreamHost(string $UpstreamHost) 设置请求到后端的，host头
 * @method array getNodes() 获取后端节点列表
 * @method void setNodes(array $Nodes) 设置后端节点列表
 * @method array getK8sService() 获取k8s服务配置
 * @method void setK8sService(array $K8sService) 设置k8s服务配置
 */
class ModifyUpstreamRequest extends AbstractModel
{
    /**
     * @var string VPC通道唯一ID
     */
    public $UpstreamId;

    /**
     * @var string VPC通道名字
     */
    public $UpstreamName;

    /**
     * @var string VPC通道描述
     */
    public $UpstreamDescription;

    /**
     * @var string 后端协议，HTTP, HTTPS其中之一
     */
    public $Scheme;

    /**
     * @var string 负载均衡算法目前支持ROUND_ROBIN
     */
    public $Algorithm;

    /**
     * @var string VPC唯一ID
     */
    public $UniqVpcId;

    /**
     * @var integer 请求重试次数，默认3次
     */
    public $Retries;

    /**
     * @var string 请求到后端的，host头
     */
    public $UpstreamHost;

    /**
     * @var array 后端节点列表
     */
    public $Nodes;

    /**
     * @var array k8s服务配置
     */
    public $K8sService;

    /**
     * @param string $UpstreamId VPC通道唯一ID
     * @param string $UpstreamName VPC通道名字
     * @param string $UpstreamDescription VPC通道描述
     * @param string $Scheme 后端协议，HTTP, HTTPS其中之一
     * @param string $Algorithm 负载均衡算法目前支持ROUND_ROBIN
     * @param string $UniqVpcId VPC唯一ID
     * @param integer $Retries 请求重试次数，默认3次
     * @param string $UpstreamHost 请求到后端的，host头
     * @param array $Nodes 后端节点列表
     * @param array $K8sService k8s服务配置
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

        if (array_key_exists("UpstreamHost",$param) and $param["UpstreamHost"] !== null) {
            $this->UpstreamHost = $param["UpstreamHost"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = [];
            foreach ($param["Nodes"] as $key => $value){
                $obj = new UpstreamNode();
                $obj->deserialize($value);
                array_push($this->Nodes, $obj);
            }
        }

        if (array_key_exists("K8sService",$param) and $param["K8sService"] !== null) {
            $this->K8sService = [];
            foreach ($param["K8sService"] as $key => $value){
                $obj = new K8sService();
                $obj->deserialize($value);
                array_push($this->K8sService, $obj);
            }
        }
    }
}
