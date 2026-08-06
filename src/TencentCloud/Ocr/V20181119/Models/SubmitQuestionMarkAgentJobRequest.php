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
 * @method string getImageBase64() 获取<p>图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。  示例值：/9j/4AAQSkZJRg.....s97n//2Q==</p>
 * @method void setImageBase64(string $ImageBase64) 设置<p>图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。  示例值：/9j/4AAQSkZJRg.....s97n//2Q==</p>
 * @method string getImageUrl() 获取<p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。  示例值：https://ocr-demo-1254418846.cos.ap-guangzhou.myqcloud.com/general/GeneralAccurateOCR/GeneralAccurateOCR1.jpg</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。  示例值：https://ocr-demo-1254418846.cos.ap-guangzhou.myqcloud.com/general/GeneralAccurateOCR/GeneralAccurateOCR1.jpg</p>
 * @method integer getPdfPageNumber() 获取<p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为1。</p>
 * @method void setPdfPageNumber(integer $PdfPageNumber) 设置<p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为1。</p>
 * @method boolean getBoolSingleQuestion() 获取<p>表示整张试卷批改需要先切题，默认为false</p>
 * @method void setBoolSingleQuestion(boolean $BoolSingleQuestion) 设置<p>表示整张试卷批改需要先切题，默认为false</p>
 * @method boolean getEnableDeepThink() 获取<p>默认false 表示关闭深度思考  true 表示打开深度思考，更深层次推理分析，速度更慢</p>
 * @method void setEnableDeepThink(boolean $EnableDeepThink) 设置<p>默认false 表示关闭深度思考  true 表示打开深度思考，更深层次推理分析，速度更慢</p>
 * @method string getQuestionConfigMap() 获取<p>题目信息输出配置，当key对应为true表示开启配置开关。</p><p>当key为KnowledgePoints value为true 表示输出每道题结构信息中输出知识点内容；<br>当key为TrueAnswer value为true 表示输出每道题的正确答案 ；<br>当key为StepCorrection value为true表示启用步骤级批改；</p><p>当key为DisableAnswerAnalysis value为true表示不输出答案解析；</p><p>当key为OutputSubQuestionsAndCoords value为true表示输出子题干和插图坐标；</p><p>当key为UseCoordAssist value为true表示使用精调坐标辅助模型，false表示默认模型坐标（性能更优）；</p><p>参数格式：{&quot;KnowledgePoints&quot;:true,&quot;TrueAnswer&quot;:true}</p>
 * @method void setQuestionConfigMap(string $QuestionConfigMap) 设置<p>题目信息输出配置，当key对应为true表示开启配置开关。</p><p>当key为KnowledgePoints value为true 表示输出每道题结构信息中输出知识点内容；<br>当key为TrueAnswer value为true 表示输出每道题的正确答案 ；<br>当key为StepCorrection value为true表示启用步骤级批改；</p><p>当key为DisableAnswerAnalysis value为true表示不输出答案解析；</p><p>当key为OutputSubQuestionsAndCoords value为true表示输出子题干和插图坐标；</p><p>当key为UseCoordAssist value为true表示使用精调坐标辅助模型，false表示默认模型坐标（性能更优）；</p><p>参数格式：{&quot;KnowledgePoints&quot;:true,&quot;TrueAnswer&quot;:true}</p>
 * @method string getReferenceAnswer() 获取<p>仅有单题有效，如果切题有多题则不生效，单题批改的时候作为参考答案输入到批改模型中</p>
 * @method void setReferenceAnswer(string $ReferenceAnswer) 设置<p>仅有单题有效，如果切题有多题则不生效，单题批改的时候作为参考答案输入到批改模型中</p>
 * @method array getImageBase64List() 获取<p>批量base64图片入口，每个base64参考单独ImageBase64参数规则。</p><ol><li>当AssistMarkType为2时，用于提供题目相关的辅助批改图片信息.ImageBase64List.N/ImageUrlList.N来输入答题试卷和含正确解析试卷，最多两张</li><li>当AssistMarkType不为2时，ImageBase64List.N/ImageUrlList.N图片会执行拼接逻辑（解决单题跨页场景）</li></ol>
 * @method void setImageBase64List(array $ImageBase64List) 设置<p>批量base64图片入口，每个base64参考单独ImageBase64参数规则。</p><ol><li>当AssistMarkType为2时，用于提供题目相关的辅助批改图片信息.ImageBase64List.N/ImageUrlList.N来输入答题试卷和含正确解析试卷，最多两张</li><li>当AssistMarkType不为2时，ImageBase64List.N/ImageUrlList.N图片会执行拼接逻辑（解决单题跨页场景）</li></ol>
 * @method array getImageUrlList() 获取<p>批量ImageUrl图片入口，每个ImageUrl参考单独ImageUrl参数规则。</p><ol><li>当AssistMarkType为2时，用于提供题目相关的辅助批改图片信息.ImageBase64List.N/ImageUrlList.N 来输入答题试卷和含正确解析试卷，最多两张</li><li>当AssistMarkType不为2时，ImageBase64List.N/ImageUrlList.N图片会执行拼接逻辑（解决单题跨页场景）</li></ol>
 * @method void setImageUrlList(array $ImageUrlList) 设置<p>批量ImageUrl图片入口，每个ImageUrl参考单独ImageUrl参数规则。</p><ol><li>当AssistMarkType为2时，用于提供题目相关的辅助批改图片信息.ImageBase64List.N/ImageUrlList.N 来输入答题试卷和含正确解析试卷，最多两张</li><li>当AssistMarkType不为2时，ImageBase64List.N/ImageUrlList.N图片会执行拼接逻辑（解决单题跨页场景）</li></ol>
 * @method integer getAssistMarkType() 获取<p>辅助批改类型</p><p>枚举值：</p><ul><li>0： 无辅助批改，直接模型批改</li><li>1： 单题文本辅助批改，配合AnswerAssistMap使用</li><li>2： 整页辅助批改，待批改试卷使用ImageUrl/ImageBase64，答案部分使用ImageBase64List.N/ImageUrlList.N</li></ul><p>默认值：0</p>
 * @method void setAssistMarkType(integer $AssistMarkType) 设置<p>辅助批改类型</p><p>枚举值：</p><ul><li>0： 无辅助批改，直接模型批改</li><li>1： 单题文本辅助批改，配合AnswerAssistMap使用</li><li>2： 整页辅助批改，待批改试卷使用ImageUrl/ImageBase64，答案部分使用ImageBase64List.N/ImageUrlList.N</li></ul><p>默认值：0</p>
 * @method string getAnswerAssistMap() 获取<p>单题辅助批改文本内容列表，当AssistMarkType为1时生效，用于提供题目相关的辅助文本信息。</p><ol><li>当key为ReferenceAnswer，value可以输入单题的辅助答案文本。</li><li>当key为QuestionAuxStem，value可以输入单题的辅助题干。</li></ol>
 * @method void setAnswerAssistMap(string $AnswerAssistMap) 设置<p>单题辅助批改文本内容列表，当AssistMarkType为1时生效，用于提供题目相关的辅助文本信息。</p><ol><li>当key为ReferenceAnswer，value可以输入单题的辅助答案文本。</li><li>当key为QuestionAuxStem，value可以输入单题的辅助题干。</li></ol>
 */
