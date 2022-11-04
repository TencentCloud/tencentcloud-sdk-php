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
 * 别称域名信息。
 *
 * @method string getAliasName() 获取别称域名名称。
 * @method void setAliasName(string $AliasName) 设置别称域名名称。
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getTargetName() 获取目标域名名称。
 * @method void setTargetName(string $TargetName) 设置目标域名名称。
 * @method string getStatus() 获取别称域名状态，取值有：
<li> active：已生效； </li>
<li> pending：部署中；</li>
<li> conflict：被找回。 </li>
<li> stop：已停用；</li>
 * @method void setStatus(string $Status) 设置别称域名状态，取值有：
<li> active：已生效； </li>
<li> pending：部署中；</li>
<li> conflict：被找回。 </li>
<li> stop：已停用；</li>
 * @method integer getForbidMode() 获取封禁模式，取值有：
<li> 0：未封禁； </li>
<li> 11：合规封禁；</li>
<li> 14：未备案封禁。</li>
 * @method void setForbidMode(integer $ForbidMode) 设置封禁模式，取值有：
<li> 0：未封禁； </li>
<li> 11：合规封禁；</li>
<li> 14：未备案封禁。</li>
 * @method string getCreatedOn() 获取别称域名创建时间。
 * @method void setCreatedOn(string $CreatedOn) 设置别称域名创建时间。
 * @method string getModifiedOn() 获取别称域名修改时间。
 * @method void setModifiedOn(string $ModifiedOn) 设置别称域名修改时间。
 */
class AliasDomain extends AbstractModel
{
    /**
     * @var string 别称域名名称。
     */
    public $AliasName;

    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 目标域名名称。
     */
    public $TargetName;

    /**
     * @var string 别称域名状态，取值有：
<li> active：已生效； </li>
<li> pending：部署中；</li>
<li> conflict：被找回。 </li>
<li> stop：已停用；</li>
     */
    public $Status;

    /**
     * @var integer 封禁模式，取值有：
<li> 0：未封禁； </li>
<li> 11：合规封禁；</li>
<li> 14：未备案封禁。</li>
     */
    public $ForbidMode;

    /**
     * @var string 别称域名创建时间。
     */
    public $CreatedOn;

    /**
     * @var string 别称域名修改时间。
     */
    public $ModifiedOn;

    /**
     * @param string $AliasName 别称域名名称。
     * @param string $ZoneId 站点 ID。
     * @param string $TargetName 目标域名名称。
     * @param string $Status 别称域名状态，取值有：
<li> active：已生效； </li>
<li> pending：部署中；</li>
<li> conflict：被找回。 </li>
<li> stop：已停用；</li>
     * @param integer $ForbidMode 封禁模式，取值有：
<li> 0：未封禁； </li>
<li> 11：合规封禁；</li>
<li> 14：未备案封禁。</li>
     * @param string $CreatedOn 别称域名创建时间。
     * @param string $ModifiedOn 别称域名修改时间。
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
        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ForbidMode",$param) and $param["ForbidMode"] !== null) {
            $this->ForbidMode = $param["ForbidMode"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }
    }
}
