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
 * StartPublishCdnStream请求参数结构体
 *
 * @method integer getSdkAppId() 获取TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和转推的房间所对应的SdkAppId相同。
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和转推的房间所对应的SdkAppId相同。
 * @method string getRoomId() 获取主房间信息RoomId，转推的TRTC房间所对应的RoomId。
 * @method void setRoomId(string $RoomId) 设置主房间信息RoomId，转推的TRTC房间所对应的RoomId。
 * @method integer getRoomIdType() 获取主房间信息RoomType，必须和转推的房间所对应的RoomId类型相同，0为整形房间号，1为字符串房间号。
 * @method void setRoomIdType(integer $RoomIdType) 设置主房间信息RoomType，必须和转推的房间所对应的RoomId类型相同，0为整形房间号，1为字符串房间号。
 * @method AgentParams getAgentParams() 获取转推服务加入TRTC房间的机器人参数。
 * @method void setAgentParams(AgentParams $AgentParams) 设置转推服务加入TRTC房间的机器人参数。
 * @method integer getWithTranscoding() 获取是否转码，0表示无需转码，1表示需要转码。
 * @method void setWithTranscoding(integer $WithTranscoding) 设置是否转码，0表示无需转码，1表示需要转码。
 * @method McuAudioParams getAudioParams() 获取转推流的音频编码参数。
 * @method void setAudioParams(McuAudioParams $AudioParams) 设置转推流的音频编码参数。
 * @method McuVideoParams getVideoParams() 获取转推流的视频编码参数，不填表示纯音频转推。
 * @method void setVideoParams(McuVideoParams $VideoParams) 设置转推流的视频编码参数，不填表示纯音频转推。
 * @method SingleSubscribeParams getSingleSubscribeParams() 获取需要单流旁路转推的用户上行参数，单流旁路转推时，WithTranscoding需要设置为0。
 * @method void setSingleSubscribeParams(SingleSubscribeParams $SingleSubscribeParams) 设置需要单流旁路转推的用户上行参数，单流旁路转推时，WithTranscoding需要设置为0。
 * @method array getPublishCdnParams() 获取转推的CDN参数。
 * @method void setPublishCdnParams(array $PublishCdnParams) 设置转推的CDN参数。
 * @method McuSeiParams getSeiParams() 获取混流SEI参数
 * @method void setSeiParams(McuSeiParams $SeiParams) 设置混流SEI参数
 * @method array getFeedBackRoomParams() 获取回推房间信息
 * @method void setFeedBackRoomParams(array $FeedBackRoomParams) 设置回推房间信息
 */
class StartPublishCdnStreamRequest extends AbstractModel
{
    /**
     * @var integer TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和转推的房间所对应的SdkAppId相同。
     */
    public $SdkAppId;

    /**
     * @var string 主房间信息RoomId，转推的TRTC房间所对应的RoomId。
     */
    public $RoomId;

    /**
     * @var integer 主房间信息RoomType，必须和转推的房间所对应的RoomId类型相同，0为整形房间号，1为字符串房间号。
     */
    public $RoomIdType;

    /**
     * @var AgentParams 转推服务加入TRTC房间的机器人参数。
     */
    public $AgentParams;

    /**
     * @var integer 是否转码，0表示无需转码，1表示需要转码。
     */
    public $WithTranscoding;

    /**
     * @var McuAudioParams 转推流的音频编码参数。
     */
    public $AudioParams;

    /**
     * @var McuVideoParams 转推流的视频编码参数，不填表示纯音频转推。
     */
    public $VideoParams;

    /**
     * @var SingleSubscribeParams 需要单流旁路转推的用户上行参数，单流旁路转推时，WithTranscoding需要设置为0。
     */
    public $SingleSubscribeParams;

    /**
     * @var array 转推的CDN参数。
     */
    public $PublishCdnParams;

    /**
     * @var McuSeiParams 混流SEI参数
     */
    public $SeiParams;

    /**
     * @var array 回推房间信息
     */
    public $FeedBackRoomParams;

    /**
     * @param integer $SdkAppId TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和转推的房间所对应的SdkAppId相同。
     * @param string $RoomId 主房间信息RoomId，转推的TRTC房间所对应的RoomId。
     * @param integer $RoomIdType 主房间信息RoomType，必须和转推的房间所对应的RoomId类型相同，0为整形房间号，1为字符串房间号。
     * @param AgentParams $AgentParams 转推服务加入TRTC房间的机器人参数。
     * @param integer $WithTranscoding 是否转码，0表示无需转码，1表示需要转码。
     * @param McuAudioParams $AudioParams 转推流的音频编码参数。
     * @param McuVideoParams $VideoParams 转推流的视频编码参数，不填表示纯音频转推。
     * @param SingleSubscribeParams $SingleSubscribeParams 需要单流旁路转推的用户上行参数，单流旁路转推时，WithTranscoding需要设置为0。
     * @param array $PublishCdnParams 转推的CDN参数。
     * @param McuSeiParams $SeiParams 混流SEI参数
     * @param array $FeedBackRoomParams 回推房间信息
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
    }
}
