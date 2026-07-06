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
 * DescribeLogStorageStatistic返回参数结构体
 *
 * @method integer getReturnCode() 获取<p>返回状态码 0 成功 非0不成功</p>
 * @method void setReturnCode(integer $ReturnCode) 设置<p>返回状态码 0 成功 非0不成功</p>
 * @method string getReturnMsg() 获取<p>返回信息  success 成功 其他 不成功</p>
 * @method void setReturnMsg(string $ReturnMsg) 设置<p>返回信息  success 成功 其他 不成功</p>
 * @method integer getUsedSize() 获取<p>已使用存储量，单位B</p>
 * @method void setUsedSize(integer $UsedSize) 设置<p>已使用存储量，单位B</p>
 * @method integer getTotalSize() 获取<p>配额存储总量，单位B</p>
 * @method void setTotalSize(integer $TotalSize) 设置<p>配额存储总量，单位B</p>
 * @method integer getStorageDay() 获取<p>存储天数</p>
 * @method void setStorageDay(integer $StorageDay) 设置<p>存储天数</p>
 * @method integer getAclSize() 获取<p>访问控制日志存储量，单位B</p>
 * @method void setAclSize(integer $AclSize) 设置<p>访问控制日志存储量，单位B</p>
 * @method integer getIdsSize() 获取<p>入侵防御日志存储量，单位B</p>
 * @method void setIdsSize(integer $IdsSize) 设置<p>入侵防御日志存储量，单位B</p>
 * @method integer getNetFlowSize() 获取<p>流量日志存储量，单位B</p>
 * @method void setNetFlowSize(integer $NetFlowSize) 设置<p>流量日志存储量，单位B</p>
 * @method integer getOperateSize() 获取<p>操作日志存储量，单位B</p>
 * @method void setOperateSize(integer $OperateSize) 设置<p>操作日志存储量，单位B</p>
 * @method integer getLeftSize() 获取<p>剩余存储量，单位B</p>
 * @method void setLeftSize(integer $LeftSize) 设置<p>剩余存储量，单位B</p>
 * @method integer getPayMode() 获取<p>计费模式，0后付费，1预付费</p>
 * @method void setPayMode(integer $PayMode) 设置<p>计费模式，0后付费，1预付费</p>
 * @method array getTimeHistogram() 获取<p>每日增加日志存储量柱状图</p>
 * @method void setTimeHistogram(array $TimeHistogram) 设置<p>每日增加日志存储量柱状图</p>
 * @method StorageHistogramShow getTimeHistogramShow() 获取<p>柱形图格式数据</p>
 * @method void setTimeHistogramShow(StorageHistogramShow $TimeHistogramShow) 设置<p>柱形图格式数据</p>
 * @method integer getArrearsStopWriting() 获取<p>后付费模式存储状态，0正常，1欠费停止写入</p>
 * @method void setArrearsStopWriting(integer $ArrearsStopWriting) 设置<p>后付费模式存储状态，0正常，1欠费停止写入</p>
 * @method integer getNDRNetFlowSize() 获取<p>NDR流量日志存储量，单位B</p>
 * @method void setNDRNetFlowSize(integer $NDRNetFlowSize) 设置<p>NDR流量日志存储量，单位B</p>
 * @method integer getNDRRiskSize() 获取<p>NDR风险日志存储量，单位B</p>
 * @method void setNDRRiskSize(integer $NDRRiskSize) 设置<p>NDR风险日志存储量，单位B</p>
 * @method integer getNDRStorageDay() 获取<p>NDR日志存储天数</p>
 * @method void setNDRStorageDay(integer $NDRStorageDay) 设置<p>NDR日志存储天数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLogStorageStatisticResponse extends AbstractModel
{
    /**
     * @var integer <p>返回状态码 0 成功 非0不成功</p>
     */
    public $ReturnCode;

    /**
     * @var string <p>返回信息  success 成功 其他 不成功</p>
     */
    public $ReturnMsg;

    /**
     * @var integer <p>已使用存储量，单位B</p>
     */
    public $UsedSize;

    /**
     * @var integer <p>配额存储总量，单位B</p>
     */
    public $TotalSize;

    /**
     * @var integer <p>存储天数</p>
     */
    public $StorageDay;

    /**
     * @var integer <p>访问控制日志存储量，单位B</p>
     */
    public $AclSize;

    /**
     * @var integer <p>入侵防御日志存储量，单位B</p>
     */
    public $IdsSize;

    /**
     * @var integer <p>流量日志存储量，单位B</p>
     */
    public $NetFlowSize;

    /**
     * @var integer <p>操作日志存储量，单位B</p>
     */
    public $OperateSize;

    /**
     * @var integer <p>剩余存储量，单位B</p>
     */
    public $LeftSize;

    /**
     * @var integer <p>计费模式，0后付费，1预付费</p>
     */
    public $PayMode;

    /**
     * @var array <p>每日增加日志存储量柱状图</p>
     */
    public $TimeHistogram;

    /**
     * @var StorageHistogramShow <p>柱形图格式数据</p>
     */
    public $TimeHistogramShow;

    /**
     * @var integer <p>后付费模式存储状态，0正常，1欠费停止写入</p>
     */
    public $ArrearsStopWriting;

    /**
     * @var integer <p>NDR流量日志存储量，单位B</p>
     */
    public $NDRNetFlowSize;

    /**
     * @var integer <p>NDR风险日志存储量，单位B</p>
     */
    public $NDRRiskSize;

    /**
     * @var integer <p>NDR日志存储天数</p>
     */
    public $NDRStorageDay;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ReturnCode <p>返回状态码 0 成功 非0不成功</p>
     * @param string $ReturnMsg <p>返回信息  success 成功 其他 不成功</p>
     * @param integer $UsedSize <p>已使用存储量，单位B</p>
     * @param integer $TotalSize <p>配额存储总量，单位B</p>
     * @param integer $StorageDay <p>存储天数</p>
     * @param integer $AclSize <p>访问控制日志存储量，单位B</p>
     * @param integer $IdsSize <p>入侵防御日志存储量，单位B</p>
     * @param integer $NetFlowSize <p>流量日志存储量，单位B</p>
     * @param integer $OperateSize <p>操作日志存储量，单位B</p>
     * @param integer $LeftSize <p>剩余存储量，单位B</p>
     * @param integer $PayMode <p>计费模式，0后付费，1预付费</p>
     * @param array $TimeHistogram <p>每日增加日志存储量柱状图</p>
     * @param StorageHistogramShow $TimeHistogramShow <p>柱形图格式数据</p>
     * @param integer $ArrearsStopWriting <p>后付费模式存储状态，0正常，1欠费停止写入</p>
     * @param integer $NDRNetFlowSize <p>NDR流量日志存储量，单位B</p>
     * @param integer $NDRRiskSize <p>NDR风险日志存储量，单位B</p>
     * @param integer $NDRStorageDay <p>NDR日志存储天数</p>
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
        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("UsedSize",$param) and $param["UsedSize"] !== null) {
            $this->UsedSize = $param["UsedSize"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("StorageDay",$param) and $param["StorageDay"] !== null) {
            $this->StorageDay = $param["StorageDay"];
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

        if (array_key_exists("LeftSize",$param) and $param["LeftSize"] !== null) {
            $this->LeftSize = $param["LeftSize"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("TimeHistogram",$param) and $param["TimeHistogram"] !== null) {
            $this->TimeHistogram = [];
            foreach ($param["TimeHistogram"] as $key => $value){
                $obj = new StorageHistogram();
                $obj->deserialize($value);
                array_push($this->TimeHistogram, $obj);
            }
        }

        if (array_key_exists("TimeHistogramShow",$param) and $param["TimeHistogramShow"] !== null) {
            $this->TimeHistogramShow = new StorageHistogramShow();
            $this->TimeHistogramShow->deserialize($param["TimeHistogramShow"]);
        }

        if (array_key_exists("ArrearsStopWriting",$param) and $param["ArrearsStopWriting"] !== null) {
            $this->ArrearsStopWriting = $param["ArrearsStopWriting"];
        }

        if (array_key_exists("NDRNetFlowSize",$param) and $param["NDRNetFlowSize"] !== null) {
            $this->NDRNetFlowSize = $param["NDRNetFlowSize"];
        }

        if (array_key_exists("NDRRiskSize",$param) and $param["NDRRiskSize"] !== null) {
            $this->NDRRiskSize = $param["NDRRiskSize"];
        }

        if (array_key_exists("NDRStorageDay",$param) and $param["NDRStorageDay"] !== null) {
            $this->NDRStorageDay = $param["NDRStorageDay"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
