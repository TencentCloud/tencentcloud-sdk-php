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
 * 直接子客信用信息
 *
 * @method integer getUin() 获取用户Uin
 * @method void setUin(integer $Uin) 设置用户Uin
 * @method float getTotalCredit() 获取总信用值
 * @method void setTotalCredit(float $TotalCredit) 设置总信用值
 * @method float getRemainingCredit() 获取剩余信用值
 * @method void setRemainingCredit(float $RemainingCredit) 设置剩余信用值
 */
class QueryDirectCustomersCreditData extends AbstractModel
{
    /**
     * @var integer 用户Uin
     */
    public $Uin;

    /**
     * @var float 总信用值
     */
    public $TotalCredit;

    /**
     * @var float 剩余信用值
     */
    public $RemainingCredit;

    /**
     * @param integer $Uin 用户Uin
     * @param float $TotalCredit 总信用值
     * @param float $RemainingCredit 剩余信用值
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("TotalCredit",$param) and $param["TotalCredit"] !== null) {
            $this->TotalCredit = $param["TotalCredit"];
        }

        if (array_key_exists("RemainingCredit",$param) and $param["RemainingCredit"] !== null) {
            $this->RemainingCredit = $param["RemainingCredit"];
        }
    }
}
