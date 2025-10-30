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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 在线消费者情况
 *
 * @method string getClientId() 获取消费者实例ID
 * @method void setClientId(string $ClientId) 设置消费者实例ID
 * @method string getClientAddr() 获取消费者实例的地址和端口
 * @method void setClientAddr(string $ClientAddr) 设置消费者实例的地址和端口
 * @method string getLanguage() 获取消费者应用的语言版本
 * @method void setLanguage(string $Language) 设置消费者应用的语言版本
 * @method integer getAccumulative() 获取消息堆积量
 * @method void setAccumulative(integer $Accumulative) 设置消息堆积量
 * @method string getVersion() 获取消费端版本
 * @method void setVersion(string $Version) 设置消费端版本
 */
class RocketMQConsumerConnection extends AbstractModel
{
    /**
     * @var string 消费者实例ID
     */
    public $ClientId;

    /**
     * @var string 消费者实例的地址和端口
     */
    public $ClientAddr;

    /**
     * @var string 消费者应用的语言版本
     */
    public $Language;

    /**
     * @var integer 消息堆积量
     */
    public $Accumulative;

    /**
     * @var string 消费端版本
     */
    public $Version;

    /**
     * @param string $ClientId 消费者实例ID
     * @param string $ClientAddr 消费者实例的地址和端口
     * @param string $Language 消费者应用的语言版本
     * @param integer $Accumulative 消息堆积量
     * @param string $Version 消费端版本
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
        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("ClientAddr",$param) and $param["ClientAddr"] !== null) {
            $this->ClientAddr = $param["ClientAddr"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Accumulative",$param) and $param["Accumulative"] !== null) {
            $this->Accumulative = $param["Accumulative"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
