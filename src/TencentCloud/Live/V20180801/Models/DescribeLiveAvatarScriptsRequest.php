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
 * @method string getRoomId() 获取<p>数字人直播间 ID。</p>
 * @method void setRoomId(string $RoomId) 设置<p>数字人直播间 ID。</p>
 * @method string getScriptId() 获取<p>数字人直播间话术 ID。</p>
 * @method void setScriptId(string $ScriptId) 设置<p>数字人直播间话术 ID。</p>
 * @method integer getPageIndex() 获取<p>分页查询的页数。</p>
 * @method void setPageIndex(integer $PageIndex) 设置<p>分页查询的页数。</p>
 * @method integer getPageSize() 获取<p>分页查询的每页个数。</p>
 * @method void setPageSize(integer $PageSize) 设置<p>分页查询的每页个数。</p>
 * @method string getProductId() 获取<p>数字人该话术所属的产品 ID。</p>
 * @method void setProductId(string $ProductId) 设置<p>数字人该话术所属的产品 ID。</p>
 */
class DescribeLiveAvatarScriptsRequest extends AbstractModel
{
    /**
     * @var string <p>数字人直播间 ID。</p>
     */
    public $RoomId;

    /**
     * @var string <p>数字人直播间话术 ID。</p>
     */
    public $ScriptId;

    /**
     * @var integer <p>分页查询的页数。</p>
     */
    public $PageIndex;

    /**
     * @var integer <p>分页查询的每页个数。</p>
     */
    public $PageSize;

    /**
     * @var string <p>数字人该话术所属的产品 ID。</p>
     */
    public $ProductId;

    /**
     * @param string $RoomId <p>数字人直播间 ID。</p>
     * @param string $ScriptId <p>数字人直播间话术 ID。</p>
     * @param integer $PageIndex <p>分页查询的页数。</p>
     * @param integer $PageSize <p>分页查询的每页个数。</p>
     * @param string $ProductId <p>数字人该话术所属的产品 ID。</p>
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

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }
    }
}
