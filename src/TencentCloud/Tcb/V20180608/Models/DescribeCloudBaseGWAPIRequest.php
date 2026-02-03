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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudBaseGWAPI请求参数结构体
 *
 * @method string getServiceId() 获取服务ID
 * @method void setServiceId(string $ServiceId) 设置服务ID
 * @method string getDomain() 获取API域名
 * @method void setDomain(string $Domain) 设置API域名
 * @method string getPath() 获取API Path
 * @method void setPath(string $Path) 设置API Path
 * @method string getAPIId() 获取API ID
 * @method void setAPIId(string $APIId) 设置API ID
 * @method integer getType() 获取API类型，1为云函数，2为容器
 * @method void setType(integer $Type) 设置API类型，1为云函数，2为容器
 * @method string getName() 获取API名，Type为1时为云函数名，Type为2时为容器服务名
 * @method void setName(string $Name) 设置API名，Type为1时为云函数名，Type为2时为容器服务名
 * @method integer getOffset() 获取查询的分页参数，用于设置查询的偏移位置，0表示从头开始
 * @method void setOffset(integer $Offset) 设置查询的分页参数，用于设置查询的偏移位置，0表示从头开始
 * @method integer getLimit() 获取查询的分页参数，用于表示每次查询的最大返回数据量
 * @method void setLimit(integer $Limit) 设置查询的分页参数，用于表示每次查询的最大返回数据量
 * @method boolean getEnableRegion() 获取是否启用多地域
 * @method void setEnableRegion(boolean $EnableRegion) 设置是否启用多地域
 * @method boolean getEnableUnion() 获取是否使用统一域名
 * @method void setEnableUnion(boolean $EnableUnion) 设置是否使用统一域名
 */
class DescribeCloudBaseGWAPIRequest extends AbstractModel
{
    /**
     * @var string 服务ID
     */
    public $ServiceId;

    /**
     * @var string API域名
     */
    public $Domain;

    /**
     * @var string API Path
     */
    public $Path;

    /**
     * @var string API ID
     */
    public $APIId;

    /**
     * @var integer API类型，1为云函数，2为容器
     */
    public $Type;

    /**
     * @var string API名，Type为1时为云函数名，Type为2时为容器服务名
     */
    public $Name;

    /**
     * @var integer 查询的分页参数，用于设置查询的偏移位置，0表示从头开始
     */
    public $Offset;

    /**
     * @var integer 查询的分页参数，用于表示每次查询的最大返回数据量
     */
    public $Limit;

    /**
     * @var boolean 是否启用多地域
     */
    public $EnableRegion;

    /**
     * @var boolean 是否使用统一域名
     */
    public $EnableUnion;

    /**
     * @param string $ServiceId 服务ID
     * @param string $Domain API域名
     * @param string $Path API Path
     * @param string $APIId API ID
     * @param integer $Type API类型，1为云函数，2为容器
     * @param string $Name API名，Type为1时为云函数名，Type为2时为容器服务名
     * @param integer $Offset 查询的分页参数，用于设置查询的偏移位置，0表示从头开始
     * @param integer $Limit 查询的分页参数，用于表示每次查询的最大返回数据量
     * @param boolean $EnableRegion 是否启用多地域
     * @param boolean $EnableUnion 是否使用统一域名
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("APIId",$param) and $param["APIId"] !== null) {
            $this->APIId = $param["APIId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("EnableRegion",$param) and $param["EnableRegion"] !== null) {
            $this->EnableRegion = $param["EnableRegion"];
        }

        if (array_key_exists("EnableUnion",$param) and $param["EnableUnion"] !== null) {
            $this->EnableUnion = $param["EnableUnion"];
        }
    }
}
