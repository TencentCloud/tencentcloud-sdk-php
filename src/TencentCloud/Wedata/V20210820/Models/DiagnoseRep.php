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
 * DiagnoseRep
 *
 * @method Content getContent() 获取诊断信息内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(Content $Content) 设置诊断信息内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method Table getTable() 获取诊断结果相关信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTable(Table $Table) 设置诊断结果相关信息列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiagnoseRep extends AbstractModel
{
    /**
     * @var Content 诊断信息内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var Table 诊断结果相关信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Table;

    /**
     * @param Content $Content 诊断信息内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param Table $Table 诊断结果相关信息列表
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
            $this->Content = new Content();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = new Table();
            $this->Table->deserialize($param["Table"]);
        }
    }
}
