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
 * @method string getTime() 获取<p>文件传输的时间</p>
 * @method void setTime(string $Time) 设置<p>文件传输的时间</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getRealName() 获取<p>姓名</p>
 * @method void setRealName(string $RealName) 设置<p>姓名</p>
 * @method string getInstanceId() 获取<p>资产ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>资产ID</p>
 * @method string getDeviceName() 获取<p>资产名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>资产名称</p>
 * @method string getPublicIp() 获取<p>资产公网IP</p>
 * @method void setPublicIp(string $PublicIp) 设置<p>资产公网IP</p>
 * @method string getPrivateIp() 获取<p>资产内网IP</p>
 * @method void setPrivateIp(string $PrivateIp) 设置<p>资产内网IP</p>
 * @method integer getAction() 获取<p>操作结果：1 - 已放行，2 - 已阻断</p>
 * @method void setAction(integer $Action) 设置<p>操作结果：1 - 已放行，2 - 已阻断</p>
 * @method integer getMethod() 获取<p>操作类型：1 - 文件上传，2 - 文件下载，3 - 文件删除，4 - 文件(夹)移动，5 - 文件(夹)重命名，6 - 新建文件夹，9 - 删除文件夹</p>
 * @method void setMethod(integer $Method) 设置<p>操作类型：1 - 文件上传，2 - 文件下载，3 - 文件删除，4 - 文件(夹)移动，5 - 文件(夹)重命名，6 - 新建文件夹，9 - 删除文件夹</p>
 * @method string getFileCurr() 获取<p>下载的文件（夹）路径及名称</p>
 * @method void setFileCurr(string $FileCurr) 设置<p>下载的文件（夹）路径及名称</p>
 * @method string getFileNew() 获取<p>上传或新建文件（夹）路径及名称</p>
 * @method void setFileNew(string $FileNew) 设置<p>上传或新建文件（夹）路径及名称</p>
 * @method string getSid() 获取<p>会话id</p>
 * @method void setSid(string $Sid) 设置<p>会话id</p>
 * @method string getAccount() 获取<p>账号</p>
 * @method void setAccount(string $Account) 设置<p>账号</p>
 * @method string getFromIp() 获取<p>来源id</p>
 * @method void setFromIp(string $FromIp) 设置<p>来源id</p>
 * @method string getProtocol() 获取<p>协议</p>
 * @method void setProtocol(string $Protocol) 设置<p>协议</p>
 * @method integer getSize() 获取<p>文件大小</p>
 * @method void setSize(integer $Size) 设置<p>文件大小</p>
 * @method string getConfirmTime() 获取<p>复核时间</p>
 * @method void setConfirmTime(string $ConfirmTime) 设置<p>复核时间</p>
 * @method string getUserDepartmentId() 获取<p>用户部门id</p>
 * @method void setUserDepartmentId(string $UserDepartmentId) 设置<p>用户部门id</p>
 * @method string getUserDepartmentName() 获取<p>用户部门name</p>
 * @method void setUserDepartmentName(string $UserDepartmentName) 设置<p>用户部门name</p>
 * @method string getDeviceDepartmentId() 获取<p>设备部门id</p>
 * @method void setDeviceDepartmentId(string $DeviceDepartmentId) 设置<p>设备部门id</p>
 * @method string getDeviceDepartmentName() 获取<p>设备部门name</p>
 * @method void setDeviceDepartmentName(string $DeviceDepartmentName) 设置<p>设备部门name</p>
 * @method string getSignValue() 获取<p>签名值</p>
 * @method void setSignValue(string $SignValue) 设置<p>签名值</p>
 */
class SearchFileResult extends AbstractModel
{
    /**
     * @var string <p>文件传输的时间</p>
     */
    public $Time;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>姓名</p>
     */
    public $RealName;

    /**
     * @var string <p>资产ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>资产名称</p>
     */
    public $DeviceName;

    /**
     * @var string <p>资产公网IP</p>
     */
    public $PublicIp;

    /**
     * @var string <p>资产内网IP</p>
     */
    public $PrivateIp;

    /**
     * @var integer <p>操作结果：1 - 已放行，2 - 已阻断</p>
     */
    public $Action;

    /**
     * @var integer <p>操作类型：1 - 文件上传，2 - 文件下载，3 - 文件删除，4 - 文件(夹)移动，5 - 文件(夹)重命名，6 - 新建文件夹，9 - 删除文件夹</p>
     */
    public $Method;

    /**
     * @var string <p>下载的文件（夹）路径及名称</p>
     */
    public $FileCurr;

    /**
     * @var string <p>上传或新建文件（夹）路径及名称</p>
     */
    public $FileNew;

    /**
     * @var string <p>会话id</p>
     */
    public $Sid;

    /**
     * @var string <p>账号</p>
     */
    public $Account;

    /**
     * @var string <p>来源id</p>
     */
    public $FromIp;

    /**
     * @var string <p>协议</p>
     */
    public $Protocol;

    /**
     * @var integer <p>文件大小</p>
     */
    public $Size;

    /**
     * @var string <p>复核时间</p>
     */
    public $ConfirmTime;

    /**
     * @var string <p>用户部门id</p>
     */
    public $UserDepartmentId;

    /**
     * @var string <p>用户部门name</p>
     */
    public $UserDepartmentName;

    /**
     * @var string <p>设备部门id</p>
     */
    public $DeviceDepartmentId;

    /**
     * @var string <p>设备部门name</p>
     */
    public $DeviceDepartmentName;

    /**
     * @var string <p>签名值</p>
     */
    public $SignValue;

    /**
     * @param string $Time <p>文件传输的时间</p>
     * @param string $UserName <p>用户名</p>
     * @param string $RealName <p>姓名</p>
     * @param string $InstanceId <p>资产ID</p>
     * @param string $DeviceName <p>资产名称</p>
     * @param string $PublicIp <p>资产公网IP</p>
     * @param string $PrivateIp <p>资产内网IP</p>
     * @param integer $Action <p>操作结果：1 - 已放行，2 - 已阻断</p>
     * @param integer $Method <p>操作类型：1 - 文件上传，2 - 文件下载，3 - 文件删除，4 - 文件(夹)移动，5 - 文件(夹)重命名，6 - 新建文件夹，9 - 删除文件夹</p>
     * @param string $FileCurr <p>下载的文件（夹）路径及名称</p>
     * @param string $FileNew <p>上传或新建文件（夹）路径及名称</p>
     * @param string $Sid <p>会话id</p>
     * @param string $Account <p>账号</p>
     * @param string $FromIp <p>来源id</p>
     * @param string $Protocol <p>协议</p>
     * @param integer $Size <p>文件大小</p>
     * @param string $ConfirmTime <p>复核时间</p>
     * @param string $UserDepartmentId <p>用户部门id</p>
     * @param string $UserDepartmentName <p>用户部门name</p>
     * @param string $DeviceDepartmentId <p>设备部门id</p>
     * @param string $DeviceDepartmentName <p>设备部门name</p>
     * @param string $SignValue <p>签名值</p>
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
