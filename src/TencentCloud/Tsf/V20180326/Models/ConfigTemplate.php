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
 * 配置模板对象
 *
 * @method string getConfigTemplateId() 获取配置模板Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigTemplateId(string $ConfigTemplateId) 设置配置模板Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigTemplateName() 获取配置模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigTemplateName(string $ConfigTemplateName) 设置配置模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigTemplateDesc() 获取配置模板描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigTemplateDesc(string $ConfigTemplateDesc) 设置配置模板描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigTemplateType() 获取配置模板对应的微服务框架
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigTemplateType(string $ConfigTemplateType) 设置配置模板对应的微服务框架
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigTemplateValue() 获取配置模板数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigTemplateValue(string $ConfigTemplateValue) 设置配置模板数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConfigTemplate extends AbstractModel
{
    /**
     * @var string 配置模板Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigTemplateId;

    /**
     * @var string 配置模板名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigTemplateName;

    /**
     * @var string 配置模板描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigTemplateDesc;

    /**
     * @var string 配置模板对应的微服务框架
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigTemplateType;

    /**
     * @var string 配置模板数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigTemplateValue;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $ConfigTemplateId 配置模板Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigTemplateName 配置模板名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigTemplateDesc 配置模板描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigTemplateType 配置模板对应的微服务框架
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigTemplateValue 配置模板数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("ConfigTemplateId",$param) and $param["ConfigTemplateId"] !== null) {
            $this->ConfigTemplateId = $param["ConfigTemplateId"];
        }

        if (array_key_exists("ConfigTemplateName",$param) and $param["ConfigTemplateName"] !== null) {
            $this->ConfigTemplateName = $param["ConfigTemplateName"];
        }

        if (array_key_exists("ConfigTemplateDesc",$param) and $param["ConfigTemplateDesc"] !== null) {
            $this->ConfigTemplateDesc = $param["ConfigTemplateDesc"];
        }

        if (array_key_exists("ConfigTemplateType",$param) and $param["ConfigTemplateType"] !== null) {
            $this->ConfigTemplateType = $param["ConfigTemplateType"];
        }

        if (array_key_exists("ConfigTemplateValue",$param) and $param["ConfigTemplateValue"] !== null) {
            $this->ConfigTemplateValue = $param["ConfigTemplateValue"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
