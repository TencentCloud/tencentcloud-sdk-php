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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTWeSeeTasks请求参数结构体
 *
 * @method string getDeviceName() 获取<p>设备名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称</p>
 * @method integer getLimit() 获取<p>分页拉取数量</p>
 * @method void setLimit(integer $Limit) 设置<p>分页拉取数量</p>
 * @method string getProductId() 获取<p>产品 ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品 ID</p>
 * @method string getServiceCategory() 获取<p>算法类目。可选值：</p><ul><li><code>COMPREHENSION</code>：视觉理解</li><li><code>HIGHLIGHT</code>：视频浓缩</li><li><code>SUMMARIZATION</code>：每日/每周总结</li></ul>
 * @method void setServiceCategory(string $ServiceCategory) 设置<p>算法类目。可选值：</p><ul><li><code>COMPREHENSION</code>：视觉理解</li><li><code>HIGHLIGHT</code>：视频浓缩</li><li><code>SUMMARIZATION</code>：每日/每周总结</li></ul>
 * @method integer getChannelId() 获取<p>通道 ID</p>
 * @method void setChannelId(integer $ChannelId) 设置<p>通道 ID</p>
 * @method integer getEndTimeMs() 获取<p>查询任务时间范围的结束时间（毫秒级 UNIX 时间戳）。不传则不生效时间范围条件。</p>
 * @method void setEndTimeMs(integer $EndTimeMs) 设置<p>查询任务时间范围的结束时间（毫秒级 UNIX 时间戳）。不传则不生效时间范围条件。</p>
 * @method integer getFileURLExpireTime() 获取<p>下载 URL 的过期时间（秒级 UNIX 时间戳）。若传入该参数，则响应中将包含所有文件的下载 URL</p>
 * @method void setFileURLExpireTime(integer $FileURLExpireTime) 设置<p>下载 URL 的过期时间（秒级 UNIX 时间戳）。若传入该参数，则响应中将包含所有文件的下载 URL</p>
 * @method array getFilters() 获取<p>任务结果过滤条件</p>
 * @method void setFilters(array $Filters) 设置<p>任务结果过滤条件</p>
 * @method integer getOffset() 获取<p>分页拉取偏移</p>
 * @method void setOffset(integer $Offset) 设置<p>分页拉取偏移</p>
 * @method array getServiceTypes() 获取<p>算法类型。</p><p>当 ServiceCategory 为 <code>COMPREHENSION</code> 时，可选值包括：</p><ul><li><code>VID_COMP</code>：视频理解</li><li><code>IMG_COMP</code>：图片理解</li><li><code>CONT_PERSON_MOTIONLESS</code>：静姿检测</li></ul><p>当 ServiceCategory 为 <code>HIGHLIGHT</code> 时，可选值包括：</p><ul><li><code>COMP_HIGHLIGHT</code>：视频浓缩</li></ul><p>当 ServiceCategory 为 <code>SUMMARIZATION</code> 时，可选值包括：</p><ul><li><code>DAILY_SUM</code>：每日总结</li><li><code>WEEKLY_SUM</code>：每周总结</li></ul>
 * @method void setServiceTypes(array $ServiceTypes) 设置<p>算法类型。</p><p>当 ServiceCategory 为 <code>COMPREHENSION</code> 时，可选值包括：</p><ul><li><code>VID_COMP</code>：视频理解</li><li><code>IMG_COMP</code>：图片理解</li><li><code>CONT_PERSON_MOTIONLESS</code>：静姿检测</li></ul><p>当 ServiceCategory 为 <code>HIGHLIGHT</code> 时，可选值包括：</p><ul><li><code>COMP_HIGHLIGHT</code>：视频浓缩</li></ul><p>当 ServiceCategory 为 <code>SUMMARIZATION</code> 时，可选值包括：</p><ul><li><code>DAILY_SUM</code>：每日总结</li><li><code>WEEKLY_SUM</code>：每周总结</li></ul>
 * @method integer getStartTimeMs() 获取<p>查询任务时间范围的起始时间（毫秒级 UNIX 时间戳）。不传则不生效时间范围条件。</p>
 * @method void setStartTimeMs(integer $StartTimeMs) 设置<p>查询任务时间范围的起始时间（毫秒级 UNIX 时间戳）。不传则不生效时间范围条件。</p>
 * @method integer getStatus() 获取<p>要查询的任务的状态条件。不传则不按照状态过滤，可选值：</p><ul><li><code>1</code>：失败</li><li><code>2</code>：空结果</li><li><code>3</code>：有效结果</li></ul>
 * @method void setStatus(integer $Status) 设置<p>要查询的任务的状态条件。不传则不按照状态过滤，可选值：</p><ul><li><code>1</code>：失败</li><li><code>2</code>：空结果</li><li><code>3</code>：有效结果</li></ul>
 */
class ListTWeSeeTasksRequest extends AbstractModel
{
    /**
     * @var string <p>设备名称</p>
     */
    public $DeviceName;

    /**
     * @var integer <p>分页拉取数量</p>
     */
    public $Limit;

