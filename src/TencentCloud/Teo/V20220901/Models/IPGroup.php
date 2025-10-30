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
 * IP 网段组
 *
 * @method integer getGroupId() 获取组 Id，创建时填 0 即可。
 * @method void setGroupId(integer $GroupId) 设置组 Id，创建时填 0 即可。
 * @method string getName() 获取组名称。
 * @method void setName(string $Name) 设置组名称。
 * @method array getContent() 获取IP 组内容，仅支持 IP 及 IP 网段。
 * @method void setContent(array $Content) 设置IP 组内容，仅支持 IP 及 IP 网段。
 * @method integer getIPTotalCount() 获取IP 组中正在生效的 IP 或网段个数。作为出参时有效，作为入参时无需填写该字段。
 * @method void setIPTotalCount(integer $IPTotalCount) 设置IP 组中正在生效的 IP 或网段个数。作为出参时有效，作为入参时无需填写该字段。
 * @method array getIPExpireInfo() 获取IP 定时过期信息。
作为入参，用于为指定的 IP 地址或网段配置定时过期时间。
作为出参，包含以下两类信息：
<li>当前未到期的定时过期信息：尚未触发的过期配置。</li>
<li>一周内已到期的定时过期信息：已触发的过期配置。</li>
 * @method void setIPExpireInfo(array $IPExpireInfo) 设置IP 定时过期信息。
作为入参，用于为指定的 IP 地址或网段配置定时过期时间。
作为出参，包含以下两类信息：
<li>当前未到期的定时过期信息：尚未触发的过期配置。</li>
<li>一周内已到期的定时过期信息：已触发的过期配置。</li>
 */
class IPGroup extends AbstractModel
{
    /**
     * @var integer 组 Id，创建时填 0 即可。
     */
    public $GroupId;

    /**
     * @var string 组名称。
     */
    public $Name;

    /**
     * @var array IP 组内容，仅支持 IP 及 IP 网段。
     */
    public $Content;

    /**
     * @var integer IP 组中正在生效的 IP 或网段个数。作为出参时有效，作为入参时无需填写该字段。
     */
    public $IPTotalCount;

    /**
     * @var array IP 定时过期信息。
作为入参，用于为指定的 IP 地址或网段配置定时过期时间。
作为出参，包含以下两类信息：
<li>当前未到期的定时过期信息：尚未触发的过期配置。</li>
<li>一周内已到期的定时过期信息：已触发的过期配置。</li>
     */
    public $IPExpireInfo;

    /**
     * @param integer $GroupId 组 Id，创建时填 0 即可。
     * @param string $Name 组名称。
     * @param array $Content IP 组内容，仅支持 IP 及 IP 网段。
     * @param integer $IPTotalCount IP 组中正在生效的 IP 或网段个数。作为出参时有效，作为入参时无需填写该字段。
     * @param array $IPExpireInfo IP 定时过期信息。
作为入参，用于为指定的 IP 地址或网段配置定时过期时间。
作为出参，包含以下两类信息：
<li>当前未到期的定时过期信息：尚未触发的过期配置。</li>
<li>一周内已到期的定时过期信息：已触发的过期配置。</li>
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("IPTotalCount",$param) and $param["IPTotalCount"] !== null) {
            $this->IPTotalCount = $param["IPTotalCount"];
        }

        if (array_key_exists("IPExpireInfo",$param) and $param["IPExpireInfo"] !== null) {
            $this->IPExpireInfo = [];
            foreach ($param["IPExpireInfo"] as $key => $value){
                $obj = new IPExpireInfo();
                $obj->deserialize($value);
                array_push($this->IPExpireInfo, $obj);
            }
        }
    }
}
