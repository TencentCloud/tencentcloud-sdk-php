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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档分片配置
 *
 * @method integer getMaxChunkSize() 获取按照分隔符切片后，对分片长度会进行校验，当超过最大分片长度时，则用下一级分隔符分割，如无下一级分隔符，则保留原长度；默认值：1000
 * @method void setMaxChunkSize(integer $MaxChunkSize) 设置按照分隔符切片后，对分片长度会进行校验，当超过最大分片长度时，则用下一级分隔符分割，如无下一级分隔符，则保留原长度；默认值：1000
 * @method array getDelimiters() 获取分隔符列表，优先靠前的分隔符；文件类型为TXT时，默认值：["\n\n", "\n", "。", "！", "？", "，", ""]
 * @method void setDelimiters(array $Delimiters) 设置分隔符列表，优先靠前的分隔符；文件类型为TXT时，默认值：["\n\n", "\n", "。", "！", "？", "，", ""]
 * @method integer getChunkOverlap() 获取相邻切片重合字符数，需要小于分片长度，若形成完全冗余的切片，则会自动过滤；默认值：0.2*MaxChunkSize
 * @method void setChunkOverlap(integer $ChunkOverlap) 设置相邻切片重合字符数，需要小于分片长度，若形成完全冗余的切片，则会自动过滤；默认值：0.2*MaxChunkSize
 */
class ChunkConfig extends AbstractModel
{
    /**
     * @var integer 按照分隔符切片后，对分片长度会进行校验，当超过最大分片长度时，则用下一级分隔符分割，如无下一级分隔符，则保留原长度；默认值：1000
     */
    public $MaxChunkSize;

    /**
     * @var array 分隔符列表，优先靠前的分隔符；文件类型为TXT时，默认值：["\n\n", "\n", "。", "！", "？", "，", ""]
     */
    public $Delimiters;

    /**
     * @var integer 相邻切片重合字符数，需要小于分片长度，若形成完全冗余的切片，则会自动过滤；默认值：0.2*MaxChunkSize
     */
    public $ChunkOverlap;

    /**
     * @param integer $MaxChunkSize 按照分隔符切片后，对分片长度会进行校验，当超过最大分片长度时，则用下一级分隔符分割，如无下一级分隔符，则保留原长度；默认值：1000
     * @param array $Delimiters 分隔符列表，优先靠前的分隔符；文件类型为TXT时，默认值：["\n\n", "\n", "。", "！", "？", "，", ""]
     * @param integer $ChunkOverlap 相邻切片重合字符数，需要小于分片长度，若形成完全冗余的切片，则会自动过滤；默认值：0.2*MaxChunkSize
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
        if (array_key_exists("MaxChunkSize",$param) and $param["MaxChunkSize"] !== null) {
            $this->MaxChunkSize = $param["MaxChunkSize"];
        }

        if (array_key_exists("Delimiters",$param) and $param["Delimiters"] !== null) {
            $this->Delimiters = $param["Delimiters"];
        }

        if (array_key_exists("ChunkOverlap",$param) and $param["ChunkOverlap"] !== null) {
            $this->ChunkOverlap = $param["ChunkOverlap"];
        }
    }
}
