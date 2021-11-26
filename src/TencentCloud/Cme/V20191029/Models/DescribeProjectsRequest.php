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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjects请求参数结构体
 *
 * @method string getPlatform() 获取平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
 * @method void setPlatform(string $Platform) 设置平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
 * @method array getProjectIds() 获取项目 Id 过滤参数列表，最大支持20个项目 Id 过滤。如果不填不需要项目 Id 进行过滤。
 * @method void setProjectIds(array $ProjectIds) 设置项目 Id 过滤参数列表，最大支持20个项目 Id 过滤。如果不填不需要项目 Id 进行过滤。
 * @method array getAspectRatioSet() 获取画布宽高比过滤参数列表。如果不填则不用画布宽高比进行过滤。
 * @method void setAspectRatioSet(array $AspectRatioSet) 设置画布宽高比过滤参数列表。如果不填则不用画布宽高比进行过滤。
 * @method array getCategorySet() 获取项目类型过滤参数列表，取值有：
<li>VIDEO_EDIT：视频编辑。</li>
<li>SWITCHER：导播台。</li>
<li>VIDEO_SEGMENTATION：视频拆条。</li>
<li>STREAM_CONNECT：云转推。</li>
<li>RECORD_REPLAY：录制回放。</li>

注：如果不填则不使用项目类型进行过滤。
 * @method void setCategorySet(array $CategorySet) 设置项目类型过滤参数列表，取值有：
<li>VIDEO_EDIT：视频编辑。</li>
<li>SWITCHER：导播台。</li>
<li>VIDEO_SEGMENTATION：视频拆条。</li>
<li>STREAM_CONNECT：云转推。</li>
<li>RECORD_REPLAY：录制回放。</li>

注：如果不填则不使用项目类型进行过滤。
 * @method array getModes() 获取项目模式过滤参数列表，一个项目可以有多种模式并相互切换。
当 Category 为 VIDEO_EDIT 时，可选模式有：
<li>Default：默认模式。</li>
<li>VideoEditTemplate：视频编辑模板制作模式。</li>

注：不填不使用项目模式进行过滤。
 * @method void setModes(array $Modes) 设置项目模式过滤参数列表，一个项目可以有多种模式并相互切换。
当 Category 为 VIDEO_EDIT 时，可选模式有：
<li>Default：默认模式。</li>
<li>VideoEditTemplate：视频编辑模板制作模式。</li>

注：不填不使用项目模式进行过滤。
 * @method SortBy getSort() 获取结果排序方式，支持下列排序字段：
<li>CreateTime：创建时间；</li>
<li>UpdateTime：更新时间。</li>

注：如不填，则使用项目创建时间倒序排列。
 * @method void setSort(SortBy $Sort) 设置结果排序方式，支持下列排序字段：
<li>CreateTime：创建时间；</li>
<li>UpdateTime：更新时间。</li>

注：如不填，则使用项目创建时间倒序排列。
 * @method Entity getOwner() 获取项目所有者，目前仅支持个人项目过滤。
 * @method void setOwner(Entity $Owner) 设置项目所有者，目前仅支持个人项目过滤。
 * @method integer getOffset() 获取分页返回的起始偏移量，默认值：0。
 * @method void setOffset(integer $Offset) 设置分页返回的起始偏移量，默认值：0。
 * @method integer getLimit() 获取分页返回的记录条数，默认值：10。
 * @method void setLimit(integer $Limit) 设置分页返回的记录条数，默认值：10。
 * @method string getOperator() 获取操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以查询一切用户项目信息。如果指定操作者，则操作者必须为项目所有者。
 * @method void setOperator(string $Operator) 设置操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以查询一切用户项目信息。如果指定操作者，则操作者必须为项目所有者。
 */
class DescribeProjectsRequest extends AbstractModel
{
    /**
     * @var string 平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
     */
    public $Platform;

