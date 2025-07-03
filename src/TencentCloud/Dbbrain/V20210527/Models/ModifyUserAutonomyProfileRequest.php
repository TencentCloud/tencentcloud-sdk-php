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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserAutonomyProfile请求参数结构体
 *
 * @method string getProfileType() 获取配置类型，为需要配置的功能枚举值，目前包含一下枚举值：AutonomyGlobal（自治功能全局配置）、RedisAutoScaleUp（Redis自治扩容配置）
 * @method void setProfileType(string $ProfileType) 设置配置类型，为需要配置的功能枚举值，目前包含一下枚举值：AutonomyGlobal（自治功能全局配置）、RedisAutoScaleUp（Redis自治扩容配置）
 * @method string getInstanceId() 获取实列ID。
 * @method void setInstanceId(string $InstanceId) 设置实列ID。
 * @method string getProduct() 获取服务产品类型，支持值包括： "redis" - 云数据库 Redis。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "redis" - 云数据库 Redis。
 * @method string getNewProfileInfo() 获取自治功能相关配置，标准JSON字符串格式。
 * @method void setNewProfileInfo(string $NewProfileInfo) 设置自治功能相关配置，标准JSON字符串格式。
 */
class ModifyUserAutonomyProfileRequest extends AbstractModel
{
    /**
     * @var string 配置类型，为需要配置的功能枚举值，目前包含一下枚举值：AutonomyGlobal（自治功能全局配置）、RedisAutoScaleUp（Redis自治扩容配置）
     */
    public $ProfileType;

    /**
     * @var string 实列ID。
     */
    public $InstanceId;

    /**
     * @var string 服务产品类型，支持值包括： "redis" - 云数据库 Redis。
     */
    public $Product;

    /**
     * @var string 自治功能相关配置，标准JSON字符串格式。
     */
    public $NewProfileInfo;

    /**
     * @param string $ProfileType 配置类型，为需要配置的功能枚举值，目前包含一下枚举值：AutonomyGlobal（自治功能全局配置）、RedisAutoScaleUp（Redis自治扩容配置）
     * @param string $InstanceId 实列ID。
     * @param string $Product 服务产品类型，支持值包括： "redis" - 云数据库 Redis。
     * @param string $NewProfileInfo 自治功能相关配置，标准JSON字符串格式。
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
        if (array_key_exists("ProfileType",$param) and $param["ProfileType"] !== null) {
            $this->ProfileType = $param["ProfileType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("NewProfileInfo",$param) and $param["NewProfileInfo"] !== null) {
            $this->NewProfileInfo = $param["NewProfileInfo"];
        }
    }
}
