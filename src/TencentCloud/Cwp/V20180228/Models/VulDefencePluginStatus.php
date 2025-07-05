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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机漏洞防御插件信息
 *
 * @method string getQuuid() 获取主机quuid
 * @method void setQuuid(string $Quuid) 设置主机quuid
 * @method string getAlias() 获取主机别名
 * @method void setAlias(string $Alias) 设置主机别名
 * @method string getPrivateIp() 获取内网ip
 * @method void setPrivateIp(string $PrivateIp) 设置内网ip
 * @method string getPublicIp() 获取公网ip
 * @method void setPublicIp(string $PublicIp) 设置公网ip
 * @method integer getException() 获取插件状态：0 正常，1 异常
 * @method void setException(integer $Exception) 设置插件状态：0 正常，1 异常
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取最后跟新时间
 * @method void setModifyTime(string $ModifyTime) 设置最后跟新时间
 */
class VulDefencePluginStatus extends AbstractModel
{
    /**
     * @var string 主机quuid
     */
    public $Quuid;

    /**
     * @var string 主机别名
     */
    public $Alias;

    /**
     * @var string 内网ip
     */
    public $PrivateIp;

    /**
     * @var string 公网ip
     */
    public $PublicIp;

    /**
     * @var integer 插件状态：0 正常，1 异常
     */
    public $Exception;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 最后跟新时间
     */
    public $ModifyTime;

    /**
     * @param string $Quuid 主机quuid
     * @param string $Alias 主机别名
     * @param string $PrivateIp 内网ip
     * @param string $PublicIp 公网ip
     * @param integer $Exception 插件状态：0 正常，1 异常
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 最后跟新时间
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("Exception",$param) and $param["Exception"] !== null) {
            $this->Exception = $param["Exception"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
