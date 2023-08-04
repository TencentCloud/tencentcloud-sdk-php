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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询网关服务版本信息返回数据
 *
 * @method string getName() 获取服务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置服务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取服务版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置服务版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestVersion() 获取服务最新版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestVersion(string $LatestVersion) 设置服务最新版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsUpdate() 获取是否需要更新
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUpdate(boolean $IsUpdate) 设置是否需要更新
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUpgradeInfo() 获取升级信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpgradeInfo(array $UpgradeInfo) 设置升级信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeGatewayVersion extends AbstractModel
{
    /**
     * @var string 服务名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 服务版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 服务最新版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestVersion;

    /**
     * @var boolean 是否需要更新
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUpdate;

    /**
     * @var array 升级信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpgradeInfo;

    /**
     * @param string $Name 服务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 服务版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestVersion 服务最新版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsUpdate 是否需要更新
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UpgradeInfo 升级信息
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("LatestVersion",$param) and $param["LatestVersion"] !== null) {
            $this->LatestVersion = $param["LatestVersion"];
        }

        if (array_key_exists("IsUpdate",$param) and $param["IsUpdate"] !== null) {
            $this->IsUpdate = $param["IsUpdate"];
        }

        if (array_key_exists("UpgradeInfo",$param) and $param["UpgradeInfo"] !== null) {
            $this->UpgradeInfo = $param["UpgradeInfo"];
        }
    }
}
