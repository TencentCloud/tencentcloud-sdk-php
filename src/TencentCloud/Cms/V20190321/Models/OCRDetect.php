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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTextInfo() 获取识别到的文本信息
 * @method void setTextInfo(string $TextInfo) 设置识别到的文本信息
 */

/**
 *OCR识别结果详情
 */
class OCRDetect extends AbstractModel
{
    /**
     * @var string 识别到的文本信息
     */
    public $TextInfo;
    /**
     * @param string $TextInfo 识别到的文本信息
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
        if (array_key_exists("TextInfo",$param) and $param["TextInfo"] !== null) {
            $this->TextInfo = $param["TextInfo"];
        }
    }
}
