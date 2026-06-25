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
 * 套餐信息
 *
 * @method string getPackageId() 获取<p>套餐标识</p>
 * @method void setPackageId(string $PackageId) 设置<p>套餐标识</p>
 * @method string getPackageTitle() 获取<p>套餐中文名称</p>
 * @method void setPackageTitle(string $PackageTitle) 设置<p>套餐中文名称</p>
 * @method string getPackageDescription() 获取<p>套餐描述</p>
 * @method void setPackageDescription(string $PackageDescription) 设置<p>套餐描述</p>
 * @method string getUnitPrice() 获取<p>单位原价</p>
 * @method void setUnitPrice(string $UnitPrice) 设置<p>单位原价</p>
 * @method string getPackageType() 获取<p>套餐类型</p>
 * @method void setPackageType(string $PackageType) 设置<p>套餐类型</p>
 * @method string getResourceLimit() 获取<p>json格式化用户资源限制</p>
 * @method void setResourceLimit(string $ResourceLimit) 设置<p>json格式化用户资源限制</p>
 */
class PlanInfo extends AbstractModel
{
    /**
     * @var string <p>套餐标识</p>
     */
    public $PackageId;

    /**
     * @var string <p>套餐中文名称</p>
     */
    public $PackageTitle;

    /**
     * @var string <p>套餐描述</p>
     */
    public $PackageDescription;

    /**
     * @var string <p>单位原价</p>
     */
    public $UnitPrice;

    /**
     * @var string <p>套餐类型</p>
     */
    public $PackageType;

    /**
     * @var string <p>json格式化用户资源限制</p>
     */
    public $ResourceLimit;

    /**
     * @param string $PackageId <p>套餐标识</p>
     * @param string $PackageTitle <p>套餐中文名称</p>
     * @param string $PackageDescription <p>套餐描述</p>
     * @param string $UnitPrice <p>单位原价</p>
     * @param string $PackageType <p>套餐类型</p>
     * @param string $ResourceLimit <p>json格式化用户资源限制</p>
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
        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("PackageTitle",$param) and $param["PackageTitle"] !== null) {
            $this->PackageTitle = $param["PackageTitle"];
        }

        if (array_key_exists("PackageDescription",$param) and $param["PackageDescription"] !== null) {
            $this->PackageDescription = $param["PackageDescription"];
        }

        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("ResourceLimit",$param) and $param["ResourceLimit"] !== null) {
            $this->ResourceLimit = $param["ResourceLimit"];
        }
    }
}
