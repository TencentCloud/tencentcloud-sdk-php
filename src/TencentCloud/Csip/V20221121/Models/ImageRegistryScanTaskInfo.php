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
 * 镜像仓库扫描任务信息
 *
 * @method integer getId() 获取<p>任务id</p>
 * @method void setId(integer $Id) 设置<p>任务id</p>
 * @method integer getTimedScanConfigId() 获取<p>定时扫描任务id</p>
 * @method void setTimedScanConfigId(integer $TimedScanConfigId) 设置<p>定时扫描任务id</p>
 * @method array getAutoMatchMode() 获取<p>自动匹配模式</p><p>枚举值：</p><ul><li>BY_CLUSTER： 按集群选择</li><li>LATEST_VERSION： 仅扫描最新版本镜像</li><li>LOCAL_IMAGE： 本地镜像</li></ul>
 * @method void setAutoMatchMode(array $AutoMatchMode) 设置<p>自动匹配模式</p><p>枚举值：</p><ul><li>BY_CLUSTER： 按集群选择</li><li>LATEST_VERSION： 仅扫描最新版本镜像</li><li>LOCAL_IMAGE： 本地镜像</li></ul>
 * @method string getScopeMode() 获取<p>扫描资产模式</p><p>枚举值：</p><ul><li>ALL： 全部</li><li>MANUAL： 手动选择</li><li>AUTO_MATCH： 自动匹配</li></ul>
 * @method void setScopeMode(string $ScopeMode) 设置<p>扫描资产模式</p><p>枚举值：</p><ul><li>ALL： 全部</li><li>MANUAL： 手动选择</li><li>AUTO_MATCH： 自动匹配</li></ul>
 * @method string getTriggerType() 获取<p>任务触发类型</p><p>枚举值：</p><ul><li>TIMED： 定时任务</li><li>MANUAL： 手动触发</li></ul>
 * @method void setTriggerType(string $TriggerType) 设置<p>任务触发类型</p><p>枚举值：</p><ul><li>TIMED： 定时任务</li><li>MANUAL： 手动触发</li></ul>
 * @method array getScanType() 获取<p>扫描类别</p><p>枚举值：</p><ul><li>CVE： 漏洞</li><li>RISK： 风险</li><li>VIRUS： 木马</li></ul>
 * @method void setScanType(array $ScanType) 设置<p>扫描类别</p><p>枚举值：</p><ul><li>CVE： 漏洞</li><li>RISK： 风险</li><li>VIRUS： 木马</li></ul>
 * @method array getImageIds() 获取<p>扫描的镜像id</p>
 * @method void setImageIds(array $ImageIds) 设置<p>扫描的镜像id</p>
 * @method string getStatus() 获取<p>任务状态</p><p>枚举值：</p><ul><li>RUNNING： 执行中</li><li>SUCCESS： 任务成功</li><li>TIMEOUT： 任务超时</li><li>FAILED： 任务失败</li><li>CANCELLED： 已取消</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务状态</p><p>枚举值：</p><ul><li>RUNNING： 执行中</li><li>SUCCESS： 任务成功</li><li>TIMEOUT： 任务超时</li><li>FAILED： 任务失败</li><li>CANCELLED： 已取消</li></ul>
 * @method string getOwnerAccountName() 获取<p>定时任务所属账号名</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) 设置<p>定时任务所属账号名</p>
 * @method integer getOwnerAppId() 获取<p>定时任务所属账号appid</p>
 * @method void setOwnerAppId(integer $OwnerAppId) 设置<p>定时任务所属账号appid</p>
 * @method string getOwnerUin() 获取<p>定时任务所属账号uin</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>定时任务所属账号uin</p>
 * @method integer getScanImageCount() 获取<p>扫描镜像数</p>
 * @method void setScanImageCount(integer $ScanImageCount) 设置<p>扫描镜像数</p>
 * @method integer getSuccessImageCount() 获取<p>扫描成功镜像数</p>
 * @method void setSuccessImageCount(integer $SuccessImageCount) 设置<p>扫描成功镜像数</p>
 * @method integer getFailureImageCount() 获取<p>扫描失败镜像数</p>
 * @method void setFailureImageCount(integer $FailureImageCount) 设置<p>扫描失败镜像数</p>
 * @method integer getIgnoredImageCount() 获取<p>任务忽略的镜像数</p>
 * @method void setIgnoredImageCount(integer $IgnoredImageCount) 设置<p>任务忽略的镜像数</p>
 * @method integer getCancelledImageCount() 获取<p>任务被取消镜像数</p>
 * @method void setCancelledImageCount(integer $CancelledImageCount) 设置<p>任务被取消镜像数</p>
 * @method string getScanStartTime() 获取<p>扫描启动时间</p><p>参数格式：hh:mm</p>
 * @method void setScanStartTime(string $ScanStartTime) 设置<p>扫描启动时间</p><p>参数格式：hh:mm</p>
 * @method string getScanEndTime() 获取<p>扫描停止时间</p><p>参数格式：hh:mm</p>
 * @method void setScanEndTime(string $ScanEndTime) 设置<p>扫描停止时间</p><p>参数格式：hh:mm</p>
 * @method integer getTimeout() 获取<p>超时时间，单位秒</p>
 * @method void setTimeout(integer $Timeout) 设置<p>超时时间，单位秒</p>
 * @method string getCancelReason() 获取<p>任务取消原因</p>
 * @method void setCancelReason(string $CancelReason) 设置<p>任务取消原因</p>
 * @method string getName() 获取<p>任务名</p>
 * @method void setName(string $Name) 设置<p>任务名</p>
 * @method ImageScanScheduleConfig getSchedule() 获取<p>扫描任务调度配置</p>
 * @method void setSchedule(ImageScanScheduleConfig $Schedule) 设置<p>扫描任务调度配置</p>
 * @method ImageScanAssetTarget getTarget() 获取<p>扫描任务目标</p>
 * @method void setTarget(ImageScanAssetTarget $Target) 设置<p>扫描任务目标</p>
 * @method ImageScanRegistryFilter getFilter() 获取<p>扫描任务过滤配置</p>
 * @method void setFilter(ImageScanRegistryFilter $Filter) 设置<p>扫描任务过滤配置</p>
 */
