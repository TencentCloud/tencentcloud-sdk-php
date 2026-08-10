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
 * 主机漏洞概要
 *
 * @method integer getUrgentRepairCount() 获取<p>需立即修复漏洞数（VPR 评级为 URGENT 的漏洞数量）</p>
 * @method void setUrgentRepairCount(integer $UrgentRepairCount) 设置<p>需立即修复漏洞数（VPR 评级为 URGENT 的漏洞数量）</p>
 * @method integer getDefendHostCount() 获取<p>已开启漏洞防御的主机数</p>
 * @method void setDefendHostCount(integer $DefendHostCount) 设置<p>已开启漏洞防御的主机数</p>
 * @method integer getTotalHostCount() 获取<p>主机总数</p>
 * @method void setTotalHostCount(integer $TotalHostCount) 设置<p>主机总数</p>
 * @method integer getFixedVulCount() 获取<p>已修复漏洞总次数</p>
 * @method void setFixedVulCount(integer $FixedVulCount) 设置<p>已修复漏洞总次数</p>
 * @method integer getLinuxVulCount() 获取<p>Linux 软件漏洞数</p>
 * @method void setLinuxVulCount(integer $LinuxVulCount) 设置<p>Linux 软件漏洞数</p>
 * @method integer getWindowVulCount() 获取<p>Windows 系统补丁数</p>
 * @method void setWindowVulCount(integer $WindowVulCount) 设置<p>Windows 系统补丁数</p>
 * @method integer getWebCMSVulCount() 获取<p>Web-CMS 漏洞数</p>
 * @method void setWebCMSVulCount(integer $WebCMSVulCount) 设置<p>Web-CMS 漏洞数</p>
 * @method integer getAppVulCount() 获取<p>应用漏洞数</p>
 * @method void setAppVulCount(integer $AppVulCount) 设置<p>应用漏洞数</p>
 * @method integer getEmergencyCount() 获取<p>应急漏洞数</p>
 * @method void setEmergencyCount(integer $EmergencyCount) 设置<p>应急漏洞数</p>
 * @method integer getVulItemCount() 获取<p>漏洞知识库总数</p>
 * @method void setVulItemCount(integer $VulItemCount) 设置<p>漏洞知识库总数</p>
 * @method string getLatestScanTime() 获取<p>最近扫描时间</p><p>参数格式：YYYY-MM-DDTHH:mm:ssZ</p>
 * @method void setLatestScanTime(string $LatestScanTime) 设置<p>最近扫描时间</p><p>参数格式：YYYY-MM-DDTHH:mm:ssZ</p>
 * @method integer getEnableTimingScan() 获取<p>是否开启周期扫描</p><p>枚举值：</p><ul><li>1： 开启</li><li>0： 未开启</li></ul>
 * @method void setEnableTimingScan(integer $EnableTimingScan) 设置<p>是否开启周期扫描</p><p>枚举值：</p><ul><li>1： 开启</li><li>0： 未开启</li></ul>
 * @method integer getCriticalRepairCount() 获取<p>严重修复数</p>
 * @method void setCriticalRepairCount(integer $CriticalRepairCount) 设置<p>严重修复数</p>
 * @method integer getCriticalRepairLinuxVulCount() 获取<p>严重修复Linux漏洞数</p>
 * @method void setCriticalRepairLinuxVulCount(integer $CriticalRepairLinuxVulCount) 设置<p>严重修复Linux漏洞数</p>
 * @method integer getCriticalRepairAppVulCount() 获取<p>严重修复应用漏洞数</p>
 * @method void setCriticalRepairAppVulCount(integer $CriticalRepairAppVulCount) 设置<p>严重修复应用漏洞数</p>
 * @method integer getCriticalRepairWebCMSVulCount() 获取<p>严重修复Web-CMS漏洞数</p>
 * @method void setCriticalRepairWebCMSVulCount(integer $CriticalRepairWebCMSVulCount) 设置<p>严重修复Web-CMS漏洞数</p>
 * @method integer getCriticalRepairEmergencyCount() 获取<p>严重修复紧急漏洞数</p>
 * @method void setCriticalRepairEmergencyCount(integer $CriticalRepairEmergencyCount) 设置<p>严重修复紧急漏洞数</p>
 */
class HostVulOverview extends AbstractModel
{
    /**
     * @var integer <p>需立即修复漏洞数（VPR 评级为 URGENT 的漏洞数量）</p>
     */
    public $UrgentRepairCount;

    /**
     * @var integer <p>已开启漏洞防御的主机数</p>
     */
    public $DefendHostCount;

    /**
     * @var integer <p>主机总数</p>
     */
    public $TotalHostCount;

    /**
     * @var integer <p>已修复漏洞总次数</p>
     */
    public $FixedVulCount;

    /**
     * @var integer <p>Linux 软件漏洞数</p>
     */
    public $LinuxVulCount;

    /**
     * @var integer <p>Windows 系统补丁数</p>
     */
    public $WindowVulCount;

    /**
     * @var integer <p>Web-CMS 漏洞数</p>
     */
    public $WebCMSVulCount;

    /**
     * @var integer <p>应用漏洞数</p>
     */
    public $AppVulCount;

    /**
     * @var integer <p>应急漏洞数</p>
     */
    public $EmergencyCount;

    /**
     * @var integer <p>漏洞知识库总数</p>
     */
    public $VulItemCount;

    /**
     * @var string <p>最近扫描时间</p><p>参数格式：YYYY-MM-DDTHH:mm:ssZ</p>
     */
    public $LatestScanTime;

