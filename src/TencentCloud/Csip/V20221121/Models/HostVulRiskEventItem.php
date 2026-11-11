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
 * 主机漏洞风险事件明细
 *
 * @method string getUUID() 获取漏洞风险记录唯一标识
 * @method void setUUID(string $UUID) 设置漏洞风险记录唯一标识
 * @method integer getRiskID() 获取风险记录 ID
 * @method void setRiskID(integer $RiskID) 设置风险记录 ID
 * @method integer getVulID() 获取漏洞 ID
 * @method void setVulID(integer $VulID) 设置漏洞 ID
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method string getCVEID() 获取CVE 编号
参数格式：形如 CVE-2024-12345
 * @method void setCVEID(string $CVEID) 设置CVE 编号
参数格式：形如 CVE-2024-12345
 * @method string getCategory() 获取漏洞分类
枚举值：
LINUX：Linux 软件漏洞
WINDOWS：Windows 系统补丁
WEB_CMS：Web-CMS 漏洞
APPLICATION：应用漏洞
EMERGENCY：应急漏洞
 * @method void setCategory(string $Category) 设置漏洞分类
枚举值：
LINUX：Linux 软件漏洞
WINDOWS：Windows 系统补丁
WEB_CMS：Web-CMS 漏洞
APPLICATION：应用漏洞
EMERGENCY：应急漏洞
 * @method string getLevel() 获取漏洞危害等级
枚举值：
UNKNOWN：无效
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
 * @method void setLevel(string $Level) 设置漏洞危害等级
枚举值：
UNKNOWN：无效
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
 * @method string getVPRLevel() 获取VPR 修复优先级
枚举值：
DEFERRABLE：可暂缓修复
PLANNED：计划修复
SOON：尽快修复
URGENT：紧急修复
 * @method void setVPRLevel(string $VPRLevel) 设置VPR 修复优先级
枚举值：
DEFERRABLE：可暂缓修复
PLANNED：计划修复
SOON：尽快修复
URGENT：紧急修复
 * @method string getCheckMethod() 获取检测方式
枚举值：
VersionCompare：版本比对
POC：POC 检测
VersionComparePOC：版本比对 + POC
 * @method void setCheckMethod(string $CheckMethod) 设置检测方式
枚举值：
VersionCompare：版本比对
POC：POC 检测
VersionComparePOC：版本比对 + POC
 * @method string getRiskStatus() 获取风险状态
枚举值：
PENDING：待处理
HANDLED：已处置
FIXED：已修复
SCANNING：重新检测中
IGNORED：已忽略
NOT_REQUIRED：无需处理
DELETED：已删除
FIXING：修复中
NEED_REBOOT：已修复待重启
FIX_FAILED：修复失败
 * @method void setRiskStatus(string $RiskStatus) 设置风险状态
枚举值：
PENDING：待处理
HANDLED：已处置
FIXED：已修复
SCANNING：重新检测中
IGNORED：已忽略
NOT_REQUIRED：无需处理
DELETED：已删除
FIXING：修复中
NEED_REBOOT：已修复待重启
FIX_FAILED：修复失败
 * @method boolean getSupportFix() 获取是否支持一键修复
 * @method void setSupportFix(boolean $SupportFix) 设置是否支持一键修复
 * @method string getLatestScanTime() 获取最近扫描时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setLatestScanTime(string $LatestScanTime) 设置最近扫描时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method string getInstanceID() 获取云主机实例 ID
参数格式：形如 ins-xxxxxxxx
 * @method void setInstanceID(string $InstanceID) 设置云主机实例 ID
参数格式：形如 ins-xxxxxxxx
 * @method integer getAppID() 获取所属账号 AppID
 * @method void setAppID(integer $AppID) 设置所属账号 AppID
 */
class HostVulRiskEventItem extends AbstractModel
{
    /**
     * @var string 漏洞风险记录唯一标识
     */
    public $UUID;

    /**
     * @var integer 风险记录 ID
     */
    public $RiskID;

    /**
     * @var integer 漏洞 ID
     */
    public $VulID;

    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var string CVE 编号
参数格式：形如 CVE-2024-12345
     */
    public $CVEID;

