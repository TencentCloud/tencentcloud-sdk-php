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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSessionDetails返回参数结构体
 *
 * @method array getRecordList() 获取会话记录详情
 * @method void setRecordList(array $RecordList) 设置会话记录详情
 * @method integer getRecordCount() 获取记录总数
 * @method void setRecordCount(integer $RecordCount) 设置记录总数
 * @method string getRunRecord() 获取当前在运行的record信息
 * @method void setRunRecord(string $RunRecord) 设置当前在运行的record信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetSessionDetailsResponse extends AbstractModel
{
    /**
     * @var array 会话记录详情
     */
    public $RecordList;

    /**
     * @var integer 记录总数
     */
    public $RecordCount;

    /**
     * @var string 当前在运行的record信息
     */
    public $RunRecord;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $RecordList 会话记录详情
     * @param integer $RecordCount 记录总数
     * @param string $RunRecord 当前在运行的record信息
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
        if (array_key_exists("RecordList",$param) and $param["RecordList"] !== null) {
            $this->RecordList = [];
            foreach ($param["RecordList"] as $key => $value){
                $obj = new Record();
                $obj->deserialize($value);
                array_push($this->RecordList, $obj);
            }
        }

        if (array_key_exists("RecordCount",$param) and $param["RecordCount"] !== null) {
            $this->RecordCount = $param["RecordCount"];
        }

        if (array_key_exists("RunRecord",$param) and $param["RunRecord"] !== null) {
            $this->RunRecord = $param["RunRecord"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
