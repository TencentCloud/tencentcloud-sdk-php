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
 * @method integer getSdkAppId() 获取<p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和转录的房间所对应的SdkAppId相同。</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和转录的房间所对应的SdkAppId相同。</p>
 * @method string getRoomId() 获取<p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#roomid">RoomId</a>，转录的TRTC房间所对应的RoomId。注：房间号类型默认为整型，若房间号类型为字符串，请通过RoomIdType指定。</p>
 * @method void setRoomId(string $RoomId) 设置<p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#roomid">RoomId</a>，转录的TRTC房间所对应的RoomId。注：房间号类型默认为整型，若房间号类型为字符串，请通过RoomIdType指定。</p>
 * @method integer getRoomIdType() 获取<p>房间信息RoomType，必须和转录的房间所对应的RoomId类型相同，0为整型房间号，1为字符串房间号。</p>
 * @method void setRoomIdType(integer $RoomIdType) 设置<p>房间信息RoomType，必须和转录的房间所对应的RoomId类型相同，0为整型房间号，1为字符串房间号。</p>
 * @method TranscriptionParam getTranscriptionParam() 获取<p>转录服务加入TRTC房间的参数。</p>
 * @method void setTranscriptionParam(TranscriptionParam $TranscriptionParam) 设置<p>转录服务加入TRTC房间的参数。</p>
 * @method AsrParam getAsrParam() 获取<p>转录服务ASR使用的参数。</p>
 * @method void setAsrParam(AsrParam $AsrParam) 设置<p>转录服务ASR使用的参数。</p>
 * @method TranslationParam getTranslationParam() 获取<p>转录服务翻译使用的参数。</p>
 * @method void setTranslationParam(TranslationParam $TranslationParam) 设置<p>转录服务翻译使用的参数。</p>
 * @method array getTTSParam() 获取<p>转录服务TTS使用的参数。</p>
 * @method void setTTSParam(array $TTSParam) 设置<p>转录服务TTS使用的参数。</p>
 */
class CreateCloudTranscriptionRequest extends AbstractModel
{
    /**
     * @var integer <p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和转录的房间所对应的SdkAppId相同。</p>
     */
    public $SdkAppId;

    /**
     * @var string <p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#roomid">RoomId</a>，转录的TRTC房间所对应的RoomId。注：房间号类型默认为整型，若房间号类型为字符串，请通过RoomIdType指定。</p>
     */
    public $RoomId;

    /**
     * @var integer <p>房间信息RoomType，必须和转录的房间所对应的RoomId类型相同，0为整型房间号，1为字符串房间号。</p>
     */
    public $RoomIdType;

    /**
     * @var TranscriptionParam <p>转录服务加入TRTC房间的参数。</p>
     */
    public $TranscriptionParam;

    /**
     * @var AsrParam <p>转录服务ASR使用的参数。</p>
     */
    public $AsrParam;

    /**
     * @var TranslationParam <p>转录服务翻译使用的参数。</p>
     */
    public $TranslationParam;

    /**
     * @var array <p>转录服务TTS使用的参数。</p>
     */
    public $TTSParam;

    /**
     * @param integer $SdkAppId <p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和转录的房间所对应的SdkAppId相同。</p>
     * @param string $RoomId <p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#roomid">RoomId</a>，转录的TRTC房间所对应的RoomId。注：房间号类型默认为整型，若房间号类型为字符串，请通过RoomIdType指定。</p>
     * @param integer $RoomIdType <p>房间信息RoomType，必须和转录的房间所对应的RoomId类型相同，0为整型房间号，1为字符串房间号。</p>
     * @param TranscriptionParam $TranscriptionParam <p>转录服务加入TRTC房间的参数。</p>
     * @param AsrParam $AsrParam <p>转录服务ASR使用的参数。</p>
     * @param TranslationParam $TranslationParam <p>转录服务翻译使用的参数。</p>
     * @param array $TTSParam <p>转录服务TTS使用的参数。</p>
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

        if (array_key_exists("TTSParam",$param) and $param["TTSParam"] !== null) {
            $this->TTSParam = [];
            foreach ($param["TTSParam"] as $key => $value){
                $obj = new TTSParam();
                $obj->deserialize($value);
                array_push($this->TTSParam, $obj);
            }
        }
    }
}
