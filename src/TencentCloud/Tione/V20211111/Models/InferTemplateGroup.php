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
 * 推理镜像组
 *
 * @method string getFramework() 获取算法框架
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFramework(string $Framework) 设置算法框架
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrameworkVersion() 获取版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameworkVersion(string $FrameworkVersion) 设置版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGroups() 获取支持的训练框架集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroups(array $Groups) 设置支持的训练框架集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInferTemplates() 获取镜像模板参数列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInferTemplates(array $InferTemplates) 设置镜像模板参数列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class InferTemplateGroup extends AbstractModel
{
    /**
     * @var string 算法框架
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Framework;

    /**
     * @var string 版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameworkVersion;

    /**
     * @var array 支持的训练框架集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Groups;

    /**
     * @var array 镜像模板参数列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InferTemplates;

    /**
     * @param string $Framework 算法框架
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrameworkVersion 版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Groups 支持的训练框架集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InferTemplates 镜像模板参数列表
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
        if (array_key_exists("Framework",$param) and $param["Framework"] !== null) {
            $this->Framework = $param["Framework"];
        }

        if (array_key_exists("FrameworkVersion",$param) and $param["FrameworkVersion"] !== null) {
            $this->FrameworkVersion = $param["FrameworkVersion"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = $param["Groups"];
        }

        if (array_key_exists("InferTemplates",$param) and $param["InferTemplates"] !== null) {
            $this->InferTemplates = [];
            foreach ($param["InferTemplates"] as $key => $value){
                $obj = new InferTemplate();
                $obj->deserialize($value);
                array_push($this->InferTemplates, $obj);
            }
        }
    }
}
