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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGroup请求参数结构体
 *
 * @method string getGroupId() 获取图库ID，不可重复，仅支持字母、数字和下划线。
 * @method void setGroupId(string $GroupId) 设置图库ID，不可重复，仅支持字母、数字和下划线。
 * @method string getGroupName() 获取图库名称描述。
 * @method void setGroupName(string $GroupName) 设置图库名称描述。
 * @method integer getMaxCapacity() 获取该库的容量限制。
 * @method void setMaxCapacity(integer $MaxCapacity) 设置该库的容量限制。
 * @method string getBrief() 获取简介。
 * @method void setBrief(string $Brief) 设置简介。
 * @method integer getMaxQps() 获取该库的访问限频 ，默认10。
 * @method void setMaxQps(integer $MaxQps) 设置该库的访问限频 ，默认10。
 * @method integer getGroupType() 获取图库类型， 默认为通用。
类型： 
1: 通用图库，以用户输入图提取特征。
2: 灰度图库，输入图和搜索图均转为灰度图提取特征。
 * @method void setGroupType(integer $GroupType) 设置图库类型， 默认为通用。
类型： 
1: 通用图库，以用户输入图提取特征。
2: 灰度图库，输入图和搜索图均转为灰度图提取特征。
 */
class CreateGroupRequest extends AbstractModel
{
    /**
     * @var string 图库ID，不可重复，仅支持字母、数字和下划线。
     */
    public $GroupId;

    /**
     * @var string 图库名称描述。
     */
    public $GroupName;

    /**
     * @var integer 该库的容量限制。
     */
    public $MaxCapacity;

    /**
     * @var string 简介。
     */
    public $Brief;

    /**
     * @var integer 该库的访问限频 ，默认10。
     */
    public $MaxQps;

    /**
     * @var integer 图库类型， 默认为通用。
类型： 
1: 通用图库，以用户输入图提取特征。
2: 灰度图库，输入图和搜索图均转为灰度图提取特征。
     */
    public $GroupType;

    /**
     * @param string $GroupId 图库ID，不可重复，仅支持字母、数字和下划线。
     * @param string $GroupName 图库名称描述。
     * @param integer $MaxCapacity 该库的容量限制。
     * @param string $Brief 简介。
     * @param integer $MaxQps 该库的访问限频 ，默认10。
     * @param integer $GroupType 图库类型， 默认为通用。
类型： 
1: 通用图库，以用户输入图提取特征。
2: 灰度图库，输入图和搜索图均转为灰度图提取特征。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("MaxCapacity",$param) and $param["MaxCapacity"] !== null) {
            $this->MaxCapacity = $param["MaxCapacity"];
        }

        if (array_key_exists("Brief",$param) and $param["Brief"] !== null) {
            $this->Brief = $param["Brief"];
        }

        if (array_key_exists("MaxQps",$param) and $param["MaxQps"] !== null) {
            $this->MaxQps = $param["MaxQps"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }
    }
}
