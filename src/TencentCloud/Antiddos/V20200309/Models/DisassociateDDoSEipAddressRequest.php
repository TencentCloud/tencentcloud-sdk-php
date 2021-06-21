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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DisassociateDDoSEipAddress请求参数结构体
 *
 * @method string getInstanceId() 获取资源实例ID，实例ID形如：bgpip-0000011x。只能填写高防IP实例。
 * @method void setInstanceId(string $InstanceId) 设置资源实例ID，实例ID形如：bgpip-0000011x。只能填写高防IP实例。
 * @method string getEip() 获取资源实例ID对应的高防弹性公网IP。
 * @method void setEip(string $Eip) 设置资源实例ID对应的高防弹性公网IP。
 */
class DisassociateDDoSEipAddressRequest extends AbstractModel
{
    /**
     * @var string 资源实例ID，实例ID形如：bgpip-0000011x。只能填写高防IP实例。
     */
    public $InstanceId;

    /**
     * @var string 资源实例ID对应的高防弹性公网IP。
     */
    public $Eip;

    /**
     * @param string $InstanceId 资源实例ID，实例ID形如：bgpip-0000011x。只能填写高防IP实例。
     * @param string $Eip 资源实例ID对应的高防弹性公网IP。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Eip",$param) and $param["Eip"] !== null) {
            $this->Eip = $param["Eip"];
        }
    }
}
