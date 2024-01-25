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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateBatchTaskParameter请求参数结构体
 *
 * @method array getTaskIds() 获取1
 * @method void setTaskIds(array $TaskIds) 设置1
 * @method UpdateBatchTaskParameterDTO getDlcParameterInfo() 获取DLC任务参数
 * @method void setDlcParameterInfo(UpdateBatchTaskParameterDTO $DlcParameterInfo) 设置DLC任务参数
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method TCHouseXTaskParameter getTCHouseXTaskParameter() 获取TCHouse-X任务参数
 * @method void setTCHouseXTaskParameter(TCHouseXTaskParameter $TCHouseXTaskParameter) 设置TCHouse-X任务参数
 * @method SparkParameterDTO getSparkParameterInfo() 获取SparkSQL或者PySpark任务参数
 * @method void setSparkParameterInfo(SparkParameterDTO $SparkParameterInfo) 设置SparkSQL或者PySpark任务参数
 */
class UpdateBatchTaskParameterRequest extends AbstractModel
{
    /**
     * @var array 1
     */
    public $TaskIds;

    /**
     * @var UpdateBatchTaskParameterDTO DLC任务参数
     */
    public $DlcParameterInfo;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var TCHouseXTaskParameter TCHouse-X任务参数
     */
    public $TCHouseXTaskParameter;

    /**
     * @var SparkParameterDTO SparkSQL或者PySpark任务参数
     */
    public $SparkParameterInfo;

    /**
     * @param array $TaskIds 1
     * @param UpdateBatchTaskParameterDTO $DlcParameterInfo DLC任务参数
     * @param string $ProjectId 项目ID
     * @param TCHouseXTaskParameter $TCHouseXTaskParameter TCHouse-X任务参数
     * @param SparkParameterDTO $SparkParameterInfo SparkSQL或者PySpark任务参数
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("DlcParameterInfo",$param) and $param["DlcParameterInfo"] !== null) {
            $this->DlcParameterInfo = new UpdateBatchTaskParameterDTO();
            $this->DlcParameterInfo->deserialize($param["DlcParameterInfo"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TCHouseXTaskParameter",$param) and $param["TCHouseXTaskParameter"] !== null) {
            $this->TCHouseXTaskParameter = new TCHouseXTaskParameter();
            $this->TCHouseXTaskParameter->deserialize($param["TCHouseXTaskParameter"]);
        }

        if (array_key_exists("SparkParameterInfo",$param) and $param["SparkParameterInfo"] !== null) {
            $this->SparkParameterInfo = new SparkParameterDTO();
            $this->SparkParameterInfo->deserialize($param["SparkParameterInfo"]);
        }
    }
}
