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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机参数，导入外部主机时使用
 *
 * @method string getOsName() 获取操作系统名称，只能是Linux、Windows或MySQL
 * @method void setOsName(string $OsName) 设置操作系统名称，只能是Linux、Windows或MySQL
 * @method string getIp() 获取IP地址
 * @method void setIp(string $Ip) 设置IP地址
 * @method integer getPort() 获取管理端口
 * @method void setPort(integer $Port) 设置管理端口
 * @method string getName() 获取主机名，可为空
 * @method void setName(string $Name) 设置主机名，可为空
 * @method string getDepartmentId() 获取资产所属的部门ID
 * @method void setDepartmentId(string $DepartmentId) 设置资产所属的部门ID
 */
class ExternalDevice extends AbstractModel
{
    /**
     * @var string 操作系统名称，只能是Linux、Windows或MySQL
     */
    public $OsName;

    /**
     * @var string IP地址
     */
    public $Ip;

    /**
     * @var integer 管理端口
     */
    public $Port;

    /**
     * @var string 主机名，可为空
     */
    public $Name;

    /**
     * @var string 资产所属的部门ID
     */
    public $DepartmentId;

    /**
     * @param string $OsName 操作系统名称，只能是Linux、Windows或MySQL
     * @param string $Ip IP地址
     * @param integer $Port 管理端口
     * @param string $Name 主机名，可为空
     * @param string $DepartmentId 资产所属的部门ID
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
        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }
    }
}
