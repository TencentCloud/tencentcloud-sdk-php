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
 * DescribeCloudModeration请求参数结构体
 *
 * @method integer getSdkAppId() 获取TRTC的SDKAppId，和录制的房间所对应的SDKAppId相同。
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的SDKAppId，和录制的房间所对应的SDKAppId相同。
 * @method string getTaskId() 获取云端审核任务的唯一Id，在启动切片任务成功后会返回。
 * @method void setTaskId(string $TaskId) 设置云端审核任务的唯一Id，在启动切片任务成功后会返回。
 */
class DescribeCloudModerationRequest extends AbstractModel
{
    /**
     * @var integer TRTC的SDKAppId，和录制的房间所对应的SDKAppId相同。
     */
    public $SdkAppId;

    /**
     * @var string 云端审核任务的唯一Id，在启动切片任务成功后会返回。
     */
    public $TaskId;

    /**
     * @param integer $SdkAppId TRTC的SDKAppId，和录制的房间所对应的SDKAppId相同。
     * @param string $TaskId 云端审核任务的唯一Id，在启动切片任务成功后会返回。
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
