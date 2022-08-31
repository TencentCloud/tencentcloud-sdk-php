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
 * QueryOpenBankSubMerchantSignOnline请求参数结构体
 *
 * @method string getChannelMerchantId() 获取渠道商户号。外部平台接入云企付平台下发。必填。
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户号。外部平台接入云企付平台下发。必填。
 * @method string getChannelName() 获取渠道名称。详见附录-枚举类型-ChannelName。
 * @method void setChannelName(string $ChannelName) 设置渠道名称。详见附录-枚举类型-ChannelName。
 * @method string getOutSubMerchantId() 获取外部子商户ID。
 * @method void setOutSubMerchantId(string $OutSubMerchantId) 设置外部子商户ID。
 * @method string getChannelSubMerchantId() 获取渠道子商户ID。
 * @method void setChannelSubMerchantId(string $ChannelSubMerchantId) 设置渠道子商户ID。
 */
class QueryOpenBankSubMerchantSignOnlineRequest extends AbstractModel
{
    /**
     * @var string 渠道商户号。外部平台接入云企付平台下发。必填。
     */
    public $ChannelMerchantId;

    /**
     * @var string 渠道名称。详见附录-枚举类型-ChannelName。
     */
    public $ChannelName;

    /**
     * @var string 外部子商户ID。
     */
    public $OutSubMerchantId;

    /**
     * @var string 渠道子商户ID。
     */
    public $ChannelSubMerchantId;

    /**
     * @param string $ChannelMerchantId 渠道商户号。外部平台接入云企付平台下发。必填。
     * @param string $ChannelName 渠道名称。详见附录-枚举类型-ChannelName。
     * @param string $OutSubMerchantId 外部子商户ID。
     * @param string $ChannelSubMerchantId 渠道子商户ID。
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

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("OutSubMerchantId",$param) and $param["OutSubMerchantId"] !== null) {
            $this->OutSubMerchantId = $param["OutSubMerchantId"];
        }

        if (array_key_exists("ChannelSubMerchantId",$param) and $param["ChannelSubMerchantId"] !== null) {
            $this->ChannelSubMerchantId = $param["ChannelSubMerchantId"];
        }
    }
}
