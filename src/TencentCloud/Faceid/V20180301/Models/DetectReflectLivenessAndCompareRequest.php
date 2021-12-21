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
 * DetectReflectLivenessAndCompare请求参数结构体
 *
 * @method string getLiveDataUrl() 获取SDK生成的活体检测数据包的资源地址。
 * @method void setLiveDataUrl(string $LiveDataUrl) 设置SDK生成的活体检测数据包的资源地址。
 * @method string getLiveDataMd5() 获取SDK生成的活体检测数据包的资源内容MD5（32位，用于校验LiveData的一致性）。
 * @method void setLiveDataMd5(string $LiveDataMd5) 设置SDK生成的活体检测数据包的资源内容MD5（32位，用于校验LiveData的一致性）。
 * @method string getImageUrl() 获取用于比对的目标图片的资源地址。
 * @method void setImageUrl(string $ImageUrl) 设置用于比对的目标图片的资源地址。
 * @method string getImageMd5() 获取用于比对的目标图片的资源MD5（32位，用于校验Image的一致性）。
 * @method void setImageMd5(string $ImageMd5) 设置用于比对的目标图片的资源MD5（32位，用于校验Image的一致性）。
 */
class DetectReflectLivenessAndCompareRequest extends AbstractModel
{
    /**
     * @var string SDK生成的活体检测数据包的资源地址。
     */
    public $LiveDataUrl;

    /**
     * @var string SDK生成的活体检测数据包的资源内容MD5（32位，用于校验LiveData的一致性）。
     */
    public $LiveDataMd5;

    /**
     * @var string 用于比对的目标图片的资源地址。
     */
    public $ImageUrl;

    /**
     * @var string 用于比对的目标图片的资源MD5（32位，用于校验Image的一致性）。
     */
    public $ImageMd5;

    /**
     * @param string $LiveDataUrl SDK生成的活体检测数据包的资源地址。
     * @param string $LiveDataMd5 SDK生成的活体检测数据包的资源内容MD5（32位，用于校验LiveData的一致性）。
     * @param string $ImageUrl 用于比对的目标图片的资源地址。
     * @param string $ImageMd5 用于比对的目标图片的资源MD5（32位，用于校验Image的一致性）。
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
        if (array_key_exists("LiveDataUrl",$param) and $param["LiveDataUrl"] !== null) {
            $this->LiveDataUrl = $param["LiveDataUrl"];
        }

        if (array_key_exists("LiveDataMd5",$param) and $param["LiveDataMd5"] !== null) {
            $this->LiveDataMd5 = $param["LiveDataMd5"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageMd5",$param) and $param["ImageMd5"] !== null) {
            $this->ImageMd5 = $param["ImageMd5"];
        }
    }
}