    /**
     * @var string 漏洞分类
枚举值：
LINUX：Linux 软件漏洞
WINDOWS：Windows 系统补丁
WEB_CMS：Web-CMS 漏洞
APPLICATION：应用漏洞
EMERGENCY：应急漏洞
     */
    public $Category;

    /**
     * @var string 漏洞危害等级
枚举值：
UNKNOWN：无效
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
     */
    public $Level;

    /**
     * @var string VPR 修复优先级
枚举值：
DEFERRABLE：可暂缓修复
PLANNED：计划修复
SOON：尽快修复
URGENT：紧急修复
     */
    public $VPRLevel;

    /**
     * @var string 检测方式
枚举值：
VersionCompare：版本比对
POC：POC 检测
VersionComparePOC：版本比对 + POC
     */
    public $CheckMethod;

    /**
     * @var string 风险状态
枚举值：
PENDING：待处理
HANDLED：已处置
FIXED：已修复
SCANNING：重新检测中
IGNORED：已忽略
NOT_REQUIRED：无需处理
DELETED：已删除
FIXING：修复中
NEED_REBOOT：已修复待重启
FIX_FAILED：修复失败
     */
    public $RiskStatus;

    /**
     * @var boolean 是否支持一键修复
     */
    public $SupportFix;

    /**
     * @var string 最近扫描时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     */
    public $LatestScanTime;

    /**
     * @var string 云主机实例 ID
参数格式：形如 ins-xxxxxxxx
     */
    public $InstanceID;

    /**
     * @var integer 所属账号 AppID
     */
    public $AppID;

    /**
     * @param string $UUID 漏洞风险记录唯一标识
     * @param integer $RiskID 风险记录 ID
     * @param integer $VulID 漏洞 ID
     * @param string $VulName 漏洞名称
     * @param string $CVEID CVE 编号
参数格式：形如 CVE-2024-12345
     * @param string $Category 漏洞分类
枚举值：
LINUX：Linux 软件漏洞
WINDOWS：Windows 系统补丁
WEB_CMS：Web-CMS 漏洞
APPLICATION：应用漏洞
EMERGENCY：应急漏洞
     * @param string $Level 漏洞危害等级
枚举值：
UNKNOWN：无效
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
     * @param string $VPRLevel VPR 修复优先级
枚举值：
DEFERRABLE：可暂缓修复
PLANNED：计划修复
SOON：尽快修复
URGENT：紧急修复
     * @param string $CheckMethod 检测方式
枚举值：
VersionCompare：版本比对
POC：POC 检测
VersionComparePOC：版本比对 + POC
     * @param string $RiskStatus 风险状态
枚举值：
PENDING：待处理
HANDLED：已处置
FIXED：已修复
SCANNING：重新检测中
IGNORED：已忽略
NOT_REQUIRED：无需处理
DELETED：已删除
FIXING：修复中
NEED_REBOOT：已修复待重启
FIX_FAILED：修复失败
     * @param boolean $SupportFix 是否支持一键修复
     * @param string $LatestScanTime 最近扫描时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     * @param string $InstanceID 云主机实例 ID
参数格式：形如 ins-xxxxxxxx
     * @param integer $AppID 所属账号 AppID
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
        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("RiskID",$param) and $param["RiskID"] !== null) {
            $this->RiskID = $param["RiskID"];
        }

        if (array_key_exists("VulID",$param) and $param["VulID"] !== null) {
            $this->VulID = $param["VulID"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("CVEID",$param) and $param["CVEID"] !== null) {
            $this->CVEID = $param["CVEID"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("VPRLevel",$param) and $param["VPRLevel"] !== null) {
            $this->VPRLevel = $param["VPRLevel"];
        }

        if (array_key_exists("CheckMethod",$param) and $param["CheckMethod"] !== null) {
            $this->CheckMethod = $param["CheckMethod"];
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
        }

        if (array_key_exists("SupportFix",$param) and $param["SupportFix"] !== null) {
            $this->SupportFix = $param["SupportFix"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }
    }
}
