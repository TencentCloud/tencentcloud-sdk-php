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
 * 轮播任务信息
 *
 * @method string getRoundPlayId() 获取轮播播单标识。
 * @method void setRoundPlayId(string $RoundPlayId) 设置轮播播单标识。
 * @method string getStartTime() 获取启播时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method void setStartTime(string $StartTime) 设置启播时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method array getRoundPlaylist() 获取轮播列表。
 * @method void setRoundPlaylist(array $RoundPlaylist) 设置轮播列表。
 * @method string getName() 获取轮播播单名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置轮播播单名称，长度限制：64 个字符。
 * @method string getDesc() 获取轮播播单描述信息，长度限制：256 个字符。
 * @method void setDesc(string $Desc) 设置轮播播单描述信息，长度限制：256 个字符。
 */
class RoundPlayInfo extends AbstractModel
{
    /**
     * @var string 轮播播单标识。
     */
    public $RoundPlayId;

    /**
     * @var string 启播时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
     */
    public $StartTime;

    /**
     * @var array 轮播列表。
     */
    public $RoundPlaylist;

    /**
     * @var string 轮播播单名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 轮播播单描述信息，长度限制：256 个字符。
     */
    public $Desc;

    /**
     * @param string $RoundPlayId 轮播播单标识。
     * @param string $StartTime 启播时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
     * @param array $RoundPlaylist 轮播列表。
     * @param string $Name 轮播播单名称，长度限制：64 个字符。
     * @param string $Desc 轮播播单描述信息，长度限制：256 个字符。
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
        if (array_key_exists("RoundPlayId",$param) and $param["RoundPlayId"] !== null) {
            $this->RoundPlayId = $param["RoundPlayId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("RoundPlaylist",$param) and $param["RoundPlaylist"] !== null) {
            $this->RoundPlaylist = [];
            foreach ($param["RoundPlaylist"] as $key => $value){
                $obj = new RoundPlayListItemInfo();
                $obj->deserialize($value);
                array_push($this->RoundPlaylist, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
