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
 * 资产树-云厂商节点
 *
 * @method string getProvider() 获取<p>云厂商</p>
 * @method void setProvider(string $Provider) 设置<p>云厂商</p>
 * @method string getProviderName() 获取<p>云厂商名称</p>
 * @method void setProviderName(string $ProviderName) 设置<p>云厂商名称</p>
 * @method array getCategories() 获取<p>下属资产分类节点</p>
 * @method void setCategories(array $Categories) 设置<p>下属资产分类节点</p>
 */
class ProviderNode extends AbstractModel
{
    /**
     * @var string <p>云厂商</p>
     */
    public $Provider;

    /**
     * @var string <p>云厂商名称</p>
     */
    public $ProviderName;

    /**
     * @var array <p>下属资产分类节点</p>
     */
    public $Categories;

    /**
     * @param string $Provider <p>云厂商</p>
     * @param string $ProviderName <p>云厂商名称</p>
     * @param array $Categories <p>下属资产分类节点</p>
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
        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("ProviderName",$param) and $param["ProviderName"] !== null) {
            $this->ProviderName = $param["ProviderName"];
        }

        if (array_key_exists("Categories",$param) and $param["Categories"] !== null) {
            $this->Categories = [];
            foreach ($param["Categories"] as $key => $value){
                $obj = new CategoryNode();
                $obj->deserialize($value);
                array_push($this->Categories, $obj);
            }
        }
    }
}
