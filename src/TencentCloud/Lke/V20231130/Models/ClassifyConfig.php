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
 * 标签提取配置
 *
 * @method AppModel getModel() 获取模型配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModel(AppModel $Model) 设置模型配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGreeting() 获取欢迎语，200字符以内
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGreeting(string $Greeting) 设置欢迎语，200字符以内
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClassifyConfig extends AbstractModel
{
    /**
     * @var AppModel 模型配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Model;

    /**
     * @var array 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var string 欢迎语，200字符以内
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Greeting;

    /**
     * @param AppModel $Model 模型配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels 标签列表
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

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new ClassifyLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Greeting",$param) and $param["Greeting"] !== null) {
            $this->Greeting = $param["Greeting"];
        }
    }
}
