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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRoomEvent请求参数结构体
 *
 * @method integer getRoomId() 获取房间Id。
 * @method void setRoomId(integer $RoomId) 设置房间Id。
 * @method integer getSdkAppId() 获取应用Id。
 * @method void setSdkAppId(integer $SdkAppId) 设置应用Id。
 * @method integer getPage() 获取起始页，1开始。keyword为空时有效。
 * @method void setPage(integer $Page) 设置起始页，1开始。keyword为空时有效。
 * @method integer getLimit() 获取每页个数。keyword为空时有效。一次性最多200条。
 * @method void setLimit(integer $Limit) 设置每页个数。keyword为空时有效。一次性最多200条。
 * @method string getKeyword() 获取搜索事件类型。有以下事件类型:
RoomStart:房间开始
RoomEnd:房间结束
MemberJoin:成员加入
MemberQuit:成员退出
RecordFinish:录制结束
 * @method void setKeyword(string $Keyword) 设置搜索事件类型。有以下事件类型:
RoomStart:房间开始
RoomEnd:房间结束
MemberJoin:成员加入
MemberQuit:成员退出
RecordFinish:录制结束
 */
class GetRoomEventRequest extends AbstractModel
{
    /**
     * @var integer 房间Id。
     */
    public $RoomId;

    /**
     * @var integer 应用Id。
     */
    public $SdkAppId;

    /**
     * @var integer 起始页，1开始。keyword为空时有效。
     */
    public $Page;

    /**
     * @var integer 每页个数。keyword为空时有效。一次性最多200条。
     */
    public $Limit;

    /**
     * @var string 搜索事件类型。有以下事件类型:
RoomStart:房间开始
RoomEnd:房间结束
MemberJoin:成员加入
MemberQuit:成员退出
RecordFinish:录制结束
     */
    public $Keyword;

    /**
     * @param integer $RoomId 房间Id。
     * @param integer $SdkAppId 应用Id。
     * @param integer $Page 起始页，1开始。keyword为空时有效。
     * @param integer $Limit 每页个数。keyword为空时有效。一次性最多200条。
     * @param string $Keyword 搜索事件类型。有以下事件类型:
RoomStart:房间开始
RoomEnd:房间结束
MemberJoin:成员加入
MemberQuit:成员退出
RecordFinish:录制结束
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

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
