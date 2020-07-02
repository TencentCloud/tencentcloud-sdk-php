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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAIRecognitionTemplate请求参数结构体
 *
 * @method integer getDefinition() 获取视频内容识别模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置视频内容识别模板唯一标识。
 * @method string getName() 获取视频内容识别模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置视频内容识别模板名称，长度限制：64 个字符。
 * @method string getComment() 获取视频内容识别模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置视频内容识别模板描述信息，长度限制：256 个字符。
 * @method FaceConfigureInfoForUpdate getFaceConfigure() 获取人脸识别控制参数。
 * @method void setFaceConfigure(FaceConfigureInfoForUpdate $FaceConfigure) 设置人脸识别控制参数。
 * @method OcrFullTextConfigureInfoForUpdate getOcrFullTextConfigure() 获取文本全文识别控制参数。
 * @method void setOcrFullTextConfigure(OcrFullTextConfigureInfoForUpdate $OcrFullTextConfigure) 设置文本全文识别控制参数。
 * @method OcrWordsConfigureInfoForUpdate getOcrWordsConfigure() 获取文本关键词识别控制参数。
 * @method void setOcrWordsConfigure(OcrWordsConfigureInfoForUpdate $OcrWordsConfigure) 设置文本关键词识别控制参数。
 * @method AsrFullTextConfigureInfoForUpdate getAsrFullTextConfigure() 获取语音全文识别控制参数。
 * @method void setAsrFullTextConfigure(AsrFullTextConfigureInfoForUpdate $AsrFullTextConfigure) 设置语音全文识别控制参数。
 * @method AsrWordsConfigureInfoForUpdate getAsrWordsConfigure() 获取语音关键词识别控制参数。
 * @method void setAsrWordsConfigure(AsrWordsConfigureInfoForUpdate $AsrWordsConfigure) 设置语音关键词识别控制参数。
 */
class ModifyAIRecognitionTemplateRequest extends AbstractModel
{
    /**
     * @var integer 视频内容识别模板唯一标识。
     */
    public $Definition;

    /**
     * @var string 视频内容识别模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 视频内容识别模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var FaceConfigureInfoForUpdate 人脸识别控制参数。
     */
    public $FaceConfigure;

    /**
     * @var OcrFullTextConfigureInfoForUpdate 文本全文识别控制参数。
     */
    public $OcrFullTextConfigure;

    /**
     * @var OcrWordsConfigureInfoForUpdate 文本关键词识别控制参数。
     */
    public $OcrWordsConfigure;

    /**
     * @var AsrFullTextConfigureInfoForUpdate 语音全文识别控制参数。
     */
    public $AsrFullTextConfigure;

    /**
     * @var AsrWordsConfigureInfoForUpdate 语音关键词识别控制参数。
     */
    public $AsrWordsConfigure;

    /**
     * @param integer $Definition 视频内容识别模板唯一标识。
     * @param string $Name 视频内容识别模板名称，长度限制：64 个字符。
     * @param string $Comment 视频内容识别模板描述信息，长度限制：256 个字符。
     * @param FaceConfigureInfoForUpdate $FaceConfigure 人脸识别控制参数。
     * @param OcrFullTextConfigureInfoForUpdate $OcrFullTextConfigure 文本全文识别控制参数。
     * @param OcrWordsConfigureInfoForUpdate $OcrWordsConfigure 文本关键词识别控制参数。
     * @param AsrFullTextConfigureInfoForUpdate $AsrFullTextConfigure 语音全文识别控制参数。
     * @param AsrWordsConfigureInfoForUpdate $AsrWordsConfigure 语音关键词识别控制参数。
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
        if (array_key_exists('Definition',$param) and $param['Definition'] !== null) {
            $this->Definition = $param['Definition'];
        }

        if (array_key_exists('Name',$param) and $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }

        if (array_key_exists('Comment',$param) and $param['Comment'] !== null) {
            $this->Comment = $param['Comment'];
        }

        if (array_key_exists('FaceConfigure',$param) and $param['FaceConfigure'] !== null) {
            $this->FaceConfigure = new FaceConfigureInfoForUpdate();
            $this->FaceConfigure->deserialize($param['FaceConfigure']);
        }

        if (array_key_exists('OcrFullTextConfigure',$param) and $param['OcrFullTextConfigure'] !== null) {
            $this->OcrFullTextConfigure = new OcrFullTextConfigureInfoForUpdate();
            $this->OcrFullTextConfigure->deserialize($param['OcrFullTextConfigure']);
        }

        if (array_key_exists('OcrWordsConfigure',$param) and $param['OcrWordsConfigure'] !== null) {
            $this->OcrWordsConfigure = new OcrWordsConfigureInfoForUpdate();
            $this->OcrWordsConfigure->deserialize($param['OcrWordsConfigure']);
        }

        if (array_key_exists('AsrFullTextConfigure',$param) and $param['AsrFullTextConfigure'] !== null) {
            $this->AsrFullTextConfigure = new AsrFullTextConfigureInfoForUpdate();
            $this->AsrFullTextConfigure->deserialize($param['AsrFullTextConfigure']);
        }

        if (array_key_exists('AsrWordsConfigure',$param) and $param['AsrWordsConfigure'] !== null) {
            $this->AsrWordsConfigure = new AsrWordsConfigureInfoForUpdate();
            $this->AsrWordsConfigure->deserialize($param['AsrWordsConfigure']);
        }
    }
}
