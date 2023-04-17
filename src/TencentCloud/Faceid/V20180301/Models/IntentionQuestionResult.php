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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 意愿核身问答模式结果
 *
 * @method integer getFinalResultDetailCode() 获取意愿核身错误码：
0: "成功"       
-1: "参数错误"    
-2: "系统异常"    
-101: "请保持人脸在框内"    
-102: "检测到多张人脸"   
-103: "人脸检测失败"   
-104: "人脸检测不完整"   
-105: "请勿遮挡眼睛"    
-106: "请勿遮挡嘴巴"     
-107: "请勿遮挡鼻子"     
-201: "人脸比对相似度低"    
-202: "人脸比对失败"    
-301: "意愿核验不通过"   
-800: "前端不兼容错误"    
-801: "用户未授权摄像头和麦克风权限"   
-802: "获取视频流失败"   
-803: "用户主动关闭链接/异常断开链接"   
-998: "系统数据异常"   
-999: "系统未知错误，请联系人工核实"   
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinalResultDetailCode(integer $FinalResultDetailCode) 设置意愿核身错误码：
0: "成功"       
-1: "参数错误"    
-2: "系统异常"    
-101: "请保持人脸在框内"    
-102: "检测到多张人脸"   
-103: "人脸检测失败"   
-104: "人脸检测不完整"   
-105: "请勿遮挡眼睛"    
-106: "请勿遮挡嘴巴"     
-107: "请勿遮挡鼻子"     
-201: "人脸比对相似度低"    
-202: "人脸比对失败"    
-301: "意愿核验不通过"   
-800: "前端不兼容错误"    
-801: "用户未授权摄像头和麦克风权限"   
-802: "获取视频流失败"   
-803: "用户主动关闭链接/异常断开链接"   
-998: "系统数据异常"   
-999: "系统未知错误，请联系人工核实"   
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFinalResultMessage() 获取意愿核身错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinalResultMessage(string $FinalResultMessage) 设置意愿核身错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVideo() 获取视频base64（其中包含全程问题和回答音频，mp4格式）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideo(string $Video) 设置视频base64（其中包含全程问题和回答音频，mp4格式）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getScreenShot() 获取屏幕截图base64列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScreenShot(array $ScreenShot) 设置屏幕截图base64列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResultCode() 获取和答案匹配结果列表
0：成功，-1：不匹配
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultCode(array $ResultCode) 设置和答案匹配结果列表
0：成功，-1：不匹配
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAsrResult() 获取回答问题语音识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrResult(array $AsrResult) 设置回答问题语音识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAudios() 获取答案录音音频
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudios(array $Audios) 设置答案录音音频
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFinalResultCode() 获取意愿核身最终结果：
0：认证通过，-1：认证未通过，-2：浏览器内核不兼容，无法进行意愿校验。建议使用“FinalResultDetailCode”参数获取详细的错误码信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinalResultCode(string $FinalResultCode) 设置意愿核身最终结果：
0：认证通过，-1：认证未通过，-2：浏览器内核不兼容，无法进行意愿校验。建议使用“FinalResultDetailCode”参数获取详细的错误码信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class IntentionQuestionResult extends AbstractModel
{
    /**
     * @var integer 意愿核身错误码：
0: "成功"       
-1: "参数错误"    
-2: "系统异常"    
-101: "请保持人脸在框内"    
-102: "检测到多张人脸"   
-103: "人脸检测失败"   
-104: "人脸检测不完整"   
-105: "请勿遮挡眼睛"    
-106: "请勿遮挡嘴巴"     
-107: "请勿遮挡鼻子"     
-201: "人脸比对相似度低"    
-202: "人脸比对失败"    
-301: "意愿核验不通过"   
-800: "前端不兼容错误"    
-801: "用户未授权摄像头和麦克风权限"   
-802: "获取视频流失败"   
-803: "用户主动关闭链接/异常断开链接"   
-998: "系统数据异常"   
-999: "系统未知错误，请联系人工核实"   
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinalResultDetailCode;

    /**
     * @var string 意愿核身错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinalResultMessage;

    /**
     * @var string 视频base64（其中包含全程问题和回答音频，mp4格式）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Video;

    /**
     * @var array 屏幕截图base64列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScreenShot;

    /**
     * @var array 和答案匹配结果列表
0：成功，-1：不匹配
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultCode;

    /**
     * @var array 回答问题语音识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsrResult;

    /**
     * @var array 答案录音音频
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Audios;

    /**
     * @var string 意愿核身最终结果：
0：认证通过，-1：认证未通过，-2：浏览器内核不兼容，无法进行意愿校验。建议使用“FinalResultDetailCode”参数获取详细的错误码信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinalResultCode;

    /**
     * @param integer $FinalResultDetailCode 意愿核身错误码：
0: "成功"       
-1: "参数错误"    
-2: "系统异常"    
-101: "请保持人脸在框内"    
-102: "检测到多张人脸"   
-103: "人脸检测失败"   
-104: "人脸检测不完整"   
-105: "请勿遮挡眼睛"    
-106: "请勿遮挡嘴巴"     
-107: "请勿遮挡鼻子"     
-201: "人脸比对相似度低"    
-202: "人脸比对失败"    
-301: "意愿核验不通过"   
-800: "前端不兼容错误"    
-801: "用户未授权摄像头和麦克风权限"   
-802: "获取视频流失败"   
-803: "用户主动关闭链接/异常断开链接"   
-998: "系统数据异常"   
-999: "系统未知错误，请联系人工核实"   
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FinalResultMessage 意愿核身错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Video 视频base64（其中包含全程问题和回答音频，mp4格式）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ScreenShot 屏幕截图base64列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResultCode 和答案匹配结果列表
0：成功，-1：不匹配
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AsrResult 回答问题语音识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Audios 答案录音音频
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FinalResultCode 意愿核身最终结果：
0：认证通过，-1：认证未通过，-2：浏览器内核不兼容，无法进行意愿校验。建议使用“FinalResultDetailCode”参数获取详细的错误码信息。
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
        if (array_key_exists("FinalResultDetailCode",$param) and $param["FinalResultDetailCode"] !== null) {
            $this->FinalResultDetailCode = $param["FinalResultDetailCode"];
        }

        if (array_key_exists("FinalResultMessage",$param) and $param["FinalResultMessage"] !== null) {
            $this->FinalResultMessage = $param["FinalResultMessage"];
        }

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = $param["Video"];
        }

        if (array_key_exists("ScreenShot",$param) and $param["ScreenShot"] !== null) {
            $this->ScreenShot = $param["ScreenShot"];
        }

        if (array_key_exists("ResultCode",$param) and $param["ResultCode"] !== null) {
            $this->ResultCode = $param["ResultCode"];
        }

        if (array_key_exists("AsrResult",$param) and $param["AsrResult"] !== null) {
            $this->AsrResult = $param["AsrResult"];
        }

        if (array_key_exists("Audios",$param) and $param["Audios"] !== null) {
            $this->Audios = $param["Audios"];
        }

        if (array_key_exists("FinalResultCode",$param) and $param["FinalResultCode"] !== null) {
            $this->FinalResultCode = $param["FinalResultCode"];
        }
    }
}
