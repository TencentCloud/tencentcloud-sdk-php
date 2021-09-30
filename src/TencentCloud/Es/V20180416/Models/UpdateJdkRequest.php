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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateJdk请求参数结构体
 *
 * @method string getInstanceId() 获取ES实例ID
 * @method void setInstanceId(string $InstanceId) 设置ES实例ID
 * @method string getJdk() 获取Jdk类型，支持kona和oracle
 * @method void setJdk(string $Jdk) 设置Jdk类型，支持kona和oracle
 * @method string getGc() 获取Gc类型，支持g1和cms
 * @method void setGc(string $Gc) 设置Gc类型，支持g1和cms
 * @method boolean getForceRestart() 获取是否强制重启
 * @method void setForceRestart(boolean $ForceRestart) 设置是否强制重启
 */
class UpdateJdkRequest extends AbstractModel
{
    /**
     * @var string ES实例ID
     */
    public $InstanceId;

    /**
     * @var string Jdk类型，支持kona和oracle
     */
    public $Jdk;

    /**
     * @var string Gc类型，支持g1和cms
     */
    public $Gc;

    /**
     * @var boolean 是否强制重启
     */
    public $ForceRestart;

    /**
     * @param string $InstanceId ES实例ID
     * @param string $Jdk Jdk类型，支持kona和oracle
     * @param string $Gc Gc类型，支持g1和cms
     * @param boolean $ForceRestart 是否强制重启
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

        if (array_key_exists("Jdk",$param) and $param["Jdk"] !== null) {
            $this->Jdk = $param["Jdk"];
        }

        if (array_key_exists("Gc",$param) and $param["Gc"] !== null) {
            $this->Gc = $param["Gc"];
        }

        if (array_key_exists("ForceRestart",$param) and $param["ForceRestart"] !== null) {
            $this->ForceRestart = $param["ForceRestart"];
        }
    }
}
