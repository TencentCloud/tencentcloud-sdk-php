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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 私有域信息
 *
 * @method string getRecordId() 获取记录id
 * @method void setRecordId(string $RecordId) 设置记录id
 * @method string getZoneId() 获取私有域id: zone-xxxxxxxx
 * @method void setZoneId(string $ZoneId) 设置私有域id: zone-xxxxxxxx
 * @method string getSubDomain() 获取子域名
 * @method void setSubDomain(string $SubDomain) 设置子域名
 * @method string getRecordType() 获取记录类型，可选的记录类型为："A", "AAAA", "CNAME", "MX", "TXT", "PTR"
 * @method void setRecordType(string $RecordType) 设置记录类型，可选的记录类型为："A", "AAAA", "CNAME", "MX", "TXT", "PTR"
 * @method string getRecordValue() 获取记录值
 * @method void setRecordValue(string $RecordValue) 设置记录值
 * @method integer getTTL() 获取记录缓存时间，数值越小生效越快，取值1-86400s, 默认 600
 * @method void setTTL(integer $TTL) 设置记录缓存时间，数值越小生效越快，取值1-86400s, 默认 600
 * @method integer getMX() 获取MX优先级：记录类型为MX时必填。取值范围：5,10,15,20,30,40,50
 * @method void setMX(integer $MX) 设置MX优先级：记录类型为MX时必填。取值范围：5,10,15,20,30,40,50
 * @method integer getWeight() 获取记录权重，值为1-100
 * @method void setWeight(integer $Weight) 设置记录权重，值为1-100
 * @method string getCreatedOn() 获取记录创建时间
 * @method void setCreatedOn(string $CreatedOn) 设置记录创建时间
 * @method string getUpdatedOn() 获取记录更新时间
 * @method void setUpdatedOn(string $UpdatedOn) 设置记录更新时间
 * @method integer getEnabled() 获取0暂停，1启用
 * @method void setEnabled(integer $Enabled) 设置0暂停，1启用
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class RecordInfo extends AbstractModel
{
    /**
     * @var string 记录id
     */
    public $RecordId;

    /**
     * @var string 私有域id: zone-xxxxxxxx
     */
    public $ZoneId;

    /**
     * @var string 子域名
     */
    public $SubDomain;

    /**
     * @var string 记录类型，可选的记录类型为："A", "AAAA", "CNAME", "MX", "TXT", "PTR"
     */
    public $RecordType;

    /**
     * @var string 记录值
     */
    public $RecordValue;

    /**
     * @var integer 记录缓存时间，数值越小生效越快，取值1-86400s, 默认 600
     */
    public $TTL;

    /**
     * @var integer MX优先级：记录类型为MX时必填。取值范围：5,10,15,20,30,40,50
     */
    public $MX;

    /**
     * @var integer 记录权重，值为1-100
     */
    public $Weight;

    /**
     * @var string 记录创建时间
     */
    public $CreatedOn;

    /**
     * @var string 记录更新时间
     */
    public $UpdatedOn;

    /**
     * @var integer 0暂停，1启用
     */
    public $Enabled;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param string $RecordId 记录id
     * @param string $ZoneId 私有域id: zone-xxxxxxxx
     * @param string $SubDomain 子域名
     * @param string $RecordType 记录类型，可选的记录类型为："A", "AAAA", "CNAME", "MX", "TXT", "PTR"
     * @param string $RecordValue 记录值
     * @param integer $TTL 记录缓存时间，数值越小生效越快，取值1-86400s, 默认 600
     * @param integer $MX MX优先级：记录类型为MX时必填。取值范围：5,10,15,20,30,40,50
     * @param integer $Weight 记录权重，值为1-100
     * @param string $CreatedOn 记录创建时间
     * @param string $UpdatedOn 记录更新时间
     * @param integer $Enabled 0暂停，1启用
     * @param string $Remark 备注
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

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("RecordValue",$param) and $param["RecordValue"] !== null) {
            $this->RecordValue = $param["RecordValue"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("MX",$param) and $param["MX"] !== null) {
            $this->MX = $param["MX"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
