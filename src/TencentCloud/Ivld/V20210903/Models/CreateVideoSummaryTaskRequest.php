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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVideoSummaryTask请求参数结构体
 *
 * @method integer getSummaryType() 获取目前只支持 1，表示新闻缩编。
 * @method void setSummaryType(integer $SummaryType) 设置目前只支持 1，表示新闻缩编。
 * @method string getVideoURL() 获取待处理的视频的URL，目前只支持*不带签名的*COS地址，长度最长1KB
 * @method void setVideoURL(string $VideoURL) 设置待处理的视频的URL，目前只支持*不带签名的*COS地址，长度最长1KB
 * @method string getCallbackURL() 获取任务处理完成的回调地址。
 * @method void setCallbackURL(string $CallbackURL) 设置任务处理完成的回调地址。
 * @method string getWriteBackCosPath() 获取如果需要你输出 TTS 或者视频，该字段为转存的cos桶地址且不可为空; 示例：https://${Bucket}-${AppId}.cos.${Region}.myqcloud.com/${PathPrefix}/  (注意，cos路径需要以/分隔符结尾)。

 * @method void setWriteBackCosPath(string $WriteBackCosPath) 设置如果需要你输出 TTS 或者视频，该字段为转存的cos桶地址且不可为空; 示例：https://${Bucket}-${AppId}.cos.${Region}.myqcloud.com/${PathPrefix}/  (注意，cos路径需要以/分隔符结尾)。

 * @method boolean getActiveVideoGenerate() 获取是否开启结果视频生成功能，如果开启，需要指定WriteBackCosPath 参数
 * @method void setActiveVideoGenerate(boolean $ActiveVideoGenerate) 设置是否开启结果视频生成功能，如果开启，需要指定WriteBackCosPath 参数
 * @method VideoRotationMode getVideoRotationMode() 获取生成结果视频的时候，控制生成的结果视频的横转竖参数。如果 ActiveVideoGenerate 为 false, 该参数无效。
 * @method void setVideoRotationMode(VideoRotationMode $VideoRotationMode) 设置生成结果视频的时候，控制生成的结果视频的横转竖参数。如果 ActiveVideoGenerate 为 false, 该参数无效。
 * @method TTSMode getTTSMode() 获取语音合成相关的控制参数
 * @method void setTTSMode(TTSMode $TTSMode) 设置语音合成相关的控制参数
 * @method boolean getActiveTTSOutput() 获取是否输出合成好的语音列表。
 * @method void setActiveTTSOutput(boolean $ActiveTTSOutput) 设置是否输出合成好的语音列表。
 * @method array getExactAsrSet() 获取用户指定的精确的 asr 结果列表 
 * @method void setExactAsrSet(array $ExactAsrSet) 设置用户指定的精确的 asr 结果列表 
 * @method string getExactTextSummary() 获取用户指定的精确的文本摘要
 * @method void setExactTextSummary(string $ExactTextSummary) 设置用户指定的精确的文本摘要
 * @method array getExactTextSegSet() 获取用户指定的精确的文本摘要分割结果
 * @method void setExactTextSegSet(array $ExactTextSegSet) 设置用户指定的精确的文本摘要分割结果
 * @method array getExactShotSegSet() 获取用户指定的精确的镜头分割结果
 * @method void setExactShotSegSet(array $ExactShotSegSet) 设置用户指定的精确的镜头分割结果
 */
class CreateVideoSummaryTaskRequest extends AbstractModel
{
    /**
     * @var integer 目前只支持 1，表示新闻缩编。
     */
    public $SummaryType;

    /**
     * @var string 待处理的视频的URL，目前只支持*不带签名的*COS地址，长度最长1KB
     */
    public $VideoURL;

    /**
     * @var string 任务处理完成的回调地址。
     */
    public $CallbackURL;

    /**
     * @var string 如果需要你输出 TTS 或者视频，该字段为转存的cos桶地址且不可为空; 示例：https://${Bucket}-${AppId}.cos.${Region}.myqcloud.com/${PathPrefix}/  (注意，cos路径需要以/分隔符结尾)。

     */
    public $WriteBackCosPath;

    /**
     * @var boolean 是否开启结果视频生成功能，如果开启，需要指定WriteBackCosPath 参数
     */
    public $ActiveVideoGenerate;

    /**
     * @var VideoRotationMode 生成结果视频的时候，控制生成的结果视频的横转竖参数。如果 ActiveVideoGenerate 为 false, 该参数无效。
     */
    public $VideoRotationMode;

    /**
     * @var TTSMode 语音合成相关的控制参数
     */
    public $TTSMode;

