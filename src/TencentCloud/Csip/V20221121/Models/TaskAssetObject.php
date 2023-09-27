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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务资产项
 *
 * @method string getAssetName() 获取资产名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetName(string $AssetName) 设置资产名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取	资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置	资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetType() 获取资产分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetType(string $AssetType) 设置资产分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAsset() 获取ip/域名/资产id，数据库id等
 * @method void setAsset(string $Asset) 设置ip/域名/资产id，数据库id等
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArn() 获取多云资产唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArn(string $Arn) 设置多云资产唯一id
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskAssetObject extends AbstractModel
{
    /**
     * @var string 资产名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetName;

    /**
     * @var string 	资产类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string 资产分类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetType;

    /**
     * @var string ip/域名/资产id，数据库id等
     */
    public $Asset;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 多云资产唯一id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Arn;

    /**
     * @param string $AssetName 资产名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 	资产类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetType 资产分类
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Asset ip/域名/资产id，数据库id等
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Arn 多云资产唯一id
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
        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = $param["Asset"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Arn",$param) and $param["Arn"] !== null) {
            $this->Arn = $param["Arn"];
        }
    }
}
