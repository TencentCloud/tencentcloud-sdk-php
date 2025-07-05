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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWorkOrderStatistics返回参数结构体
 *
 * @method integer getTotalNum() 获取总工单数量
 * @method void setTotalNum(integer $TotalNum) 设置总工单数量
 * @method integer getProcessingNum() 获取进行中的工单数量
 * @method void setProcessingNum(integer $ProcessingNum) 设置进行中的工单数量
 * @method integer getConfirmingNum() 获取待确认的工单数量
 * @method void setConfirmingNum(integer $ConfirmingNum) 设置待确认的工单数量
 * @method integer getFinishNum() 获取完成的工单数量
 * @method void setFinishNum(integer $FinishNum) 设置完成的工单数量
 * @method integer getRejectNum() 获取拒绝的工单数量
 * @method void setRejectNum(integer $RejectNum) 设置拒绝的工单数量
 * @method integer getExceptionNum() 获取异常的工单数量
 * @method void setExceptionNum(integer $ExceptionNum) 设置异常的工单数量
 * @method integer getCancelNum() 获取客户取消的工单数量
 * @method void setCancelNum(integer $CancelNum) 设置客户取消的工单数量
 * @method integer getCheckingNum() 获取围笼进出审核的工单数量
 * @method void setCheckingNum(integer $CheckingNum) 设置围笼进出审核的工单数量
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeWorkOrderStatisticsResponse extends AbstractModel
{
    /**
     * @var integer 总工单数量
     */
    public $TotalNum;

    /**
     * @var integer 进行中的工单数量
     */
    public $ProcessingNum;

    /**
     * @var integer 待确认的工单数量
     */
    public $ConfirmingNum;

    /**
     * @var integer 完成的工单数量
     */
    public $FinishNum;

    /**
     * @var integer 拒绝的工单数量
     */
    public $RejectNum;

    /**
     * @var integer 异常的工单数量
     */
    public $ExceptionNum;

    /**
     * @var integer 客户取消的工单数量
     */
    public $CancelNum;

    /**
     * @var integer 围笼进出审核的工单数量
     */
    public $CheckingNum;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalNum 总工单数量
     * @param integer $ProcessingNum 进行中的工单数量
     * @param integer $ConfirmingNum 待确认的工单数量
     * @param integer $FinishNum 完成的工单数量
     * @param integer $RejectNum 拒绝的工单数量
     * @param integer $ExceptionNum 异常的工单数量
     * @param integer $CancelNum 客户取消的工单数量
     * @param integer $CheckingNum 围笼进出审核的工单数量
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
        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("ProcessingNum",$param) and $param["ProcessingNum"] !== null) {
            $this->ProcessingNum = $param["ProcessingNum"];
        }

        if (array_key_exists("ConfirmingNum",$param) and $param["ConfirmingNum"] !== null) {
            $this->ConfirmingNum = $param["ConfirmingNum"];
        }

        if (array_key_exists("FinishNum",$param) and $param["FinishNum"] !== null) {
            $this->FinishNum = $param["FinishNum"];
        }

        if (array_key_exists("RejectNum",$param) and $param["RejectNum"] !== null) {
            $this->RejectNum = $param["RejectNum"];
        }

        if (array_key_exists("ExceptionNum",$param) and $param["ExceptionNum"] !== null) {
            $this->ExceptionNum = $param["ExceptionNum"];
        }

        if (array_key_exists("CancelNum",$param) and $param["CancelNum"] !== null) {
            $this->CancelNum = $param["CancelNum"];
        }

        if (array_key_exists("CheckingNum",$param) and $param["CheckingNum"] !== null) {
            $this->CheckingNum = $param["CheckingNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
