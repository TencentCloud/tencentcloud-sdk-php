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
 * 通行费发票信息
 *
 * @method string getNumberPlate() 获取通行费车牌号
 * @method void setNumberPlate(string $NumberPlate) 设置通行费车牌号
 * @method string getType() 获取通行费类型
 * @method void setType(string $Type) 设置通行费类型
 * @method string getPassDateBegin() 获取通行日期起
 * @method void setPassDateBegin(string $PassDateBegin) 设置通行日期起
 * @method string getPassDateEnd() 获取通行日期止
 * @method void setPassDateEnd(string $PassDateEnd) 设置通行日期止
 * @method string getTaxClassifyCode() 获取税收分类编码
 * @method void setTaxClassifyCode(string $TaxClassifyCode) 设置税收分类编码
 */
class PassInvoiceInfo extends AbstractModel
{
    /**
     * @var string 通行费车牌号
     */
    public $NumberPlate;

    /**
     * @var string 通行费类型
     */
    public $Type;

    /**
     * @var string 通行日期起
     */
    public $PassDateBegin;

    /**
     * @var string 通行日期止
     */
    public $PassDateEnd;

    /**
     * @var string 税收分类编码
     */
    public $TaxClassifyCode;

    /**
     * @param string $NumberPlate 通行费车牌号
     * @param string $Type 通行费类型
     * @param string $PassDateBegin 通行日期起
     * @param string $PassDateEnd 通行日期止
     * @param string $TaxClassifyCode 税收分类编码
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
        if (array_key_exists("NumberPlate",$param) and $param["NumberPlate"] !== null) {
            $this->NumberPlate = $param["NumberPlate"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PassDateBegin",$param) and $param["PassDateBegin"] !== null) {
            $this->PassDateBegin = $param["PassDateBegin"];
        }

        if (array_key_exists("PassDateEnd",$param) and $param["PassDateEnd"] !== null) {
            $this->PassDateEnd = $param["PassDateEnd"];
        }

        if (array_key_exists("TaxClassifyCode",$param) and $param["TaxClassifyCode"] !== null) {
            $this->TaxClassifyCode = $param["TaxClassifyCode"];
        }
    }
}
