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
 * 修改主机登录方式失败详情
 *
 * @method string getMachineName() 获取<p>主机名称</p>
 * @method void setMachineName(string $MachineName) 设置<p>主机名称</p>
 * @method string getInstanceId() 获取<p>主机实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>主机实例ID</p>
 * @method string getMachineIp() 获取<p>主机内网IP</p>
 * @method void setMachineIp(string $MachineIp) 设置<p>主机内网IP</p>
 * @method string getMachineWanIp() 获取<p>主机公网IP</p>
 * @method void setMachineWanIp(string $MachineWanIp) 设置<p>主机公网IP</p>
 * @method string getRegion() 获取<p>主机可用区</p>
 * @method void setRegion(string $Region) 设置<p>主机可用区</p>
 * @method string getMachineType() 获取<p>主机类型</p>
 * @method void setMachineType(string $MachineType) 设置<p>主机类型</p>
 * @method string getMessage() 获取<p>以下几个固定值需要前端特殊处理，其他失败原因可直接展示：</p><ol><li>UNINSTALLED   -- 未安装</li><li>NEED_UPGRADE -- 需要升级</li><li>NOT_RUNNING -- 已关机</li><li>NO_PASSWORD -- 未开启密码登录，无法开启扫码</li></ol>
 * @method void setMessage(string $Message) 设置<p>以下几个固定值需要前端特殊处理，其他失败原因可直接展示：</p><ol><li>UNINSTALLED   -- 未安装</li><li>NEED_UPGRADE -- 需要升级</li><li>NOT_RUNNING -- 已关机</li><li>NO_PASSWORD -- 未开启密码登录，无法开启扫码</li></ol>
 * @method string getMessageDesc() 获取<p>失败原因</p>
 * @method void setMessageDesc(string $MessageDesc) 设置<p>失败原因</p>
 */
class ModifyLoginTypeFailInfo extends AbstractModel
{
    /**
     * @var string <p>主机名称</p>
     */
    public $MachineName;

    /**
     * @var string <p>主机实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>主机内网IP</p>
     */
    public $MachineIp;

    /**
     * @var string <p>主机公网IP</p>
     */
    public $MachineWanIp;

    /**
     * @var string <p>主机可用区</p>
     */
    public $Region;

    /**
     * @var string <p>主机类型</p>
     */
    public $MachineType;

    /**
     * @var string <p>以下几个固定值需要前端特殊处理，其他失败原因可直接展示：</p><ol><li>UNINSTALLED   -- 未安装</li><li>NEED_UPGRADE -- 需要升级</li><li>NOT_RUNNING -- 已关机</li><li>NO_PASSWORD -- 未开启密码登录，无法开启扫码</li></ol>
     */
    public $Message;

    /**
     * @var string <p>失败原因</p>
     */
    public $MessageDesc;

    /**
     * @param string $MachineName <p>主机名称</p>
     * @param string $InstanceId <p>主机实例ID</p>
     * @param string $MachineIp <p>主机内网IP</p>
     * @param string $MachineWanIp <p>主机公网IP</p>
     * @param string $Region <p>主机可用区</p>
     * @param string $MachineType <p>主机类型</p>
     * @param string $Message <p>以下几个固定值需要前端特殊处理，其他失败原因可直接展示：</p><ol><li>UNINSTALLED   -- 未安装</li><li>NEED_UPGRADE -- 需要升级</li><li>NOT_RUNNING -- 已关机</li><li>NO_PASSWORD -- 未开启密码登录，无法开启扫码</li></ol>
     * @param string $MessageDesc <p>失败原因</p>
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
        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("MessageDesc",$param) and $param["MessageDesc"] !== null) {
            $this->MessageDesc = $param["MessageDesc"];
        }
    }
}
