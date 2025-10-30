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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片信息
 *
 * @method integer getId() 获取图片id
 * @method void setId(integer $Id) 设置图片id
 * @method string getUrl() 获取图片url(暂不支持传图片Url信息,请使用Base64字段传递图片的Base64编码)
 * @method void setUrl(string $Url) 设置图片url(暂不支持传图片Url信息,请使用Base64字段传递图片的Base64编码)
 * @method string getBase64() 获取图片base64编码
 * @method void setBase64(string $Base64) 设置图片base64编码
 */
class ImageInfo extends AbstractModel
{
    /**
     * @var integer 图片id
     */
    public $Id;

    /**
     * @var string 图片url(暂不支持传图片Url信息,请使用Base64字段传递图片的Base64编码)
     */
    public $Url;

    /**
     * @var string 图片base64编码
     */
    public $Base64;

    /**
     * @param integer $Id 图片id
     * @param string $Url 图片url(暂不支持传图片Url信息,请使用Base64字段传递图片的Base64编码)
     * @param string $Base64 图片base64编码
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Base64",$param) and $param["Base64"] !== null) {
            $this->Base64 = $param["Base64"];
        }
    }
}
