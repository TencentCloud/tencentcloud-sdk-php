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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProbeTasks请求参数结构体
 *
 * @method array getTaskIDs() 获取<p>任务 ID  列表</p>
 * @method void setTaskIDs(array $TaskIDs) 设置<p>任务 ID  列表</p>
 * @method string getTaskName() 获取<p>任务名</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名</p>
 * @method string getTargetAddress() 获取<p>拨测目标</p>
 * @method void setTargetAddress(string $TargetAddress) 设置<p>拨测目标</p>
 * @method array getTaskStatus() 获取<p>任务状态列表</p><li>1 = 创建中</li><li> 2 = 运行中 </li><li> 3 = 运行异常 </li><li> 4 = 暂停中 </li><li> 5 = 暂停异常 </li><li> 6 = 任务暂停 </li><li> 7 = 任务删除中 </li><li> 8 = 任务删除异常 </li><li> 9 = 任务删除</li><li> 10 = 定时任务暂停中 </li>
 * @method void setTaskStatus(array $TaskStatus) 设置<p>任务状态列表</p><li>1 = 创建中</li><li> 2 = 运行中 </li><li> 3 = 运行异常 </li><li> 4 = 暂停中 </li><li> 5 = 暂停异常 </li><li> 6 = 任务暂停 </li><li> 7 = 任务删除中 </li><li> 8 = 任务删除异常 </li><li> 9 = 任务删除</li><li> 10 = 定时任务暂停中 </li>
 * @method integer getOffset() 获取<p>偏移量，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100</p>
 * @method integer getPayMode() 获取<p>付费模式</p><li>1 = 试用版本</li><li> 2 = 付费版本 </li>
 * @method void setPayMode(integer $PayMode) 设置<p>付费模式</p><li>1 = 试用版本</li><li> 2 = 付费版本 </li>
 * @method integer getOrderState() 获取<p>订单状态</p><li>1 = 正常</li><li> 2 = 欠费 </li>
 * @method void setOrderState(integer $OrderState) 设置<p>订单状态</p><li>1 = 正常</li><li> 2 = 欠费 </li>
 * @method array getTaskType() 获取<p>拨测类型</p><li>1 = 页面浏览</li><li> 2 =文件上传 </li><li> 3 = 文件下载</li><li> 4 = 端口性能 </li><li> 5 = 网络质量 </li><li> 6 =流媒体 </li><p>即使拨测只支持页面浏览，网络质量，文件下载</p>
 * @method void setTaskType(array $TaskType) 设置<p>拨测类型</p><li>1 = 页面浏览</li><li> 2 =文件上传 </li><li> 3 = 文件下载</li><li> 4 = 端口性能 </li><li> 5 = 网络质量 </li><li> 6 =流媒体 </li><p>即使拨测只支持页面浏览，网络质量，文件下载</p>
 * @method array getTaskCategory() 获取<p>节点类型</p>
 * @method void setTaskCategory(array $TaskCategory) 设置<p>节点类型</p>
 * @method string getOrderBy() 获取<p>排序的列</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序的列</p>
 * @method boolean getAscend() 获取<p>是否正序</p>
 * @method void setAscend(boolean $Ascend) 设置<p>是否正序</p>
 * @method array getTagFilters() 获取<p>资源标签值</p>
 * @method void setTagFilters(array $TagFilters) 设置<p>资源标签值</p>
 */
class DescribeProbeTasksRequest extends AbstractModel
{
    /**
     * @var array <p>任务 ID  列表</p>
     */
    public $TaskIDs;

    /**
     * @var string <p>任务名</p>
     */
    public $TaskName;

    /**
     * @var string <p>拨测目标</p>
     */
    public $TargetAddress;

    /**
     * @var array <p>任务状态列表</p><li>1 = 创建中</li><li> 2 = 运行中 </li><li> 3 = 运行异常 </li><li> 4 = 暂停中 </li><li> 5 = 暂停异常 </li><li> 6 = 任务暂停 </li><li> 7 = 任务删除中 </li><li> 8 = 任务删除异常 </li><li> 9 = 任务删除</li><li> 10 = 定时任务暂停中 </li>
     */
    public $TaskStatus;

    /**
     * @var integer <p>偏移量，默认为0</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认为20，最大值为100</p>
     */
    public $Limit;

    /**
     * @var integer <p>付费模式</p><li>1 = 试用版本</li><li> 2 = 付费版本 </li>
     */
    public $PayMode;

    /**
     * @var integer <p>订单状态</p><li>1 = 正常</li><li> 2 = 欠费 </li>
     */
    public $OrderState;

    /**
     * @var array <p>拨测类型</p><li>1 = 页面浏览</li><li> 2 =文件上传 </li><li> 3 = 文件下载</li><li> 4 = 端口性能 </li><li> 5 = 网络质量 </li><li> 6 =流媒体 </li><p>即使拨测只支持页面浏览，网络质量，文件下载</p>
     */
    public $TaskType;

    /**
     * @var array <p>节点类型</p>
     */
    public $TaskCategory;

    /**
     * @var string <p>排序的列</p>
     */
    public $OrderBy;

    /**
     * @var boolean <p>是否正序</p>
     */
    public $Ascend;

    /**
     * @var array <p>资源标签值</p>
     */
    public $TagFilters;

    /**
     * @param array $TaskIDs <p>任务 ID  列表</p>
     * @param string $TaskName <p>任务名</p>
     * @param string $TargetAddress <p>拨测目标</p>
     * @param array $TaskStatus <p>任务状态列表</p><li>1 = 创建中</li><li> 2 = 运行中 </li><li> 3 = 运行异常 </li><li> 4 = 暂停中 </li><li> 5 = 暂停异常 </li><li> 6 = 任务暂停 </li><li> 7 = 任务删除中 </li><li> 8 = 任务删除异常 </li><li> 9 = 任务删除</li><li> 10 = 定时任务暂停中 </li>
     * @param integer $Offset <p>偏移量，默认为0</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100</p>
     * @param integer $PayMode <p>付费模式</p><li>1 = 试用版本</li><li> 2 = 付费版本 </li>
     * @param integer $OrderState <p>订单状态</p><li>1 = 正常</li><li> 2 = 欠费 </li>
     * @param array $TaskType <p>拨测类型</p><li>1 = 页面浏览</li><li> 2 =文件上传 </li><li> 3 = 文件下载</li><li> 4 = 端口性能 </li><li> 5 = 网络质量 </li><li> 6 =流媒体 </li><p>即使拨测只支持页面浏览，网络质量，文件下载</p>
     * @param array $TaskCategory <p>节点类型</p>
     * @param string $OrderBy <p>排序的列</p>
     * @param boolean $Ascend <p>是否正序</p>
     * @param array $TagFilters <p>资源标签值</p>
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
