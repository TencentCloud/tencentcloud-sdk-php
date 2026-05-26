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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子网资源分配
 *
 * @method string getSubnetId() 获取<p>子网 ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网 ID</p>
 * @method integer getRatio() 获取<p>分配比例（百分比），所有 Ratio 之和必须等于 100</p>
 * @method void setRatio(integer $Ratio) 设置<p>分配比例（百分比），所有 Ratio 之和必须等于 100</p>
 */
class SubnetAllocation extends AbstractModel
{
    /**
     * @var string <p>子网 ID</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>分配比例（百分比），所有 Ratio 之和必须等于 100</p>
     */
    public $Ratio;

    /**
     * @param string $SubnetId <p>子网 ID</p>
     * @param integer $Ratio <p>分配比例（百分比），所有 Ratio 之和必须等于 100</p>
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }
    }
}
