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
 * 实例启动模板简要信息。
 *
 * @method integer getLatestVersionNumber() 获取实例启动模版本号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestVersionNumber(integer $LatestVersionNumber) 设置实例启动模版本号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLaunchTemplateId() 获取实例启动模板ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLaunchTemplateId(string $LaunchTemplateId) 设置实例启动模板ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLaunchTemplateName() 获取实例启动模板名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLaunchTemplateName(string $LaunchTemplateName) 设置实例启动模板名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDefaultVersionNumber() 获取实例启动模板默认版本号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultVersionNumber(integer $DefaultVersionNumber) 设置实例启动模板默认版本号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLaunchTemplateVersionCount() 获取实例启动模板包含的版本总数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLaunchTemplateVersionCount(integer $LaunchTemplateVersionCount) 设置实例启动模板包含的版本总数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedBy() 获取创建该模板的用户UIN。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedBy(string $CreatedBy) 设置创建该模板的用户UIN。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationTime() 获取创建该模板的时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTime(string $CreationTime) 设置创建该模板的时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LaunchTemplateInfo extends AbstractModel
{
    /**
     * @var integer 实例启动模版本号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestVersionNumber;

    /**
     * @var string 实例启动模板ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LaunchTemplateId;

    /**
     * @var string 实例启动模板名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LaunchTemplateName;

    /**
     * @var integer 实例启动模板默认版本号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultVersionNumber;

    /**
     * @var integer 实例启动模板包含的版本总数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LaunchTemplateVersionCount;

    /**
     * @var string 创建该模板的用户UIN。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedBy;

    /**
     * @var string 创建该模板的时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTime;

    /**
     * @param integer $LatestVersionNumber 实例启动模版本号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LaunchTemplateId 实例启动模板ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LaunchTemplateName 实例启动模板名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DefaultVersionNumber 实例启动模板默认版本号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LaunchTemplateVersionCount 实例启动模板包含的版本总数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedBy 创建该模板的用户UIN。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationTime 创建该模板的时间。
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
        if (array_key_exists("LatestVersionNumber",$param) and $param["LatestVersionNumber"] !== null) {
            $this->LatestVersionNumber = $param["LatestVersionNumber"];
        }

        if (array_key_exists("LaunchTemplateId",$param) and $param["LaunchTemplateId"] !== null) {
            $this->LaunchTemplateId = $param["LaunchTemplateId"];
        }

        if (array_key_exists("LaunchTemplateName",$param) and $param["LaunchTemplateName"] !== null) {
            $this->LaunchTemplateName = $param["LaunchTemplateName"];
        }

        if (array_key_exists("DefaultVersionNumber",$param) and $param["DefaultVersionNumber"] !== null) {
            $this->DefaultVersionNumber = $param["DefaultVersionNumber"];
        }

        if (array_key_exists("LaunchTemplateVersionCount",$param) and $param["LaunchTemplateVersionCount"] !== null) {
            $this->LaunchTemplateVersionCount = $param["LaunchTemplateVersionCount"];
        }

        if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
            $this->CreatedBy = $param["CreatedBy"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }
    }
}
