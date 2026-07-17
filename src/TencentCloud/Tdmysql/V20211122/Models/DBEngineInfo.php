<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库引擎信息
 *
 * @method string getType() 获取<p>引擎类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>引擎类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取<p>引擎版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置<p>引擎版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>引擎名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>引擎名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>引擎描述</p>
 * @method void setDescription(string $Description) 设置<p>引擎描述</p>
 * @method boolean getNew() 获取<p>是否最新版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNew(boolean $New) 设置<p>是否最新版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSQLMode() 获取<p>支持的兼容的模式，以,分隔</p>
 * @method void setSQLMode(array $SQLMode) 设置<p>支持的兼容的模式，以,分隔</p>
 * @method boolean getIsSupportParamTemplate() 获取<p>是否支持参数模板</p>
 * @method void setIsSupportParamTemplate(boolean $IsSupportParamTemplate) 设置<p>是否支持参数模板</p>
 * @method boolean getIsSupportServerless() 获取<p>是否支持Serverless模式</p>
 * @method void setIsSupportServerless(boolean $IsSupportServerless) 设置<p>是否支持Serverless模式</p>
 */
class DBEngineInfo extends AbstractModel
{
    /**
     * @var string <p>引擎类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>引擎版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string <p>引擎名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>引擎描述</p>
     */
    public $Description;

    /**
     * @var boolean <p>是否最新版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $New;

    /**
     * @var array <p>支持的兼容的模式，以,分隔</p>
     */
    public $SQLMode;

    /**
     * @var boolean <p>是否支持参数模板</p>
     */
    public $IsSupportParamTemplate;

    /**
     * @var boolean <p>是否支持Serverless模式</p>
     */
    public $IsSupportServerless;

    /**
     * @param string $Type <p>引擎类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version <p>引擎版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>引擎名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>引擎描述</p>
     * @param boolean $New <p>是否最新版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SQLMode <p>支持的兼容的模式，以,分隔</p>
     * @param boolean $IsSupportParamTemplate <p>是否支持参数模板</p>
     * @param boolean $IsSupportServerless <p>是否支持Serverless模式</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("New",$param) and $param["New"] !== null) {
            $this->New = $param["New"];
        }

        if (array_key_exists("SQLMode",$param) and $param["SQLMode"] !== null) {
            $this->SQLMode = $param["SQLMode"];
        }

        if (array_key_exists("IsSupportParamTemplate",$param) and $param["IsSupportParamTemplate"] !== null) {
            $this->IsSupportParamTemplate = $param["IsSupportParamTemplate"];
        }

        if (array_key_exists("IsSupportServerless",$param) and $param["IsSupportServerless"] !== null) {
            $this->IsSupportServerless = $param["IsSupportServerless"];
        }
    }
}
