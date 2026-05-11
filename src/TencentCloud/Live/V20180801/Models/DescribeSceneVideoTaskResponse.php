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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSceneVideoTask返回参数结构体
 *
 * @method array getInfoList() 获取<p>一些特殊场景的返回信息。</p>
 * @method void setInfoList(array $InfoList) 设置<p>一些特殊场景的返回信息。</p>
 * @method string getStatus() 获取<p>任务状态。</p><p>枚举值：</p><ul><li>DONE： 任务结束。</li><li>RUN： 任务运行中。</li><li>WAIT： 任务准备中。</li><li>FAIL： 任务失败。</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务状态。</p><p>枚举值：</p><ul><li>DONE： 任务结束。</li><li>RUN： 任务运行中。</li><li>WAIT： 任务准备中。</li><li>FAIL： 任务失败。</li></ul>
 * @method string getResolution() 获取<p>输出视频的分辨率。示例：720x1280。</p>
 * @method void setResolution(string $Resolution) 设置<p>输出视频的分辨率。示例：720x1280。</p>
 * @method string getMessage() 获取<p>错误信息。</p>
 * @method void setMessage(string $Message) 设置<p>错误信息。</p>
 * @method array getVideoUrls() 获取<p>输出的视频Url。默认过期时间:12小时，请尽快拉取并转存。也可以使用私有Cos桶长期存储。</p>
 * @method void setVideoUrls(array $VideoUrls) 设置<p>输出的视频Url。默认过期时间:12小时，请尽快拉取并转存。也可以使用私有Cos桶长期存储。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSceneVideoTaskResponse extends AbstractModel
{
    /**
     * @var array <p>一些特殊场景的返回信息。</p>
     */
    public $InfoList;

    /**
     * @var string <p>任务状态。</p><p>枚举值：</p><ul><li>DONE： 任务结束。</li><li>RUN： 任务运行中。</li><li>WAIT： 任务准备中。</li><li>FAIL： 任务失败。</li></ul>
     */
    public $Status;

    /**
     * @var string <p>输出视频的分辨率。示例：720x1280。</p>
     */
    public $Resolution;

    /**
     * @var string <p>错误信息。</p>
     */
    public $Message;

    /**
     * @var array <p>输出的视频Url。默认过期时间:12小时，请尽快拉取并转存。也可以使用私有Cos桶长期存储。</p>
     */
    public $VideoUrls;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $InfoList <p>一些特殊场景的返回信息。</p>
     * @param string $Status <p>任务状态。</p><p>枚举值：</p><ul><li>DONE： 任务结束。</li><li>RUN： 任务运行中。</li><li>WAIT： 任务准备中。</li><li>FAIL： 任务失败。</li></ul>
     * @param string $Resolution <p>输出视频的分辨率。示例：720x1280。</p>
     * @param string $Message <p>错误信息。</p>
     * @param array $VideoUrls <p>输出的视频Url。默认过期时间:12小时，请尽快拉取并转存。也可以使用私有Cos桶长期存储。</p>
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
        if (array_key_exists("InfoList",$param) and $param["InfoList"] !== null) {
            $this->InfoList = [];
            foreach ($param["InfoList"] as $key => $value){
                $obj = new SceneVideoOutputInfo();
                $obj->deserialize($value);
                array_push($this->InfoList, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
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
