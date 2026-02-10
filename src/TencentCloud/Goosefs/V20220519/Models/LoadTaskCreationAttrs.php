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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建预热任务
 *
 * @method string getTaskType() 获取预热任务类型，枚举值，MetadataLoad｜DistributedLoad。
 * @method void setTaskType(string $TaskType) 设置预热任务类型，枚举值，MetadataLoad｜DistributedLoad。
 * @method integer getPriority() 获取任务优先级，数值越高代表优先级越高，边界值 1-9999，默认值为 1
 * @method void setPriority(integer $Priority) 设置任务优先级，数值越高代表优先级越高，边界值 1-9999，默认值为 1
 * @method string getDescription() 获取任务描述，支持中文
 * @method void setDescription(string $Description) 设置任务描述，支持中文
 * @method MetadataLoadAttrs getMetadataLoadAttrs() 获取元数据预热任务参数，用于仅预热元数据时入参。入参数TaskType为MetadataLoad时，该参数不应为空。
 * @method void setMetadataLoadAttrs(MetadataLoadAttrs $MetadataLoadAttrs) 设置元数据预热任务参数，用于仅预热元数据时入参。入参数TaskType为MetadataLoad时，该参数不应为空。
 * @method DistributedLoadAttrs getDistributedLoadAttrs() 获取数据预热任务参数。入参数TaskType为DistributedLoad时，该参数不应为空。
 * @method void setDistributedLoadAttrs(DistributedLoadAttrs $DistributedLoadAttrs) 设置数据预热任务参数。入参数TaskType为DistributedLoad时，该参数不应为空。
 * @method string getReportPath() 获取将任务执行报告写入 COS 的路径，如果不需要报告则入参空
 * @method void setReportPath(string $ReportPath) 设置将任务执行报告写入 COS 的路径，如果不需要报告则入参空
 */
class LoadTaskCreationAttrs extends AbstractModel
{
    /**
     * @var string 预热任务类型，枚举值，MetadataLoad｜DistributedLoad。
     */
    public $TaskType;

    /**
     * @var integer 任务优先级，数值越高代表优先级越高，边界值 1-9999，默认值为 1
     */
    public $Priority;

    /**
     * @var string 任务描述，支持中文
     */
    public $Description;

    /**
     * @var MetadataLoadAttrs 元数据预热任务参数，用于仅预热元数据时入参。入参数TaskType为MetadataLoad时，该参数不应为空。
     */
    public $MetadataLoadAttrs;

    /**
     * @var DistributedLoadAttrs 数据预热任务参数。入参数TaskType为DistributedLoad时，该参数不应为空。
     */
    public $DistributedLoadAttrs;

    /**
     * @var string 将任务执行报告写入 COS 的路径，如果不需要报告则入参空
     */
    public $ReportPath;

    /**
     * @param string $TaskType 预热任务类型，枚举值，MetadataLoad｜DistributedLoad。
     * @param integer $Priority 任务优先级，数值越高代表优先级越高，边界值 1-9999，默认值为 1
     * @param string $Description 任务描述，支持中文
     * @param MetadataLoadAttrs $MetadataLoadAttrs 元数据预热任务参数，用于仅预热元数据时入参。入参数TaskType为MetadataLoad时，该参数不应为空。
     * @param DistributedLoadAttrs $DistributedLoadAttrs 数据预热任务参数。入参数TaskType为DistributedLoad时，该参数不应为空。
     * @param string $ReportPath 将任务执行报告写入 COS 的路径，如果不需要报告则入参空
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MetadataLoadAttrs",$param) and $param["MetadataLoadAttrs"] !== null) {
            $this->MetadataLoadAttrs = new MetadataLoadAttrs();
            $this->MetadataLoadAttrs->deserialize($param["MetadataLoadAttrs"]);
        }

        if (array_key_exists("DistributedLoadAttrs",$param) and $param["DistributedLoadAttrs"] !== null) {
            $this->DistributedLoadAttrs = new DistributedLoadAttrs();
            $this->DistributedLoadAttrs->deserialize($param["DistributedLoadAttrs"]);
        }

        if (array_key_exists("ReportPath",$param) and $param["ReportPath"] !== null) {
            $this->ReportPath = $param["ReportPath"];
        }
    }
}
