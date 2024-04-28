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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 知识摘要应用配置
 *
 * @method AppModel getModel() 获取模型配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModel(AppModel $Model) 设置模型配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method SummaryOutput getOutput() 获取知识摘要输出配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(SummaryOutput $Output) 设置知识摘要输出配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGreeting() 获取欢迎语，200字符以内
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGreeting(string $Greeting) 设置欢迎语，200字符以内
注意：此字段可能返回 null，表示取不到有效值。
 */
class SummaryConfig extends AbstractModel
{
    /**
     * @var AppModel 模型配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Model;

    /**
     * @var SummaryOutput 知识摘要输出配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @var string 欢迎语，200字符以内
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Greeting;

    /**
     * @param AppModel $Model 模型配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param SummaryOutput $Output 知识摘要输出配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Greeting 欢迎语，200字符以内
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = new AppModel();
            $this->Model->deserialize($param["Model"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new SummaryOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("Greeting",$param) and $param["Greeting"] !== null) {
            $this->Greeting = $param["Greeting"];
        }
    }
}
