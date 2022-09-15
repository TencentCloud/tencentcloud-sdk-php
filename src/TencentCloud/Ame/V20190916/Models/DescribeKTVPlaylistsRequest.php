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
 * DescribeKTVPlaylists请求参数结构体
 *
 * @method string getType() 获取歌单类型，取值有：
·OfficialRec：官方推荐
·Normal：自定义
当该字段未填时，默认为取OfficialRec
 * @method void setType(string $Type) 设置歌单类型，取值有：
·OfficialRec：官方推荐
·Normal：自定义
当该字段未填时，默认为取OfficialRec
 * @method integer getOffset() 获取分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
取值范围：Offset + Limit 不超过5000
 * @method void setOffset(integer $Offset) 设置分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
取值范围：Offset + Limit 不超过5000
 * @method integer getLimit() 获取分页返回的记录条数，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
取值范围：Offset + Limit 不超过5000
 * @method void setLimit(integer $Limit) 设置分页返回的记录条数，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
取值范围：Offset + Limit 不超过5000
 */
class DescribeKTVPlaylistsRequest extends AbstractModel
{
    /**
     * @var string 歌单类型，取值有：
·OfficialRec：官方推荐
·Normal：自定义
当该字段未填时，默认为取OfficialRec
     */
    public $Type;

    /**
     * @var integer 分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
取值范围：Offset + Limit 不超过5000
     */
    public $Offset;

    /**
     * @var integer 分页返回的记录条数，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
取值范围：Offset + Limit 不超过5000
     */
    public $Limit;

    /**
     * @param string $Type 歌单类型，取值有：
·OfficialRec：官方推荐
·Normal：自定义
当该字段未填时，默认为取OfficialRec
     * @param integer $Offset 分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
取值范围：Offset + Limit 不超过5000
     * @param integer $Limit 分页返回的记录条数，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
取值范围：Offset + Limit 不超过5000
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
