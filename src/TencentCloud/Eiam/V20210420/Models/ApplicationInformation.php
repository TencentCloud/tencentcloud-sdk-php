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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用信息列表。
 *
 * @method string getApplicationId() 获取应用ID，是应用的全局唯一标识。
 * @method void setApplicationId(string $ApplicationId) 设置应用ID，是应用的全局唯一标识。
 * @method string getDisplayName() 获取应用展示名称，长度限制：64个字符。 默认与应用名字相同。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置应用展示名称，长度限制：64个字符。 默认与应用名字相同。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedDate() 获取应用创建时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedDate(string $CreatedDate) 设置应用创建时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifiedDate() 获取上次更新时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifiedDate(string $LastModifiedDate) 设置上次更新时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAppStatus() 获取应用状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppStatus(boolean $AppStatus) 设置应用状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIcon() 获取应用图标。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIcon(string $Icon) 设置应用图标。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationType() 获取应用类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationType(string $ApplicationType) 设置应用类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientId() 获取客户端id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientId(string $ClientId) 设置客户端id。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApplicationInformation extends AbstractModel
{
    /**
     * @var string 应用ID，是应用的全局唯一标识。
     */
    public $ApplicationId;

    /**
     * @var string 应用展示名称，长度限制：64个字符。 默认与应用名字相同。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var string 应用创建时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedDate;

    /**
     * @var string 上次更新时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifiedDate;

    /**
     * @var boolean 应用状态。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppStatus;

    /**
     * @var string 应用图标。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Icon;

    /**
     * @var string 应用类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationType;

    /**
     * @var string 客户端id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientId;

    /**
     * @param string $ApplicationId 应用ID，是应用的全局唯一标识。
     * @param string $DisplayName 应用展示名称，长度限制：64个字符。 默认与应用名字相同。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedDate 应用创建时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifiedDate 上次更新时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AppStatus 应用状态。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Icon 应用图标。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationType 应用类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientId 客户端id。
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }

        if (array_key_exists("LastModifiedDate",$param) and $param["LastModifiedDate"] !== null) {
            $this->LastModifiedDate = $param["LastModifiedDate"];
        }

        if (array_key_exists("AppStatus",$param) and $param["AppStatus"] !== null) {
            $this->AppStatus = $param["AppStatus"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }
    }
}
