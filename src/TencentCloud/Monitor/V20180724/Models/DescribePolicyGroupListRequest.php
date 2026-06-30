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
 * DescribePolicyGroupList请求参数结构体
 *
 * @method string getModule() 获取<p>固定值，为&quot;monitor&quot;</p>
 * @method void setModule(string $Module) 设置<p>固定值，为&quot;monitor&quot;</p>
 * @method integer getLimit() 获取<p>分页参数，每页返回的数量，取值1~100</p>
 * @method void setLimit(integer $Limit) 设置<p>分页参数，每页返回的数量，取值1~100</p>
 * @method integer getOffset() 获取<p>分页参数，页偏移量，从0开始计数</p>
 * @method void setOffset(integer $Offset) 设置<p>分页参数，页偏移量，从0开始计数</p>
 * @method string getLike() 获取<p>按策略名搜索</p>
 * @method void setLike(string $Like) 设置<p>按策略名搜索</p>
 * @method integer getInstanceGroupId() 获取<p>实例分组id</p>
 * @method void setInstanceGroupId(integer $InstanceGroupId) 设置<p>实例分组id</p>
 * @method string getUpdateTimeOrder() 获取<p>按更新时间排序, asc 或者 desc</p>
 * @method void setUpdateTimeOrder(string $UpdateTimeOrder) 设置<p>按更新时间排序, asc 或者 desc</p>
 * @method array getProjectIds() 获取<p>项目id列表</p>
 * @method void setProjectIds(array $ProjectIds) 设置<p>项目id列表</p>
 * @method array getViewNames() 获取<p>告警策略类型列表</p>
 * @method void setViewNames(array $ViewNames) 设置<p>告警策略类型列表</p>
 * @method integer getFilterUnuseReceiver() 获取<p>是否过滤无接收人策略组, 1表示过滤, 0表示不过滤</p>
 * @method void setFilterUnuseReceiver(integer $FilterUnuseReceiver) 设置<p>是否过滤无接收人策略组, 1表示过滤, 0表示不过滤</p>
 * @method array getReceivers() 获取<p>过滤条件, 接收组列表</p>
 * @method void setReceivers(array $Receivers) 设置<p>过滤条件, 接收组列表</p>
 * @method array getReceiverUserList() 获取<p>过滤条件, 接收人列表</p>
 * @method void setReceiverUserList(array $ReceiverUserList) 设置<p>过滤条件, 接收人列表</p>
 * @method string getDimensions() 获取<p>维度组合字段(json字符串), 例如[[{&quot;name&quot;:&quot;unInstanceId&quot;,&quot;value&quot;:&quot;ins-6e4b2aaa&quot;}]]</p>
 * @method void setDimensions(string $Dimensions) 设置<p>维度组合字段(json字符串), 例如[[{&quot;name&quot;:&quot;unInstanceId&quot;,&quot;value&quot;:&quot;ins-6e4b2aaa&quot;}]]</p>
 * @method string getConditionTempGroupId() 获取<p>模板策略组id, 多个id用逗号分隔</p>
 * @method void setConditionTempGroupId(string $ConditionTempGroupId) 设置<p>模板策略组id, 多个id用逗号分隔</p>
 * @method string getReceiverType() 获取<p>过滤条件, 接收人或者接收组, user表示接收人, group表示接收组</p>
 * @method void setReceiverType(string $ReceiverType) 设置<p>过滤条件, 接收人或者接收组, user表示接收人, group表示接收组</p>
 * @method boolean getIsOpen() 获取<p>过滤条件，告警策略是否已启动或停止</p>
 * @method void setIsOpen(boolean $IsOpen) 设置<p>过滤条件，告警策略是否已启动或停止</p>
 */
class DescribePolicyGroupListRequest extends AbstractModel
{
    /**
     * @var string <p>固定值，为&quot;monitor&quot;</p>
     */
    public $Module;

    /**
     * @var integer <p>分页参数，每页返回的数量，取值1~100</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页参数，页偏移量，从0开始计数</p>
     */
    public $Offset;

