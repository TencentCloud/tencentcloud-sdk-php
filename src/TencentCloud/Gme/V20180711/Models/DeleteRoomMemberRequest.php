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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRoomMember请求参数结构体
 *
 * @method string getRoomId() 获取<p>要操作的房间id</p>
 * @method void setRoomId(string $RoomId) 设置<p>要操作的房间id</p>
 * @method integer getDeleteType() 获取<p>剔除类型 1-删除房间 2-剔除用户</p>
 * @method void setDeleteType(integer $DeleteType) 设置<p>剔除类型 1-删除房间 2-剔除用户</p>
 * @method integer getBizId() 获取<p>应用id</p>
 * @method void setBizId(integer $BizId) 设置<p>应用id</p>
 * @method array getUids() 获取<p>要剔除的用户列表（整型）</p>
 * @method void setUids(array $Uids) 设置<p>要剔除的用户列表（整型）</p>
 * @method array getStrUids() 获取<p>要剔除的用户列表（字符串类型）</p>
 * @method void setStrUids(array $StrUids) 设置<p>要剔除的用户列表（字符串类型）</p>
 */
class DeleteRoomMemberRequest extends AbstractModel
{
    /**
     * @var string <p>要操作的房间id</p>
     */
    public $RoomId;

    /**
     * @var integer <p>剔除类型 1-删除房间 2-剔除用户</p>
     */
    public $DeleteType;

    /**
     * @var integer <p>应用id</p>
     */
    public $BizId;

    /**
     * @var array <p>要剔除的用户列表（整型）</p>
     */
    public $Uids;

    /**
     * @var array <p>要剔除的用户列表（字符串类型）</p>
     */
    public $StrUids;

    /**
     * @param string $RoomId <p>要操作的房间id</p>
     * @param integer $DeleteType <p>剔除类型 1-删除房间 2-剔除用户</p>
     * @param integer $BizId <p>应用id</p>
     * @param array $Uids <p>要剔除的用户列表（整型）</p>
     * @param array $StrUids <p>要剔除的用户列表（字符串类型）</p>
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

        if (array_key_exists("StrUids",$param) and $param["StrUids"] !== null) {
            $this->StrUids = $param["StrUids"];
        }
    }
}
