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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于描述一个文件内容，包括一个下载链接和与文件内容对应的MD5和大小。
 *
 * @method string getUrl() 获取用于下载文件的URL
 * @method void setUrl(string $Url) 设置用于下载文件的URL
 * @method string getMD5() 获取文件的32位MD5
 * @method void setMD5(string $MD5) 设置文件的32位MD5
 * @method integer getSize() 获取文件字节数
 * @method void setSize(integer $Size) 设置文件字节数
 */
class FileInfo extends AbstractModel
{
    /**
     * @var string 用于下载文件的URL
     */
    public $Url;

    /**
     * @var string 文件的32位MD5
     */
    public $MD5;

    /**
     * @var integer 文件字节数
     */
    public $Size;

    /**
     * @param string $Url 用于下载文件的URL
     * @param string $MD5 文件的32位MD5
     * @param integer $Size 文件字节数
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

        if (array_key_exists("MD5",$param) and $param["MD5"] !== null) {
            $this->MD5 = $param["MD5"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
