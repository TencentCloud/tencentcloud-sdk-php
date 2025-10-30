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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadLog请求参数结构体
 *
 * @method string getTopicId() 获取日志主题id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
 * @method void setTopicId(string $TopicId) 设置日志主题id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
 * @method string getHashKey() 获取该参数已废弃，请勿使用
 * @method void setHashKey(string $HashKey) 设置该参数已废弃，请勿使用
 * @method string getCompressType() 获取压缩方法，目前支持
- lz4
- zstd
 * @method void setCompressType(string $CompressType) 设置压缩方法，目前支持
- lz4
- zstd
 */
class UploadLogRequest extends AbstractModel
{
    /**
     * @var string 日志主题id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
     */
    public $TopicId;

    /**
     * @var string 该参数已废弃，请勿使用
     * @deprecated
     */
    public $HashKey;

    /**
     * @var string 压缩方法，目前支持
- lz4
- zstd
     */
    public $CompressType;

    /**
     * @param string $TopicId 日志主题id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
     * @param string $HashKey 该参数已废弃，请勿使用
     * @param string $CompressType 压缩方法，目前支持
- lz4
- zstd
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("HashKey",$param) and $param["HashKey"] !== null) {
            $this->HashKey = $param["HashKey"];
        }

        if (array_key_exists("CompressType",$param) and $param["CompressType"] !== null) {
            $this->CompressType = $param["CompressType"];
        }
    }
}
