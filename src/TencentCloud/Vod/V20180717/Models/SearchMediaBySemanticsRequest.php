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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchMediaBySemantics请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method string getText() 获取需要进行搜索的内容
 * @method void setText(string $Text) 设置需要进行搜索的内容
 * @method integer getLimit() 获取返回的记录条数，默认值：20。
 * @method void setLimit(integer $Limit) 设置返回的记录条数，默认值：20。
 * @method array getCategories() 获取文件类型。匹配集合中的任意元素： <li>Video: 视频文件</li> <li>Audio: 音频文件</li> <li>Image: 图片文件</li>
 * @method void setCategories(array $Categories) 设置文件类型。匹配集合中的任意元素： <li>Video: 视频文件</li> <li>Audio: 音频文件</li> <li>Image: 图片文件</li>
 * @method array getTags() 获取标签集合，匹配集合中任意元素。 <li>单个标签长度限制：32个字符。</li> <li>数组长度限制：16。</li>
 * @method void setTags(array $Tags) 设置标签集合，匹配集合中任意元素。 <li>单个标签长度限制：32个字符。</li> <li>数组长度限制：16。</li>
 * @method array getTaskTypes() 获取搜索的任务类型，可选值有： 
- AiAnalysis.DescriptionTask 
- SmartSubtitle.AsrFullTextTask
 * @method void setTaskTypes(array $TaskTypes) 设置搜索的任务类型，可选值有： 
- AiAnalysis.DescriptionTask 
- SmartSubtitle.AsrFullTextTask
 */
class SearchMediaBySemanticsRequest extends AbstractModel
{
    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 需要进行搜索的内容
     */
    public $Text;

    /**
     * @var integer 返回的记录条数，默认值：20。
     */
    public $Limit;

    /**
     * @var array 文件类型。匹配集合中的任意元素： <li>Video: 视频文件</li> <li>Audio: 音频文件</li> <li>Image: 图片文件</li>
     */
    public $Categories;

    /**
     * @var array 标签集合，匹配集合中任意元素。 <li>单个标签长度限制：32个字符。</li> <li>数组长度限制：16。</li>
     */
    public $Tags;

    /**
     * @var array 搜索的任务类型，可选值有： 
- AiAnalysis.DescriptionTask 
- SmartSubtitle.AsrFullTextTask
     */
    public $TaskTypes;

    /**
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param string $Text 需要进行搜索的内容
     * @param integer $Limit 返回的记录条数，默认值：20。
     * @param array $Categories 文件类型。匹配集合中的任意元素： <li>Video: 视频文件</li> <li>Audio: 音频文件</li> <li>Image: 图片文件</li>
     * @param array $Tags 标签集合，匹配集合中任意元素。 <li>单个标签长度限制：32个字符。</li> <li>数组长度限制：16。</li>
     * @param array $TaskTypes 搜索的任务类型，可选值有： 
- AiAnalysis.DescriptionTask 
- SmartSubtitle.AsrFullTextTask
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Categories",$param) and $param["Categories"] !== null) {
            $this->Categories = $param["Categories"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }
    }
}
