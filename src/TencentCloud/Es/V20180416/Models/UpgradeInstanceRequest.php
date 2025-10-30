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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getEsVersion() 获取目标ES版本，支持：”6.4.3“, "6.8.2"，"7.5.1", "7.10.1", "7.14.2"
 * @method void setEsVersion(string $EsVersion) 设置目标ES版本，支持：”6.4.3“, "6.8.2"，"7.5.1", "7.10.1", "7.14.2"
 * @method boolean getCheckOnly() 获取是否只做升级检查，默认值为false
 * @method void setCheckOnly(boolean $CheckOnly) 设置是否只做升级检查，默认值为false
 * @method string getLicenseType() 获取目标商业特性版本：<li>oss 开源版</li><li>basic 基础版</li>当前仅在5.6.4升级6.x版本时使用，默认值为basic
 * @method void setLicenseType(string $LicenseType) 设置目标商业特性版本：<li>oss 开源版</li><li>basic 基础版</li>当前仅在5.6.4升级6.x版本时使用，默认值为basic
 * @method integer getBasicSecurityType() 获取6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li>
 * @method void setBasicSecurityType(integer $BasicSecurityType) 设置6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li>
 * @method string getUpgradeMode() 获取升级方式：<li>scale 蓝绿变更</li><li>restart 滚动重启</li>默认值为scale
 * @method void setUpgradeMode(string $UpgradeMode) 设置升级方式：<li>scale 蓝绿变更</li><li>restart 滚动重启</li>默认值为scale
 * @method boolean getCosBackup() 获取升级版本前是否对集群进行备份，默认不备份
 * @method void setCosBackup(boolean $CosBackup) 设置升级版本前是否对集群进行备份，默认不备份
 * @method boolean getSkipCheckForceRestart() 获取滚动模式时，是否跳过检查，进行强制重启。默认值为false
 * @method void setSkipCheckForceRestart(boolean $SkipCheckForceRestart) 设置滚动模式时，是否跳过检查，进行强制重启。默认值为false
 * @method integer getCvmDelayOnlineTime() 获取cvm延迟上架参数
 * @method void setCvmDelayOnlineTime(integer $CvmDelayOnlineTime) 设置cvm延迟上架参数
 * @method integer getShardAllocationConcurrents() 获取分片迁移并发数
 * @method void setShardAllocationConcurrents(integer $ShardAllocationConcurrents) 设置分片迁移并发数
 * @method integer getShardAllocationBytes() 获取分片迁移并发速度
 * @method void setShardAllocationBytes(integer $ShardAllocationBytes) 设置分片迁移并发速度
 * @method boolean getEnableScheduleRecoverGroup() 获取是否开启置放群组异步任务
 * @method void setEnableScheduleRecoverGroup(boolean $EnableScheduleRecoverGroup) 设置是否开启置放群组异步任务
 * @method EnableScheduleOperationDuration getEnableScheduleOperationDuration() 获取置放群组异步任务时间段
 * @method void setEnableScheduleOperationDuration(EnableScheduleOperationDuration $EnableScheduleOperationDuration) 设置置放群组异步任务时间段
 */
class UpgradeInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 目标ES版本，支持：”6.4.3“, "6.8.2"，"7.5.1", "7.10.1", "7.14.2"
     */
    public $EsVersion;

    /**
     * @var boolean 是否只做升级检查，默认值为false
     */
    public $CheckOnly;

    /**
     * @var string 目标商业特性版本：<li>oss 开源版</li><li>basic 基础版</li>当前仅在5.6.4升级6.x版本时使用，默认值为basic
     */
    public $LicenseType;

    /**
     * @var integer 6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li>
     */
    public $BasicSecurityType;

    /**
     * @var string 升级方式：<li>scale 蓝绿变更</li><li>restart 滚动重启</li>默认值为scale
     */
    public $UpgradeMode;

    /**
     * @var boolean 升级版本前是否对集群进行备份，默认不备份
     */
    public $CosBackup;

    /**
     * @var boolean 滚动模式时，是否跳过检查，进行强制重启。默认值为false
     */
    public $SkipCheckForceRestart;

    /**
     * @var integer cvm延迟上架参数
     */
    public $CvmDelayOnlineTime;

    /**
     * @var integer 分片迁移并发数
     */
    public $ShardAllocationConcurrents;

    /**
     * @var integer 分片迁移并发速度
     */
    public $ShardAllocationBytes;

    /**
     * @var boolean 是否开启置放群组异步任务
     */
    public $EnableScheduleRecoverGroup;

    /**
     * @var EnableScheduleOperationDuration 置放群组异步任务时间段
     */
    public $EnableScheduleOperationDuration;

    /**
     * @param string $InstanceId 实例ID
     * @param string $EsVersion 目标ES版本，支持：”6.4.3“, "6.8.2"，"7.5.1", "7.10.1", "7.14.2"
     * @param boolean $CheckOnly 是否只做升级检查，默认值为false
     * @param string $LicenseType 目标商业特性版本：<li>oss 开源版</li><li>basic 基础版</li>当前仅在5.6.4升级6.x版本时使用，默认值为basic
     * @param integer $BasicSecurityType 6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li>
     * @param string $UpgradeMode 升级方式：<li>scale 蓝绿变更</li><li>restart 滚动重启</li>默认值为scale
     * @param boolean $CosBackup 升级版本前是否对集群进行备份，默认不备份
     * @param boolean $SkipCheckForceRestart 滚动模式时，是否跳过检查，进行强制重启。默认值为false
     * @param integer $CvmDelayOnlineTime cvm延迟上架参数
     * @param integer $ShardAllocationConcurrents 分片迁移并发数
     * @param integer $ShardAllocationBytes 分片迁移并发速度
     * @param boolean $EnableScheduleRecoverGroup 是否开启置放群组异步任务
     * @param EnableScheduleOperationDuration $EnableScheduleOperationDuration 置放群组异步任务时间段
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

        if (array_key_exists("EsVersion",$param) and $param["EsVersion"] !== null) {
            $this->EsVersion = $param["EsVersion"];
        }

        if (array_key_exists("CheckOnly",$param) and $param["CheckOnly"] !== null) {
            $this->CheckOnly = $param["CheckOnly"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("BasicSecurityType",$param) and $param["BasicSecurityType"] !== null) {
            $this->BasicSecurityType = $param["BasicSecurityType"];
        }

        if (array_key_exists("UpgradeMode",$param) and $param["UpgradeMode"] !== null) {
            $this->UpgradeMode = $param["UpgradeMode"];
        }

        if (array_key_exists("CosBackup",$param) and $param["CosBackup"] !== null) {
            $this->CosBackup = $param["CosBackup"];
        }

        if (array_key_exists("SkipCheckForceRestart",$param) and $param["SkipCheckForceRestart"] !== null) {
            $this->SkipCheckForceRestart = $param["SkipCheckForceRestart"];
        }

        if (array_key_exists("CvmDelayOnlineTime",$param) and $param["CvmDelayOnlineTime"] !== null) {
            $this->CvmDelayOnlineTime = $param["CvmDelayOnlineTime"];
        }

        if (array_key_exists("ShardAllocationConcurrents",$param) and $param["ShardAllocationConcurrents"] !== null) {
            $this->ShardAllocationConcurrents = $param["ShardAllocationConcurrents"];
        }

        if (array_key_exists("ShardAllocationBytes",$param) and $param["ShardAllocationBytes"] !== null) {
            $this->ShardAllocationBytes = $param["ShardAllocationBytes"];
        }

        if (array_key_exists("EnableScheduleRecoverGroup",$param) and $param["EnableScheduleRecoverGroup"] !== null) {
            $this->EnableScheduleRecoverGroup = $param["EnableScheduleRecoverGroup"];
        }

        if (array_key_exists("EnableScheduleOperationDuration",$param) and $param["EnableScheduleOperationDuration"] !== null) {
            $this->EnableScheduleOperationDuration = new EnableScheduleOperationDuration();
            $this->EnableScheduleOperationDuration->deserialize($param["EnableScheduleOperationDuration"]);
        }
    }
}
