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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS封禁等级
 *
 * @method string getAiStatus() 获取不支持，填off
 * @method void setAiStatus(string $AiStatus) 设置不支持，填off
 * @method string getAppid() 获取用户appid
 * @method void setAppid(string $Appid) 设置用户appid
 * @method string getPlyLevel() 获取策略等级 low, middle, high
 * @method void setPlyLevel(string $PlyLevel) 设置策略等级 low, middle, high
 */
class DDoSStatusInfo extends AbstractModel
{
    /**
     * @var string 不支持，填off
     */
    public $AiStatus;

    /**
     * @var string 用户appid
     */
    public $Appid;

    /**
     * @var string 策略等级 low, middle, high
     */
    public $PlyLevel;

    /**
     * @param string $AiStatus 不支持，填off
     * @param string $Appid 用户appid
     * @param string $PlyLevel 策略等级 low, middle, high
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
        if (array_key_exists("AiStatus",$param) and $param["AiStatus"] !== null) {
            $this->AiStatus = $param["AiStatus"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("PlyLevel",$param) and $param["PlyLevel"] !== null) {
            $this->PlyLevel = $param["PlyLevel"];
        }
    }
}
