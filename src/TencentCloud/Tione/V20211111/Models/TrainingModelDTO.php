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
 * 模型列表
 *
 * @method string getTrainingModelId() 获取模型id
 * @method void setTrainingModelId(string $TrainingModelId) 设置模型id
 * @method string getTrainingModelName() 获取模型名称
 * @method void setTrainingModelName(string $TrainingModelName) 设置模型名称
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取模型创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置模型创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTrainingModelVersions() 获取模型版本列表。默认不返回，仅在指定请求参数开启时返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingModelVersions(array $TrainingModelVersions) 设置模型版本列表。默认不返回，仅在指定请求参数开启时返回。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TrainingModelDTO extends AbstractModel
{
    /**
     * @var string 模型id
     */
    public $TrainingModelId;

    /**
     * @var string 模型名称
     */
    public $TrainingModelName;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 模型创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var array 模型版本列表。默认不返回，仅在指定请求参数开启时返回。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingModelVersions;

    /**
     * @param string $TrainingModelId 模型id
     * @param string $TrainingModelName 模型名称
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 模型创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TrainingModelVersions 模型版本列表。默认不返回，仅在指定请求参数开启时返回。
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
        if (array_key_exists("TrainingModelId",$param) and $param["TrainingModelId"] !== null) {
            $this->TrainingModelId = $param["TrainingModelId"];
        }

        if (array_key_exists("TrainingModelName",$param) and $param["TrainingModelName"] !== null) {
            $this->TrainingModelName = $param["TrainingModelName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TrainingModelVersions",$param) and $param["TrainingModelVersions"] !== null) {
            $this->TrainingModelVersions = [];
            foreach ($param["TrainingModelVersions"] as $key => $value){
                $obj = new TrainingModelVersionDTO();
                $obj->deserialize($value);
                array_push($this->TrainingModelVersions, $obj);
            }
        }
    }
}
