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
 * StartPublishCdnStream请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和转推的房间所对应的SdkAppId相同。</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和转推的房间所对应的SdkAppId相同。</p>
 * @method string getRoomId() 获取<p>主房间信息RoomId，转推的TRTC房间所对应的RoomId。</p>
 * @method void setRoomId(string $RoomId) 设置<p>主房间信息RoomId，转推的TRTC房间所对应的RoomId。</p>
 * @method integer getRoomIdType() 获取<p>主房间信息RoomType，必须和转推的房间所对应的RoomId类型相同，0为整型房间号，1为字符串房间号。</p>
 * @method void setRoomIdType(integer $RoomIdType) 设置<p>主房间信息RoomType，必须和转推的房间所对应的RoomId类型相同，0为整型房间号，1为字符串房间号。</p>
 * @method AgentParams getAgentParams() 获取<p>转推服务加入TRTC房间的机器人参数。</p>
 * @method void setAgentParams(AgentParams $AgentParams) 设置<p>转推服务加入TRTC房间的机器人参数。</p>
 * @method integer getWithTranscoding() 获取<p>是否转码，0表示无需转码，1表示需要转码。<br>WithTranscoding为0，表示旁路转推，默认不转码；WithTranscoding为1，表示混流转推，此时一定会转码，并收取转码费用。<br>注：<br>1，混流是必须转码的，这个参数需设置为1。<br>2，WithTranscoding=0时，视频输出Codec默认跟随上行视频Codec，如果上行视频Codec发生变化，CDN会断流重推。</p>
 * @method void setWithTranscoding(integer $WithTranscoding) 设置<p>是否转码，0表示无需转码，1表示需要转码。<br>WithTranscoding为0，表示旁路转推，默认不转码；WithTranscoding为1，表示混流转推，此时一定会转码，并收取转码费用。<br>注：<br>1，混流是必须转码的，这个参数需设置为1。<br>2，WithTranscoding=0时，视频输出Codec默认跟随上行视频Codec，如果上行视频Codec发生变化，CDN会断流重推。</p>
 * @method McuAudioParams getAudioParams() 获取<p>转推流的音频编码参数。由于音频是必转码的（不会收取转码费用），所以启动任务的时候，必须填写。</p>
 * @method void setAudioParams(McuAudioParams $AudioParams) 设置<p>转推流的音频编码参数。由于音频是必转码的（不会收取转码费用），所以启动任务的时候，必须填写。</p>
 * @method McuVideoParams getVideoParams() 获取<p>转推流的视频编码参数，不填表示纯音频转推。</p>
 * @method void setVideoParams(McuVideoParams $VideoParams) 设置<p>转推流的视频编码参数，不填表示纯音频转推。</p>
 * @method SingleSubscribeParams getSingleSubscribeParams() 获取<p>需要单流旁路转推的用户上行参数，单流旁路转推时，WithTranscoding需要设置为0。</p>
 * @method void setSingleSubscribeParams(SingleSubscribeParams $SingleSubscribeParams) 设置<p>需要单流旁路转推的用户上行参数，单流旁路转推时，WithTranscoding需要设置为0。</p>
 * @method array getPublishCdnParams() 获取<p>转推的CDN参数，一个任务最多支持10个推流URL。和回推房间参数必须要有一个。</p>
 * @method void setPublishCdnParams(array $PublishCdnParams) 设置<p>转推的CDN参数，一个任务最多支持10个推流URL。和回推房间参数必须要有一个。</p>
 * @method McuSeiParams getSeiParams() 获取<p>混流SEI参数</p>
 * @method void setSeiParams(McuSeiParams $SeiParams) 设置<p>混流SEI参数</p>
 * @method array getFeedBackRoomParams() 获取<p>回推房间信息，一个任务最多支持回推10个房间，和转推CDN参数必须要有一个。注：回推房间需使用10.4及以上SDK版本，如您有需求，请联系腾讯云技术支持。</p>
 * @method void setFeedBackRoomParams(array $FeedBackRoomParams) 设置<p>回推房间信息，一个任务最多支持回推10个房间，和转推CDN参数必须要有一个。注：回推房间需使用10.4及以上SDK版本，如您有需求，请联系腾讯云技术支持。</p>
 * @method McuRecordParams getRecordParams() 获取<p>转推录制参数，<a href="https://cloud.tencent.com/document/product/647/111748">参考文档</a>。</p>
 * @method void setRecordParams(McuRecordParams $RecordParams) 设置<p>转推录制参数，<a href="https://cloud.tencent.com/document/product/647/111748">参考文档</a>。</p>
 */
class StartPublishCdnStreamRequest extends AbstractModel
{
    /**
     * @var integer <p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和转推的房间所对应的SdkAppId相同。</p>
     */
    public $SdkAppId;

    /**
     * @var string <p>主房间信息RoomId，转推的TRTC房间所对应的RoomId。</p>
     */
    public $RoomId;

    /**
     * @var integer <p>主房间信息RoomType，必须和转推的房间所对应的RoomId类型相同，0为整型房间号，1为字符串房间号。</p>
     */
    public $RoomIdType;

    /**
     * @var AgentParams <p>转推服务加入TRTC房间的机器人参数。</p>
     */
    public $AgentParams;

    /**
     * @var integer <p>是否转码，0表示无需转码，1表示需要转码。<br>WithTranscoding为0，表示旁路转推，默认不转码；WithTranscoding为1，表示混流转推，此时一定会转码，并收取转码费用。<br>注：<br>1，混流是必须转码的，这个参数需设置为1。<br>2，WithTranscoding=0时，视频输出Codec默认跟随上行视频Codec，如果上行视频Codec发生变化，CDN会断流重推。</p>
     */
    public $WithTranscoding;

