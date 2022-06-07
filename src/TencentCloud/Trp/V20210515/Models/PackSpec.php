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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数组
 *
 * @method integer getLevel() 获取层级
 * @method void setLevel(integer $Level) 设置层级
 * @method integer getRate() 获取比例
 * @method void setRate(integer $Rate) 设置比例
 * @method integer getAmount() 获取数量
 * @method void setAmount(integer $Amount) 设置数量
 */
class PackSpec extends AbstractModel
{
    /**
     * @var integer 层级
     */
    public $Level;

    /**
     * @var integer 比例
     */
    public $Rate;

    /**
     * @var integer 数量
     */
    public $Amount;

    /**
     * @param integer $Level 层级
     * @param integer $Rate 比例
     * @param integer $Amount 数量
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
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }
    }
}
