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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloneViralTask返回参数结构体
 *
 * @method string getStatus() 获取<p>任务状态</p><p>枚举值：</p><ul><li>WAIT： 等待中</li><li>RUN： 执行中</li><li>FAIL： 任务失败</li><li>DONE： 任务成功</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务状态</p><p>枚举值：</p><ul><li>WAIT： 等待中</li><li>RUN： 执行中</li><li>FAIL： 任务失败</li><li>DONE： 任务成功</li></ul>
 * @method string getMessage() 获取<p>失败时返回错误信息</p>
 * @method void setMessage(string $Message) 设置<p>失败时返回错误信息</p>
 * @method array getVideoUrls() 获取<p>当任务状态为 DONE时，返回视频Url列表，视频存储24小时</p>
 * @method void setVideoUrls(array $VideoUrls) 设置<p>当任务状态为 DONE时，返回视频Url列表，视频存储24小时</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloneViralTaskResponse extends AbstractModel
{
    /**
     * @var string <p>任务状态</p><p>枚举值：</p><ul><li>WAIT： 等待中</li><li>RUN： 执行中</li><li>FAIL： 任务失败</li><li>DONE： 任务成功</li></ul>
     */
    public $Status;

    /**
     * @var string <p>失败时返回错误信息</p>
     */
    public $Message;

    /**
     * @var array <p>当任务状态为 DONE时，返回视频Url列表，视频存储24小时</p>
     */
    public $VideoUrls;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status <p>任务状态</p><p>枚举值：</p><ul><li>WAIT： 等待中</li><li>RUN： 执行中</li><li>FAIL： 任务失败</li><li>DONE： 任务成功</li></ul>
     * @param string $Message <p>失败时返回错误信息</p>
     * @param array $VideoUrls <p>当任务状态为 DONE时，返回视频Url列表，视频存储24小时</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("VideoUrls",$param) and $param["VideoUrls"] !== null) {
            $this->VideoUrls = $param["VideoUrls"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
