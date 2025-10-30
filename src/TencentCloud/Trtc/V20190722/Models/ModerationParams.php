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
 * @method integer getModerationType() 获取审核任务类型， 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核4:音频流式审核 5:音频流式+视频截帧审核  默认值1 （流式审核需要供应商支持才生效）
 * @method void setModerationType(integer $ModerationType) 设置审核任务类型， 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核4:音频流式审核 5:音频流式+视频截帧审核  默认值1 （流式审核需要供应商支持才生效）
 * @method integer getMaxIdleTime() 获取房间内持续没有用户（主播）上行推流的状态超过MaxIdleTime的时长，自动停止切片，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于1800秒(0.5小时)。示例值：30 
 * @method void setMaxIdleTime(integer $MaxIdleTime) 设置房间内持续没有用户（主播）上行推流的状态超过MaxIdleTime的时长，自动停止切片，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于1800秒(0.5小时)。示例值：30 
 * @method integer getSliceAudio() 获取音频切片时长，默认15s 示例值：15
 * @method void setSliceAudio(integer $SliceAudio) 设置音频切片时长，默认15s 示例值：15
 * @method integer getSliceVideo() 获取视频截帧间隔时长，默认5s
 * @method void setSliceVideo(integer $SliceVideo) 设置视频截帧间隔时长，默认5s
 * @method string getModerationSupplier() 获取供应商枚举，
tianyu : 天御内容安全 （支持 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核）
ace  : ACE内容安全 （支持 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核）
shumei : 数美审核（支持 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核）
yidun : 网易易盾审核 （支持 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核）
 * @method void setModerationSupplier(string $ModerationSupplier) 设置供应商枚举，
tianyu : 天御内容安全 （支持 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核）
ace  : ACE内容安全 （支持 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核）
shumei : 数美审核（支持 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核）
yidun : 网易易盾审核 （支持 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核）
 * @method ModerationSupplierParam getModerationSupplierParam() 获取第三方审核商送审需要配置信息
 * @method void setModerationSupplierParam(ModerationSupplierParam $ModerationSupplierParam) 设置第三方审核商送审需要配置信息
 * @method integer getSaveModerationFile() 获取是否保存文件  0不保存文件 1保存所有文件 2仅保存命中文件
 * @method void setSaveModerationFile(integer $SaveModerationFile) 设置是否保存文件  0不保存文件 1保存所有文件 2仅保存命中文件
 * @method integer getCallbackAllResults() 获取是否回调所有审核结果:0 默认回调所有结果 1 仅回调命中结果 
 * @method void setCallbackAllResults(integer $CallbackAllResults) 设置是否回调所有审核结果:0 默认回调所有结果 1 仅回调命中结果 
 * @method SubscribeModerationUserIds getSubscribeStreamUserIds() 获取指定订阅流白名单或者黑名单。
 * @method void setSubscribeStreamUserIds(SubscribeModerationUserIds $SubscribeStreamUserIds) 设置指定订阅流白名单或者黑名单。
 */
class ModerationParams extends AbstractModel
{
    /**
     * @var integer 审核任务类型， 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核4:音频流式审核 5:音频流式+视频截帧审核  默认值1 （流式审核需要供应商支持才生效）
     */
    public $ModerationType;

    /**
     * @var integer 房间内持续没有用户（主播）上行推流的状态超过MaxIdleTime的时长，自动停止切片，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于1800秒(0.5小时)。示例值：30 
     */
    public $MaxIdleTime;

    /**
     * @var integer 音频切片时长，默认15s 示例值：15
     */
    public $SliceAudio;

    /**
     * @var integer 视频截帧间隔时长，默认5s
     */
    public $SliceVideo;

    /**
     * @var string 供应商枚举，
tianyu : 天御内容安全 （支持 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核）
ace  : ACE内容安全 （支持 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核）
shumei : 数美审核（支持 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核）
yidun : 网易易盾审核 （支持 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核）
     */
    public $ModerationSupplier;

    /**
     * @var ModerationSupplierParam 第三方审核商送审需要配置信息
     */
    public $ModerationSupplierParam;

    /**
     * @var integer 是否保存文件  0不保存文件 1保存所有文件 2仅保存命中文件
     */
    public $SaveModerationFile;

    /**
     * @var integer 是否回调所有审核结果:0 默认回调所有结果 1 仅回调命中结果 
     */
    public $CallbackAllResults;

    /**
     * @var SubscribeModerationUserIds 指定订阅流白名单或者黑名单。
     */
    public $SubscribeStreamUserIds;

    /**
     * @param integer $ModerationType 审核任务类型， 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核4:音频流式审核 5:音频流式+视频截帧审核  默认值1 （流式审核需要供应商支持才生效）
     * @param integer $MaxIdleTime 房间内持续没有用户（主播）上行推流的状态超过MaxIdleTime的时长，自动停止切片，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于1800秒(0.5小时)。示例值：30 
     * @param integer $SliceAudio 音频切片时长，默认15s 示例值：15
     * @param integer $SliceVideo 视频截帧间隔时长，默认5s
     * @param string $ModerationSupplier 供应商枚举，
tianyu : 天御内容安全 （支持 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核）
ace  : ACE内容安全 （支持 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核）
shumei : 数美审核（支持 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核）
yidun : 网易易盾审核 （支持 1:音频切片审核，2:视频截帧审核，3:音视切片审核+视频截帧审核）
     * @param ModerationSupplierParam $ModerationSupplierParam 第三方审核商送审需要配置信息
     * @param integer $SaveModerationFile 是否保存文件  0不保存文件 1保存所有文件 2仅保存命中文件
     * @param integer $CallbackAllResults 是否回调所有审核结果:0 默认回调所有结果 1 仅回调命中结果 
     * @param SubscribeModerationUserIds $SubscribeStreamUserIds 指定订阅流白名单或者黑名单。
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
