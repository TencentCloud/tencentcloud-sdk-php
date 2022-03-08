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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTopClsLogData请求参数结构体
 *
 * @method string getLogsetId() 获取需要查询的日志集ID
 * @method void setLogsetId(string $LogsetId) 设置需要查询的日志集ID
 * @method string getTopicIds() 获取需要查询的日志主题ID组合，多个以逗号分隔
 * @method void setTopicIds(string $TopicIds) 设置需要查询的日志主题ID组合，多个以逗号分隔
 * @method string getStartTime() 获取需要查询的日志的起始时间，格式 YYYY-mm-dd HH:MM:SS
 * @method void setStartTime(string $StartTime) 设置需要查询的日志的起始时间，格式 YYYY-mm-dd HH:MM:SS
 * @method string getEndTime() 获取需要查询的日志的结束时间，格式 YYYY-mm-dd HH:MM:SS，时间跨度应小于10分钟
 * @method void setEndTime(string $EndTime) 设置需要查询的日志的结束时间，格式 YYYY-mm-dd HH:MM:SS，时间跨度应小于10分钟
 * @method string getDomain() 获取指定域名查询
 * @method void setDomain(string $Domain) 设置指定域名查询
 * @method string getUrl() 获取指定访问的URL查询，支持URL开头和结尾使用\*表示通配
如：
/files/* 表示所有以/files/开头的请求
*.jpg 表示所有以.jpg结尾的请求
 * @method void setUrl(string $Url) 设置指定访问的URL查询，支持URL开头和结尾使用\*表示通配
如：
/files/* 表示所有以/files/开头的请求
*.jpg 表示所有以.jpg结尾的请求
 * @method string getChannel() 获取接入渠道，cdn或者ecdn，默认值为cdn
 * @method void setChannel(string $Channel) 设置接入渠道，cdn或者ecdn，默认值为cdn
 * @method integer getLimit() 获取要查询的Top条数，最大值为100，默认为10
 * @method void setLimit(integer $Limit) 设置要查询的Top条数，最大值为100，默认为10
 * @method string getSort() 获取按请求量排序， asc（升序）或者 desc（降序），默认为 desc
 * @method void setSort(string $Sort) 设置按请求量排序， asc（升序）或者 desc（降序），默认为 desc
 */
class ListTopClsLogDataRequest extends AbstractModel
{
    /**
     * @var string 需要查询的日志集ID
     */
    public $LogsetId;

    /**
     * @var string 需要查询的日志主题ID组合，多个以逗号分隔
     */
    public $TopicIds;

    /**
     * @var string 需要查询的日志的起始时间，格式 YYYY-mm-dd HH:MM:SS
     */
    public $StartTime;

    /**
     * @var string 需要查询的日志的结束时间，格式 YYYY-mm-dd HH:MM:SS，时间跨度应小于10分钟
     */
    public $EndTime;

    /**
     * @var string 指定域名查询
     */
    public $Domain;

    /**
     * @var string 指定访问的URL查询，支持URL开头和结尾使用\*表示通配
如：
/files/* 表示所有以/files/开头的请求
*.jpg 表示所有以.jpg结尾的请求
     */
    public $Url;

    /**
     * @var string 接入渠道，cdn或者ecdn，默认值为cdn
     */
    public $Channel;

    /**
     * @var integer 要查询的Top条数，最大值为100，默认为10
     */
    public $Limit;

    /**
     * @var string 按请求量排序， asc（升序）或者 desc（降序），默认为 desc
     */
    public $Sort;

    /**
     * @param string $LogsetId 需要查询的日志集ID
     * @param string $TopicIds 需要查询的日志主题ID组合，多个以逗号分隔
     * @param string $StartTime 需要查询的日志的起始时间，格式 YYYY-mm-dd HH:MM:SS
     * @param string $EndTime 需要查询的日志的结束时间，格式 YYYY-mm-dd HH:MM:SS，时间跨度应小于10分钟
     * @param string $Domain 指定域名查询
     * @param string $Url 指定访问的URL查询，支持URL开头和结尾使用\*表示通配
如：
/files/* 表示所有以/files/开头的请求
*.jpg 表示所有以.jpg结尾的请求
     * @param string $Channel 接入渠道，cdn或者ecdn，默认值为cdn
     * @param integer $Limit 要查询的Top条数，最大值为100，默认为10
     * @param string $Sort 按请求量排序， asc（升序）或者 desc（降序），默认为 desc
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicIds",$param) and $param["TopicIds"] !== null) {
            $this->TopicIds = $param["TopicIds"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }
    }
}
