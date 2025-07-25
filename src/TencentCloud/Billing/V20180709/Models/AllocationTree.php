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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分账目录树
 *
 * @method integer getId() 获取分账单元ID
 * @method void setId(integer $Id) 设置分账单元ID
 * @method string getName() 获取分账单元名称
 * @method void setName(string $Name) 设置分账单元名称
 * @method string getTreeNodeUniqKey() 获取分账单元唯一标识
 * @method void setTreeNodeUniqKey(string $TreeNodeUniqKey) 设置分账单元唯一标识
 * @method array getChildren() 获取子树
 * @method void setChildren(array $Children) 设置子树
 */
class AllocationTree extends AbstractModel
{
    /**
     * @var integer 分账单元ID
     */
    public $Id;

    /**
     * @var string 分账单元名称
     */
    public $Name;

    /**
     * @var string 分账单元唯一标识
     */
    public $TreeNodeUniqKey;

    /**
     * @var array 子树
     */
    public $Children;

    /**
     * @param integer $Id 分账单元ID
     * @param string $Name 分账单元名称
     * @param string $TreeNodeUniqKey 分账单元唯一标识
     * @param array $Children 子树
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TreeNodeUniqKey",$param) and $param["TreeNodeUniqKey"] !== null) {
            $this->TreeNodeUniqKey = $param["TreeNodeUniqKey"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new AllocationTree();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }
    }
}
