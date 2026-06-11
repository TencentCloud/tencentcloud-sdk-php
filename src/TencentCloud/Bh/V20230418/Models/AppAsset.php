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
 * 应用资产信息
 *
 * @method integer getId() 获取<p>应用资产id</p>
 * @method void setId(integer $Id) 设置<p>应用资产id</p>
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method string getName() 获取<p>资产名称</p>
 * @method void setName(string $Name) 设置<p>资产名称</p>
 * @method integer getDeviceId() 获取<p>应用服务器id</p>
 * @method void setDeviceId(integer $DeviceId) 设置<p>应用服务器id</p>
 * @method integer getDeviceAccountId() 获取<p>应用服务器账号id</p>
 * @method void setDeviceAccountId(integer $DeviceAccountId) 设置<p>应用服务器账号id</p>
 * @method integer getKind() 获取<p>应用资产类型。1-web应用</p>
 * @method void setKind(integer $Kind) 设置<p>应用资产类型。1-web应用</p>
 * @method string getClientAppPath() 获取<p>客户端工具路径</p>
 * @method void setClientAppPath(string $ClientAppPath) 设置<p>客户端工具路径</p>
 * @method string getClientAppKind() 获取<p>客户端工具类型</p>
 * @method void setClientAppKind(string $ClientAppKind) 设置<p>客户端工具类型</p>
 * @method string getUrl() 获取<p>应用资产url</p>
 * @method void setUrl(string $Url) 设置<p>应用资产url</p>
 * @method integer getBindStatus() 获取<p>托管状态</p><p>枚举值：</p><ul><li>0： 未托管</li><li>1： 已托管</li></ul>
 * @method void setBindStatus(integer $BindStatus) 设置<p>托管状态</p><p>枚举值：</p><ul><li>0： 未托管</li><li>1： 已托管</li></ul>
 * @method string getDeviceInstanceId() 获取<p>应用服务器实例id</p>
 * @method void setDeviceInstanceId(string $DeviceInstanceId) 设置<p>应用服务器实例id</p>
 * @method string getDeviceName() 获取<p>应用服务器名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>应用服务器名称</p>
 * @method string getDeviceAccountName() 获取<p>应用服务器账号名称</p>
 * @method void setDeviceAccountName(string $DeviceAccountName) 设置<p>应用服务器账号名称</p>
 * @method string getResourceId() 获取<p>堡垒机实例id</p>
 * @method void setResourceId(string $ResourceId) 设置<p>堡垒机实例id</p>
 * @method Resource getResource() 获取<p>堡垒机实例信息</p>
 * @method void setResource(Resource $Resource) 设置<p>堡垒机实例信息</p>
 * @method string getDomainId() 获取<p>网络域id</p>
 * @method void setDomainId(string $DomainId) 设置<p>网络域id</p>
 * @method string getDomainName() 获取<p>网络域名称</p>
 * @method void setDomainName(string $DomainName) 设置<p>网络域名称</p>
 * @method array getGroupSet() 获取<p>资产组信息</p>
 * @method void setGroupSet(array $GroupSet) 设置<p>资产组信息</p>
 * @method Department getDepartment() 获取<p>资产所属部门</p>
 * @method void setDepartment(Department $Department) 设置<p>资产所属部门</p>
 * @method integer getAccountCount() 获取<p>账号数量</p>
 * @method void setAccountCount(integer $AccountCount) 设置<p>账号数量</p>
 * @method integer getAgentInputType() 获取<p>代填类型</p><p>枚举值：</p><ul><li>0： 不支持代填</li><li>1： 元素定位代填</li></ul>
 * @method void setAgentInputType(integer $AgentInputType) 设置<p>代填类型</p><p>枚举值：</p><ul><li>0： 不支持代填</li><li>1： 元素定位代填</li></ul>
 * @method integer getAgentInputSubmit() 获取<p>是否自动提交</p><p>枚举值：</p><ul><li>0： 不自动提交</li><li>1： 自动提交</li></ul>
 * @method void setAgentInputSubmit(integer $AgentInputSubmit) 设置<p>是否自动提交</p><p>枚举值：</p><ul><li>0： 不自动提交</li><li>1： 自动提交</li></ul>
 * @method string getUserNameType() 获取<p>用户名输入框选择器类型</p><p>枚举值：</p><ul><li>id： html标签id属性</li><li>name： html标签name属性</li><li>selector： css选择器</li><li>xpath： xpath</li></ul>
 * @method void setUserNameType(string $UserNameType) 设置<p>用户名输入框选择器类型</p><p>枚举值：</p><ul><li>id： html标签id属性</li><li>name： html标签name属性</li><li>selector： css选择器</li><li>xpath： xpath</li></ul>
 * @method string getUserNameValue() 获取<p>用户名输入框选择器属性</p>
 * @method void setUserNameValue(string $UserNameValue) 设置<p>用户名输入框选择器属性</p>
 * @method string getPasswordType() 获取<p>密码输入框选择器类型</p><p>枚举值：</p><ul><li>id： html标签id属性</li><li>name： html标签name属性</li><li>selector： css选择器</li><li>xpath： xpath</li></ul>
 * @method void setPasswordType(string $PasswordType) 设置<p>密码输入框选择器类型</p><p>枚举值：</p><ul><li>id： html标签id属性</li><li>name： html标签name属性</li><li>selector： css选择器</li><li>xpath： xpath</li></ul>
 * @method string getPasswordValue() 获取<p>密码输入框选择器属性</p>
 * @method void setPasswordValue(string $PasswordValue) 设置<p>密码输入框选择器属性</p>
 * @method string getSubmitType() 获取<p>提交按钮选择器类型，为空表示不支持自动提交</p><p>枚举值：</p><ul><li>id： html标签id属性</li><li>name： html标签name属性</li><li>selector： css选择器</li><li>xpath： xpath</li></ul>
 * @method void setSubmitType(string $SubmitType) 设置<p>提交按钮选择器类型，为空表示不支持自动提交</p><p>枚举值：</p><ul><li>id： html标签id属性</li><li>name： html标签name属性</li><li>selector： css选择器</li><li>xpath： xpath</li></ul>
 * @method string getSubmitValue() 获取<p>提交按钮选择器属性值</p>
 * @method void setSubmitValue(string $SubmitValue) 设置<p>提交按钮选择器属性值</p>
 */
