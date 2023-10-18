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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FetchSqlGatewayStatementResult返回参数结构体
 *
 * @method array getErrorMessage() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(array $ErrorMessage) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultType() 获取返回类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultType(string $ResultType) 设置返回类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsQueryResult() 获取是否DQL结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsQueryResult(boolean $IsQueryResult) 设置是否DQL结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultKind() 获取结果类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultKind(string $ResultKind) 设置结果类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method StatementResult getResults() 获取结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResults(StatementResult $Results) 设置结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNextResultUri() 获取下一次请求的uri
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextResultUri(string $NextResultUri) 设置下一次请求的uri
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class FetchSqlGatewayStatementResultResponse extends AbstractModel
{
    /**
     * @var array 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var string 返回类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultType;

    /**
     * @var boolean 是否DQL结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsQueryResult;

    /**
     * @var string 结果类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultKind;

    /**
     * @var StatementResult 结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Results;

    /**
     * @var string 下一次请求的uri
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextResultUri;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ErrorMessage 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultType 返回类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsQueryResult 是否DQL结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultKind 结果类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param StatementResult $Results 结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NextResultUri 下一次请求的uri
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ResultType",$param) and $param["ResultType"] !== null) {
            $this->ResultType = $param["ResultType"];
        }

        if (array_key_exists("IsQueryResult",$param) and $param["IsQueryResult"] !== null) {
            $this->IsQueryResult = $param["IsQueryResult"];
        }

        if (array_key_exists("ResultKind",$param) and $param["ResultKind"] !== null) {
            $this->ResultKind = $param["ResultKind"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = new StatementResult();
            $this->Results->deserialize($param["Results"]);
        }

        if (array_key_exists("NextResultUri",$param) and $param["NextResultUri"] !== null) {
            $this->NextResultUri = $param["NextResultUri"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
