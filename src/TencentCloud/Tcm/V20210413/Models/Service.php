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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Service信息
 *
 * @method string getType() 获取ClusterIP/NodePort/LoadBalancer
 * @method void setType(string $Type) 设置ClusterIP/NodePort/LoadBalancer
 * @method boolean getCLBDirectAccess() 获取是否开启LB直通Pod
 * @method void setCLBDirectAccess(boolean $CLBDirectAccess) 设置是否开启LB直通Pod
 * @method string getExternalTrafficPolicy() 获取服务是否希望将外部流量路由到节点本地或集群范围的端点。 有两个可用选项：Cluster（默认）和 Local。Cluster 隐藏了客户端源 IP，可能导致第二跳到另一个节点；Local 保留客户端源 IP 并避免 LoadBalancer 和 NodePort 类型服务的第二跳。
 * @method void setExternalTrafficPolicy(string $ExternalTrafficPolicy) 设置服务是否希望将外部流量路由到节点本地或集群范围的端点。 有两个可用选项：Cluster（默认）和 Local。Cluster 隐藏了客户端源 IP，可能导致第二跳到另一个节点；Local 保留客户端源 IP 并避免 LoadBalancer 和 NodePort 类型服务的第二跳。
 */
class Service extends AbstractModel
{
    /**
     * @var string ClusterIP/NodePort/LoadBalancer
     */
    public $Type;

    /**
     * @var boolean 是否开启LB直通Pod
     */
    public $CLBDirectAccess;

    /**
     * @var string 服务是否希望将外部流量路由到节点本地或集群范围的端点。 有两个可用选项：Cluster（默认）和 Local。Cluster 隐藏了客户端源 IP，可能导致第二跳到另一个节点；Local 保留客户端源 IP 并避免 LoadBalancer 和 NodePort 类型服务的第二跳。
     */
    public $ExternalTrafficPolicy;

    /**
     * @param string $Type ClusterIP/NodePort/LoadBalancer
     * @param boolean $CLBDirectAccess 是否开启LB直通Pod
     * @param string $ExternalTrafficPolicy 服务是否希望将外部流量路由到节点本地或集群范围的端点。 有两个可用选项：Cluster（默认）和 Local。Cluster 隐藏了客户端源 IP，可能导致第二跳到另一个节点；Local 保留客户端源 IP 并避免 LoadBalancer 和 NodePort 类型服务的第二跳。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CLBDirectAccess",$param) and $param["CLBDirectAccess"] !== null) {
            $this->CLBDirectAccess = $param["CLBDirectAccess"];
        }

        if (array_key_exists("ExternalTrafficPolicy",$param) and $param["ExternalTrafficPolicy"] !== null) {
            $this->ExternalTrafficPolicy = $param["ExternalTrafficPolicy"];
        }
    }
}
