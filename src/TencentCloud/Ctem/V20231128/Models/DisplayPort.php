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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 端口详情
 *
 * @method integer getId() 获取主键ID
 * @method void setId(integer $Id) 设置主键ID
 * @method DisplayToolCommon getDisplayToolCommon() 获取公共字段
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置公共字段
 * @method string getAsset() 获取IP或域名地址
 * @method void setAsset(string $Asset) 设置IP或域名地址
 * @method string getIp() 获取解析的IP
 * @method void setIp(string $Ip) 设置解析的IP
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method boolean getIsHighRisk() 获取是否高危
 * @method void setIsHighRisk(boolean $IsHighRisk) 设置是否高危
 * @method string getApp() 获取组件名称
 * @method void setApp(string $App) 设置组件名称
 * @method string getService() 获取服务名称
 * @method void setService(string $Service) 设置服务名称
 * @method string getBanner() 获取端口响应详情
 * @method void setBanner(string $Banner) 设置端口响应详情
 * @method string getLastCheckTime() 获取上次检测时间
 * @method void setLastCheckTime(string $LastCheckTime) 设置上次检测时间
 * @method string getStatus() 获取状态，close:连接超时，端口可能已关闭，open:端口开放, checking:复测中, ignore:已忽略
 * @method void setStatus(string $Status) 设置状态，close:连接超时，端口可能已关闭，open:端口开放, checking:复测中, ignore:已忽略
 */
class DisplayPort extends AbstractModel
{
    /**
     * @var integer 主键ID
     */
    public $Id;

    /**
     * @var DisplayToolCommon 公共字段
     */
    public $DisplayToolCommon;

    /**
     * @var string IP或域名地址
     */
    public $Asset;

    /**
     * @var string 解析的IP
     */
    public $Ip;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var boolean 是否高危
     */
    public $IsHighRisk;

    /**
     * @var string 组件名称
     */
    public $App;

    /**
     * @var string 服务名称
     */
    public $Service;

    /**
     * @var string 端口响应详情
     */
    public $Banner;

    /**
     * @var string 上次检测时间
     */
    public $LastCheckTime;

    /**
     * @var string 状态，close:连接超时，端口可能已关闭，open:端口开放, checking:复测中, ignore:已忽略
     */
    public $Status;

    /**
     * @param integer $Id 主键ID
     * @param DisplayToolCommon $DisplayToolCommon 公共字段
     * @param string $Asset IP或域名地址
     * @param string $Ip 解析的IP
     * @param integer $Port 端口
     * @param boolean $IsHighRisk 是否高危
     * @param string $App 组件名称
     * @param string $Service 服务名称
     * @param string $Banner 端口响应详情
     * @param string $LastCheckTime 上次检测时间
     * @param string $Status 状态，close:连接超时，端口可能已关闭，open:端口开放, checking:复测中, ignore:已忽略
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DisplayToolCommon",$param) and $param["DisplayToolCommon"] !== null) {
            $this->DisplayToolCommon = new DisplayToolCommon();
            $this->DisplayToolCommon->deserialize($param["DisplayToolCommon"]);
        }

        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = $param["Asset"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("IsHighRisk",$param) and $param["IsHighRisk"] !== null) {
            $this->IsHighRisk = $param["IsHighRisk"];
        }

        if (array_key_exists("App",$param) and $param["App"] !== null) {
            $this->App = $param["App"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Banner",$param) and $param["Banner"] !== null) {
            $this->Banner = $param["Banner"];
        }

        if (array_key_exists("LastCheckTime",$param) and $param["LastCheckTime"] !== null) {
            $this->LastCheckTime = $param["LastCheckTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
