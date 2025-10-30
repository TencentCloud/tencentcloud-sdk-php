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
 * 搜索结果网页信息。
 *
 * @method string getQuery() 获取搜素问题	
 * @method void setQuery(string $Query) 设置搜素问题	
 * @method string getTitle() 获取标题
 * @method void setTitle(string $Title) 设置标题
 * @method string getUrl() 获取链接
 * @method void setUrl(string $Url) 设置链接
 * @method string getTime() 获取时间
 * @method void setTime(string $Time) 设置时间
 * @method string getContent() 获取网页内容	
 * @method void setContent(string $Content) 设置网页内容	
 * @method string getChunkIndex() 获取切片索引
 * @method void setChunkIndex(string $ChunkIndex) 设置切片索引
 * @method string getScore() 获取分数
 * @method void setScore(string $Score) 设置分数
 */
class WebContent extends AbstractModel
{
    /**
     * @var string 搜素问题	
     */
    public $Query;

    /**
     * @var string 标题
     */
    public $Title;

    /**
     * @var string 链接
     */
    public $Url;

    /**
     * @var string 时间
     */
    public $Time;

    /**
     * @var string 网页内容	
     */
    public $Content;

    /**
     * @var string 切片索引
     */
    public $ChunkIndex;

    /**
     * @var string 分数
     */
    public $Score;

    /**
     * @param string $Query 搜素问题	
     * @param string $Title 标题
     * @param string $Url 链接
     * @param string $Time 时间
     * @param string $Content 网页内容	
     * @param string $ChunkIndex 切片索引
     * @param string $Score 分数
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

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ChunkIndex",$param) and $param["ChunkIndex"] !== null) {
            $this->ChunkIndex = $param["ChunkIndex"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
