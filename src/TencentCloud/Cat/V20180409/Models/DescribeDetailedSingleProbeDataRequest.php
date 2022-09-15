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
 * DescribeDetailedSingleProbeData请求参数结构体
 *
 * @method integer getBeginTime() 获取开始时间戳（毫秒级）
 * @method void setBeginTime(integer $BeginTime) 设置开始时间戳（毫秒级）
 * @method integer getEndTime() 获取结束时间戳（毫秒级）
 * @method void setEndTime(integer $EndTime) 设置结束时间戳（毫秒级）
 * @method string getTaskType() 获取任务类型
AnalyzeTaskType_Network：网络质量
AnalyzeTaskType_Browse：页面性能
AnalyzeTaskType_UploadDownload：文件传输（含文件上传、文件下载）
AnalyzeTaskType_Transport：端口性能
AnalyzeTaskType_MediaStream：音视频体验
 * @method void setTaskType(string $TaskType) 设置任务类型
AnalyzeTaskType_Network：网络质量
AnalyzeTaskType_Browse：页面性能
AnalyzeTaskType_UploadDownload：文件传输（含文件上传、文件下载）
AnalyzeTaskType_Transport：端口性能
AnalyzeTaskType_MediaStream：音视频体验
 * @method string getSortField() 获取待排序字段
可以填写 ProbeTime 拨测时间排序
也可填写SelectedFields 中的选中字段
 * @method void setSortField(string $SortField) 设置待排序字段
可以填写 ProbeTime 拨测时间排序
也可填写SelectedFields 中的选中字段
 * @method boolean getAscending() 获取true表示升序
 * @method void setAscending(boolean $Ascending) 设置true表示升序
 * @method array getSelectedFields() 获取选中字段
 * @method void setSelectedFields(array $SelectedFields) 设置选中字段
 * @method integer getOffset() 获取起始取数位置
 * @method void setOffset(integer $Offset) 设置起始取数位置
 * @method integer getLimit() 获取取数数量
 * @method void setLimit(integer $Limit) 设置取数数量
 * @method array getTaskID() 获取任务ID
 * @method void setTaskID(array $TaskID) 设置任务ID
 * @method array getOperators() 获取拨测点运营商
	
这里实际按拨测结果中的运营商来填写即可

电信：中国电信
移动：中国移动
联通：中国联通
 * @method void setOperators(array $Operators) 设置拨测点运营商
	
这里实际按拨测结果中的运营商来填写即可

电信：中国电信
移动：中国移动
联通：中国联通
 * @method array getDistricts() 获取拨测点地区
	
这里实际按拨测结果中的地区来填写即可

国内一般是省级单位，如广东、广西、中国香港、新疆；直辖市则填北京、上海

境外一般是国家名，如澳大利亚、新加坡
 * @method void setDistricts(array $Districts) 设置拨测点地区
	
这里实际按拨测结果中的地区来填写即可

国内一般是省级单位，如广东、广西、中国香港、新疆；直辖市则填北京、上海

境外一般是国家名，如澳大利亚、新加坡
 * @method array getErrorTypes() 获取错误类型
 * @method void setErrorTypes(array $ErrorTypes) 设置错误类型
 * @method array getCity() 获取城市
这里实际按拨测结果中的城市来填写即可

示例：

深圳市
武汉市
首尔
多伦多
 * @method void setCity(array $City) 设置城市
这里实际按拨测结果中的城市来填写即可

示例：

深圳市
武汉市
首尔
多伦多
 */
class DescribeDetailedSingleProbeDataRequest extends AbstractModel
{
    /**
     * @var integer 开始时间戳（毫秒级）
     */
    public $BeginTime;

    /**
     * @var integer 结束时间戳（毫秒级）
     */
    public $EndTime;

    /**
     * @var string 任务类型
AnalyzeTaskType_Network：网络质量
AnalyzeTaskType_Browse：页面性能
AnalyzeTaskType_UploadDownload：文件传输（含文件上传、文件下载）
AnalyzeTaskType_Transport：端口性能
AnalyzeTaskType_MediaStream：音视频体验
     */
    public $TaskType;

    /**
     * @var string 待排序字段
可以填写 ProbeTime 拨测时间排序
也可填写SelectedFields 中的选中字段
     */
    public $SortField;

    /**
     * @var boolean true表示升序
     */
    public $Ascending;

    /**
     * @var array 选中字段
     */
    public $SelectedFields;

    /**
     * @var integer 起始取数位置
     */
    public $Offset;

    /**
     * @var integer 取数数量
     */
    public $Limit;

    /**
     * @var array 任务ID
     */
    public $TaskID;

    /**
     * @var array 拨测点运营商
	
这里实际按拨测结果中的运营商来填写即可

电信：中国电信
移动：中国移动
联通：中国联通
     */
    public $Operators;

    /**
     * @var array 拨测点地区
	
这里实际按拨测结果中的地区来填写即可

国内一般是省级单位，如广东、广西、中国香港、新疆；直辖市则填北京、上海

境外一般是国家名，如澳大利亚、新加坡
     */
    public $Districts;

    /**
     * @var array 错误类型
     */
    public $ErrorTypes;

    /**
     * @var array 城市
这里实际按拨测结果中的城市来填写即可

示例：

深圳市
武汉市
首尔
多伦多
     */
    public $City;

    /**
     * @param integer $BeginTime 开始时间戳（毫秒级）
     * @param integer $EndTime 结束时间戳（毫秒级）
     * @param string $TaskType 任务类型
AnalyzeTaskType_Network：网络质量
AnalyzeTaskType_Browse：页面性能
AnalyzeTaskType_UploadDownload：文件传输（含文件上传、文件下载）
AnalyzeTaskType_Transport：端口性能
AnalyzeTaskType_MediaStream：音视频体验
     * @param string $SortField 待排序字段
可以填写 ProbeTime 拨测时间排序
也可填写SelectedFields 中的选中字段
     * @param boolean $Ascending true表示升序
     * @param array $SelectedFields 选中字段
     * @param integer $Offset 起始取数位置
     * @param integer $Limit 取数数量
     * @param array $TaskID 任务ID
     * @param array $Operators 拨测点运营商
	
这里实际按拨测结果中的运营商来填写即可

电信：中国电信
移动：中国移动
联通：中国联通
     * @param array $Districts 拨测点地区
	
这里实际按拨测结果中的地区来填写即可

国内一般是省级单位，如广东、广西、中国香港、新疆；直辖市则填北京、上海

境外一般是国家名，如澳大利亚、新加坡
     * @param array $ErrorTypes 错误类型
     * @param array $City 城市
这里实际按拨测结果中的城市来填写即可

示例：

深圳市
武汉市
首尔
多伦多
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
    }
}
