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
 * 维护时间排除项
 *
 * @method string getName() 获取维护排除项名称
 * @method void setName(string $Name) 设置维护排除项名称
 * @method string getStartAt() 获取维护排除项开始时间
 * @method void setStartAt(string $StartAt) 设置维护排除项开始时间
 * @method string getEndAt() 获取维护排除项结束时间
 * @method void setEndAt(string $EndAt) 设置维护排除项结束时间
 * @method integer getID() 获取维护排除项ID
 * @method void setID(integer $ID) 设置维护排除项ID
 */
class MaintenanceExclusion extends AbstractModel
{
    /**
     * @var string 维护排除项名称
     */
    public $Name;

    /**
     * @var string 维护排除项开始时间
     */
    public $StartAt;

    /**
     * @var string 维护排除项结束时间
     */
    public $EndAt;

    /**
     * @var integer 维护排除项ID
     */
    public $ID;

    /**
     * @param string $Name 维护排除项名称
     * @param string $StartAt 维护排除项开始时间
     * @param string $EndAt 维护排除项结束时间
     * @param integer $ID 维护排除项ID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StartAt",$param) and $param["StartAt"] !== null) {
            $this->StartAt = $param["StartAt"];
        }

        if (array_key_exists("EndAt",$param) and $param["EndAt"] !== null) {
            $this->EndAt = $param["EndAt"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
