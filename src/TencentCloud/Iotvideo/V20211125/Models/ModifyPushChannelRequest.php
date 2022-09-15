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
namespace TencentCloud\Iotvideo\V20211125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPushChannel请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getType() 获取推送类型。ckafka：消息队列；forward：http/https推送
 * @method void setType(string $Type) 设置推送类型。ckafka：消息队列；forward：http/https推送
 * @method string getForwardAddress() 获取第三方推送地址
 * @method void setForwardAddress(string $ForwardAddress) 设置第三方推送地址
 * @method string getForwardKey() 获取第三方推送密钥，不填写则不生成签名。
 * @method void setForwardKey(string $ForwardKey) 设置第三方推送密钥，不填写则不生成签名。
 * @method string getCKafkaRegion() 获取ckafka地域
 * @method void setCKafkaRegion(string $CKafkaRegion) 设置ckafka地域
 * @method string getCKafkaInstance() 获取ckafka实例
 * @method void setCKafkaInstance(string $CKafkaInstance) 设置ckafka实例
 * @method string getCKafkaTopic() 获取ckafka订阅主题
 * @method void setCKafkaTopic(string $CKafkaTopic) 设置ckafka订阅主题
 */
class ModifyPushChannelRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 推送类型。ckafka：消息队列；forward：http/https推送
     */
    public $Type;

    /**
     * @var string 第三方推送地址
     */
    public $ForwardAddress;

    /**
     * @var string 第三方推送密钥，不填写则不生成签名。
     */
    public $ForwardKey;

    /**
     * @var string ckafka地域
     */
    public $CKafkaRegion;

    /**
     * @var string ckafka实例
     */
    public $CKafkaInstance;

    /**
     * @var string ckafka订阅主题
     */
    public $CKafkaTopic;

    /**
     * @param string $ProductId 产品ID
     * @param string $Type 推送类型。ckafka：消息队列；forward：http/https推送
     * @param string $ForwardAddress 第三方推送地址
     * @param string $ForwardKey 第三方推送密钥，不填写则不生成签名。
     * @param string $CKafkaRegion ckafka地域
     * @param string $CKafkaInstance ckafka实例
     * @param string $CKafkaTopic ckafka订阅主题
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ForwardAddress",$param) and $param["ForwardAddress"] !== null) {
            $this->ForwardAddress = $param["ForwardAddress"];
        }

        if (array_key_exists("ForwardKey",$param) and $param["ForwardKey"] !== null) {
            $this->ForwardKey = $param["ForwardKey"];
        }

        if (array_key_exists("CKafkaRegion",$param) and $param["CKafkaRegion"] !== null) {
            $this->CKafkaRegion = $param["CKafkaRegion"];
        }

        if (array_key_exists("CKafkaInstance",$param) and $param["CKafkaInstance"] !== null) {
            $this->CKafkaInstance = $param["CKafkaInstance"];
        }

        if (array_key_exists("CKafkaTopic",$param) and $param["CKafkaTopic"] !== null) {
            $this->CKafkaTopic = $param["CKafkaTopic"];
        }
    }
}
