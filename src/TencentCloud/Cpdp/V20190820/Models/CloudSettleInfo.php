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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 结算信息对象
 *
 * @method integer getNeedToBeConfirmed() 获取是否需要支付确认。
0: 不需要支付确认
1: 需要支付确认
传1时，需要在支付完成后成功调用了《支付确认》接口，该笔订单才会被清分出去
 * @method void setNeedToBeConfirmed(integer $NeedToBeConfirmed) 设置是否需要支付确认。
0: 不需要支付确认
1: 需要支付确认
传1时，需要在支付完成后成功调用了《支付确认》接口，该笔订单才会被清分出去
 * @method integer getProfitSharing() 获取是否指定分账。
0: 不指定分账
1: 指定分账
 * @method void setProfitSharing(integer $ProfitSharing) 设置是否指定分账。
0: 不指定分账
1: 指定分账
 */
class CloudSettleInfo extends AbstractModel
{
    /**
     * @var integer 是否需要支付确认。
0: 不需要支付确认
1: 需要支付确认
传1时，需要在支付完成后成功调用了《支付确认》接口，该笔订单才会被清分出去
     */
    public $NeedToBeConfirmed;

    /**
     * @var integer 是否指定分账。
0: 不指定分账
1: 指定分账
     */
    public $ProfitSharing;

    /**
     * @param integer $NeedToBeConfirmed 是否需要支付确认。
0: 不需要支付确认
1: 需要支付确认
传1时，需要在支付完成后成功调用了《支付确认》接口，该笔订单才会被清分出去
     * @param integer $ProfitSharing 是否指定分账。
0: 不指定分账
1: 指定分账
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
        if (array_key_exists("NeedToBeConfirmed",$param) and $param["NeedToBeConfirmed"] !== null) {
            $this->NeedToBeConfirmed = $param["NeedToBeConfirmed"];
        }

        if (array_key_exists("ProfitSharing",$param) and $param["ProfitSharing"] !== null) {
            $this->ProfitSharing = $param["ProfitSharing"];
        }
    }
}
