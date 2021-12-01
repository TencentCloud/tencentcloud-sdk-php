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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportMedia请求参数结构体
 *
 * @method string getURL() 获取待分析视频的URL，目前只支持*不带签名的*COS地址，长度最长1KB
 * @method void setURL(string $URL) 设置待分析视频的URL，目前只支持*不带签名的*COS地址，长度最长1KB
 * @method string getMD5() 获取待分析视频的MD5，为空时不做校验，否则会做MD5校验，长度必须为32B
 * @method void setMD5(string $MD5) 设置待分析视频的MD5，为空时不做校验，否则会做MD5校验，长度必须为32B
 * @method string getName() 获取待分析视频的名称，指定后可支持筛选，最多100个中文字符
 * @method void setName(string $Name) 设置待分析视频的名称，指定后可支持筛选，最多100个中文字符
 */
class ImportMediaRequest extends AbstractModel
{
    /**
     * @var string 待分析视频的URL，目前只支持*不带签名的*COS地址，长度最长1KB
     */
    public $URL;

    /**
     * @var string 待分析视频的MD5，为空时不做校验，否则会做MD5校验，长度必须为32B
     */
    public $MD5;

    /**
     * @var string 待分析视频的名称，指定后可支持筛选，最多100个中文字符
     */
    public $Name;

    /**
     * @param string $URL 待分析视频的URL，目前只支持*不带签名的*COS地址，长度最长1KB
     * @param string $MD5 待分析视频的MD5，为空时不做校验，否则会做MD5校验，长度必须为32B
     * @param string $Name 待分析视频的名称，指定后可支持筛选，最多100个中文字符
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
        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("MD5",$param) and $param["MD5"] !== null) {
            $this->MD5 = $param["MD5"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
