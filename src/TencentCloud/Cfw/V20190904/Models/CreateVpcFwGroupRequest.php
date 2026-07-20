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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVpcFwGroup请求参数结构体
 *
 * @method string getName() 获取<p>VPC防火墙(组)名称</p>
 * @method void setName(string $Name) 设置<p>VPC防火墙(组)名称</p>
 * @method integer getMode() 获取<p>模式 1：CCN云联网模式；0：私有网络模式 2: sase 模式 3：ccn 高级模式 4: 私有网络(跨租户单边模式)</p>
 * @method void setMode(integer $Mode) 设置<p>模式 1：CCN云联网模式；0：私有网络模式 2: sase 模式 3：ccn 高级模式 4: 私有网络(跨租户单边模式)</p>
 * @method array getVpcFwInstances() 获取<p>防火墙(组)下的防火墙实例列表</p>
 * @method void setVpcFwInstances(array $VpcFwInstances) 设置<p>防火墙(组)下的防火墙实例列表</p>
 * @method integer getSwitchMode() 获取<p>防火墙实例的开关模式<br>1: 单点互通<br>2: 多点互通<br>3: 全互通<br>4: 自定义路由</p>
 * @method void setSwitchMode(integer $SwitchMode) 设置<p>防火墙实例的开关模式<br>1: 单点互通<br>2: 多点互通<br>3: 全互通<br>4: 自定义路由</p>
 * @method string getFwVpcCidr() 获取<p>auto 自动选择防火墙网段<br>10.10.10.0/24 用户输入的防火墙网段</p>
 * @method void setFwVpcCidr(string $FwVpcCidr) 设置<p>auto 自动选择防火墙网段<br>10.10.10.0/24 用户输入的防火墙网段</p>
 * @method string getCcnId() 获取<p>云联网id ，适用于云联网模式</p>
 * @method void setCcnId(string $CcnId) 设置<p>云联网id ，适用于云联网模式</p>
 * @method FwCidrInfo getFwCidrInfo() 获取<p>指定防火墙使用网段信息</p>
 * @method void setFwCidrInfo(FwCidrInfo $FwCidrInfo) 设置<p>指定防火墙使用网段信息</p>
 * @method string getCrossUserMode() 获取<p>跨租户管理员模式  1管理员 2多账号</p>
 * @method void setCrossUserMode(string $CrossUserMode) 设置<p>跨租户管理员模式  1管理员 2多账号</p>
 */
class CreateVpcFwGroupRequest extends AbstractModel
{
    /**
     * @var string <p>VPC防火墙(组)名称</p>
     */
    public $Name;

    /**
     * @var integer <p>模式 1：CCN云联网模式；0：私有网络模式 2: sase 模式 3：ccn 高级模式 4: 私有网络(跨租户单边模式)</p>
     */
    public $Mode;

    /**
     * @var array <p>防火墙(组)下的防火墙实例列表</p>
     */
    public $VpcFwInstances;

    /**
     * @var integer <p>防火墙实例的开关模式<br>1: 单点互通<br>2: 多点互通<br>3: 全互通<br>4: 自定义路由</p>
     */
    public $SwitchMode;

    /**
     * @var string <p>auto 自动选择防火墙网段<br>10.10.10.0/24 用户输入的防火墙网段</p>
     */
    public $FwVpcCidr;

    /**
     * @var string <p>云联网id ，适用于云联网模式</p>
     */
    public $CcnId;

    /**
     * @var FwCidrInfo <p>指定防火墙使用网段信息</p>
     */
    public $FwCidrInfo;

    /**
     * @var string <p>跨租户管理员模式  1管理员 2多账号</p>
     */
    public $CrossUserMode;

    /**
     * @param string $Name <p>VPC防火墙(组)名称</p>
     * @param integer $Mode <p>模式 1：CCN云联网模式；0：私有网络模式 2: sase 模式 3：ccn 高级模式 4: 私有网络(跨租户单边模式)</p>
     * @param array $VpcFwInstances <p>防火墙(组)下的防火墙实例列表</p>
     * @param integer $SwitchMode <p>防火墙实例的开关模式<br>1: 单点互通<br>2: 多点互通<br>3: 全互通<br>4: 自定义路由</p>
     * @param string $FwVpcCidr <p>auto 自动选择防火墙网段<br>10.10.10.0/24 用户输入的防火墙网段</p>
     * @param string $CcnId <p>云联网id ，适用于云联网模式</p>
     * @param FwCidrInfo $FwCidrInfo <p>指定防火墙使用网段信息</p>
     * @param string $CrossUserMode <p>跨租户管理员模式  1管理员 2多账号</p>
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
