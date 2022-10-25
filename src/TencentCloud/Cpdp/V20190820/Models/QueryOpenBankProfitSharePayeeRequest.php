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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryOpenBankProfitSharePayee请求参数结构体
 *
 * @method string getChannelMerchantId() 获取渠道商户号。代理商/集团ID
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户号。代理商/集团ID
 * @method string getChannelSubMerchantId() 获取渠道子商户号。商户ID
 * @method void setChannelSubMerchantId(string $ChannelSubMerchantId) 设置渠道子商户号。商户ID
 * @method string getAccountId() 获取分账方绑定添加返回的AccountId，账户号和账户ID选其一
 * @method void setAccountId(string $AccountId) 设置分账方绑定添加返回的AccountId，账户号和账户ID选其一
 * @method string getAccountNo() 获取银行账户号要与绑定收款方时保持一致，账户号AccountNo和账户AccoutId选其一
 * @method void setAccountNo(string $AccountNo) 设置银行账户号要与绑定收款方时保持一致，账户号AccountNo和账户AccoutId选其一
 * @method string getCurrency() 获取使用账户号时必选
 * @method void setCurrency(string $Currency) 设置使用账户号时必选
 * @method string getEnvironment() 获取接入环境。沙箱环境填 sandbox。缺省默认调用生产环境
 * @method void setEnvironment(string $Environment) 设置接入环境。沙箱环境填 sandbox。缺省默认调用生产环境
 */
class QueryOpenBankProfitSharePayeeRequest extends AbstractModel
{
    /**
     * @var string 渠道商户号。代理商/集团ID
     */
    public $ChannelMerchantId;

    /**
     * @var string 渠道子商户号。商户ID
     */
    public $ChannelSubMerchantId;

    /**
     * @var string 分账方绑定添加返回的AccountId，账户号和账户ID选其一
     */
    public $AccountId;

    /**
     * @var string 银行账户号要与绑定收款方时保持一致，账户号AccountNo和账户AccoutId选其一
     */
    public $AccountNo;

    /**
     * @var string 使用账户号时必选
     */
    public $Currency;

    /**
     * @var string 接入环境。沙箱环境填 sandbox。缺省默认调用生产环境
     */
    public $Environment;

    /**
     * @param string $ChannelMerchantId 渠道商户号。代理商/集团ID
     * @param string $ChannelSubMerchantId 渠道子商户号。商户ID
     * @param string $AccountId 分账方绑定添加返回的AccountId，账户号和账户ID选其一
     * @param string $AccountNo 银行账户号要与绑定收款方时保持一致，账户号AccountNo和账户AccoutId选其一
     * @param string $Currency 使用账户号时必选
     * @param string $Environment 接入环境。沙箱环境填 sandbox。缺省默认调用生产环境
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
        if (array_key_exists("ChannelMerchantId",$param) and $param["ChannelMerchantId"] !== null) {
            $this->ChannelMerchantId = $param["ChannelMerchantId"];
        }

        if (array_key_exists("ChannelSubMerchantId",$param) and $param["ChannelSubMerchantId"] !== null) {
            $this->ChannelSubMerchantId = $param["ChannelSubMerchantId"];
        }

        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("AccountNo",$param) and $param["AccountNo"] !== null) {
            $this->AccountNo = $param["AccountNo"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
