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
 * QueryWorkflowVersion返回参数结构体
 *
 * @method string getProjectId() 获取项目编号
 * @method void setProjectId(string $ProjectId) 设置项目编号
 * @method string getWorkflowId() 获取工作流编号
 * @method void setWorkflowId(string $WorkflowId) 设置工作流编号
 * @method array getVersionInfos() 获取版本信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionInfos(array $VersionInfos) 设置版本信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryWorkflowVersionResponse extends AbstractModel
{
    /**
     * @var string 项目编号
     */
    public $ProjectId;

    /**
     * @var string 工作流编号
     */
    public $WorkflowId;

    /**
     * @var array 版本信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionInfos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ProjectId 项目编号
     * @param string $WorkflowId 工作流编号
     * @param array $VersionInfos 版本信息列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("VersionInfos",$param) and $param["VersionInfos"] !== null) {
            $this->VersionInfos = [];
            foreach ($param["VersionInfos"] as $key => $value){
                $obj = new WorkflowVersionInfo();
                $obj->deserialize($value);
                array_push($this->VersionInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
