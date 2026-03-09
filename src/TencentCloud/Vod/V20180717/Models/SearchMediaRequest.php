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
 * SearchMedia请求参数结构体
 *
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method array getFileIds() 获取<p>文件 ID 集合，匹配集合中的任意元素。</p><li>数组长度限制：10。</li><li>单个 ID 长度限制：40个字符。</li>
 * @method void setFileIds(array $FileIds) 设置<p>文件 ID 集合，匹配集合中的任意元素。</p><li>数组长度限制：10。</li><li>单个 ID 长度限制：40个字符。</li>
 * @method array getNames() 获取<p>文件名集合，模糊匹配媒体文件的文件名，匹配度越高，排序越优先。</p><li>单个文件名长度限制：100个字符。</li><li>数组长度限制：10。</li>
 * @method void setNames(array $Names) 设置<p>文件名集合，模糊匹配媒体文件的文件名，匹配度越高，排序越优先。</p><li>单个文件名长度限制：100个字符。</li><li>数组长度限制：10。</li>
 * @method array getNamePrefixes() 获取<p>文件名前缀，前缀匹配媒体文件的文件名。</p><li>单个文件名前缀长度限制：100个字符。</li><li>数组长度限制：10。</li>
 * @method void setNamePrefixes(array $NamePrefixes) 设置<p>文件名前缀，前缀匹配媒体文件的文件名。</p><li>单个文件名前缀长度限制：100个字符。</li><li>数组长度限制：10。</li>
 * @method array getDescriptions() 获取<p>文件描述集合，模糊匹配媒体文件的描述，匹配度越高，排序越优先。</p><li>单个描述长度限制：100个字符。</li><li>数组长度限制：10。</li>
 * @method void setDescriptions(array $Descriptions) 设置<p>文件描述集合，模糊匹配媒体文件的描述，匹配度越高，排序越优先。</p><li>单个描述长度限制：100个字符。</li><li>数组长度限制：10。</li>
 * @method array getClassIds() 获取<p>分类 ID 集合，匹配集合指定 ID 的分类及其所有子类。</p><li>数组长度限制：10。</li>
 * @method void setClassIds(array $ClassIds) 设置<p>分类 ID 集合，匹配集合指定 ID 的分类及其所有子类。</p><li>数组长度限制：10。</li>
 * @method array getTags() 获取<p>标签集合，匹配集合中任意元素。</p><li>单个标签长度限制：32个字符。</li><li>数组长度限制：16。</li>
 * @method void setTags(array $Tags) 设置<p>标签集合，匹配集合中任意元素。</p><li>单个标签长度限制：32个字符。</li><li>数组长度限制：16。</li>
 * @method array getCategories() 获取<p>文件类型。匹配集合中的任意元素：</p><li>Video: 视频文件</li><li>Audio: 音频文件</li><li>Image: 图片文件</li>
 * @method void setCategories(array $Categories) 设置<p>文件类型。匹配集合中的任意元素：</p><li>Video: 视频文件</li><li>Audio: 音频文件</li><li>Image: 图片文件</li>
 * @method array getSourceTypes() 获取<p>媒体文件来源集合，来源取值参见 <a href="https://cloud.tencent.com/document/product/266/31773#MediaSourceData">SourceType</a>。</p><li>数组长度限制：10。</li>
 * @method void setSourceTypes(array $SourceTypes) 设置<p>媒体文件来源集合，来源取值参见 <a href="https://cloud.tencent.com/document/product/266/31773#MediaSourceData">SourceType</a>。</p><li>数组长度限制：10。</li>
 * @method array getStreamIds() 获取<p>推流直播码集合。匹配集合中的任意元素。</p><li>数组长度限制：10。</li>
 * @method void setStreamIds(array $StreamIds) 设置<p>推流直播码集合。匹配集合中的任意元素。</p><li>数组长度限制：10。</li>
 * @method TimeRange getCreateTime() 获取<p>匹配创建时间在此时间段内的文件。</p><li>包含所指定的头尾时间点。</li>
 * @method void setCreateTime(TimeRange $CreateTime) 设置<p>匹配创建时间在此时间段内的文件。</p><li>包含所指定的头尾时间点。</li>
 * @method TimeRange getExpireTime() 获取<p>匹配过期时间在此时间段内的文件，无法检索到已过期文件。</p><li>包含所指定的头尾时间点。</li>
 * @method void setExpireTime(TimeRange $ExpireTime) 设置<p>匹配过期时间在此时间段内的文件，无法检索到已过期文件。</p><li>包含所指定的头尾时间点。</li>
 * @method array getStorageRegions() 获取<p>媒体文件存储地区，如 ap-chongqing，参见<a href="https://cloud.tencent.com/document/product/266/9760#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">地域列表</a>。</p><li>单个存储地区长度限制：20个字符。</li><li>数组长度限制：20。</li>
 * @method void setStorageRegions(array $StorageRegions) 设置<p>媒体文件存储地区，如 ap-chongqing，参见<a href="https://cloud.tencent.com/document/product/266/9760#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">地域列表</a>。</p><li>单个存储地区长度限制：20个字符。</li><li>数组长度限制：20。</li>
 * @method array getStorageClasses() 获取<p>存储类型数组。可选值有：</p><li> STANDARD：标准存储。</li><li> STANDARD_IA：低频存储。</li><li> ARCHIVE：归档存储。</li><li> DEEP_ARCHIVE：深度归档存储。</li>
 * @method void setStorageClasses(array $StorageClasses) 设置<p>存储类型数组。可选值有：</p><li> STANDARD：标准存储。</li><li> STANDARD_IA：低频存储。</li><li> ARCHIVE：归档存储。</li><li> DEEP_ARCHIVE：深度归档存储。</li>
 * @method array getMediaTypes() 获取<p>媒体文件封装格式集合，匹配集合中任意元素。</p><li>数组长度限制：10。</li>
 * @method void setMediaTypes(array $MediaTypes) 设置<p>媒体文件封装格式集合，匹配集合中任意元素。</p><li>数组长度限制：10。</li>
 * @method array getStatus() 获取<p>媒体文件状态，匹配集合中任意元素。</p><li> Normal：正常；</li><li> SystemForbidden：平台封禁；</li><li> Forbidden：主动封禁。</li>
 * @method void setStatus(array $Status) 设置<p>媒体文件状态，匹配集合中任意元素。</p><li> Normal：正常；</li><li> SystemForbidden：平台封禁；</li><li> Forbidden：主动封禁。</li>
 * @method array getReviewResults() 获取<p>媒体文件审核结果，匹配集合中任意元素。</p><li> pass：审核通过；</li><li> review：疑似违规，建议复审；</li><li> block：确认违规，建议封禁；</li><li> notModerated：未审核。</li>
 * @method void setReviewResults(array $ReviewResults) 设置<p>媒体文件审核结果，匹配集合中任意元素。</p><li> pass：审核通过；</li><li> review：疑似违规，建议复审；</li><li> block：确认违规，建议封禁；</li><li> notModerated：未审核。</li>
 * @method array getTrtcSdkAppIds() 获取<p>TRTC 应用 ID 集合。匹配集合中的任意元素。</p><li>数组长度限制：10。</li>
 * @method void setTrtcSdkAppIds(array $TrtcSdkAppIds) 设置<p>TRTC 应用 ID 集合。匹配集合中的任意元素。</p><li>数组长度限制：10。</li>
 * @method array getTrtcRoomIds() 获取<p>TRTC 房间 ID 集合。匹配集合中的任意元素。</p><li>单个房间 ID 长度限制：64个字符；</li><li>数组长度限制：10。</li>
 * @method void setTrtcRoomIds(array $TrtcRoomIds) 设置<p>TRTC 房间 ID 集合。匹配集合中的任意元素。</p><li>单个房间 ID 长度限制：64个字符；</li><li>数组长度限制：10。</li>
 * @method array getFilters() 获取<p>指定所有媒体文件需要返回的信息，可同时指定多个信息，N 从 0 开始递增。如果未填写该字段，默认返回所有信息。选项有：</p><li>basicInfo（视频基础信息）。</li><li>metaData（视频元信息）。</li><li>transcodeInfo（视频转码结果信息）。</li><li>animatedGraphicsInfo（视频转动图结果信息）。</li><li>imageSpriteInfo（视频雪碧图信息）。</li><li>snapshotByTimeOffsetInfo（视频指定时间点截图信息）。</li><li>sampleSnapshotInfo（采样截图信息）。</li><li>keyFrameDescInfo（打点信息）。</li><li>adaptiveDynamicStreamingInfo（转自适应码流信息）。</li><li>miniProgramReviewInfo（小程序审核信息）。</li>
 * @method void setFilters(array $Filters) 设置<p>指定所有媒体文件需要返回的信息，可同时指定多个信息，N 从 0 开始递增。如果未填写该字段，默认返回所有信息。选项有：</p><li>basicInfo（视频基础信息）。</li><li>metaData（视频元信息）。</li><li>transcodeInfo（视频转码结果信息）。</li><li>animatedGraphicsInfo（视频转动图结果信息）。</li><li>imageSpriteInfo（视频雪碧图信息）。</li><li>snapshotByTimeOffsetInfo（视频指定时间点截图信息）。</li><li>sampleSnapshotInfo（采样截图信息）。</li><li>keyFrameDescInfo（打点信息）。</li><li>adaptiveDynamicStreamingInfo（转自适应码流信息）。</li><li>miniProgramReviewInfo（小程序审核信息）。</li>
 * @method SortBy getSort() 获取<p>排序方式。</p><li>Sort.Field 可选 CreateTime 。</li><li>当 Text、 Names 或 Descriptions 不为空时，Sort.Field 字段无效， 搜索结果将以匹配度排序。</li>
 * @method void setSort(SortBy $Sort) 设置<p>排序方式。</p><li>Sort.Field 可选 CreateTime 。</li><li>当 Text、 Names 或 Descriptions 不为空时，Sort.Field 字段无效， 搜索结果将以匹配度排序。</li>
 * @method integer getOffset() 获取<div id="p_offset">分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。<li>取值范围：Offset + Limit 不超过5000。（参见：<a href="#maxResultsDesc">接口返回结果数限制</a>）</li></div>
 * @method void setOffset(integer $Offset) 设置<div id="p_offset">分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。<li>取值范围：Offset + Limit 不超过5000。（参见：<a href="#maxResultsDesc">接口返回结果数限制</a>）</li></div>
 * @method integer getLimit() 获取<div id="p_limit">分页返回的记录条数，默认值：10。将返回第 Offset 到第 Offset+Limit-1 条。<li>取值范围：Offset + Limit 不超过5000。（参见：<a href="#maxResultsDesc">接口返回结果数限制</a>）</li></div>
 * @method void setLimit(integer $Limit) 设置<div id="p_limit">分页返回的记录条数，默认值：10。将返回第 Offset 到第 Offset+Limit-1 条。<li>取值范围：Offset + Limit 不超过5000。（参见：<a href="#maxResultsDesc">接口返回结果数限制</a>）</li></div>
 * @method string getText() 获取<p>（不推荐：应使用 Names、NamePrefixes 或 Descriptions 替代）<br>搜索文本，模糊匹配媒体文件名称或描述信息，匹配项越多，匹配度越高，排序越优先。长度限制：64个字符。</p>
 * @method void setText(string $Text) 设置<p>（不推荐：应使用 Names、NamePrefixes 或 Descriptions 替代）<br>搜索文本，模糊匹配媒体文件名称或描述信息，匹配项越多，匹配度越高，排序越优先。长度限制：64个字符。</p>
 * @method string getSourceType() 获取<p>（不推荐：应使用 SourceTypes 替代）<br>媒体文件来源，来源取值参见 <a href="https://cloud.tencent.com/document/product/266/31773#MediaSourceData">SourceType</a>。</p>
 * @method void setSourceType(string $SourceType) 设置<p>（不推荐：应使用 SourceTypes 替代）<br>媒体文件来源，来源取值参见 <a href="https://cloud.tencent.com/document/product/266/31773#MediaSourceData">SourceType</a>。</p>
 * @method string getStreamId() 获取<p>（不推荐：应使用 StreamIds 替代）<br>推流直播码。</p>
 * @method void setStreamId(string $StreamId) 设置<p>（不推荐：应使用 StreamIds 替代）<br>推流直播码。</p>
 * @method string getStartTime() 获取<p>（不推荐：应使用 CreateTime 替代）<br>创建时间的开始时间。</p><li>大于等于开始时间。</li><li>当 CreateTime.After 也存在时，将优先使用 CreateTime.After。</li><li>格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。</li>
 * @method void setStartTime(string $StartTime) 设置<p>（不推荐：应使用 CreateTime 替代）<br>创建时间的开始时间。</p><li>大于等于开始时间。</li><li>当 CreateTime.After 也存在时，将优先使用 CreateTime.After。</li><li>格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。</li>
 * @method string getEndTime() 获取<p>（不推荐：应使用 CreateTime 替代）<br>创建时间的结束时间。</p><li>小于结束时间。</li><li>当 CreateTime.Before 也存在时，将优先使用 CreateTime.Before。</li><li>格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。</li>
 * @method void setEndTime(string $EndTime) 设置<p>（不推荐：应使用 CreateTime 替代）<br>创建时间的结束时间。</p><li>小于结束时间。</li><li>当 CreateTime.Before 也存在时，将优先使用 CreateTime.Before。</li><li>格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。</li>
 * @method array getVids() 获取<p>该字段已无效。</p>
 * @method void setVids(array $Vids) 设置<p>该字段已无效。</p>
 * @method string getVid() 获取<p>该字段已无效。</p>
 * @method void setVid(string $Vid) 设置<p>该字段已无效。</p>
 * @method array getStreamDomains() 获取<p>直播推流Domain，当媒资来源是直播录制时有效。</p>
 * @method void setStreamDomains(array $StreamDomains) 设置<p>直播推流Domain，当媒资来源是直播录制时有效。</p>
 * @method array getStreamPaths() 获取<p>直播推流Path，当媒资来源是直播录制时有效。</p>
 * @method void setStreamPaths(array $StreamPaths) 设置<p>直播推流Path，当媒资来源是直播录制时有效。</p>
 */
class SearchMediaRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var array <p>文件 ID 集合，匹配集合中的任意元素。</p><li>数组长度限制：10。</li><li>单个 ID 长度限制：40个字符。</li>
     */
    public $FileIds;

    /**
     * @var array <p>文件名集合，模糊匹配媒体文件的文件名，匹配度越高，排序越优先。</p><li>单个文件名长度限制：100个字符。</li><li>数组长度限制：10。</li>
     */
    public $Names;

    /**
     * @var array <p>文件名前缀，前缀匹配媒体文件的文件名。</p><li>单个文件名前缀长度限制：100个字符。</li><li>数组长度限制：10。</li>
     */
    public $NamePrefixes;

    /**
     * @var array <p>文件描述集合，模糊匹配媒体文件的描述，匹配度越高，排序越优先。</p><li>单个描述长度限制：100个字符。</li><li>数组长度限制：10。</li>
     */
    public $Descriptions;

    /**
     * @var array <p>分类 ID 集合，匹配集合指定 ID 的分类及其所有子类。</p><li>数组长度限制：10。</li>
     */
    public $ClassIds;

    /**
     * @var array <p>标签集合，匹配集合中任意元素。</p><li>单个标签长度限制：32个字符。</li><li>数组长度限制：16。</li>
     */
    public $Tags;

    /**
     * @var array <p>文件类型。匹配集合中的任意元素：</p><li>Video: 视频文件</li><li>Audio: 音频文件</li><li>Image: 图片文件</li>
     */
    public $Categories;

    /**
     * @var array <p>媒体文件来源集合，来源取值参见 <a href="https://cloud.tencent.com/document/product/266/31773#MediaSourceData">SourceType</a>。</p><li>数组长度限制：10。</li>
     */
    public $SourceTypes;

    /**
     * @var array <p>推流直播码集合。匹配集合中的任意元素。</p><li>数组长度限制：10。</li>
     */
    public $StreamIds;

    /**
     * @var TimeRange <p>匹配创建时间在此时间段内的文件。</p><li>包含所指定的头尾时间点。</li>
     */
    public $CreateTime;

    /**
     * @var TimeRange <p>匹配过期时间在此时间段内的文件，无法检索到已过期文件。</p><li>包含所指定的头尾时间点。</li>
     */
    public $ExpireTime;

    /**
     * @var array <p>媒体文件存储地区，如 ap-chongqing，参见<a href="https://cloud.tencent.com/document/product/266/9760#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">地域列表</a>。</p><li>单个存储地区长度限制：20个字符。</li><li>数组长度限制：20。</li>
     */
    public $StorageRegions;

    /**
     * @var array <p>存储类型数组。可选值有：</p><li> STANDARD：标准存储。</li><li> STANDARD_IA：低频存储。</li><li> ARCHIVE：归档存储。</li><li> DEEP_ARCHIVE：深度归档存储。</li>
     */
    public $StorageClasses;

    /**
     * @var array <p>媒体文件封装格式集合，匹配集合中任意元素。</p><li>数组长度限制：10。</li>
     */
    public $MediaTypes;

    /**
     * @var array <p>媒体文件状态，匹配集合中任意元素。</p><li> Normal：正常；</li><li> SystemForbidden：平台封禁；</li><li> Forbidden：主动封禁。</li>
     */
    public $Status;

    /**
     * @var array <p>媒体文件审核结果，匹配集合中任意元素。</p><li> pass：审核通过；</li><li> review：疑似违规，建议复审；</li><li> block：确认违规，建议封禁；</li><li> notModerated：未审核。</li>
     */
    public $ReviewResults;

    /**
     * @var array <p>TRTC 应用 ID 集合。匹配集合中的任意元素。</p><li>数组长度限制：10。</li>
     */
    public $TrtcSdkAppIds;

    /**
     * @var array <p>TRTC 房间 ID 集合。匹配集合中的任意元素。</p><li>单个房间 ID 长度限制：64个字符；</li><li>数组长度限制：10。</li>
     */
    public $TrtcRoomIds;

    /**
     * @var array <p>指定所有媒体文件需要返回的信息，可同时指定多个信息，N 从 0 开始递增。如果未填写该字段，默认返回所有信息。选项有：</p><li>basicInfo（视频基础信息）。</li><li>metaData（视频元信息）。</li><li>transcodeInfo（视频转码结果信息）。</li><li>animatedGraphicsInfo（视频转动图结果信息）。</li><li>imageSpriteInfo（视频雪碧图信息）。</li><li>snapshotByTimeOffsetInfo（视频指定时间点截图信息）。</li><li>sampleSnapshotInfo（采样截图信息）。</li><li>keyFrameDescInfo（打点信息）。</li><li>adaptiveDynamicStreamingInfo（转自适应码流信息）。</li><li>miniProgramReviewInfo（小程序审核信息）。</li>
     */
    public $Filters;

    /**
     * @var SortBy <p>排序方式。</p><li>Sort.Field 可选 CreateTime 。</li><li>当 Text、 Names 或 Descriptions 不为空时，Sort.Field 字段无效， 搜索结果将以匹配度排序。</li>
     */
    public $Sort;

    /**
     * @var integer <div id="p_offset">分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。<li>取值范围：Offset + Limit 不超过5000。（参见：<a href="#maxResultsDesc">接口返回结果数限制</a>）</li></div>
     */
    public $Offset;

    /**
     * @var integer <div id="p_limit">分页返回的记录条数，默认值：10。将返回第 Offset 到第 Offset+Limit-1 条。<li>取值范围：Offset + Limit 不超过5000。（参见：<a href="#maxResultsDesc">接口返回结果数限制</a>）</li></div>
     */
    public $Limit;

    /**
     * @var string <p>（不推荐：应使用 Names、NamePrefixes 或 Descriptions 替代）<br>搜索文本，模糊匹配媒体文件名称或描述信息，匹配项越多，匹配度越高，排序越优先。长度限制：64个字符。</p>
     */
    public $Text;

    /**
     * @var string <p>（不推荐：应使用 SourceTypes 替代）<br>媒体文件来源，来源取值参见 <a href="https://cloud.tencent.com/document/product/266/31773#MediaSourceData">SourceType</a>。</p>
     */
    public $SourceType;

    /**
     * @var string <p>（不推荐：应使用 StreamIds 替代）<br>推流直播码。</p>
     */
    public $StreamId;

    /**
     * @var string <p>（不推荐：应使用 CreateTime 替代）<br>创建时间的开始时间。</p><li>大于等于开始时间。</li><li>当 CreateTime.After 也存在时，将优先使用 CreateTime.After。</li><li>格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。</li>
     */
    public $StartTime;

    /**
     * @var string <p>（不推荐：应使用 CreateTime 替代）<br>创建时间的结束时间。</p><li>小于结束时间。</li><li>当 CreateTime.Before 也存在时，将优先使用 CreateTime.Before。</li><li>格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。</li>
     */
    public $EndTime;

    /**
     * @var array <p>该字段已无效。</p>
     */
    public $Vids;

    /**
     * @var string <p>该字段已无效。</p>
     */
    public $Vid;

    /**
     * @var array <p>直播推流Domain，当媒资来源是直播录制时有效。</p>
     */
    public $StreamDomains;

    /**
     * @var array <p>直播推流Path，当媒资来源是直播录制时有效。</p>
     */
    public $StreamPaths;

    /**
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param array $FileIds <p>文件 ID 集合，匹配集合中的任意元素。</p><li>数组长度限制：10。</li><li>单个 ID 长度限制：40个字符。</li>
     * @param array $Names <p>文件名集合，模糊匹配媒体文件的文件名，匹配度越高，排序越优先。</p><li>单个文件名长度限制：100个字符。</li><li>数组长度限制：10。</li>
     * @param array $NamePrefixes <p>文件名前缀，前缀匹配媒体文件的文件名。</p><li>单个文件名前缀长度限制：100个字符。</li><li>数组长度限制：10。</li>
     * @param array $Descriptions <p>文件描述集合，模糊匹配媒体文件的描述，匹配度越高，排序越优先。</p><li>单个描述长度限制：100个字符。</li><li>数组长度限制：10。</li>
     * @param array $ClassIds <p>分类 ID 集合，匹配集合指定 ID 的分类及其所有子类。</p><li>数组长度限制：10。</li>
     * @param array $Tags <p>标签集合，匹配集合中任意元素。</p><li>单个标签长度限制：32个字符。</li><li>数组长度限制：16。</li>
     * @param array $Categories <p>文件类型。匹配集合中的任意元素：</p><li>Video: 视频文件</li><li>Audio: 音频文件</li><li>Image: 图片文件</li>
     * @param array $SourceTypes <p>媒体文件来源集合，来源取值参见 <a href="https://cloud.tencent.com/document/product/266/31773#MediaSourceData">SourceType</a>。</p><li>数组长度限制：10。</li>
     * @param array $StreamIds <p>推流直播码集合。匹配集合中的任意元素。</p><li>数组长度限制：10。</li>
     * @param TimeRange $CreateTime <p>匹配创建时间在此时间段内的文件。</p><li>包含所指定的头尾时间点。</li>
     * @param TimeRange $ExpireTime <p>匹配过期时间在此时间段内的文件，无法检索到已过期文件。</p><li>包含所指定的头尾时间点。</li>
     * @param array $StorageRegions <p>媒体文件存储地区，如 ap-chongqing，参见<a href="https://cloud.tencent.com/document/product/266/9760#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">地域列表</a>。</p><li>单个存储地区长度限制：20个字符。</li><li>数组长度限制：20。</li>
     * @param array $StorageClasses <p>存储类型数组。可选值有：</p><li> STANDARD：标准存储。</li><li> STANDARD_IA：低频存储。</li><li> ARCHIVE：归档存储。</li><li> DEEP_ARCHIVE：深度归档存储。</li>
     * @param array $MediaTypes <p>媒体文件封装格式集合，匹配集合中任意元素。</p><li>数组长度限制：10。</li>
     * @param array $Status <p>媒体文件状态，匹配集合中任意元素。</p><li> Normal：正常；</li><li> SystemForbidden：平台封禁；</li><li> Forbidden：主动封禁。</li>
     * @param array $ReviewResults <p>媒体文件审核结果，匹配集合中任意元素。</p><li> pass：审核通过；</li><li> review：疑似违规，建议复审；</li><li> block：确认违规，建议封禁；</li><li> notModerated：未审核。</li>
     * @param array $TrtcSdkAppIds <p>TRTC 应用 ID 集合。匹配集合中的任意元素。</p><li>数组长度限制：10。</li>
     * @param array $TrtcRoomIds <p>TRTC 房间 ID 集合。匹配集合中的任意元素。</p><li>单个房间 ID 长度限制：64个字符；</li><li>数组长度限制：10。</li>
     * @param array $Filters <p>指定所有媒体文件需要返回的信息，可同时指定多个信息，N 从 0 开始递增。如果未填写该字段，默认返回所有信息。选项有：</p><li>basicInfo（视频基础信息）。</li><li>metaData（视频元信息）。</li><li>transcodeInfo（视频转码结果信息）。</li><li>animatedGraphicsInfo（视频转动图结果信息）。</li><li>imageSpriteInfo（视频雪碧图信息）。</li><li>snapshotByTimeOffsetInfo（视频指定时间点截图信息）。</li><li>sampleSnapshotInfo（采样截图信息）。</li><li>keyFrameDescInfo（打点信息）。</li><li>adaptiveDynamicStreamingInfo（转自适应码流信息）。</li><li>miniProgramReviewInfo（小程序审核信息）。</li>
     * @param SortBy $Sort <p>排序方式。</p><li>Sort.Field 可选 CreateTime 。</li><li>当 Text、 Names 或 Descriptions 不为空时，Sort.Field 字段无效， 搜索结果将以匹配度排序。</li>
     * @param integer $Offset <div id="p_offset">分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。<li>取值范围：Offset + Limit 不超过5000。（参见：<a href="#maxResultsDesc">接口返回结果数限制</a>）</li></div>
     * @param integer $Limit <div id="p_limit">分页返回的记录条数，默认值：10。将返回第 Offset 到第 Offset+Limit-1 条。<li>取值范围：Offset + Limit 不超过5000。（参见：<a href="#maxResultsDesc">接口返回结果数限制</a>）</li></div>
     * @param string $Text <p>（不推荐：应使用 Names、NamePrefixes 或 Descriptions 替代）<br>搜索文本，模糊匹配媒体文件名称或描述信息，匹配项越多，匹配度越高，排序越优先。长度限制：64个字符。</p>
     * @param string $SourceType <p>（不推荐：应使用 SourceTypes 替代）<br>媒体文件来源，来源取值参见 <a href="https://cloud.tencent.com/document/product/266/31773#MediaSourceData">SourceType</a>。</p>
     * @param string $StreamId <p>（不推荐：应使用 StreamIds 替代）<br>推流直播码。</p>
     * @param string $StartTime <p>（不推荐：应使用 CreateTime 替代）<br>创建时间的开始时间。</p><li>大于等于开始时间。</li><li>当 CreateTime.After 也存在时，将优先使用 CreateTime.After。</li><li>格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。</li>
     * @param string $EndTime <p>（不推荐：应使用 CreateTime 替代）<br>创建时间的结束时间。</p><li>小于结束时间。</li><li>当 CreateTime.Before 也存在时，将优先使用 CreateTime.Before。</li><li>格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。</li>
     * @param array $Vids <p>该字段已无效。</p>
     * @param string $Vid <p>该字段已无效。</p>
     * @param array $StreamDomains <p>直播推流Domain，当媒资来源是直播录制时有效。</p>
     * @param array $StreamPaths <p>直播推流Path，当媒资来源是直播录制时有效。</p>
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

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("NamePrefixes",$param) and $param["NamePrefixes"] !== null) {
            $this->NamePrefixes = $param["NamePrefixes"];
        }

        if (array_key_exists("Descriptions",$param) and $param["Descriptions"] !== null) {
            $this->Descriptions = $param["Descriptions"];
        }

        if (array_key_exists("ClassIds",$param) and $param["ClassIds"] !== null) {
            $this->ClassIds = $param["ClassIds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Categories",$param) and $param["Categories"] !== null) {
            $this->Categories = $param["Categories"];
        }

        if (array_key_exists("SourceTypes",$param) and $param["SourceTypes"] !== null) {
            $this->SourceTypes = $param["SourceTypes"];
        }

        if (array_key_exists("StreamIds",$param) and $param["StreamIds"] !== null) {
            $this->StreamIds = $param["StreamIds"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = new TimeRange();
            $this->CreateTime->deserialize($param["CreateTime"]);
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = new TimeRange();
            $this->ExpireTime->deserialize($param["ExpireTime"]);
        }

        if (array_key_exists("StorageRegions",$param) and $param["StorageRegions"] !== null) {
            $this->StorageRegions = $param["StorageRegions"];
        }

        if (array_key_exists("StorageClasses",$param) and $param["StorageClasses"] !== null) {
            $this->StorageClasses = $param["StorageClasses"];
        }

        if (array_key_exists("MediaTypes",$param) and $param["MediaTypes"] !== null) {
            $this->MediaTypes = $param["MediaTypes"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ReviewResults",$param) and $param["ReviewResults"] !== null) {
            $this->ReviewResults = $param["ReviewResults"];
        }

        if (array_key_exists("TrtcSdkAppIds",$param) and $param["TrtcSdkAppIds"] !== null) {
            $this->TrtcSdkAppIds = $param["TrtcSdkAppIds"];
        }

        if (array_key_exists("TrtcRoomIds",$param) and $param["TrtcRoomIds"] !== null) {
            $this->TrtcRoomIds = $param["TrtcRoomIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
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

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Vids",$param) and $param["Vids"] !== null) {
            $this->Vids = $param["Vids"];
        }

        if (array_key_exists("Vid",$param) and $param["Vid"] !== null) {
            $this->Vid = $param["Vid"];
        }

        if (array_key_exists("StreamDomains",$param) and $param["StreamDomains"] !== null) {
            $this->StreamDomains = $param["StreamDomains"];
        }

        if (array_key_exists("StreamPaths",$param) and $param["StreamPaths"] !== null) {
            $this->StreamPaths = $param["StreamPaths"];
        }
    }
}
