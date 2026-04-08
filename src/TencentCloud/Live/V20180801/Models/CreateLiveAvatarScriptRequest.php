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
 * @method string getTitle() 获取<p>话术标题。限制500字节。</p>
 * @method void setTitle(string $Title) 设置<p>话术标题。限制500字节。</p>
 * @method string getContent() 获取<p>话术内容。中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。</p>
 * @method void setContent(string $Content) 设置<p>话术内容。中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。</p>
 * @method string getRoomId() 获取<p>话术所属的数字人直播间 ID。</p>
 * @method void setRoomId(string $RoomId) 设置<p>话术所属的数字人直播间 ID。</p>
 * @method integer getSpecifyPosition() 获取<p>话术插入时，可根据已有话术位置，指定新话术插入位置。<br>如已有三条话术100，200，300。<br>新话术可选择150插入到第一条和第二条中间。</p>
 * @method void setSpecifyPosition(integer $SpecifyPosition) 设置<p>话术插入时，可根据已有话术位置，指定新话术插入位置。<br>如已有三条话术100，200，300。<br>新话术可选择150插入到第一条和第二条中间。</p>
 * @method string getOperator() 获取<p>操作者。</p>
 * @method void setOperator(string $Operator) 设置<p>操作者。</p>
 * @method string getProductId() 获取<p>话术所属的数字人产品 ID。</p>
 * @method void setProductId(string $ProductId) 设置<p>话术所属的数字人产品 ID。</p>
 */
class CreateLiveAvatarScriptRequest extends AbstractModel
{
    /**
     * @var string <p>话术标题。限制500字节。</p>
     */
    public $Title;

    /**
     * @var string <p>话术内容。中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。</p>
     */
    public $Content;

    /**
     * @var string <p>话术所属的数字人直播间 ID。</p>
     */
    public $RoomId;

    /**
     * @var integer <p>话术插入时，可根据已有话术位置，指定新话术插入位置。<br>如已有三条话术100，200，300。<br>新话术可选择150插入到第一条和第二条中间。</p>
     */
    public $SpecifyPosition;

    /**
     * @var string <p>操作者。</p>
     */
    public $Operator;

    /**
     * @var string <p>话术所属的数字人产品 ID。</p>
     */
    public $ProductId;

    /**
     * @param string $Title <p>话术标题。限制500字节。</p>
     * @param string $Content <p>话术内容。中文最大支持150个汉字（全角标点符号算一个汉字）；英文最大支持500个字母（半角标点符号算一个字母）。</p>
     * @param string $RoomId <p>话术所属的数字人直播间 ID。</p>
     * @param integer $SpecifyPosition <p>话术插入时，可根据已有话术位置，指定新话术插入位置。<br>如已有三条话术100，200，300。<br>新话术可选择150插入到第一条和第二条中间。</p>
     * @param string $Operator <p>操作者。</p>
     * @param string $ProductId <p>话术所属的数字人产品 ID。</p>
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

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }
    }
}
