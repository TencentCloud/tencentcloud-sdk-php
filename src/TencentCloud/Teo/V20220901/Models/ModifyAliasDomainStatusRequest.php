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
 * ModifyAliasDomainStatus请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method boolean getPaused() 获取别称域名状态，取值有：
<li> false：开启别称域名；</li>
<li> true：关闭别称域名。</li>
 * @method void setPaused(boolean $Paused) 设置别称域名状态，取值有：
<li> false：开启别称域名；</li>
<li> true：关闭别称域名。</li>
 * @method array getAliasNames() 获取待修改状态的别称域名名称。如果为空，则不执行修改状态操作。
 * @method void setAliasNames(array $AliasNames) 设置待修改状态的别称域名名称。如果为空，则不执行修改状态操作。
 */
class ModifyAliasDomainStatusRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var boolean 别称域名状态，取值有：
<li> false：开启别称域名；</li>
<li> true：关闭别称域名。</li>
     */
    public $Paused;

    /**
     * @var array 待修改状态的别称域名名称。如果为空，则不执行修改状态操作。
     */
    public $AliasNames;

    /**
     * @param string $ZoneId 站点 ID。
     * @param boolean $Paused 别称域名状态，取值有：
<li> false：开启别称域名；</li>
<li> true：关闭别称域名。</li>
     * @param array $AliasNames 待修改状态的别称域名名称。如果为空，则不执行修改状态操作。
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

        if (array_key_exists("Paused",$param) and $param["Paused"] !== null) {
            $this->Paused = $param["Paused"];
        }

        if (array_key_exists("AliasNames",$param) and $param["AliasNames"] !== null) {
            $this->AliasNames = $param["AliasNames"];
        }
    }
}
