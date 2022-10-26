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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRecordsStatus请求参数结构体
 *
 * @method string getZoneId() 获取私有域ID
 * @method void setZoneId(string $ZoneId) 设置私有域ID
 * @method array getRecordIds() 获取解析记录ID列表
 * @method void setRecordIds(array $RecordIds) 设置解析记录ID列表
 * @method string getStatus() 获取enabled：生效，disabled：失效
 * @method void setStatus(string $Status) 设置enabled：生效，disabled：失效
 */
class ModifyRecordsStatusRequest extends AbstractModel
{
    /**
     * @var string 私有域ID
     */
    public $ZoneId;

    /**
     * @var array 解析记录ID列表
     */
    public $RecordIds;

    /**
     * @var string enabled：生效，disabled：失效
     */
    public $Status;

    /**
     * @param string $ZoneId 私有域ID
     * @param array $RecordIds 解析记录ID列表
     * @param string $Status enabled：生效，disabled：失效
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

        if (array_key_exists("RecordIds",$param) and $param["RecordIds"] !== null) {
            $this->RecordIds = $param["RecordIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
