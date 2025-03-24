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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 快递寄件信息,快递寄件必填
 *
 * @method string getLogisticsCompany() 获取物流公司
 * @method void setLogisticsCompany(string $LogisticsCompany) 设置物流公司
 * @method string getExpressNumber() 获取快递单号
 * @method void setExpressNumber(string $ExpressNumber) 设置快递单号
 */
class ExpressDelivery extends AbstractModel
{
    /**
     * @var string 物流公司
     */
    public $LogisticsCompany;

    /**
     * @var string 快递单号
     */
    public $ExpressNumber;

    /**
     * @param string $LogisticsCompany 物流公司
     * @param string $ExpressNumber 快递单号
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
        if (array_key_exists("LogisticsCompany",$param) and $param["LogisticsCompany"] !== null) {
            $this->LogisticsCompany = $param["LogisticsCompany"];
        }

        if (array_key_exists("ExpressNumber",$param) and $param["ExpressNumber"] !== null) {
            $this->ExpressNumber = $param["ExpressNumber"];
        }
    }
}
