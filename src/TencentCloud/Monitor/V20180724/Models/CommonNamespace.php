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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 统一的命名空间信息
 *
 * @method string getId() 获取<p>命名空间标示</p>
 * @method void setId(string $Id) 设置<p>命名空间标示</p>
 * @method string getName() 获取<p>命名空间名称</p>
 * @method void setName(string $Name) 设置<p>命名空间名称</p>
 * @method string getValue() 获取<p>命名空间值</p>
 * @method void setValue(string $Value) 设置<p>命名空间值</p>
 * @method string getProductName() 获取<p>产品名称</p>
 * @method void setProductName(string $ProductName) 设置<p>产品名称</p>
 * @method string getConfig() 获取<p>配置信息</p>
 * @method void setConfig(string $Config) 设置<p>配置信息</p>
 * @method array getAvailableRegions() 获取<p>支持地域列表</p>
 * @method void setAvailableRegions(array $AvailableRegions) 设置<p>支持地域列表</p>
 * @method integer getSortId() 获取<p>排序Id</p>
 * @method void setSortId(integer $SortId) 设置<p>排序Id</p>
 * @method string getDashboardId() 获取<p>Dashboard中的唯一表示</p>
 * @method void setDashboardId(string $DashboardId) 设置<p>Dashboard中的唯一表示</p>
 */
class CommonNamespace extends AbstractModel
{
    /**
     * @var string <p>命名空间标示</p>
     */
    public $Id;

    /**
     * @var string <p>命名空间名称</p>
     */
    public $Name;

    /**
     * @var string <p>命名空间值</p>
     */
    public $Value;

    /**
     * @var string <p>产品名称</p>
     */
    public $ProductName;

    /**
     * @var string <p>配置信息</p>
     */
    public $Config;

    /**
     * @var array <p>支持地域列表</p>
     */
    public $AvailableRegions;

    /**
     * @var integer <p>排序Id</p>
     */
    public $SortId;

    /**
     * @var string <p>Dashboard中的唯一表示</p>
     */
    public $DashboardId;

    /**
     * @param string $Id <p>命名空间标示</p>
     * @param string $Name <p>命名空间名称</p>
     * @param string $Value <p>命名空间值</p>
     * @param string $ProductName <p>产品名称</p>
     * @param string $Config <p>配置信息</p>
     * @param array $AvailableRegions <p>支持地域列表</p>
     * @param integer $SortId <p>排序Id</p>
     * @param string $DashboardId <p>Dashboard中的唯一表示</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("AvailableRegions",$param) and $param["AvailableRegions"] !== null) {
            $this->AvailableRegions = $param["AvailableRegions"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("DashboardId",$param) and $param["DashboardId"] !== null) {
            $this->DashboardId = $param["DashboardId"];
        }
    }
}
