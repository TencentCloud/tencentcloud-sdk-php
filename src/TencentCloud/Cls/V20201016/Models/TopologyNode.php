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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拓扑节点
 *
 * @method string getEntityId() 获取<p>实体 ID</p>
 * @method void setEntityId(string $EntityId) 设置<p>实体 ID</p>
 * @method string getName() 获取<p>实体名称</p>
 * @method void setName(string $Name) 设置<p>实体名称</p>
 * @method string getDomain() 获取<p>实体所属域</p>
 * @method void setDomain(string $Domain) 设置<p>实体所属域</p>
 * @method string getProduct() 获取<p>实体所在产品</p>
 * @method void setProduct(string $Product) 设置<p>实体所在产品</p>
 * @method string getEntityClassName() 获取<p>实体类型</p>
 * @method void setEntityClassName(string $EntityClassName) 设置<p>实体类型</p>
 * @method integer getDepth() 获取<p>距离中心节点深度</p>
 * @method void setDepth(integer $Depth) 设置<p>距离中心节点深度</p>
 */
class TopologyNode extends AbstractModel
{
    /**
     * @var string <p>实体 ID</p>
     */
    public $EntityId;

    /**
     * @var string <p>实体名称</p>
     */
    public $Name;

    /**
     * @var string <p>实体所属域</p>
     */
    public $Domain;

    /**
     * @var string <p>实体所在产品</p>
     */
    public $Product;

    /**
     * @var string <p>实体类型</p>
     */
    public $EntityClassName;

    /**
     * @var integer <p>距离中心节点深度</p>
     */
    public $Depth;

    /**
     * @param string $EntityId <p>实体 ID</p>
     * @param string $Name <p>实体名称</p>
     * @param string $Domain <p>实体所属域</p>
     * @param string $Product <p>实体所在产品</p>
     * @param string $EntityClassName <p>实体类型</p>
     * @param integer $Depth <p>距离中心节点深度</p>
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
        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("EntityClassName",$param) and $param["EntityClassName"] !== null) {
            $this->EntityClassName = $param["EntityClassName"];
        }

        if (array_key_exists("Depth",$param) and $param["Depth"] !== null) {
            $this->Depth = $param["Depth"];
        }
    }
}
