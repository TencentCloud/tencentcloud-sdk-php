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
 * 主机漏洞扫描状态
 *
 * @method boolean getHasScanned() 获取是否发起过漏洞扫描
枚举值：
true：已发起过漏洞扫描
false：从未发起过漏洞扫描
 * @method void setHasScanned(boolean $HasScanned) 设置是否发起过漏洞扫描
枚举值：
true：已发起过漏洞扫描
false：从未发起过漏洞扫描
 * @method boolean getIsFirstScan() 获取是否处于首次漏洞扫描判断场景
枚举值：
true：处于首次漏洞扫描判断场景
false：不处于首次漏洞扫描判断场景
 * @method void setIsFirstScan(boolean $IsFirstScan) 设置是否处于首次漏洞扫描判断场景
枚举值：
true：处于首次漏洞扫描判断场景
false：不处于首次漏洞扫描判断场景
 * @method string getScanTaskStatus() 获取最近一次扫描任务状态
枚举值：
SCANNING：扫描中
SUCCESS：扫描成功
PARTIAL_FAILED：部分扫描失败
ALL_FAILED：全部扫描失败
STOPPED：停止扫描
 * @method void setScanTaskStatus(string $ScanTaskStatus) 设置最近一次扫描任务状态
枚举值：
SCANNING：扫描中
SUCCESS：扫描成功
PARTIAL_FAILED：部分扫描失败
ALL_FAILED：全部扫描失败
STOPPED：停止扫描
 * @method string getScanScene() 获取页面业务状态
枚举值：
NEVER_SCANNED：从未扫描过漏洞
SCANNING：扫描中
FIRST_SCAN_FAILED：首次漏洞扫描失败
FIRST_SCAN_HAS_FIXABLE_VUL：首次扫描完成，存在可修复漏洞
FIRST_SCAN_NO_FIXABLE_VUL：首次扫描完成，有漏洞但无可修复漏洞
FIRST_SCAN_NO_VUL：首次扫描完成，没有漏洞
SCANNED_HAS_FIXABLE_VUL：非首次扫描，存在可修复漏洞
SCANNED_NO_FIXABLE_VUL：非首次扫描，有漏洞但无可修复漏洞
SCANNED_NO_VUL：非首次扫描，没有漏洞
 * @method void setScanScene(string $ScanScene) 设置页面业务状态
枚举值：
NEVER_SCANNED：从未扫描过漏洞
SCANNING：扫描中
FIRST_SCAN_FAILED：首次漏洞扫描失败
FIRST_SCAN_HAS_FIXABLE_VUL：首次扫描完成，存在可修复漏洞
FIRST_SCAN_NO_FIXABLE_VUL：首次扫描完成，有漏洞但无可修复漏洞
FIRST_SCAN_NO_VUL：首次扫描完成，没有漏洞
SCANNED_HAS_FIXABLE_VUL：非首次扫描，存在可修复漏洞
SCANNED_NO_FIXABLE_VUL：非首次扫描，有漏洞但无可修复漏洞
SCANNED_NO_VUL：非首次扫描，没有漏洞
 * @method string getLatestScanTime() 获取最近扫描时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
从未扫描时返回空字符串。
 * @method void setLatestScanTime(string $LatestScanTime) 设置最近扫描时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
从未扫描时返回空字符串。
 * @method integer getTotalVulCount() 获取当前待处理漏洞总数
包含普通主机漏洞和最新 Windows KB 待处理风险。
 * @method void setTotalVulCount(integer $TotalVulCount) 设置当前待处理漏洞总数
包含普通主机漏洞和最新 Windows KB 待处理风险。
 * @method integer getFixableVulCount() 获取当前可修复漏洞数
包含支持一键修复的普通主机漏洞和最新 Windows KB 待处理风险。
 * @method void setFixableVulCount(integer $FixableVulCount) 设置当前可修复漏洞数
包含支持一键修复的普通主机漏洞和最新 Windows KB 待处理风险。
 * @method integer getFixableEmergencyCount() 获取当前可修复应急漏洞数
应急漏洞优先归类：应急漏洞仅计入该字段，不再计入 Linux 软件漏洞数。
 * @method void setFixableEmergencyCount(integer $FixableEmergencyCount) 设置当前可修复应急漏洞数
应急漏洞优先归类：应急漏洞仅计入该字段，不再计入 Linux 软件漏洞数。
 * @method integer getFixableLinuxVulCount() 获取当前可修复 Linux 软件漏洞数
仅统计非应急 Linux 软件漏洞。
 * @method void setFixableLinuxVulCount(integer $FixableLinuxVulCount) 设置当前可修复 Linux 软件漏洞数
仅统计非应急 Linux 软件漏洞。
 * @method integer getFixableWindowVulCount() 获取当前可修复 Windows 系统补丁数
统计最新 Windows KB 待处理风险。
 * @method void setFixableWindowVulCount(integer $FixableWindowVulCount) 设置当前可修复 Windows 系统补丁数
统计最新 Windows KB 待处理风险。
 */
class HostVulScanStatus extends AbstractModel
{
    /**
     * @var boolean 是否发起过漏洞扫描
枚举值：
true：已发起过漏洞扫描
false：从未发起过漏洞扫描
     */
    public $HasScanned;

    /**
     * @var boolean 是否处于首次漏洞扫描判断场景
枚举值：
true：处于首次漏洞扫描判断场景
false：不处于首次漏洞扫描判断场景
     */
    public $IsFirstScan;

    /**
     * @var string 最近一次扫描任务状态
枚举值：
SCANNING：扫描中
SUCCESS：扫描成功
PARTIAL_FAILED：部分扫描失败
ALL_FAILED：全部扫描失败
STOPPED：停止扫描
     */
    public $ScanTaskStatus;

