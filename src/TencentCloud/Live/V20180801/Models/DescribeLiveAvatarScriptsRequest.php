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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveAvatarScripts请求参数结构体
 *
 * @method string getRoomId() 获取数字人直播间 ID。
 * @method void setRoomId(string $RoomId) 设置数字人直播间 ID。
 * @method string getScriptId() 获取数字人直播间话术 ID。
 * @method void setScriptId(string $ScriptId) 设置数字人直播间话术 ID。
 * @method integer getPageIndex() 获取分页查询的页数。
 * @method void setPageIndex(integer $PageIndex) 设置分页查询的页数。
 * @method integer getPageSize() 获取分页查询的每页个数。
 * @method void setPageSize(integer $PageSize) 设置分页查询的每页个数。
 */
class DescribeLiveAvatarScriptsRequest extends AbstractModel
{
    /**
     * @var string 数字人直播间 ID。
     */
    public $RoomId;

    /**
     * @var string 数字人直播间话术 ID。
     */
    public $ScriptId;

    /**
     * @var integer 分页查询的页数。
     */
    public $PageIndex;

    /**
     * @var integer 分页查询的每页个数。
     */
    public $PageSize;

    /**
     * @param string $RoomId 数字人直播间 ID。
     * @param string $ScriptId 数字人直播间话术 ID。
     * @param integer $PageIndex 分页查询的页数。
     * @param integer $PageSize 分页查询的每页个数。
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
        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("ScriptId",$param) and $param["ScriptId"] !== null) {
            $this->ScriptId = $param["ScriptId"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
