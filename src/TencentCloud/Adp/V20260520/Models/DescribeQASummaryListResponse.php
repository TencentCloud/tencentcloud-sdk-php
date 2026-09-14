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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeQASummaryList返回参数结构体
 *
 * @method integer getNotAcceptedCount() 获取<p>未采纳数量</p>
 * @method void setNotAcceptedCount(integer $NotAcceptedCount) 设置<p>未采纳数量</p>
 * @method integer getPendingVerifyCount() 获取<p>待校验数量</p>
 * @method void setPendingVerifyCount(integer $PendingVerifyCount) 设置<p>待校验数量</p>
 * @method array getQaList() 获取<p>QA 列表</p>
 * @method void setQaList(array $QaList) 设置<p>QA 列表</p>
 * @method integer getTotalCount() 获取<p>总数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>总数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeQASummaryListResponse extends AbstractModel
{
    /**
     * @var integer <p>未采纳数量</p>
     */
    public $NotAcceptedCount;

    /**
     * @var integer <p>待校验数量</p>
     */
    public $PendingVerifyCount;

    /**
     * @var array <p>QA 列表</p>
     */
    public $QaList;

    /**
     * @var integer <p>总数</p>
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $NotAcceptedCount <p>未采纳数量</p>
     * @param integer $PendingVerifyCount <p>待校验数量</p>
     * @param array $QaList <p>QA 列表</p>
     * @param integer $TotalCount <p>总数</p>
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
        if (array_key_exists("NotAcceptedCount",$param) and $param["NotAcceptedCount"] !== null) {
            $this->NotAcceptedCount = $param["NotAcceptedCount"];
        }

        if (array_key_exists("PendingVerifyCount",$param) and $param["PendingVerifyCount"] !== null) {
            $this->PendingVerifyCount = $param["PendingVerifyCount"];
        }

        if (array_key_exists("QaList",$param) and $param["QaList"] !== null) {
            $this->QaList = [];
            foreach ($param["QaList"] as $key => $value){
                $obj = new QASummary();
                $obj->deserialize($value);
                array_push($this->QaList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
