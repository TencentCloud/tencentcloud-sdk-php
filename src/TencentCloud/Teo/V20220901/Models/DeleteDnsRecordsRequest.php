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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDnsRecords请求参数结构体
 *
 * @method string getZoneId() 获取待删除记录所属站点 ID。
 * @method void setZoneId(string $ZoneId) 设置待删除记录所属站点 ID。
 * @method array getDnsRecordIds() 获取待删除记录 ID。
 * @method void setDnsRecordIds(array $DnsRecordIds) 设置待删除记录 ID。
 */
class DeleteDnsRecordsRequest extends AbstractModel
{
    /**
     * @var string 待删除记录所属站点 ID。
     */
    public $ZoneId;

    /**
     * @var array 待删除记录 ID。
     */
    public $DnsRecordIds;

    /**
     * @param string $ZoneId 待删除记录所属站点 ID。
     * @param array $DnsRecordIds 待删除记录 ID。
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

        if (array_key_exists("DnsRecordIds",$param) and $param["DnsRecordIds"] !== null) {
            $this->DnsRecordIds = $param["DnsRecordIds"];
        }
    }
}
