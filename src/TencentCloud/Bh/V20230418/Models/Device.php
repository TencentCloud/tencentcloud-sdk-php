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
 * @method integer getId() 获取<p>资产ID</p>
 * @method void setId(integer $Id) 设置<p>资产ID</p>
 * @method string getInstanceId() 获取<p>实例ID，对应CVM、CDB等实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID，对应CVM、CDB等实例ID</p>
 * @method string getName() 获取<p>资产名</p>
 * @method void setName(string $Name) 设置<p>资产名</p>
 * @method string getPublicIp() 获取<p>公网IP</p>
 * @method void setPublicIp(string $PublicIp) 设置<p>公网IP</p>
 * @method string getPrivateIp() 获取<p>内网IP</p>
 * @method void setPrivateIp(string $PrivateIp) 设置<p>内网IP</p>
 * @method string getApCode() 获取<p>地域编码</p>
 * @method void setApCode(string $ApCode) 设置<p>地域编码</p>
 * @method string getApName() 获取<p>地域名称</p>
 * @method void setApName(string $ApName) 设置<p>地域名称</p>
 * @method string getOsName() 获取<p>操作系统名称</p>
 * @method void setOsName(string $OsName) 设置<p>操作系统名称</p>
 * @method integer getKind() 获取<p>资产类型 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer</p>
 * @method void setKind(integer $Kind) 设置<p>资产类型 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer</p>
 * @method integer getPort() 获取<p>管理端口</p>
 * @method void setPort(integer $Port) 设置<p>管理端口</p>
 * @method array getGroupSet() 获取<p>所属资产组列表</p>
 * @method void setGroupSet(array $GroupSet) 设置<p>所属资产组列表</p>
 * @method integer getAccountCount() 获取<p>资产绑定的账号数</p>
 * @method void setAccountCount(integer $AccountCount) 设置<p>资产绑定的账号数</p>
 * @method string getVpcId() 获取<p>VPC ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC ID</p>
 * @method string getSubnetId() 获取<p>子网ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网ID</p>
 * @method Resource getResource() 获取<p>堡垒机服务信息，注意没有绑定服务时为null</p>
 * @method void setResource(Resource $Resource) 设置<p>堡垒机服务信息，注意没有绑定服务时为null</p>
 * @method Department getDepartment() 获取<p>资产所属部门</p>
 * @method void setDepartment(Department $Department) 设置<p>资产所属部门</p>
 * @method array getIpPortSet() 获取<p>数据库资产的多节点</p>
 * @method void setIpPortSet(array $IpPortSet) 设置<p>数据库资产的多节点</p>
 * @method string getDomainId() 获取<p>网络域Id</p>
 * @method void setDomainId(string $DomainId) 设置<p>网络域Id</p>
 * @method string getDomainName() 获取<p>网络域名称</p>
 * @method void setDomainName(string $DomainName) 设置<p>网络域名称</p>
 * @method integer getEnableSSL() 获取<p>是否启用SSL，仅支持Redis资产。0：禁用 1：启用</p>
 * @method void setEnableSSL(integer $EnableSSL) 设置<p>是否启用SSL，仅支持Redis资产。0：禁用 1：启用</p>
 * @method string getSSLCertName() 获取<p>已上传的SSL证书名称</p>
 * @method void setSSLCertName(string $SSLCertName) 设置<p>已上传的SSL证书名称</p>
 * @method integer getIOAId() 获取<p>IOA侧的资源ID</p>
 * @method void setIOAId(integer $IOAId) 设置<p>IOA侧的资源ID</p>
 * @method integer getManageDimension() 获取<p>K8S集群托管维度。1-集群，2-命名空间，3-工作负载</p>
 * @method void setManageDimension(integer $ManageDimension) 设置<p>K8S集群托管维度。1-集群，2-命名空间，3-工作负载</p>
 * @method integer getManageAccountId() 获取<p>K8S集群托管账号id</p>
 * @method void setManageAccountId(integer $ManageAccountId) 设置<p>K8S集群托管账号id</p>
 * @method string getNamespace() 获取<p>K8S集群命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>K8S集群命名空间</p>
 * @method string getWorkload() 获取<p>K8S集群工作负载</p>
 * @method void setWorkload(string $Workload) 设置<p>K8S集群工作负载</p>
 * @method integer getSyncPodCount() 获取<p>K8S集群pod已同步数量</p>
 * @method void setSyncPodCount(integer $SyncPodCount) 设置<p>K8S集群pod已同步数量</p>
 * @method integer getTotalPodCount() 获取<p>K8S集群pod总数量</p>
 * @method void setTotalPodCount(integer $TotalPodCount) 设置<p>K8S集群pod总数量</p>
 * @method integer getCloudAccountId() 获取<p>云账号id</p>
 * @method void setCloudAccountId(integer $CloudAccountId) 设置<p>云账号id</p>
 * @method string getCloudAccountName() 获取<p>云账号名称</p>
 * @method void setCloudAccountName(string $CloudAccountName) 设置<p>云账号名称</p>
 * @method integer getProviderType() 获取<p>云厂商类型1-腾讯云，2-阿里云</p>
 * @method void setProviderType(integer $ProviderType) 设置<p>云厂商类型1-腾讯云，2-阿里云</p>
 * @method string getProviderName() 获取<p>云厂商名称</p>
 * @method void setProviderName(string $ProviderName) 设置<p>云厂商名称</p>
 * @method integer getSyncCloudDeviceStatus() 获取<p>同步的云资产状态，标记同步的资产的状态情况，0-已删除,1-正常,2-已隔离,3-已过期</p>
 * @method void setSyncCloudDeviceStatus(integer $SyncCloudDeviceStatus) 设置<p>同步的云资产状态，标记同步的资产的状态情况，0-已删除,1-正常,2-已隔离,3-已过期</p>
 * @method integer getOwnerAppId() 获取<p>所属账号 AppId</p>
 * @method void setOwnerAppId(integer $OwnerAppId) 设置<p>所属账号 AppId</p>
 * @method string getOwnerAccountUin() 获取<p>所属账号 UIN</p>
 * @method void setOwnerAccountUin(string $OwnerAccountUin) 设置<p>所属账号 UIN</p>
 * @method string getOwnerAccountName() 获取<p>所属账号展示名</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) 设置<p>所属账号展示名</p>
 */