    /**
     * @var string 页面业务状态
枚举值：
NEVER_SCANNED：从未扫描过漏洞
SCANNING：扫描中
FIRST_SCAN_FAILED：首次漏洞扫描失败
FIRST_SCAN_HAS_FIXABLE_VUL：首次扫描完成，存在可修复漏洞
FIRST_SCAN_NO_FIXABLE_VUL：首次扫描完成，有漏洞但无可修复漏洞
FIRST_SCAN_NO_VUL：首次扫描完成，没有漏洞
SCANNED_HAS_FIXABLE_VUL：非首次扫描，存在可修复漏洞
SCANNED_NO_FIXABLE_VUL：非首次扫描，有漏洞但无可修复漏洞
SCANNED_NO_VUL：非首次扫描，没有漏洞
     */
    public $ScanScene;

    /**
     * @var string 最近扫描时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
从未扫描时返回空字符串。
     */
    public $LatestScanTime;

    /**
     * @var integer 当前待处理漏洞总数
包含普通主机漏洞和最新 Windows KB 待处理风险。
     */
    public $TotalVulCount;

    /**
     * @var integer 当前可修复漏洞数
包含支持一键修复的普通主机漏洞和最新 Windows KB 待处理风险。
     */
    public $FixableVulCount;

    /**
     * @var integer 当前可修复应急漏洞数
应急漏洞优先归类：应急漏洞仅计入该字段，不再计入 Linux 软件漏洞数。
     */
    public $FixableEmergencyCount;

    /**
     * @var integer 当前可修复 Linux 软件漏洞数
仅统计非应急 Linux 软件漏洞。
     */
    public $FixableLinuxVulCount;

    /**
     * @var integer 当前可修复 Windows 系统补丁数
统计最新 Windows KB 待处理风险。
     */
    public $FixableWindowVulCount;

    /**
     * @param boolean $HasScanned 是否发起过漏洞扫描
枚举值：
true：已发起过漏洞扫描
false：从未发起过漏洞扫描
     * @param boolean $IsFirstScan 是否处于首次漏洞扫描判断场景
枚举值：
true：处于首次漏洞扫描判断场景
false：不处于首次漏洞扫描判断场景
     * @param string $ScanTaskStatus 最近一次扫描任务状态
枚举值：
SCANNING：扫描中
SUCCESS：扫描成功
PARTIAL_FAILED：部分扫描失败
ALL_FAILED：全部扫描失败
STOPPED：停止扫描
     * @param string $ScanScene 页面业务状态
枚举值：
NEVER_SCANNED：从未扫描过漏洞
SCANNING：扫描中
FIRST_SCAN_FAILED：首次漏洞扫描失败
FIRST_SCAN_HAS_FIXABLE_VUL：首次扫描完成，存在可修复漏洞
FIRST_SCAN_NO_FIXABLE_VUL：首次扫描完成，有漏洞但无可修复漏洞
FIRST_SCAN_NO_VUL：首次扫描完成，没有漏洞
SCANNED_HAS_FIXABLE_VUL：非首次扫描，存在可修复漏洞
SCANNED_NO_FIXABLE_VUL：非首次扫描，有漏洞但无可修复漏洞
SCANNED_NO_VUL：非首次扫描，没有漏洞
     * @param string $LatestScanTime 最近扫描时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
从未扫描时返回空字符串。
     * @param integer $TotalVulCount 当前待处理漏洞总数
包含普通主机漏洞和最新 Windows KB 待处理风险。
     * @param integer $FixableVulCount 当前可修复漏洞数
包含支持一键修复的普通主机漏洞和最新 Windows KB 待处理风险。
     * @param integer $FixableEmergencyCount 当前可修复应急漏洞数
应急漏洞优先归类：应急漏洞仅计入该字段，不再计入 Linux 软件漏洞数。
     * @param integer $FixableLinuxVulCount 当前可修复 Linux 软件漏洞数
仅统计非应急 Linux 软件漏洞。
     * @param integer $FixableWindowVulCount 当前可修复 Windows 系统补丁数
统计最新 Windows KB 待处理风险。
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
        if (array_key_exists("HasScanned",$param) and $param["HasScanned"] !== null) {
            $this->HasScanned = $param["HasScanned"];
        }

        if (array_key_exists("IsFirstScan",$param) and $param["IsFirstScan"] !== null) {
            $this->IsFirstScan = $param["IsFirstScan"];
        }

        if (array_key_exists("ScanTaskStatus",$param) and $param["ScanTaskStatus"] !== null) {
            $this->ScanTaskStatus = $param["ScanTaskStatus"];
        }

        if (array_key_exists("ScanScene",$param) and $param["ScanScene"] !== null) {
            $this->ScanScene = $param["ScanScene"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("TotalVulCount",$param) and $param["TotalVulCount"] !== null) {
            $this->TotalVulCount = $param["TotalVulCount"];
        }

        if (array_key_exists("FixableVulCount",$param) and $param["FixableVulCount"] !== null) {
            $this->FixableVulCount = $param["FixableVulCount"];
        }

        if (array_key_exists("FixableEmergencyCount",$param) and $param["FixableEmergencyCount"] !== null) {
            $this->FixableEmergencyCount = $param["FixableEmergencyCount"];
        }

        if (array_key_exists("FixableLinuxVulCount",$param) and $param["FixableLinuxVulCount"] !== null) {
            $this->FixableLinuxVulCount = $param["FixableLinuxVulCount"];
        }

        if (array_key_exists("FixableWindowVulCount",$param) and $param["FixableWindowVulCount"] !== null) {
            $this->FixableWindowVulCount = $param["FixableWindowVulCount"];
        }
    }
}
