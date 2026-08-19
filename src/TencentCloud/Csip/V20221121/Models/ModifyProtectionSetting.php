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
 * 防护设置对象
 *
 * @method string getQUUID() 获取资产唯一ID
 * @method void setQUUID(string $QUUID) 设置资产唯一ID
 * @method integer getEnable() 获取总开关 0关闭 1开启
 * @method void setEnable(integer $Enable) 设置总开关 0关闭 1开启
 * @method integer getVulDefEnable() 获取漏洞防护开关 0: 关闭 1:开启
 * @method void setVulDefEnable(integer $VulDefEnable) 设置漏洞防护开关 0: 关闭 1:开启
 * @method integer getVulDefMode() 获取漏洞防护模式 0: 标准 1: 重保
 * @method void setVulDefMode(integer $VulDefMode) 设置漏洞防护模式 0: 标准 1: 重保
 * @method integer getVulDefAction() 获取漏洞防护动作 0: 仅检测 1: 检测+防御
 * @method void setVulDefAction(integer $VulDefAction) 设置漏洞防护动作 0: 仅检测 1: 检测+防御
 * @method integer getMemShellDefEnable() 获取内存马防御开关 0: 关闭 1:开启
 * @method void setMemShellDefEnable(integer $MemShellDefEnable) 设置内存马防御开关 0: 关闭 1:开启
 * @method integer getPerformanceLimit() 获取性能限制开关 0: 关闭 1:开启
 * @method void setPerformanceLimit(integer $PerformanceLimit) 设置性能限制开关 0: 关闭 1:开启
 * @method integer getPerformanceLimitCpu() 获取CPU阈值 取值1-99
 * @method void setPerformanceLimitCpu(integer $PerformanceLimitCpu) 设置CPU阈值 取值1-99
 * @method integer getPerformanceLimitMem() 获取内存阈值 取值1-99
 * @method void setPerformanceLimitMem(integer $PerformanceLimitMem) 设置内存阈值 取值1-99
 * @method integer getPerformanceLimitMemAmount() 获取内存剩余阈值
 * @method void setPerformanceLimitMemAmount(integer $PerformanceLimitMemAmount) 设置内存剩余阈值
 * @method integer getSafeInject() 获取更多防护, 0: 不注入会重启的进程 1: 注入会重启的进程
 * @method void setSafeInject(integer $SafeInject) 设置更多防护, 0: 不注入会重启的进程 1: 注入会重启的进程
 */
class ModifyProtectionSetting extends AbstractModel
{
    /**
     * @var string 资产唯一ID
     */
    public $QUUID;

    /**
     * @var integer 总开关 0关闭 1开启
     */
    public $Enable;

    /**
     * @var integer 漏洞防护开关 0: 关闭 1:开启
     */
    public $VulDefEnable;

    /**
     * @var integer 漏洞防护模式 0: 标准 1: 重保
     */
    public $VulDefMode;

    /**
     * @var integer 漏洞防护动作 0: 仅检测 1: 检测+防御
     */
    public $VulDefAction;

    /**
     * @var integer 内存马防御开关 0: 关闭 1:开启
     */
    public $MemShellDefEnable;

    /**
     * @var integer 性能限制开关 0: 关闭 1:开启
     */
    public $PerformanceLimit;

    /**
     * @var integer CPU阈值 取值1-99
     */
    public $PerformanceLimitCpu;

    /**
     * @var integer 内存阈值 取值1-99
     */
    public $PerformanceLimitMem;

    /**
     * @var integer 内存剩余阈值
     */
    public $PerformanceLimitMemAmount;

    /**
     * @var integer 更多防护, 0: 不注入会重启的进程 1: 注入会重启的进程
     */
    public $SafeInject;

    /**
     * @param string $QUUID 资产唯一ID
     * @param integer $Enable 总开关 0关闭 1开启
     * @param integer $VulDefEnable 漏洞防护开关 0: 关闭 1:开启
     * @param integer $VulDefMode 漏洞防护模式 0: 标准 1: 重保
     * @param integer $VulDefAction 漏洞防护动作 0: 仅检测 1: 检测+防御
     * @param integer $MemShellDefEnable 内存马防御开关 0: 关闭 1:开启
     * @param integer $PerformanceLimit 性能限制开关 0: 关闭 1:开启
     * @param integer $PerformanceLimitCpu CPU阈值 取值1-99
     * @param integer $PerformanceLimitMem 内存阈值 取值1-99
     * @param integer $PerformanceLimitMemAmount 内存剩余阈值
     * @param integer $SafeInject 更多防护, 0: 不注入会重启的进程 1: 注入会重启的进程
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
        if (array_key_exists("QUUID",$param) and $param["QUUID"] !== null) {
            $this->QUUID = $param["QUUID"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("VulDefEnable",$param) and $param["VulDefEnable"] !== null) {
            $this->VulDefEnable = $param["VulDefEnable"];
        }

        if (array_key_exists("VulDefMode",$param) and $param["VulDefMode"] !== null) {
            $this->VulDefMode = $param["VulDefMode"];
        }

        if (array_key_exists("VulDefAction",$param) and $param["VulDefAction"] !== null) {
            $this->VulDefAction = $param["VulDefAction"];
        }

        if (array_key_exists("MemShellDefEnable",$param) and $param["MemShellDefEnable"] !== null) {
            $this->MemShellDefEnable = $param["MemShellDefEnable"];
        }

        if (array_key_exists("PerformanceLimit",$param) and $param["PerformanceLimit"] !== null) {
            $this->PerformanceLimit = $param["PerformanceLimit"];
        }

        if (array_key_exists("PerformanceLimitCpu",$param) and $param["PerformanceLimitCpu"] !== null) {
            $this->PerformanceLimitCpu = $param["PerformanceLimitCpu"];
        }

        if (array_key_exists("PerformanceLimitMem",$param) and $param["PerformanceLimitMem"] !== null) {
            $this->PerformanceLimitMem = $param["PerformanceLimitMem"];
        }

        if (array_key_exists("PerformanceLimitMemAmount",$param) and $param["PerformanceLimitMemAmount"] !== null) {
            $this->PerformanceLimitMemAmount = $param["PerformanceLimitMemAmount"];
        }

        if (array_key_exists("SafeInject",$param) and $param["SafeInject"] !== null) {
            $this->SafeInject = $param["SafeInject"];
        }
    }
}
