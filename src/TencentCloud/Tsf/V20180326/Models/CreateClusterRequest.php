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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCluster请求参数结构体
 *
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getClusterType() 获取指定集群类型，目前支持：
- `V`：虚拟机集群
- `C`：容器集群
- `S`：Serverless 集群
 * @method void setClusterType(string $ClusterType) 设置指定集群类型，目前支持：
- `V`：虚拟机集群
- `C`：容器集群
- `S`：Serverless 集群
 * @method string getVpcId() 获取私有网络ID，可通过调用[DescribeVpcEx](https://cloud.tencent.com/document/api/215/1372)查询已创建的私有网络列表或登录控制台进行查看；也可以调用[CreateVpc](https://cloud.tencent.com/document/api/215/1309)创建新的私有网络。
 * @method void setVpcId(string $VpcId) 设置私有网络ID，可通过调用[DescribeVpcEx](https://cloud.tencent.com/document/api/215/1372)查询已创建的私有网络列表或登录控制台进行查看；也可以调用[CreateVpc](https://cloud.tencent.com/document/api/215/1309)创建新的私有网络。
 * @method string getClusterCIDR() 获取分配给集群容器和服务IP的CIDR
 * @method void setClusterCIDR(string $ClusterCIDR) 设置分配给集群容器和服务IP的CIDR
 * @method string getClusterDesc() 获取集群备注
 * @method void setClusterDesc(string $ClusterDesc) 设置集群备注
 * @method string getTsfRegionId() 获取集群所属TSF地域
 * @method void setTsfRegionId(string $TsfRegionId) 设置集群所属TSF地域
 * @method string getTsfZoneId() 获取集群所属TSF可用区
 * @method void setTsfZoneId(string $TsfZoneId) 设置集群所属TSF可用区
 * @method string getSubnetId() 获取私有网络子网ID
 * @method void setSubnetId(string $SubnetId) 设置私有网络子网ID
 * @method string getClusterVersion() 获取集群版本
 * @method void setClusterVersion(string $ClusterVersion) 设置集群版本
 * @method integer getMaxNodePodNum() 获取集群中每个Node上最大的Pod数量。取值范围4～256。不为2的幂值时会向上取最接近的2的幂值。
 * @method void setMaxNodePodNum(integer $MaxNodePodNum) 设置集群中每个Node上最大的Pod数量。取值范围4～256。不为2的幂值时会向上取最接近的2的幂值。
 * @method integer getMaxClusterServiceNum() 获取集群最大的service数量。取值范围32～32768，不为2的幂值时会向上取最接近的2的幂值。
 * @method void setMaxClusterServiceNum(integer $MaxClusterServiceNum) 设置集群最大的service数量。取值范围32～32768，不为2的幂值时会向上取最接近的2的幂值。
 * @method string getProgramId() 获取需要绑定的数据集ID
 * @method void setProgramId(string $ProgramId) 设置需要绑定的数据集ID
 * @method string getKuberneteApiServer() 获取api地址
 * @method void setKuberneteApiServer(string $KuberneteApiServer) 设置api地址
 * @method string getKuberneteNativeType() 获取K : kubeconfig, S : service account (公有云不支持通过kubeconfig和service account的方式创建集群)
 * @method void setKuberneteNativeType(string $KuberneteNativeType) 设置K : kubeconfig, S : service account (公有云不支持通过kubeconfig和service account的方式创建集群)
 * @method string getKuberneteNativeSecret() 获取Kubernetes 原生 Secret 资源对象
 * @method void setKuberneteNativeSecret(string $KuberneteNativeSecret) 设置Kubernetes 原生 Secret 资源对象
 * @method array getProgramIdList() 获取需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
 * @method void setProgramIdList(array $ProgramIdList) 设置需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
 * @method boolean getEnableLogCollection() 获取是否开启cls日志功能
 * @method void setEnableLogCollection(boolean $EnableLogCollection) 设置是否开启cls日志功能
 */
class CreateClusterRequest extends AbstractModel
{
    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 指定集群类型，目前支持：
- `V`：虚拟机集群
- `C`：容器集群
- `S`：Serverless 集群
     */
    public $ClusterType;

    /**
     * @var string 私有网络ID，可通过调用[DescribeVpcEx](https://cloud.tencent.com/document/api/215/1372)查询已创建的私有网络列表或登录控制台进行查看；也可以调用[CreateVpc](https://cloud.tencent.com/document/api/215/1309)创建新的私有网络。
     */
    public $VpcId;

    /**
     * @var string 分配给集群容器和服务IP的CIDR
     */
    public $ClusterCIDR;

    /**
     * @var string 集群备注
     */
    public $ClusterDesc;

    /**
     * @var string 集群所属TSF地域
     */
    public $TsfRegionId;

    /**
     * @var string 集群所属TSF可用区
     */
    public $TsfZoneId;

    /**
     * @var string 私有网络子网ID
     */
    public $SubnetId;

    /**
     * @var string 集群版本
     */
    public $ClusterVersion;

    /**
     * @var integer 集群中每个Node上最大的Pod数量。取值范围4～256。不为2的幂值时会向上取最接近的2的幂值。
     */
    public $MaxNodePodNum;

    /**
     * @var integer 集群最大的service数量。取值范围32～32768，不为2的幂值时会向上取最接近的2的幂值。
     */
    public $MaxClusterServiceNum;

    /**
     * @var string 需要绑定的数据集ID
     */
    public $ProgramId;

    /**
     * @var string api地址
     */
    public $KuberneteApiServer;

    /**
     * @var string K : kubeconfig, S : service account (公有云不支持通过kubeconfig和service account的方式创建集群)
     */
    public $KuberneteNativeType;

    /**
     * @var string Kubernetes 原生 Secret 资源对象
     */
    public $KuberneteNativeSecret;

    /**
     * @var array 需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
     */
    public $ProgramIdList;

    /**
     * @var boolean 是否开启cls日志功能
     */
    public $EnableLogCollection;

    /**
     * @param string $ClusterName 集群名称
     * @param string $ClusterType 指定集群类型，目前支持：
- `V`：虚拟机集群
- `C`：容器集群
- `S`：Serverless 集群
     * @param string $VpcId 私有网络ID，可通过调用[DescribeVpcEx](https://cloud.tencent.com/document/api/215/1372)查询已创建的私有网络列表或登录控制台进行查看；也可以调用[CreateVpc](https://cloud.tencent.com/document/api/215/1309)创建新的私有网络。
     * @param string $ClusterCIDR 分配给集群容器和服务IP的CIDR
     * @param string $ClusterDesc 集群备注
     * @param string $TsfRegionId 集群所属TSF地域
     * @param string $TsfZoneId 集群所属TSF可用区
     * @param string $SubnetId 私有网络子网ID
     * @param string $ClusterVersion 集群版本
     * @param integer $MaxNodePodNum 集群中每个Node上最大的Pod数量。取值范围4～256。不为2的幂值时会向上取最接近的2的幂值。
     * @param integer $MaxClusterServiceNum 集群最大的service数量。取值范围32～32768，不为2的幂值时会向上取最接近的2的幂值。
     * @param string $ProgramId 需要绑定的数据集ID
     * @param string $KuberneteApiServer api地址
     * @param string $KuberneteNativeType K : kubeconfig, S : service account (公有云不支持通过kubeconfig和service account的方式创建集群)
     * @param string $KuberneteNativeSecret Kubernetes 原生 Secret 资源对象
     * @param array $ProgramIdList 需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
     * @param boolean $EnableLogCollection 是否开启cls日志功能
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
        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ClusterCIDR",$param) and $param["ClusterCIDR"] !== null) {
            $this->ClusterCIDR = $param["ClusterCIDR"];
        }

        if (array_key_exists("ClusterDesc",$param) and $param["ClusterDesc"] !== null) {
            $this->ClusterDesc = $param["ClusterDesc"];
        }

        if (array_key_exists("TsfRegionId",$param) and $param["TsfRegionId"] !== null) {
            $this->TsfRegionId = $param["TsfRegionId"];
        }

        if (array_key_exists("TsfZoneId",$param) and $param["TsfZoneId"] !== null) {
            $this->TsfZoneId = $param["TsfZoneId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("MaxNodePodNum",$param) and $param["MaxNodePodNum"] !== null) {
            $this->MaxNodePodNum = $param["MaxNodePodNum"];
        }

        if (array_key_exists("MaxClusterServiceNum",$param) and $param["MaxClusterServiceNum"] !== null) {
            $this->MaxClusterServiceNum = $param["MaxClusterServiceNum"];
        }

        if (array_key_exists("ProgramId",$param) and $param["ProgramId"] !== null) {
            $this->ProgramId = $param["ProgramId"];
        }

        if (array_key_exists("KuberneteApiServer",$param) and $param["KuberneteApiServer"] !== null) {
            $this->KuberneteApiServer = $param["KuberneteApiServer"];
        }

        if (array_key_exists("KuberneteNativeType",$param) and $param["KuberneteNativeType"] !== null) {
            $this->KuberneteNativeType = $param["KuberneteNativeType"];
        }

        if (array_key_exists("KuberneteNativeSecret",$param) and $param["KuberneteNativeSecret"] !== null) {
            $this->KuberneteNativeSecret = $param["KuberneteNativeSecret"];
        }

        if (array_key_exists("ProgramIdList",$param) and $param["ProgramIdList"] !== null) {
            $this->ProgramIdList = $param["ProgramIdList"];
        }

        if (array_key_exists("EnableLogCollection",$param) and $param["EnableLogCollection"] !== null) {
            $this->EnableLogCollection = $param["EnableLogCollection"];
        }
    }
}
