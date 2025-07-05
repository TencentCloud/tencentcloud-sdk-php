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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDetailedSlowLogs请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getStartTime() 获取待查询慢日志的开始时间
 * @method void setStartTime(string $StartTime) 设置待查询慢日志的开始时间
 * @method string getEndTime() 获取待慢日志的结束时间
 * @method void setEndTime(string $EndTime) 设置待慢日志的结束时间
 * @method integer getExecTime() 获取过滤执行时间大于此值的慢日志，单位ms，默认值100
 * @method void setExecTime(integer $ExecTime) 设置过滤执行时间大于此值的慢日志，单位ms，默认值100
 * @method array getCommands() 获取过滤慢日志的命令类型
 * @method void setCommands(array $Commands) 设置过滤慢日志的命令类型
 * @method array getTexts() 获取全文搜索关键字，多个关键字间为或关系
 * @method void setTexts(array $Texts) 设置全文搜索关键字，多个关键字间为或关系
 * @method array getNodeNames() 获取根据节点名过滤
 * @method void setNodeNames(array $NodeNames) 设置根据节点名过滤
 * @method array getQueryHash() 获取根据queryHash过滤
 * @method void setQueryHash(array $QueryHash) 设置根据queryHash过滤
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 * @method integer getLimit() 获取返回条数
 * @method void setLimit(integer $Limit) 设置返回条数
 * @method string getOrderBy() 获取排序条件，只支持StartTime(按慢日志生成时间)和ExecTime(慢日志执行时间)
 * @method void setOrderBy(string $OrderBy) 设置排序条件，只支持StartTime(按慢日志生成时间)和ExecTime(慢日志执行时间)
 * @method string getOrderByType() 获取排序。desc倒排，asc正排
 * @method void setOrderByType(string $OrderByType) 设置排序。desc倒排，asc正排
 */
class DescribeDetailedSlowLogsRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 待查询慢日志的开始时间
     */
    public $StartTime;

    /**
     * @var string 待慢日志的结束时间
     */
    public $EndTime;

    /**
     * @var integer 过滤执行时间大于此值的慢日志，单位ms，默认值100
     */
    public $ExecTime;

    /**
     * @var array 过滤慢日志的命令类型
     */
    public $Commands;

    /**
     * @var array 全文搜索关键字，多个关键字间为或关系
     */
    public $Texts;

    /**
     * @var array 根据节点名过滤
     */
    public $NodeNames;

    /**
     * @var array 根据queryHash过滤
     */
    public $QueryHash;

    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @var integer 返回条数
     */
    public $Limit;

    /**
     * @var string 排序条件，只支持StartTime(按慢日志生成时间)和ExecTime(慢日志执行时间)
     */
    public $OrderBy;

    /**
     * @var string 排序。desc倒排，asc正排
     */
    public $OrderByType;

    /**
     * @param string $InstanceId 实例id
     * @param string $StartTime 待查询慢日志的开始时间
     * @param string $EndTime 待慢日志的结束时间
     * @param integer $ExecTime 过滤执行时间大于此值的慢日志，单位ms，默认值100
     * @param array $Commands 过滤慢日志的命令类型
     * @param array $Texts 全文搜索关键字，多个关键字间为或关系
     * @param array $NodeNames 根据节点名过滤
     * @param array $QueryHash 根据queryHash过滤
     * @param integer $Offset 分页偏移量
     * @param integer $Limit 返回条数
     * @param string $OrderBy 排序条件，只支持StartTime(按慢日志生成时间)和ExecTime(慢日志执行时间)
     * @param string $OrderByType 排序。desc倒排，asc正排
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("Commands",$param) and $param["Commands"] !== null) {
            $this->Commands = $param["Commands"];
        }

        if (array_key_exists("Texts",$param) and $param["Texts"] !== null) {
            $this->Texts = $param["Texts"];
        }

        if (array_key_exists("NodeNames",$param) and $param["NodeNames"] !== null) {
            $this->NodeNames = $param["NodeNames"];
        }

        if (array_key_exists("QueryHash",$param) and $param["QueryHash"] !== null) {
            $this->QueryHash = $param["QueryHash"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
