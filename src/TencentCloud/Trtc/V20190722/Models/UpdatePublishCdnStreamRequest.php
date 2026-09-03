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
 * UpdatePublishCdnStream请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和转推的房间所对应的SdkAppId相同。</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和转推的房间所对应的SdkAppId相同。</p>
 * @method string getTaskId() 获取<p>唯一标识转推任务。</p>
 * @method void setTaskId(string $TaskId) 设置<p>唯一标识转推任务。</p>
 * @method integer getSequenceNumber() 获取<p>客户保证同一个任务，每次更新请求中的SequenceNumber递增，防止请求乱序。</p>
 * @method void setSequenceNumber(integer $SequenceNumber) 设置<p>客户保证同一个任务，每次更新请求中的SequenceNumber递增，防止请求乱序。</p>
 * @method integer getWithTranscoding() 获取<p>是否转码，0表示无需转码，1表示需要转码。 WithTranscoding为0，表示旁路转推，默认不转码；WithTranscoding为1，表示混流转推，此时一定会转码，并收取转码费用。 注： 1，混流是必须转码的，这个参数需设置为1。 2，WithTranscoding=0时，视频输出Codec默认跟随上行视频Codec，如果上行视频Codec发生变化，CDN会断流重推。</p>
 * @method void setWithTranscoding(integer $WithTranscoding) 设置<p>是否转码，0表示无需转码，1表示需要转码。 WithTranscoding为0，表示旁路转推，默认不转码；WithTranscoding为1，表示混流转推，此时一定会转码，并收取转码费用。 注： 1，混流是必须转码的，这个参数需设置为1。 2，WithTranscoding=0时，视频输出Codec默认跟随上行视频Codec，如果上行视频Codec发生变化，CDN会断流重推。</p>
 * @method McuAudioParams getAudioParams() 获取<p>更新相关参数，只支持更新参与混音的主播列表参数，不支持更新Codec、采样率、码率和声道数。不填表示不更新此参数。</p>
 * @method void setAudioParams(McuAudioParams $AudioParams) 设置<p>更新相关参数，只支持更新参与混音的主播列表参数，不支持更新Codec、采样率、码率和声道数。不填表示不更新此参数。</p>
 * @method McuVideoParams getVideoParams() 获取<p>更新视频相关参数，转码时支持更新除编码类型之外的编码参数，视频布局参数，背景图片和背景颜色参数，水印参数。不填表示不更新此参数。</p>
 * @method void setVideoParams(McuVideoParams $VideoParams) 设置<p>更新视频相关参数，转码时支持更新除编码类型之外的编码参数，视频布局参数，背景图片和背景颜色参数，水印参数。不填表示不更新此参数。</p>
 * @method SingleSubscribeParams getSingleSubscribeParams() 获取<p>更新单流转推的用户上行参数，仅在非转码时有效。不填表示不更新此参数。</p>
 * @method void setSingleSubscribeParams(SingleSubscribeParams $SingleSubscribeParams) 设置<p>更新单流转推的用户上行参数，仅在非转码时有效。不填表示不更新此参数。</p>
 * @method array getPublishCdnParams() 获取<p>更新转推的CDN参数。不填表示不更新此参数。</p>
 * @method void setPublishCdnParams(array $PublishCdnParams) 设置<p>更新转推的CDN参数。不填表示不更新此参数。</p>
 * @method McuSeiParams getSeiParams() 获取<p>混流SEI参数</p>
 * @method void setSeiParams(McuSeiParams $SeiParams) 设置<p>混流SEI参数</p>
 * @method array getFeedBackRoomParams() 获取<p>回推房间信息</p>
 * @method void setFeedBackRoomParams(array $FeedBackRoomParams) 设置<p>回推房间信息</p>
 */
class UpdatePublishCdnStreamRequest extends AbstractModel
{
    /**
     * @var integer <p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和转推的房间所对应的SdkAppId相同。</p>
     */
    public $SdkAppId;

    /**
     * @var string <p>唯一标识转推任务。</p>
     */
    public $TaskId;

    /**
     * @var integer <p>客户保证同一个任务，每次更新请求中的SequenceNumber递增，防止请求乱序。</p>
     */
    public $SequenceNumber;

    /**
     * @var integer <p>是否转码，0表示无需转码，1表示需要转码。 WithTranscoding为0，表示旁路转推，默认不转码；WithTranscoding为1，表示混流转推，此时一定会转码，并收取转码费用。 注： 1，混流是必须转码的，这个参数需设置为1。 2，WithTranscoding=0时，视频输出Codec默认跟随上行视频Codec，如果上行视频Codec发生变化，CDN会断流重推。</p>
     */
    public $WithTranscoding;

    /**
     * @var McuAudioParams <p>更新相关参数，只支持更新参与混音的主播列表参数，不支持更新Codec、采样率、码率和声道数。不填表示不更新此参数。</p>
     */
    public $AudioParams;

    /**
     * @var McuVideoParams <p>更新视频相关参数，转码时支持更新除编码类型之外的编码参数，视频布局参数，背景图片和背景颜色参数，水印参数。不填表示不更新此参数。</p>
     */
    public $VideoParams;

    /**
     * @var SingleSubscribeParams <p>更新单流转推的用户上行参数，仅在非转码时有效。不填表示不更新此参数。</p>
     */
    public $SingleSubscribeParams;

    /**
     * @var array <p>更新转推的CDN参数。不填表示不更新此参数。</p>
     */
    public $PublishCdnParams;

    /**
     * @var McuSeiParams <p>混流SEI参数</p>
     */
    public $SeiParams;

    /**
     * @var array <p>回推房间信息</p>
     */
    public $FeedBackRoomParams;

    /**
     * @param integer $SdkAppId <p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和转推的房间所对应的SdkAppId相同。</p>
     * @param string $TaskId <p>唯一标识转推任务。</p>
     * @param integer $SequenceNumber <p>客户保证同一个任务，每次更新请求中的SequenceNumber递增，防止请求乱序。</p>
     * @param integer $WithTranscoding <p>是否转码，0表示无需转码，1表示需要转码。 WithTranscoding为0，表示旁路转推，默认不转码；WithTranscoding为1，表示混流转推，此时一定会转码，并收取转码费用。 注： 1，混流是必须转码的，这个参数需设置为1。 2，WithTranscoding=0时，视频输出Codec默认跟随上行视频Codec，如果上行视频Codec发生变化，CDN会断流重推。</p>
     * @param McuAudioParams $AudioParams <p>更新相关参数，只支持更新参与混音的主播列表参数，不支持更新Codec、采样率、码率和声道数。不填表示不更新此参数。</p>
     * @param McuVideoParams $VideoParams <p>更新视频相关参数，转码时支持更新除编码类型之外的编码参数，视频布局参数，背景图片和背景颜色参数，水印参数。不填表示不更新此参数。</p>
     * @param SingleSubscribeParams $SingleSubscribeParams <p>更新单流转推的用户上行参数，仅在非转码时有效。不填表示不更新此参数。</p>
     * @param array $PublishCdnParams <p>更新转推的CDN参数。不填表示不更新此参数。</p>
     * @param McuSeiParams $SeiParams <p>混流SEI参数</p>
     * @param array $FeedBackRoomParams <p>回推房间信息</p>
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("SequenceNumber",$param) and $param["SequenceNumber"] !== null) {
            $this->SequenceNumber = $param["SequenceNumber"];
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
