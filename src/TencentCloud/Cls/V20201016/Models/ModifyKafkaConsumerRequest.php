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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyKafkaConsumer请求参数结构体
 *
 * @method string getFromTopicId() 获取<p>日志主题Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a> 获取日志主题Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/56456">创建日志主题</a> 获取日志主题Id。</li></ul>
 * @method void setFromTopicId(string $FromTopicId) 设置<p>日志主题Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a> 获取日志主题Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/56456">创建日志主题</a> 获取日志主题Id。</li></ul>
 * @method integer getCompression() 获取<p>压缩方式。0：不压缩；2：使用Snappy压缩；3：使用LZ4压缩</p>
 * @method void setCompression(integer $Compression) 设置<p>压缩方式。0：不压缩；2：使用Snappy压缩；3：使用LZ4压缩</p>
 * @method KafkaConsumerContent getConsumerContent() 获取<p>kafka协议消费数据格式</p>
 * @method void setConsumerContent(KafkaConsumerContent $ConsumerContent) 设置<p>kafka协议消费数据格式</p>
 * @method integer getHasServicesLog() 获取<p>是否开启投递服务日志。1：关闭，2：开启。</p>
 * @method void setHasServicesLog(integer $HasServicesLog) 设置<p>是否开启投递服务日志。1：关闭，2：开启。</p>
 * @method integer getScopeType() 获取<p>消费范围类型，0:最新，1:历史+最新</p>
 * @method void setScopeType(integer $ScopeType) 设置<p>消费范围类型，0:最新，1:历史+最新</p>
 */
class ModifyKafkaConsumerRequest extends AbstractModel
{
    /**
     * @var string <p>日志主题Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a> 获取日志主题Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/56456">创建日志主题</a> 获取日志主题Id。</li></ul>
     */
    public $FromTopicId;

    /**
     * @var integer <p>压缩方式。0：不压缩；2：使用Snappy压缩；3：使用LZ4压缩</p>
     */
    public $Compression;

    /**
     * @var KafkaConsumerContent <p>kafka协议消费数据格式</p>
     */
    public $ConsumerContent;

    /**
     * @var integer <p>是否开启投递服务日志。1：关闭，2：开启。</p>
     */
    public $HasServicesLog;

    /**
     * @var integer <p>消费范围类型，0:最新，1:历史+最新</p>
     */
    public $ScopeType;

    /**
     * @param string $FromTopicId <p>日志主题Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a> 获取日志主题Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/56456">创建日志主题</a> 获取日志主题Id。</li></ul>
     * @param integer $Compression <p>压缩方式。0：不压缩；2：使用Snappy压缩；3：使用LZ4压缩</p>
     * @param KafkaConsumerContent $ConsumerContent <p>kafka协议消费数据格式</p>
     * @param integer $HasServicesLog <p>是否开启投递服务日志。1：关闭，2：开启。</p>
     * @param integer $ScopeType <p>消费范围类型，0:最新，1:历史+最新</p>
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

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }

        if (array_key_exists("ScopeType",$param) and $param["ScopeType"] !== null) {
            $this->ScopeType = $param["ScopeType"];
        }
    }
}
