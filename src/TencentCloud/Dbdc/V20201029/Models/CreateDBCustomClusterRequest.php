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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBCustomCluster请求参数结构体
 *
 * @method ContainerNetwork getContainerNetwork() 获取<p>容器网络，在此集群的所有 POD 与此网络连通</p>
 * @method void setContainerNetwork(ContainerNetwork $ContainerNetwork) 设置<p>容器网络，在此集群的所有 POD 与此网络连通</p>
 * @method string getClusterName() 获取<p>集群名称</p><p>入参限制：最长128个字符，只能为中文，英文，下划线。</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p><p>入参限制：最长128个字符，只能为中文，英文，下划线。</p>
 * @method ApiServerNetwork getApiServerNetwork() 获取<p>集群的API Server的网络信息</p><p>入参限制：必须为此账号下拥有的网络地址，可以与容器网络保持一致。</p>
 * @method void setApiServerNetwork(ApiServerNetwork $ApiServerNetwork) 设置<p>集群的API Server的网络信息</p><p>入参限制：必须为此账号下拥有的网络地址，可以与容器网络保持一致。</p>
 * @method string getClusterDescription() 获取<p>集群描述</p>
 * @method void setClusterDescription(string $ClusterDescription) 设置<p>集群描述</p>
 * @method array getTags() 获取<p>集群标签</p>
 * @method void setTags(array $Tags) 设置<p>集群标签</p>
 * @method string getClientToken() 获取<p>客户端Token</p>
 * @method void setClientToken(string $ClientToken) 设置<p>客户端Token</p>
 */
class CreateDBCustomClusterRequest extends AbstractModel
{
    /**
     * @var ContainerNetwork <p>容器网络，在此集群的所有 POD 与此网络连通</p>
     */
    public $ContainerNetwork;

    /**
     * @var string <p>集群名称</p><p>入参限制：最长128个字符，只能为中文，英文，下划线。</p>
     */
    public $ClusterName;

    /**
     * @var ApiServerNetwork <p>集群的API Server的网络信息</p><p>入参限制：必须为此账号下拥有的网络地址，可以与容器网络保持一致。</p>
     */
    public $ApiServerNetwork;

    /**
     * @var string <p>集群描述</p>
     */
    public $ClusterDescription;

    /**
     * @var array <p>集群标签</p>
     */
    public $Tags;

    /**
     * @var string <p>客户端Token</p>
     */
    public $ClientToken;

    /**
     * @param ContainerNetwork $ContainerNetwork <p>容器网络，在此集群的所有 POD 与此网络连通</p>
     * @param string $ClusterName <p>集群名称</p><p>入参限制：最长128个字符，只能为中文，英文，下划线。</p>
     * @param ApiServerNetwork $ApiServerNetwork <p>集群的API Server的网络信息</p><p>入参限制：必须为此账号下拥有的网络地址，可以与容器网络保持一致。</p>
     * @param string $ClusterDescription <p>集群描述</p>
     * @param array $Tags <p>集群标签</p>
     * @param string $ClientToken <p>客户端Token</p>
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
        if (array_key_exists("ContainerNetwork",$param) and $param["ContainerNetwork"] !== null) {
            $this->ContainerNetwork = new ContainerNetwork();
            $this->ContainerNetwork->deserialize($param["ContainerNetwork"]);
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ApiServerNetwork",$param) and $param["ApiServerNetwork"] !== null) {
            $this->ApiServerNetwork = new ApiServerNetwork();
            $this->ApiServerNetwork->deserialize($param["ApiServerNetwork"]);
        }

        if (array_key_exists("ClusterDescription",$param) and $param["ClusterDescription"] !== null) {
            $this->ClusterDescription = $param["ClusterDescription"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
