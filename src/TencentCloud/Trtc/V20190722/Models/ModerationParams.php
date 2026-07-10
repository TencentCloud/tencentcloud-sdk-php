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
 * 云端审核的控制参数。
 *
 * @method integer getModerationType() 获取<p>AI 内容理解任务类型， 1:音频切片理解，2:视频截帧理解，3:音视切片+视频截帧理解  默认值1 </p><p>枚举值：</p><ul><li>1： 音频切片理解</li></ul>
 * @method void setModerationType(integer $ModerationType) 设置<p>AI 内容理解任务类型， 1:音频切片理解，2:视频截帧理解，3:音视切片+视频截帧理解  默认值1 </p><p>枚举值：</p><ul><li>1： 音频切片理解</li></ul>
 * @method integer getMaxIdleTime() 获取<p>房间内持续没有用户（主播）上行推流的状态超过MaxIdleTime的时长，自动停止切片，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于1800秒(0.5小时)。示例值：30</p>
 * @method void setMaxIdleTime(integer $MaxIdleTime) 设置<p>房间内持续没有用户（主播）上行推流的状态超过MaxIdleTime的时长，自动停止切片，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于1800秒(0.5小时)。示例值：30</p>
 * @method integer getSliceAudio() 获取<p>音频切片时长，默认15s 示例值：15, 范围15-60s</p>
 * @method void setSliceAudio(integer $SliceAudio) 设置<p>音频切片时长，默认15s 示例值：15, 范围15-60s</p>
 * @method integer getSliceVideo() 获取<p>视频截帧间隔时长，默认5s, 范围1-60s</p>
 * @method void setSliceVideo(integer $SliceVideo) 设置<p>视频截帧间隔时长，默认5s, 范围1-60s</p>
 * @method string getModerationSupplier() 获取<p>供应商枚举，<br>trtc : trtc内容理解</p>
 * @method void setModerationSupplier(string $ModerationSupplier) 设置<p>供应商枚举，<br>trtc : trtc内容理解</p>
 * @method ModerationSupplierParam getModerationSupplierParam() 获取<p>第三方内容理解供应商需要配置信息, ModerationSupplier为trtc时，这个参数可以不需要初始化</p>
 * @method void setModerationSupplierParam(ModerationSupplierParam $ModerationSupplierParam) 设置<p>第三方内容理解供应商需要配置信息, ModerationSupplier为trtc时，这个参数可以不需要初始化</p>
 * @method integer getSaveModerationFile() 获取<p>是否保存文件:  0不保存文件 1保存所有文件 2仅保存命中文件</p>
 * @method void setSaveModerationFile(integer $SaveModerationFile) 设置<p>是否保存文件:  0不保存文件 1保存所有文件 2仅保存命中文件</p>
 * @method integer getCallbackAllResults() 获取<p>是否回调所有内容理解结果:0 默认回调所有结果 1 仅回调命中结果</p>
 * @method void setCallbackAllResults(integer $CallbackAllResults) 设置<p>是否回调所有内容理解结果:0 默认回调所有结果 1 仅回调命中结果</p>
 * @method SubscribeModerationUserIds getSubscribeStreamUserIds() 获取<p>指定订阅流白名单或者黑名单。</p>
 * @method void setSubscribeStreamUserIds(SubscribeModerationUserIds $SubscribeStreamUserIds) 设置<p>指定订阅流白名单或者黑名单。</p>
 */
class ModerationParams extends AbstractModel
{
    /**
     * @var integer <p>AI 内容理解任务类型， 1:音频切片理解，2:视频截帧理解，3:音视切片+视频截帧理解  默认值1 </p><p>枚举值：</p><ul><li>1： 音频切片理解</li></ul>
     */
    public $ModerationType;

    /**
     * @var integer <p>房间内持续没有用户（主播）上行推流的状态超过MaxIdleTime的时长，自动停止切片，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于1800秒(0.5小时)。示例值：30</p>
     */
    public $MaxIdleTime;

