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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据表分块信息。
 *
 * @method string getName() 获取分区列名。
 * @method void setName(string $Name) 设置分区列名。
 * @method string getType() 获取分区类型。
 * @method void setType(string $Type) 设置分区类型。
 * @method string getComment() 获取对分区的描述。
 * @method void setComment(string $Comment) 设置对分区的描述。
 * @method string getTransform() 获取隐式分区转换策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransform(string $Transform) 设置隐式分区转换策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTransformArgs() 获取转换策略参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransformArgs(array $TransformArgs) 设置转换策略参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class Partition extends AbstractModel
{
    /**
     * @var string 分区列名。
     */
    public $Name;

    /**
     * @var string 分区类型。
     */
    public $Type;

    /**
     * @var string 对分区的描述。
     */
    public $Comment;

    /**
     * @var string 隐式分区转换策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Transform;

    /**
     * @var array 转换策略参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransformArgs;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @param string $Name 分区列名。
     * @param string $Type 分区类型。
     * @param string $Comment 对分区的描述。
     * @param string $Transform 隐式分区转换策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TransformArgs 转换策略参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Transform",$param) and $param["Transform"] !== null) {
            $this->Transform = $param["Transform"];
        }

        if (array_key_exists("TransformArgs",$param) and $param["TransformArgs"] !== null) {
            $this->TransformArgs = $param["TransformArgs"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
