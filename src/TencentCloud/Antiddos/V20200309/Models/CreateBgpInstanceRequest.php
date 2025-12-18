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
 * CreateBgpInstance请求参数结构体
 *
 * @method string getInstanceChargeType() 获取付费类型：付费模式：PREPAID 预付费 POSTPAID_BY_MONTH 后付费
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置付费类型：付费模式：PREPAID 预付费 POSTPAID_BY_MONTH 后付费
 * @method string getPackageType() 获取高防包类型：高防包类型，Enterprise(企业版) Standard(标准版) StandardPlus(标准版2.0)
 * @method void setPackageType(string $PackageType) 设置高防包类型：高防包类型，Enterprise(企业版) Standard(标准版) StandardPlus(标准版2.0)
 * @method integer getInstanceCount() 获取购买高防包的数量，一次购买数量不超过10
 * @method void setInstanceCount(integer $InstanceCount) 设置购买高防包的数量，一次购买数量不超过10
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取{ "Period": 3, "RenewFlag": "NOTIFY_AND_AUTO_RENEW" }
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置{ "Period": 3, "RenewFlag": "NOTIFY_AND_AUTO_RENEW" }
 * @method EnterprisePackageConfig getEnterprisePackageConfig() 获取{ "Region": "ap-guangzhou", "ProtectIpCount": 1, "BasicProtectBandwidth": 300, "Bandwidth": 100, "ElasticProtectLimit": 0, "ElasticBandwidthFlag": true }
 * @method void setEnterprisePackageConfig(EnterprisePackageConfig $EnterprisePackageConfig) 设置{ "Region": "ap-guangzhou", "ProtectIpCount": 1, "BasicProtectBandwidth": 300, "Bandwidth": 100, "ElasticProtectLimit": 0, "ElasticBandwidthFlag": true }
 * @method StandardPackageConfig getStandardPackageConfig() 获取{ "Region": "ap-guangzhou", "ProtectIpCount": 1, "BasicProtectBandwidth": 300, "Bandwidth": 100, "ElasticProtectLimit": 0, "ElasticBandwidthFlag": true }
 * @method void setStandardPackageConfig(StandardPackageConfig $StandardPackageConfig) 设置{ "Region": "ap-guangzhou", "ProtectIpCount": 1, "BasicProtectBandwidth": 300, "Bandwidth": 100, "ElasticProtectLimit": 0, "ElasticBandwidthFlag": true }
 * @method StandardPlusPackageConfig getStandardPlusPackageConfig() 获取{ "Region": "ap-guangzhou", "ProtectCount": "TWO_TIMES", "ProtectIpCount": 1, "Bandwidth": 100, "ElasticBandwidthFlag": true }
 * @method void setStandardPlusPackageConfig(StandardPlusPackageConfig $StandardPlusPackageConfig) 设置{ "Region": "ap-guangzhou", "ProtectCount": "TWO_TIMES", "ProtectIpCount": 1, "Bandwidth": 100, "ElasticBandwidthFlag": true }
 * @method array getTagInfoList() 获取[ { "TagKey": "beal-test",                 "TagValue": "beal-test"               }             ]
 * @method void setTagInfoList(array $TagInfoList) 设置[ { "TagKey": "beal-test",                 "TagValue": "beal-test"               }             ]
 * @method boolean getDryRun() 获取默认为false,true表示只进行参数校验，不进行实际购买
 * @method void setDryRun(boolean $DryRun) 设置默认为false,true表示只进行参数校验，不进行实际购买
 */
class CreateBgpInstanceRequest extends AbstractModel
{
    /**
     * @var string 付费类型：付费模式：PREPAID 预付费 POSTPAID_BY_MONTH 后付费
     */
    public $InstanceChargeType;

    /**
     * @var string 高防包类型：高防包类型，Enterprise(企业版) Standard(标准版) StandardPlus(标准版2.0)
     */
    public $PackageType;

    /**
     * @var integer 购买高防包的数量，一次购买数量不超过10
     */
    public $InstanceCount;

    /**
     * @var InstanceChargePrepaid { "Period": 3, "RenewFlag": "NOTIFY_AND_AUTO_RENEW" }
     */
    public $InstanceChargePrepaid;

    /**
     * @var EnterprisePackageConfig { "Region": "ap-guangzhou", "ProtectIpCount": 1, "BasicProtectBandwidth": 300, "Bandwidth": 100, "ElasticProtectLimit": 0, "ElasticBandwidthFlag": true }
     */
    public $EnterprisePackageConfig;

    /**
     * @var StandardPackageConfig { "Region": "ap-guangzhou", "ProtectIpCount": 1, "BasicProtectBandwidth": 300, "Bandwidth": 100, "ElasticProtectLimit": 0, "ElasticBandwidthFlag": true }
     */
    public $StandardPackageConfig;

    /**
     * @var StandardPlusPackageConfig { "Region": "ap-guangzhou", "ProtectCount": "TWO_TIMES", "ProtectIpCount": 1, "Bandwidth": 100, "ElasticBandwidthFlag": true }
     */
    public $StandardPlusPackageConfig;

    /**
     * @var array [ { "TagKey": "beal-test",                 "TagValue": "beal-test"               }             ]
     */
    public $TagInfoList;

    /**
     * @var boolean 默认为false,true表示只进行参数校验，不进行实际购买
     */
    public $DryRun;

    /**
     * @param string $InstanceChargeType 付费类型：付费模式：PREPAID 预付费 POSTPAID_BY_MONTH 后付费
     * @param string $PackageType 高防包类型：高防包类型，Enterprise(企业版) Standard(标准版) StandardPlus(标准版2.0)
     * @param integer $InstanceCount 购买高防包的数量，一次购买数量不超过10
     * @param InstanceChargePrepaid $InstanceChargePrepaid { "Period": 3, "RenewFlag": "NOTIFY_AND_AUTO_RENEW" }
     * @param EnterprisePackageConfig $EnterprisePackageConfig { "Region": "ap-guangzhou", "ProtectIpCount": 1, "BasicProtectBandwidth": 300, "Bandwidth": 100, "ElasticProtectLimit": 0, "ElasticBandwidthFlag": true }
     * @param StandardPackageConfig $StandardPackageConfig { "Region": "ap-guangzhou", "ProtectIpCount": 1, "BasicProtectBandwidth": 300, "Bandwidth": 100, "ElasticProtectLimit": 0, "ElasticBandwidthFlag": true }
     * @param StandardPlusPackageConfig $StandardPlusPackageConfig { "Region": "ap-guangzhou", "ProtectCount": "TWO_TIMES", "ProtectIpCount": 1, "Bandwidth": 100, "ElasticBandwidthFlag": true }
     * @param array $TagInfoList [ { "TagKey": "beal-test",                 "TagValue": "beal-test"               }             ]
     * @param boolean $DryRun 默认为false,true表示只进行参数校验，不进行实际购买
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
        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
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

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
