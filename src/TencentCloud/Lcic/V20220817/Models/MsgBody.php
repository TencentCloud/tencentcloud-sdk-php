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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义消息结构
 *
 * @method string getMsgType() 获取TIM 消息对象类型，目前支持的消息对象包括：
TIMTextElem（文本消息）
TIMFaceElem（表情消息）
TIMImageElem（图像消息）
TIMCustomElem（自定义消息）
 * @method void setMsgType(string $MsgType) 设置TIM 消息对象类型，目前支持的消息对象包括：
TIMTextElem（文本消息）
TIMFaceElem（表情消息）
TIMImageElem（图像消息）
TIMCustomElem（自定义消息）
 * @method TextMsgContent getTextMsgContent() 获取文本消息，当MsgType 为TIMTextElem（文本消息）必选。
 * @method void setTextMsgContent(TextMsgContent $TextMsgContent) 设置文本消息，当MsgType 为TIMTextElem（文本消息）必选。
 * @method FaceMsgContent getFaceMsgContent() 获取表情消息，当MsgType 为TIMFaceElem（表情消息）必选。
 * @method void setFaceMsgContent(FaceMsgContent $FaceMsgContent) 设置表情消息，当MsgType 为TIMFaceElem（表情消息）必选。
 * @method ImageMsgContent getImageMsgContent() 获取图像消息，当MsgType为TIMImageElem（图像消息）必选。
 * @method void setImageMsgContent(ImageMsgContent $ImageMsgContent) 设置图像消息，当MsgType为TIMImageElem（图像消息）必选。
 * @method CustomMsgContent getCustomMsgContent() 获取自定义消息，TIMCustomElem（自定义消息）必选。
 * @method void setCustomMsgContent(CustomMsgContent $CustomMsgContent) 设置自定义消息，TIMCustomElem（自定义消息）必选。
 */
class MsgBody extends AbstractModel
{
    /**
     * @var string TIM 消息对象类型，目前支持的消息对象包括：
TIMTextElem（文本消息）
TIMFaceElem（表情消息）
TIMImageElem（图像消息）
TIMCustomElem（自定义消息）
     */
    public $MsgType;

    /**
     * @var TextMsgContent 文本消息，当MsgType 为TIMTextElem（文本消息）必选。
     */
    public $TextMsgContent;

    /**
     * @var FaceMsgContent 表情消息，当MsgType 为TIMFaceElem（表情消息）必选。
     */
    public $FaceMsgContent;

    /**
     * @var ImageMsgContent 图像消息，当MsgType为TIMImageElem（图像消息）必选。
     */
    public $ImageMsgContent;

    /**
     * @var CustomMsgContent 自定义消息，TIMCustomElem（自定义消息）必选。
     */
    public $CustomMsgContent;

    /**
     * @param string $MsgType TIM 消息对象类型，目前支持的消息对象包括：
TIMTextElem（文本消息）
TIMFaceElem（表情消息）
TIMImageElem（图像消息）
TIMCustomElem（自定义消息）
     * @param TextMsgContent $TextMsgContent 文本消息，当MsgType 为TIMTextElem（文本消息）必选。
     * @param FaceMsgContent $FaceMsgContent 表情消息，当MsgType 为TIMFaceElem（表情消息）必选。
     * @param ImageMsgContent $ImageMsgContent 图像消息，当MsgType为TIMImageElem（图像消息）必选。
     * @param CustomMsgContent $CustomMsgContent 自定义消息，TIMCustomElem（自定义消息）必选。
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
        if (array_key_exists("MsgType",$param) and $param["MsgType"] !== null) {
            $this->MsgType = $param["MsgType"];
        }

        if (array_key_exists("TextMsgContent",$param) and $param["TextMsgContent"] !== null) {
            $this->TextMsgContent = new TextMsgContent();
            $this->TextMsgContent->deserialize($param["TextMsgContent"]);
        }

        if (array_key_exists("FaceMsgContent",$param) and $param["FaceMsgContent"] !== null) {
            $this->FaceMsgContent = new FaceMsgContent();
            $this->FaceMsgContent->deserialize($param["FaceMsgContent"]);
        }

        if (array_key_exists("ImageMsgContent",$param) and $param["ImageMsgContent"] !== null) {
            $this->ImageMsgContent = new ImageMsgContent();
            $this->ImageMsgContent->deserialize($param["ImageMsgContent"]);
        }

        if (array_key_exists("CustomMsgContent",$param) and $param["CustomMsgContent"] !== null) {
            $this->CustomMsgContent = new CustomMsgContent();
            $this->CustomMsgContent->deserialize($param["CustomMsgContent"]);
        }
    }
}
