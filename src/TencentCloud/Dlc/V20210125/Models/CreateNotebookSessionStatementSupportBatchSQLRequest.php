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
 * CreateNotebookSessionStatementSupportBatchSQL请求参数结构体
 *
 * @method string getSessionId() 获取Session唯一标识
 * @method void setSessionId(string $SessionId) 设置Session唯一标识
 * @method string getCode() 获取执行的代码
 * @method void setCode(string $Code) 设置执行的代码
 * @method string getKind() 获取类型，当前支持：spark、pyspark、sparkr、sql
 * @method void setKind(string $Kind) 设置类型，当前支持：spark、pyspark、sparkr、sql
 * @method boolean getSaveResult() 获取是否保存运行结果
 * @method void setSaveResult(boolean $SaveResult) 设置是否保存运行结果
 */
class CreateNotebookSessionStatementSupportBatchSQLRequest extends AbstractModel
{
    /**
     * @var string Session唯一标识
     */
    public $SessionId;

    /**
     * @var string 执行的代码
     */
    public $Code;

    /**
     * @var string 类型，当前支持：spark、pyspark、sparkr、sql
     */
    public $Kind;

    /**
     * @var boolean 是否保存运行结果
     */
    public $SaveResult;

    /**
     * @param string $SessionId Session唯一标识
     * @param string $Code 执行的代码
     * @param string $Kind 类型，当前支持：spark、pyspark、sparkr、sql
     * @param boolean $SaveResult 是否保存运行结果
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

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("SaveResult",$param) and $param["SaveResult"] !== null) {
            $this->SaveResult = $param["SaveResult"];
        }
    }
}
