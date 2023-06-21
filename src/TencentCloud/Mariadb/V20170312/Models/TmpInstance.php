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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 临时实例
 *
 * @method integer getAppId() 获取应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceRemark() 获取实例备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceRemark(string $InstanceRemark) 设置实例备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTempType() 获取0:非临时实例 ,1:无效临时实例, 2:回档成功的有效临时实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTempType(integer $TempType) 设置0:非临时实例 ,1:无效临时实例, 2:回档成功的有效临时实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取实例状态,0:待初始化,1:流程处理中,2:有效状态,-1:已隔离，-2：已下线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置实例状态,0:待初始化,1:流程处理中,2:有效状态,-1:已隔离，-2：已下线
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例 ID，形如：tdsql-ow728lmc。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，形如：tdsql-ow728lmc。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVip() 获取实例虚IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip(string $Vip) 设置实例虚IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVport() 获取实例虚端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVport(integer $Vport) 设置实例虚端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPeriodEndTime() 获取有效期结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置有效期结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcInstanceId() 获取源实例 ID，形如：tdsql-ow728lmc。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcInstanceId(string $SrcInstanceId) 设置源实例 ID，形如：tdsql-ow728lmc。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusDesc() 获取实例状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusDesc(string $StatusDesc) 设置实例状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取实例所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置实例所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取实例所在可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置实例所在可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVipv6() 获取实例虚IPv6
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVipv6(string $Vipv6) 设置实例虚IPv6
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIpv6Flag() 获取实例IPv6标志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv6Flag(integer $Ipv6Flag) 设置实例IPv6标志
注意：此字段可能返回 null，表示取不到有效值。
 */
class TmpInstance extends AbstractModel
{
    /**
     * @var integer 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 实例备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceRemark;

    /**
     * @var integer 0:非临时实例 ,1:无效临时实例, 2:回档成功的有效临时实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TempType;

    /**
     * @var integer 实例状态,0:待初始化,1:流程处理中,2:有效状态,-1:已隔离，-2：已下线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 实例 ID，形如：tdsql-ow728lmc。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 实例虚IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip;

    /**
     * @var integer 实例虚端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vport;

    /**
     * @var string 有效期结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeriodEndTime;

    /**
     * @var string 源实例 ID，形如：tdsql-ow728lmc。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcInstanceId;

    /**
     * @var string 实例状态描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusDesc;

    /**
     * @var string 实例所在地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 实例所在可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string 实例虚IPv6
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vipv6;

    /**
     * @var integer 实例IPv6标志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv6Flag;

    /**
     * @param integer $AppId 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceRemark 实例备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TempType 0:非临时实例 ,1:无效临时实例, 2:回档成功的有效临时实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 实例状态,0:待初始化,1:流程处理中,2:有效状态,-1:已隔离，-2：已下线
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例 ID，形如：tdsql-ow728lmc。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vip 实例虚IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Vport 实例虚端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PeriodEndTime 有效期结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcInstanceId 源实例 ID，形如：tdsql-ow728lmc。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusDesc 实例状态描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 实例所在地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 实例所在可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vipv6 实例虚IPv6
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Ipv6Flag 实例IPv6标志
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("InstanceRemark",$param) and $param["InstanceRemark"] !== null) {
            $this->InstanceRemark = $param["InstanceRemark"];
        }

        if (array_key_exists("TempType",$param) and $param["TempType"] !== null) {
            $this->TempType = $param["TempType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("SrcInstanceId",$param) and $param["SrcInstanceId"] !== null) {
            $this->SrcInstanceId = $param["SrcInstanceId"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Vipv6",$param) and $param["Vipv6"] !== null) {
            $this->Vipv6 = $param["Vipv6"];
        }

        if (array_key_exists("Ipv6Flag",$param) and $param["Ipv6Flag"] !== null) {
            $this->Ipv6Flag = $param["Ipv6Flag"];
        }
    }
}