    /**
     * @var McuAudioParams <p>转推流的音频编码参数。由于音频是必转码的（不会收取转码费用），所以启动任务的时候，必须填写。</p>
     */
    public $AudioParams;

    /**
     * @var McuVideoParams <p>转推流的视频编码参数，不填表示纯音频转推。</p>
     */
    public $VideoParams;

    /**
     * @var SingleSubscribeParams <p>需要单流旁路转推的用户上行参数，单流旁路转推时，WithTranscoding需要设置为0。</p>
     */
    public $SingleSubscribeParams;

    /**
     * @var array <p>转推的CDN参数，一个任务最多支持10个推流URL。和回推房间参数必须要有一个。</p>
     */
    public $PublishCdnParams;

    /**
     * @var McuSeiParams <p>混流SEI参数</p>
     */
    public $SeiParams;

    /**
     * @var array <p>回推房间信息，一个任务最多支持回推10个房间，和转推CDN参数必须要有一个。注：回推房间需使用10.4及以上SDK版本，如您有需求，请联系腾讯云技术支持。</p>
     */
    public $FeedBackRoomParams;

    /**
     * @var McuRecordParams <p>转推录制参数，<a href="https://cloud.tencent.com/document/product/647/111748">参考文档</a>。</p>
     */
    public $RecordParams;

    /**
     * @param integer $SdkAppId <p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和转推的房间所对应的SdkAppId相同。</p>
     * @param string $RoomId <p>主房间信息RoomId，转推的TRTC房间所对应的RoomId。</p>
     * @param integer $RoomIdType <p>主房间信息RoomType，必须和转推的房间所对应的RoomId类型相同，0为整型房间号，1为字符串房间号。</p>
     * @param AgentParams $AgentParams <p>转推服务加入TRTC房间的机器人参数。</p>
     * @param integer $WithTranscoding <p>是否转码，0表示无需转码，1表示需要转码。<br>WithTranscoding为0，表示旁路转推，默认不转码；WithTranscoding为1，表示混流转推，此时一定会转码，并收取转码费用。<br>注：<br>1，混流是必须转码的，这个参数需设置为1。<br>2，WithTranscoding=0时，视频输出Codec默认跟随上行视频Codec，如果上行视频Codec发生变化，CDN会断流重推。</p>
     * @param McuAudioParams $AudioParams <p>转推流的音频编码参数。由于音频是必转码的（不会收取转码费用），所以启动任务的时候，必须填写。</p>
     * @param McuVideoParams $VideoParams <p>转推流的视频编码参数，不填表示纯音频转推。</p>
     * @param SingleSubscribeParams $SingleSubscribeParams <p>需要单流旁路转推的用户上行参数，单流旁路转推时，WithTranscoding需要设置为0。</p>
     * @param array $PublishCdnParams <p>转推的CDN参数，一个任务最多支持10个推流URL。和回推房间参数必须要有一个。</p>
     * @param McuSeiParams $SeiParams <p>混流SEI参数</p>
     * @param array $FeedBackRoomParams <p>回推房间信息，一个任务最多支持回推10个房间，和转推CDN参数必须要有一个。注：回推房间需使用10.4及以上SDK版本，如您有需求，请联系腾讯云技术支持。</p>
     * @param McuRecordParams $RecordParams <p>转推录制参数，<a href="https://cloud.tencent.com/document/product/647/111748">参考文档</a>。</p>
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

        if (array_key_exists("AgentParams",$param) and $param["AgentParams"] !== null) {
            $this->AgentParams = new AgentParams();
            $this->AgentParams->deserialize($param["AgentParams"]);
        }

        if (array_key_exists("WithTranscoding",$param) and $param["WithTranscoding"] !== null) {
            $this->WithTranscoding = $param["WithTranscoding"];
        }

        if (array_key_exists("AudioParams",$param) and $param["AudioParams"] !== null) {
            $this->AudioParams = new McuAudioParams();
            $this->AudioParams->deserialize($param["AudioParams"]);
        }

        if (array_key_exists("VideoParams",$param) and $param["VideoParams"] !== null) {
            $this->VideoParams = new McuVideoParams();
            $this->VideoParams->deserialize($param["VideoParams"]);
        }

        if (array_key_exists("SingleSubscribeParams",$param) and $param["SingleSubscribeParams"] !== null) {
            $this->SingleSubscribeParams = new SingleSubscribeParams();
            $this->SingleSubscribeParams->deserialize($param["SingleSubscribeParams"]);
        }

        if (array_key_exists("PublishCdnParams",$param) and $param["PublishCdnParams"] !== null) {
            $this->PublishCdnParams = [];
            foreach ($param["PublishCdnParams"] as $key => $value){
                $obj = new McuPublishCdnParam();
                $obj->deserialize($value);
                array_push($this->PublishCdnParams, $obj);
            }
        }

        if (array_key_exists("SeiParams",$param) and $param["SeiParams"] !== null) {
            $this->SeiParams = new McuSeiParams();
            $this->SeiParams->deserialize($param["SeiParams"]);
        }

        if (array_key_exists("FeedBackRoomParams",$param) and $param["FeedBackRoomParams"] !== null) {
            $this->FeedBackRoomParams = [];
            foreach ($param["FeedBackRoomParams"] as $key => $value){
                $obj = new McuFeedBackRoomParams();
                $obj->deserialize($value);
                array_push($this->FeedBackRoomParams, $obj);
            }
        }

        if (array_key_exists("RecordParams",$param) and $param["RecordParams"] !== null) {
            $this->RecordParams = new McuRecordParams();
            $this->RecordParams->deserialize($param["RecordParams"]);
        }
    }
}
