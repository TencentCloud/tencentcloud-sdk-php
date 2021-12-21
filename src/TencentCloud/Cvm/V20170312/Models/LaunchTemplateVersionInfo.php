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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例启动模板版本集合
 *
 * @method integer getLaunchTemplateVersion() 获取实例启动模板版本号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLaunchTemplateVersion(integer $LaunchTemplateVersion) 设置实例启动模板版本号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LaunchTemplateVersionData getLaunchTemplateVersionData() 获取实例启动模板版本数据详情。
 * @method void setLaunchTemplateVersionData(LaunchTemplateVersionData $LaunchTemplateVersionData) 设置实例启动模板版本数据详情。
 * @method string getCreationTime() 获取实例启动模板版本创建时间。
 * @method void setCreationTime(string $CreationTime) 设置实例启动模板版本创建时间。
 * @method string getLaunchTemplateId() 获取实例启动模板ID。
 * @method void setLaunchTemplateId(string $LaunchTemplateId) 设置实例启动模板ID。
 * @method boolean getIsDefaultVersion() 获取是否为默认启动模板版本。
 * @method void setIsDefaultVersion(boolean $IsDefaultVersion) 设置是否为默认启动模板版本。
 * @method string getLaunchTemplateVersionDescription() 获取实例启动模板版本描述信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLaunchTemplateVersionDescription(string $LaunchTemplateVersionDescription) 设置实例启动模板版本描述信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedBy() 获取创建者。
 * @method void setCreatedBy(string $CreatedBy) 设置创建者。
 */
class LaunchTemplateVersionInfo extends AbstractModel
{
    /**
     * @var integer 实例启动模板版本号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LaunchTemplateVersion;

    /**
     * @var LaunchTemplateVersionData 实例启动模板版本数据详情。
     */
    public $LaunchTemplateVersionData;

    /**
     * @var string 实例启动模板版本创建时间。
     */
    public $CreationTime;

    /**
     * @var string 实例启动模板ID。
     */
    public $LaunchTemplateId;

    /**
     * @var boolean 是否为默认启动模板版本。
     */
    public $IsDefaultVersion;

    /**
     * @var string 实例启动模板版本描述信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LaunchTemplateVersionDescription;

    /**
     * @var string 创建者。
     */
    public $CreatedBy;

    /**
     * @param integer $LaunchTemplateVersion 实例启动模板版本号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LaunchTemplateVersionData $LaunchTemplateVersionData 实例启动模板版本数据详情。
     * @param string $CreationTime 实例启动模板版本创建时间。
     * @param string $LaunchTemplateId 实例启动模板ID。
     * @param boolean $IsDefaultVersion 是否为默认启动模板版本。
     * @param string $LaunchTemplateVersionDescription 实例启动模板版本描述信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedBy 创建者。
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
        if (array_key_exists("LaunchTemplateVersion",$param) and $param["LaunchTemplateVersion"] !== null) {
            $this->LaunchTemplateVersion = $param["LaunchTemplateVersion"];
        }

        if (array_key_exists("LaunchTemplateVersionData",$param) and $param["LaunchTemplateVersionData"] !== null) {
            $this->LaunchTemplateVersionData = new LaunchTemplateVersionData();
            $this->LaunchTemplateVersionData->deserialize($param["LaunchTemplateVersionData"]);
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("LaunchTemplateId",$param) and $param["LaunchTemplateId"] !== null) {
            $this->LaunchTemplateId = $param["LaunchTemplateId"];
        }

        if (array_key_exists("IsDefaultVersion",$param) and $param["IsDefaultVersion"] !== null) {
            $this->IsDefaultVersion = $param["IsDefaultVersion"];
        }

        if (array_key_exists("LaunchTemplateVersionDescription",$param) and $param["LaunchTemplateVersionDescription"] !== null) {
            $this->LaunchTemplateVersionDescription = $param["LaunchTemplateVersionDescription"];
        }

        if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
            $this->CreatedBy = $param["CreatedBy"];
        }
    }
}
