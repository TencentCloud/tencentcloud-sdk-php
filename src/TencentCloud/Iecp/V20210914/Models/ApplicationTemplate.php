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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用模板列表详情
 *
 * @method integer getId() 获取模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSource() 获取来源。1 自定义应用模板 ;  2 官方应用模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(integer $Source) 设置来源。1 自定义应用模板 ;  2 官方应用模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkloadKind() 获取应用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkloadKind(string $WorkloadKind) 设置应用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManageUrl() 获取管理地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManageUrl(string $ManageUrl) 设置管理地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDistributeTime() 获取发布时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDistributeTime(string $DistributeTime) 设置发布时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApplicationTemplate extends AbstractModel
{
    /**
     * @var integer 模板ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 模板名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 来源。1 自定义应用模板 ;  2 官方应用模板
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string 应用类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkloadKind;

    /**
     * @var string 管理地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManageUrl;

    /**
     * @var string 发布时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DistributeTime;

    /**
     * @param integer $Id 模板ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 模板名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Source 来源。1 自定义应用模板 ;  2 官方应用模板
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkloadKind 应用类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ManageUrl 管理地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DistributeTime 发布时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("WorkloadKind",$param) and $param["WorkloadKind"] !== null) {
            $this->WorkloadKind = $param["WorkloadKind"];
        }

        if (array_key_exists("ManageUrl",$param) and $param["ManageUrl"] !== null) {
            $this->ManageUrl = $param["ManageUrl"];
        }

        if (array_key_exists("DistributeTime",$param) and $param["DistributeTime"] !== null) {
            $this->DistributeTime = $param["DistributeTime"];
        }
    }
}
