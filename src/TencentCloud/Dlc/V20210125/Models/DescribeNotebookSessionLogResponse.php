<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNotebookSessionLog返回参数结构体
 *
 * @method array getLogs() 获取日志信息，默认获取最新的200条
 * @method void setLogs(array $Logs) 设置日志信息，默认获取最新的200条
 * @method integer getLimit() 获取分页参数，默认200
 * @method void setLimit(integer $Limit) 设置分页参数，默认200
 * @method integer getOffset() 获取分页参数，默认0
 * @method void setOffset(integer $Offset) 设置分页参数，默认0
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNotebookSessionLogResponse extends AbstractModel
{
    /**
     * @var array 日志信息，默认获取最新的200条
     */
    public $Logs;

    /**
     * @var integer 分页参数，默认200
     */
    public $Limit;

    /**
     * @var integer 分页参数，默认0
     */
    public $Offset;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Logs 日志信息，默认获取最新的200条
     * @param integer $Limit 分页参数，默认200
     * @param integer $Offset 分页参数，默认0
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Logs",$param) and $param["Logs"] !== null) {
            $this->Logs = $param["Logs"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
