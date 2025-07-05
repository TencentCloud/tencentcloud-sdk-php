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
 * DescribeAITranscription请求参数结构体
 *
 * @method string getTaskId() 获取查询任务状态，不使用时传入空字符串。
有两种查询方式：
1、只填写TaskId，这种方式使用TaskId来查询任务
2、TaskId为空字符串，填写SdkAppId和SessionId，这种方式不需要使用TaskId查询任务
 * @method void setTaskId(string $TaskId) 设置查询任务状态，不使用时传入空字符串。
有两种查询方式：
1、只填写TaskId，这种方式使用TaskId来查询任务
2、TaskId为空字符串，填写SdkAppId和SessionId，这种方式不需要使用TaskId查询任务
 * @method integer getSdkAppId() 获取TRTC的SdkAppId，和SessionId配合使用。
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的SdkAppId，和SessionId配合使用。
 * @method string getSessionId() 获取开启转录任务时传入的SessionId，和SdkAppId配合使用。
 * @method void setSessionId(string $SessionId) 设置开启转录任务时传入的SessionId，和SdkAppId配合使用。
 */
class DescribeAITranscriptionRequest extends AbstractModel
{
    /**
     * @var string 查询任务状态，不使用时传入空字符串。
有两种查询方式：
1、只填写TaskId，这种方式使用TaskId来查询任务
2、TaskId为空字符串，填写SdkAppId和SessionId，这种方式不需要使用TaskId查询任务
     */
    public $TaskId;

    /**
     * @var integer TRTC的SdkAppId，和SessionId配合使用。
     */
    public $SdkAppId;

    /**
     * @var string 开启转录任务时传入的SessionId，和SdkAppId配合使用。
     */
    public $SessionId;

    /**
     * @param string $TaskId 查询任务状态，不使用时传入空字符串。
有两种查询方式：
1、只填写TaskId，这种方式使用TaskId来查询任务
2、TaskId为空字符串，填写SdkAppId和SessionId，这种方式不需要使用TaskId查询任务
     * @param integer $SdkAppId TRTC的SdkAppId，和SessionId配合使用。
     * @param string $SessionId 开启转录任务时传入的SessionId，和SdkAppId配合使用。
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

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
