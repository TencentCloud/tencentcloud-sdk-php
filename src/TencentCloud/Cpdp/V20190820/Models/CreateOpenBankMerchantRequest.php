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
 * CreateOpenBankMerchant请求参数结构体
 *
 * @method string getOutMerchantId() 获取外部商户ID。
 * @method void setOutMerchantId(string $OutMerchantId) 设置外部商户ID。
 * @method string getChannelName() 获取渠道名称。
__TENPAY__: 商企付
 * @method void setChannelName(string $ChannelName) 设置渠道名称。
__TENPAY__: 商企付
 * @method string getOutMerchantName() 获取外部商户名称。
 * @method void setOutMerchantName(string $OutMerchantName) 设置外部商户名称。
 * @method string getExternalMerchantInfo() 获取第三方渠道商户信息。详情见附录-复杂类型。
 * @method void setExternalMerchantInfo(string $ExternalMerchantInfo) 设置第三方渠道商户信息。详情见附录-复杂类型。
 * @method string getOutMerchantShortName() 获取外部商户简称。
 * @method void setOutMerchantShortName(string $OutMerchantShortName) 设置外部商户简称。
 * @method string getOutMerchantDescription() 获取外部商户描述
 * @method void setOutMerchantDescription(string $OutMerchantDescription) 设置外部商户描述
 * @method string getEnvironment() 获取环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setEnvironment(string $Environment) 设置环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 */
class CreateOpenBankMerchantRequest extends AbstractModel
{
    /**
     * @var string 外部商户ID。
     */
    public $OutMerchantId;

    /**
     * @var string 渠道名称。
__TENPAY__: 商企付
     */
    public $ChannelName;

    /**
     * @var string 外部商户名称。
     */
    public $OutMerchantName;

    /**
     * @var string 第三方渠道商户信息。详情见附录-复杂类型。
     */
    public $ExternalMerchantInfo;

    /**
     * @var string 外部商户简称。
     */
    public $OutMerchantShortName;

    /**
     * @var string 外部商户描述
     */
    public $OutMerchantDescription;

    /**
     * @var string 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $Environment;

    /**
     * @param string $OutMerchantId 外部商户ID。
     * @param string $ChannelName 渠道名称。
__TENPAY__: 商企付
     * @param string $OutMerchantName 外部商户名称。
     * @param string $ExternalMerchantInfo 第三方渠道商户信息。详情见附录-复杂类型。
     * @param string $OutMerchantShortName 外部商户简称。
     * @param string $OutMerchantDescription 外部商户描述
     * @param string $Environment 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
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
        if (array_key_exists("OutMerchantId",$param) and $param["OutMerchantId"] !== null) {
            $this->OutMerchantId = $param["OutMerchantId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("OutMerchantName",$param) and $param["OutMerchantName"] !== null) {
            $this->OutMerchantName = $param["OutMerchantName"];
        }

        if (array_key_exists("ExternalMerchantInfo",$param) and $param["ExternalMerchantInfo"] !== null) {
            $this->ExternalMerchantInfo = $param["ExternalMerchantInfo"];
        }

        if (array_key_exists("OutMerchantShortName",$param) and $param["OutMerchantShortName"] !== null) {
            $this->OutMerchantShortName = $param["OutMerchantShortName"];
        }

        if (array_key_exists("OutMerchantDescription",$param) and $param["OutMerchantDescription"] !== null) {
            $this->OutMerchantDescription = $param["OutMerchantDescription"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
