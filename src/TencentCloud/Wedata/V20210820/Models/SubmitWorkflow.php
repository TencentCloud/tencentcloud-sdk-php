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
 * 提交工作流实体
 *
 * @method array getTaskIds() 获取被提交的任务id集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskIds(array $TaskIds) 设置被提交的任务id集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getResult() 获取执行结果
 * @method void setResult(boolean $Result) 设置执行结果
 * @method string getErrorDesc() 获取执行情况备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorDesc(string $ErrorDesc) 设置执行情况备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorId() 获取执行情况id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorId(string $ErrorId) 设置执行情况id
注意：此字段可能返回 null，表示取不到有效值。
 */
class SubmitWorkflow extends AbstractModel
{
    /**
     * @var array 被提交的任务id集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskIds;

    /**
     * @var boolean 执行结果
     */
    public $Result;

    /**
     * @var string 执行情况备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorDesc;

    /**
     * @var string 执行情况id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorId;

    /**
     * @param array $TaskIds 被提交的任务id集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Result 执行结果
     * @param string $ErrorDesc 执行情况备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorId 执行情况id
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ErrorDesc",$param) and $param["ErrorDesc"] !== null) {
            $this->ErrorDesc = $param["ErrorDesc"];
        }

        if (array_key_exists("ErrorId",$param) and $param["ErrorId"] !== null) {
            $this->ErrorId = $param["ErrorId"];
        }
    }
}
