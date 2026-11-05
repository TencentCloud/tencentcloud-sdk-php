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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * serverless弹性配额
 *
 * @method string getInstanceType() 获取<p>实例类型</p><p>枚举值：</p><ul><li>rw： 读写</li><li>ro： 只读</li></ul>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型</p><p>枚举值：</p><ul><li>rw： 读写</li><li>ro： 只读</li></ul>
 * @method float getMaxCcu() 获取<p>最大CCU</p>
 * @method void setMaxCcu(float $MaxCcu) 设置<p>最大CCU</p>
 * @method boolean getEnabled() 获取<p>开关</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>开关</p>
 */
class ServerlessQuotaConfig extends AbstractModel
{
    /**
     * @var string <p>实例类型</p><p>枚举值：</p><ul><li>rw： 读写</li><li>ro： 只读</li></ul>
     */
    public $InstanceType;

    /**
     * @var float <p>最大CCU</p>
     */
    public $MaxCcu;

    /**
     * @var boolean <p>开关</p>
     */
    public $Enabled;

    /**
     * @param string $InstanceType <p>实例类型</p><p>枚举值：</p><ul><li>rw： 读写</li><li>ro： 只读</li></ul>
     * @param float $MaxCcu <p>最大CCU</p>
     * @param boolean $Enabled <p>开关</p>
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("MaxCcu",$param) and $param["MaxCcu"] !== null) {
            $this->MaxCcu = $param["MaxCcu"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
