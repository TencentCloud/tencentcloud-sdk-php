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
 * CDN HTTPS请求包。
 *
 * @method integer getId() 获取HTTPS请求包 Id
 * @method void setId(integer $Id) 设置HTTPS请求包 Id
 * @method string getType() 获取HTTPS请求包类型
 * @method void setType(string $Type) 设置HTTPS请求包类型
 * @method integer getSize() 获取HTTPS请求包大小（单位为：次）
 * @method void setSize(integer $Size) 设置HTTPS请求包大小（单位为：次）
 * @method integer getSizeUsed() 获取已消耗HTTPS请求包（单位为：次）
 * @method void setSizeUsed(integer $SizeUsed) 设置已消耗HTTPS请求包（单位为：次）
 * @method string getStatus() 获取HTTPS请求包状态
enabled：已启用
expired：已过期
disabled：未启用
 * @method void setStatus(string $Status) 设置HTTPS请求包状态
enabled：已启用
expired：已过期
disabled：未启用
 * @method string getCreateTime() 获取HTTPS请求包发放时间
 * @method void setCreateTime(string $CreateTime) 设置HTTPS请求包发放时间
 * @method string getEnableTime() 获取HTTPS请求包生效时间
 * @method void setEnableTime(string $EnableTime) 设置HTTPS请求包生效时间
 * @method string getExpireTime() 获取HTTPS请求包过期时间
 * @method void setExpireTime(string $ExpireTime) 设置HTTPS请求包过期时间
 * @method string getChannel() 获取HTTPS请求包来源
 * @method void setChannel(string $Channel) 设置HTTPS请求包来源
 * @method integer getLifeTimeMonth() 获取HTTPS请求包生命周期月数
 * @method void setLifeTimeMonth(integer $LifeTimeMonth) 设置HTTPS请求包生命周期月数
 * @method boolean getRefundAvailable() 获取HTTPS请求包是否支持退费
 * @method void setRefundAvailable(boolean $RefundAvailable) 设置HTTPS请求包是否支持退费
 * @method integer getConfigId() 获取HTTPS请求包类型id
 * @method void setConfigId(integer $ConfigId) 设置HTTPS请求包类型id
 * @method string getTrueEnableTime() 获取HTTPS请求包实际生效时间
 * @method void setTrueEnableTime(string $TrueEnableTime) 设置HTTPS请求包实际生效时间
 * @method string getTrueExpireTime() 获取HTTPS请求包实际过期时间
 * @method void setTrueExpireTime(string $TrueExpireTime) 设置HTTPS请求包实际过期时间
 * @method string getArea() 获取HTTPS请求包生效区域 
global：全球
 * @method void setArea(string $Area) 设置HTTPS请求包生效区域 
global：全球
 * @method boolean getContractExtension() 获取HTTPS请求包是否续订
 * @method void setContractExtension(boolean $ContractExtension) 设置HTTPS请求包是否续订
 * @method boolean getExtensionAvailable() 获取HTTPS请求包是否支持续订
 * @method void setExtensionAvailable(boolean $ExtensionAvailable) 设置HTTPS请求包是否支持续订
 * @method integer getExtensionMode() 获取HTTPS请求包当前续订模式
0：未续订
1：到期续订
2：用完续订
3：到期或用完续订
 * @method void setExtensionMode(integer $ExtensionMode) 设置HTTPS请求包当前续订模式
0：未续订
1：到期续订
2：用完续订
3：到期或用完续订
 * @method boolean getAutoExtension() 获取HTTPS请求包是否自动续订
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoExtension(boolean $AutoExtension) 设置HTTPS请求包是否自动续订
注意：此字段可能返回 null，表示取不到有效值。
 */
class HttpsPackage extends AbstractModel
{
    /**
     * @var integer HTTPS请求包 Id
     */
    public $Id;

    /**
     * @var string HTTPS请求包类型
     */
    public $Type;

    /**
     * @var integer HTTPS请求包大小（单位为：次）
     */
    public $Size;

    /**
     * @var integer 已消耗HTTPS请求包（单位为：次）
     */
    public $SizeUsed;

    /**
     * @var string HTTPS请求包状态
enabled：已启用
expired：已过期
disabled：未启用
     */
    public $Status;