class SubmitQuestionMarkAgentJobRequest extends AbstractModel
{
    /**
     * @var string <p>图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。  示例值：/9j/4AAQSkZJRg.....s97n//2Q==</p>
     */
    public $ImageBase64;

    /**
     * @var string <p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。  示例值：https://ocr-demo-1254418846.cos.ap-guangzhou.myqcloud.com/general/GeneralAccurateOCR/GeneralAccurateOCR1.jpg</p>
     */
    public $ImageUrl;

    /**
     * @var integer <p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为1。</p>
     */
    public $PdfPageNumber;

    /**
     * @var boolean <p>表示整张试卷批改需要先切题，默认为false</p>
     * @deprecated
     */
    public $BoolSingleQuestion;

    /**
     * @var boolean <p>默认false 表示关闭深度思考  true 表示打开深度思考，更深层次推理分析，速度更慢</p>
     * @deprecated
     */
    public $EnableDeepThink;

    /**
     * @var string <p>题目信息输出配置，当key对应为true表示开启配置开关。</p><p>当key为KnowledgePoints value为true 表示输出每道题结构信息中输出知识点内容；<br>当key为TrueAnswer value为true 表示输出每道题的正确答案 ；<br>当key为StepCorrection value为true表示启用步骤级批改；</p><p>当key为DisableAnswerAnalysis value为true表示不输出答案解析；</p><p>当key为OutputSubQuestionsAndCoords value为true表示输出子题干和插图坐标；</p><p>当key为UseCoordAssist value为true表示使用精调坐标辅助模型，false表示默认模型坐标（性能更优）；</p><p>参数格式：{&quot;KnowledgePoints&quot;:true,&quot;TrueAnswer&quot;:true}</p>
     */
    public $QuestionConfigMap;

