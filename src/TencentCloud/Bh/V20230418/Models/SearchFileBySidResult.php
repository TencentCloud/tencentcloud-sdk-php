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
 * 文件操作搜索结果
 *
 * @method string getSid() 获取会话Id
 * @method void setSid(string $Sid) 设置会话Id
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getAccount() 获取资产账号
 * @method void setAccount(string $Account) 设置资产账号
 * @method string getFromIp() 获取来源Ip
 * @method void setFromIp(string $FromIp) 设置来源Ip
 * @method string getTime() 获取文件操作时间
 * @method void setTime(string $Time) 设置文件操作时间
 * @method integer getMethod() 获取1-上传文件 2-下载文件 3-删除文件 4-移动文件 5-重命名文件 6-新建文件夹 7-移动文件夹 8-重命名文件夹 9-删除文件夹
 * @method void setMethod(integer $Method) 设置1-上传文件 2-下载文件 3-删除文件 4-移动文件 5-重命名文件 6-新建文件夹 7-移动文件夹 8-重命名文件夹 9-删除文件夹
 * @method string getProtocol() 获取文件传输协议
 * @method void setProtocol(string $Protocol) 设置文件传输协议
 * @method string getFileCurr() 获取method为上传、下载、删除时文件在服务器上的位置, 或重命名、移动文件前文件的位置
 * @method void setFileCurr(string $FileCurr) 设置method为上传、下载、删除时文件在服务器上的位置, 或重命名、移动文件前文件的位置
 * @method string getFileNew() 获取method为重命名、移动文件时代表移动后的新位置.其他情况为null
 * @method void setFileNew(string $FileNew) 设置method为重命名、移动文件时代表移动后的新位置.其他情况为null
 * @method integer getSize() 获取method为上传文件、下载文件、删除文件时显示文件大小。其他情况为null
 * @method void setSize(integer $Size) 设置method为上传文件、下载文件、删除文件时显示文件大小。其他情况为null
 * @method integer getAction() 获取堡垒机拦截情况, 1-已执行，  2-被阻断
 * @method void setAction(integer $Action) 设置堡垒机拦截情况, 1-已执行，  2-被阻断
 * @method string getConfirmTime() 获取复核时间，当Action是3时，需有复核时间
 * @method void setConfirmTime(string $ConfirmTime) 设置复核时间，当Action是3时，需有复核时间
 * @method string getUserDepartmentId() 获取用户部门Id
 * @method void setUserDepartmentId(string $UserDepartmentId) 设置用户部门Id
 * @method string getUserDepartmentName() 获取用户部门name
 * @method void setUserDepartmentName(string $UserDepartmentName) 设置用户部门name
 * @method string getDeviceDepartmentId() 获取设备部门id
 * @method void setDeviceDepartmentId(string $DeviceDepartmentId) 设置设备部门id
 * @method string getDeviceDepartmentName() 获取设备部门name
 * @method void setDeviceDepartmentName(string $DeviceDepartmentName) 设置设备部门name
 * @method string getSignValue() 获取签名值
 * @method void setSignValue(string $SignValue) 设置签名值
 */
class SearchFileBySidResult extends AbstractModel
{
    /**
     * @var string 会话Id
     */
    public $Sid;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string 资产账号
     */
    public $Account;

    /**
     * @var string 来源Ip
     */
    public $FromIp;

    /**
     * @var string 文件操作时间
     */
    public $Time;

    /**
     * @var integer 1-上传文件 2-下载文件 3-删除文件 4-移动文件 5-重命名文件 6-新建文件夹 7-移动文件夹 8-重命名文件夹 9-删除文件夹
     */
    public $Method;

    /**
     * @var string 文件传输协议
     */
    public $Protocol;

    /**
     * @var string method为上传、下载、删除时文件在服务器上的位置, 或重命名、移动文件前文件的位置
     */
    public $FileCurr;

    /**
     * @var string method为重命名、移动文件时代表移动后的新位置.其他情况为null
     */
    public $FileNew;

    /**
     * @var integer method为上传文件、下载文件、删除文件时显示文件大小。其他情况为null
     */
    public $Size;

    /**
     * @var integer 堡垒机拦截情况, 1-已执行，  2-被阻断
     */
    public $Action;

    /**
     * @var string 复核时间，当Action是3时，需有复核时间
     */
    public $ConfirmTime;

    /**
     * @var string 用户部门Id
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
     * @param string $Sid 会话Id
     * @param string $UserName 用户名
     * @param string $InstanceId 实例Id
     * @param string $Account 资产账号
     * @param string $FromIp 来源Ip
     * @param string $Time 文件操作时间
     * @param integer $Method 1-上传文件 2-下载文件 3-删除文件 4-移动文件 5-重命名文件 6-新建文件夹 7-移动文件夹 8-重命名文件夹 9-删除文件夹
     * @param string $Protocol 文件传输协议
     * @param string $FileCurr method为上传、下载、删除时文件在服务器上的位置, 或重命名、移动文件前文件的位置
     * @param string $FileNew method为重命名、移动文件时代表移动后的新位置.其他情况为null
     * @param integer $Size method为上传文件、下载文件、删除文件时显示文件大小。其他情况为null
     * @param integer $Action 堡垒机拦截情况, 1-已执行，  2-被阻断
     * @param string $ConfirmTime 复核时间，当Action是3时，需有复核时间
     * @param string $UserDepartmentId 用户部门Id
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