    /**
     * @var boolean 是否输出合成好的语音列表。
     */
    public $ActiveTTSOutput;

    /**
     * @var array 用户指定的精确的 asr 结果列表 
     */
    public $ExactAsrSet;

    /**
     * @var string 用户指定的精确的文本摘要
     */
    public $ExactTextSummary;

    /**
     * @var array 用户指定的精确的文本摘要分割结果
     */
    public $ExactTextSegSet;

    /**
     * @var array 用户指定的精确的镜头分割结果
     */
    public $ExactShotSegSet;

    /**
     * @param integer $SummaryType 目前只支持 1，表示新闻缩编。
     * @param string $VideoURL 待处理的视频的URL，目前只支持*不带签名的*COS地址，长度最长1KB
     * @param string $CallbackURL 任务处理完成的回调地址。
     * @param string $WriteBackCosPath 如果需要你输出 TTS 或者视频，该字段为转存的cos桶地址且不可为空; 示例：https://${Bucket}-${AppId}.cos.${Region}.myqcloud.com/${PathPrefix}/  (注意，cos路径需要以/分隔符结尾)。

     * @param boolean $ActiveVideoGenerate 是否开启结果视频生成功能，如果开启，需要指定WriteBackCosPath 参数
     * @param VideoRotationMode $VideoRotationMode 生成结果视频的时候，控制生成的结果视频的横转竖参数。如果 ActiveVideoGenerate 为 false, 该参数无效。
     * @param TTSMode $TTSMode 语音合成相关的控制参数
     * @param boolean $ActiveTTSOutput 是否输出合成好的语音列表。
     * @param array $ExactAsrSet 用户指定的精确的 asr 结果列表 
     * @param string $ExactTextSummary 用户指定的精确的文本摘要
     * @param array $ExactTextSegSet 用户指定的精确的文本摘要分割结果
     * @param array $ExactShotSegSet 用户指定的精确的镜头分割结果
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
        if (array_key_exists("SummaryType",$param) and $param["SummaryType"] !== null) {
            $this->SummaryType = $param["SummaryType"];
        }

        if (array_key_exists("VideoURL",$param) and $param["VideoURL"] !== null) {
            $this->VideoURL = $param["VideoURL"];
        }

        if (array_key_exists("CallbackURL",$param) and $param["CallbackURL"] !== null) {
            $this->CallbackURL = $param["CallbackURL"];
        }

        if (array_key_exists("WriteBackCosPath",$param) and $param["WriteBackCosPath"] !== null) {
            $this->WriteBackCosPath = $param["WriteBackCosPath"];
        }

        if (array_key_exists("ActiveVideoGenerate",$param) and $param["ActiveVideoGenerate"] !== null) {
            $this->ActiveVideoGenerate = $param["ActiveVideoGenerate"];
        }

        if (array_key_exists("VideoRotationMode",$param) and $param["VideoRotationMode"] !== null) {
            $this->VideoRotationMode = new VideoRotationMode();
            $this->VideoRotationMode->deserialize($param["VideoRotationMode"]);
        }

        if (array_key_exists("TTSMode",$param) and $param["TTSMode"] !== null) {
            $this->TTSMode = new TTSMode();
            $this->TTSMode->deserialize($param["TTSMode"]);
        }

        if (array_key_exists("ActiveTTSOutput",$param) and $param["ActiveTTSOutput"] !== null) {
            $this->ActiveTTSOutput = $param["ActiveTTSOutput"];
        }

        if (array_key_exists("ExactAsrSet",$param) and $param["ExactAsrSet"] !== null) {
            $this->ExactAsrSet = [];
            foreach ($param["ExactAsrSet"] as $key => $value){
                $obj = new AsrResult();
                $obj->deserialize($value);
                array_push($this->ExactAsrSet, $obj);
            }
        }

        if (array_key_exists("ExactTextSummary",$param) and $param["ExactTextSummary"] !== null) {
            $this->ExactTextSummary = $param["ExactTextSummary"];
        }

        if (array_key_exists("ExactTextSegSet",$param) and $param["ExactTextSegSet"] !== null) {
            $this->ExactTextSegSet = $param["ExactTextSegSet"];
        }

        if (array_key_exists("ExactShotSegSet",$param) and $param["ExactShotSegSet"] !== null) {
            $this->ExactShotSegSet = [];
            foreach ($param["ExactShotSegSet"] as $key => $value){
                $obj = new ShotInfo();
                $obj->deserialize($value);
                array_push($this->ExactShotSegSet, $obj);
            }
        }
    }
}
