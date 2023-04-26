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
 * DeleteSecurityIPGroup请求参数结构体
 *
 * @method string getZoneId() 获取站点 Id。
 * @method void setZoneId(string $ZoneId) 设置站点 Id。
 * @method integer getGroupId() 获取IP 组 Id。
 * @method void setGroupId(integer $GroupId) 设置IP 组 Id。
 */
class DeleteSecurityIPGroupRequest extends AbstractModel
{
    /**
     * @var string 站点 Id。
     */
    public $ZoneId;

    /**
     * @var integer IP 组 Id。
     */
    public $GroupId;

    /**
     * @param string $ZoneId 站点 Id。
     * @param integer $GroupId IP 组 Id。
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
