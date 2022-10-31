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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务错误信息
 *
 * @method string getCode() 获取错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSolution() 获取解决方案
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSolution(string $Solution) 设置解决方案
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorLog() 获取错误日志信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorLog(string $ErrorLog) 设置错误日志信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHelpDoc() 获取文档提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHelpDoc(string $HelpDoc) 设置文档提示
注意：此字段可能返回 null，表示取不到有效值。
 */
class ErrorInfoItem extends AbstractModel
{
    /**
     * @var string 错误码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 解决方案
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Solution;

    /**
     * @var string 错误日志信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorLog;

    /**
     * @var string 文档提示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HelpDoc;

    /**
     * @param string $Code 错误码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Solution 解决方案
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorLog 错误日志信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HelpDoc 文档提示
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("ErrorLog",$param) and $param["ErrorLog"] !== null) {
            $this->ErrorLog = $param["ErrorLog"];
        }

        if (array_key_exists("HelpDoc",$param) and $param["HelpDoc"] !== null) {
            $this->HelpDoc = $param["HelpDoc"];
        }
    }
}
