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
 * 安全防护实例
 *
 * @method string getZoneId() 获取站点Id。
 * @method void setZoneId(string $ZoneId) 设置站点Id。
 * @method string getEntity() 获取子域名/应用名。
 * @method void setEntity(string $Entity) 设置子域名/应用名。
 * @method string getEntityType() 获取类型，取值有：
<li> domain：7层子域名； </li>
<li> application：4层应用名。 </li>
 * @method void setEntityType(string $EntityType) 设置类型，取值有：
<li> domain：7层子域名； </li>
<li> application：4层应用名。 </li>
 */
class SecurityEntity extends AbstractModel
{
    /**
     * @var string 站点Id。
     */
    public $ZoneId;

    /**
     * @var string 子域名/应用名。
     */
    public $Entity;

    /**
     * @var string 类型，取值有：
<li> domain：7层子域名； </li>
<li> application：4层应用名。 </li>
     */
    public $EntityType;

    /**
     * @param string $ZoneId 站点Id。
     * @param string $Entity 子域名/应用名。
     * @param string $EntityType 类型，取值有：
<li> domain：7层子域名； </li>
<li> application：4层应用名。 </li>
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

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }
    }
}
