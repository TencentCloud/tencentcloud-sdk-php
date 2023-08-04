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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListDevices请求参数结构体
 *
 * @method string getOrganizationId() 获取组织ID
 * @method void setOrganizationId(string $OrganizationId) 设置组织ID
 * @method boolean getIsContainSubLevel() 获取是否获取当前层级及子层级的设备列表，默认false
 * @method void setIsContainSubLevel(boolean $IsContainSubLevel) 设置是否获取当前层级及子层级的设备列表，默认false
 * @method integer getAccessProtocol() 获取设备接入协议。1:RTMP，2:GB，3:GW
 * @method void setAccessProtocol(integer $AccessProtocol) 设置设备接入协议。1:RTMP，2:GB，3:GW
 * @method integer getType() 获取设备类型。1:IPC，2:NVR
 * @method void setType(integer $Type) 设置设备类型。1:IPC，2:NVR
 * @method integer getStatus() 获取设备状态。0:未注册，1:在线，2:离线，3:禁用	
 * @method void setStatus(integer $Status) 设置设备状态。0:未注册，1:在线，2:离线，3:禁用	
 * @method string getClusterId() 获取服务节点ID
 * @method void setClusterId(string $ClusterId) 设置服务节点ID
 * @method string getKeyword() 获取模糊搜索设备关键字
 * @method void setKeyword(string $Keyword) 设置模糊搜索设备关键字
 * @method integer getCurrentUin() 获取当前用户Uin
 * @method void setCurrentUin(integer $CurrentUin) 设置当前用户Uin
 * @method integer getPageNumber() 获取页码，默认为1。
 * @method void setPageNumber(integer $PageNumber) 设置页码，默认为1。
 * @method integer getPageSize() 获取每页数量，默认为20。
 * @method void setPageSize(integer $PageSize) 设置每页数量，默认为20。
 */
class ListDevicesRequest extends AbstractModel
{
    /**
     * @var string 组织ID
     */
    public $OrganizationId;

    /**
     * @var boolean 是否获取当前层级及子层级的设备列表，默认false
     */
    public $IsContainSubLevel;

    /**
     * @var integer 设备接入协议。1:RTMP，2:GB，3:GW
     */
    public $AccessProtocol;

    /**
     * @var integer 设备类型。1:IPC，2:NVR
     */
    public $Type;

    /**
     * @var integer 设备状态。0:未注册，1:在线，2:离线，3:禁用	
     */
    public $Status;

    /**
     * @var string 服务节点ID
     */
    public $ClusterId;

    /**
     * @var string 模糊搜索设备关键字
     */
    public $Keyword;

    /**
     * @var integer 当前用户Uin
     */
    public $CurrentUin;

    /**
     * @var integer 页码，默认为1。
     */
    public $PageNumber;

    /**
     * @var integer 每页数量，默认为20。
     */
    public $PageSize;

    /**
     * @param string $OrganizationId 组织ID
     * @param boolean $IsContainSubLevel 是否获取当前层级及子层级的设备列表，默认false
     * @param integer $AccessProtocol 设备接入协议。1:RTMP，2:GB，3:GW
     * @param integer $Type 设备类型。1:IPC，2:NVR
     * @param integer $Status 设备状态。0:未注册，1:在线，2:离线，3:禁用	
     * @param string $ClusterId 服务节点ID
     * @param string $Keyword 模糊搜索设备关键字
     * @param integer $CurrentUin 当前用户Uin
     * @param integer $PageNumber 页码，默认为1。
     * @param integer $PageSize 每页数量，默认为20。
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
        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("IsContainSubLevel",$param) and $param["IsContainSubLevel"] !== null) {
            $this->IsContainSubLevel = $param["IsContainSubLevel"];
        }

        if (array_key_exists("AccessProtocol",$param) and $param["AccessProtocol"] !== null) {
            $this->AccessProtocol = $param["AccessProtocol"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("CurrentUin",$param) and $param["CurrentUin"] !== null) {
            $this->CurrentUin = $param["CurrentUin"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
