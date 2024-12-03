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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePodInstances请求参数结构体
 *
 * @method string getGroupId() 获取实例所属groupId
 * @method void setGroupId(string $GroupId) 设置实例所属groupId
 * @method integer getOffset() 获取偏移量，取值从0开始
 * @method void setOffset(integer $Offset) 设置偏移量，取值从0开始
 * @method integer getLimit() 获取分页个数，默认为20， 取值应为1~50
 * @method void setLimit(integer $Limit) 设置分页个数，默认为20， 取值应为1~50
 * @method array getPodNameList() 获取过滤字段
 * @method void setPodNameList(array $PodNameList) 设置过滤字段
 * @method string getDeployVersion() 获取新老版本pod批次标识
 * @method void setDeployVersion(string $DeployVersion) 设置新老版本pod批次标识
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 */
class DescribePodInstancesRequest extends AbstractModel
{
    /**
     * @var string 实例所属groupId
     */
    public $GroupId;

    /**
     * @var integer 偏移量，取值从0开始
     */
    public $Offset;

    /**
     * @var integer 分页个数，默认为20， 取值应为1~50
     */
    public $Limit;

    /**
     * @var array 过滤字段
     */
    public $PodNameList;

    /**
     * @var string 新老版本pod批次标识
     */
    public $DeployVersion;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @param string $GroupId 实例所属groupId
     * @param integer $Offset 偏移量，取值从0开始
     * @param integer $Limit 分页个数，默认为20， 取值应为1~50
     * @param array $PodNameList 过滤字段
     * @param string $DeployVersion 新老版本pod批次标识
     * @param string $TaskId 任务ID
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PodNameList",$param) and $param["PodNameList"] !== null) {
            $this->PodNameList = $param["PodNameList"];
        }

        if (array_key_exists("DeployVersion",$param) and $param["DeployVersion"] !== null) {
            $this->DeployVersion = $param["DeployVersion"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
