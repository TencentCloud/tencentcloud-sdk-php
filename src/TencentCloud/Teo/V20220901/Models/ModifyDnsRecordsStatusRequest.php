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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDnsRecordsStatus请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method array getRecordsToEnable() 获取待启用的 DNS 记录 ID 列表，上限：200。<br>注意：同个 DNS 记录 ID 不能同时存在于 RecordsToEnable 和 RecordsToDisable。
 * @method void setRecordsToEnable(array $RecordsToEnable) 设置待启用的 DNS 记录 ID 列表，上限：200。<br>注意：同个 DNS 记录 ID 不能同时存在于 RecordsToEnable 和 RecordsToDisable。
 * @method array getRecordsToDisable() 获取待停用的 DNS 记录 ID 列表，上限：200。<br>注意：同个 DNS 记录 ID 不能同时存在于 RecordsToEnable 和 RecordsToDisable。
 * @method void setRecordsToDisable(array $RecordsToDisable) 设置待停用的 DNS 记录 ID 列表，上限：200。<br>注意：同个 DNS 记录 ID 不能同时存在于 RecordsToEnable 和 RecordsToDisable。
 */
class ModifyDnsRecordsStatusRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var array 待启用的 DNS 记录 ID 列表，上限：200。<br>注意：同个 DNS 记录 ID 不能同时存在于 RecordsToEnable 和 RecordsToDisable。
     */
    public $RecordsToEnable;

    /**
     * @var array 待停用的 DNS 记录 ID 列表，上限：200。<br>注意：同个 DNS 记录 ID 不能同时存在于 RecordsToEnable 和 RecordsToDisable。
     */
    public $RecordsToDisable;

    /**
     * @param string $ZoneId 站点 ID。
     * @param array $RecordsToEnable 待启用的 DNS 记录 ID 列表，上限：200。<br>注意：同个 DNS 记录 ID 不能同时存在于 RecordsToEnable 和 RecordsToDisable。
     * @param array $RecordsToDisable 待停用的 DNS 记录 ID 列表，上限：200。<br>注意：同个 DNS 记录 ID 不能同时存在于 RecordsToEnable 和 RecordsToDisable。
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

        if (array_key_exists("RecordsToEnable",$param) and $param["RecordsToEnable"] !== null) {
            $this->RecordsToEnable = $param["RecordsToEnable"];
        }

        if (array_key_exists("RecordsToDisable",$param) and $param["RecordsToDisable"] !== null) {
            $this->RecordsToDisable = $param["RecordsToDisable"];
        }
    }
}
