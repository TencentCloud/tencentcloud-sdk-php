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
 * 数字钱包
 *
 * @method string getWalletType() 获取<p>钱包类型</p><p>枚举值：</p><ul><li>crypto： 加密货币</li><li>digital： 数字货币</li><li>fiat： 法币</li></ul>
 * @method void setWalletType(string $WalletType) 设置<p>钱包类型</p><p>枚举值：</p><ul><li>crypto： 加密货币</li><li>digital： 数字货币</li><li>fiat： 法币</li></ul>
 * @method string getWalletAddress() 获取<p>钱包地址，通常为钱包的唯一标识</p>
 * @method void setWalletAddress(string $WalletAddress) 设置<p>钱包地址，通常为钱包的唯一标识</p>
 * @method string getWalletHolderName() 获取<p>钱包归属人姓名</p>
 * @method void setWalletHolderName(string $WalletHolderName) 设置<p>钱包归属人姓名</p>
 * @method string getWalletProvider() 获取<p>钱包供应商，wechat、alipay、paypal等</p>
 * @method void setWalletProvider(string $WalletProvider) 设置<p>钱包供应商，wechat、alipay、paypal等</p>
 */
class Wallet extends AbstractModel
{
    /**
     * @var string <p>钱包类型</p><p>枚举值：</p><ul><li>crypto： 加密货币</li><li>digital： 数字货币</li><li>fiat： 法币</li></ul>
     */
    public $WalletType;

    /**
     * @var string <p>钱包地址，通常为钱包的唯一标识</p>
     */
    public $WalletAddress;

    /**
     * @var string <p>钱包归属人姓名</p>
     */
    public $WalletHolderName;

    /**
     * @var string <p>钱包供应商，wechat、alipay、paypal等</p>
     */
    public $WalletProvider;

    /**
     * @param string $WalletType <p>钱包类型</p><p>枚举值：</p><ul><li>crypto： 加密货币</li><li>digital： 数字货币</li><li>fiat： 法币</li></ul>
     * @param string $WalletAddress <p>钱包地址，通常为钱包的唯一标识</p>
     * @param string $WalletHolderName <p>钱包归属人姓名</p>
     * @param string $WalletProvider <p>钱包供应商，wechat、alipay、paypal等</p>
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
        if (array_key_exists("WalletType",$param) and $param["WalletType"] !== null) {
            $this->WalletType = $param["WalletType"];
        }

        if (array_key_exists("WalletAddress",$param) and $param["WalletAddress"] !== null) {
            $this->WalletAddress = $param["WalletAddress"];
        }

        if (array_key_exists("WalletHolderName",$param) and $param["WalletHolderName"] !== null) {
            $this->WalletHolderName = $param["WalletHolderName"];
        }

        if (array_key_exists("WalletProvider",$param) and $param["WalletProvider"] !== null) {
            $this->WalletProvider = $param["WalletProvider"];
        }
    }
}
