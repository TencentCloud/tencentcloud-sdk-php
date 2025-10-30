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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户配额信息。
 *
 * @method string getResourceName() 获取资源名称

取值为：

- COMMAND：命令
- REGISTER_CODE：托管实例注册码
 * @method void setResourceName(string $ResourceName) 设置资源名称

取值为：

- COMMAND：命令
- REGISTER_CODE：托管实例注册码
 * @method integer getResourceQuotaUsed() 获取已使用额度
 * @method void setResourceQuotaUsed(integer $ResourceQuotaUsed) 设置已使用额度
 * @method integer getResourceQuotaTotal() 获取总额度
 * @method void setResourceQuotaTotal(integer $ResourceQuotaTotal) 设置总额度
 */
class GeneralResourceQuotaSet extends AbstractModel
{
    /**
     * @var string 资源名称

取值为：

- COMMAND：命令
- REGISTER_CODE：托管实例注册码
     */
    public $ResourceName;

    /**
     * @var integer 已使用额度
     */
    public $ResourceQuotaUsed;

    /**
     * @var integer 总额度
     */
    public $ResourceQuotaTotal;

    /**
     * @param string $ResourceName 资源名称

取值为：

- COMMAND：命令
- REGISTER_CODE：托管实例注册码
     * @param integer $ResourceQuotaUsed 已使用额度
     * @param integer $ResourceQuotaTotal 总额度
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
        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceQuotaUsed",$param) and $param["ResourceQuotaUsed"] !== null) {
            $this->ResourceQuotaUsed = $param["ResourceQuotaUsed"];
        }

        if (array_key_exists("ResourceQuotaTotal",$param) and $param["ResourceQuotaTotal"] !== null) {
            $this->ResourceQuotaTotal = $param["ResourceQuotaTotal"];
        }
    }
}
