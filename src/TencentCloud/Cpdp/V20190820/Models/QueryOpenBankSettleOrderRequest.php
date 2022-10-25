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
 * QueryOpenBankSettleOrder请求参数结构体
 *
 * @method string getChannelMerchantId() 获取渠道商户号
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户号
 * @method string getChannelSubMerchantId() 获取渠道子商户号
 * @method void setChannelSubMerchantId(string $ChannelSubMerchantId) 设置渠道子商户号
 * @method string getOutSettleId() 获取外部结算流水号，与渠道结算流水号二选一
 * @method void setOutSettleId(string $OutSettleId) 设置外部结算流水号，与渠道结算流水号二选一
 * @method string getChannelSettleId() 获取渠道结算流水号，与外部结算流水号二选一
 * @method void setChannelSettleId(string $ChannelSettleId) 设置渠道结算流水号，与外部结算流水号二选一
 * @method string getEnvironment() 获取接入环境。沙箱环境填 sandbox。缺省默认调用生产环境
 * @method void setEnvironment(string $Environment) 设置接入环境。沙箱环境填 sandbox。缺省默认调用生产环境
 */
class QueryOpenBankSettleOrderRequest extends AbstractModel
{
    /**
     * @var string 渠道商户号
     */
    public $ChannelMerchantId;

    /**
     * @var string 渠道子商户号
     */
    public $ChannelSubMerchantId;

    /**
     * @var string 外部结算流水号，与渠道结算流水号二选一
     */
    public $OutSettleId;

    /**
     * @var string 渠道结算流水号，与外部结算流水号二选一
     */
    public $ChannelSettleId;

    /**
     * @var string 接入环境。沙箱环境填 sandbox。缺省默认调用生产环境
     */
    public $Environment;

    /**
     * @param string $ChannelMerchantId 渠道商户号
     * @param string $ChannelSubMerchantId 渠道子商户号
     * @param string $OutSettleId 外部结算流水号，与渠道结算流水号二选一
     * @param string $ChannelSettleId 渠道结算流水号，与外部结算流水号二选一
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

        if (array_key_exists("OutSettleId",$param) and $param["OutSettleId"] !== null) {
            $this->OutSettleId = $param["OutSettleId"];
        }

        if (array_key_exists("ChannelSettleId",$param) and $param["ChannelSettleId"] !== null) {
            $this->ChannelSettleId = $param["ChannelSettleId"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
