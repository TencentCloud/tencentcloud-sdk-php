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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生效运营商白名单号码
 *
 * @method integer getSdkAppId() 获取实例Id
 * @method void setSdkAppId(integer $SdkAppId) 设置实例Id
 * @method string getCaller() 获取主叫号码
 * @method void setCaller(string $Caller) 设置主叫号码
 * @method string getCallee() 获取被叫号码
 * @method void setCallee(string $Callee) 设置被叫号码
 * @method integer getCreateTime() 获取生效unix时间戳(秒)
 * @method void setCreateTime(integer $CreateTime) 设置生效unix时间戳(秒)
 */
class ActiveCarrierPrivilegeNumber extends AbstractModel
{
    /**
     * @var integer 实例Id
     */
    public $SdkAppId;

    /**
     * @var string 主叫号码
     */
    public $Caller;

    /**
     * @var string 被叫号码
     */
    public $Callee;

    /**
     * @var integer 生效unix时间戳(秒)
     */
    public $CreateTime;

    /**
     * @param integer $SdkAppId 实例Id
     * @param string $Caller 主叫号码
     * @param string $Callee 被叫号码
     * @param integer $CreateTime 生效unix时间戳(秒)
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = $param["Caller"];
        }

        if (array_key_exists("Callee",$param) and $param["Callee"] !== null) {
            $this->Callee = $param["Callee"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