class ImageRegistryScanTaskInfo extends AbstractModel
{
    /**
     * @var integer <p>任务id</p>
     */
    public $Id;

    /**
     * @var integer <p>定时扫描任务id</p>
     */
    public $TimedScanConfigId;

    /**
     * @var array <p>自动匹配模式</p><p>枚举值：</p><ul><li>BY_CLUSTER： 按集群选择</li><li>LATEST_VERSION： 仅扫描最新版本镜像</li><li>LOCAL_IMAGE： 本地镜像</li></ul>
     */
    public $AutoMatchMode;

    /**
     * @var string <p>扫描资产模式</p><p>枚举值：</p><ul><li>ALL： 全部</li><li>MANUAL： 手动选择</li><li>AUTO_MATCH： 自动匹配</li></ul>
     */
    public $ScopeMode;

    /**
     * @var string <p>任务触发类型</p><p>枚举值：</p><ul><li>TIMED： 定时任务</li><li>MANUAL： 手动触发</li></ul>
     */
    public $TriggerType;

    /**
     * @var array <p>扫描类别</p><p>枚举值：</p><ul><li>CVE： 漏洞</li><li>RISK： 风险</li><li>VIRUS： 木马</li></ul>
     */
    public $ScanType;

    /**
     * @var array <p>扫描的镜像id</p>
     */
    public $ImageIds;

    /**
     * @var string <p>任务状态</p><p>枚举值：</p><ul><li>RUNNING： 执行中</li><li>SUCCESS： 任务成功</li><li>TIMEOUT： 任务超时</li><li>FAILED： 任务失败</li><li>CANCELLED： 已取消</li></ul>
     */
    public $Status;

    /**
     * @var string <p>定时任务所属账号名</p>
     */
    public $OwnerAccountName;

    /**
     * @var integer <p>定时任务所属账号appid</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>定时任务所属账号uin</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>扫描镜像数</p>
     */
    public $ScanImageCount;

    /**
     * @var integer <p>扫描成功镜像数</p>
     */
    public $SuccessImageCount;

    /**
     * @var integer <p>扫描失败镜像数</p>
     */
    public $FailureImageCount;

    /**
     * @var integer <p>任务忽略的镜像数</p>
     */
    public $IgnoredImageCount;

    /**
     * @var integer <p>任务被取消镜像数</p>
     */
    public $CancelledImageCount;

    /**
     * @var string <p>扫描启动时间</p><p>参数格式：hh:mm</p>
     */
    public $ScanStartTime;

    /**
     * @var string <p>扫描停止时间</p><p>参数格式：hh:mm</p>
     */
    public $ScanEndTime;

    /**
     * @var integer <p>超时时间，单位秒</p>
     */
    public $Timeout;

    /**
     * @var string <p>任务取消原因</p>
     */
    public $CancelReason;

    /**
     * @var string <p>任务名</p>
     */
    public $Name;

    /**
     * @var ImageScanScheduleConfig <p>扫描任务调度配置</p>
     */
    public $Schedule;

    /**
     * @var ImageScanAssetTarget <p>扫描任务目标</p>
     */
    public $Target;

    /**
     * @var ImageScanRegistryFilter <p>扫描任务过滤配置</p>
     */
    public $Filter;

