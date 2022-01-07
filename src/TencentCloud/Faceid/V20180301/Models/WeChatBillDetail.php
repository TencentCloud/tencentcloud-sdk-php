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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账单详情
 *
 * @method string getBizToken() 获取token
 * @method void setBizToken(string $BizToken) 设置token
 * @method integer getChargeCount() 获取本token收费次数
 * @method void setChargeCount(integer $ChargeCount) 设置本token收费次数
 * @method array getChargeDetails() 获取本token计费详情
 * @method void setChargeDetails(array $ChargeDetails) 设置本token计费详情
 * @method string getRuleId() 获取业务RuleId
 * @method void setRuleId(string $RuleId) 设置业务RuleId
 */
class WeChatBillDetail extends AbstractModel
{
    /**
     * @var string token
     */
    public $BizToken;

    /**
     * @var integer 本token收费次数
     */
    public $ChargeCount;

    /**
     * @var array 本token计费详情
     */
    public $ChargeDetails;

    /**
     * @var string 业务RuleId
     */
    public $RuleId;

    /**
     * @param string $BizToken token
     * @param integer $ChargeCount 本token收费次数
     * @param array $ChargeDetails 本token计费详情
     * @param string $RuleId 业务RuleId
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
        if (array_key_exists("BizToken",$param) and $param["BizToken"] !== null) {
            $this->BizToken = $param["BizToken"];
        }

        if (array_key_exists("ChargeCount",$param) and $param["ChargeCount"] !== null) {
            $this->ChargeCount = $param["ChargeCount"];
        }

        if (array_key_exists("ChargeDetails",$param) and $param["ChargeDetails"] !== null) {
            $this->ChargeDetails = [];
            foreach ($param["ChargeDetails"] as $key => $value){
                $obj = new ChargeDetail();
                $obj->deserialize($value);
                array_push($this->ChargeDetails, $obj);
            }
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
