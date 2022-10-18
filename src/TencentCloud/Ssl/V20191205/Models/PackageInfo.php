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
 * 权益包基本信息
 *
 * @method string getPackageId() 获取权益包ID。
 * @method void setPackageId(string $PackageId) 设置权益包ID。
 * @method integer getTotal() 获取权益包内权益点总量。
 * @method void setTotal(integer $Total) 设置权益包内权益点总量。
 * @method integer getBalance() 获取权益包内权益点余量。
 * @method void setBalance(integer $Balance) 设置权益包内权益点余量。
 * @method string getType() 获取权益包名称。
 * @method void setType(string $Type) 设置权益包名称。
 * @method integer getSourceUin() 获取权益点是转入时，来源信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceUin(integer $SourceUin) 设置权益点是转入时，来源信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取权益点状态。
 * @method void setStatus(string $Status) 设置权益点状态。
 * @method string getExpireTime() 获取过期时间。
 * @method void setExpireTime(string $ExpireTime) 设置过期时间。
 * @method string getUpdateTime() 获取更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
 * @method string getCreateTime() 获取生成时间。
 * @method void setCreateTime(string $CreateTime) 设置生成时间。
 * @method string getSourceType() 获取来源类型。
 * @method void setSourceType(string $SourceType) 设置来源类型。
 * @method array getTransferOutInfos() 获取转移信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransferOutInfos(array $TransferOutInfos) 设置转移信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class PackageInfo extends AbstractModel
{
    /**
     * @var string 权益包ID。
     */
    public $PackageId;

    /**
     * @var integer 权益包内权益点总量。
     */
    public $Total;

    /**
     * @var integer 权益包内权益点余量。
     */
    public $Balance;

    /**
     * @var string 权益包名称。
     */
    public $Type;

    /**
     * @var integer 权益点是转入时，来源信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceUin;

    /**
     * @var string 权益点状态。
     */
    public $Status;

    /**
     * @var string 过期时间。
     */
    public $ExpireTime;

    /**
     * @var string 更新时间。
     */
    public $UpdateTime;

    /**
     * @var string 生成时间。
     */
    public $CreateTime;

    /**
     * @var string 来源类型。
     */
    public $SourceType;

    /**
     * @var array 转移信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransferOutInfos;

    /**
     * @param string $PackageId 权益包ID。
     * @param integer $Total 权益包内权益点总量。
     * @param integer $Balance 权益包内权益点余量。
     * @param string $Type 权益包名称。
     * @param integer $SourceUin 权益点是转入时，来源信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 权益点状态。
     * @param string $ExpireTime 过期时间。
     * @param string $UpdateTime 更新时间。
     * @param string $CreateTime 生成时间。
     * @param string $SourceType 来源类型。
     * @param array $TransferOutInfos 转移信息。
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

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Balance",$param) and $param["Balance"] !== null) {
            $this->Balance = $param["Balance"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SourceUin",$param) and $param["SourceUin"] !== null) {
            $this->SourceUin = $param["SourceUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("TransferOutInfos",$param) and $param["TransferOutInfos"] !== null) {
            $this->TransferOutInfos = [];
            foreach ($param["TransferOutInfos"] as $key => $value){
                $obj = new PackageTransferOutInfo();
                $obj->deserialize($value);
                array_push($this->TransferOutInfos, $obj);
            }
        }
    }
}
