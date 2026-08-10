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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞扫描任务详情
 *
 * @method string getId() 获取<p>任务id</p>
 * @method void setId(string $Id) 设置<p>任务id</p>
 * @method integer getAppId() 获取<p>创建者AppId</p>
 * @method void setAppId(integer $AppId) 设置<p>创建者AppId</p>
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getPublicIp() 获取<p>公网ip</p>
 * @method void setPublicIp(string $PublicIp) 设置<p>公网ip</p>
 * @method string getPrivateIp() 获取<p>内网ip</p>
 * @method void setPrivateIp(string $PrivateIp) 设置<p>内网ip</p>
 * @method string getOS() 获取<p>操作系统</p>
 * @method void setOS(string $OS) 设置<p>操作系统</p>
 * @method string getStatus() 获取<p>扫描状态（SUCCESS: 扫描完成/成功, OFFLINE: 客户端离线, TIMEOUT: 扫描超时, FAILED: 扫描失败, UNSUPPORTED: 客户端版本过低/不支持扫描, TERMINATED: 已终止, TERMINATING: 终止中）</p><p>枚举值：</p><ul><li>SCANNING： 扫描中</li></ul>
 * @method void setStatus(string $Status) 设置<p>扫描状态（SUCCESS: 扫描完成/成功, OFFLINE: 客户端离线, TIMEOUT: 扫描超时, FAILED: 扫描失败, UNSUPPORTED: 客户端版本过低/不支持扫描, TERMINATED: 已终止, TERMINATING: 终止中）</p><p>枚举值：</p><ul><li>SCANNING： 扫描中</li></ul>
 * @method string getStartTime() 获取<p>扫描开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>扫描开始时间</p>
 * @method string getEndTime() 获取<p>扫描结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>扫描结束时间</p>
 * @method integer getVuls() 获取<p>漏洞数量</p>
 * @method void setVuls(integer $Vuls) 设置<p>漏洞数量</p>
 * @method string getDescription() 获取<p>失败原因</p>
 * @method void setDescription(string $Description) 设置<p>失败原因</p>
 */
class VulScanTaskDetail extends AbstractModel
{
    /**
     * @var string <p>任务id</p>
     */
    public $Id;

    /**
     * @var integer <p>创建者AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>公网ip</p>
     */
    public $PublicIp;

    /**
     * @var string <p>内网ip</p>
     */
    public $PrivateIp;

    /**
     * @var string <p>操作系统</p>
     */
    public $OS;

    /**
     * @var string <p>扫描状态（SUCCESS: 扫描完成/成功, OFFLINE: 客户端离线, TIMEOUT: 扫描超时, FAILED: 扫描失败, UNSUPPORTED: 客户端版本过低/不支持扫描, TERMINATED: 已终止, TERMINATING: 终止中）</p><p>枚举值：</p><ul><li>SCANNING： 扫描中</li></ul>
     */
    public $Status;

    /**
     * @var string <p>扫描开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>扫描结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>漏洞数量</p>
     */
    public $Vuls;

    /**
     * @var string <p>失败原因</p>
     */
    public $Description;

    /**
     * @param string $Id <p>任务id</p>
     * @param integer $AppId <p>创建者AppId</p>
     * @param string $InstanceId <p>实例id</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $PublicIp <p>公网ip</p>
     * @param string $PrivateIp <p>内网ip</p>
     * @param string $OS <p>操作系统</p>
     * @param string $Status <p>扫描状态（SUCCESS: 扫描完成/成功, OFFLINE: 客户端离线, TIMEOUT: 扫描超时, FAILED: 扫描失败, UNSUPPORTED: 客户端版本过低/不支持扫描, TERMINATED: 已终止, TERMINATING: 终止中）</p><p>枚举值：</p><ul><li>SCANNING： 扫描中</li></ul>
     * @param string $StartTime <p>扫描开始时间</p>
     * @param string $EndTime <p>扫描结束时间</p>
     * @param integer $Vuls <p>漏洞数量</p>
     * @param string $Description <p>失败原因</p>
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("OS",$param) and $param["OS"] !== null) {
            $this->OS = $param["OS"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Vuls",$param) and $param["Vuls"] !== null) {
            $this->Vuls = $param["Vuls"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
