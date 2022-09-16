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
 * @method integer getMaxCapacity() 获取图库可容纳的最大图片数量。
 * @method void setMaxCapacity(integer $MaxCapacity) 设置图库可容纳的最大图片数量。
 * @method string getBrief() 获取图库简介。
 * @method void setBrief(string $Brief) 设置图库简介。
 * @method integer getMaxQps() 获取访问限制默认为10qps，如需扩容请联系[在线客服](https://cloud.tencent.com/online-service)申请。
 * @method void setMaxQps(integer $MaxQps) 设置访问限制默认为10qps，如需扩容请联系[在线客服](https://cloud.tencent.com/online-service)申请。
 * @method integer getGroupType() 获取图库类型，对应不同的图像搜索服务类型，默认为4。1～3为历史版本，不推荐。
参数取值：
4：相同图像搜索。
5：商品图像搜索。
6：相似图像搜索。
 * @method void setGroupType(integer $GroupType) 设置图库类型，对应不同的图像搜索服务类型，默认为4。1～3为历史版本，不推荐。
参数取值：
4：相同图像搜索。
5：商品图像搜索。
6：相似图像搜索。
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
     * @var integer 图库可容纳的最大图片数量。
     */
    public $MaxCapacity;

    /**
     * @var string 图库简介。
     */
    public $Brief;

    /**
     * @var integer 访问限制默认为10qps，如需扩容请联系[在线客服](https://cloud.tencent.com/online-service)申请。
     */
    public $MaxQps;

    /**
     * @var integer 图库类型，对应不同的图像搜索服务类型，默认为4。1～3为历史版本，不推荐。
参数取值：
4：相同图像搜索。
5：商品图像搜索。
6：相似图像搜索。
     */
    public $GroupType;

    /**
     * @param string $GroupId 图库ID，不可重复，仅支持字母、数字和下划线。
     * @param string $GroupName 图库名称描述。
     * @param integer $MaxCapacity 图库可容纳的最大图片数量。
     * @param string $Brief 图库简介。
     * @param integer $MaxQps 访问限制默认为10qps，如需扩容请联系[在线客服](https://cloud.tencent.com/online-service)申请。
     * @param integer $GroupType 图库类型，对应不同的图像搜索服务类型，默认为4。1～3为历史版本，不推荐。
参数取值：
4：相同图像搜索。
5：商品图像搜索。
6：相似图像搜索。
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
