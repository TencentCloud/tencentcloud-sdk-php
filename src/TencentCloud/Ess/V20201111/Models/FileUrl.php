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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 下载文件的URL信息
 *
 * @method string getUrl() 获取下载文件的URL，有效期为输入的UrlTtl，默认5分钟
 * @method void setUrl(string $Url) 设置下载文件的URL，有效期为输入的UrlTtl，默认5分钟
 * @method string getOption() 获取下载文件的附加信息。如果是pdf文件，会返回pdf文件每页的有效高宽
 * @method void setOption(string $Option) 设置下载文件的附加信息。如果是pdf文件，会返回pdf文件每页的有效高宽
 */
class FileUrl extends AbstractModel
{
    /**
     * @var string 下载文件的URL，有效期为输入的UrlTtl，默认5分钟
     */
    public $Url;

    /**
     * @var string 下载文件的附加信息。如果是pdf文件，会返回pdf文件每页的有效高宽
     */
    public $Option;

    /**
     * @param string $Url 下载文件的URL，有效期为输入的UrlTtl，默认5分钟
     * @param string $Option 下载文件的附加信息。如果是pdf文件，会返回pdf文件每页的有效高宽
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Option",$param) and $param["Option"] !== null) {
            $this->Option = $param["Option"];
        }
    }
}
