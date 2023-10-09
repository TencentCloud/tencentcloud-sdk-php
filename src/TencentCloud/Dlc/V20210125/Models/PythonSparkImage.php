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
 * python-spark镜像信息。
 *
 * @method string getSparkImageId() 获取spark镜像唯一id
 * @method void setSparkImageId(string $SparkImageId) 设置spark镜像唯一id
 * @method string getChildImageVersionId() 获取集群小版本镜像id
 * @method void setChildImageVersionId(string $ChildImageVersionId) 设置集群小版本镜像id
 * @method string getSparkImageVersion() 获取spark镜像名称
 * @method void setSparkImageVersion(string $SparkImageVersion) 设置spark镜像名称
 * @method string getDescription() 获取spark镜像描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置spark镜像描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class PythonSparkImage extends AbstractModel
{
    /**
     * @var string spark镜像唯一id
     */
    public $SparkImageId;

    /**
     * @var string 集群小版本镜像id
     */
    public $ChildImageVersionId;

    /**
     * @var string spark镜像名称
     */
    public $SparkImageVersion;

    /**
     * @var string spark镜像描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $SparkImageId spark镜像唯一id
     * @param string $ChildImageVersionId 集群小版本镜像id
     * @param string $SparkImageVersion spark镜像名称
     * @param string $Description spark镜像描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
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

        if (array_key_exists("ChildImageVersionId",$param) and $param["ChildImageVersionId"] !== null) {
            $this->ChildImageVersionId = $param["ChildImageVersionId"];
        }

        if (array_key_exists("SparkImageVersion",$param) and $param["SparkImageVersion"] !== null) {
            $this->SparkImageVersion = $param["SparkImageVersion"];
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
    }
}
