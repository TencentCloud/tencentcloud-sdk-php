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
 * StartRecord请求参数结构体
 *
 * @method integer getBizId() 获取应用ID。
 * @method void setBizId(integer $BizId) 设置应用ID。
 * @method string getRoomId() 获取房间ID。
 * @method void setRoomId(string $RoomId) 设置房间ID。
 * @method integer getRecordMode() 获取录制类型：1代表单流 2代表混流 3代表单流和混流。
 * @method void setRecordMode(integer $RecordMode) 设置录制类型：1代表单流 2代表混流 3代表单流和混流。
 * @method SubscribeRecordUserIds getSubscribeRecordUserIds() 获取指定订阅流白名单或者黑名单（不传默认订阅房间内所有音频流）。
 * @method void setSubscribeRecordUserIds(SubscribeRecordUserIds $SubscribeRecordUserIds) 设置指定订阅流白名单或者黑名单（不传默认订阅房间内所有音频流）。
 */
class StartRecordRequest extends AbstractModel
{
    /**
     * @var integer 应用ID。
     */
    public $BizId;

    /**
     * @var string 房间ID。
     */
    public $RoomId;

    /**
     * @var integer 录制类型：1代表单流 2代表混流 3代表单流和混流。
     */
    public $RecordMode;

    /**
     * @var SubscribeRecordUserIds 指定订阅流白名单或者黑名单（不传默认订阅房间内所有音频流）。
     */
    public $SubscribeRecordUserIds;

    /**
     * @param integer $BizId 应用ID。
     * @param string $RoomId 房间ID。
     * @param integer $RecordMode 录制类型：1代表单流 2代表混流 3代表单流和混流。
     * @param SubscribeRecordUserIds $SubscribeRecordUserIds 指定订阅流白名单或者黑名单（不传默认订阅房间内所有音频流）。
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("RecordMode",$param) and $param["RecordMode"] !== null) {
            $this->RecordMode = $param["RecordMode"];
        }

        if (array_key_exists("SubscribeRecordUserIds",$param) and $param["SubscribeRecordUserIds"] !== null) {
            $this->SubscribeRecordUserIds = new SubscribeRecordUserIds();
            $this->SubscribeRecordUserIds->deserialize($param["SubscribeRecordUserIds"]);
        }
    }
}
