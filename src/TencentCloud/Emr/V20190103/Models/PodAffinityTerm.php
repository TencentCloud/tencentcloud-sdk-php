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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pod亲和性项
 *
 * @method LabelSelector getLabelSelector() 获取<p>标签选择器</p>
 * @method void setLabelSelector(LabelSelector $LabelSelector) 设置<p>标签选择器</p>
 * @method array getNamespaces() 获取<p>命名空间列表</p>
 * @method void setNamespaces(array $Namespaces) 设置<p>命名空间列表</p>
 * @method string getTopologyKey() 获取<p>拓扑域键</p>
 * @method void setTopologyKey(string $TopologyKey) 设置<p>拓扑域键</p>
 * @method LabelSelector getNamespaceSelector() 获取<p>命名空间选择器</p>
 * @method void setNamespaceSelector(LabelSelector $NamespaceSelector) 设置<p>命名空间选择器</p>
 */
class PodAffinityTerm extends AbstractModel
{
    /**
     * @var LabelSelector <p>标签选择器</p>
     */
    public $LabelSelector;

    /**
     * @var array <p>命名空间列表</p>
     */
    public $Namespaces;

    /**
     * @var string <p>拓扑域键</p>
     */
    public $TopologyKey;

    /**
     * @var LabelSelector <p>命名空间选择器</p>
     */
    public $NamespaceSelector;

    /**
     * @param LabelSelector $LabelSelector <p>标签选择器</p>
     * @param array $Namespaces <p>命名空间列表</p>
     * @param string $TopologyKey <p>拓扑域键</p>
     * @param LabelSelector $NamespaceSelector <p>命名空间选择器</p>
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
        if (array_key_exists("LabelSelector",$param) and $param["LabelSelector"] !== null) {
            $this->LabelSelector = new LabelSelector();
            $this->LabelSelector->deserialize($param["LabelSelector"]);
        }

        if (array_key_exists("Namespaces",$param) and $param["Namespaces"] !== null) {
            $this->Namespaces = $param["Namespaces"];
        }

        if (array_key_exists("TopologyKey",$param) and $param["TopologyKey"] !== null) {
            $this->TopologyKey = $param["TopologyKey"];
        }

        if (array_key_exists("NamespaceSelector",$param) and $param["NamespaceSelector"] !== null) {
            $this->NamespaceSelector = new LabelSelector();
            $this->NamespaceSelector->deserialize($param["NamespaceSelector"]);
        }
    }
}
