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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDN加速流量包。
 *
 * @method integer getId() 获取流量包 Id
 * @method void setId(integer $Id) 设置流量包 Id
 * @method string getType() 获取流量包类型
 * @method void setType(string $Type) 设置流量包类型
 * @method integer getBytes() 获取流量包大小（单位为 Byte）
 * @method void setBytes(integer $Bytes) 设置流量包大小（单位为 Byte）
 * @method integer getBytesUsed() 获取已消耗流量（单位为 Byte）
 * @method void setBytesUsed(integer $BytesUsed) 设置已消耗流量（单位为 Byte）
 * @method string getStatus() 获取流量包状态
enabled：已启用
expired：已过期
disabled：未启用
 * @method void setStatus(string $Status) 设置流量包状态
enabled：已启用
expired：已过期
disabled：未启用
 * @method string getCreateTime() 获取流量包发放时间
 * @method void setCreateTime(string $CreateTime) 设置流量包发放时间
 * @method string getEnableTime() 获取流量包生效时间
 * @method void setEnableTime(string $EnableTime) 设置流量包生效时间
 * @method string getExpireTime() 获取流量包过期时间
 * @method void setExpireTime(string $ExpireTime) 设置流量包过期时间
 * @method boolean getContractExtension() 获取流量包是否续订
 * @method void setContractExtension(boolean $ContractExtension) 设置流量包是否续订
 * @method boolean getAutoExtension() 获取流量包是否自动续订
 * @method void setAutoExtension(boolean $AutoExtension) 设置流量包是否自动续订
 * @method string getChannel() 获取流量包来源
 * @method void setChannel(string $Channel) 设置流量包来源
 * @method string getArea() 获取流量包生效区域，mainland或overseas
 * @method void setArea(string $Area) 设置流量包生效区域，mainland或overseas
 * @method integer getLifeTimeMonth() 获取流量包生命周期月数
 * @method void setLifeTimeMonth(integer $LifeTimeMonth) 设置流量包生命周期月数
 * @method boolean getExtensionAvailable() 获取流量包是否支持续订
 * @method void setExtensionAvailable(boolean $ExtensionAvailable) 设置流量包是否支持续订
 * @method boolean getRefundAvailable() 获取流量包是否支持退费
 * @method void setRefundAvailable(boolean $RefundAvailable) 设置流量包是否支持退费
 * @method integer getRegion() 获取流量包生效区域
