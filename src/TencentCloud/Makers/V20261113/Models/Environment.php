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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境
 *
 * @method string getSlug() 获取<p>环境标识，创建后不可改</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlug(string $Slug) 设置<p>环境标识，创建后不可改</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>环境名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>环境名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>Production、Preview、Custom</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>Production、Preview、Custom</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBranches() 获取<p>关联分支，支持通配</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBranches(array $Branches) 设置<p>关联分支，支持通配</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoDeploy() 获取<p>是否自动部署。Production 恒为 true</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoDeploy(boolean $AutoDeploy) 设置<p>是否自动部署。Production 恒为 true</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCustomDomains() 获取<p>绑定的自定义域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomDomains(array $CustomDomains) 设置<p>绑定的自定义域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEnvVars() 获取<p>环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvVars(array $EnvVars) 设置<p>环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedOn() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedOn(string $CreatedOn) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedOn() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedOn(string $ModifiedOn) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class Environment extends AbstractModel
{
    /**
     * @var string <p>环境标识，创建后不可改</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Slug;

    /**
     * @var string <p>环境名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>Production、Preview、Custom</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var array <p>关联分支，支持通配</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Branches;

    /**
     * @var boolean <p>是否自动部署。Production 恒为 true</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoDeploy;

    /**
     * @var array <p>绑定的自定义域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomDomains;

    /**
     * @var array <p>环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvVars;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedOn;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedOn;

    /**
     * @param string $Slug <p>环境标识，创建后不可改</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>环境名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>Production、Preview、Custom</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Branches <p>关联分支，支持通配</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoDeploy <p>是否自动部署。Production 恒为 true</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CustomDomains <p>绑定的自定义域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EnvVars <p>环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedOn <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedOn <p>更新时间</p>
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
        if (array_key_exists("Slug",$param) and $param["Slug"] !== null) {
            $this->Slug = $param["Slug"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Branches",$param) and $param["Branches"] !== null) {
            $this->Branches = $param["Branches"];
        }

        if (array_key_exists("AutoDeploy",$param) and $param["AutoDeploy"] !== null) {
            $this->AutoDeploy = $param["AutoDeploy"];
        }

        if (array_key_exists("CustomDomains",$param) and $param["CustomDomains"] !== null) {
            $this->CustomDomains = $param["CustomDomains"];
        }

        if (array_key_exists("EnvVars",$param) and $param["EnvVars"] !== null) {
            $this->EnvVars = [];
            foreach ($param["EnvVars"] as $key => $value){
                $obj = new EnvironmentEnvVar();
                $obj->deserialize($value);
                array_push($this->EnvVars, $obj);
            }
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }
    }
}
