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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 调度任务日志错误提示信息
 *
 * @method string getContent() 获取执行日志错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置执行日志错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLineNum() 获取对应sql的行下标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLineNum(integer $LineNum) 设置对应sql的行下标
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getColumnNum() 获取对应sql的列下标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnNum(integer $ColumnNum) 设置对应sql的列下标
注意：此字段可能返回 null，表示取不到有效值。
 */
class JobLogErrorTip extends AbstractModel
{
    /**
     * @var string 执行日志错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var integer 对应sql的行下标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LineNum;

    /**
     * @var integer 对应sql的列下标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnNum;

    /**
     * @param string $Content 执行日志错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LineNum 对应sql的行下标
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ColumnNum 对应sql的列下标
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("LineNum",$param) and $param["LineNum"] !== null) {
            $this->LineNum = $param["LineNum"];
        }

        if (array_key_exists("ColumnNum",$param) and $param["ColumnNum"] !== null) {
            $this->ColumnNum = $param["ColumnNum"];
        }
    }
}
