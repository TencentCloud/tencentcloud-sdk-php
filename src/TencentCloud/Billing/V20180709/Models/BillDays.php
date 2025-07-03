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
 * 日期筛选列表
 *
 * @method string getBillDay() 获取日期：结算日期
 * @method void setBillDay(string $BillDay) 设置日期：结算日期
 */
class BillDays extends AbstractModel
{
    /**
     * @var string 日期：结算日期
     */
    public $BillDay;

    /**
     * @param string $BillDay 日期：结算日期
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
        if (array_key_exists("BillDay",$param) and $param["BillDay"] !== null) {
            $this->BillDay = $param["BillDay"];
        }
    }
}
