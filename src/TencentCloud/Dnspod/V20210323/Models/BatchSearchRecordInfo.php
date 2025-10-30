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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量操作筛选记录信息
 *
 * @method integer getRecordId() 获取解析记录 ID
 * @method void setRecordId(integer $RecordId) 设置解析记录 ID
 * @method string getArea() 获取解析线路
 * @method void setArea(string $Area) 设置解析线路
 * @method string getRemark() 获取记录备注
 * @method void setRemark(string $Remark) 设置记录备注
 * @method integer getTTL() 获取TTL(秒)
 * @method void setTTL(integer $TTL) 设置TTL(秒)
 * @method string getRecordType() 获取记录类型
 * @method void setRecordType(string $RecordType) 设置记录类型
 * @method integer getEnabled() 获取记录是否启用
 * @method void setEnabled(integer $Enabled) 设置记录是否启用
 * @method integer getWeight() 获取权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroupId() 获取记录分组 ID
 * @method void setGroupId(integer $GroupId) 设置记录分组 ID
 * @method string getSubDomain() 获取子域名
 * @method void setSubDomain(string $SubDomain) 设置子域名
 * @method string getValue() 获取解析值
 * @method void setValue(string $Value) 设置解析值
 * @method integer getMX() 获取MX优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMX(integer $MX) 设置MX优先级
注意：此字段可能返回 null，表示取不到有效值。
 */
class BatchSearchRecordInfo extends AbstractModel
{
    /**
     * @var integer 解析记录 ID
     */
    public $RecordId;

    /**
     * @var string 解析线路
     */
    public $Area;

    /**
     * @var string 记录备注
     */
    public $Remark;

    /**
     * @var integer TTL(秒)
     */
    public $TTL;

    /**
     * @var string 记录类型
     */
    public $RecordType;

    /**
     * @var integer 记录是否启用
     */
    public $Enabled;

    /**
     * @var integer 权重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var integer 记录分组 ID
     */
    public $GroupId;

    /**
     * @var string 子域名
     */
    public $SubDomain;

    /**
     * @var string 解析值
     */
    public $Value;

    /**
     * @var integer MX优先级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MX;

    /**
     * @param integer $RecordId 解析记录 ID
     * @param string $Area 解析线路
     * @param string $Remark 记录备注
     * @param integer $TTL TTL(秒)
     * @param string $RecordType 记录类型
     * @param integer $Enabled 记录是否启用
     * @param integer $Weight 权重
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GroupId 记录分组 ID
     * @param string $SubDomain 子域名
     * @param string $Value 解析值
     * @param integer $MX MX优先级
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
        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("MX",$param) and $param["MX"] !== null) {
            $this->MX = $param["MX"];
        }
    }
}
