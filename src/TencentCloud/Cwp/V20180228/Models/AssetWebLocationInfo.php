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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产管理Web站点列表信息
 *
 * @method string getName() 获取域名
 * @method void setName(string $Name) 设置域名
 * @method string getPort() 获取站点端口
 * @method void setPort(string $Port) 设置站点端口
 * @method string getProto() 获取站点协议
 * @method void setProto(string $Proto) 设置站点协议
 * @method string getServiceType() 获取服务类型
 * @method void setServiceType(string $ServiceType) 设置服务类型
 * @method integer getSafeStatus() 获取安全模块状态：0未启用，1启用，999空，仅nginx
 * @method void setSafeStatus(integer $SafeStatus) 设置安全模块状态：0未启用，1启用，999空，仅nginx
 * @method string getUser() 获取运行用户
 * @method void setUser(string $User) 设置运行用户
 * @method string getMainPath() 获取主目录
 * @method void setMainPath(string $MainPath) 设置主目录
 * @method string getCommand() 获取启动命令
 * @method void setCommand(string $Command) 设置启动命令
 * @method string getIp() 获取绑定IP
 * @method void setIp(string $Ip) 设置绑定IP
 * @method string getUpdateTime() 获取数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetWebLocationInfo extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Name;

    /**
     * @var string 站点端口
     */
    public $Port;

    /**
     * @var string 站点协议
     */
    public $Proto;

    /**
     * @var string 服务类型
     */
    public $ServiceType;

    /**
     * @var integer 安全模块状态：0未启用，1启用，999空，仅nginx
     */
    public $SafeStatus;

    /**
     * @var string 运行用户
     */
    public $User;

    /**
     * @var string 主目录
     */
    public $MainPath;

    /**
     * @var string 启动命令
     */
    public $Command;

    /**
     * @var string 绑定IP
     */
    public $Ip;

    /**
     * @var string 数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $Name 域名
     * @param string $Port 站点端口
     * @param string $Proto 站点协议
     * @param string $ServiceType 服务类型
     * @param integer $SafeStatus 安全模块状态：0未启用，1启用，999空，仅nginx
     * @param string $User 运行用户
     * @param string $MainPath 主目录
     * @param string $Command 启动命令
     * @param string $Ip 绑定IP
     * @param string $UpdateTime 数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("SafeStatus",$param) and $param["SafeStatus"] !== null) {
            $this->SafeStatus = $param["SafeStatus"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("MainPath",$param) and $param["MainPath"] !== null) {
            $this->MainPath = $param["MainPath"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
