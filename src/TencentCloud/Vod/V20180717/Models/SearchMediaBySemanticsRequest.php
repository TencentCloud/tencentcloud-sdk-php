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
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getText() 获取<p>需要进行搜索的内容</p>
 * @method void setText(string $Text) 设置<p>需要进行搜索的内容</p>
 * @method integer getLimit() 获取<p>返回的记录条数，默认值：20。</p><p>取值范围：[1, 100]</p>
 * @method void setLimit(integer $Limit) 设置<p>返回的记录条数，默认值：20。</p><p>取值范围：[1, 100]</p>
 * @method array getCategories() 获取<p>文件类型。匹配集合中的任意元素： <li>Video: 视频文件</li> <li>Audio: 音频文件</li> <li>Image: 图片文件</li></p>
 * @method void setCategories(array $Categories) 设置<p>文件类型。匹配集合中的任意元素： <li>Video: 视频文件</li> <li>Audio: 音频文件</li> <li>Image: 图片文件</li></p>
 * @method array getTags() 获取<p>标签集合，匹配集合中任意元素。</p><p>入参限制：单个标签长度限制：32个字符。数组长度限制：16。</p>
 * @method void setTags(array $Tags) 设置<p>标签集合，匹配集合中任意元素。</p><p>入参限制：单个标签长度限制：32个字符。数组长度限制：16。</p>
 * @method array getPersons() 获取<p>人物集合，匹配出现了所有传入人物的片段</p><p>入参限制：数组长度限制：16</p>
 * @method void setPersons(array $Persons) 设置<p>人物集合，匹配出现了所有传入人物的片段</p><p>入参限制：数组长度限制：16</p>
 * @method array getTaskTypes() 获取<p>搜索的任务类型，可选值有： </p><ul><li>AiAnalysis.DescriptionTask </li><li>SmartSubtitle.AsrFullTextTask</li></ul>
 * @method void setTaskTypes(array $TaskTypes) 设置<p>搜索的任务类型，可选值有： </p><ul><li>AiAnalysis.DescriptionTask </li><li>SmartSubtitle.AsrFullTextTask</li></ul>
 */
class SearchMediaBySemanticsRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>需要进行搜索的内容</p>
     */
    public $Text;

    /**
     * @var integer <p>返回的记录条数，默认值：20。</p><p>取值范围：[1, 100]</p>
     */
    public $Limit;

    /**
     * @var array <p>文件类型。匹配集合中的任意元素： <li>Video: 视频文件</li> <li>Audio: 音频文件</li> <li>Image: 图片文件</li></p>
     */
    public $Categories;

    /**
     * @var array <p>标签集合，匹配集合中任意元素。</p><p>入参限制：单个标签长度限制：32个字符。数组长度限制：16。</p>
     */
    public $Tags;

    /**
     * @var array <p>人物集合，匹配出现了所有传入人物的片段</p><p>入参限制：数组长度限制：16</p>
     */
    public $Persons;

    /**
     * @var array <p>搜索的任务类型，可选值有： </p><ul><li>AiAnalysis.DescriptionTask </li><li>SmartSubtitle.AsrFullTextTask</li></ul>
     */
    public $TaskTypes;

    /**
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $Text <p>需要进行搜索的内容</p>
     * @param integer $Limit <p>返回的记录条数，默认值：20。</p><p>取值范围：[1, 100]</p>
     * @param array $Categories <p>文件类型。匹配集合中的任意元素： <li>Video: 视频文件</li> <li>Audio: 音频文件</li> <li>Image: 图片文件</li></p>
     * @param array $Tags <p>标签集合，匹配集合中任意元素。</p><p>入参限制：单个标签长度限制：32个字符。数组长度限制：16。</p>
     * @param array $Persons <p>人物集合，匹配出现了所有传入人物的片段</p><p>入参限制：数组长度限制：16</p>
     * @param array $TaskTypes <p>搜索的任务类型，可选值有： </p><ul><li>AiAnalysis.DescriptionTask </li><li>SmartSubtitle.AsrFullTextTask</li></ul>
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

        if (array_key_exists("Persons",$param) and $param["Persons"] !== null) {
            $this->Persons = $param["Persons"];
        }

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }
    }
}
