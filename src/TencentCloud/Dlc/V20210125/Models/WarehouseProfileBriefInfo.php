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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Warehouse Profile 对外基础信息（对外 API 精简视图）.
 *
 * @method string getProfileCode() 获取<p>规格编码（常见 XS / S / M / L / XL，租户自定义编码亦合法）.</p>
 * @method void setProfileCode(string $ProfileCode) 设置<p>规格编码（常见 XS / S / M / L / XL，租户自定义编码亦合法）.</p>
 * @method string getProfileName() 获取<p>规格名称.</p>
 * @method void setProfileName(string $ProfileName) 设置<p>规格名称.</p>
 * @method string getDescription() 获取<p>规格描述.</p>
 * @method void setDescription(string $Description) 设置<p>规格描述.</p>
 * @method string getSpec() 获取<p>规格展示文案（后端渲染后的字符串，如 "4CU"；前端直接展示，不做二次拼装）.</p>
 * @method void setSpec(string $Spec) 设置<p>规格展示文案（后端渲染后的字符串，如 "4CU"；前端直接展示，不做二次拼装）.</p>
 * @method string getScenario() 获取<p>适用场景描述.</p>
 * @method void setScenario(string $Scenario) 设置<p>适用场景描述.</p>
 */
class WarehouseProfileBriefInfo extends AbstractModel
{
    /**
     * @var string <p>规格编码（常见 XS / S / M / L / XL，租户自定义编码亦合法）.</p>
     */
    public $ProfileCode;

    /**
     * @var string <p>规格名称.</p>
     */
    public $ProfileName;

    /**
     * @var string <p>规格描述.</p>
     */
    public $Description;

    /**
     * @var string <p>规格展示文案（后端渲染后的字符串，如 "4CU"；前端直接展示，不做二次拼装）.</p>
     */
    public $Spec;

    /**
     * @var string <p>适用场景描述.</p>
     */
    public $Scenario;

    /**
     * @param string $ProfileCode <p>规格编码（常见 XS / S / M / L / XL，租户自定义编码亦合法）.</p>
     * @param string $ProfileName <p>规格名称.</p>
     * @param string $Description <p>规格描述.</p>
     * @param string $Spec <p>规格展示文案（后端渲染后的字符串，如 "4CU"；前端直接展示，不做二次拼装）.</p>
     * @param string $Scenario <p>适用场景描述.</p>
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
        if (array_key_exists("ProfileCode",$param) and $param["ProfileCode"] !== null) {
            $this->ProfileCode = $param["ProfileCode"];
        }

        if (array_key_exists("ProfileName",$param) and $param["ProfileName"] !== null) {
            $this->ProfileName = $param["ProfileName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("Scenario",$param) and $param["Scenario"] !== null) {
            $this->Scenario = $param["Scenario"];
        }
    }
}
