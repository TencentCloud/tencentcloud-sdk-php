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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenKafkaConsumer请求参数结构体
 *
 * @method string getFromTopicId() 获取日志主题ID
 * @method void setFromTopicId(string $FromTopicId) 设置日志主题ID
 * @method integer getCompression() 获取压缩方式[0:NONE；2:SNAPPY；3:LZ4]
 * @method void setCompression(integer $Compression) 设置压缩方式[0:NONE；2:SNAPPY；3:LZ4]
 * @method KafkaConsumerContent getConsumerContent() 获取kafka协议消费数据格式
 * @method void setConsumerContent(KafkaConsumerContent $ConsumerContent) 设置kafka协议消费数据格式
 */
class OpenKafkaConsumerRequest extends AbstractModel
{
    /**
     * @var string 日志主题ID
     */
    public $FromTopicId;

    /**
     * @var integer 压缩方式[0:NONE；2:SNAPPY；3:LZ4]
     */
    public $Compression;

    /**
     * @var KafkaConsumerContent kafka协议消费数据格式
     */
    public $ConsumerContent;

    /**
     * @param string $FromTopicId 日志主题ID
     * @param integer $Compression 压缩方式[0:NONE；2:SNAPPY；3:LZ4]
     * @param KafkaConsumerContent $ConsumerContent kafka协议消费数据格式
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
        if (array_key_exists("FromTopicId",$param) and $param["FromTopicId"] !== null) {
            $this->FromTopicId = $param["FromTopicId"];
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = $param["Compression"];
        }

        if (array_key_exists("ConsumerContent",$param) and $param["ConsumerContent"] !== null) {
            $this->ConsumerContent = new KafkaConsumerContent();
            $this->ConsumerContent->deserialize($param["ConsumerContent"]);
        }
    }
}
