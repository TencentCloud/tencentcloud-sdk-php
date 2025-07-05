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
 * 文件传输检索结果
 *
 * @method string getTime() 获取文件传输的时间
 * @method void setTime(string $Time) 设置文件传输的时间
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getRealName() 获取姓名
 * @method void setRealName(string $RealName) 设置姓名
 * @method string getInstanceId() 获取资产ID
 * @method void setInstanceId(string $InstanceId) 设置资产ID
 * @method string getDeviceName() 获取资产名称
 * @method void setDeviceName(string $DeviceName) 设置资产名称
 * @method string getPublicIp() 获取资产公网IP
 * @method void setPublicIp(string $PublicIp) 设置资产公网IP
 * @method string getPrivateIp() 获取资产内网IP
 * @method void setPrivateIp(string $PrivateIp) 设置资产内网IP
 * @method integer getAction() 获取操作结果：1 - 已执行，2 - 已阻断
 * @method void setAction(integer $Action) 设置操作结果：1 - 已执行，2 - 已阻断
 * @method integer getMethod() 获取操作类型：1 - 文件上传，2 - 文件下载，3 - 文件删除，4 - 文件(夹)移动，5 - 文件(夹)重命名，6 - 新建文件夹，9 - 删除文件夹
 * @method void setMethod(integer $Method) 设置操作类型：1 - 文件上传，2 - 文件下载，3 - 文件删除，4 - 文件(夹)移动，5 - 文件(夹)重命名，6 - 新建文件夹，9 - 删除文件夹
 * @method string getFileCurr() 获取下载的文件（夹）路径及名称
 * @method void setFileCurr(string $FileCurr) 设置下载的文件（夹）路径及名称
 * @method string getFileNew() 获取上传或新建文件（夹）路径及名称
 * @method void setFileNew(string $FileNew) 设置上传或新建文件（夹）路径及名称
 * @method string getSid() 获取会话id
 * @method void setSid(string $Sid) 设置会话id
 * @method string getAccount() 获取账号
 * @method void setAccount(string $Account) 设置账号
 * @method string getFromIp() 获取来源id
 * @method void setFromIp(string $FromIp) 设置来源id
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method integer getSize() 获取文件大小
 * @method void setSize(integer $Size) 设置文件大小
 * @method string getConfirmTime() 获取复核时间
 * @method void setConfirmTime(string $ConfirmTime) 设置复核时间
 * @method string getUserDepartmentId() 获取用户部门id
 * @method void setUserDepartmentId(string $UserDepartmentId) 设置用户部门id
 * @method string getUserDepartmentName() 获取用户部门name
 * @method void setUserDepartmentName(string $UserDepartmentName) 设置用户部门name
 * @method string getDeviceDepartmentId() 获取设备部门id
 * @method void setDeviceDepartmentId(string $DeviceDepartmentId) 设置设备部门id
 * @method string getDeviceDepartmentName() 获取设备部门name	
 * @method void setDeviceDepartmentName(string $DeviceDepartmentName) 设置设备部门name	
 * @method string getSignValue() 获取签名值
 * @method void setSignValue(string $SignValue) 设置签名值
 */
class SearchFileResult extends AbstractModel
{
    /**
     * @var string 文件传输的时间
     */
    public $Time;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 姓名
     */
    public $RealName;

    /**
     * @var string 资产ID
     */
    public $InstanceId;

    /**
     * @var string 资产名称
     */
    public $DeviceName;

    /**
     * @var string 资产公网IP
     */
    public $PublicIp;

    /**
     * @var string 资产内网IP
     */
    public $PrivateIp;

    /**
     * @var integer 操作结果：1 - 已执行，2 - 已阻断
     */
    public $Action;

    /**
     * @var integer 操作类型：1 - 文件上传，2 - 文件下载，3 - 文件删除，4 - 文件(夹)移动，5 - 文件(夹)重命名，6 - 新建文件夹，9 - 删除文件夹
     */
    public $Method;

    /**
     * @var string 下载的文件（夹）路径及名称
     */
    public $FileCurr;

    /**
     * @var string 上传或新建文件（夹）路径及名称
     */
    public $FileNew;

    /**
     * @var string 会话id
     */
    public $Sid;

    /**
     * @var string 账号
     */
    public $Account;

    /**
     * @var string 来源id
     */
    public $FromIp;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var integer 文件大小
     */
    public $Size;

    /**
     * @var string 复核时间
     */
    public $ConfirmTime;

    /**
     * @var string 用户部门id
     */
    public $UserDepartmentId;

    /**
     * @var string 用户部门name
     */
    public $UserDepartmentName;

    /**
     * @var string 设备部门id
     */
    public $DeviceDepartmentId;

    /**
     * @var string 设备部门name	
     */
    public $DeviceDepartmentName;

    /**
     * @var string 签名值
     */
    public $SignValue;

    /**
     * @param string $Time 文件传输的时间
     * @param string $UserName 用户名
     * @param string $RealName 姓名
     * @param string $InstanceId 资产ID
     * @param string $DeviceName 资产名称
     * @param string $PublicIp 资产公网IP
     * @param string $PrivateIp 资产内网IP
     * @param integer $Action 操作结果：1 - 已执行，2 - 已阻断
     * @param integer $Method 操作类型：1 - 文件上传，2 - 文件下载，3 - 文件删除，4 - 文件(夹)移动，5 - 文件(夹)重命名，6 - 新建文件夹，9 - 删除文件夹
     * @param string $FileCurr 下载的文件（夹）路径及名称
     * @param string $FileNew 上传或新建文件（夹）路径及名称
     * @param string $Sid 会话id
     * @param string $Account 账号
     * @param string $FromIp 来源id
     * @param string $Protocol 协议
     * @param integer $Size 文件大小
     * @param string $ConfirmTime 复核时间
     * @param string $UserDepartmentId 用户部门id
     * @param string $UserDepartmentName 用户部门name
     * @param string $DeviceDepartmentId 设备部门id
     * @param string $DeviceDepartmentName 设备部门name	
     * @param string $SignValue 签名值
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            $this->RealName = $param["RealName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("FileCurr",$param) and $param["FileCurr"] !== null) {
            $this->FileCurr = $param["FileCurr"];
        }

        if (array_key_exists("FileNew",$param) and $param["FileNew"] !== null) {
            $this->FileNew = $param["FileNew"];
        }

        if (array_key_exists("Sid",$param) and $param["Sid"] !== null) {
            $this->Sid = $param["Sid"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("FromIp",$param) and $param["FromIp"] !== null) {
            $this->FromIp = $param["FromIp"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("ConfirmTime",$param) and $param["ConfirmTime"] !== null) {
            $this->ConfirmTime = $param["ConfirmTime"];
        }

        if (array_key_exists("UserDepartmentId",$param) and $param["UserDepartmentId"] !== null) {
            $this->UserDepartmentId = $param["UserDepartmentId"];
        }

        if (array_key_exists("UserDepartmentName",$param) and $param["UserDepartmentName"] !== null) {
            $this->UserDepartmentName = $param["UserDepartmentName"];
        }

        if (array_key_exists("DeviceDepartmentId",$param) and $param["DeviceDepartmentId"] !== null) {
            $this->DeviceDepartmentId = $param["DeviceDepartmentId"];
        }

        if (array_key_exists("DeviceDepartmentName",$param) and $param["DeviceDepartmentName"] !== null) {
            $this->DeviceDepartmentName = $param["DeviceDepartmentName"];
        }

        if (array_key_exists("SignValue",$param) and $param["SignValue"] !== null) {
            $this->SignValue = $param["SignValue"];
        }
    }
}