    /**
     * @var string <p>仅有单题有效，如果切题有多题则不生效，单题批改的时候作为参考答案输入到批改模型中</p>
     */
    public $ReferenceAnswer;

    /**
     * @var array <p>批量base64图片入口，每个base64参考单独ImageBase64参数规则。</p><ol><li>当AssistMarkType为2时，用于提供题目相关的辅助批改图片信息.ImageBase64List.N/ImageUrlList.N来输入答题试卷和含正确解析试卷，最多两张</li><li>当AssistMarkType不为2时，ImageBase64List.N/ImageUrlList.N图片会执行拼接逻辑（解决单题跨页场景）</li></ol>
     */
    public $ImageBase64List;

    /**
     * @var array <p>批量ImageUrl图片入口，每个ImageUrl参考单独ImageUrl参数规则。</p><ol><li>当AssistMarkType为2时，用于提供题目相关的辅助批改图片信息.ImageBase64List.N/ImageUrlList.N 来输入答题试卷和含正确解析试卷，最多两张</li><li>当AssistMarkType不为2时，ImageBase64List.N/ImageUrlList.N图片会执行拼接逻辑（解决单题跨页场景）</li></ol>
     */
    public $ImageUrlList;

    /**
     * @var integer <p>辅助批改类型</p><p>枚举值：</p><ul><li>0： 无辅助批改，直接模型批改</li><li>1： 单题文本辅助批改，配合AnswerAssistMap使用</li><li>2： 整页辅助批改，待批改试卷使用ImageUrl/ImageBase64，答案部分使用ImageBase64List.N/ImageUrlList.N</li></ul><p>默认值：0</p>
     */
    public $AssistMarkType;

    /**
     * @var string <p>单题辅助批改文本内容列表，当AssistMarkType为1时生效，用于提供题目相关的辅助文本信息。</p><ol><li>当key为ReferenceAnswer，value可以输入单题的辅助答案文本。</li><li>当key为QuestionAuxStem，value可以输入单题的辅助题干。</li></ol>
     */
    public $AnswerAssistMap;

