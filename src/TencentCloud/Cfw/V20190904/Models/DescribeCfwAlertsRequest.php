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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfwAlerts请求参数结构体
 *
 * @method string getStartTime() 获取<p>告警开始时间。可选，格式 YYYY-MM-DD HH:MM:SS；默认查询最近 1 小时。</p>
 * @method void setStartTime(string $StartTime) 设置<p>告警开始时间。可选，格式 YYYY-MM-DD HH:MM:SS；默认查询最近 1 小时。</p>
 * @method string getEndTime() 获取<p>告警结束时间。可选，格式 YYYY-MM-DD HH:MM:SS；默认当前时间。</p>
 * @method void setEndTime(string $EndTime) 设置<p>告警结束时间。可选，格式 YYYY-MM-DD HH:MM:SS；默认当前时间。</p>
 * @method string getLevel() 获取<p>告警严重级别过滤。可选；枚举 low、middle、high。</p>
 * @method void setLevel(string $Level) 设置<p>告警严重级别过滤。可选；枚举 low、middle、high。</p>
 * @method string getDirection() 获取<p>流量方向过滤。可选；枚举 outbound 出站、inbound 入站、lateral 横向。</p>
 * @method void setDirection(string $Direction) 设置<p>流量方向过滤。可选；枚举 outbound 出站、inbound 入站、lateral 横向。</p>
 * @method string getActionStatus() 获取<p>处置状态过滤。可选；枚举 unhandled、handled、blocked、passed、isolated、ignored。</p>
 * @method void setActionStatus(string $ActionStatus) 设置<p>处置状态过滤。可选；枚举 unhandled、handled、blocked、passed、isolated、ignored。</p>
 * @method string getKillChain() 获取<p>攻击链阶段过滤。可选；枚举 recon、brute_force、delivery、exploit、c2、lateral_movement、exfiltration。</p>
 * @method void setKillChain(string $KillChain) 设置<p>攻击链阶段过滤。可选；枚举 recon、brute_force、delivery、exploit、c2、lateral_movement、exfiltration。</p>
 * @method string getAttackResult() 获取<p>攻击结果过滤。可选；枚举 attempt、success、fail、unknown。</p>
 * @method void setAttackResult(string $AttackResult) 设置<p>攻击结果过滤。可选；枚举 attempt、success、fail、unknown。</p>
 * @method string getStrategy() 获取<p>IPS 策略动作过滤。可选；枚举 observe、block。</p>
 * @method void setStrategy(string $Strategy) 设置<p>IPS 策略动作过滤。可选；枚举 observe、block。</p>
 * @method string getEventName() 获取<p>攻击事件名称关键字过滤。可选，例如 SQL注入、暴力破解、恶意域名访问。</p>
 * @method void setEventName(string $EventName) 设置<p>攻击事件名称关键字过滤。可选，例如 SQL注入、暴力破解、恶意域名访问。</p>
 * @method string getEventId() 获取<p>精确告警事件 ID 过滤。用于指定事件的写操作前检查和写操作后核验；事件重新聚合时返回原请求 ID 和当前事件 ID。无匹配返回空结果，多匹配或定位过程异常时失败，不退化为宽查询。</p>
 * @method void setEventId(string $EventId) 设置<p>精确告警事件 ID 过滤。用于指定事件的写操作前检查和写操作后核验；事件重新聚合时返回原请求 ID 和当前事件 ID。无匹配返回空结果，多匹配或定位过程异常时失败，不退化为宽查询。</p>
 * @method string getSrcIp() 获取<p>源 IP 过滤。可选。</p>
 * @method void setSrcIp(string $SrcIp) 设置<p>源 IP 过滤。可选。</p>
 * @method string getDstIp() 获取<p>目的 IP 过滤。可选。</p>
 * @method void setDstIp(string $DstIp) 设置<p>目的 IP 过滤。可选。</p>
 * @method string getInstanceId() 获取<p>云资源实例 ID 过滤。可选，例如 ins-xxxxxxxx。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>云资源实例 ID 过滤。可选，例如 ins-xxxxxxxx。</p>
 * @method integer getLimit() 获取<p>单页返回告警数。可选，默认 10，最大 50。</p>
 * @method void setLimit(integer $Limit) 设置<p>单页返回告警数。可选，默认 10，最大 50。</p>
 * @method integer getOffset() 获取<p>分页偏移。可选，默认 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移。可选，默认 0。</p>
 * @method string getOrderBy() 获取<p>排序字段。可选，默认 EndTime；枚举 EndTime、StartTime、Count。排序字段。可选，默认 EndTime；枚举 EndTime、StartTime、Count；Count 表示按单个聚合告警事件的告警发生次数/命中次数排序，对应返回中的 occurrence_count</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序字段。可选，默认 EndTime；枚举 EndTime、StartTime、Count。排序字段。可选，默认 EndTime；枚举 EndTime、StartTime、Count；Count 表示按单个聚合告警事件的告警发生次数/命中次数排序，对应返回中的 occurrence_count</p>
 * @method string getOrder() 获取<p>排序方向。可选，默认 desc；枚举 desc、asc。</p>
 * @method void setOrder(string $Order) 设置<p>排序方向。可选，默认 desc；枚举 desc、asc。</p>
 */
