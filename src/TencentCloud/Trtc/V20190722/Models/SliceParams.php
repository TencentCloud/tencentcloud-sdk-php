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
 * 云端切片的控制参数。
 *
 * @method integer getSliceType() 获取切片任务类型:
1:音频切片；
2:视频截帧；
3:音视切片+视频截帧
示例值：1 
 * @method void setSliceType(integer $SliceType) 设置切片任务类型:
1:音频切片；
2:视频截帧；
3:音视切片+视频截帧
示例值：1 
 * @method integer getMaxIdleTime() 获取房间内持续没有主播的状态超过MaxIdleTime的时长，自动停止录制，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。
示例值：30
 * @method void setMaxIdleTime(integer $MaxIdleTime) 设置房间内持续没有主播的状态超过MaxIdleTime的时长，自动停止录制，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。
示例值：30
 * @method integer getSliceAudio() 获取音频切片时长，默认15s 示例值：15
取值范围15-60s
 * @method void setSliceAudio(integer $SliceAudio) 设置音频切片时长，默认15s 示例值：15
取值范围15-60s
 * @method integer getSliceVideo() 获取视频截帧间隔时长，默认5s， 示例值：5 取值范围5-60s
 * @method void setSliceVideo(integer $SliceVideo) 设置视频截帧间隔时长，默认5s， 示例值：5 取值范围5-60s
 * @method SubscribeStreamUserIds getSubscribeStreamUserIds() 获取指定订阅流白名单或者黑名单。
 * @method void setSubscribeStreamUserIds(SubscribeStreamUserIds $SubscribeStreamUserIds) 设置指定订阅流白名单或者黑名单。
 * @method integer getSliceImageType() 获取知道图片格式类型：
0 png, 1 jpg默认0
 * @method void setSliceImageType(integer $SliceImageType) 设置知道图片格式类型：
0 png, 1 jpg默认0
 * @method string getSliceCallbackUrl() 获取已废弃，从控制台配置回调url
 * @method void setSliceCallbackUrl(string $SliceCallbackUrl) 设置已废弃，从控制台配置回调url
 */
class SliceParams extends AbstractModel
{
    /**
     * @var integer 切片任务类型:
1:音频切片；
2:视频截帧；
3:音视切片+视频截帧
示例值：1 
     */
    public $SliceType;

    /**
     * @var integer 房间内持续没有主播的状态超过MaxIdleTime的时长，自动停止录制，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。
示例值：30
     */
    public $MaxIdleTime;

    /**
     * @var integer 音频切片时长，默认15s 示例值：15
取值范围15-60s
     */
    public $SliceAudio;

    /**
     * @var integer 视频截帧间隔时长，默认5s， 示例值：5 取值范围5-60s
     */
    public $SliceVideo;

    /**
     * @var SubscribeStreamUserIds 指定订阅流白名单或者黑名单。
     */
    public $SubscribeStreamUserIds;

    /**
     * @var integer 知道图片格式类型：
0 png, 1 jpg默认0
     */
    public $SliceImageType;

    /**
     * @var string 已废弃，从控制台配置回调url
     */
    public $SliceCallbackUrl;

    /**
     * @param integer $SliceType 切片任务类型:
1:音频切片；
2:视频截帧；
3:音视切片+视频截帧
示例值：1 
     * @param integer $MaxIdleTime 房间内持续没有主播的状态超过MaxIdleTime的时长，自动停止录制，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。
示例值：30
     * @param integer $SliceAudio 音频切片时长，默认15s 示例值：15
取值范围15-60s
     * @param integer $SliceVideo 视频截帧间隔时长，默认5s， 示例值：5 取值范围5-60s
     * @param SubscribeStreamUserIds $SubscribeStreamUserIds 指定订阅流白名单或者黑名单。
     * @param integer $SliceImageType 知道图片格式类型：
0 png, 1 jpg默认0
     * @param string $SliceCallbackUrl 已废弃，从控制台配置回调url
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
        if (array_key_exists("SliceType",$param) and $param["SliceType"] !== null) {
            $this->SliceType = $param["SliceType"];
        }

        if (array_key_exists("MaxIdleTime",$param) and $param["MaxIdleTime"] !== null) {
            $this->MaxIdleTime = $param["MaxIdleTime"];
        }

        if (array_key_exists("SliceAudio",$param) and $param["SliceAudio"] !== null) {
            $this->SliceAudio = $param["SliceAudio"];
        }

        if (array_key_exists("SliceVideo",$param) and $param["SliceVideo"] !== null) {
            $this->SliceVideo = $param["SliceVideo"];
        }

        if (array_key_exists("SubscribeStreamUserIds",$param) and $param["SubscribeStreamUserIds"] !== null) {
            $this->SubscribeStreamUserIds = new SubscribeStreamUserIds();
            $this->SubscribeStreamUserIds->deserialize($param["SubscribeStreamUserIds"]);
        }

        if (array_key_exists("SliceImageType",$param) and $param["SliceImageType"] !== null) {
            $this->SliceImageType = $param["SliceImageType"];
        }

        if (array_key_exists("SliceCallbackUrl",$param) and $param["SliceCallbackUrl"] !== null) {
            $this->SliceCallbackUrl = $param["SliceCallbackUrl"];
        }
    }
}
