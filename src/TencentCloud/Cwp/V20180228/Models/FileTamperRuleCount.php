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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机关联核心文件规则数量信息
 *
 * @method string getUuid() 获取主机uuid
 * @method void setUuid(string $Uuid) 设置主机uuid
 * @method integer getCount() 获取关联规则的数量
 * @method void setCount(integer $Count) 设置关联规则的数量
 * @method string getName() 获取关联规则的名称（仅展示其中一条）
 * @method void setName(string $Name) 设置关联规则的名称（仅展示其中一条）
 */
class FileTamperRuleCount extends AbstractModel
{
    /**
     * @var string 主机uuid
     */
    public $Uuid;

    /**
     * @var integer 关联规则的数量
     */
    public $Count;

    /**
     * @var string 关联规则的名称（仅展示其中一条）
     */
    public $Name;

    /**
     * @param string $Uuid 主机uuid
     * @param integer $Count 关联规则的数量
     * @param string $Name 关联规则的名称（仅展示其中一条）
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
