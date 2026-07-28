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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWillMessage返回参数结构体
 *
 * @method string getTopic() 获取<p>保留消息Topic</p>
 * @method void setTopic(string $Topic) 设置<p>保留消息Topic</p>
 * @method integer getQos() 获取<p>消息服务质量</p>
 * @method void setQos(integer $Qos) 设置<p>消息服务质量</p>
 * @method boolean getRetained() 获取<p>是否保留消息</p>
 * @method void setRetained(boolean $Retained) 设置<p>是否保留消息</p>
 * @method string getPayload() 获取<p>消息负载(Base64编码)</p>
 * @method void setPayload(string $Payload) 设置<p>消息负载(Base64编码)</p>
 * @method integer getCreateTime() 获取<p>创建时间，毫秒级时间戳 。</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间，毫秒级时间戳 。</p>
 * @method integer getUpdateTime() 获取<p>更新时间，毫秒级时间戳 。</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间，毫秒级时间戳 。</p>
 * @method integer getWillDelayInterval() 获取<p>遗嘱消息延迟时间，单位秒</p>
 * @method void setWillDelayInterval(integer $WillDelayInterval) 设置<p>遗嘱消息延迟时间，单位秒</p>
 * @method string getContentType() 获取<p>响应内容类型</p>
 * @method void setContentType(string $ContentType) 设置<p>响应内容类型</p>
 * @method string getResponseTopic() 获取<p>响应主题</p>
 * @method void setResponseTopic(string $ResponseTopic) 设置<p>响应主题</p>
 * @method string getCorrelationData() 获取<p>关联数据（Base64编码）</p>
 * @method void setCorrelationData(string $CorrelationData) 设置<p>关联数据（Base64编码）</p>
 * @method integer getMessageExpiryInterval() 获取<p>消息过期时间，单位秒</p>
 * @method void setMessageExpiryInterval(integer $MessageExpiryInterval) 设置<p>消息过期时间，单位秒</p>
 * @method integer getPayloadFormatIndicator() 获取<p>负载格式指示器 1:UTF-8文本</p>
 * @method void setPayloadFormatIndicator(integer $PayloadFormatIndicator) 设置<p>负载格式指示器 1:UTF-8文本</p>
 * @method array getUserProperties() 获取<p>用户属性</p>
 * @method void setUserProperties(array $UserProperties) 设置<p>用户属性</p>
 * @method integer getPublishAfter() 获取<p>遗嘱消息发布时间</p>
 * @method void setPublishAfter(integer $PublishAfter) 设置<p>遗嘱消息发布时间</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeWillMessageResponse extends AbstractModel
{
    /**
     * @var string <p>保留消息Topic</p>
     */
    public $Topic;

    /**
     * @var integer <p>消息服务质量</p>
     */
    public $Qos;

    /**
     * @var boolean <p>是否保留消息</p>
     */
    public $Retained;

    /**
     * @var string <p>消息负载(Base64编码)</p>
     */
    public $Payload;

    /**
     * @var integer <p>创建时间，毫秒级时间戳 。</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间，毫秒级时间戳 。</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>遗嘱消息延迟时间，单位秒</p>
     */
    public $WillDelayInterval;

    /**
     * @var string <p>响应内容类型</p>
     */
    public $ContentType;

    /**
     * @var string <p>响应主题</p>
     */
    public $ResponseTopic;

    /**
     * @var string <p>关联数据（Base64编码）</p>
     */
    public $CorrelationData;

    /**
     * @var integer <p>消息过期时间，单位秒</p>
     */
    public $MessageExpiryInterval;

    /**
     * @var integer <p>负载格式指示器 1:UTF-8文本</p>
     */
    public $PayloadFormatIndicator;

    /**
     * @var array <p>用户属性</p>
     */
    public $UserProperties;

    /**
     * @var integer <p>遗嘱消息发布时间</p>
     */
    public $PublishAfter;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Topic <p>保留消息Topic</p>
     * @param integer $Qos <p>消息服务质量</p>
     * @param boolean $Retained <p>是否保留消息</p>
     * @param string $Payload <p>消息负载(Base64编码)</p>
     * @param integer $CreateTime <p>创建时间，毫秒级时间戳 。</p>
     * @param integer $UpdateTime <p>更新时间，毫秒级时间戳 。</p>
     * @param integer $WillDelayInterval <p>遗嘱消息延迟时间，单位秒</p>
     * @param string $ContentType <p>响应内容类型</p>
     * @param string $ResponseTopic <p>响应主题</p>
     * @param string $CorrelationData <p>关联数据（Base64编码）</p>
     * @param integer $MessageExpiryInterval <p>消息过期时间，单位秒</p>
     * @param integer $PayloadFormatIndicator <p>负载格式指示器 1:UTF-8文本</p>
     * @param array $UserProperties <p>用户属性</p>
     * @param integer $PublishAfter <p>遗嘱消息发布时间</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }

        if (array_key_exists("Retained",$param) and $param["Retained"] !== null) {
            $this->Retained = $param["Retained"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("WillDelayInterval",$param) and $param["WillDelayInterval"] !== null) {
            $this->WillDelayInterval = $param["WillDelayInterval"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("ResponseTopic",$param) and $param["ResponseTopic"] !== null) {
            $this->ResponseTopic = $param["ResponseTopic"];
        }

        if (array_key_exists("CorrelationData",$param) and $param["CorrelationData"] !== null) {
            $this->CorrelationData = $param["CorrelationData"];
        }

        if (array_key_exists("MessageExpiryInterval",$param) and $param["MessageExpiryInterval"] !== null) {
            $this->MessageExpiryInterval = $param["MessageExpiryInterval"];
        }

        if (array_key_exists("PayloadFormatIndicator",$param) and $param["PayloadFormatIndicator"] !== null) {
            $this->PayloadFormatIndicator = $param["PayloadFormatIndicator"];
        }

        if (array_key_exists("UserProperties",$param) and $param["UserProperties"] !== null) {
            $this->UserProperties = [];
            foreach ($param["UserProperties"] as $key => $value){
                $obj = new UserProperty();
                $obj->deserialize($value);
                array_push($this->UserProperties, $obj);
            }
        }

        if (array_key_exists("PublishAfter",$param) and $param["PublishAfter"] !== null) {
            $this->PublishAfter = $param["PublishAfter"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