class AppAsset extends AbstractModel
{
    /**
     * @var integer <p>应用资产id</p>
     */
    public $Id;

    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>资产名称</p>
     */
    public $Name;

    /**
     * @var integer <p>应用服务器id</p>
     */
    public $DeviceId;

    /**
     * @var integer <p>应用服务器账号id</p>
     */
    public $DeviceAccountId;

    /**
     * @var integer <p>应用资产类型。1-web应用</p>
     */
    public $Kind;

    /**
     * @var string <p>客户端工具路径</p>
     */
    public $ClientAppPath;

    /**
     * @var string <p>客户端工具类型</p>
     */
    public $ClientAppKind;

    /**
     * @var string <p>应用资产url</p>
     */
    public $Url;

    /**
     * @var integer <p>托管状态</p><p>枚举值：</p><ul><li>0： 未托管</li><li>1： 已托管</li></ul>
     */
    public $BindStatus;

    /**
     * @var string <p>应用服务器实例id</p>
     */
    public $DeviceInstanceId;

    /**
     * @var string <p>应用服务器名称</p>
     */
    public $DeviceName;

    /**
     * @var string <p>应用服务器账号名称</p>
     */
    public $DeviceAccountName;

    /**
     * @var string <p>堡垒机实例id</p>
     */
    public $ResourceId;

    /**
     * @var Resource <p>堡垒机实例信息</p>
     */
    public $Resource;

    /**
     * @var string <p>网络域id</p>
     */
    public $DomainId;

    /**
     * @var string <p>网络域名称</p>
     */
    public $DomainName;

    /**
     * @var array <p>资产组信息</p>
     */
    public $GroupSet;

    /**
     * @var Department <p>资产所属部门</p>
     */
    public $Department;

    /**
     * @var integer <p>账号数量</p>
     */
    public $AccountCount;

    /**
     * @var integer <p>代填类型</p><p>枚举值：</p><ul><li>0： 不支持代填</li><li>1： 元素定位代填</li></ul>
     */
    public $AgentInputType;

    /**
     * @var integer <p>是否自动提交</p><p>枚举值：</p><ul><li>0： 不自动提交</li><li>1： 自动提交</li></ul>
     */
    public $AgentInputSubmit;

    /**
     * @var string <p>用户名输入框选择器类型</p><p>枚举值：</p><ul><li>id： html标签id属性</li><li>name： html标签name属性</li><li>selector： css选择器</li><li>xpath： xpath</li></ul>
     */
    public $UserNameType;

    /**
     * @var string <p>用户名输入框选择器属性</p>
     */
    public $UserNameValue;

    /**
     * @var string <p>密码输入框选择器类型</p><p>枚举值：</p><ul><li>id： html标签id属性</li><li>name： html标签name属性</li><li>selector： css选择器</li><li>xpath： xpath</li></ul>
     */
    public $PasswordType;

