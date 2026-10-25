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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTDEMDialTask请求参数结构体
 *
 * @method string getAppId() 获取<p>应用 ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID</p>
 * @method string getTaskName() 获取<p>任务名称，最长 128 个字符</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称，最长 128 个字符</p>
 * @method string getType() 获取<p>探测类型。取值说明：icmp、tcp。</p>
 * @method void setType(string $Type) 设置<p>探测类型。取值说明：icmp、tcp。</p>
 * @method string getExecutionTime() 获取<p>执行时机。取值说明：realtime、after_request、after_error、after_slow、after_dns_slow。tcp 不能使用 after_dns_slow。</p>
 * @method void setExecutionTime(string $ExecutionTime) 设置<p>执行时机。取值说明：realtime、after_request、after_error、after_slow、after_dns_slow。tcp 不能使用 after_dns_slow。</p>
 * @method integer getTimeoutMs() 获取<p>单次探测超时，单位毫秒。范围 1000 到 20000。</p>
 * @method void setTimeoutMs(integer $TimeoutMs) 设置<p>单次探测超时，单位毫秒。范围 1000 到 20000。</p>
 * @method integer getPeriodMs() 获取<p>探测周期，单位毫秒，必须大于 0。</p>
 * @method void setPeriodMs(integer $PeriodMs) 设置<p>探测周期，单位毫秒，必须大于 0。</p>
 * @method integer getPackageCount() 获取<p>发包次数。范围 3 到 40。</p>
 * @method void setPackageCount(integer $PackageCount) 设置<p>发包次数。范围 3 到 40。</p>
 * @method string getStatus() 获取<p>任务状态。取值说明：active、paused。不传时默认为 active。</p>
 * @method void setStatus(string $Status) 设置<p>任务状态。取值说明：active、paused。不传时默认为 active。</p>
 * @method string getWatchDomain() 获取<p>监听域名。ExecutionTime 不是 realtime 时必填。</p>
 * @method void setWatchDomain(string $WatchDomain) 设置<p>监听域名。ExecutionTime 不是 realtime 时必填。</p>
 * @method string getDialDomain() 获取<p>拨测目标。域名、IP 或 ldns。after_dns_slow 固定为 ldns，其它时机必填。</p>
 * @method void setDialDomain(string $DialDomain) 设置<p>拨测目标。域名、IP 或 ldns。after_dns_slow 固定为 ldns，其它时机必填。</p>
 * @method integer getPort() 获取<p>TCP 端口，1 到 65535。Type 为 tcp 时必填。</p>
 * @method void setPort(integer $Port) 设置<p>TCP 端口，1 到 65535。Type 为 tcp 时必填。</p>
 * @method integer getFrequencyMs() 获取<p>实时拨测间隔，单位毫秒。ExecutionTime 为 realtime 时必填。取值说明：60000、300000、600000、900000、1800000、3600000。</p>
 * @method void setFrequencyMs(integer $FrequencyMs) 设置<p>实时拨测间隔，单位毫秒。ExecutionTime 为 realtime 时必填。取值说明：60000、300000、600000、900000、1800000、3600000。</p>
 * @method integer getPackageSize() 获取<p>ICMP 包大小，单位字节。范围 32 到 1024。不传时默认 64。</p>
 * @method void setPackageSize(integer $PackageSize) 设置<p>ICMP 包大小，单位字节。范围 32 到 1024。不传时默认 64。</p>
 * @method integer getNeedMTR() 获取<p>是否做路由追踪。取值说明：0 否，1 是。不传时为 0。</p>
 * @method void setNeedMTR(integer $NeedMTR) 设置<p>是否做路由追踪。取值说明：0 否，1 是。不传时为 0。</p>
 * @method integer getMTRTimeoutMs() 获取<p>路由追踪超时，单位毫秒。NeedMTR 为 1 时必填。</p>
 * @method void setMTRTimeoutMs(integer $MTRTimeoutMs) 设置<p>路由追踪超时，单位毫秒。NeedMTR 为 1 时必填。</p>
 * @method integer getMTRMaxHop() 获取<p>路由追踪最大跳数。NeedMTR 为 1 时填写。</p>
 * @method void setMTRMaxHop(integer $MTRMaxHop) 设置<p>路由追踪最大跳数。NeedMTR 为 1 时填写。</p>
 * @method integer getMTRPingCount() 获取<p>每一跳发包次数。范围 3 到 40。</p>
 * @method void setMTRPingCount(integer $MTRPingCount) 设置<p>每一跳发包次数。范围 3 到 40。</p>
 * @method integer getSlowThresholdMs() 获取<p>慢请求阈值，单位毫秒。after_slow、after_dns_slow 不传时默认 2000。</p>
 * @method void setSlowThresholdMs(integer $SlowThresholdMs) 设置<p>慢请求阈值，单位毫秒。after_slow、after_dns_slow 不传时默认 2000。</p>
 * @method string getErrorType() 获取<p>错误类型过滤。after_error 时使用。</p>
 * @method void setErrorType(string $ErrorType) 设置<p>错误类型过滤。after_error 时使用。</p>
 * @method string getRegions() 获取<p>允许启动的客户端地区，逗号分隔，名称必须与分析页客户端地区完全一致。不传或空字符串表示不限制。</p>
 * @method void setRegions(string $Regions) 设置<p>允许启动的客户端地区，逗号分隔，名称必须与分析页客户端地区完全一致。不传或空字符串表示不限制。</p>
 * @method string getOperators() 获取<p>允许启动的客户端运营商，逗号分隔，名称必须与分析页客户端运营商完全一致。不传或空字符串表示不限制。</p>
 * @method void setOperators(string $Operators) 设置<p>允许启动的客户端运营商，逗号分隔，名称必须与分析页客户端运营商完全一致。不传或空字符串表示不限制。</p>
 * @method string getUserIds() 获取<p>允许启动的用户 ID，逗号分隔。不传或空字符串表示不限制。</p>
 * @method void setUserIds(string $UserIds) 设置<p>允许启动的用户 ID，逗号分隔。不传或空字符串表示不限制。</p>
 * @method string getDeviceIds() 获取<p>允许启动的设备 ID，逗号分隔。不传或空字符串表示不限制。</p>
 * @method void setDeviceIds(string $DeviceIds) 设置<p>允许启动的设备 ID，逗号分隔。不传或空字符串表示不限制。</p>
 */
