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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCommonServiceWorkOrder请求参数结构体
 *
 * @method array getDevicePositionSet() 获取设备及位置信息列表
 * @method void setDevicePositionSet(array $DevicePositionSet) 设置设备及位置信息列表
 * @method integer getServiceLevel() 获取服务级别，只支持传入 1、2、3，分别对应 L1、L2、L3
 * @method void setServiceLevel(integer $ServiceLevel) 设置服务级别，只支持传入 1、2、3，分别对应 L1、L2、L3
 * @method boolean getPreAuthorization() 获取操作预授权
 * @method void setPreAuthorization(boolean $PreAuthorization) 设置操作预授权
 * @method string getContactName() 获取业务联系人
 * @method void setContactName(string $ContactName) 设置业务联系人
 * @method string getContactPhone() 获取联系人电话
 * @method void setContactPhone(string $ContactPhone) 设置联系人电话
 * @method string getDeviceType() 获取设备类型 server 服务器，netDevice 网络设备	
 * @method void setDeviceType(string $DeviceType) 设置设备类型 server 服务器，netDevice 网络设备	
 * @method string getInstructions() 获取操作说明
 * @method void setInstructions(string $Instructions) 设置操作说明
 */
class CreateCommonServiceWorkOrderRequest extends AbstractModel
{
    /**
     * @var array 设备及位置信息列表
     */
    public $DevicePositionSet;

    /**
     * @var integer 服务级别，只支持传入 1、2、3，分别对应 L1、L2、L3
     */
    public $ServiceLevel;

    /**
     * @var boolean 操作预授权
     */
    public $PreAuthorization;

    /**
     * @var string 业务联系人
     */
    public $ContactName;

    /**
     * @var string 联系人电话
     */
    public $ContactPhone;

    /**
     * @var string 设备类型 server 服务器，netDevice 网络设备	
     */
    public $DeviceType;

    /**
     * @var string 操作说明
     */
    public $Instructions;

    /**
     * @param array $DevicePositionSet 设备及位置信息列表
     * @param integer $ServiceLevel 服务级别，只支持传入 1、2、3，分别对应 L1、L2、L3
     * @param boolean $PreAuthorization 操作预授权
     * @param string $ContactName 业务联系人
     * @param string $ContactPhone 联系人电话
     * @param string $DeviceType 设备类型 server 服务器，netDevice 网络设备	
     * @param string $Instructions 操作说明
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
        if (array_key_exists("DevicePositionSet",$param) and $param["DevicePositionSet"] !== null) {
            $this->DevicePositionSet = [];
            foreach ($param["DevicePositionSet"] as $key => $value){
                $obj = new DevicePosition();
                $obj->deserialize($value);
                array_push($this->DevicePositionSet, $obj);
            }
        }

        if (array_key_exists("ServiceLevel",$param) and $param["ServiceLevel"] !== null) {
            $this->ServiceLevel = $param["ServiceLevel"];
        }

        if (array_key_exists("PreAuthorization",$param) and $param["PreAuthorization"] !== null) {
            $this->PreAuthorization = $param["PreAuthorization"];
        }

        if (array_key_exists("ContactName",$param) and $param["ContactName"] !== null) {
            $this->ContactName = $param["ContactName"];
        }

        if (array_key_exists("ContactPhone",$param) and $param["ContactPhone"] !== null) {
            $this->ContactPhone = $param["ContactPhone"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Instructions",$param) and $param["Instructions"] !== null) {
            $this->Instructions = $param["Instructions"];
        }
    }
}
