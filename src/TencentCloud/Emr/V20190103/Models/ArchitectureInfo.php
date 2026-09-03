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
 * 架构信息
 *
 * @method string getArchitecture() 获取<p>架构类型</p>
 * @method void setArchitecture(string $Architecture) 设置<p>架构类型</p>
 * @method string getArchitectureName() 获取<p>架构类型名称</p>
 * @method void setArchitectureName(string $ArchitectureName) 设置<p>架构类型名称</p>
 * @method integer getOrder() 获取<p>架构类型展示顺序</p>
 * @method void setOrder(integer $Order) 设置<p>架构类型展示顺序</p>
 * @method array getInstanceFamilies() 获取<p>架构包含的机型族</p>
 * @method void setInstanceFamilies(array $InstanceFamilies) 设置<p>架构包含的机型族</p>
 */
class ArchitectureInfo extends AbstractModel
{
    /**
     * @var string <p>架构类型</p>
     */
    public $Architecture;

    /**
     * @var string <p>架构类型名称</p>
     */
    public $ArchitectureName;

    /**
     * @var integer <p>架构类型展示顺序</p>
     */
    public $Order;

    /**
     * @var array <p>架构包含的机型族</p>
     */
    public $InstanceFamilies;

    /**
     * @param string $Architecture <p>架构类型</p>
     * @param string $ArchitectureName <p>架构类型名称</p>
     * @param integer $Order <p>架构类型展示顺序</p>
     * @param array $InstanceFamilies <p>架构包含的机型族</p>
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
        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("ArchitectureName",$param) and $param["ArchitectureName"] !== null) {
            $this->ArchitectureName = $param["ArchitectureName"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("InstanceFamilies",$param) and $param["InstanceFamilies"] !== null) {
            $this->InstanceFamilies = $param["InstanceFamilies"];
        }
    }
}