class CreateTDEMDialTaskRequest extends AbstractModel
{
    /**
     * @var string <p>应用 ID</p>
     */
    public $AppId;

    /**
     * @var string <p>任务名称，最长 128 个字符</p>
     */
    public $TaskName;

    /**
     * @var string <p>探测类型。取值说明：icmp、tcp。</p>
     */
    public $Type;

    /**
     * @var string <p>执行时机。取值说明：realtime、after_request、after_error、after_slow、after_dns_slow。tcp 不能使用 after_dns_slow。</p>
     */
    public $ExecutionTime;

    /**
     * @var integer <p>单次探测超时，单位毫秒。范围 1000 到 20000。</p>
     */
    public $TimeoutMs;

    /**
     * @var integer <p>探测周期，单位毫秒，必须大于 0。</p>
     */
    public $PeriodMs;

    /**
     * @var integer <p>发包次数。范围 3 到 40。</p>
     */
    public $PackageCount;

    /**
     * @var string <p>任务状态。取值说明：active、paused。不传时默认为 active。</p>
     */
    public $Status;

    /**
     * @var string <p>监听域名。ExecutionTime 不是 realtime 时必填。</p>
     */
    public $WatchDomain;

    /**
     * @var string <p>拨测目标。域名、IP 或 ldns。after_dns_slow 固定为 ldns，其它时机必填。</p>
     */
    public $DialDomain;

    /**
     * @var integer <p>TCP 端口，1 到 65535。Type 为 tcp 时必填。</p>
     */
    public $Port;

    /**
     * @var integer <p>实时拨测间隔，单位毫秒。ExecutionTime 为 realtime 时必填。取值说明：60000、300000、600000、900000、1800000、3600000。</p>
     */
    public $FrequencyMs;

    /**
     * @var integer <p>ICMP 包大小，单位字节。范围 32 到 1024。不传时默认 64。</p>
     */
    public $PackageSize;

    /**
     * @var integer <p>是否做路由追踪。取值说明：0 否，1 是。不传时为 0。</p>
     */
    public $NeedMTR;

    /**
     * @var integer <p>路由追踪超时，单位毫秒。NeedMTR 为 1 时必填。</p>
     */
    public $MTRTimeoutMs;

    /**
     * @var integer <p>路由追踪最大跳数。NeedMTR 为 1 时填写。</p>
     */
    public $MTRMaxHop;

    /**
     * @var integer <p>每一跳发包次数。范围 3 到 40。</p>
     */
    public $MTRPingCount;

    /**
     * @var integer <p>慢请求阈值，单位毫秒。after_slow、after_dns_slow 不传时默认 2000。</p>
     */
    public $SlowThresholdMs;

    /**
     * @var string <p>错误类型过滤。after_error 时使用。</p>
     */
    public $ErrorType;

    /**
     * @var string <p>允许启动的客户端地区，逗号分隔，名称必须与分析页客户端地区完全一致。不传或空字符串表示不限制。</p>
     */
    public $Regions;

    /**
     * @var string <p>允许启动的客户端运营商，逗号分隔，名称必须与分析页客户端运营商完全一致。不传或空字符串表示不限制。</p>
     */
    public $Operators;

    /**
     * @var string <p>允许启动的用户 ID，逗号分隔。不传或空字符串表示不限制。</p>
     */
    public $UserIds;

    /**
     * @var string <p>允许启动的设备 ID，逗号分隔。不传或空字符串表示不限制。</p>
     */
    public $DeviceIds;

