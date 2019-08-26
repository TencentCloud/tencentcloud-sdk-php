<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInvoiceNum() 获取发票代码
 * @method void setInvoiceNum(string $InvoiceNum) 设置发票代码
 * @method string getInvoiceCode() 获取发票号码
 * @method void setInvoiceCode(string $InvoiceCode) 设置发票号码
 * @method string getDate() 获取日期
 * @method void setDate(string $Date) 设置日期
 * @method string getFare() 获取金额
 * @method void setFare(string $Fare) 设置金额
 * @method string getGetOnTime() 获取上车时间
 * @method void setGetOnTime(string $GetOnTime) 设置上车时间
 * @method string getGetOffTime() 获取下车时间
 * @method void setGetOffTime(string $GetOffTime) 设置下车时间
 * @method string getDistance() 获取里程
 * @method void setDistance(string $Distance) 设置里程
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *TaxiInvoiceOCR返回参数结构体
 */
class TaxiInvoiceOCRResponse extends AbstractModel
{
    /**
     * @var string 发票代码
     */
    public $InvoiceNum;

    /**
     * @var string 发票号码
     */
    public $InvoiceCode;

    /**
     * @var string 日期
     */
    public $Date;

    /**
     * @var string 金额
     */
    public $Fare;

    /**
     * @var string 上车时间
     */
    public $GetOnTime;

    /**
     * @var string 下车时间
     */
    public $GetOffTime;

    /**
     * @var string 里程
     */
    public $Distance;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param string $InvoiceNum 发票代码
     * @param string $InvoiceCode 发票号码
     * @param string $Date 日期
     * @param string $Fare 金额
     * @param string $GetOnTime 上车时间
     * @param string $GetOffTime 下车时间
     * @param string $Distance 里程
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InvoiceNum",$param) and $param["InvoiceNum"] !== null) {
            $this->InvoiceNum = $param["InvoiceNum"];
        }

        if (array_key_exists("InvoiceCode",$param) and $param["InvoiceCode"] !== null) {
            $this->InvoiceCode = $param["InvoiceCode"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Fare",$param) and $param["Fare"] !== null) {
            $this->Fare = $param["Fare"];
        }

        if (array_key_exists("GetOnTime",$param) and $param["GetOnTime"] !== null) {
            $this->GetOnTime = $param["GetOnTime"];
        }

        if (array_key_exists("GetOffTime",$param) and $param["GetOffTime"] !== null) {
            $this->GetOffTime = $param["GetOffTime"];
        }

        if (array_key_exists("Distance",$param) and $param["Distance"] !== null) {
            $this->Distance = $param["Distance"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
