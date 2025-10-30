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
 * DescribeFirmwareTask返回参数结构体
 *
 * @method integer getTaskId() 获取固件任务ID
 * @method void setTaskId(integer $TaskId) 设置固件任务ID
 * @method integer getStatus() 获取固件任务状态
 * @method void setStatus(integer $Status) 设置固件任务状态
 * @method integer getCreateTime() 获取固件任务创建时间，单位：秒
 * @method void setCreateTime(integer $CreateTime) 设置固件任务创建时间，单位：秒
 * @method integer getType() 获取固件任务升级类型
 * @method void setType(integer $Type) 设置固件任务升级类型
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method string getUpgradeMode() 获取固件任务升级模式。originalVersion（按版本号升级）、filename（提交文件升级）、devicenames（按设备名称升级）
 * @method void setUpgradeMode(string $UpgradeMode) 设置固件任务升级模式。originalVersion（按版本号升级）、filename（提交文件升级）、devicenames（按设备名称升级）
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getOriginalVersion() 获取原始固件版本号，在UpgradeMode是originalVersion升级模式下会返回
 * @method void setOriginalVersion(string $OriginalVersion) 设置原始固件版本号，在UpgradeMode是originalVersion升级模式下会返回
 * @method integer getCreateUserId() 获取创建账号ID
 * @method void setCreateUserId(integer $CreateUserId) 设置创建账号ID
 * @method string getCreatorNickName() 获取创建账号ID昵称
 * @method void setCreatorNickName(string $CreatorNickName) 设置创建账号ID昵称
 * @method integer getDelayTime() 获取延迟时间
 * @method void setDelayTime(integer $DelayTime) 设置延迟时间
 * @method integer getTimeoutInterval() 获取超时时间
 * @method void setTimeoutInterval(integer $TimeoutInterval) 设置超时时间
 * @method integer getUpgradeMethod() 获取静默升级or用户确认升级
 * @method void setUpgradeMethod(integer $UpgradeMethod) 设置静默升级or用户确认升级
 * @method integer getMaxRetryNum() 获取最大重试次数
 * @method void setMaxRetryNum(integer $MaxRetryNum) 设置最大重试次数
 * @method string getFwType() 获取固件类型
 * @method void setFwType(string $FwType) 设置固件类型
 * @method integer getRetryInterval() 获取重试间隔时间单位min
 * @method void setRetryInterval(integer $RetryInterval) 设置重试间隔时间单位min
 * @method integer getOverrideMode() 获取是否覆盖任务
 * @method void setOverrideMode(integer $OverrideMode) 设置是否覆盖任务
 * @method string getTaskUserDefine() 获取用户自定义消息
 * @method void setTaskUserDefine(string $TaskUserDefine) 设置用户自定义消息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFirmwareTaskResponse extends AbstractModel
{
    /**
     * @var integer 固件任务ID
     */
    public $TaskId;

    /**
     * @var integer 固件任务状态
     */
    public $Status;

    /**
     * @var integer 固件任务创建时间，单位：秒
     */
    public $CreateTime;

    /**
     * @var integer 固件任务升级类型
     */
    public $Type;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var string 固件任务升级模式。originalVersion（按版本号升级）、filename（提交文件升级）、devicenames（按设备名称升级）
     */
    public $UpgradeMode;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 原始固件版本号，在UpgradeMode是originalVersion升级模式下会返回
     */
    public $OriginalVersion;

    /**
     * @var integer 创建账号ID
     */
    public $CreateUserId;

    /**
     * @var string 创建账号ID昵称
     */
    public $CreatorNickName;

    /**
     * @var integer 延迟时间
     */
    public $DelayTime;

    /**
     * @var integer 超时时间
     */
    public $TimeoutInterval;

    /**
     * @var integer 静默升级or用户确认升级
     */
    public $UpgradeMethod;

    /**
     * @var integer 最大重试次数
     */
    public $MaxRetryNum;

    /**
     * @var string 固件类型
     */
    public $FwType;

    /**
     * @var integer 重试间隔时间单位min
     */
    public $RetryInterval;

    /**
     * @var integer 是否覆盖任务
     */
    public $OverrideMode;

    /**
     * @var string 用户自定义消息
     */
    public $TaskUserDefine;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TaskId 固件任务ID
     * @param integer $Status 固件任务状态
     * @param integer $CreateTime 固件任务创建时间，单位：秒
     * @param integer $Type 固件任务升级类型
     * @param string $ProductName 产品名称
     * @param string $UpgradeMode 固件任务升级模式。originalVersion（按版本号升级）、filename（提交文件升级）、devicenames（按设备名称升级）
     * @param string $ProductId 产品ID
     * @param string $OriginalVersion 原始固件版本号，在UpgradeMode是originalVersion升级模式下会返回
     * @param integer $CreateUserId 创建账号ID
     * @param string $CreatorNickName 创建账号ID昵称
     * @param integer $DelayTime 延迟时间
     * @param integer $TimeoutInterval 超时时间
     * @param integer $UpgradeMethod 静默升级or用户确认升级
     * @param integer $MaxRetryNum 最大重试次数
     * @param string $FwType 固件类型
     * @param integer $RetryInterval 重试间隔时间单位min
     * @param integer $OverrideMode 是否覆盖任务
     * @param string $TaskUserDefine 用户自定义消息
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("UpgradeMode",$param) and $param["UpgradeMode"] !== null) {
            $this->UpgradeMode = $param["UpgradeMode"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("OriginalVersion",$param) and $param["OriginalVersion"] !== null) {
            $this->OriginalVersion = $param["OriginalVersion"];
        }

        if (array_key_exists("CreateUserId",$param) and $param["CreateUserId"] !== null) {
            $this->CreateUserId = $param["CreateUserId"];
        }

        if (array_key_exists("CreatorNickName",$param) and $param["CreatorNickName"] !== null) {
            $this->CreatorNickName = $param["CreatorNickName"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("TimeoutInterval",$param) and $param["TimeoutInterval"] !== null) {
            $this->TimeoutInterval = $param["TimeoutInterval"];
        }

        if (array_key_exists("UpgradeMethod",$param) and $param["UpgradeMethod"] !== null) {
            $this->UpgradeMethod = $param["UpgradeMethod"];
        }

        if (array_key_exists("MaxRetryNum",$param) and $param["MaxRetryNum"] !== null) {
            $this->MaxRetryNum = $param["MaxRetryNum"];
        }

        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }

        if (array_key_exists("RetryInterval",$param) and $param["RetryInterval"] !== null) {
            $this->RetryInterval = $param["RetryInterval"];
        }

        if (array_key_exists("OverrideMode",$param) and $param["OverrideMode"] !== null) {
            $this->OverrideMode = $param["OverrideMode"];
        }

        if (array_key_exists("TaskUserDefine",$param) and $param["TaskUserDefine"] !== null) {
            $this->TaskUserDefine = $param["TaskUserDefine"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
