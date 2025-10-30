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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EksContainerInstance实例类型
 *
 * @method string getAutoCreatedEipId() 获取自动为用户创建的EipId
 * @method void setAutoCreatedEipId(string $AutoCreatedEipId) 设置自动为用户创建的EipId
 * @method string getCamRoleName() 获取为容器实例关联 CAM 角色，value 填写 CAM 角色名称，容器实例可获取该 CAM 角色包含的权限策略，方便 容器实例 内的程序进行如购买资源、读写存储等云资源操作。
 * @method void setCamRoleName(string $CamRoleName) 设置为容器实例关联 CAM 角色，value 填写 CAM 角色名称，容器实例可获取该 CAM 角色包含的权限策略，方便 容器实例 内的程序进行如购买资源、读写存储等云资源操作。
 * @method array getContainers() 获取容器列表
 * @method void setContainers(array $Containers) 设置容器列表
 * @method float getCpu() 获取CPU大小
 * @method void setCpu(float $Cpu) 设置CPU大小
 * @method string getCpuType() 获取CPU类型
 * @method void setCpuType(string $CpuType) 设置CPU类型
 * @method string getCreationTime() 获取接到请求后的系统创建时间。
 * @method void setCreationTime(string $CreationTime) 设置接到请求后的系统创建时间。
 * @method string getEipAddress() 获取容器实例绑定的Eip地址，注意可能为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEipAddress(string $EipAddress) 设置容器实例绑定的Eip地址，注意可能为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEksCiId() 获取EKS Container Instance Id
 * @method void setEksCiId(string $EksCiId) 设置EKS Container Instance Id
 * @method string getEksCiName() 获取EKS Container Instance Name
 * @method void setEksCiName(string $EksCiName) 设置EKS Container Instance Name
 * @method EksCiVolume getEksCiVolume() 获取数据卷信息
 * @method void setEksCiVolume(EksCiVolume $EksCiVolume) 设置数据卷信息
 * @method integer getGpuCount() 获取GPU卡数量
 * @method void setGpuCount(integer $GpuCount) 设置GPU卡数量
 * @method string getGpuType() 获取GPU类型。如无使用GPU则不返回
 * @method void setGpuType(string $GpuType) 设置GPU类型。如无使用GPU则不返回
 * @method array getInitContainers() 获取初始化容器列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInitContainers(array $InitContainers) 设置初始化容器列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMemory() 获取内存大小
 * @method void setMemory(float $Memory) 设置内存大小
 * @method boolean getPersistStatus() 获取容器状态是否持久化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPersistStatus(boolean $PersistStatus) 设置容器状态是否持久化
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateIp() 获取内网ip地址
 * @method void setPrivateIp(string $PrivateIp) 设置内网ip地址
 * @method string getRestartPolicy() 获取容器组的重启策略
 * @method void setRestartPolicy(string $RestartPolicy) 设置容器组的重启策略
 * @method SecurityContext getSecurityContext() 获取容器组运行的安全上下文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityContext(SecurityContext $SecurityContext) 设置容器组运行的安全上下文
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecurityGroupIds() 获取安全组ID
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组ID
 * @method string getStatus() 获取返回容器组创建状态：Pending，Running，Succeeded，Failed。其中：
Failed （运行失败）指的容器组退出，RestartPolilcy为Never， 有容器exitCode非0；
Succeeded（运行成功）指的是容器组退出了，RestartPolicy为Never或onFailure，所有容器exitCode都为0；
Failed和Succeeded这两种状态都会停止运行，停止计费。
Pending是创建中，Running是 运行中。
 * @method void setStatus(string $Status) 设置返回容器组创建状态：Pending，Running，Succeeded，Failed。其中：
Failed （运行失败）指的容器组退出，RestartPolilcy为Never， 有容器exitCode非0；
Succeeded（运行成功）指的是容器组退出了，RestartPolicy为Never或onFailure，所有容器exitCode都为0；
Failed和Succeeded这两种状态都会停止运行，停止计费。
Pending是创建中，Running是 运行中。
 * @method string getSubnetId() 获取实例所属子网Id
 * @method void setSubnetId(string $SubnetId) 设置实例所属子网Id
 * @method string getSucceededTime() 获取容器全部成功退出后的时间
 * @method void setSucceededTime(string $SucceededTime) 设置容器全部成功退出后的时间
 * @method string getVpcId() 获取实例所属VPC的Id
 * @method void setVpcId(string $VpcId) 设置实例所属VPC的Id
 */
class EksCi extends AbstractModel
{
    /**
     * @var string 自动为用户创建的EipId
     */
    public $AutoCreatedEipId;

    /**
     * @var string 为容器实例关联 CAM 角色，value 填写 CAM 角色名称，容器实例可获取该 CAM 角色包含的权限策略，方便 容器实例 内的程序进行如购买资源、读写存储等云资源操作。
     */
    public $CamRoleName;

    /**
     * @var array 容器列表
     */
    public $Containers;

    /**
     * @var float CPU大小
     */
    public $Cpu;

    /**
     * @var string CPU类型
     */
    public $CpuType;

    /**
     * @var string 接到请求后的系统创建时间。
     */
    public $CreationTime;

    /**
     * @var string 容器实例绑定的Eip地址，注意可能为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EipAddress;

    /**
     * @var string EKS Container Instance Id
     */
    public $EksCiId;

    /**
     * @var string EKS Container Instance Name
     */
    public $EksCiName;

    /**
     * @var EksCiVolume 数据卷信息
     */
    public $EksCiVolume;

