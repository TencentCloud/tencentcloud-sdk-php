<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method integer getParentId() 获取新增分账单元父节点ID
 * @method void setParentId(integer $ParentId) 设置新增分账单元父节点ID
 * @method string getName() 获取新增分账单元名称
 * @method void setName(string $Name) 设置新增分账单元名称
 * @method string getMonth() 获取月份，不传默认当前月
 * @method void setMonth(string $Month) 设置月份，不传默认当前月
 */
class CreateAllocationUnitRequest extends AbstractModel
{
    /**
     * @var integer 新增分账单元父节点ID
     */
    public $ParentId;

    /**
     * @var string 新增分账单元名称
     */
    public $Name;

    /**
     * @var string 月份，不传默认当前月
     */
    public $Month;

    /**
     * @param integer $ParentId 新增分账单元父节点ID
     * @param string $Name 新增分账单元名称
     * @param string $Month 月份，不传默认当前月
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
