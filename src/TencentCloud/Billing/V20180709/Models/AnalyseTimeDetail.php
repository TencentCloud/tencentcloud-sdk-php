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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 成本分返回值复杂类型
 *
 * @method string getTime() 获取日期
 * @method void setTime(string $Time) 设置日期
 * @method string getMoney() 获取金额
 * @method void setMoney(string $Money) 设置金额
 */
class AnalyseTimeDetail extends AbstractModel
{
    /**
     * @var string 日期
     */
    public $Time;

    /**
     * @var string 金额
     */
    public $Money;

    /**
     * @param string $Time 日期
     * @param string $Money 金额
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Money",$param) and $param["Money"] !== null) {
            $this->Money = $param["Money"];
        }
    }
}
