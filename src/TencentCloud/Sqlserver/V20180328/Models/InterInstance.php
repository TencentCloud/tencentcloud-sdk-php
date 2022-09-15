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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 互通组内实例信息详情
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInterVip() 获取实例互通IP，用于加入互通组后访问
 * @method void setInterVip(string $InterVip) 设置实例互通IP，用于加入互通组后访问
 * @method integer getInterPort() 获取实例互通端口，用于加入互通组后访问
 * @method void setInterPort(integer $InterPort) 设置实例互通端口，用于加入互通组后访问
 * @method integer getStatus() 获取实例互通状态，1 -互通ipprot打开中 2 -互通ipprot已经打开 3 -已经打开互通ip的实例加入到互通组中 4 -已经打开互通ip的实例已加入到互通组 5 -互通ipprot回收中 6 -互通ipprot已回收 7 -已回收的实例从互通组中移除中 8 -已回收的实例从互通组中已经移除
 * @method void setStatus(integer $Status) 设置实例互通状态，1 -互通ipprot打开中 2 -互通ipprot已经打开 3 -已经打开互通ip的实例加入到互通组中 4 -已经打开互通ip的实例已加入到互通组 5 -互通ipprot回收中 6 -互通ipprot已回收 7 -已回收的实例从互通组中移除中 8 -已回收的实例从互通组中已经移除
 * @method string getRegion() 获取实例所在地域名称，如 ap-guangzhou
 * @method void setRegion(string $Region) 设置实例所在地域名称，如 ap-guangzhou
 * @method string getZone() 获取实例所在可用区名称，如 ap-guangzhou-1
 * @method void setZone(string $Zone) 设置实例所在可用区名称，如 ap-guangzhou-1
 * @method string getVersion() 获取实例版本代号
 * @method void setVersion(string $Version) 设置实例版本代号
 * @method string getVersionName() 获取实例版本
 * @method void setVersionName(string $VersionName) 设置实例版本
 * @method string getName() 获取实例名称
 * @method void setName(string $Name) 设置实例名称
 * @method string getVip() 获取实例访问IP
 * @method void setVip(string $Vip) 设置实例访问IP
 * @method integer getVport() 获取实例访问端口
 * @method void setVport(integer $Vport) 设置实例访问端口
 */
class InterInstance extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例互通IP，用于加入互通组后访问
     */
    public $InterVip;

    /**
     * @var integer 实例互通端口，用于加入互通组后访问
     */
    public $InterPort;

    /**
     * @var integer 实例互通状态，1 -互通ipprot打开中 2 -互通ipprot已经打开 3 -已经打开互通ip的实例加入到互通组中 4 -已经打开互通ip的实例已加入到互通组 5 -互通ipprot回收中 6 -互通ipprot已回收 7 -已回收的实例从互通组中移除中 8 -已回收的实例从互通组中已经移除
     */
    public $Status;

    /**
     * @var string 实例所在地域名称，如 ap-guangzhou
     */
    public $Region;

    /**
     * @var string 实例所在可用区名称，如 ap-guangzhou-1
     */
    public $Zone;

    /**
     * @var string 实例版本代号
     */
    public $Version;

    /**
     * @var string 实例版本
     */
    public $VersionName;

    /**
     * @var string 实例名称
     */
    public $Name;

    /**
     * @var string 实例访问IP
     */
    public $Vip;

    /**
     * @var integer 实例访问端口
     */
    public $Vport;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InterVip 实例互通IP，用于加入互通组后访问
     * @param integer $InterPort 实例互通端口，用于加入互通组后访问
     * @param integer $Status 实例互通状态，1 -互通ipprot打开中 2 -互通ipprot已经打开 3 -已经打开互通ip的实例加入到互通组中 4 -已经打开互通ip的实例已加入到互通组 5 -互通ipprot回收中 6 -互通ipprot已回收 7 -已回收的实例从互通组中移除中 8 -已回收的实例从互通组中已经移除
     * @param string $Region 实例所在地域名称，如 ap-guangzhou
     * @param string $Zone 实例所在可用区名称，如 ap-guangzhou-1
     * @param string $Version 实例版本代号
     * @param string $VersionName 实例版本
     * @param string $Name 实例名称
     * @param string $Vip 实例访问IP
     * @param integer $Vport 实例访问端口
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InterVip",$param) and $param["InterVip"] !== null) {
            $this->InterVip = $param["InterVip"];
        }

        if (array_key_exists("InterPort",$param) and $param["InterPort"] !== null) {
            $this->InterPort = $param["InterPort"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }
    }
}
