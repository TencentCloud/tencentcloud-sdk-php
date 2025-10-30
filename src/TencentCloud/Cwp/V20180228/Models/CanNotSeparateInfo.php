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
 * 不可隔离木马的机器信息
 *
 * @method string getQuuid() 获取主机quuid
 * @method void setQuuid(string $Quuid) 设置主机quuid
 * @method string getUuid() 获取主机uuid
 * @method void setUuid(string $Uuid) 设置主机uuid
 * @method string getAlias() 获取主机名
 * @method void setAlias(string $Alias) 设置主机名
 * @method string getPrivateIp() 获取内网ip
 * @method void setPrivateIp(string $PrivateIp) 设置内网ip
 * @method string getPublicIp() 获取外网ip
 * @method void setPublicIp(string $PublicIp) 设置外网ip
 * @method integer getReason() 获取隔离失败原因 1:agent离线
 * @method void setReason(integer $Reason) 设置隔离失败原因 1:agent离线
 */
class CanNotSeparateInfo extends AbstractModel
{
    /**
     * @var string 主机quuid
     */
    public $Quuid;

    /**
     * @var string 主机uuid
     */
    public $Uuid;

    /**
     * @var string 主机名
     */
    public $Alias;

    /**
     * @var string 内网ip
     */
    public $PrivateIp;

    /**
     * @var string 外网ip
     */
    public $PublicIp;

    /**
     * @var integer 隔离失败原因 1:agent离线
     */
    public $Reason;

    /**
     * @param string $Quuid 主机quuid
     * @param string $Uuid 主机uuid
     * @param string $Alias 主机名
     * @param string $PrivateIp 内网ip
     * @param string $PublicIp 外网ip
     * @param integer $Reason 隔离失败原因 1:agent离线
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

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
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

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
