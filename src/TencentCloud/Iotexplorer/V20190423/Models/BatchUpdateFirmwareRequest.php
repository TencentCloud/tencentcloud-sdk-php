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
 * @method string getProductID() 获取产品ID
 * @method void setProductID(string $ProductID) 设置产品ID
 * @method string getFirmwareVersion() 获取固件新版本号
 * @method void setFirmwareVersion(string $FirmwareVersion) 设置固件新版本号
 * @method string getFirmwareOriVersion() 获取固件原版本号
 * @method void setFirmwareOriVersion(string $FirmwareOriVersion) 设置固件原版本号
 * @method integer getUpgradeMethod() 获取升级方式，0 静默升级  1 用户确认升级。 不填默认为静默升级方式
 * @method void setUpgradeMethod(integer $UpgradeMethod) 设置升级方式，0 静默升级  1 用户确认升级。 不填默认为静默升级方式
 * @method string getFileName() 获取设备列表文件名称，根据文件列表升级固件需要填写此参数
 * @method void setFileName(string $FileName) 设置设备列表文件名称，根据文件列表升级固件需要填写此参数
 * @method string getFileMd5() 获取设备列表的文件md5值
 * @method void setFileMd5(string $FileMd5) 设置设备列表的文件md5值
 * @method integer getFileSize() 获取设备列表的文件大小值
 * @method void setFileSize(integer $FileSize) 设置设备列表的文件大小值
 * @method array getDeviceNames() 获取需要升级的设备名称列表
 * @method void setDeviceNames(array $DeviceNames) 设置需要升级的设备名称列表
 * @method integer getTimeoutInterval() 获取固件升级任务，默认超时时间。 最小取值120秒，最大为900秒
 * @method void setTimeoutInterval(integer $TimeoutInterval) 设置固件升级任务，默认超时时间。 最小取值120秒，最大为900秒
 * @method integer getType() 获取固件升级任务类型，默认静态升级值为空或1，动态升级值为7
 * @method void setType(integer $Type) 设置固件升级任务类型，默认静态升级值为空或1，动态升级值为7
 * @method integer getDelayTime() 获取任务延迟时间
 * @method void setDelayTime(integer $DelayTime) 设置任务延迟时间
 * @method integer getOverrideMode() 获取是否覆盖，0不覆盖，1覆盖
 * @method void setOverrideMode(integer $OverrideMode) 设置是否覆盖，0不覆盖，1覆盖
 * @method integer getMaxRetryNum() 获取失败重试次数
 * @method void setMaxRetryNum(integer $MaxRetryNum) 设置失败重试次数
 * @method integer getRetryInterval() 获取重试间隔min
 * @method void setRetryInterval(integer $RetryInterval) 设置重试间隔min
 * @method string getFwType() 获取固件模块
 * @method void setFwType(string $FwType) 设置固件模块
 * @method string getTaskUserDefine() 获取用户自定义信息
 * @method void setTaskUserDefine(string $TaskUserDefine) 设置用户自定义信息
 * @method integer getRateLimit() 获取每分钟下发设备量
 * @method void setRateLimit(integer $RateLimit) 设置每分钟下发设备量
 */
class BatchUpdateFirmwareRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductID;

    /**
     * @var string 固件新版本号
     */
    public $FirmwareVersion;

    /**
     * @var string 固件原版本号
     */
    public $FirmwareOriVersion;

    /**
     * @var integer 升级方式，0 静默升级  1 用户确认升级。 不填默认为静默升级方式
     */
    public $UpgradeMethod;

    /**
     * @var string 设备列表文件名称，根据文件列表升级固件需要填写此参数
     */
    public $FileName;

    /**
     * @var string 设备列表的文件md5值
     */
    public $FileMd5;

    /**
     * @var integer 设备列表的文件大小值
     */
    public $FileSize;

    /**
     * @var array 需要升级的设备名称列表
     */
    public $DeviceNames;

    /**
     * @var integer 固件升级任务，默认超时时间。 最小取值120秒，最大为900秒
     */
    public $TimeoutInterval;

    /**
     * @var integer 固件升级任务类型，默认静态升级值为空或1，动态升级值为7
     */
    public $Type;

    /**
     * @var integer 任务延迟时间
     */
    public $DelayTime;

    /**
     * @var integer 是否覆盖，0不覆盖，1覆盖
     */
    public $OverrideMode;

    /**
     * @var integer 失败重试次数
     */
    public $MaxRetryNum;

    /**
     * @var integer 重试间隔min
     */
    public $RetryInterval;

    /**
     * @var string 固件模块
     */
    public $FwType;

    /**
     * @var string 用户自定义信息
     */
    public $TaskUserDefine;

    /**
     * @var integer 每分钟下发设备量
     */
    public $RateLimit;

    /**
     * @param string $ProductID 产品ID
     * @param string $FirmwareVersion 固件新版本号
     * @param string $FirmwareOriVersion 固件原版本号
     * @param integer $UpgradeMethod 升级方式，0 静默升级  1 用户确认升级。 不填默认为静默升级方式
     * @param string $FileName 设备列表文件名称，根据文件列表升级固件需要填写此参数
     * @param string $FileMd5 设备列表的文件md5值
     * @param integer $FileSize 设备列表的文件大小值
     * @param array $DeviceNames 需要升级的设备名称列表
     * @param integer $TimeoutInterval 固件升级任务，默认超时时间。 最小取值120秒，最大为900秒
     * @param integer $Type 固件升级任务类型，默认静态升级值为空或1，动态升级值为7
     * @param integer $DelayTime 任务延迟时间
     * @param integer $OverrideMode 是否覆盖，0不覆盖，1覆盖
     * @param integer $MaxRetryNum 失败重试次数
     * @param integer $RetryInterval 重试间隔min
     * @param string $FwType 固件模块
     * @param string $TaskUserDefine 用户自定义信息
     * @param integer $RateLimit 每分钟下发设备量
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
    }
}
