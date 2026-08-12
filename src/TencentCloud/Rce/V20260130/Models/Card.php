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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 银行卡
 *
 * @method string getCardBin() 获取<p>发卡行识别码卡号前6位</p><p>参数格式：符合ISO 13616-1标准</p>
 * @method void setCardBin(string $CardBin) 设置<p>发卡行识别码卡号前6位</p><p>参数格式：符合ISO 13616-1标准</p>
 * @method string getLastFourDigits() 获取<p>发卡行识别码卡号后4位</p><p>参数格式：符合ISO 13616-1标准</p>
 * @method void setLastFourDigits(string $LastFourDigits) 设置<p>发卡行识别码卡号后4位</p><p>参数格式：符合ISO 13616-1标准</p>
 * @method string getCountry() 获取<p>发行国家</p>
 * @method void setCountry(string $Country) 设置<p>发行国家</p>
 * @method string getBank() 获取<p>发行银行</p>
 * @method void setBank(string $Bank) 设置<p>发行银行</p>
 * @method string getType() 获取<p>支付卡类型</p><p>枚举值：</p><ul><li>credit： 信用卡</li><li>debit： 借记卡</li><li>charge： 签账卡</li></ul>
 * @method void setType(string $Type) 设置<p>支付卡类型</p><p>枚举值：</p><ul><li>credit： 信用卡</li><li>debit： 借记卡</li><li>charge： 签账卡</li></ul>
 * @method string getBrand() 获取<p>支付卡品牌</p>
 * @method void setBrand(string $Brand) 设置<p>支付卡品牌</p>
 * @method string getLevel() 获取<p>支付卡等级</p>
 * @method void setLevel(string $Level) 设置<p>支付卡等级</p>
 * @method string getHolderName() 获取<p>持有者姓名</p>
 * @method void setHolderName(string $HolderName) 设置<p>持有者姓名</p>
 * @method string getExpireTime() 获取<p>过期日期</p><p>参数格式：YYYY-MM-DD</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>过期日期</p><p>参数格式：YYYY-MM-DD</p>
 */
class Card extends AbstractModel
{
    /**
     * @var string <p>发卡行识别码卡号前6位</p><p>参数格式：符合ISO 13616-1标准</p>
     */
    public $CardBin;

    /**
     * @var string <p>发卡行识别码卡号后4位</p><p>参数格式：符合ISO 13616-1标准</p>
     */
    public $LastFourDigits;

    /**
     * @var string <p>发行国家</p>
     */
    public $Country;

    /**
     * @var string <p>发行银行</p>
     */
    public $Bank;

    /**
     * @var string <p>支付卡类型</p><p>枚举值：</p><ul><li>credit： 信用卡</li><li>debit： 借记卡</li><li>charge： 签账卡</li></ul>
     */
    public $Type;

    /**
     * @var string <p>支付卡品牌</p>
     */
    public $Brand;

    /**
     * @var string <p>支付卡等级</p>
     */
    public $Level;

    /**
     * @var string <p>持有者姓名</p>
     */
    public $HolderName;

    /**
     * @var string <p>过期日期</p><p>参数格式：YYYY-MM-DD</p>
     */
    public $ExpireTime;

    /**
     * @param string $CardBin <p>发卡行识别码卡号前6位</p><p>参数格式：符合ISO 13616-1标准</p>
     * @param string $LastFourDigits <p>发卡行识别码卡号后4位</p><p>参数格式：符合ISO 13616-1标准</p>
     * @param string $Country <p>发行国家</p>
     * @param string $Bank <p>发行银行</p>
     * @param string $Type <p>支付卡类型</p><p>枚举值：</p><ul><li>credit： 信用卡</li><li>debit： 借记卡</li><li>charge： 签账卡</li></ul>
     * @param string $Brand <p>支付卡品牌</p>
     * @param string $Level <p>支付卡等级</p>
     * @param string $HolderName <p>持有者姓名</p>
     * @param string $ExpireTime <p>过期日期</p><p>参数格式：YYYY-MM-DD</p>
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
        if (array_key_exists("CardBin",$param) and $param["CardBin"] !== null) {
            $this->CardBin = $param["CardBin"];
        }

        if (array_key_exists("LastFourDigits",$param) and $param["LastFourDigits"] !== null) {
            $this->LastFourDigits = $param["LastFourDigits"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Bank",$param) and $param["Bank"] !== null) {
            $this->Bank = $param["Bank"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Brand",$param) and $param["Brand"] !== null) {
            $this->Brand = $param["Brand"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("HolderName",$param) and $param["HolderName"] !== null) {
            $this->HolderName = $param["HolderName"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
