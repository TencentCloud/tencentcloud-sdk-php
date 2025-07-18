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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterBill返回参数结构体
 *
 * @method string getFrontSeqNo() 获取银行流水号
 * @method void setFrontSeqNo(string $FrontSeqNo) 设置银行流水号
 * @method string getReservedMessage() 获取保留字段
 * @method void setReservedMessage(string $ReservedMessage) 设置保留字段
 * @method string getRequestType() 获取请求类型
 * @method void setRequestType(string $RequestType) 设置请求类型
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RegisterBillResponse extends AbstractModel
{
    /**
     * @var string 银行流水号
     */
    public $FrontSeqNo;

    /**
     * @var string 保留字段
     */
    public $ReservedMessage;

    /**
     * @var string 请求类型
     */
    public $RequestType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FrontSeqNo 银行流水号
     * @param string $ReservedMessage 保留字段
     * @param string $RequestType 请求类型
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("FrontSeqNo",$param) and $param["FrontSeqNo"] !== null) {
            $this->FrontSeqNo = $param["FrontSeqNo"];
        }

        if (array_key_exists("ReservedMessage",$param) and $param["ReservedMessage"] !== null) {
            $this->ReservedMessage = $param["ReservedMessage"];
        }

        if (array_key_exists("RequestType",$param) and $param["RequestType"] !== null) {
            $this->RequestType = $param["RequestType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
