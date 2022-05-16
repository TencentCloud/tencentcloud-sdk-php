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
 * 云端录制控制参数。
 *
 * @method integer getRecordMode() 获取录制模式：
1：单流录制，分别录制房间的订阅UserId的音频和视频，将录制文件（M3U8/TS）上传至云存储；
2：混流录制，将房间内订阅UserId的音视频混录成一个音视频文件，将录制文件[M3U8/TS]上传至云存储；
 * @method void setRecordMode(integer $RecordMode) 设置录制模式：
1：单流录制，分别录制房间的订阅UserId的音频和视频，将录制文件（M3U8/TS）上传至云存储；
2：混流录制，将房间内订阅UserId的音视频混录成一个音视频文件，将录制文件[M3U8/TS]上传至云存储；
 * @method integer getMaxIdleTime() 获取房间内持续没有主播的状态超过MaxIdleTime的时长，自动停止录制，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。
 * @method void setMaxIdleTime(integer $MaxIdleTime) 设置房间内持续没有主播的状态超过MaxIdleTime的时长，自动停止录制，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。
 * @method integer getStreamType() 获取录制的媒体流类型：
0：录制音频+视频流（默认）;
1：仅录制音频流；
2：仅录制视频流，
 * @method void setStreamType(integer $StreamType) 设置录制的媒体流类型：
0：录制音频+视频流（默认）;
1：仅录制音频流；
2：仅录制视频流，
 * @method SubscribeStreamUserIds getSubscribeStreamUserIds() 获取指定订阅流白名单或者黑名单。
 * @method void setSubscribeStreamUserIds(SubscribeStreamUserIds $SubscribeStreamUserIds) 设置指定订阅流白名单或者黑名单。
 * @method integer getOutputFormat() 获取输出文件的格式。0：(默认)输出文件为hls格式。1：输出文件格式为hls+mp4（hls录制完成后转mp4文件）
 * @method void setOutputFormat(integer $OutputFormat) 设置输出文件的格式。0：(默认)输出文件为hls格式。1：输出文件格式为hls+mp4（hls录制完成后转mp4文件）
 */
class RecordParams extends AbstractModel
{
    /**
     * @var integer 录制模式：
1：单流录制，分别录制房间的订阅UserId的音频和视频，将录制文件（M3U8/TS）上传至云存储；
2：混流录制，将房间内订阅UserId的音视频混录成一个音视频文件，将录制文件[M3U8/TS]上传至云存储；
     */
    public $RecordMode;

    /**
     * @var integer 房间内持续没有主播的状态超过MaxIdleTime的时长，自动停止录制，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。
     */
    public $MaxIdleTime;

    /**
     * @var integer 录制的媒体流类型：
0：录制音频+视频流（默认）;
1：仅录制音频流；
2：仅录制视频流，
     */
    public $StreamType;

    /**
     * @var SubscribeStreamUserIds 指定订阅流白名单或者黑名单。
     */
    public $SubscribeStreamUserIds;

    /**
     * @var integer 输出文件的格式。0：(默认)输出文件为hls格式。1：输出文件格式为hls+mp4（hls录制完成后转mp4文件）
     */
    public $OutputFormat;

    /**
     * @param integer $RecordMode 录制模式：
1：单流录制，分别录制房间的订阅UserId的音频和视频，将录制文件（M3U8/TS）上传至云存储；
2：混流录制，将房间内订阅UserId的音视频混录成一个音视频文件，将录制文件[M3U8/TS]上传至云存储；
     * @param integer $MaxIdleTime 房间内持续没有主播的状态超过MaxIdleTime的时长，自动停止录制，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。
     * @param integer $StreamType 录制的媒体流类型：
0：录制音频+视频流（默认）;
1：仅录制音频流；
2：仅录制视频流，
     * @param SubscribeStreamUserIds $SubscribeStreamUserIds 指定订阅流白名单或者黑名单。
     * @param integer $OutputFormat 输出文件的格式。0：(默认)输出文件为hls格式。1：输出文件格式为hls+mp4（hls录制完成后转mp4文件）
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
        if (array_key_exists("RecordMode",$param) and $param["RecordMode"] !== null) {
            $this->RecordMode = $param["RecordMode"];
        }

        if (array_key_exists("MaxIdleTime",$param) and $param["MaxIdleTime"] !== null) {
            $this->MaxIdleTime = $param["MaxIdleTime"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("SubscribeStreamUserIds",$param) and $param["SubscribeStreamUserIds"] !== null) {
            $this->SubscribeStreamUserIds = new SubscribeStreamUserIds();
            $this->SubscribeStreamUserIds->deserialize($param["SubscribeStreamUserIds"]);
        }

        if (array_key_exists("OutputFormat",$param) and $param["OutputFormat"] !== null) {
            $this->OutputFormat = $param["OutputFormat"];
        }
    }
}
