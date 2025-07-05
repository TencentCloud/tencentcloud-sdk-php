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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 亲和规则
 *
 * @method string getScope() 获取亲和性范围
 * @method void setScope(string $Scope) 设置亲和性范围
 * @method string getWeight() 获取亲和规则的权重
 * @method void setWeight(string $Weight) 设置亲和规则的权重
 * @method array getPaths() 获取-
 * @method void setPaths(array $Paths) 设置-
 */
class Affinity extends AbstractModel
{
    /**
     * @var string 亲和性范围
     */
    public $Scope;

    /**
     * @var string 亲和规则的权重
     */
    public $Weight;

    /**
     * @var array -
     */
    public $Paths;

    /**
     * @param string $Scope 亲和性范围
     * @param string $Weight 亲和规则的权重
     * @param array $Paths -
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
        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = [];
            foreach ($param["Paths"] as $key => $value){
                $obj = new CommonOption();
                $obj->deserialize($value);
                array_push($this->Paths, $obj);
            }
        }
    }
}