class Device extends AbstractModel
{
    /**
     * @var integer <p>资产ID</p>
     */
    public $Id;

    /**
     * @var string <p>实例ID，对应CVM、CDB等实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>资产名</p>
     */
    public $Name;

    /**
     * @var string <p>公网IP</p>
     */
    public $PublicIp;

    /**
     * @var string <p>内网IP</p>
     */
    public $PrivateIp;

    /**
     * @var string <p>地域编码</p>
     */
    public $ApCode;

    /**
     * @var string <p>地域名称</p>
     */
    public $ApName;

    /**
     * @var string <p>操作系统名称</p>
     */
    public $OsName;

    /**
     * @var integer <p>资产类型 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer</p>
     */
    public $Kind;

    /**
     * @var integer <p>管理端口</p>
     */
    public $Port;

    /**
     * @var array <p>所属资产组列表</p>
     */
    public $GroupSet;

    /**
     * @var integer <p>资产绑定的账号数</p>
     */
    public $AccountCount;

    /**
     * @var string <p>VPC ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网ID</p>
     */
    public $SubnetId;

    /**
     * @var Resource <p>堡垒机服务信息，注意没有绑定服务时为null</p>
     */
    public $Resource;

    /**
     * @var Department <p>资产所属部门</p>
     */
    public $Department;

    /**
     * @var array <p>数据库资产的多节点</p>
     */
    public $IpPortSet;

    /**
     * @var string <p>网络域Id</p>
     */
    public $DomainId;

    /**
     * @var string <p>网络域名称</p>
     */
    public $DomainName;

    /**
     * @var integer <p>是否启用SSL，仅支持Redis资产。0：禁用 1：启用</p>
     */
    public $EnableSSL;

    /**
     * @var string <p>已上传的SSL证书名称</p>
     */
    public $SSLCertName;

    /**
     * @var integer <p>IOA侧的资源ID</p>
     */
    public $IOAId;

    /**
     * @var integer <p>K8S集群托管维度。1-集群，2-命名空间，3-工作负载</p>
     */
    public $ManageDimension;

    /**
     * @var integer <p>K8S集群托管账号id</p>
     */
    public $ManageAccountId;

    /**
     * @var string <p>K8S集群命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>K8S集群工作负载</p>
     */
    public $Workload;

    /**
     * @var integer <p>K8S集群pod已同步数量</p>
     */
    public $SyncPodCount;

    /**
     * @var integer <p>K8S集群pod总数量</p>
     */
    public $TotalPodCount;

    /**
     * @var integer <p>云账号id</p>
     */
    public $CloudAccountId;

