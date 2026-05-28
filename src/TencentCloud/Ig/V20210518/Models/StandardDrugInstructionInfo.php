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
namespace TencentCloud\Ig\V20210518\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 药品说明书标准药品结果
 *
 * @method string getStandardDrugName() 获取标准药品名
 * @method void setStandardDrugName(string $StandardDrugName) 设置标准药品名
 * @method array getDrugInfos() 获取药品列表
 * @method void setDrugInfos(array $DrugInfos) 设置药品列表
 */
class StandardDrugInstructionInfo extends AbstractModel
{
    /**
     * @var string 标准药品名
     */
    public $StandardDrugName;

    /**
     * @var array 药品列表
     */
    public $DrugInfos;

    /**
     * @param string $StandardDrugName 标准药品名
     * @param array $DrugInfos 药品列表
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
        if (array_key_exists("StandardDrugName",$param) and $param["StandardDrugName"] !== null) {
            $this->StandardDrugName = $param["StandardDrugName"];
        }

        if (array_key_exists("DrugInfos",$param) and $param["DrugInfos"] !== null) {
            $this->DrugInfos = [];
            foreach ($param["DrugInfos"] as $key => $value){
                $obj = new DrugInstructionInfo();
                $obj->deserialize($value);
                array_push($this->DrugInfos, $obj);
            }
        }
    }
}
