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
 * DescribeAuditLogList返回参数结构体
 *
 * @method array getAuditLogList() 获取<p>操作日志列表</p>
 * @method void setAuditLogList(array $AuditLogList) 设置<p>操作日志列表</p>
 * @method array getSearchAfter() 获取<p>es查询起始位置</p><p>用于入参查询下一页</p>
 * @method void setSearchAfter(array $SearchAfter) 设置<p>es查询起始位置</p><p>用于入参查询下一页</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAuditLogListResponse extends AbstractModel
{
    /**
     * @var array <p>操作日志列表</p>
     */
    public $AuditLogList;

    /**
     * @var array <p>es查询起始位置</p><p>用于入参查询下一页</p>
     */
    public $SearchAfter;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $AuditLogList <p>操作日志列表</p>
     * @param array $SearchAfter <p>es查询起始位置</p><p>用于入参查询下一页</p>
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
        if (array_key_exists("AuditLogList",$param) and $param["AuditLogList"] !== null) {
            $this->AuditLogList = [];
            foreach ($param["AuditLogList"] as $key => $value){
                $obj = new AuditLog();
                $obj->deserialize($value);
                array_push($this->AuditLogList, $obj);
            }
        }

        if (array_key_exists("SearchAfter",$param) and $param["SearchAfter"] !== null) {
            $this->SearchAfter = $param["SearchAfter"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
