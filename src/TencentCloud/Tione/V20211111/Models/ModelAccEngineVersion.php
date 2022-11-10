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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型加速引擎版本
 *
 * @method string getModelFormat() 获取模型格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelFormat(string $ModelFormat) 设置模型格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEngineVersions() 获取引擎版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineVersions(array $EngineVersions) 设置引擎版本信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModelAccEngineVersion extends AbstractModel
{
    /**
     * @var string 模型格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelFormat;

    /**
     * @var array 引擎版本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineVersions;

    /**
     * @param string $ModelFormat 模型格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EngineVersions 引擎版本信息
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
        if (array_key_exists("ModelFormat",$param) and $param["ModelFormat"] !== null) {
            $this->ModelFormat = $param["ModelFormat"];
        }

        if (array_key_exists("EngineVersions",$param) and $param["EngineVersions"] !== null) {
            $this->EngineVersions = [];
            foreach ($param["EngineVersions"] as $key => $value){
                $obj = new EngineVersion();
                $obj->deserialize($value);
                array_push($this->EngineVersions, $obj);
            }
        }
    }
}
