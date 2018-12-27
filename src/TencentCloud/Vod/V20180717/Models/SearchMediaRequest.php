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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getText() 获取搜索文本，模糊匹配媒体文件名称或描述信息，匹配项越多，匹配度越高，排序越优先。长度限制：64 个字符。
 * @method void setText(string $Text) 设置搜索文本，模糊匹配媒体文件名称或描述信息，匹配项越多，匹配度越高，排序越优先。长度限制：64 个字符。
 * @method array getTags() 获取标签集合，匹配集合中任意元素。
<li>单个标签长度限制：8 个字符。</li>
<li>数组长度限制：10。</li>
 * @method void setTags(array $Tags) 设置标签集合，匹配集合中任意元素。
<li>单个标签长度限制：8 个字符。</li>
<li>数组长度限制：10。</li>
 * @method array getClassIds() 获取分类 ID 集合，匹配集合指定 ID 的分类及其所有子类。数组长度限制：10。
 * @method void setClassIds(array $ClassIds) 设置分类 ID 集合，匹配集合指定 ID 的分类及其所有子类。数组长度限制：10。
 * @method string getStartTime() 获取创建时间的开始时间。
<li>大于等于开始时间。</li>
<li>格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。</li>
 * @method void setStartTime(string $StartTime) 设置创建时间的开始时间。
<li>大于等于开始时间。</li>
<li>格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。</li>
 * @method string getEndTime() 获取创建时间的结束时间。
<li>小于结束时间。</li>
<li>格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。</li>
 * @method void setEndTime(string $EndTime) 设置创建时间的结束时间。
<li>小于结束时间。</li>
<li>格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。</li>
 * @method string getSourceType() 获取媒体文件来源，来源取值参见 [SourceType](https://cloud.tencent.com/document/product/266/31773#MediaSourceData)。
 * @method void setSourceType(string $SourceType) 设置媒体文件来源，来源取值参见 [SourceType](https://cloud.tencent.com/document/product/266/31773#MediaSourceData)。
 * @method string getStreamId() 获取推流[直播码](https://cloud.tencent.com/document/product/267/5959)。
 * @method void setStreamId(string $StreamId) 设置推流[直播码](https://cloud.tencent.com/document/product/267/5959)。
 * @method string getVid() 获取直播录制文件的唯一标识。
 * @method void setVid(string $Vid) 设置直播录制文件的唯一标识。
 * @method SortBy getSort() 获取排序方式。
<li>Sort.Field 可选值：CreateTime</li>
<li>指定 Text 搜索时，将根据匹配度排序，该字段无效</li>
 * @method void setSort(SortBy $Sort) 设置排序方式。
<li>Sort.Field 可选值：CreateTime</li>
<li>指定 Text 搜索时，将根据匹配度排序，该字段无效</li>
 * @method integer getOffset() 获取偏移量。
<li>默认值：0。</li>
<li>取值范围：Offset + Limit 不超过 5000。</li>
 * @method void setOffset(integer $Offset) 设置偏移量。
<li>默认值：0。</li>
<li>取值范围：Offset + Limit 不超过 5000。</li>
 * @method integer getLimit() 获取返回记录条数，默认值：10。
 * @method void setLimit(integer $Limit) 设置返回记录条数，默认值：10。
 * @method integer getSubAppId() 获取点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 * @method void setSubAppId(integer $SubAppId) 设置点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 */

/**
 *SearchMedia请求参数结构体
 */
class SearchMediaRequest extends AbstractModel
{
    /**
     * @var string 搜索文本，模糊匹配媒体文件名称或描述信息，匹配项越多，匹配度越高，排序越优先。长度限制：64 个字符。
     */
    public $Text;

    /**
     * @var array 标签集合，匹配集合中任意元素。
<li>单个标签长度限制：8 个字符。</li>
<li>数组长度限制：10。</li>
     */
    public $Tags;

    /**
     * @var array 分类 ID 集合，匹配集合指定 ID 的分类及其所有子类。数组长度限制：10。
     */
    public $ClassIds;

    /**
     * @var string 创建时间的开始时间。
<li>大于等于开始时间。</li>
<li>格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。</li>
     */
    public $StartTime;

    /**
     * @var string 创建时间的结束时间。
<li>小于结束时间。</li>
<li>格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。</li>
     */
    public $EndTime;

    /**
     * @var string 媒体文件来源，来源取值参见 [SourceType](https://cloud.tencent.com/document/product/266/31773#MediaSourceData)。
     */
    public $SourceType;

    /**
     * @var string 推流[直播码](https://cloud.tencent.com/document/product/267/5959)。
     */
    public $StreamId;

    /**
     * @var string 直播录制文件的唯一标识。
     */
    public $Vid;

    /**
     * @var SortBy 排序方式。
<li>Sort.Field 可选值：CreateTime</li>
<li>指定 Text 搜索时，将根据匹配度排序，该字段无效</li>
     */
    public $Sort;

    /**
     * @var integer 偏移量。
<li>默认值：0。</li>
<li>取值范围：Offset + Limit 不超过 5000。</li>
     */
    public $Offset;

    /**
     * @var integer 返回记录条数，默认值：10。
     */
    public $Limit;

    /**
     * @var integer 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
     */
    public $SubAppId;
    /**
     * @param string $Text 搜索文本，模糊匹配媒体文件名称或描述信息，匹配项越多，匹配度越高，排序越优先。长度限制：64 个字符。
     * @param array $Tags 标签集合，匹配集合中任意元素。
<li>单个标签长度限制：8 个字符。</li>
<li>数组长度限制：10。</li>
     * @param array $ClassIds 分类 ID 集合，匹配集合指定 ID 的分类及其所有子类。数组长度限制：10。
     * @param string $StartTime 创建时间的开始时间。
<li>大于等于开始时间。</li>
<li>格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。</li>
     * @param string $EndTime 创建时间的结束时间。
<li>小于结束时间。</li>
<li>格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。</li>
     * @param string $SourceType 媒体文件来源，来源取值参见 [SourceType](https://cloud.tencent.com/document/product/266/31773#MediaSourceData)。
     * @param string $StreamId 推流[直播码](https://cloud.tencent.com/document/product/267/5959)。
     * @param string $Vid 直播录制文件的唯一标识。
     * @param SortBy $Sort 排序方式。
<li>Sort.Field 可选值：CreateTime</li>
<li>指定 Text 搜索时，将根据匹配度排序，该字段无效</li>
     * @param integer $Offset 偏移量。
<li>默认值：0。</li>
<li>取值范围：Offset + Limit 不超过 5000。</li>
     * @param integer $Limit 返回记录条数，默认值：10。
     * @param integer $SubAppId 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("ClassIds",$param) and $param["ClassIds"] !== null) {
            $this->ClassIds = $param["ClassIds"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("Vid",$param) and $param["Vid"] !== null) {
            $this->Vid = $param["Vid"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new SortBy();
            $this->Sort->deserialize($param["Sort"]);
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
