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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 权益包转出详情
 *
 * @method string getPackageId() 获取权益包ID。
 * @method void setPackageId(string $PackageId) 设置权益包ID。
 * @method string getTransferCode() 获取转移码。
 * @method void setTransferCode(string $TransferCode) 设置转移码。
 * @method integer getTransferCount() 获取本次转移点数。
 * @method void setTransferCount(integer $TransferCount) 设置本次转移点数。
 * @method string getReceivePackageId() 获取转入的PackageID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceivePackageId(string $ReceivePackageId) 设置转入的PackageID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取本次转移过期时间。
 * @method void setExpireTime(string $ExpireTime) 设置本次转移过期时间。
 * @method string getCreateTime() 获取本次转移生成时间。
 * @method void setCreateTime(string $CreateTime) 设置本次转移生成时间。
 * @method string getUpdateTime() 获取本次转移更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置本次转移更新时间。
 * @method string getTransferStatus() 获取转移状态。
 * @method void setTransferStatus(string $TransferStatus) 设置转移状态。
 * @method integer getReceiverUin() 获取接收者uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverUin(integer $ReceiverUin) 设置接收者uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReceiveTime() 获取接收时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiveTime(string $ReceiveTime) 设置接收时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class PackageTransferOutInfo extends AbstractModel
{
    /**
     * @var string 权益包ID。
     */
    public $PackageId;

    /**
     * @var string 转移码。
     */
    public $TransferCode;

    /**
     * @var integer 本次转移点数。
     */
    public $TransferCount;

    /**
     * @var string 转入的PackageID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceivePackageId;

    /**
     * @var string 本次转移过期时间。
     */
    public $ExpireTime;

    /**
     * @var string 本次转移生成时间。
     */
    public $CreateTime;

    /**
     * @var string 本次转移更新时间。
     */
    public $UpdateTime;

    /**
     * @var string 转移状态。
     */
    public $TransferStatus;

    /**
     * @var integer 接收者uin。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverUin;

    /**
     * @var string 接收时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiveTime;

    /**
     * @param string $PackageId 权益包ID。
     * @param string $TransferCode 转移码。
     * @param integer $TransferCount 本次转移点数。
     * @param string $ReceivePackageId 转入的PackageID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 本次转移过期时间。
     * @param string $CreateTime 本次转移生成时间。
     * @param string $UpdateTime 本次转移更新时间。
     * @param string $TransferStatus 转移状态。
     * @param integer $ReceiverUin 接收者uin。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReceiveTime 接收时间。
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
        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("TransferCode",$param) and $param["TransferCode"] !== null) {
            $this->TransferCode = $param["TransferCode"];
        }

        if (array_key_exists("TransferCount",$param) and $param["TransferCount"] !== null) {
            $this->TransferCount = $param["TransferCount"];
        }

        if (array_key_exists("ReceivePackageId",$param) and $param["ReceivePackageId"] !== null) {
            $this->ReceivePackageId = $param["ReceivePackageId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TransferStatus",$param) and $param["TransferStatus"] !== null) {
            $this->TransferStatus = $param["TransferStatus"];
        }

        if (array_key_exists("ReceiverUin",$param) and $param["ReceiverUin"] !== null) {
            $this->ReceiverUin = $param["ReceiverUin"];
        }

        if (array_key_exists("ReceiveTime",$param) and $param["ReceiveTime"] !== null) {
            $this->ReceiveTime = $param["ReceiveTime"];
        }
    }
}
