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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模板模型
 *
 * @method string getID() 获取模型ID
 * @method void setID(string $ID) 设置模型ID
 * @method string getName() 获取匹配名称
 * @method void setName(string $Name) 设置匹配名称
 * @method integer getRank() 获取权重
 * @method void setRank(integer $Rank) 设置权重
 */
class TargetModelDTO extends AbstractModel
{
    /**
     * @var string 模型ID
     */
    public $ID;

    /**
     * @var string 匹配名称
     */
    public $Name;

    /**
     * @var integer 权重
     */
    public $Rank;

    /**
     * @param string $ID 模型ID
     * @param string $Name 匹配名称
     * @param integer $Rank 权重
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

        if (array_key_exists("Rank",$param) and $param["Rank"] !== null) {
            $this->Rank = $param["Rank"];
        }
    }
}
