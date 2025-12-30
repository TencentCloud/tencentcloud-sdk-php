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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同摘要
 *
 * @method string getName() 获取提取内容分类：
Base 合同信息
Identity 主体信息
Performance 履约条款
 * @method void setName(string $Name) 设置提取内容分类：
Base 合同信息
Identity 主体信息
Performance 履约条款
 * @method array getInfos() 获取详细信息
 * @method void setInfos(array $Infos) 设置详细信息
 */
class ContractSummary extends AbstractModel
{
    /**
     * @var string 提取内容分类：
Base 合同信息
Identity 主体信息
Performance 履约条款
     */
    public $Name;

    /**
     * @var array 详细信息
     */
    public $Infos;

    /**
     * @param string $Name 提取内容分类：
Base 合同信息
Identity 主体信息
Performance 履约条款
     * @param array $Infos 详细信息
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

        if (array_key_exists("Infos",$param) and $param["Infos"] !== null) {
            $this->Infos = [];
            foreach ($param["Infos"] as $key => $value){
                $obj = new ContractSummaryInfo();
                $obj->deserialize($value);
                array_push($this->Infos, $obj);
            }
        }
    }
}
