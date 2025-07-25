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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLyric请求参数结构体
 *
 * @method string getItemId() 获取歌曲ID
 * @method void setItemId(string $ItemId) 设置歌曲ID
 * @method string getSubItemType() 获取格式，可选项，可不填写，默认值为：LRC-LRC。
<li>LRC-LRC：歌词；</li>
<li>JSON-ST：波形图。</li>
 * @method void setSubItemType(string $SubItemType) 设置格式，可选项，可不填写，默认值为：LRC-LRC。
<li>LRC-LRC：歌词；</li>
<li>JSON-ST：波形图。</li>
 */
class DescribeLyricRequest extends AbstractModel
{
    /**
     * @var string 歌曲ID
     */
    public $ItemId;

    /**
     * @var string 格式，可选项，可不填写，默认值为：LRC-LRC。
<li>LRC-LRC：歌词；</li>
<li>JSON-ST：波形图。</li>
     */
    public $SubItemType;

    /**
     * @param string $ItemId 歌曲ID
     * @param string $SubItemType 格式，可选项，可不填写，默认值为：LRC-LRC。
<li>LRC-LRC：歌词；</li>
<li>JSON-ST：波形图。</li>
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("SubItemType",$param) and $param["SubItemType"] !== null) {
            $this->SubItemType = $param["SubItemType"];
        }
    }
}
