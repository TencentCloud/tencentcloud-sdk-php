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
 * 客户端设置相关功能主机结构体
 *
 * @method integer getId() 获取<p>host对应的数据库记录ID</p>
 * @method void setId(integer $Id) 设置<p>host对应的数据库记录ID</p>
 * @method string getName() 获取<p>主机名字</p>
 * @method void setName(string $Name) 设置<p>主机名字</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getPublicIp() 获取<p>公网IP</p>
 * @method void setPublicIp(string $PublicIp) 设置<p>公网IP</p>
 * @method string getPrivateIp() 获取<p>内网IP</p>
 * @method void setPrivateIp(string $PrivateIp) 设置<p>内网IP</p>
 * @method string getQuuid() 获取<p>主机Quuid</p>
 * @method void setQuuid(string $Quuid) 设置<p>主机Quuid</p>
 * @method string getStatus() 获取<p>主机状态<br>OFFLINE: 离线<br>ONLINE: 在线<br>SHUTDOWN: 已关机<br>UNINSTALLED: 未防护</p>
 * @method void setStatus(string $Status) 设置<p>主机状态<br>OFFLINE: 离线<br>ONLINE: 在线<br>SHUTDOWN: 已关机<br>UNINSTALLED: 未防护</p>
 * @method string getVpcId() 获取<p>ins-sad143</p>
 * @method void setVpcId(string $VpcId) 设置<p>ins-sad143</p>
 * @method RegionInfo getRegionInfo() 获取<p>地域信息</p>
 * @method void setRegionInfo(RegionInfo $RegionInfo) 设置<p>地域信息</p>
 * @method MachineExtraInfo getMachineExtraInfo() 获取<p>附加信息</p>
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置<p>附加信息</p>
 * @method integer getFunctionStatus() 获取<p>0: 关闭<br>1:  开启<br>2: 开启中<br>3:  关闭中<br>9: 未设置</p>
 * @method void setFunctionStatus(integer $FunctionStatus) 设置<p>0: 关闭<br>1:  开启<br>2: 开启中<br>3:  关闭中<br>9: 未设置</p>
 * @method string getMessage() 获取<p>以下几个固定值需要前端特殊处理，其他失败原因可直接展示：</p><ol><li>UNINSTALLED   -- 未安装</li><li>NEED_UPGRADE -- 需要升级</li><li>NOT_RUNNING -- 已关机</li><li>NO_PASSWORD -- 未开启密码登录，无法开启扫码</li></ol>
 * @method void setMessage(string $Message) 设置<p>以下几个固定值需要前端特殊处理，其他失败原因可直接展示：</p><ol><li>UNINSTALLED   -- 未安装</li><li>NEED_UPGRADE -- 需要升级</li><li>NOT_RUNNING -- 已关机</li><li>NO_PASSWORD -- 未开启密码登录，无法开启扫码</li></ol>
 * @method string getMessageDesc() 获取<p>失败原因</p>
 * @method void setMessageDesc(string $MessageDesc) 设置<p>失败原因</p>
 * @method string getInstanceStatus() 获取<p>实例状态<br>RUNNING: 运行中<br>STOPED: 已关机<br>EXPIRED: 待回收</p>
 * @method void setInstanceStatus(string $InstanceStatus) 设置<p>实例状态<br>RUNNING: 运行中<br>STOPED: 已关机<br>EXPIRED: 待回收</p>
 */
class ClientSettingHost extends AbstractModel
{
    /**
     * @var integer <p>host对应的数据库记录ID</p>
     */
    public $Id;

    /**
     * @var string <p>主机名字</p>
     */
    public $Name;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>公网IP</p>
     */
    public $PublicIp;

    /**
     * @var string <p>内网IP</p>
     */
    public $PrivateIp;

    /**
     * @var string <p>主机Quuid</p>
     */
    public $Quuid;

    /**
     * @var string <p>主机状态<br>OFFLINE: 离线<br>ONLINE: 在线<br>SHUTDOWN: 已关机<br>UNINSTALLED: 未防护</p>
     */
    public $Status;

    /**
     * @var string <p>ins-sad143</p>
     */
    public $VpcId;

    /**
     * @var RegionInfo <p>地域信息</p>
     */
    public $RegionInfo;

    /**
     * @var MachineExtraInfo <p>附加信息</p>
     */
    public $MachineExtraInfo;

    /**
     * @var integer <p>0: 关闭<br>1:  开启<br>2: 开启中<br>3:  关闭中<br>9: 未设置</p>
     */
    public $FunctionStatus;

    /**
     * @var string <p>以下几个固定值需要前端特殊处理，其他失败原因可直接展示：</p><ol><li>UNINSTALLED   -- 未安装</li><li>NEED_UPGRADE -- 需要升级</li><li>NOT_RUNNING -- 已关机</li><li>NO_PASSWORD -- 未开启密码登录，无法开启扫码</li></ol>
     */
    public $Message;

    /**
     * @var string <p>失败原因</p>
     */
    public $MessageDesc;

    /**
     * @var string <p>实例状态<br>RUNNING: 运行中<br>STOPED: 已关机<br>EXPIRED: 待回收</p>
     */
    public $InstanceStatus;

    /**
     * @param integer $Id <p>host对应的数据库记录ID</p>
     * @param string $Name <p>主机名字</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $PublicIp <p>公网IP</p>
     * @param string $PrivateIp <p>内网IP</p>
     * @param string $Quuid <p>主机Quuid</p>
     * @param string $Status <p>主机状态<br>OFFLINE: 离线<br>ONLINE: 在线<br>SHUTDOWN: 已关机<br>UNINSTALLED: 未防护</p>
     * @param string $VpcId <p>ins-sad143</p>
     * @param RegionInfo $RegionInfo <p>地域信息</p>
     * @param MachineExtraInfo $MachineExtraInfo <p>附加信息</p>
     * @param integer $FunctionStatus <p>0: 关闭<br>1:  开启<br>2: 开启中<br>3:  关闭中<br>9: 未设置</p>
     * @param string $Message <p>以下几个固定值需要前端特殊处理，其他失败原因可直接展示：</p><ol><li>UNINSTALLED   -- 未安装</li><li>NEED_UPGRADE -- 需要升级</li><li>NOT_RUNNING -- 已关机</li><li>NO_PASSWORD -- 未开启密码登录，无法开启扫码</li></ol>
     * @param string $MessageDesc <p>失败原因</p>
     * @param string $InstanceStatus <p>实例状态<br>RUNNING: 运行中<br>STOPED: 已关机<br>EXPIRED: 待回收</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("FunctionStatus",$param) and $param["FunctionStatus"] !== null) {
            $this->FunctionStatus = $param["FunctionStatus"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("MessageDesc",$param) and $param["MessageDesc"] !== null) {
            $this->MessageDesc = $param["MessageDesc"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }
    }
}