    /**
     * @param string $AppId <p>应用 ID</p>
     * @param string $TaskName <p>任务名称，最长 128 个字符</p>
     * @param string $Type <p>探测类型。取值说明：icmp、tcp。</p>
     * @param string $ExecutionTime <p>执行时机。取值说明：realtime、after_request、after_error、after_slow、after_dns_slow。tcp 不能使用 after_dns_slow。</p>
     * @param integer $TimeoutMs <p>单次探测超时，单位毫秒。范围 1000 到 20000。</p>
     * @param integer $PeriodMs <p>探测周期，单位毫秒，必须大于 0。</p>
     * @param integer $PackageCount <p>发包次数。范围 3 到 40。</p>
     * @param string $Status <p>任务状态。取值说明：active、paused。不传时默认为 active。</p>
     * @param string $WatchDomain <p>监听域名。ExecutionTime 不是 realtime 时必填。</p>
     * @param string $DialDomain <p>拨测目标。域名、IP 或 ldns。after_dns_slow 固定为 ldns，其它时机必填。</p>
     * @param integer $Port <p>TCP 端口，1 到 65535。Type 为 tcp 时必填。</p>
     * @param integer $FrequencyMs <p>实时拨测间隔，单位毫秒。ExecutionTime 为 realtime 时必填。取值说明：60000、300000、600000、900000、1800000、3600000。</p>
     * @param integer $PackageSize <p>ICMP 包大小，单位字节。范围 32 到 1024。不传时默认 64。</p>
     * @param integer $NeedMTR <p>是否做路由追踪。取值说明：0 否，1 是。不传时为 0。</p>
     * @param integer $MTRTimeoutMs <p>路由追踪超时，单位毫秒。NeedMTR 为 1 时必填。</p>
     * @param integer $MTRMaxHop <p>路由追踪最大跳数。NeedMTR 为 1 时填写。</p>
     * @param integer $MTRPingCount <p>每一跳发包次数。范围 3 到 40。</p>
     * @param integer $SlowThresholdMs <p>慢请求阈值，单位毫秒。after_slow、after_dns_slow 不传时默认 2000。</p>
     * @param string $ErrorType <p>错误类型过滤。after_error 时使用。</p>
     * @param string $Regions <p>允许启动的客户端地区，逗号分隔，名称必须与分析页客户端地区完全一致。不传或空字符串表示不限制。</p>
     * @param string $Operators <p>允许启动的客户端运营商，逗号分隔，名称必须与分析页客户端运营商完全一致。不传或空字符串表示不限制。</p>
     * @param string $UserIds <p>允许启动的用户 ID，逗号分隔。不传或空字符串表示不限制。</p>
     * @param string $DeviceIds <p>允许启动的设备 ID，逗号分隔。不传或空字符串表示不限制。</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ExecutionTime",$param) and $param["ExecutionTime"] !== null) {
            $this->ExecutionTime = $param["ExecutionTime"];
        }

        if (array_key_exists("TimeoutMs",$param) and $param["TimeoutMs"] !== null) {
            $this->TimeoutMs = $param["TimeoutMs"];
        }

        if (array_key_exists("PeriodMs",$param) and $param["PeriodMs"] !== null) {
            $this->PeriodMs = $param["PeriodMs"];
        }

        if (array_key_exists("PackageCount",$param) and $param["PackageCount"] !== null) {
            $this->PackageCount = $param["PackageCount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("WatchDomain",$param) and $param["WatchDomain"] !== null) {
            $this->WatchDomain = $param["WatchDomain"];
        }

        if (array_key_exists("DialDomain",$param) and $param["DialDomain"] !== null) {
            $this->DialDomain = $param["DialDomain"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("FrequencyMs",$param) and $param["FrequencyMs"] !== null) {
            $this->FrequencyMs = $param["FrequencyMs"];
        }

        if (array_key_exists("PackageSize",$param) and $param["PackageSize"] !== null) {
            $this->PackageSize = $param["PackageSize"];
        }

        if (array_key_exists("NeedMTR",$param) and $param["NeedMTR"] !== null) {
            $this->NeedMTR = $param["NeedMTR"];
        }

        if (array_key_exists("MTRTimeoutMs",$param) and $param["MTRTimeoutMs"] !== null) {
            $this->MTRTimeoutMs = $param["MTRTimeoutMs"];
        }

        if (array_key_exists("MTRMaxHop",$param) and $param["MTRMaxHop"] !== null) {
            $this->MTRMaxHop = $param["MTRMaxHop"];
        }

        if (array_key_exists("MTRPingCount",$param) and $param["MTRPingCount"] !== null) {
            $this->MTRPingCount = $param["MTRPingCount"];
        }

        if (array_key_exists("SlowThresholdMs",$param) and $param["SlowThresholdMs"] !== null) {
            $this->SlowThresholdMs = $param["SlowThresholdMs"];
        }

        if (array_key_exists("ErrorType",$param) and $param["ErrorType"] !== null) {
            $this->ErrorType = $param["ErrorType"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }

        if (array_key_exists("Operators",$param) and $param["Operators"] !== null) {
            $this->Operators = $param["Operators"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("DeviceIds",$param) and $param["DeviceIds"] !== null) {
            $this->DeviceIds = $param["DeviceIds"];
        }
    }
}
