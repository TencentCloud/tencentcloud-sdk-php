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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDeviceAccessScope请求参数结构体
 *
 * @method array getDeviceIds() 获取<p>设备ID</p>
 * @method void setDeviceIds(array $DeviceIds) 设置<p>设备ID</p>
 * @method integer getAccessScope() 获取<p>接入网关类型</p><p>枚举值：</p><ul><li>0： 公有云网关</li><li>1： 客户私有网关</li></ul><p>默认值：0</p><p>如果不传，则默认修改为接入公有云网关。</p>
 * @method void setAccessScope(integer $AccessScope) 设置<p>接入网关类型</p><p>枚举值：</p><ul><li>0： 公有云网关</li><li>1： 客户私有网关</li></ul><p>默认值：0</p><p>如果不传，则默认修改为接入公有云网关。</p>
 */
class ModifyDeviceAccessScopeRequest extends AbstractModel
{
    /**
     * @var array <p>设备ID</p>
     */
    public $DeviceIds;

    /**
     * @var integer <p>接入网关类型</p><p>枚举值：</p><ul><li>0： 公有云网关</li><li>1： 客户私有网关</li></ul><p>默认值：0</p><p>如果不传，则默认修改为接入公有云网关。</p>
     */
    public $AccessScope;

    /**
     * @param array $DeviceIds <p>设备ID</p>
     * @param integer $AccessScope <p>接入网关类型</p><p>枚举值：</p><ul><li>0： 公有云网关</li><li>1： 客户私有网关</li></ul><p>默认值：0</p><p>如果不传，则默认修改为接入公有云网关。</p>
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
        if (array_key_exists("DeviceIds",$param) and $param["DeviceIds"] !== null) {
            $this->DeviceIds = $param["DeviceIds"];
        }

        if (array_key_exists("AccessScope",$param) and $param["AccessScope"] !== null) {
            $this->AccessScope = $param["AccessScope"];
        }
    }
}
