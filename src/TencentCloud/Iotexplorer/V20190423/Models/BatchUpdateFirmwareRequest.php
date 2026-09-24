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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchUpdateFirmware请求参数结构体
 *
 * @method string getProductID() 获取<p>产品ID</p>
 * @method void setProductID(string $ProductID) 设置<p>产品ID</p>
 * @method string getFirmwareVersion() 获取<p>固件新版本号</p>
 * @method void setFirmwareVersion(string $FirmwareVersion) 设置<p>固件新版本号</p>
 * @method string getFirmwareOriVersion() 获取<p>固件原版本号</p>
 * @method void setFirmwareOriVersion(string $FirmwareOriVersion) 设置<p>固件原版本号</p>
 * @method integer getUpgradeMethod() 获取<p>升级方式，0 静默升级  1 用户确认升级。 不填默认为静默升级方式</p>
 * @method void setUpgradeMethod(integer $UpgradeMethod) 设置<p>升级方式，0 静默升级  1 用户确认升级。 不填默认为静默升级方式</p>
 * @method string getFileName() 获取<p>设备列表文件名称，根据文件列表升级固件需要填写此参数</p>
 * @method void setFileName(string $FileName) 设置<p>设备列表文件名称，根据文件列表升级固件需要填写此参数</p>
 * @method string getFileMd5() 获取<p>设备列表的文件md5值</p>
 * @method void setFileMd5(string $FileMd5) 设置<p>设备列表的文件md5值</p>
 * @method integer getFileSize() 获取<p>设备列表的文件大小值</p>
 * @method void setFileSize(integer $FileSize) 设置<p>设备列表的文件大小值</p>
 * @method array getDeviceNames() 获取<p>需要升级的设备名称列表</p>
 * @method void setDeviceNames(array $DeviceNames) 设置<p>需要升级的设备名称列表</p>
 * @method integer getTimeoutInterval() 获取<p>固件升级任务，默认超时时间。 最小取值120秒，最大为900秒</p>
 * @method void setTimeoutInterval(integer $TimeoutInterval) 设置<p>固件升级任务，默认超时时间。 最小取值120秒，最大为900秒</p>
 * @method integer getType() 获取<p>固件升级任务类型，默认静态升级值为空或1，动态升级值为7</p>
 * @method void setType(integer $Type) 设置<p>固件升级任务类型，默认静态升级值为空或1，动态升级值为7</p>
 * @method integer getDelayTime() 获取<p>任务延迟时间</p>
 * @method void setDelayTime(integer $DelayTime) 设置<p>任务延迟时间</p>
 * @method integer getOverrideMode() 获取<p>是否覆盖，0不覆盖，1覆盖</p>
 * @method void setOverrideMode(integer $OverrideMode) 设置<p>是否覆盖，0不覆盖，1覆盖</p>
 * @method integer getMaxRetryNum() 获取<p>失败重试次数</p>
 * @method void setMaxRetryNum(integer $MaxRetryNum) 设置<p>失败重试次数</p>
 * @method integer getRetryInterval() 获取<p>重试间隔min</p>
 * @method void setRetryInterval(integer $RetryInterval) 设置<p>重试间隔min</p>
 * @method string getFwType() 获取<p>固件模块</p>
 * @method void setFwType(string $FwType) 设置<p>固件模块</p>
 * @method string getTaskUserDefine() 获取<p>用户自定义信息</p>
 * @method void setTaskUserDefine(string $TaskUserDefine) 设置<p>用户自定义信息</p>
 * @method integer getRateLimit() 获取<p>每分钟下发设备量</p>
 * @method void setRateLimit(integer $RateLimit) 设置<p>每分钟下发设备量</p>
 * @method integer getEndTime() 获取<p>任务截止时间，Unix 时间戳（单位：秒）。传入 0 或不传表示不设截止，任务按原重试/超时策略执行完毕。</p><p>单位：秒</p>
 * @method void setEndTime(integer $EndTime) 设置<p>任务截止时间，Unix 时间戳（单位：秒）。传入 0 或不传表示不设截止，任务按原重试/超时策略执行完毕。</p><p>单位：秒</p>
 * @method integer getStartTime() 获取<p>任务开始调度时间，Unix 时间戳（单位：秒）。传入 0 或不传时任务立即创建执行，与 DelayTime 同时传入时，本参数优先生效。</p><p>单位：秒</p>
 * @method void setStartTime(integer $StartTime) 设置<p>任务开始调度时间，Unix 时间戳（单位：秒）。传入 0 或不传时任务立即创建执行，与 DelayTime 同时传入时，本参数优先生效。</p><p>单位：秒</p>
 */
class BatchUpdateFirmwareRequest extends AbstractModel
{
    /**
     * @var string <p>产品ID</p>
     */
    public $ProductID;

    /**
     * @var string <p>固件新版本号</p>
     */
    public $FirmwareVersion;

    /**
     * @var string <p>固件原版本号</p>
     */
    public $FirmwareOriVersion;

    /**
     * @var integer <p>升级方式，0 静默升级  1 用户确认升级。 不填默认为静默升级方式</p>
     */
    public $UpgradeMethod;

    /**
     * @var string <p>设备列表文件名称，根据文件列表升级固件需要填写此参数</p>
     */
    public $FileName;

    /**
     * @var string <p>设备列表的文件md5值</p>
     */
    public $FileMd5;

