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
namespace TencentCloud\Wimgs\V20251106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchByText返回参数结构体
 *
 * @method string getQuery() 获取原始查询词
 * @method void setQuery(string $Query) 设置原始查询词
 * @method array getImages() 获取搜索结果图片列表，格式为json字符串。

- thumbnailUrl：缩略图地址。
- thumbnailWidth：缩略图宽度。
- thumbnailHeight：缩略图高度。
- origPicUrl：原图地址。
-  origPicWidth：原图宽度。
- siteUrl：站点地址，原图来源网页URL。
- siteName：站点名称。
- title：标题，原图标题或原图来源网页标题。
- date：内容发布时间。
 * @method void setImages(array $Images) 设置搜索结果图片列表，格式为json字符串。

- thumbnailUrl：缩略图地址。
- thumbnailWidth：缩略图宽度。
- thumbnailHeight：缩略图高度。
- origPicUrl：原图地址。
-  origPicWidth：原图宽度。
- siteUrl：站点地址，原图来源网页URL。
- siteName：站点名称。
- title：标题，原图标题或原图来源网页标题。
- date：内容发布时间。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class SearchByTextResponse extends AbstractModel
{
    /**
     * @var string 原始查询词
     */
    public $Query;

    /**
     * @var array 搜索结果图片列表，格式为json字符串。

- thumbnailUrl：缩略图地址。
- thumbnailWidth：缩略图宽度。
- thumbnailHeight：缩略图高度。
- origPicUrl：原图地址。
-  origPicWidth：原图宽度。
- siteUrl：站点地址，原图来源网页URL。
- siteName：站点名称。
- title：标题，原图标题或原图来源网页标题。
- date：内容发布时间。
     */
    public $Images;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Query 原始查询词
     * @param array $Images 搜索结果图片列表，格式为json字符串。

- thumbnailUrl：缩略图地址。
- thumbnailWidth：缩略图宽度。
- thumbnailHeight：缩略图高度。
- origPicUrl：原图地址。
-  origPicWidth：原图宽度。
- siteUrl：站点地址，原图来源网页URL。
- siteName：站点名称。
- title：标题，原图标题或原图来源网页标题。
- date：内容发布时间。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
