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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 意愿核身朗读模式相关结果。
 *
 * @method string getIntentionVerifyVideo() 获取<p>意愿确认环节中录制的视频（base64）。</p><ul><li>若不存在则为空字符串。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntentionVerifyVideo(string $IntentionVerifyVideo) 设置<p>意愿确认环节中录制的视频（base64）。</p><ul><li>若不存在则为空字符串。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAsrResult() 获取<p>意愿确认环节中用户语音转文字的识别结果。</p><ul><li>若不存在则为空字符串。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrResult(string $AsrResult) 设置<p>意愿确认环节中用户语音转文字的识别结果。</p><ul><li>若不存在则为空字符串。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getErrorCode() 获取<p>意愿确认环节（朗读模式）的结果码。取值范围：<br>0: &quot;成功&quot;<br>-1: &quot;系统异常&quot;<br>-2: &quot;参数错误&quot;<br>-3:&quot;业务繁忙，请重试&quot;<br>-4：&quot;后端服务异常，请重试&quot;<br>-5：&quot;后端服务进房异常，请重试&quot;<br>-6：&quot;后端服务录制异常，请重试&quot;<br>-7：&quot;文件存储异常，请重试&quot;<br>-8：&quot;后端服务重复进房，请重试&quot;<br>-9：&quot;实时视频流异常，请重试&quot;<br>-10：&quot;语音识别失败，请重试&quot;<br>-11：&quot;流程已中断，请重试&quot;<br>-12：&quot;流程未完成，请重试&quot;<br>-13：&quot;token校验不通过，请重试&quot;<br>-14：&quot;流程已结束&quot;<br>-15:&quot;超过预设重试次数&quot;<br>-16:&quot;系统未知错误，请联系人工核实&quot;<br>-17:&quot;未检测到用户声音&quot;<br>3001:&quot;请保持人脸在框内&quot;<br>3002:&quot;检测到多张人脸&quot;<br>3003:&quot;人脸检测失败&quot;<br>3011:&quot;人脸比对相似度低&quot;<br>3012:&quot;人脸比对失败&quot;<br>-800: &quot;前端不兼容错误&quot;<br>-801: &quot;用户未授权摄像头和麦克风权限&quot;<br>-802: &quot;核验流程异常中断，请勿切屏或进行其他操作&quot;<br>-803: &quot;用户主动关闭链接/异常断开链接&quot;</p><p>说明：若在人脸核身过程失败、未进入意愿确认过程，则该参数返回为空，请参考人脸核身错误码结果（DetectInfoText.ErrCode）注意：此字段可能返回 null，表示取不到有效值。<br>示例值：0</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCode(integer $ErrorCode) 设置<p>意愿确认环节（朗读模式）的结果码。取值范围：<br>0: &quot;成功&quot;<br>-1: &quot;系统异常&quot;<br>-2: &quot;参数错误&quot;<br>-3:&quot;业务繁忙，请重试&quot;<br>-4：&quot;后端服务异常，请重试&quot;<br>-5：&quot;后端服务进房异常，请重试&quot;<br>-6：&quot;后端服务录制异常，请重试&quot;<br>-7：&quot;文件存储异常，请重试&quot;<br>-8：&quot;后端服务重复进房，请重试&quot;<br>-9：&quot;实时视频流异常，请重试&quot;<br>-10：&quot;语音识别失败，请重试&quot;<br>-11：&quot;流程已中断，请重试&quot;<br>-12：&quot;流程未完成，请重试&quot;<br>-13：&quot;token校验不通过，请重试&quot;<br>-14：&quot;流程已结束&quot;<br>-15:&quot;超过预设重试次数&quot;<br>-16:&quot;系统未知错误，请联系人工核实&quot;<br>-17:&quot;未检测到用户声音&quot;<br>3001:&quot;请保持人脸在框内&quot;<br>3002:&quot;检测到多张人脸&quot;<br>3003:&quot;人脸检测失败&quot;<br>3011:&quot;人脸比对相似度低&quot;<br>3012:&quot;人脸比对失败&quot;<br>-800: &quot;前端不兼容错误&quot;<br>-801: &quot;用户未授权摄像头和麦克风权限&quot;<br>-802: &quot;核验流程异常中断，请勿切屏或进行其他操作&quot;<br>-803: &quot;用户主动关闭链接/异常断开链接&quot;</p><p>说明：若在人脸核身过程失败、未进入意愿确认过程，则该参数返回为空，请参考人脸核身错误码结果（DetectInfoText.ErrCode）注意：此字段可能返回 null，表示取不到有效值。<br>示例值：0</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取<p>意愿确认环节的结果信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>意愿确认环节的结果信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIntentionVerifyBestFrame() 获取<p>意愿确认环节中录制视频的最佳帧（base64）。</p><ul><li>若不存在则为空字符串。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntentionVerifyBestFrame(string $IntentionVerifyBestFrame) 设置<p>意愿确认环节中录制视频的最佳帧（base64）。</p><ul><li>若不存在则为空字符串。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAsrResultSimilarity() 获取<p>本次流程用户语音与传入文本比对的相似度分值，取值范围 [0.00, 100.00]。只有配置了相似度阈值后才进行语音校验并返回相似度分值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrResultSimilarity(string $AsrResultSimilarity) 设置<p>本次流程用户语音与传入文本比对的相似度分值，取值范围 [0.00, 100.00]。只有配置了相似度阈值后才进行语音校验并返回相似度分值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIntentionVerifyAudio() 获取<p>意愿确认环节中录制的音频（base64）。</p><ul><li>若不存在则为空字符串。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntentionVerifyAudio(string $IntentionVerifyAudio) 设置<p>意愿确认环节中录制的音频（base64）。</p><ul><li>若不存在则为空字符串。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class IntentionVerifyData extends AbstractModel
{
    /**
     * @var string <p>意愿确认环节中录制的视频（base64）。</p><ul><li>若不存在则为空字符串。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntentionVerifyVideo;

    /**
     * @var string <p>意愿确认环节中用户语音转文字的识别结果。</p><ul><li>若不存在则为空字符串。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsrResult;

    /**
     * @var integer <p>意愿确认环节（朗读模式）的结果码。取值范围：<br>0: &quot;成功&quot;<br>-1: &quot;系统异常&quot;<br>-2: &quot;参数错误&quot;<br>-3:&quot;业务繁忙，请重试&quot;<br>-4：&quot;后端服务异常，请重试&quot;<br>-5：&quot;后端服务进房异常，请重试&quot;<br>-6：&quot;后端服务录制异常，请重试&quot;<br>-7：&quot;文件存储异常，请重试&quot;<br>-8：&quot;后端服务重复进房，请重试&quot;<br>-9：&quot;实时视频流异常，请重试&quot;<br>-10：&quot;语音识别失败，请重试&quot;<br>-11：&quot;流程已中断，请重试&quot;<br>-12：&quot;流程未完成，请重试&quot;<br>-13：&quot;token校验不通过，请重试&quot;<br>-14：&quot;流程已结束&quot;<br>-15:&quot;超过预设重试次数&quot;<br>-16:&quot;系统未知错误，请联系人工核实&quot;<br>-17:&quot;未检测到用户声音&quot;<br>3001:&quot;请保持人脸在框内&quot;<br>3002:&quot;检测到多张人脸&quot;<br>3003:&quot;人脸检测失败&quot;<br>3011:&quot;人脸比对相似度低&quot;<br>3012:&quot;人脸比对失败&quot;<br>-800: &quot;前端不兼容错误&quot;<br>-801: &quot;用户未授权摄像头和麦克风权限&quot;<br>-802: &quot;核验流程异常中断，请勿切屏或进行其他操作&quot;<br>-803: &quot;用户主动关闭链接/异常断开链接&quot;</p><p>说明：若在人脸核身过程失败、未进入意愿确认过程，则该参数返回为空，请参考人脸核身错误码结果（DetectInfoText.ErrCode）注意：此字段可能返回 null，表示取不到有效值。<br>示例值：0</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCode;

    /**
     * @var string <p>意愿确认环节的结果信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var string <p>意愿确认环节中录制视频的最佳帧（base64）。</p><ul><li>若不存在则为空字符串。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntentionVerifyBestFrame;

    /**
     * @var string <p>本次流程用户语音与传入文本比对的相似度分值，取值范围 [0.00, 100.00]。只有配置了相似度阈值后才进行语音校验并返回相似度分值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $AsrResultSimilarity;

    /**
     * @var string <p>意愿确认环节中录制的音频（base64）。</p><ul><li>若不存在则为空字符串。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntentionVerifyAudio;

    /**
     * @param string $IntentionVerifyVideo <p>意愿确认环节中录制的视频（base64）。</p><ul><li>若不存在则为空字符串。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AsrResult <p>意愿确认环节中用户语音转文字的识别结果。</p><ul><li>若不存在则为空字符串。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ErrorCode <p>意愿确认环节（朗读模式）的结果码。取值范围：<br>0: &quot;成功&quot;<br>-1: &quot;系统异常&quot;<br>-2: &quot;参数错误&quot;<br>-3:&quot;业务繁忙，请重试&quot;<br>-4：&quot;后端服务异常，请重试&quot;<br>-5：&quot;后端服务进房异常，请重试&quot;<br>-6：&quot;后端服务录制异常，请重试&quot;<br>-7：&quot;文件存储异常，请重试&quot;<br>-8：&quot;后端服务重复进房，请重试&quot;<br>-9：&quot;实时视频流异常，请重试&quot;<br>-10：&quot;语音识别失败，请重试&quot;<br>-11：&quot;流程已中断，请重试&quot;<br>-12：&quot;流程未完成，请重试&quot;<br>-13：&quot;token校验不通过，请重试&quot;<br>-14：&quot;流程已结束&quot;<br>-15:&quot;超过预设重试次数&quot;<br>-16:&quot;系统未知错误，请联系人工核实&quot;<br>-17:&quot;未检测到用户声音&quot;<br>3001:&quot;请保持人脸在框内&quot;<br>3002:&quot;检测到多张人脸&quot;<br>3003:&quot;人脸检测失败&quot;<br>3011:&quot;人脸比对相似度低&quot;<br>3012:&quot;人脸比对失败&quot;<br>-800: &quot;前端不兼容错误&quot;<br>-801: &quot;用户未授权摄像头和麦克风权限&quot;<br>-802: &quot;核验流程异常中断，请勿切屏或进行其他操作&quot;<br>-803: &quot;用户主动关闭链接/异常断开链接&quot;</p><p>说明：若在人脸核身过程失败、未进入意愿确认过程，则该参数返回为空，请参考人脸核身错误码结果（DetectInfoText.ErrCode）注意：此字段可能返回 null，表示取不到有效值。<br>示例值：0</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage <p>意愿确认环节的结果信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IntentionVerifyBestFrame <p>意愿确认环节中录制视频的最佳帧（base64）。</p><ul><li>若不存在则为空字符串。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AsrResultSimilarity <p>本次流程用户语音与传入文本比对的相似度分值，取值范围 [0.00, 100.00]。只有配置了相似度阈值后才进行语音校验并返回相似度分值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IntentionVerifyAudio <p>意愿确认环节中录制的音频（base64）。</p><ul><li>若不存在则为空字符串。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("IntentionVerifyVideo",$param) and $param["IntentionVerifyVideo"] !== null) {
            $this->IntentionVerifyVideo = $param["IntentionVerifyVideo"];
        }

        if (array_key_exists("AsrResult",$param) and $param["AsrResult"] !== null) {
            $this->AsrResult = $param["AsrResult"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("IntentionVerifyBestFrame",$param) and $param["IntentionVerifyBestFrame"] !== null) {
            $this->IntentionVerifyBestFrame = $param["IntentionVerifyBestFrame"];
        }

        if (array_key_exists("AsrResultSimilarity",$param) and $param["AsrResultSimilarity"] !== null) {
            $this->AsrResultSimilarity = $param["AsrResultSimilarity"];
        }

        if (array_key_exists("IntentionVerifyAudio",$param) and $param["IntentionVerifyAudio"] !== null) {
            $this->IntentionVerifyAudio = $param["IntentionVerifyAudio"];
        }
    }
}
