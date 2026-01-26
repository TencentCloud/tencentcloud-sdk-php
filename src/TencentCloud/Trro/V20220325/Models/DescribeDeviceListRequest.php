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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceList请求参数结构体
 *
 * @method string getProjectId() 获取<p>设备所属项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>设备所属项目ID</p>
 * @method string getDeviceType() 获取<p>设备类型筛选，不填默认为全部设备类型</p>
 * @method void setDeviceType(string $DeviceType) 设置<p>设备类型筛选，不填默认为全部设备类型</p>
 * @method string getSearchWords() 获取<p>对设备ID或Name按关键字进行模糊匹配，不填则不进行模糊匹配</p>
 * @method void setSearchWords(string $SearchWords) 设置<p>对设备ID或Name按关键字进行模糊匹配，不填则不进行模糊匹配</p>
 * @method integer getPageSize() 获取<p>每页返回的最大设备数，不填默认为10</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页返回的最大设备数，不填默认为10</p>
 * @method integer getPageNumber() 获取<p>当前页码，不填默认为1（首页）</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>当前页码，不填默认为1（首页）</p>
 * @method string getDeviceStatus() 获取<p>设备状态筛选，不填默认为不过滤。取值：[&quot;ready&quot;,&quot;connected&quot;,&quot;online&quot;]，online代表ready或connected</p>
 * @method void setDeviceStatus(string $DeviceStatus) 设置<p>设备状态筛选，不填默认为不过滤。取值：[&quot;ready&quot;,&quot;connected&quot;,&quot;online&quot;]，online代表ready或connected</p>
 * @method integer getRegisterType() 获取<p>标识查询项目下的设备注册类型，默认不包含免注册登录设备。 若存在免注册登录设备，该参数传&quot;1&quot;</p><p>枚举值：</p><ul><li>0： 项目不包含免注册登录设备</li><li>1： 项目包含免注册登录设备</li></ul><p>默认值：0</p>
 * @method void setRegisterType(integer $RegisterType) 设置<p>标识查询项目下的设备注册类型，默认不包含免注册登录设备。 若存在免注册登录设备，该参数传&quot;1&quot;</p><p>枚举值：</p><ul><li>0： 项目不包含免注册登录设备</li><li>1： 项目包含免注册登录设备</li></ul><p>默认值：0</p>
 */
class DescribeDeviceListRequest extends AbstractModel
{
    /**
     * @var string <p>设备所属项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>设备类型筛选，不填默认为全部设备类型</p>
     */
    public $DeviceType;

    /**
     * @var string <p>对设备ID或Name按关键字进行模糊匹配，不填则不进行模糊匹配</p>
     */
    public $SearchWords;

    /**
     * @var integer <p>每页返回的最大设备数，不填默认为10</p>
     */
    public $PageSize;

    /**
     * @var integer <p>当前页码，不填默认为1（首页）</p>
     */
    public $PageNumber;

    /**
     * @var string <p>设备状态筛选，不填默认为不过滤。取值：[&quot;ready&quot;,&quot;connected&quot;,&quot;online&quot;]，online代表ready或connected</p>
     */
    public $DeviceStatus;

    /**
     * @var integer <p>标识查询项目下的设备注册类型，默认不包含免注册登录设备。 若存在免注册登录设备，该参数传&quot;1&quot;</p><p>枚举值：</p><ul><li>0： 项目不包含免注册登录设备</li><li>1： 项目包含免注册登录设备</li></ul><p>默认值：0</p>
     */
    public $RegisterType;

    /**
     * @param string $ProjectId <p>设备所属项目ID</p>
     * @param string $DeviceType <p>设备类型筛选，不填默认为全部设备类型</p>
     * @param string $SearchWords <p>对设备ID或Name按关键字进行模糊匹配，不填则不进行模糊匹配</p>
     * @param integer $PageSize <p>每页返回的最大设备数，不填默认为10</p>
     * @param integer $PageNumber <p>当前页码，不填默认为1（首页）</p>
     * @param string $DeviceStatus <p>设备状态筛选，不填默认为不过滤。取值：[&quot;ready&quot;,&quot;connected&quot;,&quot;online&quot;]，online代表ready或connected</p>
     * @param integer $RegisterType <p>标识查询项目下的设备注册类型，默认不包含免注册登录设备。 若存在免注册登录设备，该参数传&quot;1&quot;</p><p>枚举值：</p><ul><li>0： 项目不包含免注册登录设备</li><li>1： 项目包含免注册登录设备</li></ul><p>默认值：0</p>
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("SearchWords",$param) and $param["SearchWords"] !== null) {
            $this->SearchWords = $param["SearchWords"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("DeviceStatus",$param) and $param["DeviceStatus"] !== null) {
            $this->DeviceStatus = $param["DeviceStatus"];
        }

        if (array_key_exists("RegisterType",$param) and $param["RegisterType"] !== null) {
            $this->RegisterType = $param["RegisterType"];
        }
    }
}
