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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRoomMember请求参数结构体
 *
 * @method string getRoomId() 获取要操作的房间id
 * @method void setRoomId(string $RoomId) 设置要操作的房间id
 * @method integer getDeleteType() 获取剔除类型 1-删除房间 2-剔除用户
 * @method void setDeleteType(integer $DeleteType) 设置剔除类型 1-删除房间 2-剔除用户
 * @method integer getBizId() 获取应用id
 * @method void setBizId(integer $BizId) 设置应用id
 * @method array getUids() 获取要剔除的用户列表
 * @method void setUids(array $Uids) 设置要剔除的用户列表
 */
class DeleteRoomMemberRequest extends AbstractModel
{
    /**
     * @var string 要操作的房间id
     */
    public $RoomId;

    /**
     * @var integer 剔除类型 1-删除房间 2-剔除用户
     */
    public $DeleteType;

    /**
     * @var integer 应用id
     */
    public $BizId;

    /**
     * @var array 要剔除的用户列表
     */
    public $Uids;

    /**
     * @param string $RoomId 要操作的房间id
     * @param integer $DeleteType 剔除类型 1-删除房间 2-剔除用户
     * @param integer $BizId 应用id
     * @param array $Uids 要剔除的用户列表
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

        if (array_key_exists("DeleteType",$param) and $param["DeleteType"] !== null) {
            $this->DeleteType = $param["DeleteType"];
        }

        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("Uids",$param) and $param["Uids"] !== null) {
            $this->Uids = $param["Uids"];
        }
    }
}
