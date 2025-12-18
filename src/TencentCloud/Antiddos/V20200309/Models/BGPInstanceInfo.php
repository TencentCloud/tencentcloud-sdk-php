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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * {
    "InstanceId": "bgp-00000436",
    "InstanceChargePrepaid": {
        "Period": 3,
        "RenewFlag": "NOTIFY_AND_AUTO_RENEW"
    },
    "EnterprisePackageConfig": null,
    "StandardPackageConfig": null,
    "StandardPlusPackageConfig": {
        "Region": "ap-guangzhou",
        "ProtectCount": "TWO_TIMES",
        "ProtectIpCount": 1,
        "Bandwidth": 100,
        "ElasticBandwidthFlag": true
    },
    "TagInfoList": [
    ],
    "PackageType": "StandardPlus",
    "InstanceCount": 1,
    "InstanceChargeType": "PREPAID",
    "DryRun": false
}
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取续费周期相关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置续费周期相关
注意：此字段可能返回 null，表示取不到有效值。
 * @method EnterprisePackageConfig getEnterprisePackageConfig() 获取企业版高防包配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnterprisePackageConfig(EnterprisePackageConfig $EnterprisePackageConfig) 设置企业版高防包配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method StandardPackageConfig getStandardPackageConfig() 获取标准版高防包配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandardPackageConfig(StandardPackageConfig $StandardPackageConfig) 设置标准版高防包配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method StandardPlusPackageConfig getStandardPlusPackageConfig() 获取标准版2.0高防包配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandardPlusPackageConfig(StandardPlusPackageConfig $StandardPlusPackageConfig) 设置标准版2.0高防包配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagInfoList() 获取tag信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagInfoList(array $TagInfoList) 设置tag信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageType() 获取高防包类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageType(string $PackageType) 设置高防包类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceCount() 获取数量1
 * @method void setInstanceCount(integer $InstanceCount) 设置数量1
 * @method string getInstanceChargeType() 获取付费方式
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置付费方式
 * @method boolean getDryRun() 获取无实际意义，创建时如果为true，只进行参数校验，默认为false
 * @method void setDryRun(boolean $DryRun) 设置无实际意义，创建时如果为true，只进行参数校验，默认为false
 */
class BGPInstanceInfo extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var InstanceChargePrepaid 续费周期相关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceChargePrepaid;

    /**
     * @var EnterprisePackageConfig 企业版高防包配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnterprisePackageConfig;

    /**
     * @var StandardPackageConfig 标准版高防包配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StandardPackageConfig;

    /**
     * @var StandardPlusPackageConfig 标准版2.0高防包配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StandardPlusPackageConfig;

    /**
     * @var array tag信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagInfoList;

    /**
     * @var string 高防包类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageType;

    /**
     * @var integer 数量1
     */
    public $InstanceCount;

    /**
     * @var string 付费方式
     */
    public $InstanceChargeType;

    /**
     * @var boolean 无实际意义，创建时如果为true，只进行参数校验，默认为false
     */
    public $DryRun;

    /**
     * @param string $InstanceId 实例Id
     * @param InstanceChargePrepaid $InstanceChargePrepaid 续费周期相关
注意：此字段可能返回 null，表示取不到有效值。
     * @param EnterprisePackageConfig $EnterprisePackageConfig 企业版高防包配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param StandardPackageConfig $StandardPackageConfig 标准版高防包配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param StandardPlusPackageConfig $StandardPlusPackageConfig 标准版2.0高防包配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagInfoList tag信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageType 高防包类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceCount 数量1
     * @param string $InstanceChargeType 付费方式
     * @param boolean $DryRun 无实际意义，创建时如果为true，只进行参数校验，默认为false
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("EnterprisePackageConfig",$param) and $param["EnterprisePackageConfig"] !== null) {
            $this->EnterprisePackageConfig = new EnterprisePackageConfig();
            $this->EnterprisePackageConfig->deserialize($param["EnterprisePackageConfig"]);
        }

        if (array_key_exists("StandardPackageConfig",$param) and $param["StandardPackageConfig"] !== null) {
            $this->StandardPackageConfig = new StandardPackageConfig();
            $this->StandardPackageConfig->deserialize($param["StandardPackageConfig"]);
        }

        if (array_key_exists("StandardPlusPackageConfig",$param) and $param["StandardPlusPackageConfig"] !== null) {
            $this->StandardPlusPackageConfig = new StandardPlusPackageConfig();
            $this->StandardPlusPackageConfig->deserialize($param["StandardPlusPackageConfig"]);
        }

        if (array_key_exists("TagInfoList",$param) and $param["TagInfoList"] !== null) {
            $this->TagInfoList = [];
            foreach ($param["TagInfoList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagInfoList, $obj);
            }
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