    /**
     * @var integer <p>是否开启周期扫描</p><p>枚举值：</p><ul><li>1： 开启</li><li>0： 未开启</li></ul>
     */
    public $EnableTimingScan;

    /**
     * @var integer <p>严重修复数</p>
     */
    public $CriticalRepairCount;

    /**
     * @var integer <p>严重修复Linux漏洞数</p>
     */
    public $CriticalRepairLinuxVulCount;

    /**
     * @var integer <p>严重修复应用漏洞数</p>
     */
    public $CriticalRepairAppVulCount;

    /**
     * @var integer <p>严重修复Web-CMS漏洞数</p>
     */
    public $CriticalRepairWebCMSVulCount;

    /**
     * @var integer <p>严重修复紧急漏洞数</p>
     */
    public $CriticalRepairEmergencyCount;

    /**
     * @param integer $UrgentRepairCount <p>需立即修复漏洞数（VPR 评级为 URGENT 的漏洞数量）</p>
     * @param integer $DefendHostCount <p>已开启漏洞防御的主机数</p>
     * @param integer $TotalHostCount <p>主机总数</p>
     * @param integer $FixedVulCount <p>已修复漏洞总次数</p>
     * @param integer $LinuxVulCount <p>Linux 软件漏洞数</p>
     * @param integer $WindowVulCount <p>Windows 系统补丁数</p>
     * @param integer $WebCMSVulCount <p>Web-CMS 漏洞数</p>
     * @param integer $AppVulCount <p>应用漏洞数</p>
     * @param integer $EmergencyCount <p>应急漏洞数</p>
     * @param integer $VulItemCount <p>漏洞知识库总数</p>
     * @param string $LatestScanTime <p>最近扫描时间</p><p>参数格式：YYYY-MM-DDTHH:mm:ssZ</p>
     * @param integer $EnableTimingScan <p>是否开启周期扫描</p><p>枚举值：</p><ul><li>1： 开启</li><li>0： 未开启</li></ul>
     * @param integer $CriticalRepairCount <p>严重修复数</p>
     * @param integer $CriticalRepairLinuxVulCount <p>严重修复Linux漏洞数</p>
     * @param integer $CriticalRepairAppVulCount <p>严重修复应用漏洞数</p>
     * @param integer $CriticalRepairWebCMSVulCount <p>严重修复Web-CMS漏洞数</p>
     * @param integer $CriticalRepairEmergencyCount <p>严重修复紧急漏洞数</p>
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
        if (array_key_exists("UrgentRepairCount",$param) and $param["UrgentRepairCount"] !== null) {
            $this->UrgentRepairCount = $param["UrgentRepairCount"];
        }

        if (array_key_exists("DefendHostCount",$param) and $param["DefendHostCount"] !== null) {
            $this->DefendHostCount = $param["DefendHostCount"];
        }

        if (array_key_exists("TotalHostCount",$param) and $param["TotalHostCount"] !== null) {
            $this->TotalHostCount = $param["TotalHostCount"];
        }

        if (array_key_exists("FixedVulCount",$param) and $param["FixedVulCount"] !== null) {
            $this->FixedVulCount = $param["FixedVulCount"];
        }

        if (array_key_exists("LinuxVulCount",$param) and $param["LinuxVulCount"] !== null) {
            $this->LinuxVulCount = $param["LinuxVulCount"];
        }

        if (array_key_exists("WindowVulCount",$param) and $param["WindowVulCount"] !== null) {
            $this->WindowVulCount = $param["WindowVulCount"];
        }

        if (array_key_exists("WebCMSVulCount",$param) and $param["WebCMSVulCount"] !== null) {
            $this->WebCMSVulCount = $param["WebCMSVulCount"];
        }

        if (array_key_exists("AppVulCount",$param) and $param["AppVulCount"] !== null) {
            $this->AppVulCount = $param["AppVulCount"];
        }

        if (array_key_exists("EmergencyCount",$param) and $param["EmergencyCount"] !== null) {
            $this->EmergencyCount = $param["EmergencyCount"];
        }

        if (array_key_exists("VulItemCount",$param) and $param["VulItemCount"] !== null) {
            $this->VulItemCount = $param["VulItemCount"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("EnableTimingScan",$param) and $param["EnableTimingScan"] !== null) {
            $this->EnableTimingScan = $param["EnableTimingScan"];
        }

        if (array_key_exists("CriticalRepairCount",$param) and $param["CriticalRepairCount"] !== null) {
            $this->CriticalRepairCount = $param["CriticalRepairCount"];
        }

        if (array_key_exists("CriticalRepairLinuxVulCount",$param) and $param["CriticalRepairLinuxVulCount"] !== null) {
            $this->CriticalRepairLinuxVulCount = $param["CriticalRepairLinuxVulCount"];
        }

        if (array_key_exists("CriticalRepairAppVulCount",$param) and $param["CriticalRepairAppVulCount"] !== null) {
            $this->CriticalRepairAppVulCount = $param["CriticalRepairAppVulCount"];
        }

        if (array_key_exists("CriticalRepairWebCMSVulCount",$param) and $param["CriticalRepairWebCMSVulCount"] !== null) {
            $this->CriticalRepairWebCMSVulCount = $param["CriticalRepairWebCMSVulCount"];
        }

        if (array_key_exists("CriticalRepairEmergencyCount",$param) and $param["CriticalRepairEmergencyCount"] !== null) {
            $this->CriticalRepairEmergencyCount = $param["CriticalRepairEmergencyCount"];
        }
    }
}
