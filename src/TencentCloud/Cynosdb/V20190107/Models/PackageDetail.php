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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源包明细说明
 *
 * @method integer getAppId() 获取AppId账户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置AppId账户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageId() 获取资源包唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageId(string $PackageId) 设置资源包唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSuccessDeductSpec() 获取成功抵扣容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessDeductSpec(float $SuccessDeductSpec) 设置成功抵扣容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getPackageTotalUsedSpec() 获取截止当前，资源包已使用的容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageTotalUsedSpec(float $PackageTotalUsedSpec) 设置截止当前，资源包已使用的容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取抵扣开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置抵扣开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取抵扣结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置抵扣结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtendInfo() 获取扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtendInfo(string $ExtendInfo) 设置扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class PackageDetail extends AbstractModel
{
    /**
     * @var integer AppId账户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 资源包唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageId;

    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var float 成功抵扣容量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessDeductSpec;

    /**
     * @var float 截止当前，资源包已使用的容量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageTotalUsedSpec;

    /**
     * @var string 抵扣开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 抵扣结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtendInfo;

    /**
     * @param integer $AppId AppId账户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageId 资源包唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $SuccessDeductSpec 成功抵扣容量
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $PackageTotalUsedSpec 截止当前，资源包已使用的容量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 抵扣开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 抵扣结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtendInfo 扩展信息
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SuccessDeductSpec",$param) and $param["SuccessDeductSpec"] !== null) {
            $this->SuccessDeductSpec = $param["SuccessDeductSpec"];
        }

        if (array_key_exists("PackageTotalUsedSpec",$param) and $param["PackageTotalUsedSpec"] !== null) {
            $this->PackageTotalUsedSpec = $param["PackageTotalUsedSpec"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExtendInfo",$param) and $param["ExtendInfo"] !== null) {
            $this->ExtendInfo = $param["ExtendInfo"];
        }
    }
}
