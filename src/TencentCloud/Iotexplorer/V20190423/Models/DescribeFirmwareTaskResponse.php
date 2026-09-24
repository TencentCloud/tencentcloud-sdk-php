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
 * @method integer getTaskId() 获取<p>固件任务ID</p>
 * @method void setTaskId(integer $TaskId) 设置<p>固件任务ID</p>
 * @method integer getStatus() 获取<p>固件任务状态</p>
 * @method void setStatus(integer $Status) 设置<p>固件任务状态</p>
 * @method integer getCreateTime() 获取<p>固件任务创建时间，单位：秒</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>固件任务创建时间，单位：秒</p>
 * @method integer getType() 获取<p>固件任务升级类型</p>
 * @method void setType(integer $Type) 设置<p>固件任务升级类型</p>
 * @method string getProductName() 获取<p>产品名称</p>
 * @method void setProductName(string $ProductName) 设置<p>产品名称</p>
 * @method string getUpgradeMode() 获取<p>固件任务升级模式。originalVersion（按版本号升级）、filename（提交文件升级）、devicenames（按设备名称升级）</p>
 * @method void setUpgradeMode(string $UpgradeMode) 设置<p>固件任务升级模式。originalVersion（按版本号升级）、filename（提交文件升级）、devicenames（按设备名称升级）</p>
 * @method string getProductId() 获取<p>产品ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品ID</p>
 * @method string getOriginalVersion() 获取<p>原始固件版本号，在UpgradeMode是originalVersion升级模式下会返回</p>
 * @method void setOriginalVersion(string $OriginalVersion) 设置<p>原始固件版本号，在UpgradeMode是originalVersion升级模式下会返回</p>
 * @method integer getCreateUserId() 获取<p>创建账号ID</p>
 * @method void setCreateUserId(integer $CreateUserId) 设置<p>创建账号ID</p>
 * @method string getCreatorNickName() 获取<p>创建账号ID昵称</p>
 * @method void setCreatorNickName(string $CreatorNickName) 设置<p>创建账号ID昵称</p>
 * @method integer getDelayTime() 获取<p>延迟时间</p>
 * @method void setDelayTime(integer $DelayTime) 设置<p>延迟时间</p>
 * @method integer getTimeoutInterval() 获取<p>超时时间</p>
 * @method void setTimeoutInterval(integer $TimeoutInterval) 设置<p>超时时间</p>
 * @method integer getUpgradeMethod() 获取<p>静默升级or用户确认升级</p>
 * @method void setUpgradeMethod(integer $UpgradeMethod) 设置<p>静默升级or用户确认升级</p>
 * @method integer getMaxRetryNum() 获取<p>最大重试次数</p>
 * @method void setMaxRetryNum(integer $MaxRetryNum) 设置<p>最大重试次数</p>
 * @method string getFwType() 获取<p>固件类型</p>
 * @method void setFwType(string $FwType) 设置<p>固件类型</p>
 * @method integer getRetryInterval() 获取<p>重试间隔时间单位min</p>
 * @method void setRetryInterval(integer $RetryInterval) 设置<p>重试间隔时间单位min</p>
 * @method integer getOverrideMode() 获取<p>是否覆盖任务</p>
 * @method void setOverrideMode(integer $OverrideMode) 设置<p>是否覆盖任务</p>
 * @method string getTaskUserDefine() 获取<p>用户自定义消息</p>
 * @method void setTaskUserDefine(string $TaskUserDefine) 设置<p>用户自定义消息</p>
 * @method integer getRateLimit() 获取<p>每分钟发送设备量</p>
 * @method void setRateLimit(integer $RateLimit) 设置<p>每分钟发送设备量</p>
 * @method integer getEndTime() 获取<p>任务截止时间，Unix 时间戳（单位：秒）。传入 0 或不传表示不设截止，任务按原重试/超时策略执行完毕。 </p><p>单位：秒</p>
 * @method void setEndTime(integer $EndTime) 设置<p>任务截止时间，Unix 时间戳（单位：秒）。传入 0 或不传表示不设截止，任务按原重试/超时策略执行完毕。 </p><p>单位：秒</p>
 * @method integer getStartTime() 获取<p>任务开始调度时间，Unix 时间戳（单位：秒）。传入 0 或不传时任务立即创建执行，与 DelayTime 同时传入时，本参数优先生效。 </p><p>单位：秒</p>
 * @method void setStartTime(integer $StartTime) 设置<p>任务开始调度时间，Unix 时间戳（单位：秒）。传入 0 或不传时任务立即创建执行，与 DelayTime 同时传入时，本参数优先生效。 </p><p>单位：秒</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFirmwareTaskResponse extends AbstractModel
{
    /**
     * @var integer <p>固件任务ID</p>
     */
    public $TaskId;

    /**
     * @var integer <p>固件任务状态</p>
     */
    public $Status;

    /**
     * @var integer <p>固件任务创建时间，单位：秒</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>固件任务升级类型</p>
     */
    public $Type;

    /**
     * @var string <p>产品名称</p>
     */
    public $ProductName;

    /**
     * @var string <p>固件任务升级模式。originalVersion（按版本号升级）、filename（提交文件升级）、devicenames（按设备名称升级）</p>
     */
    public $UpgradeMode;

    /**
     * @var string <p>产品ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>原始固件版本号，在UpgradeMode是originalVersion升级模式下会返回</p>
     */
    public $OriginalVersion;

    /**
     * @var integer <p>创建账号ID</p>
     */
    public $CreateUserId;

    /**
     * @var string <p>创建账号ID昵称</p>
     */
    public $CreatorNickName;

    /**
     * @var integer <p>延迟时间</p>
     */
    public $DelayTime;

    /**
     * @var integer <p>超时时间</p>
     */
    public $TimeoutInterval;

    /**
     * @var integer <p>静默升级or用户确认升级</p>
     */
    public $UpgradeMethod;

    /**
     * @var integer <p>最大重试次数</p>
     */
    public $MaxRetryNum;

    /**
     * @var string <p>固件类型</p>
     */
    public $FwType;

    /**
     * @var integer <p>重试间隔时间单位min</p>
     */
    public $RetryInterval;

    /**
     * @var integer <p>是否覆盖任务</p>
     */
    public $OverrideMode;

    /**
     * @var string <p>用户自定义消息</p>
     */
    public $TaskUserDefine;

    /**
     * @var integer <p>每分钟发送设备量</p>
     */
    public $RateLimit;

    /**
     * @var integer <p>任务截止时间，Unix 时间戳（单位：秒）。传入 0 或不传表示不设截止，任务按原重试/超时策略执行完毕。 </p><p>单位：秒</p>
     */
    public $EndTime;

    /**
     * @var integer <p>任务开始调度时间，Unix 时间戳（单位：秒）。传入 0 或不传时任务立即创建执行，与 DelayTime 同时传入时，本参数优先生效。 </p><p>单位：秒</p>
     */
    public $StartTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TaskId <p>固件任务ID</p>
     * @param integer $Status <p>固件任务状态</p>
     * @param integer $CreateTime <p>固件任务创建时间，单位：秒</p>
     * @param integer $Type <p>固件任务升级类型</p>
     * @param string $ProductName <p>产品名称</p>
     * @param string $UpgradeMode <p>固件任务升级模式。originalVersion（按版本号升级）、filename（提交文件升级）、devicenames（按设备名称升级）</p>
     * @param string $ProductId <p>产品ID</p>
     * @param string $OriginalVersion <p>原始固件版本号，在UpgradeMode是originalVersion升级模式下会返回</p>
     * @param integer $CreateUserId <p>创建账号ID</p>
     * @param string $CreatorNickName <p>创建账号ID昵称</p>
     * @param integer $DelayTime <p>延迟时间</p>
     * @param integer $TimeoutInterval <p>超时时间</p>
     * @param integer $UpgradeMethod <p>静默升级or用户确认升级</p>
     * @param integer $MaxRetryNum <p>最大重试次数</p>
     * @param string $FwType <p>固件类型</p>
     * @param integer $RetryInterval <p>重试间隔时间单位min</p>
     * @param integer $OverrideMode <p>是否覆盖任务</p>
     * @param string $TaskUserDefine <p>用户自定义消息</p>
     * @param integer $RateLimit <p>每分钟发送设备量</p>
     * @param integer $EndTime <p>任务截止时间，Unix 时间戳（单位：秒）。传入 0 或不传表示不设截止，任务按原重试/超时策略执行完毕。 </p><p>单位：秒</p>
     * @param integer $StartTime <p>任务开始调度时间，Unix 时间戳（单位：秒）。传入 0 或不传时任务立即创建执行，与 DelayTime 同时传入时，本参数优先生效。 </p><p>单位：秒</p>
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

        if (array_key_exists("RateLimit",$param) and $param["RateLimit"] !== null) {
            $this->RateLimit = $param["RateLimit"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
