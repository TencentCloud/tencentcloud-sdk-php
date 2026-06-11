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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件分片
 *
 * @method string getId() 获取<p>切片ID</p>
 * @method void setId(string $Id) 设置<p>切片ID</p>
 * @method string getContent() 获取<p>切片内容</p>
 * @method void setContent(string $Content) 设置<p>切片内容</p>
 * @method integer getSize() 获取<p>切片的字数</p>
 * @method void setSize(integer $Size) 设置<p>切片的字数</p>
 * @method string getSummary() 获取<p>切片概要</p>
 * @method void setSummary(string $Summary) 设置<p>切片概要</p>
 * @method integer getChunkSource() 获取<p>分段类型</p><p>枚举值：</p><ul><li>0： 自动分段</li><li>1： 新建分段</li></ul>
 * @method void setChunkSource(integer $ChunkSource) 设置<p>分段类型</p><p>枚举值：</p><ul><li>0： 自动分段</li><li>1： 新建分段</li></ul>
 */
class Chunk extends AbstractModel
{
    /**
     * @var string <p>切片ID</p>
     */
    public $Id;

    /**
     * @var string <p>切片内容</p>
     */
    public $Content;

    /**
     * @var integer <p>切片的字数</p>
     */
    public $Size;

    /**
     * @var string <p>切片概要</p>
     */
    public $Summary;

    /**
     * @var integer <p>分段类型</p><p>枚举值：</p><ul><li>0： 自动分段</li><li>1： 新建分段</li></ul>
     */
    public $ChunkSource;

    /**
     * @param string $Id <p>切片ID</p>
     * @param string $Content <p>切片内容</p>
     * @param integer $Size <p>切片的字数</p>
     * @param string $Summary <p>切片概要</p>
     * @param integer $ChunkSource <p>分段类型</p><p>枚举值：</p><ul><li>0： 自动分段</li><li>1： 新建分段</li></ul>
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

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("ChunkSource",$param) and $param["ChunkSource"] !== null) {
            $this->ChunkSource = $param["ChunkSource"];
        }
    }
}