    /**
     * @var integer GPU卡数量
     */
    public $GpuCount;

    /**
     * @var string GPU类型。如无使用GPU则不返回
     */
    public $GpuType;

    /**
     * @var array 初始化容器列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InitContainers;

    /**
     * @var float 内存大小
     */
    public $Memory;

    /**
     * @var boolean 容器状态是否持久化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PersistStatus;

    /**
     * @var string 内网ip地址
     */
    public $PrivateIp;

    /**
     * @var string 容器组的重启策略
     */
    public $RestartPolicy;

    /**
     * @var SecurityContext 容器组运行的安全上下文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityContext;

    /**
     * @var array 安全组ID
     */
    public $SecurityGroupIds;

    /**
     * @var string 返回容器组创建状态：Pending，Running，Succeeded，Failed。其中：
Failed （运行失败）指的容器组退出，RestartPolilcy为Never， 有容器exitCode非0；
Succeeded（运行成功）指的是容器组退出了，RestartPolicy为Never或onFailure，所有容器exitCode都为0；
Failed和Succeeded这两种状态都会停止运行，停止计费。
Pending是创建中，Running是 运行中。
     */
    public $Status;

    /**
     * @var string 实例所属子网Id
     */
    public $SubnetId;

    /**
     * @var string 容器全部成功退出后的时间
     */
    public $SucceededTime;

    /**
     * @var string 实例所属VPC的Id
     */
    public $VpcId;

    /**
     * @param string $AutoCreatedEipId 自动为用户创建的EipId
     * @param string $CamRoleName 为容器实例关联 CAM 角色，value 填写 CAM 角色名称，容器实例可获取该 CAM 角色包含的权限策略，方便 容器实例 内的程序进行如购买资源、读写存储等云资源操作。
     * @param array $Containers 容器列表
     * @param float $Cpu CPU大小
     * @param string $CpuType CPU类型
     * @param string $CreationTime 接到请求后的系统创建时间。
     * @param string $EipAddress 容器实例绑定的Eip地址，注意可能为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EksCiId EKS Container Instance Id
     * @param string $EksCiName EKS Container Instance Name
     * @param EksCiVolume $EksCiVolume 数据卷信息
     * @param integer $GpuCount GPU卡数量
     * @param string $GpuType GPU类型。如无使用GPU则不返回
     * @param array $InitContainers 初始化容器列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Memory 内存大小
     * @param boolean $PersistStatus 容器状态是否持久化
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateIp 内网ip地址
     * @param string $RestartPolicy 容器组的重启策略
     * @param SecurityContext $SecurityContext 容器组运行的安全上下文
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecurityGroupIds 安全组ID
     * @param string $Status 返回容器组创建状态：Pending，Running，Succeeded，Failed。其中：
Failed （运行失败）指的容器组退出，RestartPolilcy为Never， 有容器exitCode非0；
Succeeded（运行成功）指的是容器组退出了，RestartPolicy为Never或onFailure，所有容器exitCode都为0；
Failed和Succeeded这两种状态都会停止运行，停止计费。
Pending是创建中，Running是 运行中。
     * @param string $SubnetId 实例所属子网Id
     * @param string $SucceededTime 容器全部成功退出后的时间
     * @param string $VpcId 实例所属VPC的Id
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
        if (array_key_exists("AutoCreatedEipId",$param) and $param["AutoCreatedEipId"] !== null) {
            $this->AutoCreatedEipId = $param["AutoCreatedEipId"];
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }

        if (array_key_exists("Containers",$param) and $param["Containers"] !== null) {
            $this->Containers = [];
            foreach ($param["Containers"] as $key => $value){
                $obj = new Container();
                $obj->deserialize($value);
                array_push($this->Containers, $obj);
            }
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("CpuType",$param) and $param["CpuType"] !== null) {
            $this->CpuType = $param["CpuType"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("EipAddress",$param) and $param["EipAddress"] !== null) {
            $this->EipAddress = $param["EipAddress"];
        }

        if (array_key_exists("EksCiId",$param) and $param["EksCiId"] !== null) {
            $this->EksCiId = $param["EksCiId"];
        }

        if (array_key_exists("EksCiName",$param) and $param["EksCiName"] !== null) {
            $this->EksCiName = $param["EksCiName"];
        }

        if (array_key_exists("EksCiVolume",$param) and $param["EksCiVolume"] !== null) {
            $this->EksCiVolume = new EksCiVolume();
            $this->EksCiVolume->deserialize($param["EksCiVolume"]);
        }

        if (array_key_exists("GpuCount",$param) and $param["GpuCount"] !== null) {
            $this->GpuCount = $param["GpuCount"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("InitContainers",$param) and $param["InitContainers"] !== null) {
            $this->InitContainers = [];
            foreach ($param["InitContainers"] as $key => $value){
                $obj = new Container();
                $obj->deserialize($value);
                array_push($this->InitContainers, $obj);
            }
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("PersistStatus",$param) and $param["PersistStatus"] !== null) {
            $this->PersistStatus = $param["PersistStatus"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("RestartPolicy",$param) and $param["RestartPolicy"] !== null) {
            $this->RestartPolicy = $param["RestartPolicy"];
        }

        if (array_key_exists("SecurityContext",$param) and $param["SecurityContext"] !== null) {
            $this->SecurityContext = new SecurityContext();
            $this->SecurityContext->deserialize($param["SecurityContext"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SucceededTime",$param) and $param["SucceededTime"] !== null) {
            $this->SucceededTime = $param["SucceededTime"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
