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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetectVideoSubtitleArea请求参数结构体
 *
 * @method MediaInputInfo getInputInfo() 获取<p>输入信息，当前仅支持 URL、COS</p>
 * @method void setInputInfo(MediaInputInfo $InputInfo) 设置<p>输入信息，当前仅支持 URL、COS</p>
 * @method string getVideoLanguage() 获取<p>视频的语言，如果明确知道视频的语言可以填写，提高识别准确率。</p><p>枚举值：</p><ul><li>zh_en： 中英</li><li>en： 英语</li><li>ja： 日语</li><li>ko： 韩语</li></ul>
 * @method void setVideoLanguage(string $VideoLanguage) 设置<p>视频的语言，如果明确知道视频的语言可以填写，提高识别准确率。</p><p>枚举值：</p><ul><li>zh_en： 中英</li><li>en： 英语</li><li>ja： 日语</li><li>ko： 韩语</li></ul>
 * @method string getUserExtPara() 获取<p>扩展参数，默认不填</p>
 * @method void setUserExtPara(string $UserExtPara) 设置<p>扩展参数，默认不填</p>
 */
class DetectVideoSubtitleAreaRequest extends AbstractModel
{
    /**
     * @var MediaInputInfo <p>输入信息，当前仅支持 URL、COS</p>
     */
    public $InputInfo;

    /**
     * @var string <p>视频的语言，如果明确知道视频的语言可以填写，提高识别准确率。</p><p>枚举值：</p><ul><li>zh_en： 中英</li><li>en： 英语</li><li>ja： 日语</li><li>ko： 韩语</li></ul>
     */
    public $VideoLanguage;

    /**
     * @var string <p>扩展参数，默认不填</p>
     */
    public $UserExtPara;

    /**
     * @param MediaInputInfo $InputInfo <p>输入信息，当前仅支持 URL、COS</p>
     * @param string $VideoLanguage <p>视频的语言，如果明确知道视频的语言可以填写，提高识别准确率。</p><p>枚举值：</p><ul><li>zh_en： 中英</li><li>en： 英语</li><li>ja： 日语</li><li>ko： 韩语</li></ul>
     * @param string $UserExtPara <p>扩展参数，默认不填</p>
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
        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("VideoLanguage",$param) and $param["VideoLanguage"] !== null) {
            $this->VideoLanguage = $param["VideoLanguage"];
        }

        if (array_key_exists("UserExtPara",$param) and $param["UserExtPara"] !== null) {
            $this->UserExtPara = $param["UserExtPara"];
        }
    }
}
