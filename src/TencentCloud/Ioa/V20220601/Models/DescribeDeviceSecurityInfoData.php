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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 终端安全信息
 *
 * @method integer getFirewallStatus() 获取<p>防火墙状态</p><p>枚举值：</p><ul><li>0：未开启</li><li>1：已开启</li></ul>
 * @method void setFirewallStatus(integer $FirewallStatus) 设置<p>防火墙状态</p><p>枚举值：</p><ul><li>0：未开启</li><li>1：已开启</li></ul>
 * @method integer getRealTimeProtectionStatus() 获取<p>实时防护状态</p><p>枚举值：</p><ul><li>0：未开启</li><li>1：部分开启</li><li>2：已开启</li><li>-1：未知</li></ul>
 * @method void setRealTimeProtectionStatus(integer $RealTimeProtectionStatus) 设置<p>实时防护状态</p><p>枚举值：</p><ul><li>0：未开启</li><li>1：部分开启</li><li>2：已开启</li><li>-1：未知</li></ul>
 * @method string getSysRepVersion() 获取<p>系统修复引擎版本</p>
 * @method void setSysRepVersion(string $SysRepVersion) 设置<p>系统修复引擎版本</p>
 * @method string getVirusVer() 获取<p>病毒库版本</p>
 * @method void setVirusVer(string $VirusVer) 设置<p>病毒库版本</p>
 * @method string getVulVersion() 获取<p>漏洞库版本</p>
 * @method void setVulVersion(string $VulVersion) 设置<p>漏洞库版本</p>
 */
class DescribeDeviceSecurityInfoData extends AbstractModel
{
    /**
     * @var integer <p>防火墙状态</p><p>枚举值：</p><ul><li>0：未开启</li><li>1：已开启</li></ul>
     */
    public $FirewallStatus;

    /**
     * @var integer <p>实时防护状态</p><p>枚举值：</p><ul><li>0：未开启</li><li>1：部分开启</li><li>2：已开启</li><li>-1：未知</li></ul>
     */
    public $RealTimeProtectionStatus;

    /**
     * @var string <p>系统修复引擎版本</p>
     */
    public $SysRepVersion;

    /**
     * @var string <p>病毒库版本</p>
     */
    public $VirusVer;

    /**
     * @var string <p>漏洞库版本</p>
     */
    public $VulVersion;

    /**
     * @param integer $FirewallStatus <p>防火墙状态</p><p>枚举值：</p><ul><li>0：未开启</li><li>1：已开启</li></ul>
     * @param integer $RealTimeProtectionStatus <p>实时防护状态</p><p>枚举值：</p><ul><li>0：未开启</li><li>1：部分开启</li><li>2：已开启</li><li>-1：未知</li></ul>
     * @param string $SysRepVersion <p>系统修复引擎版本</p>
     * @param string $VirusVer <p>病毒库版本</p>
     * @param string $VulVersion <p>漏洞库版本</p>
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
        if (array_key_exists("FirewallStatus",$param) and $param["FirewallStatus"] !== null) {
            $this->FirewallStatus = $param["FirewallStatus"];
        }

        if (array_key_exists("RealTimeProtectionStatus",$param) and $param["RealTimeProtectionStatus"] !== null) {
            $this->RealTimeProtectionStatus = $param["RealTimeProtectionStatus"];
        }

        if (array_key_exists("SysRepVersion",$param) and $param["SysRepVersion"] !== null) {
            $this->SysRepVersion = $param["SysRepVersion"];
        }

        if (array_key_exists("VirusVer",$param) and $param["VirusVer"] !== null) {
            $this->VirusVer = $param["VirusVer"];
        }

        if (array_key_exists("VulVersion",$param) and $param["VulVersion"] !== null) {
            $this->VulVersion = $param["VulVersion"];
        }
    }
}
