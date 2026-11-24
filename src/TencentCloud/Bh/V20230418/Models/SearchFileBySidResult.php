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
 * 文件操作搜索结果
 *
 * @method string getSid() 获取<p>会话Id</p>
 * @method void setSid(string $Sid) 设置<p>会话Id</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getInstanceId() 获取<p>实例Id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例Id</p>
 * @method string getAccount() 获取<p>资产账号</p>
 * @method void setAccount(string $Account) 设置<p>资产账号</p>
 * @method string getFromIp() 获取<p>来源Ip</p>
 * @method void setFromIp(string $FromIp) 设置<p>来源Ip</p>
 * @method string getTime() 获取<p>文件操作时间</p>
 * @method void setTime(string $Time) 设置<p>文件操作时间</p>
 * @method integer getMethod() 获取<p>1-上传文件 2-下载文件 3-删除文件 4-移动文件 5-重命名文件 6-新建文件夹 7-移动文件夹 8-重命名文件夹 9-删除文件夹</p>
 * @method void setMethod(integer $Method) 设置<p>1-上传文件 2-下载文件 3-删除文件 4-移动文件 5-重命名文件 6-新建文件夹 7-移动文件夹 8-重命名文件夹 9-删除文件夹</p>
 * @method string getProtocol() 获取<p>文件传输协议</p>
 * @method void setProtocol(string $Protocol) 设置<p>文件传输协议</p>
 * @method string getFileCurr() 获取<p>method为上传、下载、删除时文件在服务器上的位置, 或重命名、移动文件前文件的位置</p>
 * @method void setFileCurr(string $FileCurr) 设置<p>method为上传、下载、删除时文件在服务器上的位置, 或重命名、移动文件前文件的位置</p>
 * @method string getFileNew() 获取<p>method为重命名、移动文件时代表移动后的新位置.其他情况为null</p>
 * @method void setFileNew(string $FileNew) 设置<p>method为重命名、移动文件时代表移动后的新位置.其他情况为null</p>
 * @method integer getSize() 获取<p>method为上传文件、下载文件、删除文件时显示文件大小。其他情况为null</p>
 * @method void setSize(integer $Size) 设置<p>method为上传文件、下载文件、删除文件时显示文件大小。其他情况为null</p>
 * @method integer getAction() 获取<p>堡垒机拦截情况, 1-已放行，  2-已阻断</p>
 * @method void setAction(integer $Action) 设置<p>堡垒机拦截情况, 1-已放行，  2-已阻断</p>
 * @method string getConfirmTime() 获取<p>复核时间，当Action是3时，需有复核时间</p>
 * @method void setConfirmTime(string $ConfirmTime) 设置<p>复核时间，当Action是3时，需有复核时间</p>
 * @method string getUserDepartmentId() 获取<p>用户部门Id</p>
 * @method void setUserDepartmentId(string $UserDepartmentId) 设置<p>用户部门Id</p>
 * @method string getUserDepartmentName() 获取<p>用户部门name</p>
 * @method void setUserDepartmentName(string $UserDepartmentName) 设置<p>用户部门name</p>
 * @method string getDeviceDepartmentId() 获取<p>设备部门id</p>
 * @method void setDeviceDepartmentId(string $DeviceDepartmentId) 设置<p>设备部门id</p>
 * @method string getDeviceDepartmentName() 获取<p>设备部门name</p>
 * @method void setDeviceDepartmentName(string $DeviceDepartmentName) 设置<p>设备部门name</p>
 * @method string getSignValue() 获取<p>签名值</p>
 * @method void setSignValue(string $SignValue) 设置<p>签名值</p>
 */
class SearchFileBySidResult extends AbstractModel
{
    /**
     * @var string <p>会话Id</p>
     */
    public $Sid;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>实例Id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>资产账号</p>
     */
    public $Account;

    /**
     * @var string <p>来源Ip</p>
     */
    public $FromIp;

    /**
     * @var string <p>文件操作时间</p>
     */
    public $Time;

    /**
     * @var integer <p>1-上传文件 2-下载文件 3-删除文件 4-移动文件 5-重命名文件 6-新建文件夹 7-移动文件夹 8-重命名文件夹 9-删除文件夹</p>
     */
    public $Method;

    /**
     * @var string <p>文件传输协议</p>
     */
    public $Protocol;

    /**
     * @var string <p>method为上传、下载、删除时文件在服务器上的位置, 或重命名、移动文件前文件的位置</p>
     */
    public $FileCurr;

    /**
     * @var string <p>method为重命名、移动文件时代表移动后的新位置.其他情况为null</p>
     */
    public $FileNew;

    /**
     * @var integer <p>method为上传文件、下载文件、删除文件时显示文件大小。其他情况为null</p>
     */
    public $Size;

    /**
     * @var integer <p>堡垒机拦截情况, 1-已放行，  2-已阻断</p>
     */
    public $Action;

    /**
     * @var string <p>复核时间，当Action是3时，需有复核时间</p>
     */
    public $ConfirmTime;

    /**
     * @var string <p>用户部门Id</p>
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
     * @param string $Sid <p>会话Id</p>
     * @param string $UserName <p>用户名</p>
     * @param string $InstanceId <p>实例Id</p>
     * @param string $Account <p>资产账号</p>
     * @param string $FromIp <p>来源Ip</p>
     * @param string $Time <p>文件操作时间</p>
     * @param integer $Method <p>1-上传文件 2-下载文件 3-删除文件 4-移动文件 5-重命名文件 6-新建文件夹 7-移动文件夹 8-重命名文件夹 9-删除文件夹</p>
     * @param string $Protocol <p>文件传输协议</p>
     * @param string $FileCurr <p>method为上传、下载、删除时文件在服务器上的位置, 或重命名、移动文件前文件的位置</p>
     * @param string $FileNew <p>method为重命名、移动文件时代表移动后的新位置.其他情况为null</p>
     * @param integer $Size <p>method为上传文件、下载文件、删除文件时显示文件大小。其他情况为null</p>
     * @param integer $Action <p>堡垒机拦截情况, 1-已放行，  2-已阻断</p>
     * @param string $ConfirmTime <p>复核时间，当Action是3时，需有复核时间</p>
     * @param string $UserDepartmentId <p>用户部门Id</p>
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
        if (array_key_exists("Sid",$param) and $param["Sid"] !== null) {
            $this->Sid = $param["Sid"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("FromIp",$param) and $param["FromIp"] !== null) {
            $this->FromIp = $param["FromIp"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("FileCurr",$param) and $param["FileCurr"] !== null) {
            $this->FileCurr = $param["FileCurr"];
        }

        if (array_key_exists("FileNew",$param) and $param["FileNew"] !== null) {
            $this->FileNew = $param["FileNew"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
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
