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
 * 设置播放列表指令参数
 *
 * @method string getType() 获取变更类型，取值有：
<li>Add：添加</li>
<li>Delete：删除</li>
 * @method void setType(string $Type) 设置变更类型，取值有：
<li>Add：添加</li>
<li>Delete：删除</li>
 * @method integer getIndex() 获取歌单索引位置，
当 Type 取 Add 时，-1表示添加在列表最后位置，大于-1表示要添加的位置；
当 Type 取 Delete 时，表示要删除的位置。
 * @method void setIndex(integer $Index) 设置歌单索引位置，
当 Type 取 Add 时，-1表示添加在列表最后位置，大于-1表示要添加的位置；
当 Type 取 Delete 时，表示要删除的位置。
 * @method array getMusicIds() 获取歌曲 ID 列表，当 Type 取 Add 时，必填。
 * @method void setMusicIds(array $MusicIds) 设置歌曲 ID 列表，当 Type 取 Add 时，必填。
 */
class SetPlaylistCommandInput extends AbstractModel
{
    /**
     * @var string 变更类型，取值有：
<li>Add：添加</li>
<li>Delete：删除</li>
     */
    public $Type;

    /**
     * @var integer 歌单索引位置，
当 Type 取 Add 时，-1表示添加在列表最后位置，大于-1表示要添加的位置；
当 Type 取 Delete 时，表示要删除的位置。
     */
    public $Index;

    /**
     * @var array 歌曲 ID 列表，当 Type 取 Add 时，必填。
     */
    public $MusicIds;

    /**
     * @param string $Type 变更类型，取值有：
<li>Add：添加</li>
<li>Delete：删除</li>
     * @param integer $Index 歌单索引位置，
当 Type 取 Add 时，-1表示添加在列表最后位置，大于-1表示要添加的位置；
当 Type 取 Delete 时，表示要删除的位置。
     * @param array $MusicIds 歌曲 ID 列表，当 Type 取 Add 时，必填。
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

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("MusicIds",$param) and $param["MusicIds"] !== null) {
            $this->MusicIds = $param["MusicIds"];
        }
    }
}
