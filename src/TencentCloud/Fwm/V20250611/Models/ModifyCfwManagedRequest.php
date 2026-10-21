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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCfwManaged请求参数结构体
 *
 * @method string getMemberId() 获取目标成员 Id
 * @method void setMemberId(string $MemberId) 设置目标成员 Id
 * @method integer getCfwManaged() 获取云防火墙纳管：0-关闭，1-开启
 * @method void setCfwManaged(integer $CfwManaged) 设置云防火墙纳管：0-关闭，1-开启
 */
class ModifyCfwManagedRequest extends AbstractModel
{
    /**
     * @var string 目标成员 Id
     */
    public $MemberId;

    /**
     * @var integer 云防火墙纳管：0-关闭，1-开启
     */
    public $CfwManaged;

    /**
     * @param string $MemberId 目标成员 Id
     * @param integer $CfwManaged 云防火墙纳管：0-关闭，1-开启
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("CfwManaged",$param) and $param["CfwManaged"] !== null) {
            $this->CfwManaged = $param["CfwManaged"];
        }
    }
}
