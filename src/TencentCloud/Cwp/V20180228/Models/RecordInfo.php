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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户端异常信息结构
 *
 * @method string getHostIP() 获取主机ip
 * @method void setHostIP(string $HostIP) 设置主机ip
 * @method string getInstanceID() 获取主机实例id
 * @method void setInstanceID(string $InstanceID) 设置主机实例id
 * @method string getOfflineTime() 获取客户端离线时间
 * @method void setOfflineTime(string $OfflineTime) 设置客户端离线时间
 * @method string getUninstallTime() 获取客户端卸载时间
 * @method void setUninstallTime(string $UninstallTime) 设置客户端卸载时间
 * @method string getUninstallCmd() 获取客户端卸载调用链
 * @method void setUninstallCmd(string $UninstallCmd) 设置客户端卸载调用链
 * @method string getUuid() 获取客户端uuid
 * @method void setUuid(string $Uuid) 设置客户端uuid
 */
class RecordInfo extends AbstractModel
{
    /**
     * @var string 主机ip
     */
    public $HostIP;

    /**
     * @var string 主机实例id
     */
    public $InstanceID;

    /**
     * @var string 客户端离线时间
     */
    public $OfflineTime;

    /**
     * @var string 客户端卸载时间
     */
    public $UninstallTime;

    /**
     * @var string 客户端卸载调用链
     */
    public $UninstallCmd;

    /**
     * @var string 客户端uuid
     */
    public $Uuid;

    /**
     * @param string $HostIP 主机ip
     * @param string $InstanceID 主机实例id
     * @param string $OfflineTime 客户端离线时间
     * @param string $UninstallTime 客户端卸载时间
     * @param string $UninstallCmd 客户端卸载调用链
     * @param string $Uuid 客户端uuid
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
        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("UninstallTime",$param) and $param["UninstallTime"] !== null) {
            $this->UninstallTime = $param["UninstallTime"];
        }

        if (array_key_exists("UninstallCmd",$param) and $param["UninstallCmd"] !== null) {
            $this->UninstallCmd = $param["UninstallCmd"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
