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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 站点归属权校验——文件校验信息。
 *
 * @method string getIdentifyPath() 获取文件校验目录。
 * @method void setIdentifyPath(string $IdentifyPath) 设置文件校验目录。
 * @method string getIdentifyContent() 获取文件校验内容。
 * @method void setIdentifyContent(string $IdentifyContent) 设置文件校验内容。
 */
class FileAscriptionInfo extends AbstractModel
{
    /**
     * @var string 文件校验目录。
     */
    public $IdentifyPath;

    /**
     * @var string 文件校验内容。
     */
    public $IdentifyContent;

    /**
     * @param string $IdentifyPath 文件校验目录。
     * @param string $IdentifyContent 文件校验内容。
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
        if (array_key_exists("IdentifyPath",$param) and $param["IdentifyPath"] !== null) {
            $this->IdentifyPath = $param["IdentifyPath"];
        }

        if (array_key_exists("IdentifyContent",$param) and $param["IdentifyContent"] !== null) {
            $this->IdentifyContent = $param["IdentifyContent"];
        }
    }
}
