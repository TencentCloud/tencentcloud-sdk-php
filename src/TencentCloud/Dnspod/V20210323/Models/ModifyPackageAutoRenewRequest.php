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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPackageAutoRenew请求参数结构体
 *
 * @method string getResourceId() 获取资源ID。可以在控制台查看所有的资源
 * @method void setResourceId(string $ResourceId) 设置资源ID。可以在控制台查看所有的资源
 * @method string getStatus() 获取enable 开启自动续费；disable 关闭自动续费
 * @method void setStatus(string $Status) 设置enable 开启自动续费；disable 关闭自动续费
 */
class ModifyPackageAutoRenewRequest extends AbstractModel
{
    /**
     * @var string 资源ID。可以在控制台查看所有的资源
     */
    public $ResourceId;

    /**
     * @var string enable 开启自动续费；disable 关闭自动续费
     */
    public $Status;

    /**
     * @param string $ResourceId 资源ID。可以在控制台查看所有的资源
     * @param string $Status enable 开启自动续费；disable 关闭自动续费
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
