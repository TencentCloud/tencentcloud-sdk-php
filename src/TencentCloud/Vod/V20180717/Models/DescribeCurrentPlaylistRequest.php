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
 * DescribeCurrentPlaylist请求参数结构体
 *
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。</b></p>
 * @method string getRoundPlayId() 获取<p>轮播播单唯一标识。</p>
 * @method void setRoundPlayId(string $RoundPlayId) 设置<p>轮播播单唯一标识。</p>
 * @method integer getLimit() 获取<p>返回的播放列表的长度。最大10，默认值为5。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回的播放列表的长度。最大10，默认值为5。</p>
 */
class DescribeCurrentPlaylistRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>轮播播单唯一标识。</p>
     */
    public $RoundPlayId;

    /**
     * @var integer <p>返回的播放列表的长度。最大10，默认值为5。</p>
     */
    public $Limit;

    /**
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。</b></p>
     * @param string $RoundPlayId <p>轮播播单唯一标识。</p>
     * @param integer $Limit <p>返回的播放列表的长度。最大10，默认值为5。</p>
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

        if (array_key_exists("RoundPlayId",$param) and $param["RoundPlayId"] !== null) {
            $this->RoundPlayId = $param["RoundPlayId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
