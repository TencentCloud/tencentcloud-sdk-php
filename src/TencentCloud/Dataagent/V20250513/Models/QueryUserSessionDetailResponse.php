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
 * QueryUserSessionDetail返回参数结构体
 *
 * @method string getSubAccountUin() 获取<p>用户 Id</p>
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>用户 Id</p>
 * @method string getSessionId() 获取<p>会话id</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话id</p>
 * @method array getRecordList() 获取<p>会话详情数组</p>
 * @method void setRecordList(array $RecordList) 设置<p>会话详情数组</p>
 * @method integer getTotalCount() 获取<p>记录总数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>记录总数</p>
 * @method string getRunRecord() 获取<p>运行中的聊天请求, 返回为json字符串</p>
 * @method void setRunRecord(string $RunRecord) 设置<p>运行中的聊天请求, 返回为json字符串</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class QueryUserSessionDetailResponse extends AbstractModel
{
    /**
     * @var string <p>用户 Id</p>
     */
    public $SubAccountUin;

    /**
     * @var string <p>会话id</p>
     */
    public $SessionId;

    /**
     * @var array <p>会话详情数组</p>
     */
    public $RecordList;

    /**
     * @var integer <p>记录总数</p>
     */
    public $TotalCount;

    /**
     * @var string <p>运行中的聊天请求, 返回为json字符串</p>
     */
    public $RunRecord;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SubAccountUin <p>用户 Id</p>
     * @param string $SessionId <p>会话id</p>
     * @param array $RecordList <p>会话详情数组</p>
     * @param integer $TotalCount <p>记录总数</p>
     * @param string $RunRecord <p>运行中的聊天请求, 返回为json字符串</p>
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
        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RecordList",$param) and $param["RecordList"] !== null) {
            $this->RecordList = [];
            foreach ($param["RecordList"] as $key => $value){
                $obj = new RecordList();
                $obj->deserialize($value);
                array_push($this->RecordList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RunRecord",$param) and $param["RunRecord"] !== null) {
            $this->RunRecord = $param["RunRecord"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
