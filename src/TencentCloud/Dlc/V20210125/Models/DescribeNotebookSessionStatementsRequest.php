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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNotebookSessionStatements请求参数结构体
 *
 * @method string getSessionId() 获取Session唯一标识
 * @method void setSessionId(string $SessionId) 设置Session唯一标识
 * @method string getBatchId() 获取批任务id
 * @method void setBatchId(string $BatchId) 设置批任务id
 */
class DescribeNotebookSessionStatementsRequest extends AbstractModel
{
    /**
     * @var string Session唯一标识
     */
    public $SessionId;

    /**
     * @var string 批任务id
     */
    public $BatchId;

    /**
     * @param string $SessionId Session唯一标识
     * @param string $BatchId 批任务id
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }
    }
}
