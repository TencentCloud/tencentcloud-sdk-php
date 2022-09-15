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
 * CreateConsumer请求参数结构体
 *
 * @method string getTopicId() 获取投递任务绑定的日志主题 ID
 * @method void setTopicId(string $TopicId) 设置投递任务绑定的日志主题 ID
 * @method boolean getNeedContent() 获取是否投递日志的元数据信息，默认为 true
 * @method void setNeedContent(boolean $NeedContent) 设置是否投递日志的元数据信息，默认为 true
 * @method ConsumerContent getContent() 获取如果需要投递元数据信息，元数据信息的描述
 * @method void setContent(ConsumerContent $Content) 设置如果需要投递元数据信息，元数据信息的描述
 * @method Ckafka getCkafka() 获取CKafka的描述
 * @method void setCkafka(Ckafka $Ckafka) 设置CKafka的描述
 * @method integer getCompression() 获取投递时压缩方式，取值0，2，3。[0:NONE；2:SNAPPY；3:LZ4]
 * @method void setCompression(integer $Compression) 设置投递时压缩方式，取值0，2，3。[0:NONE；2:SNAPPY；3:LZ4]
 */
class CreateConsumerRequest extends AbstractModel
{
    /**
     * @var string 投递任务绑定的日志主题 ID
     */
    public $TopicId;

    /**
     * @var boolean 是否投递日志的元数据信息，默认为 true
     */
    public $NeedContent;

    /**
     * @var ConsumerContent 如果需要投递元数据信息，元数据信息的描述
     */
    public $Content;

    /**
     * @var Ckafka CKafka的描述
     */
    public $Ckafka;

    /**
     * @var integer 投递时压缩方式，取值0，2，3。[0:NONE；2:SNAPPY；3:LZ4]
     */
    public $Compression;

    /**
     * @param string $TopicId 投递任务绑定的日志主题 ID
     * @param boolean $NeedContent 是否投递日志的元数据信息，默认为 true
     * @param ConsumerContent $Content 如果需要投递元数据信息，元数据信息的描述
     * @param Ckafka $Ckafka CKafka的描述
     * @param integer $Compression 投递时压缩方式，取值0，2，3。[0:NONE；2:SNAPPY；3:LZ4]
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("NeedContent",$param) and $param["NeedContent"] !== null) {
            $this->NeedContent = $param["NeedContent"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new ConsumerContent();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("Ckafka",$param) and $param["Ckafka"] !== null) {
            $this->Ckafka = new Ckafka();
            $this->Ckafka->deserialize($param["Ckafka"]);
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = $param["Compression"];
        }
    }
}
