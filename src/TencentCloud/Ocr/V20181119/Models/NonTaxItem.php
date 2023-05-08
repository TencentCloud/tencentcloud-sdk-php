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
 * 非税收入条目
 *
 * @method string getItemID() 获取项目编码
 * @method void setItemID(string $ItemID) 设置项目编码
 * @method string getName() 获取项目名称
 * @method void setName(string $Name) 设置项目名称
 * @method string getUnit() 获取单位
 * @method void setUnit(string $Unit) 设置单位
 * @method string getQuantity() 获取数量
 * @method void setQuantity(string $Quantity) 设置数量
 * @method string getStandard() 获取标准
 * @method void setStandard(string $Standard) 设置标准
 * @method string getTotal() 获取金额
 * @method void setTotal(string $Total) 设置金额
 */
class NonTaxItem extends AbstractModel
{
    /**
     * @var string 项目编码
     */
    public $ItemID;

    /**
     * @var string 项目名称
     */
    public $Name;

    /**
     * @var string 单位
     */
    public $Unit;

    /**
     * @var string 数量
     */
    public $Quantity;

    /**
     * @var string 标准
     */
    public $Standard;

    /**
     * @var string 金额
     */
    public $Total;

    /**
     * @param string $ItemID 项目编码
     * @param string $Name 项目名称
     * @param string $Unit 单位
     * @param string $Quantity 数量
     * @param string $Standard 标准
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
        if (array_key_exists("ItemID",$param) and $param["ItemID"] !== null) {
            $this->ItemID = $param["ItemID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("Standard",$param) and $param["Standard"] !== null) {
            $this->Standard = $param["Standard"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
