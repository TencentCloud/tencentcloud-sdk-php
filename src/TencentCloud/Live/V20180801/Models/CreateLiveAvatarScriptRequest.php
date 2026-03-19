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
 * CreateLiveAvatarScript请求参数结构体
 *
 * @method string getTitle() 获取话术标题。限制500字节。
 * @method void setTitle(string $Title) 设置话术标题。限制500字节。
 * @method string getContent() 获取话术内容。中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。
 * @method void setContent(string $Content) 设置话术内容。中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。
 * @method string getRoomId() 获取话术所属的数字人直播间 ID。
 * @method void setRoomId(string $RoomId) 设置话术所属的数字人直播间 ID。
 * @method integer getSpecifyPosition() 获取话术插入时，可根据已有话术位置，指定新话术插入位置。
如已有三条话术100，200，300。
新话术可选择150插入到第一条和第二条中间。
 * @method void setSpecifyPosition(integer $SpecifyPosition) 设置话术插入时，可根据已有话术位置，指定新话术插入位置。
如已有三条话术100，200，300。
新话术可选择150插入到第一条和第二条中间。
 * @method string getOperator() 获取操作者。
 * @method void setOperator(string $Operator) 设置操作者。
 */
class CreateLiveAvatarScriptRequest extends AbstractModel
{
    /**
     * @var string 话术标题。限制500字节。
     */
    public $Title;

    /**
     * @var string 话术内容。中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。
     */
    public $Content;

    /**
     * @var string 话术所属的数字人直播间 ID。
     */
    public $RoomId;

    /**
     * @var integer 话术插入时，可根据已有话术位置，指定新话术插入位置。
如已有三条话术100，200，300。
新话术可选择150插入到第一条和第二条中间。
     */
    public $SpecifyPosition;

    /**
     * @var string 操作者。
     */
    public $Operator;

    /**
     * @param string $Title 话术标题。限制500字节。
     * @param string $Content 话术内容。中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。
     * @param string $RoomId 话术所属的数字人直播间 ID。
     * @param integer $SpecifyPosition 话术插入时，可根据已有话术位置，指定新话术插入位置。
如已有三条话术100，200，300。
新话术可选择150插入到第一条和第二条中间。
     * @param string $Operator 操作者。
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("SpecifyPosition",$param) and $param["SpecifyPosition"] !== null) {
            $this->SpecifyPosition = $param["SpecifyPosition"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
