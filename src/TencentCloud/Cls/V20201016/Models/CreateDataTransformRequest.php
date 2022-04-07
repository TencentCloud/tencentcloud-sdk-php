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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDataTransform请求参数结构体
 *
 * @method integer getFuncType() 获取函数类型. DSL:1 SQL:2
 * @method void setFuncType(integer $FuncType) 设置函数类型. DSL:1 SQL:2
 * @method string getSrcTopicId() 获取源日志主题
 * @method void setSrcTopicId(string $SrcTopicId) 设置源日志主题
 * @method string getName() 获取加工任务名称
 * @method void setName(string $Name) 设置加工任务名称
 * @method string getEtlContent() 获取加工逻辑函数
 * @method void setEtlContent(string $EtlContent) 设置加工逻辑函数
 * @method array getDstResources() 获取加工任务目的topic_id以及别名
 * @method void setDstResources(array $DstResources) 设置加工任务目的topic_id以及别名
 * @method integer getTaskType() 获取任务类型.  以SrcTopicId为数据源建立预览任务:1，以PreviewLogStatistics为数据源建立预览任务:2  真实任务:3
 * @method void setTaskType(integer $TaskType) 设置任务类型.  以SrcTopicId为数据源建立预览任务:1，以PreviewLogStatistics为数据源建立预览任务:2  真实任务:3
 * @method integer getEnableFlag() 获取任务启动状态.   默认为1，正常开启,  2关闭
 * @method void setEnableFlag(integer $EnableFlag) 设置任务启动状态.   默认为1，正常开启,  2关闭
 * @method array getPreviewLogStatistics() 获取测试数据
 * @method void setPreviewLogStatistics(array $PreviewLogStatistics) 设置测试数据
 */
class CreateDataTransformRequest extends AbstractModel
{
    /**
     * @var integer 函数类型. DSL:1 SQL:2
     */
    public $FuncType;

    /**
     * @var string 源日志主题
     */
    public $SrcTopicId;

    /**
     * @var string 加工任务名称
     */
    public $Name;

    /**
     * @var string 加工逻辑函数
     */
    public $EtlContent;

    /**
     * @var array 加工任务目的topic_id以及别名
     */
    public $DstResources;

    /**
     * @var integer 任务类型.  以SrcTopicId为数据源建立预览任务:1，以PreviewLogStatistics为数据源建立预览任务:2  真实任务:3
     */
    public $TaskType;

    /**
     * @var integer 任务启动状态.   默认为1，正常开启,  2关闭
     */
    public $EnableFlag;

    /**
     * @var array 测试数据
     */
    public $PreviewLogStatistics;

    /**
     * @param integer $FuncType 函数类型. DSL:1 SQL:2
     * @param string $SrcTopicId 源日志主题
     * @param string $Name 加工任务名称
     * @param string $EtlContent 加工逻辑函数
     * @param array $DstResources 加工任务目的topic_id以及别名
     * @param integer $TaskType 任务类型.  以SrcTopicId为数据源建立预览任务:1，以PreviewLogStatistics为数据源建立预览任务:2  真实任务:3
     * @param integer $EnableFlag 任务启动状态.   默认为1，正常开启,  2关闭
     * @param array $PreviewLogStatistics 测试数据
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
        if (array_key_exists("FuncType",$param) and $param["FuncType"] !== null) {
            $this->FuncType = $param["FuncType"];
        }

        if (array_key_exists("SrcTopicId",$param) and $param["SrcTopicId"] !== null) {
            $this->SrcTopicId = $param["SrcTopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EtlContent",$param) and $param["EtlContent"] !== null) {
            $this->EtlContent = $param["EtlContent"];
        }

        if (array_key_exists("DstResources",$param) and $param["DstResources"] !== null) {
            $this->DstResources = [];
            foreach ($param["DstResources"] as $key => $value){
                $obj = new DataTransformResouceInfo();
                $obj->deserialize($value);
                array_push($this->DstResources, $obj);
            }
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("PreviewLogStatistics",$param) and $param["PreviewLogStatistics"] !== null) {
            $this->PreviewLogStatistics = [];
            foreach ($param["PreviewLogStatistics"] as $key => $value){
                $obj = new PreviewLogStatistic();
                $obj->deserialize($value);
                array_push($this->PreviewLogStatistics, $obj);
            }
        }
    }
}
