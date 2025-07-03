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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListVideoDownloadTask请求参数结构体
 *
 * @method string getDeviceName() 获取设备名称，用于模糊搜索
 * @method void setDeviceName(string $DeviceName) 设置设备名称，用于模糊搜索
 * @method string getChannelName() 获取通道名称，用于模糊搜索
 * @method void setChannelName(string $ChannelName) 设置通道名称，用于模糊搜索
 * @method integer getStatus() 获取任务状态（0：准备中，1：执行中，2：已完成，3：失败）
 * @method void setStatus(integer $Status) 设置任务状态（0：准备中，1：执行中，2：已完成，3：失败）
 * @method string getSortRule() 获取排序规则（仅支持 StartTime，倒序为-StartTime）
 * @method void setSortRule(string $SortRule) 设置排序规则（仅支持 StartTime，倒序为-StartTime）
 * @method integer getWithPreviewUrl() 获取响应是否携带预览地址(0:不携带；1:携带)
 * @method void setWithPreviewUrl(integer $WithPreviewUrl) 设置响应是否携带预览地址(0:不携带；1:携带)
 * @method integer getPageNumber() 获取分页页数
 * @method void setPageNumber(integer $PageNumber) 设置分页页数
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method string getDownloadTaskId() 获取下载任务 ID
 * @method void setDownloadTaskId(string $DownloadTaskId) 设置下载任务 ID
 * @method integer getUrlExpires() 获取下载地址过期时间，单位秒，最大为 1 天， 86400秒
 * @method void setUrlExpires(integer $UrlExpires) 设置下载地址过期时间，单位秒，最大为 1 天， 86400秒
 * @method string getDate() 获取任务日期，默认当天
 * @method void setDate(string $Date) 设置任务日期，默认当天
 */
class ListVideoDownloadTaskRequest extends AbstractModel
{
    /**
     * @var string 设备名称，用于模糊搜索
     */
    public $DeviceName;

    /**
     * @var string 通道名称，用于模糊搜索
     */
    public $ChannelName;

    /**
     * @var integer 任务状态（0：准备中，1：执行中，2：已完成，3：失败）
     */
    public $Status;

    /**
     * @var string 排序规则（仅支持 StartTime，倒序为-StartTime）
     */
    public $SortRule;

    /**
     * @var integer 响应是否携带预览地址(0:不携带；1:携带)
     */
    public $WithPreviewUrl;

    /**
     * @var integer 分页页数
     */
    public $PageNumber;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var string 下载任务 ID
     */
    public $DownloadTaskId;

    /**
     * @var integer 下载地址过期时间，单位秒，最大为 1 天， 86400秒
     */
    public $UrlExpires;

    /**
     * @var string 任务日期，默认当天
     */
    public $Date;

    /**
     * @param string $DeviceName 设备名称，用于模糊搜索
     * @param string $ChannelName 通道名称，用于模糊搜索
     * @param integer $Status 任务状态（0：准备中，1：执行中，2：已完成，3：失败）
     * @param string $SortRule 排序规则（仅支持 StartTime，倒序为-StartTime）
     * @param integer $WithPreviewUrl 响应是否携带预览地址(0:不携带；1:携带)
     * @param integer $PageNumber 分页页数
     * @param integer $PageSize 分页大小
     * @param string $DownloadTaskId 下载任务 ID
     * @param integer $UrlExpires 下载地址过期时间，单位秒，最大为 1 天， 86400秒
     * @param string $Date 任务日期，默认当天
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SortRule",$param) and $param["SortRule"] !== null) {
            $this->SortRule = $param["SortRule"];
        }

        if (array_key_exists("WithPreviewUrl",$param) and $param["WithPreviewUrl"] !== null) {
            $this->WithPreviewUrl = $param["WithPreviewUrl"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("DownloadTaskId",$param) and $param["DownloadTaskId"] !== null) {
            $this->DownloadTaskId = $param["DownloadTaskId"];
        }

        if (array_key_exists("UrlExpires",$param) and $param["UrlExpires"] !== null) {
            $this->UrlExpires = $param["UrlExpires"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
