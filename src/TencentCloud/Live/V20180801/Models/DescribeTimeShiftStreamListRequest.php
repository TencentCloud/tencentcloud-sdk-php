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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTimeShiftStreamList请求参数结构体
 *
 * @method integer getStartTime() 获取查询范围起始时间，Unix 时间戳。
 * @method void setStartTime(integer $StartTime) 设置查询范围起始时间，Unix 时间戳。
 * @method integer getEndTime() 获取查询范围结束时间，Unix 时间戳。
 * @method void setEndTime(integer $EndTime) 设置查询范围结束时间，Unix 时间戳。
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method string getDomain() 获取推流域名。
 * @method void setDomain(string $Domain) 设置推流域名。
 * @method string getDomainGroup() 获取推流域名所属域名组。
 * @method void setDomainGroup(string $DomainGroup) 设置推流域名所属域名组。
 * @method integer getPageSize() 获取用户指定要返回的最大结果数，取值范围[0,100]，不指定或者指定为0时，API 
默认值为100。指定超过100时，API 强制使用100。指定值为负数时，接口返回错误。
 * @method void setPageSize(integer $PageSize) 设置用户指定要返回的最大结果数，取值范围[0,100]，不指定或者指定为0时，API 
默认值为100。指定超过100时，API 强制使用100。指定值为负数时，接口返回错误。
 * @method integer getPageNum() 获取指定拉取的页码，不传时默认为1。
 * @method void setPageNum(integer $PageNum) 设置指定拉取的页码，不传时默认为1。
 */
class DescribeTimeShiftStreamListRequest extends AbstractModel
{
    /**
     * @var integer 查询范围起始时间，Unix 时间戳。
     */
    public $StartTime;

    /**
     * @var integer 查询范围结束时间，Unix 时间戳。
     */
    public $EndTime;

    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var string 推流域名。
     */
    public $Domain;

    /**
     * @var string 推流域名所属域名组。
     */
    public $DomainGroup;

    /**
     * @var integer 用户指定要返回的最大结果数，取值范围[0,100]，不指定或者指定为0时，API 
默认值为100。指定超过100时，API 强制使用100。指定值为负数时，接口返回错误。
     */
    public $PageSize;

    /**
     * @var integer 指定拉取的页码，不传时默认为1。
     */
    public $PageNum;

    /**
     * @param integer $StartTime 查询范围起始时间，Unix 时间戳。
     * @param integer $EndTime 查询范围结束时间，Unix 时间戳。
     * @param string $StreamName 流名称。
     * @param string $Domain 推流域名。
     * @param string $DomainGroup 推流域名所属域名组。
     * @param integer $PageSize 用户指定要返回的最大结果数，取值范围[0,100]，不指定或者指定为0时，API 
默认值为100。指定超过100时，API 强制使用100。指定值为负数时，接口返回错误。
     * @param integer $PageNum 指定拉取的页码，不传时默认为1。
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainGroup",$param) and $param["DomainGroup"] !== null) {
            $this->DomainGroup = $param["DomainGroup"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }
    }
}
