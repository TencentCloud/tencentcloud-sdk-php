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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getStatus() 获取用户状态，取值：
<li>Normal：正常 ；</li>
<li> Closed：下线；</li>
<li> Arrearage：欠费停服。</li>
 * @method void setStatus(string $Status) 设置用户状态，取值：
<li>Normal：正常 ；</li>
<li> Closed：下线；</li>
<li> Arrearage：欠费停服。</li>
 * @method string getPaymentType() 获取用户付费类型，取值：
<li>DailyPayment：日结付费 ；</li>
<li>MonthlyPayment：月结付费。</li>
 * @method void setPaymentType(string $PaymentType) 设置用户付费类型，取值：
<li>DailyPayment：日结付费 ；</li>
<li>MonthlyPayment：月结付费。</li>
 * @method integer getOldMpsUser() 获取是否是旧版视频处理用户，取值：
<li>0：否 ；</li>
<li>1：是。</li>
 * @method void setOldMpsUser(integer $OldMpsUser) 设置是否是旧版视频处理用户，取值：
<li>0：否 ；</li>
<li>1：是。</li>
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *DescribeUserInfo返回参数结构体
 */
class DescribeUserInfoResponse extends AbstractModel
{
    /**
     * @var string 用户状态，取值：
<li>Normal：正常 ；</li>
<li> Closed：下线；</li>
<li> Arrearage：欠费停服。</li>
     */
    public $Status;

    /**
     * @var string 用户付费类型，取值：
<li>DailyPayment：日结付费 ；</li>
<li>MonthlyPayment：月结付费。</li>
     */
    public $PaymentType;

    /**
     * @var integer 是否是旧版视频处理用户，取值：
<li>0：否 ；</li>
<li>1：是。</li>
     */
    public $OldMpsUser;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param string $Status 用户状态，取值：
<li>Normal：正常 ；</li>
<li> Closed：下线；</li>
<li> Arrearage：欠费停服。</li>
     * @param string $PaymentType 用户付费类型，取值：
<li>DailyPayment：日结付费 ；</li>
<li>MonthlyPayment：月结付费。</li>
     * @param integer $OldMpsUser 是否是旧版视频处理用户，取值：
<li>0：否 ；</li>
<li>1：是。</li>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PaymentType",$param) and $param["PaymentType"] !== null) {
            $this->PaymentType = $param["PaymentType"];
        }

        if (array_key_exists("OldMpsUser",$param) and $param["OldMpsUser"] !== null) {
            $this->OldMpsUser = $param["OldMpsUser"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