class DescribeCfwAlertsRequest extends AbstractModel
{
    /**
     * @var string <p>告警开始时间。可选，格式 YYYY-MM-DD HH:MM:SS；默认查询最近 1 小时。</p>
     */
    public $StartTime;

    /**
     * @var string <p>告警结束时间。可选，格式 YYYY-MM-DD HH:MM:SS；默认当前时间。</p>
     */
    public $EndTime;

    /**
     * @var string <p>告警严重级别过滤。可选；枚举 low、middle、high。</p>
     */
    public $Level;

    /**
     * @var string <p>流量方向过滤。可选；枚举 outbound 出站、inbound 入站、lateral 横向。</p>
     */
    public $Direction;

    /**
     * @var string <p>处置状态过滤。可选；枚举 unhandled、handled、blocked、passed、isolated、ignored。</p>
     */
    public $ActionStatus;

    /**
     * @var string <p>攻击链阶段过滤。可选；枚举 recon、brute_force、delivery、exploit、c2、lateral_movement、exfiltration。</p>
     */
    public $KillChain;

    /**
     * @var string <p>攻击结果过滤。可选；枚举 attempt、success、fail、unknown。</p>
     */
    public $AttackResult;

    /**
     * @var string <p>IPS 策略动作过滤。可选；枚举 observe、block。</p>
     */
    public $Strategy;

    /**
     * @var string <p>攻击事件名称关键字过滤。可选，例如 SQL注入、暴力破解、恶意域名访问。</p>
     */
    public $EventName;

    /**
     * @var string <p>精确告警事件 ID 过滤。用于指定事件的写操作前检查和写操作后核验；事件重新聚合时返回原请求 ID 和当前事件 ID。无匹配返回空结果，多匹配或定位过程异常时失败，不退化为宽查询。</p>
     */
    public $EventId;

    /**
     * @var string <p>源 IP 过滤。可选。</p>
     */
    public $SrcIp;

    /**
     * @var string <p>目的 IP 过滤。可选。</p>
     */
    public $DstIp;

    /**
     * @var string <p>云资源实例 ID 过滤。可选，例如 ins-xxxxxxxx。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>单页返回告警数。可选，默认 10，最大 50。</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移。可选，默认 0。</p>
     */
    public $Offset;

    /**
     * @var string <p>排序字段。可选，默认 EndTime；枚举 EndTime、StartTime、Count。排序字段。可选，默认 EndTime；枚举 EndTime、StartTime、Count；Count 表示按单个聚合告警事件的告警发生次数/命中次数排序，对应返回中的 occurrence_count</p>
     */
    public $OrderBy;

    /**
     * @var string <p>排序方向。可选，默认 desc；枚举 desc、asc。</p>
     */
    public $Order;

    /**
     * @param string $StartTime <p>告警开始时间。可选，格式 YYYY-MM-DD HH:MM:SS；默认查询最近 1 小时。</p>
     * @param string $EndTime <p>告警结束时间。可选，格式 YYYY-MM-DD HH:MM:SS；默认当前时间。</p>
     * @param string $Level <p>告警严重级别过滤。可选；枚举 low、middle、high。</p>
     * @param string $Direction <p>流量方向过滤。可选；枚举 outbound 出站、inbound 入站、lateral 横向。</p>
     * @param string $ActionStatus <p>处置状态过滤。可选；枚举 unhandled、handled、blocked、passed、isolated、ignored。</p>
     * @param string $KillChain <p>攻击链阶段过滤。可选；枚举 recon、brute_force、delivery、exploit、c2、lateral_movement、exfiltration。</p>
     * @param string $AttackResult <p>攻击结果过滤。可选；枚举 attempt、success、fail、unknown。</p>
     * @param string $Strategy <p>IPS 策略动作过滤。可选；枚举 observe、block。</p>
     * @param string $EventName <p>攻击事件名称关键字过滤。可选，例如 SQL注入、暴力破解、恶意域名访问。</p>
     * @param string $EventId <p>精确告警事件 ID 过滤。用于指定事件的写操作前检查和写操作后核验；事件重新聚合时返回原请求 ID 和当前事件 ID。无匹配返回空结果，多匹配或定位过程异常时失败，不退化为宽查询。</p>
     * @param string $SrcIp <p>源 IP 过滤。可选。</p>
     * @param string $DstIp <p>目的 IP 过滤。可选。</p>
     * @param string $InstanceId <p>云资源实例 ID 过滤。可选，例如 ins-xxxxxxxx。</p>
     * @param integer $Limit <p>单页返回告警数。可选，默认 10，最大 50。</p>
     * @param integer $Offset <p>分页偏移。可选，默认 0。</p>
     * @param string $OrderBy <p>排序字段。可选，默认 EndTime；枚举 EndTime、StartTime、Count。排序字段。可选，默认 EndTime；枚举 EndTime、StartTime、Count；Count 表示按单个聚合告警事件的告警发生次数/命中次数排序，对应返回中的 occurrence_count</p>
     * @param string $Order <p>排序方向。可选，默认 desc；枚举 desc、asc。</p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("ActionStatus",$param) and $param["ActionStatus"] !== null) {
            $this->ActionStatus = $param["ActionStatus"];
        }

        if (array_key_exists("KillChain",$param) and $param["KillChain"] !== null) {
            $this->KillChain = $param["KillChain"];
        }

        if (array_key_exists("AttackResult",$param) and $param["AttackResult"] !== null) {
            $this->AttackResult = $param["AttackResult"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
