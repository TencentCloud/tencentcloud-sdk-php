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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配置中心
 *
 * @method string getConfigType() 获取配置中心类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigType(string $ConfigType) 设置配置中心类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigCenterInstanceId() 获取配置中心实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigCenterInstanceId(string $ConfigCenterInstanceId) 设置配置中心实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigCenterInstanceName() 获取配置中心实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigCenterInstanceName(string $ConfigCenterInstanceName) 设置配置中心实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionId() 获取实例地域id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionId(string $RegionId) 设置实例地域id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceId() 获取命名空间id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间id
注意：此字段可能返回 null，表示取不到有效值。
 */
class TsfConfigCenter extends AbstractModel
{
    /**
     * @var string 配置中心类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigType;

    /**
     * @var string 配置中心实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigCenterInstanceId;

    /**
     * @var string 配置中心实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigCenterInstanceName;

    /**
     * @var string 实例地域id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionId;

    /**
     * @var string 命名空间id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceId;

    /**
     * @param string $ConfigType 配置中心类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigCenterInstanceId 配置中心实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigCenterInstanceName 配置中心实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionId 实例地域id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceId 命名空间id
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
        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            $this->ConfigType = $param["ConfigType"];
        }

        if (array_key_exists("ConfigCenterInstanceId",$param) and $param["ConfigCenterInstanceId"] !== null) {
            $this->ConfigCenterInstanceId = $param["ConfigCenterInstanceId"];
        }

        if (array_key_exists("ConfigCenterInstanceName",$param) and $param["ConfigCenterInstanceName"] !== null) {
            $this->ConfigCenterInstanceName = $param["ConfigCenterInstanceName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }
    }
}
