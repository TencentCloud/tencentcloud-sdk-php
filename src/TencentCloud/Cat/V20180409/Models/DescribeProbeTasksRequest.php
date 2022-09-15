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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProbeTasks请求参数结构体
 *
 * @method array getTaskIDs() 获取任务 ID  列表
 * @method void setTaskIDs(array $TaskIDs) 设置任务 ID  列表
 * @method string getTaskName() 获取任务名
 * @method void setTaskName(string $TaskName) 设置任务名
 * @method string getTargetAddress() 获取拨测目标
 * @method void setTargetAddress(string $TargetAddress) 设置拨测目标
 * @method array getTaskStatus() 获取任务状态列表
<li>1 = 创建中</li>
<li> 2 = 运行中 </li>
<li> 3 = 运行异常 </li>
<li> 4 = 暂停中 </li>
<li> 5 = 暂停异常 </li>
<li> 6 = 任务暂停 </li>
<li> 7 = 任务删除中 </li>
<li> 8 = 任务删除异常 </li>
<li> 9 = 任务删除</li>
<li> 10 = 定时任务暂停中 </li>
 * @method void setTaskStatus(array $TaskStatus) 设置任务状态列表
<li>1 = 创建中</li>
<li> 2 = 运行中 </li>
<li> 3 = 运行异常 </li>
<li> 4 = 暂停中 </li>
<li> 5 = 暂停异常 </li>
<li> 6 = 任务暂停 </li>
<li> 7 = 任务删除中 </li>
<li> 8 = 任务删除异常 </li>
<li> 9 = 任务删除</li>
<li> 10 = 定时任务暂停中 </li>
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100
 * @method integer getPayMode() 获取付费模式
<li>1 = 试用版本</li>
<li> 2 = 付费版本 </li>
 * @method void setPayMode(integer $PayMode) 设置付费模式
<li>1 = 试用版本</li>
<li> 2 = 付费版本 </li>
 * @method integer getOrderState() 获取订单状态
<li>1 = 正常</li>
<li> 2 = 欠费 </li>
 * @method void setOrderState(integer $OrderState) 设置订单状态
<li>1 = 正常</li>
<li> 2 = 欠费 </li>
 * @method array getTaskType() 获取拨测类型
<li>1 = 页面浏览</li>
<li> 2 =文件上传 </li>
<li> 3 = 文件下载</li>
<li> 4 = 端口性能 </li>
<li> 5 = 网络质量 </li>
<li> 6 =流媒体 </li>

即使拨测只支持页面浏览，网络质量，文件下载
 * @method void setTaskType(array $TaskType) 设置拨测类型
<li>1 = 页面浏览</li>
<li> 2 =文件上传 </li>
<li> 3 = 文件下载</li>
<li> 4 = 端口性能 </li>
<li> 5 = 网络质量 </li>
<li> 6 =流媒体 </li>

即使拨测只支持页面浏览，网络质量，文件下载
 * @method array getTaskCategory() 获取节点类型
 * @method void setTaskCategory(array $TaskCategory) 设置节点类型
 * @method string getOrderBy() 获取排序的列
 * @method void setOrderBy(string $OrderBy) 设置排序的列
 * @method boolean getAscend() 获取是否正序
 * @method void setAscend(boolean $Ascend) 设置是否正序
 * @method array getTagFilters() 获取资源标签值
 * @method void setTagFilters(array $TagFilters) 设置资源标签值
 */
class DescribeProbeTasksRequest extends AbstractModel
{
    /**
     * @var array 任务 ID  列表
     */
    public $TaskIDs;

    /**
     * @var string 任务名
     */
    public $TaskName;

    /**
     * @var string 拨测目标
     */
    public $TargetAddress;

    /**
     * @var array 任务状态列表
<li>1 = 创建中</li>
<li> 2 = 运行中 </li>
<li> 3 = 运行异常 </li>
<li> 4 = 暂停中 </li>
<li> 5 = 暂停异常 </li>
<li> 6 = 任务暂停 </li>
<li> 7 = 任务删除中 </li>
<li> 8 = 任务删除异常 </li>
<li> 9 = 任务删除</li>
<li> 10 = 定时任务暂停中 </li>
     */
    public $TaskStatus;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100
     */
    public $Limit;

    /**
     * @var integer 付费模式
<li>1 = 试用版本</li>
<li> 2 = 付费版本 </li>
     */
    public $PayMode;

    /**
     * @var integer 订单状态
<li>1 = 正常</li>
<li> 2 = 欠费 </li>
     */
    public $OrderState;

    /**
     * @var array 拨测类型
<li>1 = 页面浏览</li>
<li> 2 =文件上传 </li>
<li> 3 = 文件下载</li>
<li> 4 = 端口性能 </li>
<li> 5 = 网络质量 </li>
<li> 6 =流媒体 </li>

即使拨测只支持页面浏览，网络质量，文件下载
     */
    public $TaskType;

    /**
     * @var array 节点类型
     */
    public $TaskCategory;

    /**
     * @var string 排序的列
     */
    public $OrderBy;

    /**
     * @var boolean 是否正序
     */
    public $Ascend;

    /**
     * @var array 资源标签值
     */
    public $TagFilters;

    /**
     * @param array $TaskIDs 任务 ID  列表
     * @param string $TaskName 任务名
     * @param string $TargetAddress 拨测目标
     * @param array $TaskStatus 任务状态列表
<li>1 = 创建中</li>
<li> 2 = 运行中 </li>
<li> 3 = 运行异常 </li>
<li> 4 = 暂停中 </li>
<li> 5 = 暂停异常 </li>
<li> 6 = 任务暂停 </li>
<li> 7 = 任务删除中 </li>
<li> 8 = 任务删除异常 </li>
<li> 9 = 任务删除</li>
<li> 10 = 定时任务暂停中 </li>
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回数量，默认为20，最大值为100
     * @param integer $PayMode 付费模式
<li>1 = 试用版本</li>
<li> 2 = 付费版本 </li>
     * @param integer $OrderState 订单状态
<li>1 = 正常</li>
<li> 2 = 欠费 </li>
     * @param array $TaskType 拨测类型
<li>1 = 页面浏览</li>
<li> 2 =文件上传 </li>
<li> 3 = 文件下载</li>
<li> 4 = 端口性能 </li>
<li> 5 = 网络质量 </li>
<li> 6 =流媒体 </li>

即使拨测只支持页面浏览，网络质量，文件下载
     * @param array $TaskCategory 节点类型
     * @param string $OrderBy 排序的列
     * @param boolean $Ascend 是否正序
     * @param array $TagFilters 资源标签值
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
        if (array_key_exists("TaskIDs",$param) and $param["TaskIDs"] !== null) {
            $this->TaskIDs = $param["TaskIDs"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TargetAddress",$param) and $param["TargetAddress"] !== null) {
            $this->TargetAddress = $param["TargetAddress"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("OrderState",$param) and $param["OrderState"] !== null) {
            $this->OrderState = $param["OrderState"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskCategory",$param) and $param["TaskCategory"] !== null) {
            $this->TaskCategory = $param["TaskCategory"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Ascend",$param) and $param["Ascend"] !== null) {
            $this->Ascend = $param["Ascend"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new KeyValuePair();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
