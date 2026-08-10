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
 * 漏洞扫描任务记录
 *
 * @method integer getId() 获取<p>任务id</p>
 * @method void setId(integer $Id) 设置<p>任务id</p>
 * @method string getJobId() 获取<p>任务id</p>
 * @method void setJobId(string $JobId) 设置<p>任务id</p>
 * @method integer getAppId() 获取<p>任务所属用户appid</p>
 * @method void setAppId(integer $AppId) 设置<p>任务所属用户appid</p>
 * @method integer getTaskType() 获取<p>任务类型</p><p>枚举值：</p><ul><li>0： 一键扫描</li><li>1： 周期扫描</li></ul>
 * @method void setTaskType(integer $TaskType) 设置<p>任务类型</p><p>枚举值：</p><ul><li>0： 一键扫描</li><li>1： 周期扫描</li></ul>
 * @method array getVulCategory() 获取<p>漏洞分类</p><p>枚举值：</p><ul><li>LINUX： Linux软件漏洞</li><li>WINDOWS： Windows系统补丁</li><li>WEB_CMS： Web-CMS漏洞</li><li>APPLICATION： 应用漏洞</li><li>EMERGENCY： 应急漏洞</li></ul>
 * @method void setVulCategory(array $VulCategory) 设置<p>漏洞分类</p><p>枚举值：</p><ul><li>LINUX： Linux软件漏洞</li><li>WINDOWS： Windows系统补丁</li><li>WEB_CMS： Web-CMS漏洞</li><li>APPLICATION： 应用漏洞</li><li>EMERGENCY： 应急漏洞</li></ul>
 * @method array getVulName() 获取<p>漏洞名称</p>
 * @method void setVulName(array $VulName) 设置<p>漏洞名称</p>
 * @method array getKbName() 获取<p>kb名称</p>
 * @method void setKbName(array $KbName) 设置<p>kb名称</p>
 * @method integer getEmergency() 获取<p>是否应急漏洞</p><p>枚举值：</p><ul><li>0： 否</li><li>1： 是</li></ul>
 * @method void setEmergency(integer $Emergency) 设置<p>是否应急漏洞</p><p>枚举值：</p><ul><li>0： 否</li><li>1： 是</li></ul>
 * @method integer getAccount() 获取<p>扫描账号数量（0: 全部账号, others: 账号数量）</p>
 * @method void setAccount(integer $Account) 设置<p>扫描账号数量（0: 全部账号, others: 账号数量）</p>
 * @method string getStartTime() 获取<p>扫描开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>扫描开始时间</p>
 * @method string getEndTime() 获取<p>扫描结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>扫描结束时间</p>
 * @method string getStatus() 获取<p>扫描状态（INITIALIZING: 初始化, SCANNING: 扫描中, SUCCESS: 扫描成功,  TOTAL_FAIL: 全部扫描失败）</p><p>枚举值：</p><ul><li>STOPPED： 已停止</li></ul>
 * @method void setStatus(string $Status) 设置<p>扫描状态（INITIALIZING: 初始化, SCANNING: 扫描中, SUCCESS: 扫描成功,  TOTAL_FAIL: 全部扫描失败）</p><p>枚举值：</p><ul><li>STOPPED： 已停止</li></ul>
 * @method array getLevel() 获取<p>漏洞威胁等级</p><p>枚举值：</p><ul><li>LOW： 低危</li><li>MEDIUM： 中危</li><li>HIGH： 高危</li><li>CRITICAL： 严重</li></ul>
 * @method void setLevel(array $Level) 设置<p>漏洞威胁等级</p><p>枚举值：</p><ul><li>LOW： 低危</li><li>MEDIUM： 中危</li><li>HIGH： 高危</li><li>CRITICAL： 严重</li></ul>
 * @method array getMethod() 获取<p>扫描方式</p><p>枚举值：</p><ul><li>VersionCompare： 版本对比</li><li>POC： POC检测</li><li>VersionComparePOC： 版本对比+POC检测</li></ul>
 * @method void setMethod(array $Method) 设置<p>扫描方式</p><p>枚举值：</p><ul><li>VersionCompare： 版本对比</li><li>POC： POC检测</li><li>VersionComparePOC： 版本对比+POC检测</li></ul>
 * @method array getAssetList() 获取<p>资产列表</p>
 * @method void setAssetList(array $AssetList) 设置<p>资产列表</p>
 * @method integer getAssetRange() 获取<p>资产范围</p><p>枚举值：</p><ul><li>0： 所有资产</li><li>1： 自选资产</li><li>2： 自选排除资产</li></ul>
 * @method void setAssetRange(integer $AssetRange) 设置<p>资产范围</p><p>枚举值：</p><ul><li>0： 所有资产</li><li>1： 自选资产</li><li>2： 自选排除资产</li></ul>
 */
class VulScanTask extends AbstractModel
{
    /**
     * @var integer <p>任务id</p>
     */
    public $Id;

    /**
     * @var string <p>任务id</p>
     */
    public $JobId;

