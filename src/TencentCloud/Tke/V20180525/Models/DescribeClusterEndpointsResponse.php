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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterEndpoints返回参数结构体
 *
 * @method string getCertificationAuthority() 获取集群APIServer的CA证书
 * @method void setCertificationAuthority(string $CertificationAuthority) 设置集群APIServer的CA证书
 * @method string getClusterExternalEndpoint() 获取集群APIServer的外网访问地址
 * @method void setClusterExternalEndpoint(string $ClusterExternalEndpoint) 设置集群APIServer的外网访问地址
 * @method string getClusterIntranetEndpoint() 获取集群APIServer的内网访问地址
 * @method void setClusterIntranetEndpoint(string $ClusterIntranetEndpoint) 设置集群APIServer的内网访问地址
 * @method string getClusterDomain() 获取集群APIServer的域名
 * @method void setClusterDomain(string $ClusterDomain) 设置集群APIServer的域名
 * @method array getClusterExternalACL() 获取集群APIServer的外网访问ACL列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterExternalACL(array $ClusterExternalACL) 设置集群APIServer的外网访问ACL列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterExternalDomain() 获取外网域名
 * @method void setClusterExternalDomain(string $ClusterExternalDomain) 设置外网域名
 * @method string getClusterIntranetDomain() 获取内网域名
 * @method void setClusterIntranetDomain(string $ClusterIntranetDomain) 设置内网域名
 * @method string getSecurityGroup() 获取外网安全组
 * @method void setSecurityGroup(string $SecurityGroup) 设置外网安全组
 * @method string getClusterIntranetSubnetId() 获取内网访问所属子网
 * @method void setClusterIntranetSubnetId(string $ClusterIntranetSubnetId) 设置内网访问所属子网
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterEndpointsResponse extends AbstractModel
{
    /**
     * @var string 集群APIServer的CA证书
     */
    public $CertificationAuthority;

    /**
     * @var string 集群APIServer的外网访问地址
     */
    public $ClusterExternalEndpoint;

    /**
     * @var string 集群APIServer的内网访问地址
     */
    public $ClusterIntranetEndpoint;

    /**
     * @var string 集群APIServer的域名
     */
    public $ClusterDomain;

    /**
     * @var array 集群APIServer的外网访问ACL列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterExternalACL;

    /**
     * @var string 外网域名
     */
    public $ClusterExternalDomain;

    /**
     * @var string 内网域名
     */
    public $ClusterIntranetDomain;

    /**
     * @var string 外网安全组
     */
    public $SecurityGroup;

    /**
     * @var string 内网访问所属子网
     */
    public $ClusterIntranetSubnetId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CertificationAuthority 集群APIServer的CA证书
     * @param string $ClusterExternalEndpoint 集群APIServer的外网访问地址
     * @param string $ClusterIntranetEndpoint 集群APIServer的内网访问地址
     * @param string $ClusterDomain 集群APIServer的域名
     * @param array $ClusterExternalACL 集群APIServer的外网访问ACL列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterExternalDomain 外网域名
     * @param string $ClusterIntranetDomain 内网域名
     * @param string $SecurityGroup 外网安全组
     * @param string $ClusterIntranetSubnetId 内网访问所属子网
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
        if (array_key_exists("CertificationAuthority",$param) and $param["CertificationAuthority"] !== null) {
            $this->CertificationAuthority = $param["CertificationAuthority"];
        }

        if (array_key_exists("ClusterExternalEndpoint",$param) and $param["ClusterExternalEndpoint"] !== null) {
            $this->ClusterExternalEndpoint = $param["ClusterExternalEndpoint"];
        }

        if (array_key_exists("ClusterIntranetEndpoint",$param) and $param["ClusterIntranetEndpoint"] !== null) {
            $this->ClusterIntranetEndpoint = $param["ClusterIntranetEndpoint"];
        }

        if (array_key_exists("ClusterDomain",$param) and $param["ClusterDomain"] !== null) {
            $this->ClusterDomain = $param["ClusterDomain"];
        }

        if (array_key_exists("ClusterExternalACL",$param) and $param["ClusterExternalACL"] !== null) {
            $this->ClusterExternalACL = $param["ClusterExternalACL"];
        }

        if (array_key_exists("ClusterExternalDomain",$param) and $param["ClusterExternalDomain"] !== null) {
            $this->ClusterExternalDomain = $param["ClusterExternalDomain"];
        }

        if (array_key_exists("ClusterIntranetDomain",$param) and $param["ClusterIntranetDomain"] !== null) {
            $this->ClusterIntranetDomain = $param["ClusterIntranetDomain"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("ClusterIntranetSubnetId",$param) and $param["ClusterIntranetSubnetId"] !== null) {
            $this->ClusterIntranetSubnetId = $param["ClusterIntranetSubnetId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
