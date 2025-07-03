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
 * 平台镜像信息详情
 *
 * @method string getFramework() 获取框架名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFramework(string $Framework) 设置框架名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageType() 获取镜像类型: ccr or tcr
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageType(string $ImageType) 设置镜像类型: ccr or tcr
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageUrl() 获取镜像地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageUrl(string $ImageUrl) 设置镜像地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegistryRegion() 获取TCR镜像示例所属地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistryRegion(string $RegistryRegion) 设置TCR镜像示例所属地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegistryId() 获取TCR镜像所属实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistryId(string $RegistryId) 设置TCR镜像所属实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageName() 获取镜像名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageName(string $ImageName) 设置镜像名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageId() 获取镜像Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageId(string $ImageId) 设置镜像Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrameworkVersion() 获取框架版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameworkVersion(string $FrameworkVersion) 设置框架版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSupportGpuList() 获取支持的gpu列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportGpuList(array $SupportGpuList) 设置支持的gpu列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtraAttributes() 获取业务属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraAttributes(array $ExtraAttributes) 设置业务属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getImageRange() 获取镜像适用场景Train/Inference/Notebook
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageRange(array $ImageRange) 设置镜像适用场景Train/Inference/Notebook
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportDistributedDeploy() 获取是否支持分布式部署
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportDistributedDeploy(boolean $SupportDistributedDeploy) 设置是否支持分布式部署
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionScope() 获取支持的地域 all(所有地域)/autonomous(自动驾驶地域)/general(通用地域)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionScope(string $RegionScope) 设置支持的地域 all(所有地域)/autonomous(自动驾驶地域)/general(通用地域)
注意：此字段可能返回 null，表示取不到有效值。
 */
class PlatformImageInfo extends AbstractModel
{
    /**
     * @var string 框架名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Framework;

    /**
     * @var string 镜像类型: ccr or tcr
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageType;

    /**
     * @var string 镜像地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageUrl;

    /**
     * @var string TCR镜像示例所属地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistryRegion;

    /**
     * @var string TCR镜像所属实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistryId;

    /**
     * @var string 镜像名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageName;

    /**
     * @var string 镜像Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageId;

    /**
     * @var string 框架版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameworkVersion;

    /**
     * @var array 支持的gpu列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportGpuList;

    /**
     * @var string 描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array 业务属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraAttributes;

    /**
     * @var array 镜像适用场景Train/Inference/Notebook
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageRange;

    /**
     * @var boolean 是否支持分布式部署
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportDistributedDeploy;

    /**
     * @var string 支持的地域 all(所有地域)/autonomous(自动驾驶地域)/general(通用地域)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionScope;

    /**
     * @param string $Framework 框架名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageType 镜像类型: ccr or tcr
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageUrl 镜像地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegistryRegion TCR镜像示例所属地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegistryId TCR镜像所属实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageName 镜像名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageId 镜像Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrameworkVersion 框架版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SupportGpuList 支持的gpu列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExtraAttributes 业务属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ImageRange 镜像适用场景Train/Inference/Notebook
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportDistributedDeploy 是否支持分布式部署
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionScope 支持的地域 all(所有地域)/autonomous(自动驾驶地域)/general(通用地域)
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

        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("FrameworkVersion",$param) and $param["FrameworkVersion"] !== null) {
            $this->FrameworkVersion = $param["FrameworkVersion"];
        }

        if (array_key_exists("SupportGpuList",$param) and $param["SupportGpuList"] !== null) {
            $this->SupportGpuList = $param["SupportGpuList"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ExtraAttributes",$param) and $param["ExtraAttributes"] !== null) {
            $this->ExtraAttributes = [];
            foreach ($param["ExtraAttributes"] as $key => $value){
                $obj = new Attribute();
                $obj->deserialize($value);
                array_push($this->ExtraAttributes, $obj);
            }
        }

        if (array_key_exists("ImageRange",$param) and $param["ImageRange"] !== null) {
            $this->ImageRange = $param["ImageRange"];
        }

        if (array_key_exists("SupportDistributedDeploy",$param) and $param["SupportDistributedDeploy"] !== null) {
            $this->SupportDistributedDeploy = $param["SupportDistributedDeploy"];
        }

        if (array_key_exists("RegionScope",$param) and $param["RegionScope"] !== null) {
            $this->RegionScope = $param["RegionScope"];
        }
    }
}
