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
 * @method integer getReturnCode() 获取返回状态码 0 成功 非0不成功
 * @method void setReturnCode(integer $ReturnCode) 设置返回状态码 0 成功 非0不成功
 * @method string getReturnMsg() 获取返回信息  success 成功 其他 不成功
 * @method void setReturnMsg(string $ReturnMsg) 设置返回信息  success 成功 其他 不成功
 * @method integer getUsedSize() 获取已使用存储量，单位B
 * @method void setUsedSize(integer $UsedSize) 设置已使用存储量，单位B
 * @method integer getTotalSize() 获取配额存储总量，单位B
 * @method void setTotalSize(integer $TotalSize) 设置配额存储总量，单位B
 * @method integer getStorageDay() 获取存储天数
 * @method void setStorageDay(integer $StorageDay) 设置存储天数
 * @method integer getAclSize() 获取访问控制日志存储量，单位B
 * @method void setAclSize(integer $AclSize) 设置访问控制日志存储量，单位B
 * @method integer getIdsSize() 获取入侵防御日志存储量，单位B
 * @method void setIdsSize(integer $IdsSize) 设置入侵防御日志存储量，单位B
 * @method integer getNetFlowSize() 获取流量日志存储量，单位B
 * @method void setNetFlowSize(integer $NetFlowSize) 设置流量日志存储量，单位B
 * @method integer getOperateSize() 获取操作日志存储量，单位B
 * @method void setOperateSize(integer $OperateSize) 设置操作日志存储量，单位B
 * @method integer getLeftSize() 获取剩余存储量，单位B
 * @method void setLeftSize(integer $LeftSize) 设置剩余存储量，单位B
 * @method integer getPayMode() 获取计费模式，0后付费，1预付费
 * @method void setPayMode(integer $PayMode) 设置计费模式，0后付费，1预付费
 * @method array getTimeHistogram() 获取每日增加日志存储量柱状图
 * @method void setTimeHistogram(array $TimeHistogram) 设置每日增加日志存储量柱状图
 * @method StorageHistogramShow getTimeHistogramShow() 获取柱形图格式数据
 * @method void setTimeHistogramShow(StorageHistogramShow $TimeHistogramShow) 设置柱形图格式数据
 * @method integer getArrearsStopWriting() 获取后付费模式存储状态，0正常，1欠费停止写入
 * @method void setArrearsStopWriting(integer $ArrearsStopWriting) 设置后付费模式存储状态，0正常，1欠费停止写入
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLogStorageStatisticResponse extends AbstractModel
{
    /**
     * @var integer 返回状态码 0 成功 非0不成功
     */
    public $ReturnCode;

    /**
     * @var string 返回信息  success 成功 其他 不成功
     */
    public $ReturnMsg;

    /**
     * @var integer 已使用存储量，单位B
     */
    public $UsedSize;

    /**
     * @var integer 配额存储总量，单位B
     */
    public $TotalSize;

    /**
     * @var integer 存储天数
     */
    public $StorageDay;

    /**
     * @var integer 访问控制日志存储量，单位B
     */
    public $AclSize;

    /**
     * @var integer 入侵防御日志存储量，单位B
     */
    public $IdsSize;

    /**
     * @var integer 流量日志存储量，单位B
     */
    public $NetFlowSize;

    /**
     * @var integer 操作日志存储量，单位B
     */
    public $OperateSize;

    /**
     * @var integer 剩余存储量，单位B
     */
    public $LeftSize;

    /**
     * @var integer 计费模式，0后付费，1预付费
     */
    public $PayMode;

    /**
     * @var array 每日增加日志存储量柱状图
     */
    public $TimeHistogram;

    /**
     * @var StorageHistogramShow 柱形图格式数据
     */
    public $TimeHistogramShow;

    /**
     * @var integer 后付费模式存储状态，0正常，1欠费停止写入
     */
    public $ArrearsStopWriting;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ReturnCode 返回状态码 0 成功 非0不成功
     * @param string $ReturnMsg 返回信息  success 成功 其他 不成功
     * @param integer $UsedSize 已使用存储量，单位B
     * @param integer $TotalSize 配额存储总量，单位B
     * @param integer $StorageDay 存储天数
     * @param integer $AclSize 访问控制日志存储量，单位B
     * @param integer $IdsSize 入侵防御日志存储量，单位B
     * @param integer $NetFlowSize 流量日志存储量，单位B
     * @param integer $OperateSize 操作日志存储量，单位B
     * @param integer $LeftSize 剩余存储量，单位B
     * @param integer $PayMode 计费模式，0后付费，1预付费
     * @param array $TimeHistogram 每日增加日志存储量柱状图
     * @param StorageHistogramShow $TimeHistogramShow 柱形图格式数据
     * @param integer $ArrearsStopWriting 后付费模式存储状态，0正常，1欠费停止写入
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
