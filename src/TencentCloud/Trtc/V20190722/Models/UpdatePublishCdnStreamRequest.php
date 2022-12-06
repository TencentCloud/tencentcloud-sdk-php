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
 * UpdatePublishCdnStream请求参数结构体
 *
 * @method integer getSdkAppId() 获取TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和转推的房间所对应的SdkAppId相同。
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和转推的房间所对应的SdkAppId相同。
 * @method string getTaskId() 获取唯一标识转推任务。
 * @method void setTaskId(string $TaskId) 设置唯一标识转推任务。
 * @method integer getSequenceNumber() 获取客户保证同一个任务，每次更新请求中的SequenceNumber递增，防止请求乱序。
 * @method void setSequenceNumber(integer $SequenceNumber) 设置客户保证同一个任务，每次更新请求中的SequenceNumber递增，防止请求乱序。
 * @method integer getWithTranscoding() 获取是否转码，0表示无需转码，1表示需要转码。
 * @method void setWithTranscoding(integer $WithTranscoding) 设置是否转码，0表示无需转码，1表示需要转码。
 * @method McuAudioParams getAudioParams() 获取更新相关参数，只支持更新参与混音的主播列表参数。不填表示不更新此参数。
 * @method void setAudioParams(McuAudioParams $AudioParams) 设置更新相关参数，只支持更新参与混音的主播列表参数。不填表示不更新此参数。
 * @method McuVideoParams getVideoParams() 获取更新视频相关参数，转码时支持更新除编码类型之外的编码参数，视频布局参数，背景图片和背景颜色参数，水印参数。不填表示不更新此参数。
 * @method void setVideoParams(McuVideoParams $VideoParams) 设置更新视频相关参数，转码时支持更新除编码类型之外的编码参数，视频布局参数，背景图片和背景颜色参数，水印参数。不填表示不更新此参数。
 * @method SingleSubscribeParams getSingleSubscribeParams() 获取更新单流转推的用户上行参数，仅在非转码时有效。不填表示不更新此参数。
 * @method void setSingleSubscribeParams(SingleSubscribeParams $SingleSubscribeParams) 设置更新单流转推的用户上行参数，仅在非转码时有效。不填表示不更新此参数。
 * @method array getPublishCdnParams() 获取更新转推的CDN参数。不填表示不更新此参数。
 * @method void setPublishCdnParams(array $PublishCdnParams) 设置更新转推的CDN参数。不填表示不更新此参数。
 * @method McuSeiParams getSeiParams() 获取混流SEI参数
 * @method void setSeiParams(McuSeiParams $SeiParams) 设置混流SEI参数
 * @method array getFeedBackRoomParams() 获取回推房间信息
 * @method void setFeedBackRoomParams(array $FeedBackRoomParams) 设置回推房间信息
 */
class UpdatePublishCdnStreamRequest extends AbstractModel
{
    /**
     * @var integer TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和转推的房间所对应的SdkAppId相同。
     */
    public $SdkAppId;

    /**
     * @var string 唯一标识转推任务。
     */
    public $TaskId;

    /**
     * @var integer 客户保证同一个任务，每次更新请求中的SequenceNumber递增，防止请求乱序。
     */
    public $SequenceNumber;

    /**
     * @var integer 是否转码，0表示无需转码，1表示需要转码。
     */
    public $WithTranscoding;

    /**
     * @var McuAudioParams 更新相关参数，只支持更新参与混音的主播列表参数。不填表示不更新此参数。
     */
    public $AudioParams;

    /**
     * @var McuVideoParams 更新视频相关参数，转码时支持更新除编码类型之外的编码参数，视频布局参数，背景图片和背景颜色参数，水印参数。不填表示不更新此参数。
     */
    public $VideoParams;

    /**
     * @var SingleSubscribeParams 更新单流转推的用户上行参数，仅在非转码时有效。不填表示不更新此参数。
     */
    public $SingleSubscribeParams;

    /**
     * @var array 更新转推的CDN参数。不填表示不更新此参数。
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
     * @param string $TaskId 唯一标识转推任务。
     * @param integer $SequenceNumber 客户保证同一个任务，每次更新请求中的SequenceNumber递增，防止请求乱序。
     * @param integer $WithTranscoding 是否转码，0表示无需转码，1表示需要转码。
     * @param McuAudioParams $AudioParams 更新相关参数，只支持更新参与混音的主播列表参数。不填表示不更新此参数。
     * @param McuVideoParams $VideoParams 更新视频相关参数，转码时支持更新除编码类型之外的编码参数，视频布局参数，背景图片和背景颜色参数，水印参数。不填表示不更新此参数。
     * @param SingleSubscribeParams $SingleSubscribeParams 更新单流转推的用户上行参数，仅在非转码时有效。不填表示不更新此参数。
     * @param array $PublishCdnParams 更新转推的CDN参数。不填表示不更新此参数。
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
