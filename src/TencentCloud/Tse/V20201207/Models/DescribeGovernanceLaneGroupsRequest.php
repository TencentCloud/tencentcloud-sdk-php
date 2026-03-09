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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGovernanceLaneGroups请求参数结构体
 *
 * @method string getInstanceId() 获取引擎实例ID
 * @method void setInstanceId(string $InstanceId) 设置引擎实例ID
 * @method integer getOffset() 获取分页查询偏移量
 * @method void setOffset(integer $Offset) 设置分页查询偏移量
 * @method integer getLimit() 获取分页条数
 * @method void setLimit(integer $Limit) 设置分页条数
 * @method string getName() 获取泳道名称
 * @method void setName(string $Name) 设置泳道名称
 * @method string getGroupID() 获取泳道ID
 * @method void setGroupID(string $GroupID) 设置泳道ID
 * @method boolean getBrief() 获取是否展示泳道规则列表
 * @method void setBrief(boolean $Brief) 设置是否展示泳道规则列表
 */
class DescribeGovernanceLaneGroupsRequest extends AbstractModel
{
    /**
     * @var string 引擎实例ID
     */
    public $InstanceId;

    /**
     * @var integer 分页查询偏移量
     */
    public $Offset;

    /**
     * @var integer 分页条数
     */
    public $Limit;

    /**
     * @var string 泳道名称
     */
    public $Name;

    /**
     * @var string 泳道ID
     */
    public $GroupID;

    /**
     * @var boolean 是否展示泳道规则列表
     */
    public $Brief;

    /**
     * @param string $InstanceId 引擎实例ID
     * @param integer $Offset 分页查询偏移量
     * @param integer $Limit 分页条数
     * @param string $Name 泳道名称
     * @param string $GroupID 泳道ID
     * @param boolean $Brief 是否展示泳道规则列表
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("GroupID",$param) and $param["GroupID"] !== null) {
            $this->GroupID = $param["GroupID"];
        }

        if (array_key_exists("Brief",$param) and $param["Brief"] !== null) {
            $this->Brief = $param["Brief"];
        }
    }
}
