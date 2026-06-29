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
 * ToolBilling
 *
 * @method BasicBilling getBasicBilling() 获取<p>基础计费信息</p>
 * @method void setBasicBilling(BasicBilling $BasicBilling) 设置<p>基础计费信息</p>
 * @method integer getBillingType() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>BILLING_TYPE_FREE</td><td>0</td><td>免费</td></tr><tr><td>BILLING_TYPE_LIMITED_FREE</td><td>1</td><td>限时免费</td></tr><tr><td>BILLING_TYPE_OFFICIAL_PAID</td><td>2</td><td>官方收费</td></tr><tr><td>BILLING_TYPE_OFFICIAL_PAID_OLD_FREE</td><td>3</td><td>官方收费（新/升级用户收费，存量老用户限时免费）</td></tr></tbody></table>
 * @method void setBillingType(integer $BillingType) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>BILLING_TYPE_FREE</td><td>0</td><td>免费</td></tr><tr><td>BILLING_TYPE_LIMITED_FREE</td><td>1</td><td>限时免费</td></tr><tr><td>BILLING_TYPE_OFFICIAL_PAID</td><td>2</td><td>官方收费</td></tr><tr><td>BILLING_TYPE_OFFICIAL_PAID_OLD_FREE</td><td>3</td><td>官方收费（新/升级用户收费，存量老用户限时免费）</td></tr></tbody></table>
 * @method ComplexBilling getComplexBilling() 获取<p>复合类型计费信息</p>
 * @method void setComplexBilling(ComplexBilling $ComplexBilling) 设置<p>复合类型计费信息</p>
 * @method DuplexBilling getDuplexBilling() 获取<p>双向计费信息</p>
 * @method void setDuplexBilling(DuplexBilling $DuplexBilling) 设置<p>双向计费信息</p>
 */
class ToolBilling extends AbstractModel
{
    /**
     * @var BasicBilling <p>基础计费信息</p>
     */
    public $BasicBilling;

    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>BILLING_TYPE_FREE</td><td>0</td><td>免费</td></tr><tr><td>BILLING_TYPE_LIMITED_FREE</td><td>1</td><td>限时免费</td></tr><tr><td>BILLING_TYPE_OFFICIAL_PAID</td><td>2</td><td>官方收费</td></tr><tr><td>BILLING_TYPE_OFFICIAL_PAID_OLD_FREE</td><td>3</td><td>官方收费（新/升级用户收费，存量老用户限时免费）</td></tr></tbody></table>
     */
    public $BillingType;

    /**
     * @var ComplexBilling <p>复合类型计费信息</p>
     */
    public $ComplexBilling;

    /**
     * @var DuplexBilling <p>双向计费信息</p>
     */
    public $DuplexBilling;

    /**
     * @param BasicBilling $BasicBilling <p>基础计费信息</p>
     * @param integer $BillingType <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>BILLING_TYPE_FREE</td><td>0</td><td>免费</td></tr><tr><td>BILLING_TYPE_LIMITED_FREE</td><td>1</td><td>限时免费</td></tr><tr><td>BILLING_TYPE_OFFICIAL_PAID</td><td>2</td><td>官方收费</td></tr><tr><td>BILLING_TYPE_OFFICIAL_PAID_OLD_FREE</td><td>3</td><td>官方收费（新/升级用户收费，存量老用户限时免费）</td></tr></tbody></table>
     * @param ComplexBilling $ComplexBilling <p>复合类型计费信息</p>
     * @param DuplexBilling $DuplexBilling <p>双向计费信息</p>
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
        if (array_key_exists("BasicBilling",$param) and $param["BasicBilling"] !== null) {
            $this->BasicBilling = new BasicBilling();
            $this->BasicBilling->deserialize($param["BasicBilling"]);
        }

        if (array_key_exists("BillingType",$param) and $param["BillingType"] !== null) {
            $this->BillingType = $param["BillingType"];
        }

        if (array_key_exists("ComplexBilling",$param) and $param["ComplexBilling"] !== null) {
            $this->ComplexBilling = new ComplexBilling();
            $this->ComplexBilling->deserialize($param["ComplexBilling"]);
        }

        if (array_key_exists("DuplexBilling",$param) and $param["DuplexBilling"] !== null) {
            $this->DuplexBilling = new DuplexBilling();
            $this->DuplexBilling->deserialize($param["DuplexBilling"]);
        }
    }
}
