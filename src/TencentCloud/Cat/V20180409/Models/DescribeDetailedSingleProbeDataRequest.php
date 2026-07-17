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
 * DescribeDetailedSingleProbeData请求参数结构体
 *
 * @method integer getBeginTime() 获取<p>开始时间戳（毫秒级）</p>
 * @method void setBeginTime(integer $BeginTime) 设置<p>开始时间戳（毫秒级）</p>
 * @method integer getEndTime() 获取<p>结束时间戳（毫秒级）</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间戳（毫秒级）</p>
 * @method string getTaskType() 获取<p>任务类型<br>AnalyzeTaskType_Network：网络质量<br>AnalyzeTaskType_Browse：页面性能<br>AnalyzeTaskType_UploadDownload：文件传输（含文件上传、文件下载）<br>AnalyzeTaskType_Transport：端口性能<br>AnalyzeTaskType_MediaStream：音视频体验</p>
 * @method void setTaskType(string $TaskType) 设置<p>任务类型<br>AnalyzeTaskType_Network：网络质量<br>AnalyzeTaskType_Browse：页面性能<br>AnalyzeTaskType_UploadDownload：文件传输（含文件上传、文件下载）<br>AnalyzeTaskType_Transport：端口性能<br>AnalyzeTaskType_MediaStream：音视频体验</p>
 * @method string getSortField() 获取<p>待排序字段<br>可以填写 ProbeTime 拨测时间排序<br>也可填写SelectedFields 中的选中字段</p>
 * @method void setSortField(string $SortField) 设置<p>待排序字段<br>可以填写 ProbeTime 拨测时间排序<br>也可填写SelectedFields 中的选中字段</p>
 * @method boolean getAscending() 获取<p>true表示升序</p>
 * @method void setAscending(boolean $Ascending) 设置<p>true表示升序</p>
 * @method array getSelectedFields() 获取<p>选中字段，如ProbeTime、TransferTime、TransferSize等。</p>
 * @method void setSelectedFields(array $SelectedFields) 设置<p>选中字段，如ProbeTime、TransferTime、TransferSize等。</p>
 * @method integer getOffset() 获取<p>起始取数位置</p>
 * @method void setOffset(integer $Offset) 设置<p>起始取数位置</p>
 * @method integer getLimit() 获取<p>取数数量</p>
 * @method void setLimit(integer $Limit) 设置<p>取数数量</p>
 * @method array getTaskID() 获取<p>任务ID</p>
 * @method void setTaskID(array $TaskID) 设置<p>任务ID</p>
 * @method array getOperators() 获取<p>拨测点运营商</p><p>这里实际按拨测结果中的运营商来填写即可</p><p>电信：中国电信<br>移动：中国移动<br>联通：中国联通</p>
 * @method void setOperators(array $Operators) 设置<p>拨测点运营商</p><p>这里实际按拨测结果中的运营商来填写即可</p><p>电信：中国电信<br>移动：中国移动<br>联通：中国联通</p>
 * @method array getDistricts() 获取<p>拨测点地区</p><p>这里实际按拨测结果中的地区来填写即可</p><p>国内一般是省级单位，如广东、广西、中国香港；直辖市则填北京、上海</p><p>境外一般是国家名，如澳大利亚、新加坡</p>
 * @method void setDistricts(array $Districts) 设置<p>拨测点地区</p><p>这里实际按拨测结果中的地区来填写即可</p><p>国内一般是省级单位，如广东、广西、中国香港；直辖市则填北京、上海</p><p>境外一般是国家名，如澳大利亚、新加坡</p>
 * @method array getErrorTypes() 获取<p>错误类型</p>
 * @method void setErrorTypes(array $ErrorTypes) 设置<p>错误类型</p>
 * @method array getCity() 获取<p>城市<br>这里实际按拨测结果中的城市来填写即可</p><p>示例：</p><p>深圳市<br>武汉市<br>首尔<br>多伦多</p>
 * @method void setCity(array $City) 设置<p>城市<br>这里实际按拨测结果中的城市来填写即可</p><p>示例：</p><p>深圳市<br>武汉市<br>首尔<br>多伦多</p>
 * @method string getScrollID() 获取<p>es scroll查询id</p>
 * @method void setScrollID(string $ScrollID) 设置<p>es scroll查询id</p>
 * @method string getQueryFlag() 获取<p>详情数据下载</p>
 * @method void setQueryFlag(string $QueryFlag) 设置<p>详情数据下载</p>
 */
class DescribeDetailedSingleProbeDataRequest extends AbstractModel
{
    /**
     * @var integer <p>开始时间戳（毫秒级）</p>
     */
    public $BeginTime;

    /**
     * @var integer <p>结束时间戳（毫秒级）</p>
     */
    public $EndTime;

