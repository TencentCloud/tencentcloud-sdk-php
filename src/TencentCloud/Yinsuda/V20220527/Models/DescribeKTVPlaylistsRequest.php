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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKTVPlaylists请求参数结构体
 *
 * @method string getAppName() 获取应用名称。
 * @method void setAppName(string $AppName) 设置应用名称。
 * @method string getUserId() 获取用户标识。
 * @method void setUserId(string $UserId) 设置用户标识。
 * @method array getTypes() 获取类型列表，取值有：
<li>OfficialRec：官方推荐；</li>
<li>Customize：自定义。</li>
默认值为 OfficialRec。
 * @method void setTypes(array $Types) 设置类型列表，取值有：
<li>OfficialRec：官方推荐；</li>
<li>Customize：自定义。</li>
默认值为 OfficialRec。
 * @method integer getOffset() 获取分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
 * @method void setOffset(integer $Offset) 设置分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
 * @method integer getLimit() 获取分页返回的记录条数，默认值：20，最大值：50。
 * @method void setLimit(integer $Limit) 设置分页返回的记录条数，默认值：20，最大值：50。
 */
class DescribeKTVPlaylistsRequest extends AbstractModel
{
    /**
     * @var string 应用名称。
     */
    public $AppName;

    /**
     * @var string 用户标识。
     */
    public $UserId;

    /**
     * @var array 类型列表，取值有：
<li>OfficialRec：官方推荐；</li>
<li>Customize：自定义。</li>
默认值为 OfficialRec。
     */
    public $Types;

    /**
     * @var integer 分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
     */
    public $Offset;

    /**
     * @var integer 分页返回的记录条数，默认值：20，最大值：50。
     */
    public $Limit;

    /**
     * @param string $AppName 应用名称。
     * @param string $UserId 用户标识。
     * @param array $Types 类型列表，取值有：
<li>OfficialRec：官方推荐；</li>
<li>Customize：自定义。</li>
默认值为 OfficialRec。
     * @param integer $Offset 分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
     * @param integer $Limit 分页返回的记录条数，默认值：20，最大值：50。
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
