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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 成本分析可用区复杂类型
 *
 * @method string getZoneId() 获取可用区id
 * @method void setZoneId(string $ZoneId) 设置可用区id
 * @method string getZoneName() 获取可用区Name
 * @method void setZoneName(string $ZoneName) 设置可用区Name
 */
class AnalyseZoneDetail extends AbstractModel
{
    /**
     * @var string 可用区id
     */
    public $ZoneId;

    /**
     * @var string 可用区Name
     */
    public $ZoneName;

    /**
     * @param string $ZoneId 可用区id
     * @param string $ZoneName 可用区Name
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

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }
    }
}
