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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义透传SEI
 *
 * @method string getPayloadContent() 获取透传SEI的payload内容。
 * @method void setPayloadContent(string $PayloadContent) 设置透传SEI的payload内容。
 * @method integer getPayloadType() 获取SEI消息的PayloadType，取值范围5、100-254（244除外，244为我们内部自定义的时间戳SEI）。
注：部分播放器可能不支持PayloadType为5带PayloadUuid的标准类型，建议优先使用其他PayloadType。
 * @method void setPayloadType(integer $PayloadType) 设置SEI消息的PayloadType，取值范围5、100-254（244除外，244为我们内部自定义的时间戳SEI）。
注：部分播放器可能不支持PayloadType为5带PayloadUuid的标准类型，建议优先使用其他PayloadType。
 * @method string getPayloadUuid() 获取PayloadType为5，PayloadUuid必须填写。PayloadType不是5时，不需要填写，填写会被后台忽略。该值必须是32长度的十六进制。
 * @method void setPayloadUuid(string $PayloadUuid) 设置PayloadType为5，PayloadUuid必须填写。PayloadType不是5时，不需要填写，填写会被后台忽略。该值必须是32长度的十六进制。
 * @method integer getInterval() 获取SEI发送间隔，单位毫秒，默认值为1000。
 * @method void setInterval(integer $Interval) 设置SEI发送间隔，单位毫秒，默认值为1000。
 * @method integer getFollowIdr() 获取取值范围[0,1]，填1：发送关键帧时会确保带SEI；填0：发送关键帧时不确保带SEI。默认值为0。
 * @method void setFollowIdr(integer $FollowIdr) 设置取值范围[0,1]，填1：发送关键帧时会确保带SEI；填0：发送关键帧时不确保带SEI。默认值为0。
 */
class McuPassThrough extends AbstractModel
{
    /**
     * @var string 透传SEI的payload内容。
     */
    public $PayloadContent;

    /**
     * @var integer SEI消息的PayloadType，取值范围5、100-254（244除外，244为我们内部自定义的时间戳SEI）。
注：部分播放器可能不支持PayloadType为5带PayloadUuid的标准类型，建议优先使用其他PayloadType。
     */
    public $PayloadType;

    /**
     * @var string PayloadType为5，PayloadUuid必须填写。PayloadType不是5时，不需要填写，填写会被后台忽略。该值必须是32长度的十六进制。
     */
    public $PayloadUuid;

    /**
     * @var integer SEI发送间隔，单位毫秒，默认值为1000。
     */
    public $Interval;

    /**
     * @var integer 取值范围[0,1]，填1：发送关键帧时会确保带SEI；填0：发送关键帧时不确保带SEI。默认值为0。
     */
    public $FollowIdr;

    /**
     * @param string $PayloadContent 透传SEI的payload内容。
     * @param integer $PayloadType SEI消息的PayloadType，取值范围5、100-254（244除外，244为我们内部自定义的时间戳SEI）。
注：部分播放器可能不支持PayloadType为5带PayloadUuid的标准类型，建议优先使用其他PayloadType。
     * @param string $PayloadUuid PayloadType为5，PayloadUuid必须填写。PayloadType不是5时，不需要填写，填写会被后台忽略。该值必须是32长度的十六进制。
     * @param integer $Interval SEI发送间隔，单位毫秒，默认值为1000。
     * @param integer $FollowIdr 取值范围[0,1]，填1：发送关键帧时会确保带SEI；填0：发送关键帧时不确保带SEI。默认值为0。
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
        if (array_key_exists("PayloadContent",$param) and $param["PayloadContent"] !== null) {
            $this->PayloadContent = $param["PayloadContent"];
        }

        if (array_key_exists("PayloadType",$param) and $param["PayloadType"] !== null) {
            $this->PayloadType = $param["PayloadType"];
        }

        if (array_key_exists("PayloadUuid",$param) and $param["PayloadUuid"] !== null) {
            $this->PayloadUuid = $param["PayloadUuid"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("FollowIdr",$param) and $param["FollowIdr"] !== null) {
            $this->FollowIdr = $param["FollowIdr"];
        }
    }
}
