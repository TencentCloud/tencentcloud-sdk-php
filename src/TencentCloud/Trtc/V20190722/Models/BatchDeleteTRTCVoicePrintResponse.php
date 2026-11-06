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
 * BatchDeleteTRTCVoicePrint返回参数结构体
 *
 * @method integer getSuccessCount() 获取成功删除的声纹数量（按数据库实际删除行数统计）
 * @method void setSuccessCount(integer $SuccessCount) 设置成功删除的声纹数量（按数据库实际删除行数统计）
 * @method integer getFailCount() 获取失败的声纹数量（通常是因为声纹不存在）
 * @method void setFailCount(integer $FailCount) 设置失败的声纹数量（通常是因为声纹不存在）
 * @method array getResults() 获取每个 VoicePrintId 的处理结果列表，元素为 VoicePrintBatchDeleteResult结构：{ VoiceprintId:string, ErrorCode:string, ErrorMessage:string }，成功项仅返回 VoiceprintId，失败项带 ErrorCode/ErrorMessage。
 * @method void setResults(array $Results) 设置每个 VoicePrintId 的处理结果列表，元素为 VoicePrintBatchDeleteResult结构：{ VoiceprintId:string, ErrorCode:string, ErrorMessage:string }，成功项仅返回 VoiceprintId，失败项带 ErrorCode/ErrorMessage。
 * @method string getMessage() 获取结果描述，成功时为 batch delete completed: X succeeded, Y failed
 * @method void setMessage(string $Message) 设置结果描述，成功时为 batch delete completed: X succeeded, Y failed
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class BatchDeleteTRTCVoicePrintResponse extends AbstractModel
{
    /**
     * @var integer 成功删除的声纹数量（按数据库实际删除行数统计）
     */
    public $SuccessCount;

    /**
     * @var integer 失败的声纹数量（通常是因为声纹不存在）
     */
    public $FailCount;

    /**
     * @var array 每个 VoicePrintId 的处理结果列表，元素为 VoicePrintBatchDeleteResult结构：{ VoiceprintId:string, ErrorCode:string, ErrorMessage:string }，成功项仅返回 VoiceprintId，失败项带 ErrorCode/ErrorMessage。
     */
    public $Results;

    /**
     * @var string 结果描述，成功时为 batch delete completed: X succeeded, Y failed
     */
    public $Message;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $SuccessCount 成功删除的声纹数量（按数据库实际删除行数统计）
     * @param integer $FailCount 失败的声纹数量（通常是因为声纹不存在）
     * @param array $Results 每个 VoicePrintId 的处理结果列表，元素为 VoicePrintBatchDeleteResult结构：{ VoiceprintId:string, ErrorCode:string, ErrorMessage:string }，成功项仅返回 VoiceprintId，失败项带 ErrorCode/ErrorMessage。
     * @param string $Message 结果描述，成功时为 batch delete completed: X succeeded, Y failed
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
        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new VoicePrintBatchDeleteResult();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
