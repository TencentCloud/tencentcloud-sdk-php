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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DuplexBilling
 *
 * @method integer getBillingUnit() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>UNKNOW</td><td>0</td><td></td></tr><tr><td>TOKEN</td><td>1</td><td>按token</td></tr><tr><td>PAGE_COUNT</td><td>2</td><td>按页数</td></tr><tr><td>TIMES</td><td>3</td><td>按次数</td></tr><tr><td>TIMES_THOUSAND</td><td>4</td><td>按千次数</td></tr><tr><td>SECOND</td><td>5</td><td>按时长</td></tr><tr><td>CHARACTER</td><td>6</td><td>按字符数</td></tr><tr><td>CHARACTER_THOUSAND</td><td>7</td><td>按千字符数</td></tr><tr><td>SHEET</td><td>8</td><td>按张</td></tr><tr><td>NUMBER</td><td>9</td><td>按个数</td></tr></tbody></table>
 * @method void setBillingUnit(integer $BillingUnit) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>UNKNOW</td><td>0</td><td></td></tr><tr><td>TOKEN</td><td>1</td><td>按token</td></tr><tr><td>PAGE_COUNT</td><td>2</td><td>按页数</td></tr><tr><td>TIMES</td><td>3</td><td>按次数</td></tr><tr><td>TIMES_THOUSAND</td><td>4</td><td>按千次数</td></tr><tr><td>SECOND</td><td>5</td><td>按时长</td></tr><tr><td>CHARACTER</td><td>6</td><td>按字符数</td></tr><tr><td>CHARACTER_THOUSAND</td><td>7</td><td>按千字符数</td></tr><tr><td>SHEET</td><td>8</td><td>按张</td></tr><tr><td>NUMBER</td><td>9</td><td>按个数</td></tr></tbody></table>
 * @method float getInputCashPrice() 获取<p>输入现金价格</p><p>单位：元</p>
 * @method void setInputCashPrice(float $InputCashPrice) 设置<p>输入现金价格</p><p>单位：元</p>
 * @method float getInputPuPrice() 获取<p>输入pu价格</p><p>单位：pu</p>
 * @method void setInputPuPrice(float $InputPuPrice) 设置<p>输入pu价格</p><p>单位：pu</p>
 * @method float getOutputCashPrice() 获取<p>输出现金价格</p><p>单位：元</p>
 * @method void setOutputCashPrice(float $OutputCashPrice) 设置<p>输出现金价格</p><p>单位：元</p>
 * @method float getOutputPuPrice() 获取<p>输出pu价格</p><p>单位：pu</p>
 * @method void setOutputPuPrice(float $OutputPuPrice) 设置<p>输出pu价格</p><p>单位：pu</p>
 */
class DuplexBilling extends AbstractModel
{
    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>UNKNOW</td><td>0</td><td></td></tr><tr><td>TOKEN</td><td>1</td><td>按token</td></tr><tr><td>PAGE_COUNT</td><td>2</td><td>按页数</td></tr><tr><td>TIMES</td><td>3</td><td>按次数</td></tr><tr><td>TIMES_THOUSAND</td><td>4</td><td>按千次数</td></tr><tr><td>SECOND</td><td>5</td><td>按时长</td></tr><tr><td>CHARACTER</td><td>6</td><td>按字符数</td></tr><tr><td>CHARACTER_THOUSAND</td><td>7</td><td>按千字符数</td></tr><tr><td>SHEET</td><td>8</td><td>按张</td></tr><tr><td>NUMBER</td><td>9</td><td>按个数</td></tr></tbody></table>
     */
    public $BillingUnit;

    /**
     * @var float <p>输入现金价格</p><p>单位：元</p>
     */
    public $InputCashPrice;

    /**
     * @var float <p>输入pu价格</p><p>单位：pu</p>
     */
    public $InputPuPrice;

    /**
     * @var float <p>输出现金价格</p><p>单位：元</p>
     */
    public $OutputCashPrice;

    /**
     * @var float <p>输出pu价格</p><p>单位：pu</p>
     */
    public $OutputPuPrice;

    /**
     * @param integer $BillingUnit <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>UNKNOW</td><td>0</td><td></td></tr><tr><td>TOKEN</td><td>1</td><td>按token</td></tr><tr><td>PAGE_COUNT</td><td>2</td><td>按页数</td></tr><tr><td>TIMES</td><td>3</td><td>按次数</td></tr><tr><td>TIMES_THOUSAND</td><td>4</td><td>按千次数</td></tr><tr><td>SECOND</td><td>5</td><td>按时长</td></tr><tr><td>CHARACTER</td><td>6</td><td>按字符数</td></tr><tr><td>CHARACTER_THOUSAND</td><td>7</td><td>按千字符数</td></tr><tr><td>SHEET</td><td>8</td><td>按张</td></tr><tr><td>NUMBER</td><td>9</td><td>按个数</td></tr></tbody></table>
     * @param float $InputCashPrice <p>输入现金价格</p><p>单位：元</p>
     * @param float $InputPuPrice <p>输入pu价格</p><p>单位：pu</p>
     * @param float $OutputCashPrice <p>输出现金价格</p><p>单位：元</p>
     * @param float $OutputPuPrice <p>输出pu价格</p><p>单位：pu</p>
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
        if (array_key_exists("BillingUnit",$param) and $param["BillingUnit"] !== null) {
            $this->BillingUnit = $param["BillingUnit"];
        }

        if (array_key_exists("InputCashPrice",$param) and $param["InputCashPrice"] !== null) {
            $this->InputCashPrice = $param["InputCashPrice"];
        }

        if (array_key_exists("InputPuPrice",$param) and $param["InputPuPrice"] !== null) {
            $this->InputPuPrice = $param["InputPuPrice"];
        }

        if (array_key_exists("OutputCashPrice",$param) and $param["OutputCashPrice"] !== null) {
            $this->OutputCashPrice = $param["OutputCashPrice"];
        }

        if (array_key_exists("OutputPuPrice",$param) and $param["OutputPuPrice"] !== null) {
            $this->OutputPuPrice = $param["OutputPuPrice"];
        }
    }
}