    /**
     * @param integer $Id <p>任务id</p>
     * @param integer $TimedScanConfigId <p>定时扫描任务id</p>
     * @param array $AutoMatchMode <p>自动匹配模式</p><p>枚举值：</p><ul><li>BY_CLUSTER： 按集群选择</li><li>LATEST_VERSION： 仅扫描最新版本镜像</li><li>LOCAL_IMAGE： 本地镜像</li></ul>
     * @param string $ScopeMode <p>扫描资产模式</p><p>枚举值：</p><ul><li>ALL： 全部</li><li>MANUAL： 手动选择</li><li>AUTO_MATCH： 自动匹配</li></ul>
     * @param string $TriggerType <p>任务触发类型</p><p>枚举值：</p><ul><li>TIMED： 定时任务</li><li>MANUAL： 手动触发</li></ul>
     * @param array $ScanType <p>扫描类别</p><p>枚举值：</p><ul><li>CVE： 漏洞</li><li>RISK： 风险</li><li>VIRUS： 木马</li></ul>
     * @param array $ImageIds <p>扫描的镜像id</p>
     * @param string $Status <p>任务状态</p><p>枚举值：</p><ul><li>RUNNING： 执行中</li><li>SUCCESS： 任务成功</li><li>TIMEOUT： 任务超时</li><li>FAILED： 任务失败</li><li>CANCELLED： 已取消</li></ul>
     * @param string $OwnerAccountName <p>定时任务所属账号名</p>
     * @param integer $OwnerAppId <p>定时任务所属账号appid</p>
     * @param string $OwnerUin <p>定时任务所属账号uin</p>
     * @param integer $ScanImageCount <p>扫描镜像数</p>
     * @param integer $SuccessImageCount <p>扫描成功镜像数</p>
     * @param integer $FailureImageCount <p>扫描失败镜像数</p>
     * @param integer $IgnoredImageCount <p>任务忽略的镜像数</p>
     * @param integer $CancelledImageCount <p>任务被取消镜像数</p>
     * @param string $ScanStartTime <p>扫描启动时间</p><p>参数格式：hh:mm</p>
     * @param string $ScanEndTime <p>扫描停止时间</p><p>参数格式：hh:mm</p>
     * @param integer $Timeout <p>超时时间，单位秒</p>
     * @param string $CancelReason <p>任务取消原因</p>
     * @param string $Name <p>任务名</p>
     * @param ImageScanScheduleConfig $Schedule <p>扫描任务调度配置</p>
     * @param ImageScanAssetTarget $Target <p>扫描任务目标</p>
     * @param ImageScanRegistryFilter $Filter <p>扫描任务过滤配置</p>
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

        if (array_key_exists("TimedScanConfigId",$param) and $param["TimedScanConfigId"] !== null) {
            $this->TimedScanConfigId = $param["TimedScanConfigId"];
        }

        if (array_key_exists("AutoMatchMode",$param) and $param["AutoMatchMode"] !== null) {
            $this->AutoMatchMode = $param["AutoMatchMode"];
        }

        if (array_key_exists("ScopeMode",$param) and $param["ScopeMode"] !== null) {
            $this->ScopeMode = $param["ScopeMode"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("ScanImageCount",$param) and $param["ScanImageCount"] !== null) {
            $this->ScanImageCount = $param["ScanImageCount"];
        }

        if (array_key_exists("SuccessImageCount",$param) and $param["SuccessImageCount"] !== null) {
            $this->SuccessImageCount = $param["SuccessImageCount"];
        }

        if (array_key_exists("FailureImageCount",$param) and $param["FailureImageCount"] !== null) {
            $this->FailureImageCount = $param["FailureImageCount"];
        }

        if (array_key_exists("IgnoredImageCount",$param) and $param["IgnoredImageCount"] !== null) {
            $this->IgnoredImageCount = $param["IgnoredImageCount"];
        }

        if (array_key_exists("CancelledImageCount",$param) and $param["CancelledImageCount"] !== null) {
            $this->CancelledImageCount = $param["CancelledImageCount"];
        }

        if (array_key_exists("ScanStartTime",$param) and $param["ScanStartTime"] !== null) {
            $this->ScanStartTime = $param["ScanStartTime"];
        }

        if (array_key_exists("ScanEndTime",$param) and $param["ScanEndTime"] !== null) {
            $this->ScanEndTime = $param["ScanEndTime"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("CancelReason",$param) and $param["CancelReason"] !== null) {
            $this->CancelReason = $param["CancelReason"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = new ImageScanScheduleConfig();
            $this->Schedule->deserialize($param["Schedule"]);
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = new ImageScanAssetTarget();
            $this->Target->deserialize($param["Target"]);
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new ImageScanRegistryFilter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
