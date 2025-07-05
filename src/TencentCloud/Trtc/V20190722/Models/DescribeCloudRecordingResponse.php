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
 * DescribeCloudRecording返回参数结构体
 *
 * @method string getTaskId() 获取录制任务的唯一Id。
 * @method void setTaskId(string $TaskId) 设置录制任务的唯一Id。
 * @method string getStatus() 获取云端录制任务的状态信息。
Idle：表示当前录制任务空闲中
InProgress：表示当前录制任务正在进行中。
Exited：表示当前录制任务正在退出的过程中。
 * @method void setStatus(string $Status) 设置云端录制任务的状态信息。
Idle：表示当前录制任务空闲中
InProgress：表示当前录制任务正在进行中。
Exited：表示当前录制任务正在退出的过程中。
 * @method array getStorageFileList() 获取录制文件信息。
 * @method void setStorageFileList(array $StorageFileList) 设置录制文件信息。
 * @method string getRecorderKey() 获取转推录制任务发起时所填，标识一次录制
 * @method void setRecorderKey(string $RecorderKey) 设置转推录制任务发起时所填，标识一次录制
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloudRecordingResponse extends AbstractModel
{
    /**
     * @var string 录制任务的唯一Id。
     */
    public $TaskId;

    /**
     * @var string 云端录制任务的状态信息。
Idle：表示当前录制任务空闲中
InProgress：表示当前录制任务正在进行中。
Exited：表示当前录制任务正在退出的过程中。
     */
    public $Status;

    /**
     * @var array 录制文件信息。
     */
    public $StorageFileList;

    /**
     * @var string 转推录制任务发起时所填，标识一次录制
     */
    public $RecorderKey;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId 录制任务的唯一Id。
     * @param string $Status 云端录制任务的状态信息。
Idle：表示当前录制任务空闲中
InProgress：表示当前录制任务正在进行中。
Exited：表示当前录制任务正在退出的过程中。
     * @param array $StorageFileList 录制文件信息。
     * @param string $RecorderKey 转推录制任务发起时所填，标识一次录制
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StorageFileList",$param) and $param["StorageFileList"] !== null) {
            $this->StorageFileList = [];
            foreach ($param["StorageFileList"] as $key => $value){
                $obj = new StorageFile();
                $obj->deserialize($value);
                array_push($this->StorageFileList, $obj);
            }
        }

        if (array_key_exists("RecorderKey",$param) and $param["RecorderKey"] !== null) {
            $this->RecorderKey = $param["RecorderKey"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