0：中国大陆
1：亚太一区
2：亚太二区
3：亚太三区
4：中东
5：北美
6：欧洲
7：南美
8：非洲
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(integer $Region) 设置流量包生效区域
0：中国大陆
1：亚太一区
2：亚太二区
3：亚太三区
4：中东
5：北美
6：欧洲
7：南美
8：非洲
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConfigId() 获取流量包类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigId(integer $ConfigId) 设置流量包类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExtensionMode() 获取流量包当前续订模式，0 未续订、1到期续订、2用完续订、3到期或用完续订
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtensionMode(integer $ExtensionMode) 设置流量包当前续订模式，0 未续订、1到期续订、2用完续订、3到期或用完续订
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrueEnableTime() 获取流量包实际生效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrueEnableTime(string $TrueEnableTime) 设置流量包实际生效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrueExpireTime() 获取流量包实际过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrueExpireTime(string $TrueExpireTime) 设置流量包实际过期时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class TrafficPackage extends AbstractModel
{
    /**
     * @var integer 流量包 Id
     */
    public $Id;

    /**
     * @var string 流量包类型
     */
    public $Type;

    /**
     * @var integer 流量包大小（单位为 Byte）
     */
    public $Bytes;

    /**
     * @var integer 已消耗流量（单位为 Byte）
     */
    public $BytesUsed;

    /**
     * @var string 流量包状态
enabled：已启用
expired：已过期
disabled：未启用
     */
    public $Status;

    /**
     * @var string 流量包发放时间
     */
    public $CreateTime;

    /**
     * @var string 流量包生效时间
     */
    public $EnableTime;

    /**
     * @var string 流量包过期时间
     */
    public $ExpireTime;

    /**
     * @var boolean 流量包是否续订
     */
    public $ContractExtension;

    /**
     * @var boolean 流量包是否自动续订
     */
    public $AutoExtension;

    /**
     * @var string 流量包来源
     */
    public $Channel;

    /**
     * @var string 流量包生效区域，mainland或overseas
     */
    public $Area;

    /**
     * @var integer 流量包生命周期月数
     */
    public $LifeTimeMonth;

    /**
     * @var boolean 流量包是否支持续订
     */
    public $ExtensionAvailable;

    /**
     * @var boolean 流量包是否支持退费
     */
    public $RefundAvailable;

    /**
     * @var integer 流量包生效区域
0：中国大陆
1：亚太一区
2：亚太二区
3：亚太三区
4：中东
5：北美
6：欧洲
7：南美
8：非洲
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var integer 流量包类型id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigId;

    /**
     * @var integer 流量包当前续订模式，0 未续订、1到期续订、2用完续订、3到期或用完续订
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtensionMode;

    /**
     * @var string 流量包实际生效时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrueEnableTime;

    /**
     * @var string 流量包实际过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrueExpireTime;

    /**
     * @param integer $Id 流量包 Id
     * @param string $Type 流量包类型
     * @param integer $Bytes 流量包大小（单位为 Byte）
     * @param integer $BytesUsed 已消耗流量（单位为 Byte）
     * @param string $Status 流量包状态
enabled：已启用
expired：已过期
disabled：未启用
     * @param string $CreateTime 流量包发放时间
     * @param string $EnableTime 流量包生效时间
     * @param string $ExpireTime 流量包过期时间
     * @param boolean $ContractExtension 流量包是否续订
     * @param boolean $AutoExtension 流量包是否自动续订
     * @param string $Channel 流量包来源
     * @param string $Area 流量包生效区域，mainland或overseas
     * @param integer $LifeTimeMonth 流量包生命周期月数
     * @param boolean $ExtensionAvailable 流量包是否支持续订
     * @param boolean $RefundAvailable 流量包是否支持退费
     * @param integer $Region 流量包生效区域
0：中国大陆
1：亚太一区
2：亚太二区
3：亚太三区
4：中东
5：北美
6：欧洲
7：南美
8：非洲
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConfigId 流量包类型id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExtensionMode 流量包当前续订模式，0 未续订、1到期续订、2用完续订、3到期或用完续订
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrueEnableTime 流量包实际生效时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrueExpireTime 流量包实际过期时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Bytes",$param) and $param["Bytes"] !== null) {
            $this->Bytes = $param["Bytes"];
        }

        if (array_key_exists("BytesUsed",$param) and $param["BytesUsed"] !== null) {
            $this->BytesUsed = $param["BytesUsed"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EnableTime",$param) and $param["EnableTime"] !== null) {
            $this->EnableTime = $param["EnableTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ContractExtension",$param) and $param["ContractExtension"] !== null) {
            $this->ContractExtension = $param["ContractExtension"];
        }

        if (array_key_exists("AutoExtension",$param) and $param["AutoExtension"] !== null) {
            $this->AutoExtension = $param["AutoExtension"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("LifeTimeMonth",$param) and $param["LifeTimeMonth"] !== null) {
            $this->LifeTimeMonth = $param["LifeTimeMonth"];
        }

        if (array_key_exists("ExtensionAvailable",$param) and $param["ExtensionAvailable"] !== null) {
            $this->ExtensionAvailable = $param["ExtensionAvailable"];
        }

        if (array_key_exists("RefundAvailable",$param) and $param["RefundAvailable"] !== null) {
            $this->RefundAvailable = $param["RefundAvailable"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("ExtensionMode",$param) and $param["ExtensionMode"] !== null) {
            $this->ExtensionMode = $param["ExtensionMode"];
        }

        if (array_key_exists("TrueEnableTime",$param) and $param["TrueEnableTime"] !== null) {
            $this->TrueEnableTime = $param["TrueEnableTime"];
        }

        if (array_key_exists("TrueExpireTime",$param) and $param["TrueExpireTime"] !== null) {
            $this->TrueExpireTime = $param["TrueExpireTime"];
        }
    }
}
