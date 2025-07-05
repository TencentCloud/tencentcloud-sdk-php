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
 * DescribeRecord请求参数结构体
 *
 * @method string getZoneId() 获取私有域ID
 * @method void setZoneId(string $ZoneId) 设置私有域ID
 * @method string getRecordId() 获取记录ID
 * @method void setRecordId(string $RecordId) 设置记录ID
 */
class DescribeRecordRequest extends AbstractModel
{
    /**
     * @var string 私有域ID
     */
    public $ZoneId;

    /**
     * @var string 记录ID
     */
    public $RecordId;

    /**
     * @param string $ZoneId 私有域ID
     * @param string $RecordId 记录ID
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

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }
    }
}
