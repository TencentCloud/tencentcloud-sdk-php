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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateGrafanaWhiteList请求参数结构体
 *
 * @method string getInstanceId() 获取实例名
 * @method void setInstanceId(string $InstanceId) 设置实例名
 * @method array getWhitelist() 获取白名单数组
 * @method void setWhitelist(array $Whitelist) 设置白名单数组
 */
class UpdateGrafanaWhiteListRequest extends AbstractModel
{
    /**
     * @var string 实例名
     */
    public $InstanceId;

    /**
     * @var array 白名单数组
     */
    public $Whitelist;

    /**
     * @param string $InstanceId 实例名
     * @param array $Whitelist 白名单数组
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

        if (array_key_exists("Whitelist",$param) and $param["Whitelist"] !== null) {
            $this->Whitelist = $param["Whitelist"];
        }
    }
}
