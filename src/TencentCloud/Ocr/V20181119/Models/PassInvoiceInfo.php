<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * @method string getNumberPlate() 获取<p>通行费车牌号；数电通行费源字段 cph 写入该字段。</p>
 * @method void setNumberPlate(string $NumberPlate) 设置<p>通行费车牌号；数电通行费源字段 cph 写入该字段。</p>
 * @method string getType() 获取<p>通行费类型；数电通行费源字段 cllx 写入该字</p>
 * @method void setType(string $Type) 设置<p>通行费类型；数电通行费源字段 cllx 写入该字</p>
 * @method string getPassDateBegin() 获取<p>通行日期起</p>
 * @method void setPassDateBegin(string $PassDateBegin) 设置<p>通行日期起</p>
 * @method string getPassDateEnd() 获取<p>通行日期止</p>
 * @method void setPassDateEnd(string $PassDateEnd) 设置<p>通行日期止</p>
 * @method string getTaxClassifyCode() 获取<p>税收分类编码</p>
 * @method void setTaxClassifyCode(string $TaxClassifyCode) 设置<p>税收分类编码</p>
 * @method string getCarType() 获取<p>通行费车牌号</p>
 * @method void setCarType(string $CarType) 设置<p>通行费车牌号</p>
 * @method string getPlateNumber() 获取<p>通行费车辆类型</p>
 * @method void setPlateNumber(string $PlateNumber) 设置<p>通行费车辆类型</p>
 */
class PassInvoiceInfo extends AbstractModel
{
    /**
     * @var string <p>通行费车牌号；数电通行费源字段 cph 写入该字段。</p>
     */
    public $NumberPlate;

    /**
     * @var string <p>通行费类型；数电通行费源字段 cllx 写入该字</p>
     */
    public $Type;

    /**
     * @var string <p>通行日期起</p>
     */
    public $PassDateBegin;

    /**
     * @var string <p>通行日期止</p>
     */
    public $PassDateEnd;

    /**
     * @var string <p>税收分类编码</p>
     */
    public $TaxClassifyCode;

    /**
     * @var string <p>通行费车牌号</p>
     */
    public $CarType;

    /**
     * @var string <p>通行费车辆类型</p>
     */
    public $PlateNumber;

    /**
     * @param string $NumberPlate <p>通行费车牌号；数电通行费源字段 cph 写入该字段。</p>
     * @param string $Type <p>通行费类型；数电通行费源字段 cllx 写入该字</p>
     * @param string $PassDateBegin <p>通行日期起</p>
     * @param string $PassDateEnd <p>通行日期止</p>
     * @param string $TaxClassifyCode <p>税收分类编码</p>
     * @param string $CarType <p>通行费车牌号</p>
     * @param string $PlateNumber <p>通行费车辆类型</p>
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

        if (array_key_exists("CarType",$param) and $param["CarType"] !== null) {
            $this->CarType = $param["CarType"];
        }

        if (array_key_exists("PlateNumber",$param) and $param["PlateNumber"] !== null) {
            $this->PlateNumber = $param["PlateNumber"];
        }
    }
}
