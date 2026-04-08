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
 * StartLiveAvatarRoom请求参数结构体
 *
 * @method string getRoomId() 获取<p>数字人直播间 ID。</p>
 * @method void setRoomId(string $RoomId) 设置<p>数字人直播间 ID。</p>
 * @method string getComment() 获取<p>目标地址描述。</p>
 * @method void setComment(string $Comment) 设置<p>目标地址描述。</p>
 * @method string getToUrl() 获取<p>推流目标地址。</p>
 * @method void setToUrl(string $ToUrl) 设置<p>推流目标地址。</p>
 * @method string getOperator() 获取<p>操作者。</p>
 * @method void setOperator(string $Operator) 设置<p>操作者。</p>
 * @method string getRoomType() 获取<p>房间类型。AIGC：AIGC形象房间；PRESET：预设形象房间</p><p>枚举值：</p><ul><li>AIGC： AIGC形象房间</li><li>PRESET： 预设形象房间</li></ul>
 * @method void setRoomType(string $RoomType) 设置<p>房间类型。AIGC：AIGC形象房间；PRESET：预设形象房间</p><p>枚举值：</p><ul><li>AIGC： AIGC形象房间</li><li>PRESET： 预设形象房间</li></ul>
 */
class StartLiveAvatarRoomRequest extends AbstractModel
{
    /**
     * @var string <p>数字人直播间 ID。</p>
     */
    public $RoomId;

    /**
     * @var string <p>目标地址描述。</p>
     */
    public $Comment;

    /**
     * @var string <p>推流目标地址。</p>
     */
    public $ToUrl;

    /**
     * @var string <p>操作者。</p>
     */
    public $Operator;

    /**
     * @var string <p>房间类型。AIGC：AIGC形象房间；PRESET：预设形象房间</p><p>枚举值：</p><ul><li>AIGC： AIGC形象房间</li><li>PRESET： 预设形象房间</li></ul>
     */
    public $RoomType;

    /**
     * @param string $RoomId <p>数字人直播间 ID。</p>
     * @param string $Comment <p>目标地址描述。</p>
     * @param string $ToUrl <p>推流目标地址。</p>
     * @param string $Operator <p>操作者。</p>
     * @param string $RoomType <p>房间类型。AIGC：AIGC形象房间；PRESET：预设形象房间</p><p>枚举值：</p><ul><li>AIGC： AIGC形象房间</li><li>PRESET： 预设形象房间</li></ul>
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

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ToUrl",$param) and $param["ToUrl"] !== null) {
            $this->ToUrl = $param["ToUrl"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("RoomType",$param) and $param["RoomType"] !== null) {
            $this->RoomType = $param["RoomType"];
        }
    }
}
