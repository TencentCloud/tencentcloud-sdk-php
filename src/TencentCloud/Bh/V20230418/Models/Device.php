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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产信息
 *
 * @method integer getId() 获取资产ID
 * @method void setId(integer $Id) 设置资产ID
 * @method string getInstanceId() 获取实例ID，对应CVM、CDB等实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID，对应CVM、CDB等实例ID
 * @method string getName() 获取资产名
 * @method void setName(string $Name) 设置资产名
 * @method string getPublicIp() 获取公网IP
 * @method void setPublicIp(string $PublicIp) 设置公网IP
 * @method string getPrivateIp() 获取内网IP
 * @method void setPrivateIp(string $PrivateIp) 设置内网IP
 * @method string getApCode() 获取地域编码
 * @method void setApCode(string $ApCode) 设置地域编码
 * @method string getOsName() 获取操作系统名称
 * @method void setOsName(string $OsName) 设置操作系统名称
 * @method integer getKind() 获取资产类型 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer
 * @method void setKind(integer $Kind) 设置资产类型 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer
 * @method integer getPort() 获取管理端口
 * @method void setPort(integer $Port) 设置管理端口
 * @method array getGroupSet() 获取所属资产组列表
 * @method void setGroupSet(array $GroupSet) 设置所属资产组列表
 * @method integer getAccountCount() 获取资产绑定的账号数
 * @method void setAccountCount(integer $AccountCount) 设置资产绑定的账号数
 * @method string getVpcId() 获取VPC ID
 * @method void setVpcId(string $VpcId) 设置VPC ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method Resource getResource() 获取堡垒机服务信息，注意没有绑定服务时为null
 * @method void setResource(Resource $Resource) 设置堡垒机服务信息，注意没有绑定服务时为null
 * @method Department getDepartment() 获取资产所属部门
 * @method void setDepartment(Department $Department) 设置资产所属部门
 * @method array getIpPortSet() 获取数据库资产的多节点
 * @method void setIpPortSet(array $IpPortSet) 设置数据库资产的多节点
 * @method string getDomainId() 获取网络域Id
 * @method void setDomainId(string $DomainId) 设置网络域Id
 * @method string getDomainName() 获取网络域名称
 * @method void setDomainName(string $DomainName) 设置网络域名称
 * @method integer getEnableSSL() 获取是否启用SSL，仅支持Redis资产。0：禁用 1：启用
 * @method void setEnableSSL(integer $EnableSSL) 设置是否启用SSL，仅支持Redis资产。0：禁用 1：启用
 * @method string getSSLCertName() 获取已上传的SSL证书名称
 * @method void setSSLCertName(string $SSLCertName) 设置已上传的SSL证书名称
 * @method integer getIOAId() 获取IOA侧的资源ID
 * @method void setIOAId(integer $IOAId) 设置IOA侧的资源ID
 * @method integer getManageDimension() 获取K8S集群托管维度。1-集群，2-命名空间，3-工作负载
 * @method void setManageDimension(integer $ManageDimension) 设置K8S集群托管维度。1-集群，2-命名空间，3-工作负载
 * @method integer getManageAccountId() 获取K8S集群托管账号id	
 * @method void setManageAccountId(integer $ManageAccountId) 设置K8S集群托管账号id	
 * @method string getNamespace() 获取K8S集群命名空间	
 * @method void setNamespace(string $Namespace) 设置K8S集群命名空间	
 * @method string getWorkload() 获取K8S集群工作负载	
 * @method void setWorkload(string $Workload) 设置K8S集群工作负载	
 * @method integer getSyncPodCount() 获取K8S集群pod已同步数量
 * @method void setSyncPodCount(integer $SyncPodCount) 设置K8S集群pod已同步数量
 * @method integer getTotalPodCount() 获取K8S集群pod总数量	
 * @method void setTotalPodCount(integer $TotalPodCount) 设置K8S集群pod总数量	
 */
class Device extends AbstractModel
{
    /**
     * @var integer 资产ID
     */
    public $Id;

    /**
     * @var string 实例ID，对应CVM、CDB等实例ID
     */
    public $InstanceId;

    /**
     * @var string 资产名
     */
    public $Name;

    /**
     * @var string 公网IP
     */
    public $PublicIp;

    /**
     * @var string 内网IP
     */
    public $PrivateIp;

    /**
     * @var string 地域编码
     */
    public $ApCode;

    /**
     * @var string 操作系统名称
     */
    public $OsName;

    /**
     * @var integer 资产类型 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer
     */
    public $Kind;

    /**
     * @var integer 管理端口
     */
    public $Port;

    /**
     * @var array 所属资产组列表
     */
    public $GroupSet;

    /**
     * @var integer 资产绑定的账号数
     */
    public $AccountCount;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var Resource 堡垒机服务信息，注意没有绑定服务时为null
     */
    public $Resource;