    /**
     * @var string <p>按策略名搜索</p>
     */
    public $Like;

    /**
     * @var integer <p>实例分组id</p>
     */
    public $InstanceGroupId;

    /**
     * @var string <p>按更新时间排序, asc 或者 desc</p>
     */
    public $UpdateTimeOrder;

    /**
     * @var array <p>项目id列表</p>
     */
    public $ProjectIds;

    /**
     * @var array <p>告警策略类型列表</p>
     */
    public $ViewNames;

    /**
     * @var integer <p>是否过滤无接收人策略组, 1表示过滤, 0表示不过滤</p>
     */
    public $FilterUnuseReceiver;

    /**
     * @var array <p>过滤条件, 接收组列表</p>
     */
    public $Receivers;

    /**
     * @var array <p>过滤条件, 接收人列表</p>
     */
    public $ReceiverUserList;

    /**
     * @var string <p>维度组合字段(json字符串), 例如[[{&quot;name&quot;:&quot;unInstanceId&quot;,&quot;value&quot;:&quot;ins-6e4b2aaa&quot;}]]</p>
     */
    public $Dimensions;

    /**
     * @var string <p>模板策略组id, 多个id用逗号分隔</p>
     */
    public $ConditionTempGroupId;

    /**
     * @var string <p>过滤条件, 接收人或者接收组, user表示接收人, group表示接收组</p>
     */
    public $ReceiverType;

    /**
     * @var boolean <p>过滤条件，告警策略是否已启动或停止</p>
     */
    public $IsOpen;

    /**
     * @param string $Module <p>固定值，为&quot;monitor&quot;</p>
     * @param integer $Limit <p>分页参数，每页返回的数量，取值1~100</p>
     * @param integer $Offset <p>分页参数，页偏移量，从0开始计数</p>
     * @param string $Like <p>按策略名搜索</p>
     * @param integer $InstanceGroupId <p>实例分组id</p>
     * @param string $UpdateTimeOrder <p>按更新时间排序, asc 或者 desc</p>
     * @param array $ProjectIds <p>项目id列表</p>
     * @param array $ViewNames <p>告警策略类型列表</p>
     * @param integer $FilterUnuseReceiver <p>是否过滤无接收人策略组, 1表示过滤, 0表示不过滤</p>
     * @param array $Receivers <p>过滤条件, 接收组列表</p>
     * @param array $ReceiverUserList <p>过滤条件, 接收人列表</p>
     * @param string $Dimensions <p>维度组合字段(json字符串), 例如[[{&quot;name&quot;:&quot;unInstanceId&quot;,&quot;value&quot;:&quot;ins-6e4b2aaa&quot;}]]</p>
     * @param string $ConditionTempGroupId <p>模板策略组id, 多个id用逗号分隔</p>
     * @param string $ReceiverType <p>过滤条件, 接收人或者接收组, user表示接收人, group表示接收组</p>
     * @param boolean $IsOpen <p>过滤条件，告警策略是否已启动或停止</p>
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Like",$param) and $param["Like"] !== null) {
            $this->Like = $param["Like"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("UpdateTimeOrder",$param) and $param["UpdateTimeOrder"] !== null) {
            $this->UpdateTimeOrder = $param["UpdateTimeOrder"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("ViewNames",$param) and $param["ViewNames"] !== null) {
            $this->ViewNames = $param["ViewNames"];
        }

        if (array_key_exists("FilterUnuseReceiver",$param) and $param["FilterUnuseReceiver"] !== null) {
            $this->FilterUnuseReceiver = $param["FilterUnuseReceiver"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("ReceiverUserList",$param) and $param["ReceiverUserList"] !== null) {
            $this->ReceiverUserList = $param["ReceiverUserList"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("ConditionTempGroupId",$param) and $param["ConditionTempGroupId"] !== null) {
            $this->ConditionTempGroupId = $param["ConditionTempGroupId"];
        }

        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("IsOpen",$param) and $param["IsOpen"] !== null) {
            $this->IsOpen = $param["IsOpen"];
        }
    }
}
