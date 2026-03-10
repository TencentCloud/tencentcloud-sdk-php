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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudTranscription请求参数结构体
 *
 * @method integer getSdkAppId() 获取TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和转录的房间所对应的SdkAppId相同。
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和转录的房间所对应的SdkAppId相同。
 * @method string getRoomId() 获取TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，转录的TRTC房间所对应的RoomId。注：房间号类型默认为整型，若房间号类型为字符串，请通过RoomIdType指定。
 * @method void setRoomId(string $RoomId) 设置TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，转录的TRTC房间所对应的RoomId。注：房间号类型默认为整型，若房间号类型为字符串，请通过RoomIdType指定。
 * @method integer getRoomIdType() 获取房间信息RoomType，必须和转录的房间所对应的RoomId类型相同，0为整型房间号，1为字符串房间号。
 * @method void setRoomIdType(integer $RoomIdType) 设置房间信息RoomType，必须和转录的房间所对应的RoomId类型相同，0为整型房间号，1为字符串房间号。
 * @method TranscriptionParam getTranscriptionParam() 获取转录服务加入TRTC房间的参数。
 * @method void setTranscriptionParam(TranscriptionParam $TranscriptionParam) 设置转录服务加入TRTC房间的参数。
 * @method AsrParam getAsrParam() 获取转录服务ASR使用的参数。
 * @method void setAsrParam(AsrParam $AsrParam) 设置转录服务ASR使用的参数。
 * @method TranslationParam getTranslationParam() 获取转录服务翻译使用的参数。
 * @method void setTranslationParam(TranslationParam $TranslationParam) 设置转录服务翻译使用的参数。
 */
class CreateCloudTranscriptionRequest extends AbstractModel
{
    /**
     * @var integer TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和转录的房间所对应的SdkAppId相同。
     */
    public $SdkAppId;

    /**
     * @var string TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，转录的TRTC房间所对应的RoomId。注：房间号类型默认为整型，若房间号类型为字符串，请通过RoomIdType指定。
     */
    public $RoomId;

    /**
     * @var integer 房间信息RoomType，必须和转录的房间所对应的RoomId类型相同，0为整型房间号，1为字符串房间号。
     */
    public $RoomIdType;

    /**
     * @var TranscriptionParam 转录服务加入TRTC房间的参数。
     */
    public $TranscriptionParam;

    /**
     * @var AsrParam 转录服务ASR使用的参数。
     */
    public $AsrParam;

    /**
     * @var TranslationParam 转录服务翻译使用的参数。
     */
    public $TranslationParam;

    /**
     * @param integer $SdkAppId TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和转录的房间所对应的SdkAppId相同。
     * @param string $RoomId TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，转录的TRTC房间所对应的RoomId。注：房间号类型默认为整型，若房间号类型为字符串，请通过RoomIdType指定。
     * @param integer $RoomIdType 房间信息RoomType，必须和转录的房间所对应的RoomId类型相同，0为整型房间号，1为字符串房间号。
     * @param TranscriptionParam $TranscriptionParam 转录服务加入TRTC房间的参数。
     * @param AsrParam $AsrParam 转录服务ASR使用的参数。
     * @param TranslationParam $TranslationParam 转录服务翻译使用的参数。
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("RoomIdType",$param) and $param["RoomIdType"] !== null) {
            $this->RoomIdType = $param["RoomIdType"];
        }

        if (array_key_exists("TranscriptionParam",$param) and $param["TranscriptionParam"] !== null) {
            $this->TranscriptionParam = new TranscriptionParam();
            $this->TranscriptionParam->deserialize($param["TranscriptionParam"]);
        }

        if (array_key_exists("AsrParam",$param) and $param["AsrParam"] !== null) {
            $this->AsrParam = new AsrParam();
            $this->AsrParam->deserialize($param["AsrParam"]);
        }

        if (array_key_exists("TranslationParam",$param) and $param["TranslationParam"] !== null) {
            $this->TranslationParam = new TranslationParam();
            $this->TranslationParam->deserialize($param["TranslationParam"]);
        }
    }
}
