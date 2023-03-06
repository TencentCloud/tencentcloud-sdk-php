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
 * 房间内录制信息信息
注意：此字段可能返回 null，表示取不到有效值。
 *
 * @method string getUserId() 获取用户ID（当混流模式时，取值为0）。
 * @method void setUserId(string $UserId) 设置用户ID（当混流模式时，取值为0）。
 * @method string getFileName() 获取录制文件名。
 * @method void setFileName(string $FileName) 设置录制文件名。
 * @method integer getRecordBeginTime() 获取录制开始时间（unix时间戳如：1234567868）。
 * @method void setRecordBeginTime(integer $RecordBeginTime) 设置录制开始时间（unix时间戳如：1234567868）。
 * @method integer getRecordStatus() 获取录制状态：2代表正在录制  10代表等待转码  11代表正在转码  12正在上传  13代表上传完成  14代表通知用户完成。
 * @method void setRecordStatus(integer $RecordStatus) 设置录制状态：2代表正在录制  10代表等待转码  11代表正在转码  12正在上传  13代表上传完成  14代表通知用户完成。
 */
class RecordInfo extends AbstractModel
{
    /**
     * @var string 用户ID（当混流模式时，取值为0）。
     */
    public $UserId;

    /**
     * @var string 录制文件名。
     */
    public $FileName;

    /**
     * @var integer 录制开始时间（unix时间戳如：1234567868）。
     */
    public $RecordBeginTime;

    /**
     * @var integer 录制状态：2代表正在录制  10代表等待转码  11代表正在转码  12正在上传  13代表上传完成  14代表通知用户完成。
     */
    public $RecordStatus;

    /**
     * @param string $UserId 用户ID（当混流模式时，取值为0）。
     * @param string $FileName 录制文件名。
     * @param integer $RecordBeginTime 录制开始时间（unix时间戳如：1234567868）。
     * @param integer $RecordStatus 录制状态：2代表正在录制  10代表等待转码  11代表正在转码  12正在上传  13代表上传完成  14代表通知用户完成。
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("RecordBeginTime",$param) and $param["RecordBeginTime"] !== null) {
            $this->RecordBeginTime = $param["RecordBeginTime"];
        }

        if (array_key_exists("RecordStatus",$param) and $param["RecordStatus"] !== null) {
            $this->RecordStatus = $param["RecordStatus"];
        }
    }
}
