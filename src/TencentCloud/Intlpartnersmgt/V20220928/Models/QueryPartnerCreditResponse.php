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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryPartnerCredit返回参数结构体
 *
 * @method float getAllocatedCredit() 获取已分配额度
 * @method void setAllocatedCredit(float $AllocatedCredit) 设置已分配额度
 * @method float getTotalCredit() 获取额度总数
 * @method void setTotalCredit(float $TotalCredit) 设置额度总数
 * @method float getRemainingCredit() 获取剩余额度
 * @method void setRemainingCredit(float $RemainingCredit) 设置剩余额度
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryPartnerCreditResponse extends AbstractModel
{
    /**
     * @var float 已分配额度
     */
    public $AllocatedCredit;

    /**
     * @var float 额度总数
     */
    public $TotalCredit;

    /**
     * @var float 剩余额度
     */
    public $RemainingCredit;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $AllocatedCredit 已分配额度
     * @param float $TotalCredit 额度总数
     * @param float $RemainingCredit 剩余额度
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
        if (array_key_exists("AllocatedCredit",$param) and $param["AllocatedCredit"] !== null) {
            $this->AllocatedCredit = $param["AllocatedCredit"];
        }

        if (array_key_exists("TotalCredit",$param) and $param["TotalCredit"] !== null) {
            $this->TotalCredit = $param["TotalCredit"];
        }

        if (array_key_exists("RemainingCredit",$param) and $param["RemainingCredit"] !== null) {
            $this->RemainingCredit = $param["RemainingCredit"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
