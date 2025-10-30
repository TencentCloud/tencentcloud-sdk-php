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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TensorFlow、Pytorch、SK-learn镜像信息列表
 *
 * @method string getSparkImageId() 获取Spark镜像唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkImageId(string $SparkImageId) 设置Spark镜像唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSparkImageVersion() 获取Spark镜像版本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkImageVersion(string $SparkImageVersion) 设置Spark镜像版本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSparkImageType() 获取小版本镜像类型.1:TensorFlow、2:Pytorch、3:SK-learn

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkImageType(integer $SparkImageType) 设置小版本镜像类型.1:TensorFlow、2:Pytorch、3:SK-learn

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSparkImageTag() 获取镜像地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkImageTag(string $SparkImageTag) 设置镜像地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class EngineSessionImage extends AbstractModel
{
    /**
     * @var string Spark镜像唯一id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkImageId;

    /**
     * @var string Spark镜像版本名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkImageVersion;

    /**
     * @var integer 小版本镜像类型.1:TensorFlow、2:Pytorch、3:SK-learn

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkImageType;

    /**
     * @var string 镜像地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkImageTag;

    /**
     * @param string $SparkImageId Spark镜像唯一id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SparkImageVersion Spark镜像版本名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SparkImageType 小版本镜像类型.1:TensorFlow、2:Pytorch、3:SK-learn

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SparkImageTag 镜像地址
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
        if (array_key_exists("SparkImageId",$param) and $param["SparkImageId"] !== null) {
            $this->SparkImageId = $param["SparkImageId"];
        }

        if (array_key_exists("SparkImageVersion",$param) and $param["SparkImageVersion"] !== null) {
            $this->SparkImageVersion = $param["SparkImageVersion"];
        }

        if (array_key_exists("SparkImageType",$param) and $param["SparkImageType"] !== null) {
            $this->SparkImageType = $param["SparkImageType"];
        }

        if (array_key_exists("SparkImageTag",$param) and $param["SparkImageTag"] !== null) {
            $this->SparkImageTag = $param["SparkImageTag"];
        }
    }
}
