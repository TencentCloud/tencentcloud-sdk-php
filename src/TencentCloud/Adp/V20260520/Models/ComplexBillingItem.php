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
 * ComplexBillingItem
 *
 * @method array getBillingAttributeList() 获取<p>复合计费维度信息</p>
 * @method void setBillingAttributeList(array $BillingAttributeList) 设置<p>复合计费维度信息</p>
 * @method integer getBillingUnit() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>UNKNOW</td><td>0</td><td></td></tr><tr><td>TOKEN</td><td>1</td><td>按token</td></tr><tr><td>PAGE_COUNT</td><td>2</td><td>按页数</td></tr><tr><td>TIMES</td><td>3</td><td>按次数</td></tr><tr><td>TIMES_THOUSAND</td><td>4</td><td>按千次数</td></tr><tr><td>SECOND</td><td>5</td><td>按时长</td></tr><tr><td>CHARACTER</td><td>6</td><td>按字符数</td></tr><tr><td>CHARACTER_THOUSAND</td><td>7</td><td>按千字符数</td></tr><tr><td>SHEET</td><td>8</td><td>按张</td></tr><tr><td>NUMBER</td><td>9</td><td>按个数</td></tr></tbody></table>
 * @method void setBillingUnit(integer $BillingUnit) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>UNKNOW</td><td>0</td><td></td></tr><tr><td>TOKEN</td><td>1</td><td>按token</td></tr><tr><td>PAGE_COUNT</td><td>2</td><td>按页数</td></tr><tr><td>TIMES</td><td>3</td><td>按次数</td></tr><tr><td>TIMES_THOUSAND</td><td>4</td><td>按千次数</td></tr><tr><td>SECOND</td><td>5</td><td>按时长</td></tr><tr><td>CHARACTER</td><td>6</td><td>按字符数</td></tr><tr><td>CHARACTER_THOUSAND</td><td>7</td><td>按千字符数</td></tr><tr><td>SHEET</td><td>8</td><td>按张</td></tr><tr><td>NUMBER</td><td>9</td><td>按个数</td></tr></tbody></table>
 * @method float getCashPrice() 获取<p>现金价格</p><p>单位：元</p>
 * @method void setCashPrice(float $CashPrice) 设置<p>现金价格</p><p>单位：元</p>
 * @method float getPuPrice() 获取<p>pu价格</p><p>单位：pu</p>
 * @method void setPuPrice(float $PuPrice) 设置<p>pu价格</p><p>单位：pu</p>
 */
class ComplexBillingItem extends AbstractModel
{
    /**
     * @var array <p>复合计费维度信息</p>
     */
    public $BillingAttributeList;

    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>UNKNOW</td><td>0</td><td></td></tr><tr><td>TOKEN</td><td>1</td><td>按token</td></tr><tr><td>PAGE_COUNT</td><td>2</td><td>按页数</td></tr><tr><td>TIMES</td><td>3</td><td>按次数</td></tr><tr><td>TIMES_THOUSAND</td><td>4</td><td>按千次数</td></tr><tr><td>SECOND</td><td>5</td><td>按时长</td></tr><tr><td>CHARACTER</td><td>6</td><td>按字符数</td></tr><tr><td>CHARACTER_THOUSAND</td><td>7</td><td>按千字符数</td></tr><tr><td>SHEET</td><td>8</td><td>按张</td></tr><tr><td>NUMBER</td><td>9</td><td>按个数</td></tr></tbody></table>
     */
    public $BillingUnit;

    /**
     * @var float <p>现金价格</p><p>单位：元</p>
     */
    public $CashPrice;

    /**
     * @var float <p>pu价格</p><p>单位：pu</p>
     */
    public $PuPrice;

    /**
     * @param array $BillingAttributeList <p>复合计费维度信息</p>
     * @param integer $BillingUnit <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>UNKNOW</td><td>0</td><td></td></tr><tr><td>TOKEN</td><td>1</td><td>按token</td></tr><tr><td>PAGE_COUNT</td><td>2</td><td>按页数</td></tr><tr><td>TIMES</td><td>3</td><td>按次数</td></tr><tr><td>TIMES_THOUSAND</td><td>4</td><td>按千次数</td></tr><tr><td>SECOND</td><td>5</td><td>按时长</td></tr><tr><td>CHARACTER</td><td>6</td><td>按字符数</td></tr><tr><td>CHARACTER_THOUSAND</td><td>7</td><td>按千字符数</td></tr><tr><td>SHEET</td><td>8</td><td>按张</td></tr><tr><td>NUMBER</td><td>9</td><td>按个数</td></tr></tbody></table>
     * @param float $CashPrice <p>现金价格</p><p>单位：元</p>
     * @param float $PuPrice <p>pu价格</p><p>单位：pu</p>
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
        if (array_key_exists("BillingAttributeList",$param) and $param["BillingAttributeList"] !== null) {
            $this->BillingAttributeList = [];
            foreach ($param["BillingAttributeList"] as $key => $value){
                $obj = new BillingAttribute();
                $obj->deserialize($value);
                array_push($this->BillingAttributeList, $obj);
            }
        }

        if (array_key_exists("BillingUnit",$param) and $param["BillingUnit"] !== null) {
            $this->BillingUnit = $param["BillingUnit"];
        }

        if (array_key_exists("CashPrice",$param) and $param["CashPrice"] !== null) {
            $this->CashPrice = $param["CashPrice"];
        }

        if (array_key_exists("PuPrice",$param) and $param["PuPrice"] !== null) {
            $this->PuPrice = $param["PuPrice"];
        }
    }
}