    /**
     * @var string HTTPS请求包发放时间
     */
    public $CreateTime;

    /**
     * @var string HTTPS请求包生效时间
     */
    public $EnableTime;

    /**
     * @var string HTTPS请求包过期时间
     */
    public $ExpireTime;

    /**
     * @var string HTTPS请求包来源
     */
    public $Channel;

    /**
     * @var integer HTTPS请求包生命周期月数
     */
    public $LifeTimeMonth;

    /**
     * @var boolean HTTPS请求包是否支持退费
     */
    public $RefundAvailable;

    /**
     * @var integer HTTPS请求包类型id
     */
    public $ConfigId;

    /**
     * @var string HTTPS请求包实际生效时间
     */
    public $TrueEnableTime;

    /**
     * @var string HTTPS请求包实际过期时间
     */
    public $TrueExpireTime;

    /**
     * @var string HTTPS请求包生效区域 
global：全球
     */
    public $Area;

    /**
     * @var boolean HTTPS请求包是否续订
     */
    public $ContractExtension;

    /**
     * @var boolean HTTPS请求包是否支持续订
     */
    public $ExtensionAvailable;

    /**
     * @var integer HTTPS请求包当前续订模式
0：未续订
1：到期续订
2：用完续订
3：到期或用完续订
     */
    public $ExtensionMode;

    /**
     * @var boolean HTTPS请求包是否自动续订
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoExtension;

    /**
     * @param integer $Id HTTPS请求包 Id
     * @param string $Type HTTPS请求包类型
     * @param integer $Size HTTPS请求包大小（单位为：次）
     * @param integer $SizeUsed 已消耗HTTPS请求包（单位为：次）
     * @param string $Status HTTPS请求包状态
enabled：已启用
expired：已过期
disabled：未启用
     * @param string $CreateTime HTTPS请求包发放时间
     * @param string $EnableTime HTTPS请求包生效时间
     * @param string $ExpireTime HTTPS请求包过期时间
     * @param string $Channel HTTPS请求包来源
     * @param integer $LifeTimeMonth HTTPS请求包生命周期月数
     * @param boolean $RefundAvailable HTTPS请求包是否支持退费
     * @param integer $ConfigId HTTPS请求包类型id
     * @param string $TrueEnableTime HTTPS请求包实际生效时间
     * @param string $TrueExpireTime HTTPS请求包实际过期时间
     * @param string $Area HTTPS请求包生效区域 
global：全球
     * @param boolean $ContractExtension HTTPS请求包是否续订
     * @param boolean $ExtensionAvailable HTTPS请求包是否支持续订
     * @param integer $ExtensionMode HTTPS请求包当前续订模式
0：未续订
1：到期续订
2：用完续订
3：到期或用完续订
     * @param boolean $AutoExtension HTTPS请求包是否自动续订
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("SizeUsed",$param) and $param["SizeUsed"] !== null) {
            $this->SizeUsed = $param["SizeUsed"];
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

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("LifeTimeMonth",$param) and $param["LifeTimeMonth"] !== null) {
            $this->LifeTimeMonth = $param["LifeTimeMonth"];
        }

        if (array_key_exists("RefundAvailable",$param) and $param["RefundAvailable"] !== null) {
            $this->RefundAvailable = $param["RefundAvailable"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("TrueEnableTime",$param) and $param["TrueEnableTime"] !== null) {
            $this->TrueEnableTime = $param["TrueEnableTime"];
        }

        if (array_key_exists("TrueExpireTime",$param) and $param["TrueExpireTime"] !== null) {
            $this->TrueExpireTime = $param["TrueExpireTime"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("ContractExtension",$param) and $param["ContractExtension"] !== null) {
            $this->ContractExtension = $param["ContractExtension"];
        }

        if (array_key_exists("ExtensionAvailable",$param) and $param["ExtensionAvailable"] !== null) {
            $this->ExtensionAvailable = $param["ExtensionAvailable"];
        }

        if (array_key_exists("ExtensionMode",$param) and $param["ExtensionMode"] !== null) {
            $this->ExtensionMode = $param["ExtensionMode"];
        }

        if (array_key_exists("AutoExtension",$param) and $param["AutoExtension"] !== null) {
            $this->AutoExtension = $param["AutoExtension"];
        }
    }
}
