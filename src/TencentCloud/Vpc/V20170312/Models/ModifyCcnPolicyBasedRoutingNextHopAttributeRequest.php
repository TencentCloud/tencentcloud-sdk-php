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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCcnPolicyBasedRoutingNextHopAttribute请求参数结构体
 *
 * @method string getCcnId() 获取云联网ID
 * @method void setCcnId(string $CcnId) 设置云联网ID
 * @method string getPolicyBasedRoutingNextHopId() 获取策略路由下一跳ID
 * @method void setPolicyBasedRoutingNextHopId(string $PolicyBasedRoutingNextHopId) 设置策略路由下一跳ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getNextHopRegion() 获取下一跳地域
 * @method void setNextHopRegion(string $NextHopRegion) 设置下一跳地域
 * @method string getInstanceType() 获取实例类型[VPC,DIRECTCONNECT,VPNGW]
 * @method void setInstanceType(string $InstanceType) 设置实例类型[VPC,DIRECTCONNECT,VPNGW]
 * @method string getInstanceId() 获取关联实例ID	
 * @method void setInstanceId(string $InstanceId) 设置关联实例ID	
 * @method string getNextHopResourceType() 获取下一跳资源类型[HAVIP,GWLB_ENDPOINT]
 * @method void setNextHopResourceType(string $NextHopResourceType) 设置下一跳资源类型[HAVIP,GWLB_ENDPOINT]
 * @method string getNextHopResourceId() 获取下一跳资源ID
 * @method void setNextHopResourceId(string $NextHopResourceId) 设置下一跳资源ID
 * @method string getState() 获取状态
 * @method void setState(string $State) 设置状态
 */
class ModifyCcnPolicyBasedRoutingNextHopAttributeRequest extends AbstractModel
{
    /**
     * @var string 云联网ID
     */
    public $CcnId;

    /**
     * @var string 策略路由下一跳ID
     */
    public $PolicyBasedRoutingNextHopId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 下一跳地域
     */
    public $NextHopRegion;

    /**
     * @var string 实例类型[VPC,DIRECTCONNECT,VPNGW]
     */
    public $InstanceType;

    /**
     * @var string 关联实例ID	
     */
    public $InstanceId;

    /**
     * @var string 下一跳资源类型[HAVIP,GWLB_ENDPOINT]
     */
    public $NextHopResourceType;

    /**
     * @var string 下一跳资源ID
     */
    public $NextHopResourceId;

    /**
     * @var string 状态
     */
    public $State;

    /**
     * @param string $CcnId 云联网ID
     * @param string $PolicyBasedRoutingNextHopId 策略路由下一跳ID
     * @param string $Name 名称
     * @param string $Description 描述
     * @param string $NextHopRegion 下一跳地域
     * @param string $InstanceType 实例类型[VPC,DIRECTCONNECT,VPNGW]
     * @param string $InstanceId 关联实例ID	
     * @param string $NextHopResourceType 下一跳资源类型[HAVIP,GWLB_ENDPOINT]
     * @param string $NextHopResourceId 下一跳资源ID
     * @param string $State 状态
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("PolicyBasedRoutingNextHopId",$param) and $param["PolicyBasedRoutingNextHopId"] !== null) {
            $this->PolicyBasedRoutingNextHopId = $param["PolicyBasedRoutingNextHopId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NextHopRegion",$param) and $param["NextHopRegion"] !== null) {
            $this->NextHopRegion = $param["NextHopRegion"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NextHopResourceType",$param) and $param["NextHopResourceType"] !== null) {
            $this->NextHopResourceType = $param["NextHopResourceType"];
        }

        if (array_key_exists("NextHopResourceId",$param) and $param["NextHopResourceId"] !== null) {
            $this->NextHopResourceId = $param["NextHopResourceId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
