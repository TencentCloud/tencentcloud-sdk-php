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
 * StopPublishCdnStream请求参数结构体
 *
 * @method integer getSdkAppId() 获取TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和转推的房间所对应的SdkAppId相同。
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和转推的房间所对应的SdkAppId相同。
 * @method string getTaskId() 获取唯一标识转推任务。
 * @method void setTaskId(string $TaskId) 设置唯一标识转推任务。
 * @method string getRecordKey() 获取录制任务 key，标识一个录制任务，对应转推任务发起时指定 RecordKey；
如果填写该参数，表示调用者希望立即结束该录制任务。当RecordKey 指定的录制任务正在录制当前转推任务时，录制任务立即结束，否则录制任务不受影响。
如果没有填写该参数，但是转推任务发起时填写了 RecordKey，则表示在续录等待时间结束后才结束录制任务，续录等待期间可以使用相同的 RecordKey 发起新的转推任务，和当前转推任务录制到同一文件。
 * @method void setRecordKey(string $RecordKey) 设置录制任务 key，标识一个录制任务，对应转推任务发起时指定 RecordKey；
如果填写该参数，表示调用者希望立即结束该录制任务。当RecordKey 指定的录制任务正在录制当前转推任务时，录制任务立即结束，否则录制任务不受影响。
如果没有填写该参数，但是转推任务发起时填写了 RecordKey，则表示在续录等待时间结束后才结束录制任务，续录等待期间可以使用相同的 RecordKey 发起新的转推任务，和当前转推任务录制到同一文件。
 */
class StopPublishCdnStreamRequest extends AbstractModel
{
    /**
     * @var integer TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和转推的房间所对应的SdkAppId相同。
     */
    public $SdkAppId;

    /**
     * @var string 唯一标识转推任务。
     */
    public $TaskId;

    /**
     * @var string 录制任务 key，标识一个录制任务，对应转推任务发起时指定 RecordKey；
如果填写该参数，表示调用者希望立即结束该录制任务。当RecordKey 指定的录制任务正在录制当前转推任务时，录制任务立即结束，否则录制任务不受影响。
如果没有填写该参数，但是转推任务发起时填写了 RecordKey，则表示在续录等待时间结束后才结束录制任务，续录等待期间可以使用相同的 RecordKey 发起新的转推任务，和当前转推任务录制到同一文件。
     */
    public $RecordKey;

    /**
     * @param integer $SdkAppId TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和转推的房间所对应的SdkAppId相同。
     * @param string $TaskId 唯一标识转推任务。
     * @param string $RecordKey 录制任务 key，标识一个录制任务，对应转推任务发起时指定 RecordKey；
如果填写该参数，表示调用者希望立即结束该录制任务。当RecordKey 指定的录制任务正在录制当前转推任务时，录制任务立即结束，否则录制任务不受影响。
如果没有填写该参数，但是转推任务发起时填写了 RecordKey，则表示在续录等待时间结束后才结束录制任务，续录等待期间可以使用相同的 RecordKey 发起新的转推任务，和当前转推任务录制到同一文件。
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

        if (array_key_exists("RecordKey",$param) and $param["RecordKey"] !== null) {
            $this->RecordKey = $param["RecordKey"];
        }
    }
}