    /**
     * @var string <p>云账号名称</p>
     */
    public $CloudAccountName;

    /**
     * @var integer <p>云厂商类型1-腾讯云，2-阿里云</p>
     */
    public $ProviderType;

    /**
     * @var string <p>云厂商名称</p>
     */
    public $ProviderName;

    /**
     * @var integer <p>同步的云资产状态，标记同步的资产的状态情况，0-已删除,1-正常,2-已隔离,3-已过期</p>
     */
    public $SyncCloudDeviceStatus;

    /**
     * @var integer <p>所属账号 AppId</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>所属账号 UIN</p>
     */
    public $OwnerAccountUin;

    /**
     * @var string <p>所属账号展示名</p>
     */
    public $OwnerAccountName;

    /**
     * @param integer $Id <p>资产ID</p>
     * @param string $InstanceId <p>实例ID，对应CVM、CDB等实例ID</p>
     * @param string $Name <p>资产名</p>
     * @param string $PublicIp <p>公网IP</p>
     * @param string $PrivateIp <p>内网IP</p>
     * @param string $ApCode <p>地域编码</p>
     * @param string $ApName <p>地域名称</p>
     * @param string $OsName <p>操作系统名称</p>
     * @param integer $Kind <p>资产类型 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer</p>
     * @param integer $Port <p>管理端口</p>
     * @param array $GroupSet <p>所属资产组列表</p>
     * @param integer $AccountCount <p>资产绑定的账号数</p>
     * @param string $VpcId <p>VPC ID</p>
     * @param string $SubnetId <p>子网ID</p>
     * @param Resource $Resource <p>堡垒机服务信息，注意没有绑定服务时为null</p>
     * @param Department $Department <p>资产所属部门</p>
     * @param array $IpPortSet <p>数据库资产的多节点</p>
     * @param string $DomainId <p>网络域Id</p>
     * @param string $DomainName <p>网络域名称</p>
     * @param integer $EnableSSL <p>是否启用SSL，仅支持Redis资产。0：禁用 1：启用</p>
     * @param string $SSLCertName <p>已上传的SSL证书名称</p>
     * @param integer $IOAId <p>IOA侧的资源ID</p>
     * @param integer $ManageDimension <p>K8S集群托管维度。1-集群，2-命名空间，3-工作负载</p>
     * @param integer $ManageAccountId <p>K8S集群托管账号id</p>
     * @param string $Namespace <p>K8S集群命名空间</p>
     * @param string $Workload <p>K8S集群工作负载</p>
     * @param integer $SyncPodCount <p>K8S集群pod已同步数量</p>
     * @param integer $TotalPodCount <p>K8S集群pod总数量</p>
     * @param integer $CloudAccountId <p>云账号id</p>
     * @param string $CloudAccountName <p>云账号名称</p>
     * @param integer $ProviderType <p>云厂商类型1-腾讯云，2-阿里云</p>
     * @param string $ProviderName <p>云厂商名称</p>
     * @param integer $SyncCloudDeviceStatus <p>同步的云资产状态，标记同步的资产的状态情况，0-已删除,1-正常,2-已隔离,3-已过期</p>
     * @param integer $OwnerAppId <p>所属账号 AppId</p>
     * @param string $OwnerAccountUin <p>所属账号 UIN</p>
     * @param string $OwnerAccountName <p>所属账号展示名</p>
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

        if (array_key_exists("ApName",$param) and $param["ApName"] !== null) {
            $this->ApName = $param["ApName"];
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

        if (array_key_exists("CloudAccountId",$param) and $param["CloudAccountId"] !== null) {
            $this->CloudAccountId = $param["CloudAccountId"];
        }

        if (array_key_exists("CloudAccountName",$param) and $param["CloudAccountName"] !== null) {
            $this->CloudAccountName = $param["CloudAccountName"];
        }

        if (array_key_exists("ProviderType",$param) and $param["ProviderType"] !== null) {
            $this->ProviderType = $param["ProviderType"];
        }

        if (array_key_exists("ProviderName",$param) and $param["ProviderName"] !== null) {
            $this->ProviderName = $param["ProviderName"];
        }

        if (array_key_exists("SyncCloudDeviceStatus",$param) and $param["SyncCloudDeviceStatus"] !== null) {
            $this->SyncCloudDeviceStatus = $param["SyncCloudDeviceStatus"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("OwnerAccountUin",$param) and $param["OwnerAccountUin"] !== null) {
            $this->OwnerAccountUin = $param["OwnerAccountUin"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }
    }
}
