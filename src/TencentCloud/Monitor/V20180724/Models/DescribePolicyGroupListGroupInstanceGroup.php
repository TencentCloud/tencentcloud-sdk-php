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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePolicyGroupList接口策略组绑定的实例分组信息
 *
 * @method integer getInstanceGroupId() 获取<p>实例分组名称id</p>
 * @method void setInstanceGroupId(integer $InstanceGroupId) 设置<p>实例分组名称id</p>
 * @method string getViewName() 获取<p>策略类型视图名称</p>
 * @method void setViewName(string $ViewName) 设置<p>策略类型视图名称</p>
 * @method string getLastEditUin() 获取<p>最近编辑的用户uin</p>
 * @method void setLastEditUin(string $LastEditUin) 设置<p>最近编辑的用户uin</p>
 * @method string getGroupName() 获取<p>实例分组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>实例分组名称</p>
 * @method integer getInstanceSum() 获取<p>实例数量</p>
 * @method void setInstanceSum(integer $InstanceSum) 设置<p>实例数量</p>
 * @method integer getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p>
 * @method integer getInsertTime() 获取<p>创建时间</p>
 * @method void setInsertTime(integer $InsertTime) 设置<p>创建时间</p>
 */
class DescribePolicyGroupListGroupInstanceGroup extends AbstractModel
{
    /**
     * @var integer <p>实例分组名称id</p>
     */
    public $InstanceGroupId;

    /**
     * @var string <p>策略类型视图名称</p>
     */
    public $ViewName;

    /**
     * @var string <p>最近编辑的用户uin</p>
     */
    public $LastEditUin;

    /**
     * @var string <p>实例分组名称</p>
     */
    public $GroupName;

    /**
     * @var integer <p>实例数量</p>
     */
    public $InstanceSum;

    /**
     * @var integer <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>创建时间</p>
     */
    public $InsertTime;

    /**
     * @param integer $InstanceGroupId <p>实例分组名称id</p>
     * @param string $ViewName <p>策略类型视图名称</p>
     * @param string $LastEditUin <p>最近编辑的用户uin</p>
     * @param string $GroupName <p>实例分组名称</p>
     * @param integer $InstanceSum <p>实例数量</p>
     * @param integer $UpdateTime <p>更新时间</p>
     * @param integer $InsertTime <p>创建时间</p>
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
        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("LastEditUin",$param) and $param["LastEditUin"] !== null) {
            $this->LastEditUin = $param["LastEditUin"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("InstanceSum",$param) and $param["InstanceSum"] !== null) {
            $this->InstanceSum = $param["InstanceSum"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }
    }
}
