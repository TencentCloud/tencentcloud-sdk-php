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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 座席状态
 *
 * @method string getCursor() 获取查询使用的游标，分页场景使用
 * @method void setCursor(string $Cursor) 设置查询使用的游标，分页场景使用
 * @method integer getTimestamp() 获取状态时间戳，Unix 秒级时间戳
 * @method void setTimestamp(integer $Timestamp) 设置状态时间戳，Unix 秒级时间戳
 * @method string getStatus() 获取座席状态 free 示闲 | busy 忙碌 | rest 小休 | notReady 示忙 | afterCallWork 话后调整 | offline 离线
 * @method void setStatus(string $Status) 设置座席状态 free 示闲 | busy 忙碌 | rest 小休 | notReady 示忙 | afterCallWork 话后调整 | offline 离线
 * @method string getSessionId() 获取状态关联的会话 Id
 * @method void setSessionId(string $SessionId) 设置状态关联的会话 Id
 */
class StaffStatus extends AbstractModel
{
    /**
     * @var string 查询使用的游标，分页场景使用
     */
    public $Cursor;

    /**
     * @var integer 状态时间戳，Unix 秒级时间戳
     */
    public $Timestamp;

    /**
     * @var string 座席状态 free 示闲 | busy 忙碌 | rest 小休 | notReady 示忙 | afterCallWork 话后调整 | offline 离线
     */
    public $Status;

    /**
     * @var string 状态关联的会话 Id
     */
    public $SessionId;

    /**
     * @param string $Cursor 查询使用的游标，分页场景使用
     * @param integer $Timestamp 状态时间戳，Unix 秒级时间戳
     * @param string $Status 座席状态 free 示闲 | busy 忙碌 | rest 小休 | notReady 示忙 | afterCallWork 话后调整 | offline 离线
     * @param string $SessionId 状态关联的会话 Id
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
        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
