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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 独立网关云托管服务配置信息
 *
 * @method boolean getIsZero() 获取是否缩容到0
 * @method void setIsZero(boolean $IsZero) 设置是否缩容到0
 * @method integer getWeight() 获取按百分比灰度的权重
 * @method void setWeight(integer $Weight) 设置按百分比灰度的权重
 * @method string getGrayKey() 获取按请求/header参数的灰度Key
 * @method void setGrayKey(string $GrayKey) 设置按请求/header参数的灰度Key
 * @method string getGrayValue() 获取按请求/header参数的灰度Value
 * @method void setGrayValue(string $GrayValue) 设置按请求/header参数的灰度Value
 * @method boolean getIsDefault() 获取是否为默认版本(按请求/header参数)
 * @method void setIsDefault(boolean $IsDefault) 设置是否为默认版本(按请求/header参数)
 * @method integer getAccessType() 获取访问权限，对应二进制分多段，vpc内网｜公网｜oa
 * @method void setAccessType(integer $AccessType) 设置访问权限，对应二进制分多段，vpc内网｜公网｜oa
 * @method array getURLs() 获取访问的URL（域名＋路径）列表
 * @method void setURLs(array $URLs) 设置访问的URL（域名＋路径）列表
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getServerName() 获取服务名称
 * @method void setServerName(string $ServerName) 设置服务名称
 * @method string getVersionName() 获取版本名称
 * @method void setVersionName(string $VersionName) 设置版本名称
 * @method string getGrayType() 获取灰度类型：FLOW(权重), URL_PARAMS/HEAD_PARAMS
 * @method void setGrayType(string $GrayType) 设置灰度类型：FLOW(权重), URL_PARAMS/HEAD_PARAMS
 * @method string getLbAddr() 获取CLB的IP:Port
 * @method void setLbAddr(string $LbAddr) 设置CLB的IP:Port
 * @method integer getConfigType() 获取0:http访问服务配置信息, 1: 服务域名
 * @method void setConfigType(integer $ConfigType) 设置0:http访问服务配置信息, 1: 服务域名
 */
class CloudBaseRunForGatewayConf extends AbstractModel
{
    /**
     * @var boolean 是否缩容到0
     */
    public $IsZero;

    /**
     * @var integer 按百分比灰度的权重
     */
    public $Weight;

    /**
     * @var string 按请求/header参数的灰度Key
     */
    public $GrayKey;

    /**
     * @var string 按请求/header参数的灰度Value
     */
    public $GrayValue;

    /**
     * @var boolean 是否为默认版本(按请求/header参数)
     */
    public $IsDefault;

    /**
     * @var integer 访问权限，对应二进制分多段，vpc内网｜公网｜oa
     */
    public $AccessType;

    /**
     * @var array 访问的URL（域名＋路径）列表
     */
    public $URLs;

    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 服务名称
     */
    public $ServerName;

    /**
     * @var string 版本名称
     */
    public $VersionName;

    /**
     * @var string 灰度类型：FLOW(权重), URL_PARAMS/HEAD_PARAMS
     */
    public $GrayType;

    /**
     * @var string CLB的IP:Port
     */
    public $LbAddr;

    /**
     * @var integer 0:http访问服务配置信息, 1: 服务域名
     */
    public $ConfigType;

    /**
     * @param boolean $IsZero 是否缩容到0
     * @param integer $Weight 按百分比灰度的权重
     * @param string $GrayKey 按请求/header参数的灰度Key
     * @param string $GrayValue 按请求/header参数的灰度Value
     * @param boolean $IsDefault 是否为默认版本(按请求/header参数)
     * @param integer $AccessType 访问权限，对应二进制分多段，vpc内网｜公网｜oa
     * @param array $URLs 访问的URL（域名＋路径）列表
     * @param string $EnvId 环境ID
     * @param string $ServerName 服务名称
     * @param string $VersionName 版本名称
     * @param string $GrayType 灰度类型：FLOW(权重), URL_PARAMS/HEAD_PARAMS
     * @param string $LbAddr CLB的IP:Port
     * @param integer $ConfigType 0:http访问服务配置信息, 1: 服务域名
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
        if (array_key_exists("IsZero",$param) and $param["IsZero"] !== null) {
            $this->IsZero = $param["IsZero"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("GrayKey",$param) and $param["GrayKey"] !== null) {
            $this->GrayKey = $param["GrayKey"];
        }

        if (array_key_exists("GrayValue",$param) and $param["GrayValue"] !== null) {
            $this->GrayValue = $param["GrayValue"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("URLs",$param) and $param["URLs"] !== null) {
            $this->URLs = $param["URLs"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("GrayType",$param) and $param["GrayType"] !== null) {
            $this->GrayType = $param["GrayType"];
        }

        if (array_key_exists("LbAddr",$param) and $param["LbAddr"] !== null) {
            $this->LbAddr = $param["LbAddr"];
        }

        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            $this->ConfigType = $param["ConfigType"];
        }
    }
}
