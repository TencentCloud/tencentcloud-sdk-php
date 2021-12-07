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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表示是否启用合规标准。
 *
 * @method integer getStandardId() 获取合规标准的ID。
 * @method void setStandardId(integer $StandardId) 设置合规标准的ID。
 * @method boolean getEnable() 获取是否启用合规标准
 * @method void setEnable(boolean $Enable) 设置是否启用合规标准
 */
class ComplianceBenchmarkStandardEnable extends AbstractModel
{
    /**
     * @var integer 合规标准的ID。
     */
    public $StandardId;

    /**
     * @var boolean 是否启用合规标准
     */
    public $Enable;

    /**
     * @param integer $StandardId 合规标准的ID。
     * @param boolean $Enable 是否启用合规标准
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
        if (array_key_exists("StandardId",$param) and $param["StandardId"] !== null) {
            $this->StandardId = $param["StandardId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
