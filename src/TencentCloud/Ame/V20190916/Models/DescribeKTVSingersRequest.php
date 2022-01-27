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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKTVSingers请求参数结构体
 *
 * @method array getSingerIds() 获取歌手id集合，精确匹配歌手id
<li> 数组长度限制10</li>
 * @method void setSingerIds(array $SingerIds) 设置歌手id集合，精确匹配歌手id
<li> 数组长度限制10</li>
 * @method array getGenders() 获取歌手性别集合，不传为全部，精确匹配歌手性别类型，
<li>数组长度限制1</li>
<li>取值范围：直播互动曲库歌手分类信息接口，返回性别分类信息列表中，分类英文名</li>
 * @method void setGenders(array $Genders) 设置歌手性别集合，不传为全部，精确匹配歌手性别类型，
<li>数组长度限制1</li>
<li>取值范围：直播互动曲库歌手分类信息接口，返回性别分类信息列表中，分类英文名</li>
 * @method array getAreas() 获取歌手区域集合，不传为全部，精确匹配歌手区域
<li>数组长度限制10</li>
<li>取值范围：直播互动曲库歌手分类信息接口，返回的区域分类信息列表中，分类英文名</li>
 * @method void setAreas(array $Areas) 设置歌手区域集合，不传为全部，精确匹配歌手区域
<li>数组长度限制10</li>
<li>取值范围：直播互动曲库歌手分类信息接口，返回的区域分类信息列表中，分类英文名</li>
 * @method SortBy getSort() 获取排序方式。默认按照播放数倒序
<li> Sort.Field 可选 PlayCount。</li>
 * @method void setSort(SortBy $Sort) 设置排序方式。默认按照播放数倒序
<li> Sort.Field 可选 PlayCount。</li>
 * @method integer getOffset() 获取分页偏移量，默认值：0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认值：0。
 * @method integer getLimit() 获取分页返回的记录条数，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
 * @method void setLimit(integer $Limit) 设置分页返回的记录条数，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
 */
class DescribeKTVSingersRequest extends AbstractModel
{
    /**
     * @var array 歌手id集合，精确匹配歌手id
<li> 数组长度限制10</li>
     */
    public $SingerIds;

    /**
     * @var array 歌手性别集合，不传为全部，精确匹配歌手性别类型，
<li>数组长度限制1</li>
<li>取值范围：直播互动曲库歌手分类信息接口，返回性别分类信息列表中，分类英文名</li>
     */
    public $Genders;

    /**
     * @var array 歌手区域集合，不传为全部，精确匹配歌手区域
<li>数组长度限制10</li>
<li>取值范围：直播互动曲库歌手分类信息接口，返回的区域分类信息列表中，分类英文名</li>
     */
    public $Areas;

    /**
     * @var SortBy 排序方式。默认按照播放数倒序
<li> Sort.Field 可选 PlayCount。</li>
     */
    public $Sort;

    /**
     * @var integer 分页偏移量，默认值：0。
     */
    public $Offset;

    /**
     * @var integer 分页返回的记录条数，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
     */
    public $Limit;

    /**
     * @param array $SingerIds 歌手id集合，精确匹配歌手id
<li> 数组长度限制10</li>
     * @param array $Genders 歌手性别集合，不传为全部，精确匹配歌手性别类型，
<li>数组长度限制1</li>
<li>取值范围：直播互动曲库歌手分类信息接口，返回性别分类信息列表中，分类英文名</li>
     * @param array $Areas 歌手区域集合，不传为全部，精确匹配歌手区域
<li>数组长度限制10</li>
<li>取值范围：直播互动曲库歌手分类信息接口，返回的区域分类信息列表中，分类英文名</li>
     * @param SortBy $Sort 排序方式。默认按照播放数倒序
<li> Sort.Field 可选 PlayCount。</li>
     * @param integer $Offset 分页偏移量，默认值：0。
     * @param integer $Limit 分页返回的记录条数，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
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
        if (array_key_exists("SingerIds",$param) and $param["SingerIds"] !== null) {
            $this->SingerIds = $param["SingerIds"];
        }

        if (array_key_exists("Genders",$param) and $param["Genders"] !== null) {
            $this->Genders = $param["Genders"];
        }

        if (array_key_exists("Areas",$param) and $param["Areas"] !== null) {
            $this->Areas = $param["Areas"];
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
    }
}
