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
 * ModifyOriginACL请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method array getOriginACLEntities() 获取需要启用/关闭特定回源 IP 网段回源的实例。
 * @method void setOriginACLEntities(array $OriginACLEntities) 设置需要启用/关闭特定回源 IP 网段回源的实例。
 */
class ModifyOriginACLRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var array 需要启用/关闭特定回源 IP 网段回源的实例。
     */
    public $OriginACLEntities;

    /**
     * @param string $ZoneId 站点 ID。
     * @param array $OriginACLEntities 需要启用/关闭特定回源 IP 网段回源的实例。
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

        if (array_key_exists("OriginACLEntities",$param) and $param["OriginACLEntities"] !== null) {
            $this->OriginACLEntities = [];
            foreach ($param["OriginACLEntities"] as $key => $value){
                $obj = new OriginACLEntity();
                $obj->deserialize($value);
                array_push($this->OriginACLEntities, $obj);
            }
        }
    }
}