    /**
     * @param string $ImageBase64 <p>图片/PDF的 Base64 值。要求Base64不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。  示例值：/9j/4AAQSkZJRg.....s97n//2Q==</p>
     * @param string $ImageUrl <p>图片/PDF的 Url 地址。要求图片经Base64编码后不超过10M，分辨率建议600*800以上，支持PNG、JPG、JPEG、BMP、PDF格式。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。  示例值：https://ocr-demo-1254418846.cos.ap-guangzhou.myqcloud.com/general/GeneralAccurateOCR/GeneralAccurateOCR1.jpg</p>
     * @param integer $PdfPageNumber <p>需要识别的PDF页面的对应页码，仅支持PDF单页识别，默认值为1。</p>
     * @param boolean $BoolSingleQuestion <p>表示整张试卷批改需要先切题，默认为false</p>
     * @param boolean $EnableDeepThink <p>默认false 表示关闭深度思考  true 表示打开深度思考，更深层次推理分析，速度更慢</p>
     * @param string $QuestionConfigMap <p>题目信息输出配置，当key对应为true表示开启配置开关。</p><p>当key为KnowledgePoints value为true 表示输出每道题结构信息中输出知识点内容；<br>当key为TrueAnswer value为true 表示输出每道题的正确答案 ；<br>当key为StepCorrection value为true表示启用步骤级批改；</p><p>当key为DisableAnswerAnalysis value为true表示不输出答案解析；</p><p>当key为OutputSubQuestionsAndCoords value为true表示输出子题干和插图坐标；</p><p>当key为UseCoordAssist value为true表示使用精调坐标辅助模型，false表示默认模型坐标（性能更优）；</p><p>参数格式：{&quot;KnowledgePoints&quot;:true,&quot;TrueAnswer&quot;:true}</p>
     * @param string $ReferenceAnswer <p>仅有单题有效，如果切题有多题则不生效，单题批改的时候作为参考答案输入到批改模型中</p>
     * @param array $ImageBase64List <p>批量base64图片入口，每个base64参考单独ImageBase64参数规则。</p><ol><li>当AssistMarkType为2时，用于提供题目相关的辅助批改图片信息.ImageBase64List.N/ImageUrlList.N来输入答题试卷和含正确解析试卷，最多两张</li><li>当AssistMarkType不为2时，ImageBase64List.N/ImageUrlList.N图片会执行拼接逻辑（解决单题跨页场景）</li></ol>
     * @param array $ImageUrlList <p>批量ImageUrl图片入口，每个ImageUrl参考单独ImageUrl参数规则。</p><ol><li>当AssistMarkType为2时，用于提供题目相关的辅助批改图片信息.ImageBase64List.N/ImageUrlList.N 来输入答题试卷和含正确解析试卷，最多两张</li><li>当AssistMarkType不为2时，ImageBase64List.N/ImageUrlList.N图片会执行拼接逻辑（解决单题跨页场景）</li></ol>
     * @param integer $AssistMarkType <p>辅助批改类型</p><p>枚举值：</p><ul><li>0： 无辅助批改，直接模型批改</li><li>1： 单题文本辅助批改，配合AnswerAssistMap使用</li><li>2： 整页辅助批改，待批改试卷使用ImageUrl/ImageBase64，答案部分使用ImageBase64List.N/ImageUrlList.N</li></ul><p>默认值：0</p>
     * @param string $AnswerAssistMap <p>单题辅助批改文本内容列表，当AssistMarkType为1时生效，用于提供题目相关的辅助文本信息。</p><ol><li>当key为ReferenceAnswer，value可以输入单题的辅助答案文本。</li><li>当key为QuestionAuxStem，value可以输入单题的辅助题干。</li></ol>
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

        if (array_key_exists("ImageBase64List",$param) and $param["ImageBase64List"] !== null) {
            $this->ImageBase64List = $param["ImageBase64List"];
        }

        if (array_key_exists("ImageUrlList",$param) and $param["ImageUrlList"] !== null) {
            $this->ImageUrlList = $param["ImageUrlList"];
        }

        if (array_key_exists("AssistMarkType",$param) and $param["AssistMarkType"] !== null) {
            $this->AssistMarkType = $param["AssistMarkType"];
        }

        if (array_key_exists("AnswerAssistMap",$param) and $param["AnswerAssistMap"] !== null) {
            $this->AnswerAssistMap = $param["AnswerAssistMap"];
        }
    }
}
