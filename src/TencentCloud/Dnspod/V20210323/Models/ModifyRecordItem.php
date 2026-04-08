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
 * 批量修改记录入参，指定修改的记录ID和记录内容
 *
 * @method integer getRecordId() 获取记录 ID
 * @method void setRecordId(integer $RecordId) 设置记录 ID
 * @method string getSubDomain() 获取主机记录
 * @method void setSubDomain(string $SubDomain) 设置主机记录
 * @method string getRecordType() 获取记录类型
 * @method void setRecordType(string $RecordType) 设置记录类型
 * @method string getRecordLine() 获取记录线路
 * @method void setRecordLine(string $RecordLine) 设置记录线路
 * @method string getValue() 获取记录值
 * @method void setValue(string $Value) 设置记录值
 * @method string getEnabled() 获取解析记录状态 1：开启 0：暂停
 * @method void setEnabled(string $Enabled) 设置解析记录状态 1：开启 0：暂停
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method integer getWeight() 获取权重
 * @method void setWeight(integer $Weight) 设置权重
 * @method integer getMX() 获取MX优先级
 * @method void setMX(integer $MX) 设置MX优先级
 * @method integer getTTL() 获取TTL缓存时间
 * @method void setTTL(integer $TTL) 设置TTL缓存时间
 */
class ModifyRecordItem extends AbstractModel
{
    /**
     * @var integer 记录 ID
     */
    public $RecordId;

    /**
     * @var string 主机记录
     */
    public $SubDomain;

    /**
     * @var string 记录类型
     */
    public $RecordType;

    /**
     * @var string 记录线路
     */
    public $RecordLine;

    /**
     * @var string 记录值
     */
    public $Value;

    /**
     * @var string 解析记录状态 1：开启 0：暂停
     */
    public $Enabled;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var integer 权重
     */
    public $Weight;

    /**
     * @var integer MX优先级
     */
    public $MX;

    /**
     * @var integer TTL缓存时间
     */
    public $TTL;

    /**
     * @param integer $RecordId 记录 ID
     * @param string $SubDomain 主机记录
     * @param string $RecordType 记录类型
     * @param string $RecordLine 记录线路
     * @param string $Value 记录值
     * @param string $Enabled 解析记录状态 1：开启 0：暂停
     * @param string $Remark 备注信息
     * @param integer $Weight 权重
     * @param integer $MX MX优先级
     * @param integer $TTL TTL缓存时间
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

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("MX",$param) and $param["MX"] !== null) {
            $this->MX = $param["MX"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }
    }
}
