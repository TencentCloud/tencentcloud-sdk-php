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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DestroyResourceInstances请求参数结构体
 *
 * @method string getResourceId() 获取ResourceId 资源id，在创建订单时，返回的resourceId
 * @method void setResourceId(string $ResourceId) 设置ResourceId 资源id，在创建订单时，返回的resourceId
 * @method string getAppPkgName() 获取资源绑定的包名，为了防止误删除，需要指定绑定时的包名
 * @method void setAppPkgName(string $AppPkgName) 设置资源绑定的包名，为了防止误删除，需要指定绑定时的包名
 */
class DestroyResourceInstancesRequest extends AbstractModel
{
    /**
     * @var string ResourceId 资源id，在创建订单时，返回的resourceId
     */
    public $ResourceId;

    /**
     * @var string 资源绑定的包名，为了防止误删除，需要指定绑定时的包名
     */
    public $AppPkgName;

    /**
     * @param string $ResourceId ResourceId 资源id，在创建订单时，返回的resourceId
     * @param string $AppPkgName 资源绑定的包名，为了防止误删除，需要指定绑定时的包名
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

        if (array_key_exists("AppPkgName",$param) and $param["AppPkgName"] !== null) {
            $this->AppPkgName = $param["AppPkgName"];
        }
    }
}
