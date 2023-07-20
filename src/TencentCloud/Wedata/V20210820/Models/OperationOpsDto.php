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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 操作返回结果
 *
 * @method boolean getResult() 获取操作是否成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(boolean $Result) 设置操作是否成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultMsg() 获取操作结果详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultMsg(string $ResultMsg) 设置操作结果详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorId() 获取操作失败类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorId(string $ErrorId) 设置操作失败类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorDesc() 获取操作失败描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorDesc(string $ErrorDesc) 设置操作失败描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class OperationOpsDto extends AbstractModel
{
    /**
     * @var boolean 操作是否成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var string 操作结果详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultMsg;

    /**
     * @var string 操作失败类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorId;

    /**
     * @var string 操作失败描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorDesc;

    /**
     * @param boolean $Result 操作是否成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultMsg 操作结果详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorId 操作失败类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorDesc 操作失败描述
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ResultMsg",$param) and $param["ResultMsg"] !== null) {
            $this->ResultMsg = $param["ResultMsg"];
        }

        if (array_key_exists("ErrorId",$param) and $param["ErrorId"] !== null) {
            $this->ErrorId = $param["ErrorId"];
        }

        if (array_key_exists("ErrorDesc",$param) and $param["ErrorDesc"] !== null) {
            $this->ErrorDesc = $param["ErrorDesc"];
        }
    }
}
