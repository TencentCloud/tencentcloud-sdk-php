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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 我得标的域名结构体。
 *
 * @method string getPayEndTime() 获取支付结束时间
格式:YYYY-MM-DD HH:mm:ss
 * @method void setPayEndTime(string $PayEndTime) 设置支付结束时间
格式:YYYY-MM-DD HH:mm:ss
 * @method string getModifyOwnerEndTime() 获取交割时间
格式:YYYY-MM-DD HH:mm:ss
 * @method void setModifyOwnerEndTime(string $ModifyOwnerEndTime) 设置交割时间
格式:YYYY-MM-DD HH:mm:ss
 */
class BiddingSuccessfulResult extends AbstractModel
{
    /**
     * @var string 支付结束时间
格式:YYYY-MM-DD HH:mm:ss
     */
    public $PayEndTime;

    /**
     * @var string 交割时间
格式:YYYY-MM-DD HH:mm:ss
     */
    public $ModifyOwnerEndTime;

    /**
     * @param string $PayEndTime 支付结束时间
格式:YYYY-MM-DD HH:mm:ss
     * @param string $ModifyOwnerEndTime 交割时间
格式:YYYY-MM-DD HH:mm:ss
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
        if (array_key_exists("PayEndTime",$param) and $param["PayEndTime"] !== null) {
            $this->PayEndTime = $param["PayEndTime"];
        }

        if (array_key_exists("ModifyOwnerEndTime",$param) and $param["ModifyOwnerEndTime"] !== null) {
            $this->ModifyOwnerEndTime = $param["ModifyOwnerEndTime"];
        }
    }
}