    /**
     * @var string <p>密码输入框选择器属性</p>
     */
    public $PasswordValue;

    /**
     * @var string <p>提交按钮选择器类型，为空表示不支持自动提交</p><p>枚举值：</p><ul><li>id： html标签id属性</li><li>name： html标签name属性</li><li>selector： css选择器</li><li>xpath： xpath</li></ul>
     */
    public $SubmitType;

    /**
     * @var string <p>提交按钮选择器属性值</p>
     */
    public $SubmitValue;

    /**
     * @param integer $Id <p>应用资产id</p>
     * @param string $InstanceId <p>实例id</p>
     * @param string $Name <p>资产名称</p>
     * @param integer $DeviceId <p>应用服务器id</p>
     * @param integer $DeviceAccountId <p>应用服务器账号id</p>
     * @param integer $Kind <p>应用资产类型。1-web应用</p>
     * @param string $ClientAppPath <p>客户端工具路径</p>
     * @param string $ClientAppKind <p>客户端工具类型</p>
     * @param string $Url <p>应用资产url</p>
     * @param integer $BindStatus <p>托管状态</p><p>枚举值：</p><ul><li>0： 未托管</li><li>1： 已托管</li></ul>
     * @param string $DeviceInstanceId <p>应用服务器实例id</p>
     * @param string $DeviceName <p>应用服务器名称</p>
     * @param string $DeviceAccountName <p>应用服务器账号名称</p>
     * @param string $ResourceId <p>堡垒机实例id</p>
     * @param Resource $Resource <p>堡垒机实例信息</p>
     * @param string $DomainId <p>网络域id</p>
     * @param string $DomainName <p>网络域名称</p>
     * @param array $GroupSet <p>资产组信息</p>
     * @param Department $Department <p>资产所属部门</p>
     * @param integer $AccountCount <p>账号数量</p>
     * @param integer $AgentInputType <p>代填类型</p><p>枚举值：</p><ul><li>0： 不支持代填</li><li>1： 元素定位代填</li></ul>
     * @param integer $AgentInputSubmit <p>是否自动提交</p><p>枚举值：</p><ul><li>0： 不自动提交</li><li>1： 自动提交</li></ul>
     * @param string $UserNameType <p>用户名输入框选择器类型</p><p>枚举值：</p><ul><li>id： html标签id属性</li><li>name： html标签name属性</li><li>selector： css选择器</li><li>xpath： xpath</li></ul>
     * @param string $UserNameValue <p>用户名输入框选择器属性</p>
     * @param string $PasswordType <p>密码输入框选择器类型</p><p>枚举值：</p><ul><li>id： html标签id属性</li><li>name： html标签name属性</li><li>selector： css选择器</li><li>xpath： xpath</li></ul>
     * @param string $PasswordValue <p>密码输入框选择器属性</p>
     * @param string $SubmitType <p>提交按钮选择器类型，为空表示不支持自动提交</p><p>枚举值：</p><ul><li>id： html标签id属性</li><li>name： html标签name属性</li><li>selector： css选择器</li><li>xpath： xpath</li></ul>
     * @param string $SubmitValue <p>提交按钮选择器属性值</p>
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

        if (array_key_exists("AccountCount",$param) and $param["AccountCount"] !== null) {
            $this->AccountCount = $param["AccountCount"];
        }

        if (array_key_exists("AgentInputType",$param) and $param["AgentInputType"] !== null) {
            $this->AgentInputType = $param["AgentInputType"];
        }

        if (array_key_exists("AgentInputSubmit",$param) and $param["AgentInputSubmit"] !== null) {
            $this->AgentInputSubmit = $param["AgentInputSubmit"];
        }

        if (array_key_exists("UserNameType",$param) and $param["UserNameType"] !== null) {
            $this->UserNameType = $param["UserNameType"];
        }

        if (array_key_exists("UserNameValue",$param) and $param["UserNameValue"] !== null) {
            $this->UserNameValue = $param["UserNameValue"];
        }

        if (array_key_exists("PasswordType",$param) and $param["PasswordType"] !== null) {
            $this->PasswordType = $param["PasswordType"];
        }

        if (array_key_exists("PasswordValue",$param) and $param["PasswordValue"] !== null) {
            $this->PasswordValue = $param["PasswordValue"];
        }

        if (array_key_exists("SubmitType",$param) and $param["SubmitType"] !== null) {
            $this->SubmitType = $param["SubmitType"];
        }

        if (array_key_exists("SubmitValue",$param) and $param["SubmitValue"] !== null) {
            $this->SubmitValue = $param["SubmitValue"];
        }
    }
}
