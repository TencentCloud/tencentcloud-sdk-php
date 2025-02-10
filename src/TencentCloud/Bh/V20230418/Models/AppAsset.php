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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用资产信息
 *
 * @method integer getId() 获取应用资产id
 * @method void setId(integer $Id) 设置应用资产id
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getName() 获取资产名称
 * @method void setName(string $Name) 设置资产名称
 * @method integer getDeviceId() 获取应用服务器id
 * @method void setDeviceId(integer $DeviceId) 设置应用服务器id
 * @method integer getDeviceAccountId() 获取应用服务器账号id
 * @method void setDeviceAccountId(integer $DeviceAccountId) 设置应用服务器账号id
 * @method integer getKind() 获取应用资产类型。1-web应用
 * @method void setKind(integer $Kind) 设置应用资产类型。1-web应用
 * @method string getClientAppPath() 获取客户端工具路径
 * @method void setClientAppPath(string $ClientAppPath) 设置客户端工具路径
 * @method string getClientAppKind() 获取客户端工具类型
 * @method void setClientAppKind(string $ClientAppKind) 设置客户端工具类型
 * @method string getUrl() 获取应用资产url
 * @method void setUrl(string $Url) 设置应用资产url
 * @method integer getBindStatus() 获取托管状态。0-未托管，1-已托管
 * @method void setBindStatus(integer $BindStatus) 设置托管状态。0-未托管，1-已托管
 * @method string getDeviceInstanceId() 获取应用服务器实例id
 * @method void setDeviceInstanceId(string $DeviceInstanceId) 设置应用服务器实例id
 * @method string getDeviceName() 获取应用服务器名称
 * @method void setDeviceName(string $DeviceName) 设置应用服务器名称
 * @method string getDeviceAccountName() 获取应用服务器账号名称
 * @method void setDeviceAccountName(string $DeviceAccountName) 设置应用服务器账号名称
 * @method string getResourceId() 获取堡垒机实例id
 * @method void setResourceId(string $ResourceId) 设置堡垒机实例id
 * @method Resource getResource() 获取堡垒机实例信息
 * @method void setResource(Resource $Resource) 设置堡垒机实例信息
 * @method string getDomainId() 获取网络域id
 * @method void setDomainId(string $DomainId) 设置网络域id
 * @method string getDomainName() 获取网络域名称
 * @method void setDomainName(string $DomainName) 设置网络域名称
 * @method array getGroupSet() 获取资产组信息
 * @method void setGroupSet(array $GroupSet) 设置资产组信息
 * @method Department getDepartment() 获取资产所属部门
 * @method void setDepartment(Department $Department) 设置资产所属部门
 */
class AppAsset extends AbstractModel
{
    /**
     * @var integer 应用资产id
     */
    public $Id;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 资产名称
     */
    public $Name;

    /**
     * @var integer 应用服务器id
     */
    public $DeviceId;

    /**
     * @var integer 应用服务器账号id
     */
    public $DeviceAccountId;

    /**
     * @var integer 应用资产类型。1-web应用
     */
    public $Kind;

    /**
     * @var string 客户端工具路径
     */
    public $ClientAppPath;

    /**
     * @var string 客户端工具类型
     */
    public $ClientAppKind;

    /**
     * @var string 应用资产url
     */
    public $Url;

    /**
     * @var integer 托管状态。0-未托管，1-已托管
     */
    public $BindStatus;

    /**
     * @var string 应用服务器实例id
     */
    public $DeviceInstanceId;

    /**
     * @var string 应用服务器名称
     */
    public $DeviceName;

    /**
     * @var string 应用服务器账号名称
     */
    public $DeviceAccountName;

    /**
     * @var string 堡垒机实例id
     */
    public $ResourceId;

    /**
     * @var Resource 堡垒机实例信息
     */
    public $Resource;

    /**
     * @var string 网络域id
     */
    public $DomainId;

    /**
     * @var string 网络域名称
     */
    public $DomainName;

    /**
     * @var array 资产组信息
     */
    public $GroupSet;

    /**
     * @var Department 资产所属部门
     */
    public $Department;

    /**
     * @param integer $Id 应用资产id
     * @param string $InstanceId 实例id
     * @param string $Name 资产名称
     * @param integer $DeviceId 应用服务器id
     * @param integer $DeviceAccountId 应用服务器账号id
     * @param integer $Kind 应用资产类型。1-web应用
     * @param string $ClientAppPath 客户端工具路径
     * @param string $ClientAppKind 客户端工具类型
     * @param string $Url 应用资产url
     * @param integer $BindStatus 托管状态。0-未托管，1-已托管
     * @param string $DeviceInstanceId 应用服务器实例id
     * @param string $DeviceName 应用服务器名称
     * @param string $DeviceAccountName 应用服务器账号名称
     * @param string $ResourceId 堡垒机实例id
     * @param Resource $Resource 堡垒机实例信息
     * @param string $DomainId 网络域id
     * @param string $DomainName 网络域名称
     * @param array $GroupSet 资产组信息
     * @param Department $Department 资产所属部门
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

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("DeviceAccountId",$param) and $param["DeviceAccountId"] !== null) {
            $this->DeviceAccountId = $param["DeviceAccountId"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("ClientAppPath",$param) and $param["ClientAppPath"] !== null) {
            $this->ClientAppPath = $param["ClientAppPath"];
        }

        if (array_key_exists("ClientAppKind",$param) and $param["ClientAppKind"] !== null) {
            $this->ClientAppKind = $param["ClientAppKind"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }

        if (array_key_exists("DeviceInstanceId",$param) and $param["DeviceInstanceId"] !== null) {
            $this->DeviceInstanceId = $param["DeviceInstanceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("DeviceAccountName",$param) and $param["DeviceAccountName"] !== null) {
            $this->DeviceAccountName = $param["DeviceAccountName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new Resource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("GroupSet",$param) and $param["GroupSet"] !== null) {
            $this->GroupSet = [];
            foreach ($param["GroupSet"] as $key => $value){
                $obj = new Group();
                $obj->deserialize($value);
                array_push($this->GroupSet, $obj);
            }
        }

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = new Department();
            $this->Department->deserialize($param["Department"]);
        }
    }
}
