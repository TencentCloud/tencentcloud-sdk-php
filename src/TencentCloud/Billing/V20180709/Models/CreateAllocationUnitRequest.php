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
 * CreateAllocationUnit请求参数结构体
 *
 * @method integer getParentId() 获取<p>新增分账单元父节点ID</p>
 * @method void setParentId(integer $ParentId) 设置<p>新增分账单元父节点ID</p>
 * @method string getName() 获取<p>新增分账单元名称</p>
 * @method void setName(string $Name) 设置<p>新增分账单元名称</p>
 * @method string getMonth() 获取<p>月份，不传默认当前月</p>
 * @method void setMonth(string $Month) 设置<p>月份，不传默认当前月</p>
 */
class CreateAllocationUnitRequest extends AbstractModel
{
    /**
     * @var integer <p>新增分账单元父节点ID</p>
     */
    public $ParentId;

    /**
     * @var string <p>新增分账单元名称</p>
     */
    public $Name;

    /**
     * @var string <p>月份，不传默认当前月</p>
     */
    public $Month;

    /**
     * @param integer $ParentId <p>新增分账单元父节点ID</p>
     * @param string $Name <p>新增分账单元名称</p>
     * @param string $Month <p>月份，不传默认当前月</p>
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
        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }
    }
}
