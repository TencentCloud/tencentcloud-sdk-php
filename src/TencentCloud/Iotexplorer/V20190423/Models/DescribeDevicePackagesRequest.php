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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDevicePackages请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method integer getLimit() 获取分页拉取数量
 * @method void setLimit(integer $Limit) 设置分页拉取数量
 * @method integer getOffset() 获取分页拉取偏移
 * @method void setOffset(integer $Offset) 设置分页拉取偏移
 * @method string getCSUserId() 获取用户id
 * @method void setCSUserId(string $CSUserId) 设置用户id
 * @method integer getChannelId() 获取通道id
 * @method void setChannelId(integer $ChannelId) 设置通道id
 */
class DescribeDevicePackagesRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var integer 分页拉取数量
     */
    public $Limit;

    /**
     * @var integer 分页拉取偏移
     */
    public $Offset;

    /**
     * @var string 用户id
     */
    public $CSUserId;

    /**
     * @var integer 通道id
     */
    public $ChannelId;

    /**
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param integer $Limit 分页拉取数量
     * @param integer $Offset 分页拉取偏移
     * @param string $CSUserId 用户id
     * @param integer $ChannelId 通道id
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("CSUserId",$param) and $param["CSUserId"] !== null) {
            $this->CSUserId = $param["CSUserId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }
    }
}
