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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQTT认证器信息
 *
 * @method string getType() 获取认证器类型: JWT：JWT认证器 JWKS：JWKS认证器 BYOC：一端一证认证器
 * @method void setType(string $Type) 设置认证器类型: JWT：JWT认证器 JWKS：JWKS认证器 BYOC：一端一证认证器
 * @method string getConfig() 获取认证器配置
 * @method void setConfig(string $Config) 设置认证器配置
 * @method string getStatus() 获取认证器状态
 * @method void setStatus(string $Status) 设置认证器状态
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method string getRemark() 获取说明
 * @method void setRemark(string $Remark) 设置说明
 */
class MQTTAuthenticatorItem extends AbstractModel
{
    /**
     * @var string 认证器类型: JWT：JWT认证器 JWKS：JWKS认证器 BYOC：一端一证认证器
     */
    public $Type;

    /**
     * @var string 认证器配置
     */
    public $Config;

    /**
     * @var string 认证器状态
     */
    public $Status;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var string 说明
     */
    public $Remark;

    /**
     * @param string $Type 认证器类型: JWT：JWT认证器 JWKS：JWKS认证器 BYOC：一端一证认证器
     * @param string $Config 认证器配置
     * @param string $Status 认证器状态
     * @param integer $CreateTime 创建时间
     * @param string $Remark 说明
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
