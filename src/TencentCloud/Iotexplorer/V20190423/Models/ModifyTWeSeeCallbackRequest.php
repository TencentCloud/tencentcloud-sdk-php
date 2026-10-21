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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTWeSeeCallback请求参数结构体
 *
 * @method string getCallbackId() 获取<p>回调目标 ID</p>
 * @method void setCallbackId(string $CallbackId) 设置<p>回调目标 ID</p>
 * @method string getType() 获取<p>回调类型</p><p>枚举值：</p><ul><li>none： 不回调</li><li>http： HTTP 回调</li><li>ckafka： 投递 CKafka Topic</li></ul>
 * @method void setType(string $Type) 设置<p>回调类型</p><p>枚举值：</p><ul><li>none： 不回调</li><li>http： HTTP 回调</li><li>ckafka： 投递 CKafka Topic</li></ul>
 * @method string getCallbackUrl() 获取<p>回调 URL，需要可访问并通过 Echo 校验</p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>回调 URL，需要可访问并通过 Echo 校验</p>
 * @method string getCallbackToken() 获取<p>回调签名 token，最大长度 128</p>
 * @method void setCallbackToken(string $CallbackToken) 设置<p>回调签名 token，最大长度 128</p>
 * @method SeeCallbackCKafkaConfig getCallbackCKafka() 获取<p>回调 CKafka 配置</p>
 * @method void setCallbackCKafka(SeeCallbackCKafkaConfig $CallbackCKafka) 设置<p>回调 CKafka 配置</p>
 */
class ModifyTWeSeeCallbackRequest extends AbstractModel
{
    /**
     * @var string <p>回调目标 ID</p>
     */
    public $CallbackId;

    /**
     * @var string <p>回调类型</p><p>枚举值：</p><ul><li>none： 不回调</li><li>http： HTTP 回调</li><li>ckafka： 投递 CKafka Topic</li></ul>
     */
    public $Type;

    /**
     * @var string <p>回调 URL，需要可访问并通过 Echo 校验</p>
     */
    public $CallbackUrl;

    /**
     * @var string <p>回调签名 token，最大长度 128</p>
     */
    public $CallbackToken;

    /**
     * @var SeeCallbackCKafkaConfig <p>回调 CKafka 配置</p>
     */
    public $CallbackCKafka;

    /**
     * @param string $CallbackId <p>回调目标 ID</p>
     * @param string $Type <p>回调类型</p><p>枚举值：</p><ul><li>none： 不回调</li><li>http： HTTP 回调</li><li>ckafka： 投递 CKafka Topic</li></ul>
     * @param string $CallbackUrl <p>回调 URL，需要可访问并通过 Echo 校验</p>
     * @param string $CallbackToken <p>回调签名 token，最大长度 128</p>
     * @param SeeCallbackCKafkaConfig $CallbackCKafka <p>回调 CKafka 配置</p>
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
        if (array_key_exists("CallbackId",$param) and $param["CallbackId"] !== null) {
            $this->CallbackId = $param["CallbackId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("CallbackToken",$param) and $param["CallbackToken"] !== null) {
            $this->CallbackToken = $param["CallbackToken"];
        }

        if (array_key_exists("CallbackCKafka",$param) and $param["CallbackCKafka"] !== null) {
            $this->CallbackCKafka = new SeeCallbackCKafkaConfig();
            $this->CallbackCKafka->deserialize($param["CallbackCKafka"]);
        }
    }
}
