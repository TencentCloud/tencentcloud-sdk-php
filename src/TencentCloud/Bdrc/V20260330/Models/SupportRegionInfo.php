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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 支持的生产地域配置详情，包含支持类型与可用区粒度规则。
 *
 * @method string getSourceRegion() 获取生产地域。
 * @method void setSourceRegion(string $SourceRegion) 设置生产地域。
 * @method string getSupportType() 获取支持类型：REGION（地域级，整个生产地域均支持容灾）；ZONE（可用区级，按 SupportZoneRules 控制粒度）。
 * @method void setSupportType(string $SupportType) 设置支持类型：REGION（地域级，整个生产地域均支持容灾）；ZONE（可用区级，按 SupportZoneRules 控制粒度）。
 * @method string getStatus() 获取配置状态：valid（生效）/ invalid（停用）。
 * @method void setStatus(string $Status) 设置配置状态：valid（生效）/ invalid（停用）。
 * @method array getSupportZoneRules() 获取可用区级容灾规则列表。仅当 SupportType=ZONE 时有效；REGION 类型时该字段返回空数组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportZoneRules(array $SupportZoneRules) 设置可用区级容灾规则列表。仅当 SupportType=ZONE 时有效；REGION 类型时该字段返回空数组。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SupportRegionInfo extends AbstractModel
{
    /**
     * @var string 生产地域。
     */
    public $SourceRegion;

    /**
     * @var string 支持类型：REGION（地域级，整个生产地域均支持容灾）；ZONE（可用区级，按 SupportZoneRules 控制粒度）。
     */
    public $SupportType;

    /**
     * @var string 配置状态：valid（生效）/ invalid（停用）。
     */
    public $Status;

    /**
     * @var array 可用区级容灾规则列表。仅当 SupportType=ZONE 时有效；REGION 类型时该字段返回空数组。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportZoneRules;

    /**
     * @param string $SourceRegion 生产地域。
     * @param string $SupportType 支持类型：REGION（地域级，整个生产地域均支持容灾）；ZONE（可用区级，按 SupportZoneRules 控制粒度）。
     * @param string $Status 配置状态：valid（生效）/ invalid（停用）。
     * @param array $SupportZoneRules 可用区级容灾规则列表。仅当 SupportType=ZONE 时有效；REGION 类型时该字段返回空数组。
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
        if (array_key_exists("SourceRegion",$param) and $param["SourceRegion"] !== null) {
            $this->SourceRegion = $param["SourceRegion"];
        }

        if (array_key_exists("SupportType",$param) and $param["SupportType"] !== null) {
            $this->SupportType = $param["SupportType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SupportZoneRules",$param) and $param["SupportZoneRules"] !== null) {
            $this->SupportZoneRules = [];
            foreach ($param["SupportZoneRules"] as $key => $value){
                $obj = new SupportZoneRule();
                $obj->deserialize($value);
                array_push($this->SupportZoneRules, $obj);
            }
        }
    }
}
