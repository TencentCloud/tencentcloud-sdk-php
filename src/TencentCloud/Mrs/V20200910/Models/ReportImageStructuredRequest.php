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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReportImageStructured请求参数结构体
 *
 * @method string getImageURL() 获取医疗报告图片URL
 * @method void setImageURL(string $ImageURL) 设置医疗报告图片URL
 * @method string getImageBase64() 获取医疗报告图片base64编码后内容
 * @method void setImageBase64(string $ImageBase64) 设置医疗报告图片base64编码后内容
 */
class ReportImageStructuredRequest extends AbstractModel
{
    /**
     * @var string 医疗报告图片URL
     */
    public $ImageURL;

    /**
     * @var string 医疗报告图片base64编码后内容
     */
    public $ImageBase64;

    /**
     * @param string $ImageURL 医疗报告图片URL
     * @param string $ImageBase64 医疗报告图片base64编码后内容
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
        if (array_key_exists("ImageURL",$param) and $param["ImageURL"] !== null) {
            $this->ImageURL = $param["ImageURL"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }
    }
}
