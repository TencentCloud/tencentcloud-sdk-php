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
 * tcr仓库信息
 *
 * @method string getRegion() 获取地域（填数字）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域（填数字）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegistryId() 获取实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistryId(string $RegistryId) 设置实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegistryName() 获取实例名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistryName(string $RegistryName) 设置实例名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepoName() 获取仓库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoName(string $RepoName) 设置仓库名
注意：此字段可能返回 null，表示取不到有效值。
 */
class TcrRepoInfo extends AbstractModel
{
    /**
     * @var string 地域（填数字）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistryId;

    /**
     * @var string 实例名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistryName;

    /**
     * @var string 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string 仓库名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoName;

    /**
     * @param string $Region 地域（填数字）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegistryId 实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegistryName 实例名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepoName 仓库名
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RegistryName",$param) and $param["RegistryName"] !== null) {
            $this->RegistryName = $param["RegistryName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }
    }
}
