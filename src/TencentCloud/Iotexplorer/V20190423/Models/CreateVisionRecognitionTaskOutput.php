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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量创建 TWeSee 语义理解任务的响应
 *
 * @method boolean getCreated() 获取创建任务成功
 * @method void setCreated(boolean $Created) 设置创建任务成功
 * @method string getTaskId() 获取任务 ID
 * @method void setTaskId(string $TaskId) 设置任务 ID
 * @method string getErrorCode() 获取错误码
 * @method void setErrorCode(string $ErrorCode) 设置错误码
 * @method string getErrorMessage() 获取错误消息
 * @method void setErrorMessage(string $ErrorMessage) 设置错误消息
 */
class CreateVisionRecognitionTaskOutput extends AbstractModel
{
    /**
     * @var boolean 创建任务成功
     */
    public $Created;

    /**
     * @var string 任务 ID
     */
    public $TaskId;

    /**
     * @var string 错误码
     */
    public $ErrorCode;

    /**
     * @var string 错误消息
     */
    public $ErrorMessage;

    /**
     * @param boolean $Created 创建任务成功
     * @param string $TaskId 任务 ID
     * @param string $ErrorCode 错误码
     * @param string $ErrorMessage 错误消息
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
        if (array_key_exists("Created",$param) and $param["Created"] !== null) {
            $this->Created = $param["Created"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}
