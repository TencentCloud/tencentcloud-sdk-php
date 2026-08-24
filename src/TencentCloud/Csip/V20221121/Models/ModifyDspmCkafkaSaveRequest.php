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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDspmCkafkaSave请求参数结构体
 *
 * @method integer getVipType() 获取接入类型，当前支持 1和7, 类型vip网络类型（1:外网TGW 2:基础网络 3:VPC网络 4:支撑网络(idc 环境) 5:SSL外网访问方式访问 6:黑石环境vpc 7:支撑网络(cvm 环境）
 * @method void setVipType(integer $VipType) 设置接入类型，当前支持 1和7, 类型vip网络类型（1:外网TGW 2:基础网络 3:VPC网络 4:支撑网络(idc 环境) 5:SSL外网访问方式访问 6:黑石环境vpc 7:支撑网络(cvm 环境）
 * @method string getRegionId() 获取实例的地域
 * @method void setRegionId(string $RegionId) 设置实例的地域
 * @method string getInstanceId() 获取实例的id
 * @method void setInstanceId(string $InstanceId) 设置实例的id
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method RouteInfo getRouteInfo() 获取实例的接入信息
 * @method void setRouteInfo(RouteInfo $RouteInfo) 设置实例的接入信息
 * @method string getUsername() 获取接入为域名的时候，有效
 * @method void setUsername(string $Username) 设置接入为域名的时候，有效
 * @method string getPassword() 获取接入为域名的时候，有效
 * @method void setPassword(string $Password) 设置接入为域名的时候，有效
 * @method array getLogDeliveryInfo() 获取日志投递的主题配置
 * @method void setLogDeliveryInfo(array $LogDeliveryInfo) 设置日志投递的主题配置
 * @method boolean getIsOverwrite() 获取已存在配置时是否覆盖，默认 false（不覆盖，保持兼容）
 * @method void setIsOverwrite(boolean $IsOverwrite) 设置已存在配置时是否覆盖，默认 false（不覆盖，保持兼容）
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 */
class ModifyDspmCkafkaSaveRequest extends AbstractModel
{
    /**
     * @var integer 接入类型，当前支持 1和7, 类型vip网络类型（1:外网TGW 2:基础网络 3:VPC网络 4:支撑网络(idc 环境) 5:SSL外网访问方式访问 6:黑石环境vpc 7:支撑网络(cvm 环境）
     */
    public $VipType;

    /**
     * @var string 实例的地域
     */
    public $RegionId;

    /**
     * @var string 实例的id
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var RouteInfo 实例的接入信息
     */
    public $RouteInfo;

    /**
     * @var string 接入为域名的时候，有效
     */
    public $Username;

    /**
     * @var string 接入为域名的时候，有效
     */
    public $Password;

    /**
     * @var array 日志投递的主题配置
     */
    public $LogDeliveryInfo;

    /**
     * @var boolean 已存在配置时是否覆盖，默认 false（不覆盖，保持兼容）
     */
    public $IsOverwrite;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @param integer $VipType 接入类型，当前支持 1和7, 类型vip网络类型（1:外网TGW 2:基础网络 3:VPC网络 4:支撑网络(idc 环境) 5:SSL外网访问方式访问 6:黑石环境vpc 7:支撑网络(cvm 环境）
     * @param string $RegionId 实例的地域
     * @param string $InstanceId 实例的id
     * @param string $InstanceName 实例名称
     * @param RouteInfo $RouteInfo 实例的接入信息
     * @param string $Username 接入为域名的时候，有效
     * @param string $Password 接入为域名的时候，有效
     * @param array $LogDeliveryInfo 日志投递的主题配置
     * @param boolean $IsOverwrite 已存在配置时是否覆盖，默认 false（不覆盖，保持兼容）
     * @param array $MemberId <p>集团账号的成员id</p>
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
        if (array_key_exists("VipType",$param) and $param["VipType"] !== null) {
            $this->VipType = $param["VipType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("RouteInfo",$param) and $param["RouteInfo"] !== null) {
            $this->RouteInfo = new RouteInfo();
            $this->RouteInfo->deserialize($param["RouteInfo"]);
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("LogDeliveryInfo",$param) and $param["LogDeliveryInfo"] !== null) {
            $this->LogDeliveryInfo = [];
            foreach ($param["LogDeliveryInfo"] as $key => $value){
                $obj = new LogDeliveryInfo();
                $obj->deserialize($value);
                array_push($this->LogDeliveryInfo, $obj);
            }
        }

        if (array_key_exists("IsOverwrite",$param) and $param["IsOverwrite"] !== null) {
            $this->IsOverwrite = $param["IsOverwrite"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
