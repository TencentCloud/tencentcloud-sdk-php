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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云资源配置检测合规标准概览
 *
 * @method integer getID() 获取<p>规范ID</p>
 * @method void setID(integer $ID) 设置<p>规范ID</p>
 * @method string getName() 获取<p>规范名称</p>
 * @method void setName(string $Name) 设置<p>规范名称</p>
 * @method integer getTotalCount() 获取<p>关联检查项数量</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>关联检查项数量</p>
 * @method integer getPassRate() 获取<p>检查项通过率</p>
 * @method void setPassRate(integer $PassRate) 设置<p>检查项通过率</p>
 */
class ComplianceStandardOverview extends AbstractModel
{
    /**
     * @var integer <p>规范ID</p>
     */
    public $ID;

    /**
     * @var string <p>规范名称</p>
     */
    public $Name;

    /**
     * @var integer <p>关联检查项数量</p>
     */
    public $TotalCount;

    /**
     * @var integer <p>检查项通过率</p>
     */
    public $PassRate;

    /**
     * @param integer $ID <p>规范ID</p>
     * @param string $Name <p>规范名称</p>
     * @param integer $TotalCount <p>关联检查项数量</p>
     * @param integer $PassRate <p>检查项通过率</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("PassRate",$param) and $param["PassRate"] !== null) {
            $this->PassRate = $param["PassRate"];
        }
    }
}
