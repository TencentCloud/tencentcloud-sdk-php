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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 最新会话信息
 *
 * @method string getSessionId() 获取会话ID
 * @method void setSessionId(string $SessionId) 设置会话ID
 * @method string getRemoteDeviceId() 获取远端设备ID
 * @method void setRemoteDeviceId(string $RemoteDeviceId) 设置远端设备ID
 * @method string getFieldDeviceId() 获取现场设备ID
 * @method void setFieldDeviceId(string $FieldDeviceId) 设置现场设备ID
 * @method string getResolution() 获取分辨率
 * @method void setResolution(string $Resolution) 设置分辨率
 * @method integer getStartTime() 获取会话开始时间
 * @method void setStartTime(integer $StartTime) 设置会话开始时间
 * @method integer getLatestUpdateTime() 获取最后更新时间
 * @method void setLatestUpdateTime(integer $LatestUpdateTime) 设置最后更新时间
 */
class RecentSessionInfo extends AbstractModel
{
    /**
     * @var string 会话ID
     */
    public $SessionId;

    /**
     * @var string 远端设备ID
     */
    public $RemoteDeviceId;

    /**
     * @var string 现场设备ID
     */
    public $FieldDeviceId;

    /**
     * @var string 分辨率
     */
    public $Resolution;

    /**
     * @var integer 会话开始时间
     */
    public $StartTime;

    /**
     * @var integer 最后更新时间
     */
    public $LatestUpdateTime;

    /**
     * @param string $SessionId 会话ID
     * @param string $RemoteDeviceId 远端设备ID
     * @param string $FieldDeviceId 现场设备ID
     * @param string $Resolution 分辨率
     * @param integer $StartTime 会话开始时间
     * @param integer $LatestUpdateTime 最后更新时间
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RemoteDeviceId",$param) and $param["RemoteDeviceId"] !== null) {
            $this->RemoteDeviceId = $param["RemoteDeviceId"];
        }

        if (array_key_exists("FieldDeviceId",$param) and $param["FieldDeviceId"] !== null) {
            $this->FieldDeviceId = $param["FieldDeviceId"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("LatestUpdateTime",$param) and $param["LatestUpdateTime"] !== null) {
            $this->LatestUpdateTime = $param["LatestUpdateTime"];
        }
    }
}
