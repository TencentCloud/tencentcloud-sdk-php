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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyHostStatus请求参数结构体
 *
 * @method array getHostsStatus() 获取域名状态列表
 * @method void setHostsStatus(array $HostsStatus) 设置域名状态列表
 */
class ModifyHostStatusRequest extends AbstractModel
{
    /**
     * @var array 域名状态列表
     */
    public $HostsStatus;

    /**
     * @param array $HostsStatus 域名状态列表
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
        if (array_key_exists("HostsStatus",$param) and $param["HostsStatus"] !== null) {
            $this->HostsStatus = [];
            foreach ($param["HostsStatus"] as $key => $value){
                $obj = new HostStatus();
                $obj->deserialize($value);
                array_push($this->HostsStatus, $obj);
            }
        }
    }
}
