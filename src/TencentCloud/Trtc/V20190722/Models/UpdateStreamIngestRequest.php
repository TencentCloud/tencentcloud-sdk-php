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
 * UpdateStreamIngest请求参数结构体
 *
 * @method integer getSdkAppId() 获取TRTC的SDKAppId，和任务的房间所对应的SDKAppId相同
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的SDKAppId，和任务的房间所对应的SDKAppId相同
 * @method string getTaskId() 获取任务的唯一Id，在启动任务成功后会返回。
 * @method void setTaskId(string $TaskId) 设置任务的唯一Id，在启动任务成功后会返回。
 * @method string getStreamUrl() 获取源流URL。
 * @method void setStreamUrl(string $StreamUrl) 设置源流URL。
 * @method integer getVolume() 获取音量，取值范围[0, 100]，默认100，表示原音量。
 * @method void setVolume(integer $Volume) 设置音量，取值范围[0, 100]，默认100，表示原音量。
 * @method boolean getIsPause() 获取是否暂停，默认false表示不暂停。暂停期间任务仍在进行中仍会计费，如果要销毁任务请调用停止接口。
 * @method void setIsPause(boolean $IsPause) 设置是否暂停，默认false表示不暂停。暂停期间任务仍在进行中仍会计费，如果要销毁任务请调用停止接口。
 */
class UpdateStreamIngestRequest extends AbstractModel
{
    /**
     * @var integer TRTC的SDKAppId，和任务的房间所对应的SDKAppId相同
     */
    public $SdkAppId;

    /**
     * @var string 任务的唯一Id，在启动任务成功后会返回。
     */
    public $TaskId;

    /**
     * @var string 源流URL。
     */
    public $StreamUrl;

    /**
     * @var integer 音量，取值范围[0, 100]，默认100，表示原音量。
     */
    public $Volume;

    /**
     * @var boolean 是否暂停，默认false表示不暂停。暂停期间任务仍在进行中仍会计费，如果要销毁任务请调用停止接口。
     */
    public $IsPause;

    /**
     * @param integer $SdkAppId TRTC的SDKAppId，和任务的房间所对应的SDKAppId相同
     * @param string $TaskId 任务的唯一Id，在启动任务成功后会返回。
     * @param string $StreamUrl 源流URL。
     * @param integer $Volume 音量，取值范围[0, 100]，默认100，表示原音量。
     * @param boolean $IsPause 是否暂停，默认false表示不暂停。暂停期间任务仍在进行中仍会计费，如果要销毁任务请调用停止接口。
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

        if (array_key_exists("StreamUrl",$param) and $param["StreamUrl"] !== null) {
            $this->StreamUrl = $param["StreamUrl"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("IsPause",$param) and $param["IsPause"] !== null) {
            $this->IsPause = $param["IsPause"];
        }
    }
}
