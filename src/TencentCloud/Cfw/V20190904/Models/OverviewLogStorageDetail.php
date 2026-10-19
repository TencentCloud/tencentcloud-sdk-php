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
 * 概览日志存储详情
 *
 * @method integer getUsedBytes() 获取<p>日志已使用存储容量，单位为 Byte。</p><p>单位：Byte</p>
 * @method void setUsedBytes(integer $UsedBytes) 设置<p>日志已使用存储容量，单位为 Byte。</p><p>单位：Byte</p>
 * @method integer getTotalBytes() 获取<p>日志总存储容量，单位为 Byte。</p><p>单位：Byte</p>
 * @method void setTotalBytes(integer $TotalBytes) 设置<p>日志总存储容量，单位为 Byte。</p><p>单位：Byte</p>
 * @method integer getStorageDay() 获取<p>日志保留天数。</p><p>单位：天</p>
 * @method void setStorageDay(integer $StorageDay) 设置<p>日志保留天数。</p><p>单位：天</p>
 * @method integer getNDRStorageDay() 获取<p>NDR 日志保留天数。</p><p>单位：天</p>
 * @method void setNDRStorageDay(integer $NDRStorageDay) 设置<p>NDR 日志保留天数。</p><p>单位：天</p>
 * @method integer getAclSize() 获取<p>访问控制日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
 * @method void setAclSize(integer $AclSize) 设置<p>访问控制日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
 * @method integer getIdsSize() 获取<p>入侵检测日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
 * @method void setIdsSize(integer $IdsSize) 设置<p>入侵检测日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
 * @method integer getNetFlowSize() 获取<p>流量日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
 * @method void setNetFlowSize(integer $NetFlowSize) 设置<p>流量日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
 * @method integer getOperateSize() 获取<p>操作日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
 * @method void setOperateSize(integer $OperateSize) 设置<p>操作日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
 * @method integer getNDRRiskSize() 获取<p>NDR 风险日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
 * @method void setNDRRiskSize(integer $NDRRiskSize) 设置<p>NDR 风险日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
 * @method integer getNDRNetFlowSize() 获取<p>NDR 流量日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
 * @method void setNDRNetFlowSize(integer $NDRNetFlowSize) 设置<p>NDR 流量日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
 * @method integer getPayMode() 获取<p>日志存储计费模式标识。</p>
 * @method void setPayMode(integer $PayMode) 设置<p>日志存储计费模式标识。</p>
 * @method integer getArrearsStopWriting() 获取<p>是否因欠费停止写入日志的状态标识。</p>
 * @method void setArrearsStopWriting(integer $ArrearsStopWriting) 设置<p>是否因欠费停止写入日志的状态标识。</p>
 */
class OverviewLogStorageDetail extends AbstractModel
{
    /**
     * @var integer <p>日志已使用存储容量，单位为 Byte。</p><p>单位：Byte</p>
     */
    public $UsedBytes;

    /**
     * @var integer <p>日志总存储容量，单位为 Byte。</p><p>单位：Byte</p>
     */
    public $TotalBytes;

    /**
     * @var integer <p>日志保留天数。</p><p>单位：天</p>
     */
    public $StorageDay;

    /**
     * @var integer <p>NDR 日志保留天数。</p><p>单位：天</p>
     */
    public $NDRStorageDay;

    /**
     * @var integer <p>访问控制日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
     */
    public $AclSize;

    /**
     * @var integer <p>入侵检测日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
     */
    public $IdsSize;

    /**
     * @var integer <p>流量日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
     */
    public $NetFlowSize;

    /**
     * @var integer <p>操作日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
     */
    public $OperateSize;

    /**
     * @var integer <p>NDR 风险日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
     */
    public $NDRRiskSize;

    /**
     * @var integer <p>NDR 流量日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
     */
    public $NDRNetFlowSize;

    /**
     * @var integer <p>日志存储计费模式标识。</p>
     */
    public $PayMode;

    /**
     * @var integer <p>是否因欠费停止写入日志的状态标识。</p>
     */
    public $ArrearsStopWriting;

    /**
     * @param integer $UsedBytes <p>日志已使用存储容量，单位为 Byte。</p><p>单位：Byte</p>
     * @param integer $TotalBytes <p>日志总存储容量，单位为 Byte。</p><p>单位：Byte</p>
     * @param integer $StorageDay <p>日志保留天数。</p><p>单位：天</p>
     * @param integer $NDRStorageDay <p>NDR 日志保留天数。</p><p>单位：天</p>
     * @param integer $AclSize <p>访问控制日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
     * @param integer $IdsSize <p>入侵检测日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
     * @param integer $NetFlowSize <p>流量日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
     * @param integer $OperateSize <p>操作日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
     * @param integer $NDRRiskSize <p>NDR 风险日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
     * @param integer $NDRNetFlowSize <p>NDR 流量日志占用容量，单位为 Byte。</p><p>单位：Byte</p>
     * @param integer $PayMode <p>日志存储计费模式标识。</p>
     * @param integer $ArrearsStopWriting <p>是否因欠费停止写入日志的状态标识。</p>
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
        if (array_key_exists("UsedBytes",$param) and $param["UsedBytes"] !== null) {
            $this->UsedBytes = $param["UsedBytes"];
        }

        if (array_key_exists("TotalBytes",$param) and $param["TotalBytes"] !== null) {
            $this->TotalBytes = $param["TotalBytes"];
        }

        if (array_key_exists("StorageDay",$param) and $param["StorageDay"] !== null) {
            $this->StorageDay = $param["StorageDay"];
        }

        if (array_key_exists("NDRStorageDay",$param) and $param["NDRStorageDay"] !== null) {
            $this->NDRStorageDay = $param["NDRStorageDay"];
        }

        if (array_key_exists("AclSize",$param) and $param["AclSize"] !== null) {
            $this->AclSize = $param["AclSize"];
        }

        if (array_key_exists("IdsSize",$param) and $param["IdsSize"] !== null) {
            $this->IdsSize = $param["IdsSize"];
        }

        if (array_key_exists("NetFlowSize",$param) and $param["NetFlowSize"] !== null) {
            $this->NetFlowSize = $param["NetFlowSize"];
        }

        if (array_key_exists("OperateSize",$param) and $param["OperateSize"] !== null) {
            $this->OperateSize = $param["OperateSize"];
        }

        if (array_key_exists("NDRRiskSize",$param) and $param["NDRRiskSize"] !== null) {
            $this->NDRRiskSize = $param["NDRRiskSize"];
        }

        if (array_key_exists("NDRNetFlowSize",$param) and $param["NDRNetFlowSize"] !== null) {
            $this->NDRNetFlowSize = $param["NDRNetFlowSize"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ArrearsStopWriting",$param) and $param["ArrearsStopWriting"] !== null) {
            $this->ArrearsStopWriting = $param["ArrearsStopWriting"];
        }
    }
}
