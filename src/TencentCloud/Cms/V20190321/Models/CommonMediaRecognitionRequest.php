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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CommonMediaRecognition请求参数结构体
 *
 * @method MessageCommonGjh getMessageCommon() 获取公共参数Common类
 * @method void setMessageCommon(MessageCommonGjh $MessageCommon) 设置公共参数Common类
 * @method MessageContentGjh getMessageContent() 获取内容相关参数
 * @method void setMessageContent(MessageContentGjh $MessageContent) 设置内容相关参数
 * @method MessageIdGjh getMessageId() 获取内容ID参数
 * @method void setMessageId(MessageIdGjh $MessageId) 设置内容ID参数
 */
class CommonMediaRecognitionRequest extends AbstractModel
{
    /**
     * @var MessageCommonGjh 公共参数Common类
     */
    public $MessageCommon;

    /**
     * @var MessageContentGjh 内容相关参数
     */
    public $MessageContent;

    /**
     * @var MessageIdGjh 内容ID参数
     */
    public $MessageId;

    /**
     * @param MessageCommonGjh $MessageCommon 公共参数Common类
     * @param MessageContentGjh $MessageContent 内容相关参数
     * @param MessageIdGjh $MessageId 内容ID参数
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
        if (array_key_exists("MessageCommon",$param) and $param["MessageCommon"] !== null) {
            $this->MessageCommon = new MessageCommonGjh();
            $this->MessageCommon->deserialize($param["MessageCommon"]);
        }

        if (array_key_exists("MessageContent",$param) and $param["MessageContent"] !== null) {
            $this->MessageContent = new MessageContentGjh();
            $this->MessageContent->deserialize($param["MessageContent"]);
        }

        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = new MessageIdGjh();
            $this->MessageId->deserialize($param["MessageId"]);
        }
    }
}
