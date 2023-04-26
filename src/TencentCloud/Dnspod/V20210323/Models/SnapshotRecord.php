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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 快照解析记录
 *
 * @method string getSubDomain() 获取子域名
 * @method void setSubDomain(string $SubDomain) 设置子域名
 * @method string getRecordType() 获取记录类型
 * @method void setRecordType(string $RecordType) 设置记录类型
 * @method string getRecordLine() 获取解析线路
 * @method void setRecordLine(string $RecordLine) 设置解析线路
 * @method string getValue() 获取解析值
 * @method void setValue(string $Value) 设置解析值
 * @method string getTTL() 获取TTL(秒)
 * @method void setTTL(string $TTL) 设置TTL(秒)
 * @method string getRecordId() 获取解析记录 ID
 * @method void setRecordId(string $RecordId) 设置解析记录 ID
 * @method string getMX() 获取MX优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMX(string $MX) 设置MX优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWeight() 获取权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(string $Weight) 设置权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置失败原因
注意：此字段可能返回 null，表示取不到有效值。
 */
class SnapshotRecord extends AbstractModel
{
    /**
     * @var string 子域名
     */
    public $SubDomain;

    /**
     * @var string 记录类型
     */
    public $RecordType;

    /**
     * @var string 解析线路
     */
    public $RecordLine;

    /**
     * @var string 解析值
     */
    public $Value;

    /**
     * @var string TTL(秒)
     */
    public $TTL;

    /**
     * @var string 解析记录 ID
     */
    public $RecordId;

    /**
     * @var string MX优先级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MX;

    /**
     * @var string 权重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var string 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @param string $SubDomain 子域名
     * @param string $RecordType 记录类型
     * @param string $RecordLine 解析线路
     * @param string $Value 解析值
     * @param string $TTL TTL(秒)
     * @param string $RecordId 解析记录 ID
     * @param string $MX MX优先级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Weight 权重
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason 失败原因
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
        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("RecordLine",$param) and $param["RecordLine"] !== null) {
            $this->RecordLine = $param["RecordLine"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("MX",$param) and $param["MX"] !== null) {
            $this->MX = $param["MX"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
