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
 * 集群大版本镜像信息。
 *
 * @method string getImageVersionId() 获取镜像大版本ID
 * @method void setImageVersionId(string $ImageVersionId) 设置镜像大版本ID
 * @method string getImageVersion() 获取镜像大版本名称
 * @method void setImageVersion(string $ImageVersion) 设置镜像大版本名称
 * @method string getDescription() 获取镜像大版本描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置镜像大版本描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsPublic() 获取是否为公共版本：1：公共；2：私有
 * @method void setIsPublic(integer $IsPublic) 设置是否为公共版本：1：公共；2：私有
 * @method string getEngineType() 获取集群类型：SparkSQL/PrestoSQL/SparkBatch
 * @method void setEngineType(string $EngineType) 设置集群类型：SparkSQL/PrestoSQL/SparkBatch
 * @method integer getIsSharedEngine() 获取版本状态：1：初始化；2：上线；3：下线
 * @method void setIsSharedEngine(integer $IsSharedEngine) 设置版本状态：1：初始化；2：上线；3：下线
 * @method integer getState() 获取版本状态：1：初始化；2：上线；3：下线
 * @method void setState(integer $State) 设置版本状态：1：初始化；2：上线；3：下线
 * @method string getInsertTime() 获取插入时间
 * @method void setInsertTime(string $InsertTime) 设置插入时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class DataEngineImageVersion extends AbstractModel
{
    /**
     * @var string 镜像大版本ID
     */
    public $ImageVersionId;

    /**
     * @var string 镜像大版本名称
     */
    public $ImageVersion;

    /**
     * @var string 镜像大版本描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 是否为公共版本：1：公共；2：私有
     */
    public $IsPublic;

    /**
     * @var string 集群类型：SparkSQL/PrestoSQL/SparkBatch
     */
    public $EngineType;

    /**
     * @var integer 版本状态：1：初始化；2：上线；3：下线
     */
    public $IsSharedEngine;

    /**
     * @var integer 版本状态：1：初始化；2：上线；3：下线
     */
    public $State;

    /**
     * @var string 插入时间
     */
    public $InsertTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $ImageVersionId 镜像大版本ID
     * @param string $ImageVersion 镜像大版本名称
     * @param string $Description 镜像大版本描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsPublic 是否为公共版本：1：公共；2：私有
     * @param string $EngineType 集群类型：SparkSQL/PrestoSQL/SparkBatch
     * @param integer $IsSharedEngine 版本状态：1：初始化；2：上线；3：下线
     * @param integer $State 版本状态：1：初始化；2：上线；3：下线
     * @param string $InsertTime 插入时间
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
        if (array_key_exists("ImageVersionId",$param) and $param["ImageVersionId"] !== null) {
            $this->ImageVersionId = $param["ImageVersionId"];
        }

        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            $this->ImageVersion = $param["ImageVersion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("IsSharedEngine",$param) and $param["IsSharedEngine"] !== null) {
            $this->IsSharedEngine = $param["IsSharedEngine"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
