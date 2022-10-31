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
 * 错误信息及告警信息对象
 *
 * @method string getMessage() 获取提示信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置提示信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSolution() 获取解决方案
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSolution(string $Solution) 设置解决方案
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHelpDoc() 获取文档提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHelpDoc(string $HelpDoc) 设置文档提示
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProcessStepTip extends AbstractModel
{
    /**
     * @var string 提示信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 解决方案
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Solution;

    /**
     * @var string 文档提示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HelpDoc;

    /**
     * @param string $Message 提示信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Solution 解决方案
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
        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("HelpDoc",$param) and $param["HelpDoc"] !== null) {
            $this->HelpDoc = $param["HelpDoc"];
        }
    }
}
