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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getCode() 获取该识别场景的错误码：
0表示成功，
-1表示系统错误，
-2表示引擎错误，
-1400表示图片解码失败，
-1401表示图片不符合规范。
-1402表示图片文件太大。
 * @method void setCode(integer $Code) 设置该识别场景的错误码：
0表示成功，
-1表示系统错误，
-2表示引擎错误，
-1400表示图片解码失败，
-1401表示图片不符合规范。
-1402表示图片文件太大。
 * @method string getMsg() 获取错误码描述信息。
 * @method void setMsg(string $Msg) 设置错误码描述信息。
 * @method string getSuggestion() 获取识别场景的审核结论：
PASS：正常
REVIEW：疑似
BLOCK：违规
 * @method void setSuggestion(string $Suggestion) 设置识别场景的审核结论：
PASS：正常
REVIEW：疑似
BLOCK：违规
 * @method integer getConfidence() 获取算法对于识别结果的置信度，0-100之间，值越高，表示对于结论越确定。
 * @method void setConfidence(integer $Confidence) 设置算法对于识别结果的置信度，0-100之间，值越高，表示对于结论越确定。
 * @method array getKeywords() 获取识别到的关键词数组
 * @method void setKeywords(array $Keywords) 设置识别到的关键词数组
 * @method string getType() 获取图片中是否包含敏感文本内容。
包含：
NOTEXT：无文本
NORMAL：内容正常
ADS：广告推广
POLITICS：政治
PORN：色情
DRUGS：涉毒
CURSE：谩骂
TERRORISM：暴恐
OTHERS：其他
 * @method void setType(string $Type) 设置图片中是否包含敏感文本内容。
包含：
NOTEXT：无文本
NORMAL：内容正常
ADS：广告推广
POLITICS：政治
PORN：色情
DRUGS：涉毒
CURSE：谩骂
TERRORISM：暴恐
OTHERS：其他
 * @method string getAdvancedInfo() 获取预留字段，后期用于展示更多识别信息。
 * @method void setAdvancedInfo(string $AdvancedInfo) 设置预留字段，后期用于展示更多识别信息。
 */

/**
 *色情识别结果。
 */
class TextResult extends AbstractModel
{
    /**
     * @var integer 该识别场景的错误码：
0表示成功，
-1表示系统错误，
-2表示引擎错误，
-1400表示图片解码失败，
-1401表示图片不符合规范。
-1402表示图片文件太大。
     */
    public $Code;

    /**
     * @var string 错误码描述信息。
     */
    public $Msg;

    /**
     * @var string 识别场景的审核结论：
PASS：正常
REVIEW：疑似
BLOCK：违规
     */
    public $Suggestion;

    /**
     * @var integer 算法对于识别结果的置信度，0-100之间，值越高，表示对于结论越确定。
     */
    public $Confidence;

    /**
     * @var array 识别到的关键词数组
     */
    public $Keywords;

    /**
     * @var string 图片中是否包含敏感文本内容。
包含：
NOTEXT：无文本
NORMAL：内容正常
ADS：广告推广
POLITICS：政治
PORN：色情
DRUGS：涉毒
CURSE：谩骂
TERRORISM：暴恐
OTHERS：其他
     */
    public $Type;

    /**
     * @var string 预留字段，后期用于展示更多识别信息。
     */
    public $AdvancedInfo;
    /**
     * @param integer $Code 该识别场景的错误码：
0表示成功，
-1表示系统错误，
-2表示引擎错误，
-1400表示图片解码失败，
-1401表示图片不符合规范。
-1402表示图片文件太大。
     * @param string $Msg 错误码描述信息。
     * @param string $Suggestion 识别场景的审核结论：
PASS：正常
REVIEW：疑似
BLOCK：违规
     * @param integer $Confidence 算法对于识别结果的置信度，0-100之间，值越高，表示对于结论越确定。
     * @param array $Keywords 识别到的关键词数组
     * @param string $Type 图片中是否包含敏感文本内容。
包含：
NOTEXT：无文本
NORMAL：内容正常
ADS：广告推广
POLITICS：政治
PORN：色情
DRUGS：涉毒
CURSE：谩骂
TERRORISM：暴恐
OTHERS：其他
     * @param string $AdvancedInfo 预留字段，后期用于展示更多识别信息。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AdvancedInfo",$param) and $param["AdvancedInfo"] !== null) {
            $this->AdvancedInfo = $param["AdvancedInfo"];
        }
    }
}
