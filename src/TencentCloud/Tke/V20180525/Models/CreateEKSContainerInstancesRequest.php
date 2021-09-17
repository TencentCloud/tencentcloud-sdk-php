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
 * CreateEKSContainerInstances请求参数结构体
 *
 * @method array getContainers() 获取容器组
 * @method void setContainers(array $Containers) 设置容器组
 * @method string getEksCiName() 获取EKS Container Instance容器实例名称
 * @method void setEksCiName(string $EksCiName) 设置EKS Container Instance容器实例名称
 * @method array getSecurityGroupIds() 获取指定新创建实例所属于的安全组Id
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置指定新创建实例所属于的安全组Id
 * @method string getSubnetId() 获取实例所属子网Id
 * @method void setSubnetId(string $SubnetId) 设置实例所属子网Id
 * @method string getVpcId() 获取实例所属VPC的Id
 * @method void setVpcId(string $VpcId) 设置实例所属VPC的Id
 * @method float getMemory() 获取内存，单位：GiB。可参考[资源规格](https://cloud.tencent.com/document/product/457/39808)文档
 * @method void setMemory(float $Memory) 设置内存，单位：GiB。可参考[资源规格](https://cloud.tencent.com/document/product/457/39808)文档
 * @method float getCpu() 获取CPU，单位：核。可参考[资源规格](https://cloud.tencent.com/document/product/457/39808)文档
 * @method void setCpu(float $Cpu) 设置CPU，单位：核。可参考[资源规格](https://cloud.tencent.com/document/product/457/39808)文档
 * @method string getRestartPolicy() 获取实例重启策略： Always(总是重启)、Never(从不重启)、OnFailure(失败时重启)，默认：Always。
 * @method void setRestartPolicy(string $RestartPolicy) 设置实例重启策略： Always(总是重启)、Never(从不重启)、OnFailure(失败时重启)，默认：Always。
 * @method array getImageRegistryCredentials() 获取镜像仓库凭证数组
 * @method void setImageRegistryCredentials(array $ImageRegistryCredentials) 设置镜像仓库凭证数组
 * @method EksCiVolume getEksCiVolume() 获取数据卷，包含NfsVolume数组和CbsVolume数组
 * @method void setEksCiVolume(EksCiVolume $EksCiVolume) 设置数据卷，包含NfsVolume数组和CbsVolume数组
 * @method integer getReplicas() 获取实例副本数，默认为1
 * @method void setReplicas(integer $Replicas) 设置实例副本数，默认为1
 * @method array getInitContainers() 获取Init 容器
 * @method void setInitContainers(array $InitContainers) 设置Init 容器
 * @method DNSConfig getDnsConfig() 获取自定义DNS配置
 * @method void setDnsConfig(DNSConfig $DnsConfig) 设置自定义DNS配置
 * @method array getExistedEipIds() 获取用来绑定容器实例的已有EIP的列表。如传值，需要保证数值和Replicas相等。
另外此参数和AutoCreateEipAttribute互斥。
 * @method void setExistedEipIds(array $ExistedEipIds) 设置用来绑定容器实例的已有EIP的列表。如传值，需要保证数值和Replicas相等。
另外此参数和AutoCreateEipAttribute互斥。
 * @method EipAttribute getAutoCreateEipAttribute() 获取自动创建EIP的可选参数。若传此参数，则会自动创建EIP。
另外此参数和ExistedEipIds互斥
 * @method void setAutoCreateEipAttribute(EipAttribute $AutoCreateEipAttribute) 设置自动创建EIP的可选参数。若传此参数，则会自动创建EIP。
另外此参数和ExistedEipIds互斥
 * @method boolean getAutoCreateEip() 获取是否为容器实例自动创建EIP，默认为false。若传true，则此参数和ExistedEipIds互斥
 * @method void setAutoCreateEip(boolean $AutoCreateEip) 设置是否为容器实例自动创建EIP，默认为false。若传true，则此参数和ExistedEipIds互斥
 * @method string getCpuType() 获取Pod 所需的 CPU 资源型号，如果不填写则默认不强制指定 CPU 类型。目前支持型号如下：
intel
amd
- 支持优先级顺序写法，如 “amd,intel” 表示优先创建 amd 资源 Pod，如果所选地域可用区 amd 资源不足，则会创建 intel 资源 Pod。
 * @method void setCpuType(string $CpuType) 设置Pod 所需的 CPU 资源型号，如果不填写则默认不强制指定 CPU 类型。目前支持型号如下：
intel
amd
- 支持优先级顺序写法，如 “amd,intel” 表示优先创建 amd 资源 Pod，如果所选地域可用区 amd 资源不足，则会创建 intel 资源 Pod。
 * @method string getGpuType() 获取容器实例所需的 GPU 资源型号，目前支持型号如下：
1/4\*V100
1/2\*V100
V100
1/4\*T4
1/2\*T4
T4
 * @method void setGpuType(string $GpuType) 设置容器实例所需的 GPU 资源型号，目前支持型号如下：
1/4\*V100
1/2\*V100
V100
1/4\*T4
1/2\*T4
T4
 * @method integer getGpuCount() 获取Pod 所需的 GPU 数量，如填写，请确保为支持的规格。默认单位为卡，无需再次注明。
 * @method void setGpuCount(integer $GpuCount) 设置Pod 所需的 GPU 数量，如填写，请确保为支持的规格。默认单位为卡，无需再次注明。
 * @method string getCamRoleName() 获取为容器实例关联 CAM 角色，value 填写 CAM 角色名称，容器实例可获取该 CAM 角色包含的权限策略，方便 容器实例 内的程序进行如购买资源、读写存储等云资源操作。
 * @method void setCamRoleName(string $CamRoleName) 设置为容器实例关联 CAM 角色，value 填写 CAM 角色名称，容器实例可获取该 CAM 角色包含的权限策略，方便 容器实例 内的程序进行如购买资源、读写存储等云资源操作。
 */
class CreateEKSContainerInstancesRequest extends AbstractModel
{
    /**
     * @var array 容器组
     */
    public $Containers;

    /**
     * @var string EKS Container Instance容器实例名称
     */
    public $EksCiName;

    /**
     * @var array 指定新创建实例所属于的安全组Id
     */
    public $SecurityGroupIds;

    /**
     * @var string 实例所属子网Id
     */
    public $SubnetId;

    /**
     * @var string 实例所属VPC的Id
     */
    public $VpcId;

    /**
     * @var float 内存，单位：GiB。可参考[资源规格](https://cloud.tencent.com/document/product/457/39808)文档
     */
    public $Memory;

    /**
     * @var float CPU，单位：核。可参考[资源规格](https://cloud.tencent.com/document/product/457/39808)文档
     */
    public $Cpu;

    /**
     * @var string 实例重启策略： Always(总是重启)、Never(从不重启)、OnFailure(失败时重启)，默认：Always。
     */
    public $RestartPolicy;

    /**
     * @var array 镜像仓库凭证数组
     */
    public $ImageRegistryCredentials;

    /**
     * @var EksCiVolume 数据卷，包含NfsVolume数组和CbsVolume数组
     */
    public $EksCiVolume;

    /**
     * @var integer 实例副本数，默认为1
     */
    public $Replicas;

    /**
     * @var array Init 容器
     */
    public $InitContainers;

    /**
     * @var DNSConfig 自定义DNS配置
     */
    public $DnsConfig;

    /**
     * @var array 用来绑定容器实例的已有EIP的列表。如传值，需要保证数值和Replicas相等。
另外此参数和AutoCreateEipAttribute互斥。
     */
    public $ExistedEipIds;

    /**
     * @var EipAttribute 自动创建EIP的可选参数。若传此参数，则会自动创建EIP。
另外此参数和ExistedEipIds互斥
     */
    public $AutoCreateEipAttribute;

    /**
     * @var boolean 是否为容器实例自动创建EIP，默认为false。若传true，则此参数和ExistedEipIds互斥
     */
    public $AutoCreateEip;

    /**
     * @var string Pod 所需的 CPU 资源型号，如果不填写则默认不强制指定 CPU 类型。目前支持型号如下：
intel
amd
- 支持优先级顺序写法，如 “amd,intel” 表示优先创建 amd 资源 Pod，如果所选地域可用区 amd 资源不足，则会创建 intel 资源 Pod。
     */
    public $CpuType;

    /**
     * @var string 容器实例所需的 GPU 资源型号，目前支持型号如下：
1/4\*V100
1/2\*V100
V100
1/4\*T4
1/2\*T4
T4
     */
    public $GpuType;

    /**
     * @var integer Pod 所需的 GPU 数量，如填写，请确保为支持的规格。默认单位为卡，无需再次注明。
     */
    public $GpuCount;

    /**
     * @var string 为容器实例关联 CAM 角色，value 填写 CAM 角色名称，容器实例可获取该 CAM 角色包含的权限策略，方便 容器实例 内的程序进行如购买资源、读写存储等云资源操作。
     */
    public $CamRoleName;

    /**
     * @param array $Containers 容器组
     * @param string $EksCiName EKS Container Instance容器实例名称
     * @param array $SecurityGroupIds 指定新创建实例所属于的安全组Id
     * @param string $SubnetId 实例所属子网Id
     * @param string $VpcId 实例所属VPC的Id
     * @param float $Memory 内存，单位：GiB。可参考[资源规格](https://cloud.tencent.com/document/product/457/39808)文档
     * @param float $Cpu CPU，单位：核。可参考[资源规格](https://cloud.tencent.com/document/product/457/39808)文档
     * @param string $RestartPolicy 实例重启策略： Always(总是重启)、Never(从不重启)、OnFailure(失败时重启)，默认：Always。
     * @param array $ImageRegistryCredentials 镜像仓库凭证数组
     * @param EksCiVolume $EksCiVolume 数据卷，包含NfsVolume数组和CbsVolume数组
     * @param integer $Replicas 实例副本数，默认为1
     * @param array $InitContainers Init 容器
     * @param DNSConfig $DnsConfig 自定义DNS配置
     * @param array $ExistedEipIds 用来绑定容器实例的已有EIP的列表。如传值，需要保证数值和Replicas相等。
另外此参数和AutoCreateEipAttribute互斥。
     * @param EipAttribute $AutoCreateEipAttribute 自动创建EIP的可选参数。若传此参数，则会自动创建EIP。
另外此参数和ExistedEipIds互斥
     * @param boolean $AutoCreateEip 是否为容器实例自动创建EIP，默认为false。若传true，则此参数和ExistedEipIds互斥
     * @param string $CpuType Pod 所需的 CPU 资源型号，如果不填写则默认不强制指定 CPU 类型。目前支持型号如下：
intel
amd
- 支持优先级顺序写法，如 “amd,intel” 表示优先创建 amd 资源 Pod，如果所选地域可用区 amd 资源不足，则会创建 intel 资源 Pod。
     * @param string $GpuType 容器实例所需的 GPU 资源型号，目前支持型号如下：
1/4\*V100
1/2\*V100
V100
1/4\*T4
1/2\*T4
T4
     * @param integer $GpuCount Pod 所需的 GPU 数量，如填写，请确保为支持的规格。默认单位为卡，无需再次注明。
     * @param string $CamRoleName 为容器实例关联 CAM 角色，value 填写 CAM 角色名称，容器实例可获取该 CAM 角色包含的权限策略，方便 容器实例 内的程序进行如购买资源、读写存储等云资源操作。
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
        if (array_key_exists("Containers",$param) and $param["Containers"] !== null) {
            $this->Containers = [];
            foreach ($param["Containers"] as $key => $value){
                $obj = new Container();
                $obj->deserialize($value);
                array_push($this->Containers, $obj);
            }
        }

        if (array_key_exists("EksCiName",$param) and $param["EksCiName"] !== null) {
            $this->EksCiName = $param["EksCiName"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("RestartPolicy",$param) and $param["RestartPolicy"] !== null) {
            $this->RestartPolicy = $param["RestartPolicy"];
        }

        if (array_key_exists("ImageRegistryCredentials",$param) and $param["ImageRegistryCredentials"] !== null) {
            $this->ImageRegistryCredentials = [];
            foreach ($param["ImageRegistryCredentials"] as $key => $value){
                $obj = new ImageRegistryCredential();
                $obj->deserialize($value);
                array_push($this->ImageRegistryCredentials, $obj);
            }
        }

        if (array_key_exists("EksCiVolume",$param) and $param["EksCiVolume"] !== null) {
            $this->EksCiVolume = new EksCiVolume();
            $this->EksCiVolume->deserialize($param["EksCiVolume"]);
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("InitContainers",$param) and $param["InitContainers"] !== null) {
            $this->InitContainers = [];
            foreach ($param["InitContainers"] as $key => $value){
                $obj = new Container();
                $obj->deserialize($value);
                array_push($this->InitContainers, $obj);
            }
        }

        if (array_key_exists("DnsConfig",$param) and $param["DnsConfig"] !== null) {
            $this->DnsConfig = new DNSConfig();
            $this->DnsConfig->deserialize($param["DnsConfig"]);
        }

        if (array_key_exists("ExistedEipIds",$param) and $param["ExistedEipIds"] !== null) {
            $this->ExistedEipIds = $param["ExistedEipIds"];
        }

        if (array_key_exists("AutoCreateEipAttribute",$param) and $param["AutoCreateEipAttribute"] !== null) {
            $this->AutoCreateEipAttribute = new EipAttribute();
            $this->AutoCreateEipAttribute->deserialize($param["AutoCreateEipAttribute"]);
        }

        if (array_key_exists("AutoCreateEip",$param) and $param["AutoCreateEip"] !== null) {
            $this->AutoCreateEip = $param["AutoCreateEip"];
        }

        if (array_key_exists("CpuType",$param) and $param["CpuType"] !== null) {
            $this->CpuType = $param["CpuType"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("GpuCount",$param) and $param["GpuCount"] !== null) {
            $this->GpuCount = $param["GpuCount"];
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }
    }
}
