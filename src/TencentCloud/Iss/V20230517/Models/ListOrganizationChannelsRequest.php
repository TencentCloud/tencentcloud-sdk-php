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
 * ListOrganizationChannels请求参数结构体
 *
 * @method string getOrganizationId() 获取组织ID
 * @method void setOrganizationId(string $OrganizationId) 设置组织ID
 * @method integer getPageSize() 获取每页最大数量
 * @method void setPageSize(integer $PageSize) 设置每页最大数量
 * @method integer getPageNumber() 获取第几页 
 * @method void setPageNumber(integer $PageNumber) 设置第几页 
 * @method string getDeviceName() 获取查询条件，则按照设备名称查询
查询条件同时只有一个生效。长度不超过32字节
 * @method void setDeviceName(string $DeviceName) 设置查询条件，则按照设备名称查询
查询条件同时只有一个生效。长度不超过32字节
 * @method string getChannelName() 获取查询条件，则按照通道名称查询
查询条件同时只有一个生效。长度不超过32字节
 * @method void setChannelName(string $ChannelName) 设置查询条件，则按照通道名称查询
查询条件同时只有一个生效。长度不超过32字节
 */
class ListOrganizationChannelsRequest extends AbstractModel
{
    /**
     * @var string 组织ID
     */
    public $OrganizationId;

    /**
     * @var integer 每页最大数量
     */
    public $PageSize;

    /**
     * @var integer 第几页 
     */
    public $PageNumber;

    /**
     * @var string 查询条件，则按照设备名称查询
查询条件同时只有一个生效。长度不超过32字节
     */
    public $DeviceName;

    /**
     * @var string 查询条件，则按照通道名称查询
查询条件同时只有一个生效。长度不超过32字节
     */
    public $ChannelName;

    /**
     * @param string $OrganizationId 组织ID
     * @param integer $PageSize 每页最大数量
     * @param integer $PageNumber 第几页 
     * @param string $DeviceName 查询条件，则按照设备名称查询
查询条件同时只有一个生效。长度不超过32字节
     * @param string $ChannelName 查询条件，则按照通道名称查询
查询条件同时只有一个生效。长度不超过32字节
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

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }
    }
}
