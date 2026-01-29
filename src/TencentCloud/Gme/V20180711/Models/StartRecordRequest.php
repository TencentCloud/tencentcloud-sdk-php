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
 * StartRecord请求参数结构体
 *
 * @method integer getBizId() 获取<p>应用ID。</p>
 * @method void setBizId(integer $BizId) 设置<p>应用ID。</p>
 * @method string getRoomId() 获取<p>房间ID。</p>
 * @method void setRoomId(string $RoomId) 设置<p>房间ID。</p>
 * @method integer getRecordMode() 获取<p>录制类型：1代表单流 2代表混流 3代表单流和混流。</p>
 * @method void setRecordMode(integer $RecordMode) 设置<p>录制类型：1代表单流 2代表混流 3代表单流和混流。</p>
 * @method SubscribeRecordUserIds getSubscribeRecordUserIds() 获取<p>指定订阅流白名单或者黑名单（不传默认订阅房间内所有音频流）。</p>
 * @method void setSubscribeRecordUserIds(SubscribeRecordUserIds $SubscribeRecordUserIds) 设置<p>指定订阅流白名单或者黑名单（不传默认订阅房间内所有音频流）。</p>
 */
class StartRecordRequest extends AbstractModel
{
    /**
     * @var integer <p>应用ID。</p>
     */
    public $BizId;

    /**
     * @var string <p>房间ID。</p>
     */
    public $RoomId;

    /**
     * @var integer <p>录制类型：1代表单流 2代表混流 3代表单流和混流。</p>
     */
    public $RecordMode;

    /**
     * @var SubscribeRecordUserIds <p>指定订阅流白名单或者黑名单（不传默认订阅房间内所有音频流）。</p>
     */
    public $SubscribeRecordUserIds;

    /**
     * @param integer $BizId <p>应用ID。</p>
     * @param string $RoomId <p>房间ID。</p>
     * @param integer $RecordMode <p>录制类型：1代表单流 2代表混流 3代表单流和混流。</p>
     * @param SubscribeRecordUserIds $SubscribeRecordUserIds <p>指定订阅流白名单或者黑名单（不传默认订阅房间内所有音频流）。</p>
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
