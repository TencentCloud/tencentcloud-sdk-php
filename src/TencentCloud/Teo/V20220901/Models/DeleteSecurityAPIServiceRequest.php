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
 * DeleteSecurityAPIService请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。	
 * @method void setZoneId(string $ZoneId) 设置站点 ID。	
 * @method array getAPIServiceIds() 获取API 服务 ID 列表。
 * @method void setAPIServiceIds(array $APIServiceIds) 设置API 服务 ID 列表。
 */
class DeleteSecurityAPIServiceRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。	
     */
    public $ZoneId;

    /**
     * @var array API 服务 ID 列表。
     */
    public $APIServiceIds;

    /**
     * @param string $ZoneId 站点 ID。	
     * @param array $APIServiceIds API 服务 ID 列表。
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

        if (array_key_exists("APIServiceIds",$param) and $param["APIServiceIds"] !== null) {
            $this->APIServiceIds = $param["APIServiceIds"];
        }
    }
}
