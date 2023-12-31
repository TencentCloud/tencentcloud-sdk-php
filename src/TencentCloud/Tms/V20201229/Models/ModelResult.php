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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型检测结果
 *
 * @method string getContent() 获取模型检测出的违规内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置模型检测出的违规内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPositions() 获取模型检测出的违规内容的位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPositions(array $Positions) 设置模型检测出的违规内容的位置
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModelResult extends AbstractModel
{
    /**
     * @var string 模型检测出的违规内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var array 模型检测出的违规内容的位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Positions;

    /**
     * @param string $Content 模型检测出的违规内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Positions 模型检测出的违规内容的位置
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

        if (array_key_exists("Positions",$param) and $param["Positions"] !== null) {
            $this->Positions = [];
            foreach ($param["Positions"] as $key => $value){
                $obj = new Positions();
                $obj->deserialize($value);
                array_push($this->Positions, $obj);
            }
        }
    }
}
