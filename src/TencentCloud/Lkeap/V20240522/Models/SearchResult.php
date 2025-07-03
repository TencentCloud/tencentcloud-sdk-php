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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 搜索结果
 *
 * @method integer getIndex() 获取索引
 * @method void setIndex(integer $Index) 设置索引
 * @method string getUrl() 获取链接地址
 * @method void setUrl(string $Url) 设置链接地址
 * @method string getName() 获取标题
 * @method void setName(string $Name) 设置标题
 * @method string getSnippet() 获取摘要
 * @method void setSnippet(string $Snippet) 设置摘要
 * @method string getIcon() 获取图标
 * @method void setIcon(string $Icon) 设置图标
 * @method string getSite() 获取站点
 * @method void setSite(string $Site) 设置站点
 * @method integer getPublishedTime() 获取1740412800
 * @method void setPublishedTime(integer $PublishedTime) 设置1740412800
 */
class SearchResult extends AbstractModel
{
    /**
     * @var integer 索引
     */
    public $Index;

    /**
     * @var string 链接地址
     */
    public $Url;

    /**
     * @var string 标题
     */
    public $Name;

    /**
     * @var string 摘要
     */
    public $Snippet;

    /**
     * @var string 图标
     */
    public $Icon;

    /**
     * @var string 站点
     */
    public $Site;

    /**
     * @var integer 1740412800
     */
    public $PublishedTime;

    /**
     * @param integer $Index 索引
     * @param string $Url 链接地址
     * @param string $Name 标题
     * @param string $Snippet 摘要
     * @param string $Icon 图标
     * @param string $Site 站点
     * @param integer $PublishedTime 1740412800
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Snippet",$param) and $param["Snippet"] !== null) {
            $this->Snippet = $param["Snippet"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("Site",$param) and $param["Site"] !== null) {
            $this->Site = $param["Site"];
        }

        if (array_key_exists("PublishedTime",$param) and $param["PublishedTime"] !== null) {
            $this->PublishedTime = $param["PublishedTime"];
        }
    }
}
