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
 * QueryHunyuan3DTask返回参数结构体
 *
 * @method string getStatus() 获取<p>任务状态</p><p>枚举值：</p><ul><li>WAIT： 已排队，等待执行</li><li>RUN： 正在执行</li><li>DONE： 已成功完成，ResultFile3Ds 有值</li><li>FAIL： 已失败，ErrorCode / ErrorMessage 有值</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务状态</p><p>枚举值：</p><ul><li>WAIT： 已排队，等待执行</li><li>RUN： 正在执行</li><li>DONE： 已成功完成，ResultFile3Ds 有值</li><li>FAIL： 已失败，ErrorCode / ErrorMessage 有值</li></ul>
 * @method integer getProgress() 获取<p>进度百分比，0~100。未知时为 0；DONE 时应为 100；FAIL 时保留最后一次已知值</p>
 * @method void setProgress(integer $Progress) 设置<p>进度百分比，0~100。未知时为 0；DONE 时应为 100；FAIL 时保留最后一次已知值</p>
 * @method string getErrorCode() 获取<p>仅 Status=FAIL 时有值，字符串错误码（如 InternalError.ModelInference）</p>
 * @method void setErrorCode(string $ErrorCode) 设置<p>仅 Status=FAIL 时有值，字符串错误码（如 InternalError.ModelInference）</p>
 * @method string getErrorMessage() 获取<p>仅 Status=FAIL 时有值，详细文案</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>仅 Status=FAIL 时有值，详细文案</p>
 * @method array getResultFile3Ds() 获取<p>仅 Status=DONE 时有值，产物文件列表</p>
 * @method void setResultFile3Ds(array $ResultFile3Ds) 设置<p>仅 Status=DONE 时有值，产物文件列表</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class QueryHunyuan3DTaskResponse extends AbstractModel
{
    /**
     * @var string <p>任务状态</p><p>枚举值：</p><ul><li>WAIT： 已排队，等待执行</li><li>RUN： 正在执行</li><li>DONE： 已成功完成，ResultFile3Ds 有值</li><li>FAIL： 已失败，ErrorCode / ErrorMessage 有值</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>进度百分比，0~100。未知时为 0；DONE 时应为 100；FAIL 时保留最后一次已知值</p>
     */
    public $Progress;

    /**
     * @var string <p>仅 Status=FAIL 时有值，字符串错误码（如 InternalError.ModelInference）</p>
     */
    public $ErrorCode;

    /**
     * @var string <p>仅 Status=FAIL 时有值，详细文案</p>
     */
    public $ErrorMessage;

    /**
     * @var array <p>仅 Status=DONE 时有值，产物文件列表</p>
     */
    public $ResultFile3Ds;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status <p>任务状态</p><p>枚举值：</p><ul><li>WAIT： 已排队，等待执行</li><li>RUN： 正在执行</li><li>DONE： 已成功完成，ResultFile3Ds 有值</li><li>FAIL： 已失败，ErrorCode / ErrorMessage 有值</li></ul>
     * @param integer $Progress <p>进度百分比，0~100。未知时为 0；DONE 时应为 100；FAIL 时保留最后一次已知值</p>
     * @param string $ErrorCode <p>仅 Status=FAIL 时有值，字符串错误码（如 InternalError.ModelInference）</p>
     * @param string $ErrorMessage <p>仅 Status=FAIL 时有值，详细文案</p>
     * @param array $ResultFile3Ds <p>仅 Status=DONE 时有值，产物文件列表</p>
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

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ResultFile3Ds",$param) and $param["ResultFile3Ds"] !== null) {
            $this->ResultFile3Ds = [];
            foreach ($param["ResultFile3Ds"] as $key => $value){
                $obj = new File3D();
                $obj->deserialize($value);
                array_push($this->ResultFile3Ds, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
