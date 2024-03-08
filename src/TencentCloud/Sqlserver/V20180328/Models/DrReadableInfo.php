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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备机只读信息
 *
 * @method string getSlaveStatus() 获取备机状态，enable-运行中，disable-不可用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlaveStatus(string $SlaveStatus) 设置备机状态，enable-运行中，disable-不可用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReadableStatus() 获取备机可读状态，enable-已开启，disable-已关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadableStatus(string $ReadableStatus) 设置备机可读状态，enable-已开启，disable-已关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVip() 获取备机只读vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip(string $Vip) 设置备机只读vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVPort() 获取备机只读端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVPort(integer $VPort) 设置备机只读端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqVpcId() 获取备机所在私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqVpcId(string $UniqVpcId) 设置备机所在私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqSubnetId() 获取备机所在私有网络子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置备机所在私有网络子网ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class DrReadableInfo extends AbstractModel
{
    /**
     * @var string 备机状态，enable-运行中，disable-不可用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlaveStatus;

    /**
     * @var string 备机可读状态，enable-已开启，disable-已关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadableStatus;

    /**
     * @var string 备机只读vip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip;

    /**
     * @var integer 备机只读端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VPort;

    /**
     * @var string 备机所在私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqVpcId;

    /**
     * @var string 备机所在私有网络子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqSubnetId;

    /**
     * @param string $SlaveStatus 备机状态，enable-运行中，disable-不可用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReadableStatus 备机可读状态，enable-已开启，disable-已关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vip 备机只读vip
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VPort 备机只读端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqVpcId 备机所在私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqSubnetId 备机所在私有网络子网ID
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
        if (array_key_exists("SlaveStatus",$param) and $param["SlaveStatus"] !== null) {
            $this->SlaveStatus = $param["SlaveStatus"];
        }

        if (array_key_exists("ReadableStatus",$param) and $param["ReadableStatus"] !== null) {
            $this->ReadableStatus = $param["ReadableStatus"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }
    }
}
