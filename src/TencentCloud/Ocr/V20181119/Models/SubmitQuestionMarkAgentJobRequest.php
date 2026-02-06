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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitQuestionMarkAgentJob请求参数结构体
 *
 * @method string getImageBase64() 获取图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。  示例值：/9j/4AAQSkZJRg.....s97n//2Q==
 * @method void setImageBase64(string $ImageBase64) 设置图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。  示例值：/9j/4AAQSkZJRg.....s97n//2Q==
 * @method string getImageUrl() 获取图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。  示例值：https://ocr-demo-1254418846.cos.ap-guangzhou.myqcloud.com/general/GeneralAccurateOCR/GeneralAccurateOCR1.jpg
 * @method void setImageUrl(string $ImageUrl) 设置图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。  示例值：https://ocr-demo-1254418846.cos.ap-guangzhou.myqcloud.com/general/GeneralAccurateOCR/GeneralAccurateOCR1.jpg
 * @method integer getPdfPageNumber() 获取需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为1。
 * @method void setPdfPageNumber(integer $PdfPageNumber) 设置需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为1。
 * @method boolean getBoolSingleQuestion() 获取表示整张试卷批改需要先切题，默认为false
 * @method void setBoolSingleQuestion(boolean $BoolSingleQuestion) 设置表示整张试卷批改需要先切题，默认为false
 * @method boolean getEnableDeepThink() 获取默认false 表示关闭深度思考  true 表示打开深度思考，更深层次推理分析，速度更慢
 * @method void setEnableDeepThink(boolean $EnableDeepThink) 设置默认false 表示关闭深度思考  true 表示打开深度思考，更深层次推理分析，速度更慢
 * @method string getQuestionConfigMap() 获取题目信息输出配置，当key对应为true表示开启配置开关。     当key为KnowledgePoints value为true 表示输出每道题结构信息中输出知识点内容；当key为TrueAnswer  value为true 表示输出每道题的正确答案 ；当key为ReturnAnswerPosition  value为false表示不输出手写答案坐标（降低处理耗时，按需输出）； 设置方式参考  {"KnowledgePoints":true,"TrueAnswer":true}
 * @method void setQuestionConfigMap(string $QuestionConfigMap) 设置题目信息输出配置，当key对应为true表示开启配置开关。     当key为KnowledgePoints value为true 表示输出每道题结构信息中输出知识点内容；当key为TrueAnswer  value为true 表示输出每道题的正确答案 ；当key为ReturnAnswerPosition  value为false表示不输出手写答案坐标（降低处理耗时，按需输出）； 设置方式参考  {"KnowledgePoints":true,"TrueAnswer":true}
 * @method string getReferenceAnswer() 获取仅有单题有效，如果切题有多题则不生效，单题批改的时候作为参考答案输入到批改模型中
 * @method void setReferenceAnswer(string $ReferenceAnswer) 设置仅有单题有效，如果切题有多题则不生效，单题批改的时候作为参考答案输入到批改模型中
 */
class SubmitQuestionMarkAgentJobRequest extends AbstractModel
{
    /**
     * @var string 图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。  示例值：/9j/4AAQSkZJRg.....s97n//2Q==
     */
    public $ImageBase64;

    /**
     * @var string 图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。  示例值：https://ocr-demo-1254418846.cos.ap-guangzhou.myqcloud.com/general/GeneralAccurateOCR/GeneralAccurateOCR1.jpg
     */
    public $ImageUrl;

    /**
     * @var integer 需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为1。
     */
    public $PdfPageNumber;

    /**
     * @var boolean 表示整张试卷批改需要先切题，默认为false
     * @deprecated
     */
    public $BoolSingleQuestion;

    /**
     * @var boolean 默认false 表示关闭深度思考  true 表示打开深度思考，更深层次推理分析，速度更慢
     * @deprecated
     */
    public $EnableDeepThink;

    /**
     * @var string 题目信息输出配置，当key对应为true表示开启配置开关。     当key为KnowledgePoints value为true 表示输出每道题结构信息中输出知识点内容；当key为TrueAnswer  value为true 表示输出每道题的正确答案 ；当key为ReturnAnswerPosition  value为false表示不输出手写答案坐标（降低处理耗时，按需输出）； 设置方式参考  {"KnowledgePoints":true,"TrueAnswer":true}
     */
    public $QuestionConfigMap;

    /**
     * @var string 仅有单题有效，如果切题有多题则不生效，单题批改的时候作为参考答案输入到批改模型中
     */
    public $ReferenceAnswer;

    /**
     * @param string $ImageBase64 图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。  示例值：/9j/4AAQSkZJRg.....s97n//2Q==
     * @param string $ImageUrl 图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。  示例值：https://ocr-demo-1254418846.cos.ap-guangzhou.myqcloud.com/general/GeneralAccurateOCR/GeneralAccurateOCR1.jpg
     * @param integer $PdfPageNumber 需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为1。
     * @param boolean $BoolSingleQuestion 表示整张试卷批改需要先切题，默认为false
     * @param boolean $EnableDeepThink 默认false 表示关闭深度思考  true 表示打开深度思考，更深层次推理分析，速度更慢
     * @param string $QuestionConfigMap 题目信息输出配置，当key对应为true表示开启配置开关。     当key为KnowledgePoints value为true 表示输出每道题结构信息中输出知识点内容；当key为TrueAnswer  value为true 表示输出每道题的正确答案 ；当key为ReturnAnswerPosition  value为false表示不输出手写答案坐标（降低处理耗时，按需输出）； 设置方式参考  {"KnowledgePoints":true,"TrueAnswer":true}
     * @param string $ReferenceAnswer 仅有单题有效，如果切题有多题则不生效，单题批改的时候作为参考答案输入到批改模型中
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
        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("PdfPageNumber",$param) and $param["PdfPageNumber"] !== null) {
            $this->PdfPageNumber = $param["PdfPageNumber"];
        }

        if (array_key_exists("BoolSingleQuestion",$param) and $param["BoolSingleQuestion"] !== null) {
            $this->BoolSingleQuestion = $param["BoolSingleQuestion"];
        }

        if (array_key_exists("EnableDeepThink",$param) and $param["EnableDeepThink"] !== null) {
            $this->EnableDeepThink = $param["EnableDeepThink"];
        }

        if (array_key_exists("QuestionConfigMap",$param) and $param["QuestionConfigMap"] !== null) {
            $this->QuestionConfigMap = $param["QuestionConfigMap"];
        }

        if (array_key_exists("ReferenceAnswer",$param) and $param["ReferenceAnswer"] !== null) {
            $this->ReferenceAnswer = $param["ReferenceAnswer"];
        }
    }
}
