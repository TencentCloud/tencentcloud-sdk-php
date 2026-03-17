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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户端设置相关功能主机结构体
 *
 * @method integer getId() 获取host对应的数据库记录ID
 * @method void setId(integer $Id) 设置host对应的数据库记录ID
 * @method string getName() 获取主机名字
 * @method void setName(string $Name) 设置主机名字
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getPublicIp() 获取公网IP
 * @method void setPublicIp(string $PublicIp) 设置公网IP
 * @method string getPrivateIp() 获取内网IP
 * @method void setPrivateIp(string $PrivateIp) 设置内网IP
 * @method string getQuuid() 获取主机Quuid
 * @method void setQuuid(string $Quuid) 设置主机Quuid
 * @method string getStatus() 获取主机状态
<li>OFFLINE: 离线  </li>
<li>ONLINE: 在线</li>
<li>SHUTDOWN: 已关机</li>
<li>UNINSTALLED: 未防护</li>
 * @method void setStatus(string $Status) 设置主机状态
<li>OFFLINE: 离线  </li>
<li>ONLINE: 在线</li>
<li>SHUTDOWN: 已关机</li>
<li>UNINSTALLED: 未防护</li>
 * @method string getVpcId() 获取ins-sad143
 * @method void setVpcId(string $VpcId) 设置ins-sad143
 * @method RegionInfo getRegionInfo() 获取地域信息
 * @method void setRegionInfo(RegionInfo $RegionInfo) 设置地域信息
 * @method MachineExtraInfo getMachineExtraInfo() 获取附加信息
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置附加信息
 * @method integer getFunctionStatus() 获取<li>0: 关闭 </li>
<li>1:  开启</li>
<li>2: 开启中 </li>
<li>3:  关闭中</li>
<li>9: 未设置</li>
 * @method void setFunctionStatus(integer $FunctionStatus) 设置<li>0: 关闭 </li>
<li>1:  开启</li>
<li>2: 开启中 </li>
<li>3:  关闭中</li>
<li>9: 未设置</li>
 * @method string getMessage() 获取以下几个固定值需要前端特殊处理，其他失败原因可直接展示：
1. UNINSTALLED   -- 未安装
2. NEED_UPGRADE -- 需要升级
3. NOT_RUNNING -- 已关机
4. NO_PASSWORD -- 未开启密码登录，无法开启扫码
 * @method void setMessage(string $Message) 设置以下几个固定值需要前端特殊处理，其他失败原因可直接展示：
1. UNINSTALLED   -- 未安装
2. NEED_UPGRADE -- 需要升级
3. NOT_RUNNING -- 已关机
4. NO_PASSWORD -- 未开启密码登录，无法开启扫码
 * @method string getMessageDesc() 获取失败原因
 * @method void setMessageDesc(string $MessageDesc) 设置失败原因
 * @method string getInstanceStatus() 获取实例状态
<li>RUNNING: 运行中</li>
<li>STOPED: 已关机</li>
<li>EXPIRED: 待回收</li>
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例状态
<li>RUNNING: 运行中</li>
<li>STOPED: 已关机</li>
<li>EXPIRED: 待回收</li>
 */
class ClientSettingHost extends AbstractModel
{
    /**
     * @var integer host对应的数据库记录ID
     */
    public $Id;

    /**
     * @var string 主机名字
     */
    public $Name;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 公网IP
     */
    public $PublicIp;

    /**
     * @var string 内网IP
     */
    public $PrivateIp;

    /**
     * @var string 主机Quuid
     */
    public $Quuid;

    /**
     * @var string 主机状态
<li>OFFLINE: 离线  </li>
<li>ONLINE: 在线</li>
<li>SHUTDOWN: 已关机</li>
<li>UNINSTALLED: 未防护</li>
     */
    public $Status;

    /**
     * @var string ins-sad143
     */
    public $VpcId;

    /**
     * @var RegionInfo 地域信息
     */
    public $RegionInfo;

    /**
     * @var MachineExtraInfo 附加信息
     */
    public $MachineExtraInfo;

    /**
     * @var integer <li>0: 关闭 </li>
<li>1:  开启</li>
<li>2: 开启中 </li>
<li>3:  关闭中</li>
<li>9: 未设置</li>
     */
    public $FunctionStatus;

    /**
     * @var string 以下几个固定值需要前端特殊处理，其他失败原因可直接展示：
1. UNINSTALLED   -- 未安装
2. NEED_UPGRADE -- 需要升级
3. NOT_RUNNING -- 已关机
4. NO_PASSWORD -- 未开启密码登录，无法开启扫码
     */
    public $Message;

    /**
     * @var string 失败原因
     */
    public $MessageDesc;

    /**
     * @var string 实例状态
<li>RUNNING: 运行中</li>
<li>STOPED: 已关机</li>
<li>EXPIRED: 待回收</li>
     */
    public $InstanceStatus;

    /**
     * @param integer $Id host对应的数据库记录ID
     * @param string $Name 主机名字
     * @param string $InstanceId 实例ID
     * @param string $PublicIp 公网IP
     * @param string $PrivateIp 内网IP
     * @param string $Quuid 主机Quuid
     * @param string $Status 主机状态
<li>OFFLINE: 离线  </li>
<li>ONLINE: 在线</li>
<li>SHUTDOWN: 已关机</li>
<li>UNINSTALLED: 未防护</li>
     * @param string $VpcId ins-sad143
     * @param RegionInfo $RegionInfo 地域信息
     * @param MachineExtraInfo $MachineExtraInfo 附加信息
     * @param integer $FunctionStatus <li>0: 关闭 </li>
<li>1:  开启</li>
<li>2: 开启中 </li>
<li>3:  关闭中</li>
<li>9: 未设置</li>
     * @param string $Message 以下几个固定值需要前端特殊处理，其他失败原因可直接展示：
1. UNINSTALLED   -- 未安装
2. NEED_UPGRADE -- 需要升级
3. NOT_RUNNING -- 已关机
4. NO_PASSWORD -- 未开启密码登录，无法开启扫码
     * @param string $MessageDesc 失败原因
     * @param string $InstanceStatus 实例状态
<li>RUNNING: 运行中</li>
<li>STOPED: 已关机</li>
<li>EXPIRED: 待回收</li>
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