    /**
     * @var integer <p>设备列表的文件大小值</p>
     */
    public $FileSize;

    /**
     * @var array <p>需要升级的设备名称列表</p>
     */
    public $DeviceNames;

    /**
     * @var integer <p>固件升级任务，默认超时时间。 最小取值120秒，最大为900秒</p>
     */
    public $TimeoutInterval;

    /**
     * @var integer <p>固件升级任务类型，默认静态升级值为空或1，动态升级值为7</p>
     */
    public $Type;

    /**
     * @var integer <p>任务延迟时间</p>
     */
    public $DelayTime;

    /**
     * @var integer <p>是否覆盖，0不覆盖，1覆盖</p>
     */
    public $OverrideMode;

    /**
     * @var integer <p>失败重试次数</p>
     */
    public $MaxRetryNum;

    /**
     * @var integer <p>重试间隔min</p>
     */
    public $RetryInterval;

    /**
     * @var string <p>固件模块</p>
     */
    public $FwType;

    /**
     * @var string <p>用户自定义信息</p>
     */
    public $TaskUserDefine;

    /**
     * @var integer <p>每分钟下发设备量</p>
     */
    public $RateLimit;

    /**
     * @var integer <p>任务截止时间，Unix 时间戳（单位：秒）。传入 0 或不传表示不设截止，任务按原重试/超时策略执行完毕。</p><p>单位：秒</p>
     */
    public $EndTime;

    /**
     * @var integer <p>任务开始调度时间，Unix 时间戳（单位：秒）。传入 0 或不传时任务立即创建执行，与 DelayTime 同时传入时，本参数优先生效。</p><p>单位：秒</p>
     */
    public $StartTime;

    /**
     * @param string $ProductID <p>产品ID</p>
     * @param string $FirmwareVersion <p>固件新版本号</p>
     * @param string $FirmwareOriVersion <p>固件原版本号</p>
     * @param integer $UpgradeMethod <p>升级方式，0 静默升级  1 用户确认升级。 不填默认为静默升级方式</p>
     * @param string $FileName <p>设备列表文件名称，根据文件列表升级固件需要填写此参数</p>
     * @param string $FileMd5 <p>设备列表的文件md5值</p>
     * @param integer $FileSize <p>设备列表的文件大小值</p>
     * @param array $DeviceNames <p>需要升级的设备名称列表</p>
     * @param integer $TimeoutInterval <p>固件升级任务，默认超时时间。 最小取值120秒，最大为900秒</p>
     * @param integer $Type <p>固件升级任务类型，默认静态升级值为空或1，动态升级值为7</p>
     * @param integer $DelayTime <p>任务延迟时间</p>
     * @param integer $OverrideMode <p>是否覆盖，0不覆盖，1覆盖</p>
     * @param integer $MaxRetryNum <p>失败重试次数</p>
     * @param integer $RetryInterval <p>重试间隔min</p>
     * @param string $FwType <p>固件模块</p>
     * @param string $TaskUserDefine <p>用户自定义信息</p>
     * @param integer $RateLimit <p>每分钟下发设备量</p>
     * @param integer $EndTime <p>任务截止时间，Unix 时间戳（单位：秒）。传入 0 或不传表示不设截止，任务按原重试/超时策略执行完毕。</p><p>单位：秒</p>
     * @param integer $StartTime <p>任务开始调度时间，Unix 时间戳（单位：秒）。传入 0 或不传时任务立即创建执行，与 DelayTime 同时传入时，本参数优先生效。</p><p>单位：秒</p>
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
        if (array_key_exists("ProductID",$param) and $param["ProductID"] !== null) {
            $this->ProductID = $param["ProductID"];
        }

        if (array_key_exists("FirmwareVersion",$param) and $param["FirmwareVersion"] !== null) {
            $this->FirmwareVersion = $param["FirmwareVersion"];
        }

        if (array_key_exists("FirmwareOriVersion",$param) and $param["FirmwareOriVersion"] !== null) {
            $this->FirmwareOriVersion = $param["FirmwareOriVersion"];
        }

        if (array_key_exists("UpgradeMethod",$param) and $param["UpgradeMethod"] !== null) {
            $this->UpgradeMethod = $param["UpgradeMethod"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("DeviceNames",$param) and $param["DeviceNames"] !== null) {
            $this->DeviceNames = $param["DeviceNames"];
        }

        if (array_key_exists("TimeoutInterval",$param) and $param["TimeoutInterval"] !== null) {
            $this->TimeoutInterval = $param["TimeoutInterval"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("OverrideMode",$param) and $param["OverrideMode"] !== null) {
            $this->OverrideMode = $param["OverrideMode"];
        }

        if (array_key_exists("MaxRetryNum",$param) and $param["MaxRetryNum"] !== null) {
            $this->MaxRetryNum = $param["MaxRetryNum"];
        }

        if (array_key_exists("RetryInterval",$param) and $param["RetryInterval"] !== null) {
            $this->RetryInterval = $param["RetryInterval"];
        }

        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }

        if (array_key_exists("TaskUserDefine",$param) and $param["TaskUserDefine"] !== null) {
            $this->TaskUserDefine = $param["TaskUserDefine"];
        }

        if (array_key_exists("RateLimit",$param) and $param["RateLimit"] !== null) {
            $this->RateLimit = $param["RateLimit"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
