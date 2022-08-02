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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCloudRecording请求参数结构体
 *
 * @method integer getSdkAppId() 获取TRTC的SDKAppId，和录制的房间所对应的SDKAppId相同。
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的SDKAppId，和录制的房间所对应的SDKAppId相同。
 * @method string getTaskId() 获取录制任务的唯一Id，在启动录制成功后会返回。
 * @method void setTaskId(string $TaskId) 设置录制任务的唯一Id，在启动录制成功后会返回。
 * @method MixLayoutParams getMixLayoutParams() 获取需要更新的混流的布局参数。
 * @method void setMixLayoutParams(MixLayoutParams $MixLayoutParams) 设置需要更新的混流的布局参数。
 * @method SubscribeStreamUserIds getSubscribeStreamUserIds() 获取指定订阅流白名单或者黑名单。
 * @method void setSubscribeStreamUserIds(SubscribeStreamUserIds $SubscribeStreamUserIds) 设置指定订阅流白名单或者黑名单。
 */
class ModifyCloudRecordingRequest extends AbstractModel
{
    /**
     * @var integer TRTC的SDKAppId，和录制的房间所对应的SDKAppId相同。
     */
    public $SdkAppId;

    /**
     * @var string 录制任务的唯一Id，在启动录制成功后会返回。
     */
    public $TaskId;

    /**
     * @var MixLayoutParams 需要更新的混流的布局参数。
     */
    public $MixLayoutParams;

    /**
     * @var SubscribeStreamUserIds 指定订阅流白名单或者黑名单。
     */
    public $SubscribeStreamUserIds;

    /**
     * @param integer $SdkAppId TRTC的SDKAppId，和录制的房间所对应的SDKAppId相同。
     * @param string $TaskId 录制任务的唯一Id，在启动录制成功后会返回。
     * @param MixLayoutParams $MixLayoutParams 需要更新的混流的布局参数。
     * @param SubscribeStreamUserIds $SubscribeStreamUserIds 指定订阅流白名单或者黑名单。
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

        if (array_key_exists("MixLayoutParams",$param) and $param["MixLayoutParams"] !== null) {
            $this->MixLayoutParams = new MixLayoutParams();
            $this->MixLayoutParams->deserialize($param["MixLayoutParams"]);
        }

        if (array_key_exists("SubscribeStreamUserIds",$param) and $param["SubscribeStreamUserIds"] !== null) {
            $this->SubscribeStreamUserIds = new SubscribeStreamUserIds();
            $this->SubscribeStreamUserIds->deserialize($param["SubscribeStreamUserIds"]);
        }
    }
}
