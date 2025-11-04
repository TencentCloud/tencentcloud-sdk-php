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
 * 字幕翻译输出结果
 *
 * @method string getStatus() 获取翻译标识：
- Success
- Error
 * @method void setStatus(string $Status) 设置翻译标识：
- Success
- Error
 * @method string getTransSrc() 获取源语言（如"en"）
 * @method void setTransSrc(string $TransSrc) 设置源语言（如"en"）
 * @method string getTransDst() 获取目标语言（如"zh"）
 * @method void setTransDst(string $TransDst) 设置目标语言（如"zh"）
 * @method string getPath() 获取字幕文件地址
 * @method void setPath(string $Path) 设置字幕文件地址
 */
class SubtitleTransResultItem extends AbstractModel
{
    /**
     * @var string 翻译标识：
- Success
- Error
     */
    public $Status;

    /**
     * @var string 源语言（如"en"）
     */
    public $TransSrc;

    /**
     * @var string 目标语言（如"zh"）
     */
    public $TransDst;

    /**
     * @var string 字幕文件地址
     */
    public $Path;

    /**
     * @param string $Status 翻译标识：
- Success
- Error
     * @param string $TransSrc 源语言（如"en"）
     * @param string $TransDst 目标语言（如"zh"）
     * @param string $Path 字幕文件地址
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TransSrc",$param) and $param["TransSrc"] !== null) {
            $this->TransSrc = $param["TransSrc"];
        }

        if (array_key_exists("TransDst",$param) and $param["TransDst"] !== null) {
            $this->TransDst = $param["TransDst"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
