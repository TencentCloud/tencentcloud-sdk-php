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
 * 智能字幕结果
 *
 * @method string getLanguage() 获取字幕文件语言
 * @method void setLanguage(string $Language) 设置字幕文件语言
 * @method string getStatus() 获取处理是否成功
 * @method void setStatus(string $Status) 设置处理是否成功
 * @method string getPath() 获取字幕文件地址
 * @method void setPath(string $Path) 设置字幕文件地址
 */
class SubtitleResult extends AbstractModel
{
    /**
     * @var string 字幕文件语言
     */
    public $Language;

    /**
     * @var string 处理是否成功
     */
    public $Status;

    /**
     * @var string 字幕文件地址
     */
    public $Path;

    /**
     * @param string $Language 字幕文件语言
     * @param string $Status 处理是否成功
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
        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