    /**
     * @var array 项目 Id 过滤参数列表，最大支持20个项目 Id 过滤。如果不填不需要项目 Id 进行过滤。
     */
    public $ProjectIds;

    /**
     * @var array 画布宽高比过滤参数列表。如果不填则不用画布宽高比进行过滤。
     */
    public $AspectRatioSet;

    /**
     * @var array 项目类型过滤参数列表，取值有：
<li>VIDEO_EDIT：视频编辑。</li>
<li>SWITCHER：导播台。</li>
<li>VIDEO_SEGMENTATION：视频拆条。</li>
<li>STREAM_CONNECT：云转推。</li>
<li>RECORD_REPLAY：录制回放。</li>

注：如果不填则不使用项目类型进行过滤。
     */
    public $CategorySet;

    /**
     * @var array 项目模式过滤参数列表，一个项目可以有多种模式并相互切换。
当 Category 为 VIDEO_EDIT 时，可选模式有：
<li>Default：默认模式。</li>
<li>VideoEditTemplate：视频编辑模板制作模式。</li>

注：不填不使用项目模式进行过滤。
     */
    public $Modes;

    /**
     * @var SortBy 结果排序方式，支持下列排序字段：
<li>CreateTime：创建时间；</li>
<li>UpdateTime：更新时间。</li>

注：如不填，则使用项目创建时间倒序排列。
     */
    public $Sort;

    /**
     * @var Entity 项目所有者，目前仅支持个人项目过滤。
     */
    public $Owner;

    /**
     * @var integer 分页返回的起始偏移量，默认值：0。
     */
    public $Offset;

    /**
     * @var integer 分页返回的记录条数，默认值：10。
     */
    public $Limit;

    /**
     * @var string 操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以查询一切用户项目信息。如果指定操作者，则操作者必须为项目所有者。
     */
    public $Operator;

    /**
     * @param string $Platform 平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
     * @param array $ProjectIds 项目 Id 过滤参数列表，最大支持20个项目 Id 过滤。如果不填不需要项目 Id 进行过滤。
     * @param array $AspectRatioSet 画布宽高比过滤参数列表。如果不填则不用画布宽高比进行过滤。
     * @param array $CategorySet 项目类型过滤参数列表，取值有：
<li>VIDEO_EDIT：视频编辑。</li>
<li>SWITCHER：导播台。</li>
<li>VIDEO_SEGMENTATION：视频拆条。</li>
<li>STREAM_CONNECT：云转推。</li>
<li>RECORD_REPLAY：录制回放。</li>

注：如果不填则不使用项目类型进行过滤。
     * @param array $Modes 项目模式过滤参数列表，一个项目可以有多种模式并相互切换。
当 Category 为 VIDEO_EDIT 时，可选模式有：
<li>Default：默认模式。</li>
<li>VideoEditTemplate：视频编辑模板制作模式。</li>

注：不填不使用项目模式进行过滤。
     * @param SortBy $Sort 结果排序方式，支持下列排序字段：
<li>CreateTime：创建时间；</li>
<li>UpdateTime：更新时间。</li>

注：如不填，则使用项目创建时间倒序排列。
     * @param Entity $Owner 项目所有者，目前仅支持个人项目过滤。
     * @param integer $Offset 分页返回的起始偏移量，默认值：0。
     * @param integer $Limit 分页返回的记录条数，默认值：10。
     * @param string $Operator 操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以查询一切用户项目信息。如果指定操作者，则操作者必须为项目所有者。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("AspectRatioSet",$param) and $param["AspectRatioSet"] !== null) {
            $this->AspectRatioSet = $param["AspectRatioSet"];
        }

        if (array_key_exists("CategorySet",$param) and $param["CategorySet"] !== null) {
            $this->CategorySet = $param["CategorySet"];
        }

        if (array_key_exists("Modes",$param) and $param["Modes"] !== null) {
            $this->Modes = $param["Modes"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new SortBy();
            $this->Sort->deserialize($param["Sort"]);
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Entity();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
