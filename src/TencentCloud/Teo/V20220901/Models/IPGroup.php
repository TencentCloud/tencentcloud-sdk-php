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
 * @method integer getGroupId() 获取<p>IP 组 Id，创建时填 0 即可。</p>
 * @method void setGroupId(integer $GroupId) 设置<p>IP 组 Id，创建时填 0 即可。</p>
 * @method string getName() 获取<p>IP 组名称。</p>
 * @method void setName(string $Name) 设置<p>IP 组名称。</p>
 * @method array getContent() 获取<p>IP 组内容，仅支持 IP 及 IP 网段。</p>
 * @method void setContent(array $Content) 设置<p>IP 组内容，仅支持 IP 及 IP 网段。</p>
 * @method integer getIPTotalCount() 获取<p>IP 组中正在生效的 IP 或网段个数。作为出参时有效，作为入参时无需填写该字段。</p>
 * @method void setIPTotalCount(integer $IPTotalCount) 设置<p>IP 组中正在生效的 IP 或网段个数。作为出参时有效，作为入参时无需填写该字段。</p>
 * @method array getIPExpireInfo() 获取<p>IP 定时过期信息。<br>作为入参，用于为指定的 IP 地址或网段配置定时过期时间。<br>作为出参，包含以下两类信息：</p><li>当前未到期的定时过期信息：尚未触发的过期配置。</li><li>一周内已到期的定时过期信息：已触发的过期配置。</li>
 * @method void setIPExpireInfo(array $IPExpireInfo) 设置<p>IP 定时过期信息。<br>作为入参，用于为指定的 IP 地址或网段配置定时过期时间。<br>作为出参，包含以下两类信息：</p><li>当前未到期的定时过期信息：尚未触发的过期配置。</li><li>一周内已到期的定时过期信息：已触发的过期配置。</li>
 * @method integer getRefCount() 获取<p>IP 组被引用的数量。</p>
 * @method void setRefCount(integer $RefCount) 设置<p>IP 组被引用的数量。</p>
 */
class IPGroup extends AbstractModel
{
    /**
     * @var integer <p>IP 组 Id，创建时填 0 即可。</p>
     */
    public $GroupId;

    /**
     * @var string <p>IP 组名称。</p>
     */
    public $Name;

    /**
     * @var array <p>IP 组内容，仅支持 IP 及 IP 网段。</p>
     */
    public $Content;

    /**
     * @var integer <p>IP 组中正在生效的 IP 或网段个数。作为出参时有效，作为入参时无需填写该字段。</p>
     */
    public $IPTotalCount;

    /**
     * @var array <p>IP 定时过期信息。<br>作为入参，用于为指定的 IP 地址或网段配置定时过期时间。<br>作为出参，包含以下两类信息：</p><li>当前未到期的定时过期信息：尚未触发的过期配置。</li><li>一周内已到期的定时过期信息：已触发的过期配置。</li>
     */
    public $IPExpireInfo;

    /**
     * @var integer <p>IP 组被引用的数量。</p>
     */
    public $RefCount;

    /**
     * @param integer $GroupId <p>IP 组 Id，创建时填 0 即可。</p>
     * @param string $Name <p>IP 组名称。</p>
     * @param array $Content <p>IP 组内容，仅支持 IP 及 IP 网段。</p>
     * @param integer $IPTotalCount <p>IP 组中正在生效的 IP 或网段个数。作为出参时有效，作为入参时无需填写该字段。</p>
     * @param array $IPExpireInfo <p>IP 定时过期信息。<br>作为入参，用于为指定的 IP 地址或网段配置定时过期时间。<br>作为出参，包含以下两类信息：</p><li>当前未到期的定时过期信息：尚未触发的过期配置。</li><li>一周内已到期的定时过期信息：已触发的过期配置。</li>
     * @param integer $RefCount <p>IP 组被引用的数量。</p>
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

        if (array_key_exists("RefCount",$param) and $param["RefCount"] !== null) {
            $this->RefCount = $param["RefCount"];
        }
    }
}