    /**
     * @var string <p>产品 ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>算法类目。可选值：</p><ul><li><code>COMPREHENSION</code>：视觉理解</li><li><code>HIGHLIGHT</code>：视频浓缩</li><li><code>SUMMARIZATION</code>：每日/每周总结</li></ul>
     */
    public $ServiceCategory;

    /**
     * @var integer <p>通道 ID</p>
     */
    public $ChannelId;

    /**
     * @var integer <p>查询任务时间范围的结束时间（毫秒级 UNIX 时间戳）。不传则不生效时间范围条件。</p>
     */
    public $EndTimeMs;

    /**
     * @var integer <p>下载 URL 的过期时间（秒级 UNIX 时间戳）。若传入该参数，则响应中将包含所有文件的下载 URL</p>
     */
    public $FileURLExpireTime;

    /**
     * @var array <p>任务结果过滤条件</p>
     */
    public $Filters;

    /**
     * @var integer <p>分页拉取偏移</p>
     */
    public $Offset;

    /**
     * @var array <p>算法类型。</p><p>当 ServiceCategory 为 <code>COMPREHENSION</code> 时，可选值包括：</p><ul><li><code>VID_COMP</code>：视频理解</li><li><code>IMG_COMP</code>：图片理解</li><li><code>CONT_PERSON_MOTIONLESS</code>：静姿检测</li></ul><p>当 ServiceCategory 为 <code>HIGHLIGHT</code> 时，可选值包括：</p><ul><li><code>COMP_HIGHLIGHT</code>：视频浓缩</li></ul><p>当 ServiceCategory 为 <code>SUMMARIZATION</code> 时，可选值包括：</p><ul><li><code>DAILY_SUM</code>：每日总结</li><li><code>WEEKLY_SUM</code>：每周总结</li></ul>
     */
    public $ServiceTypes;

    /**
     * @var integer <p>查询任务时间范围的起始时间（毫秒级 UNIX 时间戳）。不传则不生效时间范围条件。</p>
     */
    public $StartTimeMs;

    /**
     * @var integer <p>要查询的任务的状态条件。不传则不按照状态过滤，可选值：</p><ul><li><code>1</code>：失败</li><li><code>2</code>：空结果</li><li><code>3</code>：有效结果</li></ul>
     */
    public $Status;

    /**
     * @param string $DeviceName <p>设备名称</p>
     * @param integer $Limit <p>分页拉取数量</p>
     * @param string $ProductId <p>产品 ID</p>
     * @param string $ServiceCategory <p>算法类目。可选值：</p><ul><li><code>COMPREHENSION</code>：视觉理解</li><li><code>HIGHLIGHT</code>：视频浓缩</li><li><code>SUMMARIZATION</code>：每日/每周总结</li></ul>
     * @param integer $ChannelId <p>通道 ID</p>
     * @param integer $EndTimeMs <p>查询任务时间范围的结束时间（毫秒级 UNIX 时间戳）。不传则不生效时间范围条件。</p>
     * @param integer $FileURLExpireTime <p>下载 URL 的过期时间（秒级 UNIX 时间戳）。若传入该参数，则响应中将包含所有文件的下载 URL</p>
     * @param array $Filters <p>任务结果过滤条件</p>
     * @param integer $Offset <p>分页拉取偏移</p>
     * @param array $ServiceTypes <p>算法类型。</p><p>当 ServiceCategory 为 <code>COMPREHENSION</code> 时，可选值包括：</p><ul><li><code>VID_COMP</code>：视频理解</li><li><code>IMG_COMP</code>：图片理解</li><li><code>CONT_PERSON_MOTIONLESS</code>：静姿检测</li></ul><p>当 ServiceCategory 为 <code>HIGHLIGHT</code> 时，可选值包括：</p><ul><li><code>COMP_HIGHLIGHT</code>：视频浓缩</li></ul><p>当 ServiceCategory 为 <code>SUMMARIZATION</code> 时，可选值包括：</p><ul><li><code>DAILY_SUM</code>：每日总结</li><li><code>WEEKLY_SUM</code>：每周总结</li></ul>
     * @param integer $StartTimeMs <p>查询任务时间范围的起始时间（毫秒级 UNIX 时间戳）。不传则不生效时间范围条件。</p>
     * @param integer $Status <p>要查询的任务的状态条件。不传则不按照状态过滤，可选值：</p><ul><li><code>1</code>：失败</li><li><code>2</code>：空结果</li><li><code>3</code>：有效结果</li></ul>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ServiceCategory",$param) and $param["ServiceCategory"] !== null) {
            $this->ServiceCategory = $param["ServiceCategory"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("EndTimeMs",$param) and $param["EndTimeMs"] !== null) {
            $this->EndTimeMs = $param["EndTimeMs"];
        }

        if (array_key_exists("FileURLExpireTime",$param) and $param["FileURLExpireTime"] !== null) {
            $this->FileURLExpireTime = $param["FileURLExpireTime"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new VisionRecognitionTaskFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ServiceTypes",$param) and $param["ServiceTypes"] !== null) {
            $this->ServiceTypes = $param["ServiceTypes"];
        }

        if (array_key_exists("StartTimeMs",$param) and $param["StartTimeMs"] !== null) {
            $this->StartTimeMs = $param["StartTimeMs"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
