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
 * IP 网段组
 *
 * @method integer getGroupId() 获取组 Id，创建时填 0 即可。
 * @method void setGroupId(integer $GroupId) 设置组 Id，创建时填 0 即可。
 * @method string getName() 获取组名称。
 * @method void setName(string $Name) 设置组名称。
 * @method array getContent() 获取IP 组内容，可以填入 IP 及 IP 掩码。
 * @method void setContent(array $Content) 设置IP 组内容，可以填入 IP 及 IP 掩码。
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
     * @var array IP 组内容，可以填入 IP 及 IP 掩码。
     */
    public $Content;

    /**
     * @param integer $GroupId 组 Id，创建时填 0 即可。
     * @param string $Name 组名称。
     * @param array $Content IP 组内容，可以填入 IP 及 IP 掩码。
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
    }
}
