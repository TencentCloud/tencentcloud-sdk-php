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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FetchSqlGatewayStatementResult请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getSessionId() 获取Sql Gateway会话ID
 * @method void setSessionId(string $SessionId) 设置Sql Gateway会话ID
 * @method string getOperationHandleId() 获取sql的查询id
 * @method void setOperationHandleId(string $OperationHandleId) 设置sql的查询id
 * @method string getResultUri() 获取下一条结果的获取url，首次获取执行结果时可以为空，当获取下一批查询结果时需要传递
 * @method void setResultUri(string $ResultUri) 设置下一条结果的获取url，首次获取执行结果时可以为空，当获取下一批查询结果时需要传递
 */
class FetchSqlGatewayStatementResultRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string Sql Gateway会话ID
     */
    public $SessionId;

    /**
     * @var string sql的查询id
     */
    public $OperationHandleId;

    /**
     * @var string 下一条结果的获取url，首次获取执行结果时可以为空，当获取下一批查询结果时需要传递
     */
    public $ResultUri;

    /**
     * @param string $ClusterId 集群ID
     * @param string $SessionId Sql Gateway会话ID
     * @param string $OperationHandleId sql的查询id
     * @param string $ResultUri 下一条结果的获取url，首次获取执行结果时可以为空，当获取下一批查询结果时需要传递
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("OperationHandleId",$param) and $param["OperationHandleId"] !== null) {
            $this->OperationHandleId = $param["OperationHandleId"];
        }

        if (array_key_exists("ResultUri",$param) and $param["ResultUri"] !== null) {
            $this->ResultUri = $param["ResultUri"];
        }
    }
}
