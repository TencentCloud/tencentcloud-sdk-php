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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VoicePrintList 接口出参 VoicePrintSet 的元素类型
 *
 * @method string getVoicePrintId() 获取声纹 ID，36 位 UUID（含连字符）。对 (AppId, SdkAppId) 维度内唯一。
示例值：59d83c76-8f4e-4a1b-9c2d-0e7f8a6b5c4d
 * @method void setVoicePrintId(string $VoicePrintId) 设置声纹 ID，36 位 UUID（含连字符）。对 (AppId, SdkAppId) 维度内唯一。
示例值：59d83c76-8f4e-4a1b-9c2d-0e7f8a6b5c4d
 * @method string getSpeakerId() 获取业务方自定义的说话人标识，长度不超过 128 字节，由客户在注册声纹时传入。同一 SpeakerId 可对应多条声纹。
示例值：user_12345
 * @method void setSpeakerId(string $SpeakerId) 设置业务方自定义的说话人标识，长度不超过 128 字节，由客户在注册声纹时传入。同一 SpeakerId 可对应多条声纹。
示例值：user_12345
 * @method string getCreateTime() 获取声纹注册时间，ISO8601 格式，UTC 时区。
示例值：2025-04-24T10:20:30Z
 * @method void setCreateTime(string $CreateTime) 设置声纹注册时间，ISO8601 格式，UTC 时区。
示例值：2025-04-24T10:20:30Z
 * @method string getUpdateTime() 获取声纹最近一次更新时间，ISO8601 格式，UTC 时区。未被更新过时等于 CreateTime。
示例值：2025-04-24T10:20:30Z
 * @method void setUpdateTime(string $UpdateTime) 设置声纹最近一次更新时间，ISO8601 格式，UTC 时区。未被更新过时等于 CreateTime。
示例值：2025-04-24T10:20:30Z
 */
class TRTCVoicePrintItem extends AbstractModel
{
    /**
     * @var string 声纹 ID，36 位 UUID（含连字符）。对 (AppId, SdkAppId) 维度内唯一。
示例值：59d83c76-8f4e-4a1b-9c2d-0e7f8a6b5c4d
     */
    public $VoicePrintId;

    /**
     * @var string 业务方自定义的说话人标识，长度不超过 128 字节，由客户在注册声纹时传入。同一 SpeakerId 可对应多条声纹。
示例值：user_12345
     */
    public $SpeakerId;

    /**
     * @var string 声纹注册时间，ISO8601 格式，UTC 时区。
示例值：2025-04-24T10:20:30Z
     */
    public $CreateTime;

    /**
     * @var string 声纹最近一次更新时间，ISO8601 格式，UTC 时区。未被更新过时等于 CreateTime。
示例值：2025-04-24T10:20:30Z
     */
    public $UpdateTime;

    /**
     * @param string $VoicePrintId 声纹 ID，36 位 UUID（含连字符）。对 (AppId, SdkAppId) 维度内唯一。
示例值：59d83c76-8f4e-4a1b-9c2d-0e7f8a6b5c4d
     * @param string $SpeakerId 业务方自定义的说话人标识，长度不超过 128 字节，由客户在注册声纹时传入。同一 SpeakerId 可对应多条声纹。
示例值：user_12345
     * @param string $CreateTime 声纹注册时间，ISO8601 格式，UTC 时区。
示例值：2025-04-24T10:20:30Z
     * @param string $UpdateTime 声纹最近一次更新时间，ISO8601 格式，UTC 时区。未被更新过时等于 CreateTime。
示例值：2025-04-24T10:20:30Z
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
        if (array_key_exists("VoicePrintId",$param) and $param["VoicePrintId"] !== null) {
            $this->VoicePrintId = $param["VoicePrintId"];
        }

        if (array_key_exists("SpeakerId",$param) and $param["SpeakerId"] !== null) {
            $this->SpeakerId = $param["SpeakerId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
