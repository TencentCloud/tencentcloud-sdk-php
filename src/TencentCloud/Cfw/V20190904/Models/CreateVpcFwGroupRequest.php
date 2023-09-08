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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVpcFwGroup请求参数结构体
 *
 * @method string getName() 获取VPC防火墙(组)名称
 * @method void setName(string $Name) 设置VPC防火墙(组)名称
 * @method integer getMode() 获取模式 1：CCN云联网模式；0：私有网络模式 2: sase 模式 3：ccn 高级模式 4: 私有网络(跨租户单边模式)
 * @method void setMode(integer $Mode) 设置模式 1：CCN云联网模式；0：私有网络模式 2: sase 模式 3：ccn 高级模式 4: 私有网络(跨租户单边模式)
 * @method array getVpcFwInstances() 获取防火墙(组)下的防火墙实例列表
 * @method void setVpcFwInstances(array $VpcFwInstances) 设置防火墙(组)下的防火墙实例列表
 * @method integer getSwitchMode() 获取防火墙实例的开关模式
1: 单点互通
2: 多点互通
3: 全互通
4: 自定义路由
 * @method void setSwitchMode(integer $SwitchMode) 设置防火墙实例的开关模式
1: 单点互通
2: 多点互通
3: 全互通
4: 自定义路由
 * @method string getFwVpcCidr() 获取auto 自动选择防火墙网段
10.10.10.0/24 用户输入的防火墙网段
 * @method void setFwVpcCidr(string $FwVpcCidr) 设置auto 自动选择防火墙网段
10.10.10.0/24 用户输入的防火墙网段
 * @method string getCcnId() 获取云联网id ，适用于云联网模式
 * @method void setCcnId(string $CcnId) 设置云联网id ，适用于云联网模式
 * @method FwCidrInfo getFwCidrInfo() 获取指定防火墙使用网段信息
 * @method void setFwCidrInfo(FwCidrInfo $FwCidrInfo) 设置指定防火墙使用网段信息
 * @method string getCrossUserMode() 获取跨租户管理员模式  1管理员 2多账号
 * @method void setCrossUserMode(string $CrossUserMode) 设置跨租户管理员模式  1管理员 2多账号
 */
class CreateVpcFwGroupRequest extends AbstractModel
{
    /**
     * @var string VPC防火墙(组)名称
     */
    public $Name;

    /**
     * @var integer 模式 1：CCN云联网模式；0：私有网络模式 2: sase 模式 3：ccn 高级模式 4: 私有网络(跨租户单边模式)
     */
    public $Mode;

    /**
     * @var array 防火墙(组)下的防火墙实例列表
     */
    public $VpcFwInstances;

    /**
     * @var integer 防火墙实例的开关模式
1: 单点互通
2: 多点互通
3: 全互通
4: 自定义路由
     */
    public $SwitchMode;

    /**
     * @var string auto 自动选择防火墙网段
10.10.10.0/24 用户输入的防火墙网段
     */
    public $FwVpcCidr;

    /**
     * @var string 云联网id ，适用于云联网模式
     */
    public $CcnId;

    /**
     * @var FwCidrInfo 指定防火墙使用网段信息
     */
    public $FwCidrInfo;

    /**
     * @var string 跨租户管理员模式  1管理员 2多账号
     */
    public $CrossUserMode;

    /**
     * @param string $Name VPC防火墙(组)名称
     * @param integer $Mode 模式 1：CCN云联网模式；0：私有网络模式 2: sase 模式 3：ccn 高级模式 4: 私有网络(跨租户单边模式)
     * @param array $VpcFwInstances 防火墙(组)下的防火墙实例列表
     * @param integer $SwitchMode 防火墙实例的开关模式
1: 单点互通
2: 多点互通
3: 全互通
4: 自定义路由
     * @param string $FwVpcCidr auto 自动选择防火墙网段
10.10.10.0/24 用户输入的防火墙网段
     * @param string $CcnId 云联网id ，适用于云联网模式
     * @param FwCidrInfo $FwCidrInfo 指定防火墙使用网段信息
     * @param string $CrossUserMode 跨租户管理员模式  1管理员 2多账号
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

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("VpcFwInstances",$param) and $param["VpcFwInstances"] !== null) {
            $this->VpcFwInstances = [];
            foreach ($param["VpcFwInstances"] as $key => $value){
                $obj = new VpcFwInstance();
                $obj->deserialize($value);
                array_push($this->VpcFwInstances, $obj);
            }
        }

        if (array_key_exists("SwitchMode",$param) and $param["SwitchMode"] !== null) {
            $this->SwitchMode = $param["SwitchMode"];
        }

        if (array_key_exists("FwVpcCidr",$param) and $param["FwVpcCidr"] !== null) {
            $this->FwVpcCidr = $param["FwVpcCidr"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("FwCidrInfo",$param) and $param["FwCidrInfo"] !== null) {
            $this->FwCidrInfo = new FwCidrInfo();
            $this->FwCidrInfo->deserialize($param["FwCidrInfo"]);
        }

        if (array_key_exists("CrossUserMode",$param) and $param["CrossUserMode"] !== null) {
            $this->CrossUserMode = $param["CrossUserMode"];
        }
    }
}