    /**
     * @var integer <p>音频切片时长，默认15s 示例值：15, 范围15-60s</p>
     */
    public $SliceAudio;

    /**
     * @var integer <p>视频截帧间隔时长，默认5s, 范围1-60s</p>
     */
    public $SliceVideo;

    /**
     * @var string <p>供应商枚举，<br>trtc : trtc内容理解</p>
     */
    public $ModerationSupplier;

    /**
     * @var ModerationSupplierParam <p>第三方内容理解供应商需要配置信息, ModerationSupplier为trtc时，这个参数可以不需要初始化</p>
     */
    public $ModerationSupplierParam;

    /**
     * @var integer <p>是否保存文件:  0不保存文件 1保存所有文件 2仅保存命中文件</p>
     */
    public $SaveModerationFile;

    /**
     * @var integer <p>是否回调所有内容理解结果:0 默认回调所有结果 1 仅回调命中结果</p>
     */
    public $CallbackAllResults;

    /**
     * @var SubscribeModerationUserIds <p>指定订阅流白名单或者黑名单。</p>
     */
    public $SubscribeStreamUserIds;

    /**
     * @param integer $ModerationType <p>AI 内容理解任务类型， 1:音频切片理解，2:视频截帧理解，3:音视切片+视频截帧理解  默认值1 </p><p>枚举值：</p><ul><li>1： 音频切片理解</li></ul>
     * @param integer $MaxIdleTime <p>房间内持续没有用户（主播）上行推流的状态超过MaxIdleTime的时长，自动停止切片，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于1800秒(0.5小时)。示例值：30</p>
     * @param integer $SliceAudio <p>音频切片时长，默认15s 示例值：15, 范围15-60s</p>
     * @param integer $SliceVideo <p>视频截帧间隔时长，默认5s, 范围1-60s</p>
     * @param string $ModerationSupplier <p>供应商枚举，<br>trtc : trtc内容理解</p>
     * @param ModerationSupplierParam $ModerationSupplierParam <p>第三方内容理解供应商需要配置信息, ModerationSupplier为trtc时，这个参数可以不需要初始化</p>
     * @param integer $SaveModerationFile <p>是否保存文件:  0不保存文件 1保存所有文件 2仅保存命中文件</p>
     * @param integer $CallbackAllResults <p>是否回调所有内容理解结果:0 默认回调所有结果 1 仅回调命中结果</p>
     * @param SubscribeModerationUserIds $SubscribeStreamUserIds <p>指定订阅流白名单或者黑名单。</p>
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
        if (array_key_exists("ModerationType",$param) and $param["ModerationType"] !== null) {
            $this->ModerationType = $param["ModerationType"];
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

        if (array_key_exists("ModerationSupplier",$param) and $param["ModerationSupplier"] !== null) {
            $this->ModerationSupplier = $param["ModerationSupplier"];
        }

        if (array_key_exists("ModerationSupplierParam",$param) and $param["ModerationSupplierParam"] !== null) {
            $this->ModerationSupplierParam = new ModerationSupplierParam();
            $this->ModerationSupplierParam->deserialize($param["ModerationSupplierParam"]);
        }

        if (array_key_exists("SaveModerationFile",$param) and $param["SaveModerationFile"] !== null) {
            $this->SaveModerationFile = $param["SaveModerationFile"];
        }

        if (array_key_exists("CallbackAllResults",$param) and $param["CallbackAllResults"] !== null) {
            $this->CallbackAllResults = $param["CallbackAllResults"];
        }

        if (array_key_exists("SubscribeStreamUserIds",$param) and $param["SubscribeStreamUserIds"] !== null) {
            $this->SubscribeStreamUserIds = new SubscribeModerationUserIds();
            $this->SubscribeStreamUserIds->deserialize($param["SubscribeStreamUserIds"]);
        }
    }
}