    /**
     * @var integer <p>任务所属用户appid</p>
     */
    public $AppId;

    /**
     * @var integer <p>任务类型</p><p>枚举值：</p><ul><li>0： 一键扫描</li><li>1： 周期扫描</li></ul>
     */
    public $TaskType;

    /**
     * @var array <p>漏洞分类</p><p>枚举值：</p><ul><li>LINUX： Linux软件漏洞</li><li>WINDOWS： Windows系统补丁</li><li>WEB_CMS： Web-CMS漏洞</li><li>APPLICATION： 应用漏洞</li><li>EMERGENCY： 应急漏洞</li></ul>
     */
    public $VulCategory;

    /**
     * @var array <p>漏洞名称</p>
     */
    public $VulName;

    /**
     * @var array <p>kb名称</p>
     */
    public $KbName;

    /**
     * @var integer <p>是否应急漏洞</p><p>枚举值：</p><ul><li>0： 否</li><li>1： 是</li></ul>
     */
    public $Emergency;

    /**
     * @var integer <p>扫描账号数量（0: 全部账号, others: 账号数量）</p>
     */
    public $Account;

    /**
     * @var string <p>扫描开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>扫描结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>扫描状态（INITIALIZING: 初始化, SCANNING: 扫描中, SUCCESS: 扫描成功,  TOTAL_FAIL: 全部扫描失败）</p><p>枚举值：</p><ul><li>STOPPED： 已停止</li></ul>
     */
    public $Status;

    /**
     * @var array <p>漏洞威胁等级</p><p>枚举值：</p><ul><li>LOW： 低危</li><li>MEDIUM： 中危</li><li>HIGH： 高危</li><li>CRITICAL： 严重</li></ul>
     */
    public $Level;

    /**
     * @var array <p>扫描方式</p><p>枚举值：</p><ul><li>VersionCompare： 版本对比</li><li>POC： POC检测</li><li>VersionComparePOC： 版本对比+POC检测</li></ul>
     */
    public $Method;

    /**
     * @var array <p>资产列表</p>
     */
    public $AssetList;

    /**
     * @var integer <p>资产范围</p><p>枚举值：</p><ul><li>0： 所有资产</li><li>1： 自选资产</li><li>2： 自选排除资产</li></ul>
     */
    public $AssetRange;

    /**
     * @param integer $Id <p>任务id</p>
     * @param string $JobId <p>任务id</p>
     * @param integer $AppId <p>任务所属用户appid</p>
     * @param integer $TaskType <p>任务类型</p><p>枚举值：</p><ul><li>0： 一键扫描</li><li>1： 周期扫描</li></ul>
     * @param array $VulCategory <p>漏洞分类</p><p>枚举值：</p><ul><li>LINUX： Linux软件漏洞</li><li>WINDOWS： Windows系统补丁</li><li>WEB_CMS： Web-CMS漏洞</li><li>APPLICATION： 应用漏洞</li><li>EMERGENCY： 应急漏洞</li></ul>
     * @param array $VulName <p>漏洞名称</p>
     * @param array $KbName <p>kb名称</p>
     * @param integer $Emergency <p>是否应急漏洞</p><p>枚举值：</p><ul><li>0： 否</li><li>1： 是</li></ul>
     * @param integer $Account <p>扫描账号数量（0: 全部账号, others: 账号数量）</p>
     * @param string $StartTime <p>扫描开始时间</p>
     * @param string $EndTime <p>扫描结束时间</p>
     * @param string $Status <p>扫描状态（INITIALIZING: 初始化, SCANNING: 扫描中, SUCCESS: 扫描成功,  TOTAL_FAIL: 全部扫描失败）</p><p>枚举值：</p><ul><li>STOPPED： 已停止</li></ul>
     * @param array $Level <p>漏洞威胁等级</p><p>枚举值：</p><ul><li>LOW： 低危</li><li>MEDIUM： 中危</li><li>HIGH： 高危</li><li>CRITICAL： 严重</li></ul>
     * @param array $Method <p>扫描方式</p><p>枚举值：</p><ul><li>VersionCompare： 版本对比</li><li>POC： POC检测</li><li>VersionComparePOC： 版本对比+POC检测</li></ul>
     * @param array $AssetList <p>资产列表</p>
     * @param integer $AssetRange <p>资产范围</p><p>枚举值：</p><ul><li>0： 所有资产</li><li>1： 自选资产</li><li>2： 自选排除资产</li></ul>
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

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("KbName",$param) and $param["KbName"] !== null) {
            $this->KbName = $param["KbName"];
        }

        if (array_key_exists("Emergency",$param) and $param["Emergency"] !== null) {
            $this->Emergency = $param["Emergency"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("AssetList",$param) and $param["AssetList"] !== null) {
            $this->AssetList = $param["AssetList"];
        }

        if (array_key_exists("AssetRange",$param) and $param["AssetRange"] !== null) {
            $this->AssetRange = $param["AssetRange"];
        }
    }
}
