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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 血缘资源实体
 *
 * @method string getResourceUniqueId() 获取实体原始唯一ID\n
备注：当血缘为表的列时候 唯一ID传表ResourceUniqueId::字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceUniqueId(string $ResourceUniqueId) 设置实体原始唯一ID\n
备注：当血缘为表的列时候 唯一ID传表ResourceUniqueId::字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceType() 获取实体类型
TABLE|METRIC|MODEL|SERVICE|COLUMN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(string $ResourceType) 设置实体类型
TABLE|METRIC|MODEL|SERVICE|COLUMN
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPlatform() 获取来源：WEDATA|THIRD
默认wedata
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlatform(string $Platform) 设置来源：WEDATA|THIRD
默认wedata
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceName() 获取业务名称：库名.表名｜指标名称｜模型名称|字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceName(string $ResourceName) 设置业务名称：库名.表名｜指标名称｜模型名称|字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述：表类型｜指标描述｜模型描述|字段描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述：表类型｜指标描述｜模型描述|字段描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceProperties() 获取resource 额外扩展参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceProperties(array $ResourceProperties) 设置resource 额外扩展参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLineageNodeId() 获取血缘节点唯一标识符号
 * @method void setLineageNodeId(string $LineageNodeId) 设置血缘节点唯一标识符号
 */
class LineageResouce extends AbstractModel
{
    /**
     * @var string 实体原始唯一ID\n
备注：当血缘为表的列时候 唯一ID传表ResourceUniqueId::字段名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceUniqueId;

    /**
     * @var string 实体类型
TABLE|METRIC|MODEL|SERVICE|COLUMN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var string 来源：WEDATA|THIRD
默认wedata
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Platform;

    /**
     * @var string 业务名称：库名.表名｜指标名称｜模型名称|字段名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceName;

    /**
     * @var string 描述：表类型｜指标描述｜模型描述|字段描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array resource 额外扩展参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceProperties;

    /**
     * @var string 血缘节点唯一标识符号
     */
    public $LineageNodeId;

    /**
     * @param string $ResourceUniqueId 实体原始唯一ID\n
备注：当血缘为表的列时候 唯一ID传表ResourceUniqueId::字段名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceType 实体类型
TABLE|METRIC|MODEL|SERVICE|COLUMN
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Platform 来源：WEDATA|THIRD
默认wedata
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceName 业务名称：库名.表名｜指标名称｜模型名称|字段名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述：表类型｜指标描述｜模型描述|字段描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceProperties resource 额外扩展参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LineageNodeId 血缘节点唯一标识符号
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
        if (array_key_exists("ResourceUniqueId",$param) and $param["ResourceUniqueId"] !== null) {
            $this->ResourceUniqueId = $param["ResourceUniqueId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ResourceProperties",$param) and $param["ResourceProperties"] !== null) {
            $this->ResourceProperties = [];
            foreach ($param["ResourceProperties"] as $key => $value){
                $obj = new LineageProperty();
                $obj->deserialize($value);
                array_push($this->ResourceProperties, $obj);
            }
        }

        if (array_key_exists("LineageNodeId",$param) and $param["LineageNodeId"] !== null) {
            $this->LineageNodeId = $param["LineageNodeId"];
        }
    }
}
