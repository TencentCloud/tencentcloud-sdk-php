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
 * @method string getInvoiceNum() 获取发票号码
 * @method void setInvoiceNum(string $InvoiceNum) 设置发票号码
 * @method string getInvoiceCode() 获取发票代码
 * @method void setInvoiceCode(string $InvoiceCode) 设置发票代码
 * @method string getRate() 获取大写金额
 * @method void setRate(string $Rate) 设置大写金额
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *QuotaInvoiceOCR返回参数结构体
 */
class QuotaInvoiceOCRResponse extends AbstractModel
{
    /**
     * @var string 发票号码
     */
    public $InvoiceNum;

    /**
     * @var string 发票代码
     */
    public $InvoiceCode;

    /**
     * @var string 大写金额
     */
    public $Rate;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param string $InvoiceNum 发票号码
     * @param string $InvoiceCode 发票代码
     * @param string $Rate 大写金额
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

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