    /**
     * @var string <p>任务类型<br>AnalyzeTaskType_Network：网络质量<br>AnalyzeTaskType_Browse：页面性能<br>AnalyzeTaskType_UploadDownload：文件传输（含文件上传、文件下载）<br>AnalyzeTaskType_Transport：端口性能<br>AnalyzeTaskType_MediaStream：音视频体验</p>
     */
    public $TaskType;

    /**
     * @var string <p>待排序字段<br>可以填写 ProbeTime 拨测时间排序<br>也可填写SelectedFields 中的选中字段</p>
     */
    public $SortField;

    /**
     * @var boolean <p>true表示升序</p>
     */
    public $Ascending;

    /**
     * @var array <p>选中字段，如ProbeTime、TransferTime、TransferSize等。</p>
     */
    public $SelectedFields;

    /**
     * @var integer <p>起始取数位置</p>
     */
    public $Offset;

    /**
     * @var integer <p>取数数量</p>
     */
    public $Limit;

    /**
     * @var array <p>任务ID</p>
     */
    public $TaskID;

    /**
     * @var array <p>拨测点运营商</p><p>这里实际按拨测结果中的运营商来填写即可</p><p>电信：中国电信<br>移动：中国移动<br>联通：中国联通</p>
     */
    public $Operators;

    /**
     * @var array <p>拨测点地区</p><p>这里实际按拨测结果中的地区来填写即可</p><p>国内一般是省级单位，如广东、广西、中国香港；直辖市则填北京、上海</p><p>境外一般是国家名，如澳大利亚、新加坡</p>
     */
    public $Districts;

    /**
     * @var array <p>错误类型</p>
     */
    public $ErrorTypes;

    /**
     * @var array <p>城市<br>这里实际按拨测结果中的城市来填写即可</p><p>示例：</p><p>深圳市<br>武汉市<br>首尔<br>多伦多</p>
     */
    public $City;

    /**
     * @var string <p>es scroll查询id</p>
     */
    public $ScrollID;

    /**
     * @var string <p>详情数据下载</p>
     */
    public $QueryFlag;

    /**
     * @param integer $BeginTime <p>开始时间戳（毫秒级）</p>
     * @param integer $EndTime <p>结束时间戳（毫秒级）</p>
     * @param string $TaskType <p>任务类型<br>AnalyzeTaskType_Network：网络质量<br>AnalyzeTaskType_Browse：页面性能<br>AnalyzeTaskType_UploadDownload：文件传输（含文件上传、文件下载）<br>AnalyzeTaskType_Transport：端口性能<br>AnalyzeTaskType_MediaStream：音视频体验</p>
     * @param string $SortField <p>待排序字段<br>可以填写 ProbeTime 拨测时间排序<br>也可填写SelectedFields 中的选中字段</p>
     * @param boolean $Ascending <p>true表示升序</p>
     * @param array $SelectedFields <p>选中字段，如ProbeTime、TransferTime、TransferSize等。</p>
     * @param integer $Offset <p>起始取数位置</p>
     * @param integer $Limit <p>取数数量</p>
     * @param array $TaskID <p>任务ID</p>
     * @param array $Operators <p>拨测点运营商</p><p>这里实际按拨测结果中的运营商来填写即可</p><p>电信：中国电信<br>移动：中国移动<br>联通：中国联通</p>
     * @param array $Districts <p>拨测点地区</p><p>这里实际按拨测结果中的地区来填写即可</p><p>国内一般是省级单位，如广东、广西、中国香港；直辖市则填北京、上海</p><p>境外一般是国家名，如澳大利亚、新加坡</p>
     * @param array $ErrorTypes <p>错误类型</p>
     * @param array $City <p>城市<br>这里实际按拨测结果中的城市来填写即可</p><p>示例：</p><p>深圳市<br>武汉市<br>首尔<br>多伦多</p>
     * @param string $ScrollID <p>es scroll查询id</p>
     * @param string $QueryFlag <p>详情数据下载</p>
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("SortField",$param) and $param["SortField"] !== null) {
            $this->SortField = $param["SortField"];
        }

        if (array_key_exists("Ascending",$param) and $param["Ascending"] !== null) {
            $this->Ascending = $param["Ascending"];
        }

        if (array_key_exists("SelectedFields",$param) and $param["SelectedFields"] !== null) {
            $this->SelectedFields = $param["SelectedFields"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("Operators",$param) and $param["Operators"] !== null) {
            $this->Operators = $param["Operators"];
        }

        if (array_key_exists("Districts",$param) and $param["Districts"] !== null) {
            $this->Districts = $param["Districts"];
        }

        if (array_key_exists("ErrorTypes",$param) and $param["ErrorTypes"] !== null) {
            $this->ErrorTypes = $param["ErrorTypes"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("ScrollID",$param) and $param["ScrollID"] !== null) {
            $this->ScrollID = $param["ScrollID"];
        }

        if (array_key_exists("QueryFlag",$param) and $param["QueryFlag"] !== null) {
            $this->QueryFlag = $param["QueryFlag"];
        }
    }
}
