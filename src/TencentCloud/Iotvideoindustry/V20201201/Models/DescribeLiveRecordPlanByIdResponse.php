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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveRecordPlanById返回参数结构体
 *
 * @method string getPlanName() 获取计划名称
 * @method void setPlanName(string $PlanName) 设置计划名称
 * @method string getTemplateId() 获取模板ID
 * @method void setTemplateId(string $TemplateId) 设置模板ID
 * @method string getTemplateName() 获取模板名称
 * @method void setTemplateName(string $TemplateName) 设置模板名称
 * @method integer getRecordStorageTime() 获取存储时间
 * @method void setRecordStorageTime(integer $RecordStorageTime) 设置存储时间
 * @method integer getPlanType() 获取计划类型
 * @method void setPlanType(integer $PlanType) 设置计划类型
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLiveRecordPlanByIdResponse extends AbstractModel
{
    /**
     * @var string 计划名称
     */
    public $PlanName;

    /**
     * @var string 模板ID
     */
    public $TemplateId;

    /**
     * @var string 模板名称
     */
    public $TemplateName;

    /**
     * @var integer 存储时间
     */
    public $RecordStorageTime;

    /**
     * @var integer 计划类型
     */
    public $PlanType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $PlanName 计划名称
     * @param string $TemplateId 模板ID
     * @param string $TemplateName 模板名称
     * @param integer $RecordStorageTime 存储时间
     * @param integer $PlanType 计划类型
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("RecordStorageTime",$param) and $param["RecordStorageTime"] !== null) {
            $this->RecordStorageTime = $param["RecordStorageTime"];
        }

        if (array_key_exists("PlanType",$param) and $param["PlanType"] !== null) {
            $this->PlanType = $param["PlanType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
