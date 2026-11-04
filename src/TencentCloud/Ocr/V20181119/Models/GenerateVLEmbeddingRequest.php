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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateVLEmbedding请求参数结构体
 *
 * @method string getModel() 获取<p>选择生成向量的模型。取值：</p><ul><li>0：vl-embedding-4b</li><li>1：vl-embedding-8b</li><li>2：vl-embedding-2b</li></ul>
 * @method void setModel(string $Model) 设置<p>选择生成向量的模型。取值：</p><ul><li>0：vl-embedding-4b</li><li>1：vl-embedding-8b</li><li>2：vl-embedding-2b</li></ul>
 * @method string getType() 获取<p>内容类型标识。取值：</p><ul><li>1：文本</li><li>2：图像 URL</li><li>3：视频 URL</li><li>4：图文混合</li></ul>
 * @method void setType(string $Type) 设置<p>内容类型标识。取值：</p><ul><li>1：文本</li><li>2：图像 URL</li><li>3：视频 URL</li><li>4：图文混合</li></ul>
 * @method string getText() 获取<p>文本内容。仅当 Type 为 1 或 4 时必填，单条文本不超过 2000 字符。</p>
 * @method void setText(string $Text) 设置<p>文本内容。仅当 Type 为 1 或 4 时必填，单条文本不超过 2000 字符。</p>
 * @method string getImageUrl() 获取<p>图像地址，支持公网 http/https 链接或 base64 内容。仅当 Type 为 2 或 4 时必填。</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>图像地址，支持公网 http/https 链接或 base64 内容。仅当 Type 为 2 或 4 时必填。</p>
 * @method string getVideoUrl() 获取<p>视频地址，支持公网 http/https 链接或 base64 内容。仅当 Type 为 3 时必填。</p>
 * @method void setVideoUrl(string $VideoUrl) 设置<p>视频地址，支持公网 http/https 链接或 base64 内容。仅当 Type 为 3 时必填。</p>
 * @method string getSearchMode() 获取<p>检索场景，未传入该参数时将自动匹配。取值：</p><ul><li>0：自动匹配</li><li>1：图搜图（找同款、相似图），仅 Type 为 2 或 4 时可用</li><li>2：图文搜图（图 + 问题），仅 Type 为 4 时可用</li><li>3：文搜图（纯文本搜图），仅 Type 为 1 或 4 时可用</li><li>4：文搜视频（纯文本搜视频），仅 Type 为 1 或 4 时可用</li><li>5：图搜视频、图文搜视频，仅 Type 为 2 或 4 时可用</li></ul>
 * @method void setSearchMode(string $SearchMode) 设置<p>检索场景，未传入该参数时将自动匹配。取值：</p><ul><li>0：自动匹配</li><li>1：图搜图（找同款、相似图），仅 Type 为 2 或 4 时可用</li><li>2：图文搜图（图 + 问题），仅 Type 为 4 时可用</li><li>3：文搜图（纯文本搜图），仅 Type 为 1 或 4 时可用</li><li>4：文搜视频（纯文本搜视频），仅 Type 为 1 或 4 时可用</li><li>5：图搜视频、图文搜视频，仅 Type 为 2 或 4 时可用</li></ul>
 */
class GenerateVLEmbeddingRequest extends AbstractModel
{
    /**
     * @var string <p>选择生成向量的模型。取值：</p><ul><li>0：vl-embedding-4b</li><li>1：vl-embedding-8b</li><li>2：vl-embedding-2b</li></ul>
     */
    public $Model;

    /**
     * @var string <p>内容类型标识。取值：</p><ul><li>1：文本</li><li>2：图像 URL</li><li>3：视频 URL</li><li>4：图文混合</li></ul>
     */
    public $Type;

    /**
     * @var string <p>文本内容。仅当 Type 为 1 或 4 时必填，单条文本不超过 2000 字符。</p>
     */
    public $Text;

    /**
     * @var string <p>图像地址，支持公网 http/https 链接或 base64 内容。仅当 Type 为 2 或 4 时必填。</p>
     */
    public $ImageUrl;

    /**
     * @var string <p>视频地址，支持公网 http/https 链接或 base64 内容。仅当 Type 为 3 时必填。</p>
     */
    public $VideoUrl;

    /**
     * @var string <p>检索场景，未传入该参数时将自动匹配。取值：</p><ul><li>0：自动匹配</li><li>1：图搜图（找同款、相似图），仅 Type 为 2 或 4 时可用</li><li>2：图文搜图（图 + 问题），仅 Type 为 4 时可用</li><li>3：文搜图（纯文本搜图），仅 Type 为 1 或 4 时可用</li><li>4：文搜视频（纯文本搜视频），仅 Type 为 1 或 4 时可用</li><li>5：图搜视频、图文搜视频，仅 Type 为 2 或 4 时可用</li></ul>
     */
    public $SearchMode;

    /**
     * @param string $Model <p>选择生成向量的模型。取值：</p><ul><li>0：vl-embedding-4b</li><li>1：vl-embedding-8b</li><li>2：vl-embedding-2b</li></ul>
     * @param string $Type <p>内容类型标识。取值：</p><ul><li>1：文本</li><li>2：图像 URL</li><li>3：视频 URL</li><li>4：图文混合</li></ul>
     * @param string $Text <p>文本内容。仅当 Type 为 1 或 4 时必填，单条文本不超过 2000 字符。</p>
     * @param string $ImageUrl <p>图像地址，支持公网 http/https 链接或 base64 内容。仅当 Type 为 2 或 4 时必填。</p>
     * @param string $VideoUrl <p>视频地址，支持公网 http/https 链接或 base64 内容。仅当 Type 为 3 时必填。</p>
     * @param string $SearchMode <p>检索场景，未传入该参数时将自动匹配。取值：</p><ul><li>0：自动匹配</li><li>1：图搜图（找同款、相似图），仅 Type 为 2 或 4 时可用</li><li>2：图文搜图（图 + 问题），仅 Type 为 4 时可用</li><li>3：文搜图（纯文本搜图），仅 Type 为 1 或 4 时可用</li><li>4：文搜视频（纯文本搜视频），仅 Type 为 1 或 4 时可用</li><li>5：图搜视频、图文搜视频，仅 Type 为 2 或 4 时可用</li></ul>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("SearchMode",$param) and $param["SearchMode"] !== null) {
            $this->SearchMode = $param["SearchMode"];
        }
    }
}
