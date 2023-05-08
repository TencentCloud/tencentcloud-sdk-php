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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 增值税普通发票（卷票）条目
 *
 * @method string getName() 获取项目名称
 * @method void setName(string $Name) 设置项目名称
 * @method string getQuantity() 获取数量
 * @method void setQuantity(string $Quantity) 设置数量
 * @method string getPrice() 获取单价
 * @method void setPrice(string $Price) 设置单价
 * @method string getTotal() 获取金额
 * @method void setTotal(string $Total) 设置金额
 */
class VatRollItem extends AbstractModel
{
    /**
     * @var string 项目名称
     */
    public $Name;

    /**
     * @var string 数量
     */
    public $Quantity;

    /**
     * @var string 单价
     */
    public $Price;

    /**
     * @var string 金额
     */
    public $Total;

    /**
     * @param string $Name 项目名称
     * @param string $Quantity 数量
     * @param string $Price 单价
     * @param string $Total 金额
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
