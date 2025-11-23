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
 * 批量添加解析记录返回结果
 *
 * @method string getZoneId() 获取私有域ID
 * @method void setZoneId(string $ZoneId) 设置私有域ID
 * @method string getDomain() 获取私有域域名
 * @method void setDomain(string $Domain) 设置私有域域名
 * @method array getRecordsStatus() 获取私有域解析记录创建结果
 * @method void setRecordsStatus(array $RecordsStatus) 设置私有域解析记录创建结果
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecordsInfoResult extends AbstractModel
{
    /**
     * @var string 私有域ID
     */
    public $ZoneId;

    /**
     * @var string 私有域域名
     */
    public $Domain;

    /**
     * @var array 私有域解析记录创建结果
     */
    public $RecordsStatus;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @param string $ZoneId 私有域ID
     * @param string $Domain 私有域域名
     * @param array $RecordsStatus 私有域解析记录创建结果
     * @param string $Remark 备注
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RecordsStatus",$param) and $param["RecordsStatus"] !== null) {
            $this->RecordsStatus = [];
            foreach ($param["RecordsStatus"] as $key => $value){
                $obj = new RecordsInfoStatus();
                $obj->deserialize($value);
                array_push($this->RecordsStatus, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