    /**
     * @var Department 资产所属部门
     */
    public $Department;

    /**
     * @var array 数据库资产的多节点
     */
    public $IpPortSet;

    /**
     * @var string 网络域Id
     */
    public $DomainId;

    /**
     * @var string 网络域名称
     */
    public $DomainName;

    /**
     * @var integer 是否启用SSL，仅支持Redis资产。0：禁用 1：启用
     */
    public $EnableSSL;

    /**
     * @var string 已上传的SSL证书名称
     */
    public $SSLCertName;

    /**
     * @var integer IOA侧的资源ID
     */
    public $IOAId;

    /**
     * @var integer K8S集群托管维度。1-集群，2-命名空间，3-工作负载
     */
    public $ManageDimension;

    /**
     * @var integer K8S集群托管账号id	
     */
    public $ManageAccountId;

    /**
     * @var string K8S集群命名空间	
     */
    public $Namespace;

    /**
     * @var string K8S集群工作负载	
     */
    public $Workload;

    /**
     * @var integer K8S集群pod已同步数量
     */
    public $SyncPodCount;

    /**
     * @var integer K8S集群pod总数量	
     */
    public $TotalPodCount;

    /**
     * @param integer $Id 资产ID
     * @param string $InstanceId 实例ID，对应CVM、CDB等实例ID
     * @param string $Name 资产名
     * @param string $PublicIp 公网IP
     * @param string $PrivateIp 内网IP
     * @param string $ApCode 地域编码
     * @param string $OsName 操作系统名称
     * @param integer $Kind 资产类型 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer
     * @param integer $Port 管理端口
     * @param array $GroupSet 所属资产组列表
     * @param integer $AccountCount 资产绑定的账号数
     * @param string $VpcId VPC ID
     * @param string $SubnetId 子网ID
     * @param Resource $Resource 堡垒机服务信息，注意没有绑定服务时为null
     * @param Department $Department 资产所属部门
     * @param array $IpPortSet 数据库资产的多节点
     * @param string $DomainId 网络域Id
     * @param string $DomainName 网络域名称
     * @param integer $EnableSSL 是否启用SSL，仅支持Redis资产。0：禁用 1：启用
     * @param string $SSLCertName 已上传的SSL证书名称
     * @param integer $IOAId IOA侧的资源ID
     * @param integer $ManageDimension K8S集群托管维度。1-集群，2-命名空间，3-工作负载
     * @param integer $ManageAccountId K8S集群托管账号id	
     * @param string $Namespace K8S集群命名空间	
     * @param string $Workload K8S集群工作负载	
     * @param integer $SyncPodCount K8S集群pod已同步数量
     * @param integer $TotalPodCount K8S集群pod总数量	
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("ApCode",$param) and $param["ApCode"] !== null) {
            $this->ApCode = $param["ApCode"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("GroupSet",$param) and $param["GroupSet"] !== null) {
            $this->GroupSet = [];
            foreach ($param["GroupSet"] as $key => $value){
                $obj = new Group();
                $obj->deserialize($value);
                array_push($this->GroupSet, $obj);
            }
        }

        if (array_key_exists("AccountCount",$param) and $param["AccountCount"] !== null) {
            $this->AccountCount = $param["AccountCount"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new Resource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = new Department();
            $this->Department->deserialize($param["Department"]);
        }

        if (array_key_exists("IpPortSet",$param) and $param["IpPortSet"] !== null) {
            $this->IpPortSet = $param["IpPortSet"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("EnableSSL",$param) and $param["EnableSSL"] !== null) {
            $this->EnableSSL = $param["EnableSSL"];
        }

        if (array_key_exists("SSLCertName",$param) and $param["SSLCertName"] !== null) {
            $this->SSLCertName = $param["SSLCertName"];
        }

        if (array_key_exists("IOAId",$param) and $param["IOAId"] !== null) {
            $this->IOAId = $param["IOAId"];
        }

        if (array_key_exists("ManageDimension",$param) and $param["ManageDimension"] !== null) {
            $this->ManageDimension = $param["ManageDimension"];
        }

        if (array_key_exists("ManageAccountId",$param) and $param["ManageAccountId"] !== null) {
            $this->ManageAccountId = $param["ManageAccountId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Workload",$param) and $param["Workload"] !== null) {
            $this->Workload = $param["Workload"];
        }

        if (array_key_exists("SyncPodCount",$param) and $param["SyncPodCount"] !== null) {
            $this->SyncPodCount = $param["SyncPodCount"];
        }

        if (array_key_exists("TotalPodCount",$param) and $param["TotalPodCount"] !== null) {
            $this->TotalPodCount = $param["TotalPodCount"];
        }
    }
}
