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
 * @method string getTaskType() 获取<p>预热任务类型，枚举值，MetadataLoad｜DistributedLoad。</p>
 * @method void setTaskType(string $TaskType) 设置<p>预热任务类型，枚举值，MetadataLoad｜DistributedLoad。</p>
 * @method integer getPriority() 获取<p>任务优先级，数值越高代表优先级越高，边界值 1-9999，默认值为 1</p>
 * @method void setPriority(integer $Priority) 设置<p>任务优先级，数值越高代表优先级越高，边界值 1-9999，默认值为 1</p>
 * @method string getDescription() 获取<p>任务描述，支持中文</p>
 * @method void setDescription(string $Description) 设置<p>任务描述，支持中文</p>
 * @method MetadataLoadAttrs getMetadataLoadAttrs() 获取<p>元数据预热任务参数，用于仅预热元数据时入参。入参数TaskType为MetadataLoad时，该参数不应为空。</p>
 * @method void setMetadataLoadAttrs(MetadataLoadAttrs $MetadataLoadAttrs) 设置<p>元数据预热任务参数，用于仅预热元数据时入参。入参数TaskType为MetadataLoad时，该参数不应为空。</p>
 * @method DistributedLoadAttrs getDistributedLoadAttrs() 获取<p>数据预热任务参数。入参数TaskType为DistributedLoad时，该参数不应为空。</p>
 * @method void setDistributedLoadAttrs(DistributedLoadAttrs $DistributedLoadAttrs) 设置<p>数据预热任务参数。入参数TaskType为DistributedLoad时，该参数不应为空。</p>
 * @method string getReportPath() 获取<p>将任务执行报告写入 COS 的路径，如果不需要报告则入参空</p>
 * @method void setReportPath(string $ReportPath) 设置<p>将任务执行报告写入 COS 的路径，如果不需要报告则入参空</p>
 * @method LoadDataAttrs getLoadDataAttrs() 获取<p>仅预热数据任务参数。入参数TaskType为LoadData时，该参数不应为空。</p>
 * @method void setLoadDataAttrs(LoadDataAttrs $LoadDataAttrs) 设置<p>仅预热数据任务参数。入参数TaskType为LoadData时，该参数不应为空。</p>
 */
class LoadTaskCreationAttrs extends AbstractModel
{
    /**
     * @var string <p>预热任务类型，枚举值，MetadataLoad｜DistributedLoad。</p>
     */
    public $TaskType;

    /**
     * @var integer <p>任务优先级，数值越高代表优先级越高，边界值 1-9999，默认值为 1</p>
     */
    public $Priority;

    /**
     * @var string <p>任务描述，支持中文</p>
     */
    public $Description;

    /**
     * @var MetadataLoadAttrs <p>元数据预热任务参数，用于仅预热元数据时入参。入参数TaskType为MetadataLoad时，该参数不应为空。</p>
     */
    public $MetadataLoadAttrs;

    /**
     * @var DistributedLoadAttrs <p>数据预热任务参数。入参数TaskType为DistributedLoad时，该参数不应为空。</p>
     */
    public $DistributedLoadAttrs;

    /**
     * @var string <p>将任务执行报告写入 COS 的路径，如果不需要报告则入参空</p>
     */
    public $ReportPath;

    /**
     * @var LoadDataAttrs <p>仅预热数据任务参数。入参数TaskType为LoadData时，该参数不应为空。</p>
     */
    public $LoadDataAttrs;

    /**
     * @param string $TaskType <p>预热任务类型，枚举值，MetadataLoad｜DistributedLoad。</p>
     * @param integer $Priority <p>任务优先级，数值越高代表优先级越高，边界值 1-9999，默认值为 1</p>
     * @param string $Description <p>任务描述，支持中文</p>
     * @param MetadataLoadAttrs $MetadataLoadAttrs <p>元数据预热任务参数，用于仅预热元数据时入参。入参数TaskType为MetadataLoad时，该参数不应为空。</p>
     * @param DistributedLoadAttrs $DistributedLoadAttrs <p>数据预热任务参数。入参数TaskType为DistributedLoad时，该参数不应为空。</p>
     * @param string $ReportPath <p>将任务执行报告写入 COS 的路径，如果不需要报告则入参空</p>
     * @param LoadDataAttrs $LoadDataAttrs <p>仅预热数据任务参数。入参数TaskType为LoadData时，该参数不应为空。</p>
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

        if (array_key_exists("LoadDataAttrs",$param) and $param["LoadDataAttrs"] !== null) {
            $this->LoadDataAttrs = new LoadDataAttrs();
            $this->LoadDataAttrs->deserialize($param["LoadDataAttrs"]);
        }
    }
}
