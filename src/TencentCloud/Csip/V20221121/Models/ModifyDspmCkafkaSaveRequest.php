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
 * @method integer getVipType() 获取<p>接入类型，当前支持 1和7</p><p>枚举值：</p><ul><li>1： 外网TGW</li><li>2： 基础网络</li><li>3： VPC网络</li><li>4： idc环境-支撑网络</li><li>5： SSL外网访问方式访问</li><li>6： 黑石环境vpc</li><li>7： cvm环境-支撑网络</li></ul>
 * @method void setVipType(integer $VipType) 设置<p>接入类型，当前支持 1和7</p><p>枚举值：</p><ul><li>1： 外网TGW</li><li>2： 基础网络</li><li>3： VPC网络</li><li>4： idc环境-支撑网络</li><li>5： SSL外网访问方式访问</li><li>6： 黑石环境vpc</li><li>7： cvm环境-支撑网络</li></ul>
 * @method string getRegionId() 获取<p>实例的地域</p>
 * @method void setRegionId(string $RegionId) 设置<p>实例的地域</p>
 * @method string getInstanceId() 获取<p>实例的id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例的id</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method RouteInfo getRouteInfo() 获取<p>实例的接入信息</p>
 * @method void setRouteInfo(RouteInfo $RouteInfo) 设置<p>实例的接入信息</p>
 * @method string getUsername() 获取<p>接入为域名的时候，有效</p>
 * @method void setUsername(string $Username) 设置<p>接入为域名的时候，有效</p>
 * @method string getPassword() 获取<p>接入为域名的时候，有效</p>
 * @method void setPassword(string $Password) 设置<p>接入为域名的时候，有效</p>
 * @method array getLogDeliveryInfo() 获取<p>日志投递的主题配置</p>
 * @method void setLogDeliveryInfo(array $LogDeliveryInfo) 设置<p>日志投递的主题配置</p>
 * @method boolean getIsOverwrite() 获取<p>已存在配置时是否覆盖，默认 false（不覆盖，保持兼容）</p>
 * @method void setIsOverwrite(boolean $IsOverwrite) 设置<p>已存在配置时是否覆盖，默认 false（不覆盖，保持兼容）</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 */
class ModifyDspmCkafkaSaveRequest extends AbstractModel
{
    /**
     * @var integer <p>接入类型，当前支持 1和7</p><p>枚举值：</p><ul><li>1： 外网TGW</li><li>2： 基础网络</li><li>3： VPC网络</li><li>4： idc环境-支撑网络</li><li>5： SSL外网访问方式访问</li><li>6： 黑石环境vpc</li><li>7： cvm环境-支撑网络</li></ul>
     */
    public $VipType;

    /**
     * @var string <p>实例的地域</p>
     */
    public $RegionId;

    /**
     * @var string <p>实例的id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var RouteInfo <p>实例的接入信息</p>
     */
    public $RouteInfo;

    /**
     * @var string <p>接入为域名的时候，有效</p>
     */
    public $Username;

    /**
     * @var string <p>接入为域名的时候，有效</p>
     */
    public $Password;

    /**
     * @var array <p>日志投递的主题配置</p>
     */
    public $LogDeliveryInfo;

    /**
     * @var boolean <p>已存在配置时是否覆盖，默认 false（不覆盖，保持兼容）</p>
     */
    public $IsOverwrite;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @param integer $VipType <p>接入类型，当前支持 1和7</p><p>枚举值：</p><ul><li>1： 外网TGW</li><li>2： 基础网络</li><li>3： VPC网络</li><li>4： idc环境-支撑网络</li><li>5： SSL外网访问方式访问</li><li>6： 黑石环境vpc</li><li>7： cvm环境-支撑网络</li></ul>
     * @param string $RegionId <p>实例的地域</p>
     * @param string $InstanceId <p>实例的id</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param RouteInfo $RouteInfo <p>实例的接入信息</p>
     * @param string $Username <p>接入为域名的时候，有效</p>
     * @param string $Password <p>接入为域名的时候，有效</p>
     * @param array $LogDeliveryInfo <p>日志投递的主题配置</p>
     * @param boolean $IsOverwrite <p>已存在配置时是否覆盖，默认 false（不覆盖，保持兼容）</p>
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
