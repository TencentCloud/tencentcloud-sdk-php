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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKTVMusicsByTag请求参数结构体
 *
 * @method string getAppName() 获取应用名称。
 * @method void setAppName(string $AppName) 设置应用名称。
 * @method string getUserId() 获取用户标识。
 * @method void setUserId(string $UserId) 设置用户标识。
 * @method string getTagId() 获取标签 Id。
 * @method void setTagId(string $TagId) 设置标签 Id。
 * @method string getScrollToken() 获取滚动标记。
 * @method void setScrollToken(string $ScrollToken) 设置滚动标记。
 * @method integer getLimit() 获取返回条数限制，默认 20，最大 50。
 * @method void setLimit(integer $Limit) 设置返回条数限制，默认 20，最大 50。
 * @method array getRightFilters() 获取权益过滤，取值有：
<li>Play：可播；</li>
<li>Sing：可唱。</li>
 * @method void setRightFilters(array $RightFilters) 设置权益过滤，取值有：
<li>Play：可播；</li>
<li>Sing：可唱。</li>
 * @method array getMaterialFilters() 获取物料过滤，取值有：
<li>Lyrics：含有歌词；</li>
<li>Midi：含有音高线。</li>
 * @method void setMaterialFilters(array $MaterialFilters) 设置物料过滤，取值有：
<li>Lyrics：含有歌词；</li>
<li>Midi：含有音高线。</li>
 */
class DescribeKTVMusicsByTagRequest extends AbstractModel
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
     * @var string 标签 Id。
     */
    public $TagId;

    /**
     * @var string 滚动标记。
     */
    public $ScrollToken;

    /**
     * @var integer 返回条数限制，默认 20，最大 50。
     */
    public $Limit;

    /**
     * @var array 权益过滤，取值有：
<li>Play：可播；</li>
<li>Sing：可唱。</li>
     */
    public $RightFilters;

    /**
     * @var array 物料过滤，取值有：
<li>Lyrics：含有歌词；</li>
<li>Midi：含有音高线。</li>
     */
    public $MaterialFilters;

    /**
     * @param string $AppName 应用名称。
     * @param string $UserId 用户标识。
     * @param string $TagId 标签 Id。
     * @param string $ScrollToken 滚动标记。
     * @param integer $Limit 返回条数限制，默认 20，最大 50。
     * @param array $RightFilters 权益过滤，取值有：
<li>Play：可播；</li>
<li>Sing：可唱。</li>
     * @param array $MaterialFilters 物料过滤，取值有：
<li>Lyrics：含有歌词；</li>
<li>Midi：含有音高线。</li>
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

        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }

        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("RightFilters",$param) and $param["RightFilters"] !== null) {
            $this->RightFilters = $param["RightFilters"];
        }

        if (array_key_exists("MaterialFilters",$param) and $param["MaterialFilters"] !== null) {
            $this->MaterialFilters = $param["MaterialFilters"];
        }
    }
}
