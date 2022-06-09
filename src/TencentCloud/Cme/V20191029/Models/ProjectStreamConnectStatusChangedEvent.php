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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云转推项目状态变更事件。
 *
 * @method string getProjectId() 获取项目 Id。
 * @method void setProjectId(string $ProjectId) 设置项目 Id。
 * @method string getStatus() 获取项目状态，取值有：
<li>Working：云转推推流开始；</li>
<li>Stopped：云转推推流结束；</li>
<li>InputInterrupted：云转推输入断流；</li>
<li>OutputInterrupted：云转推输出断流。</li>
 * @method void setStatus(string $Status) 设置项目状态，取值有：
<li>Working：云转推推流开始；</li>
<li>Stopped：云转推推流结束；</li>
<li>InputInterrupted：云转推输入断流；</li>
<li>OutputInterrupted：云转推输出断流。</li>
 * @method StreamConnectInputInterruptInfo getInputInterruptInfo() 获取云转推输入断流信息，仅当 Status 取值 InputInterrupted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputInterruptInfo(StreamConnectInputInterruptInfo $InputInterruptInfo) 设置云转推输入断流信息，仅当 Status 取值 InputInterrupted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method StreamConnectOutputInterruptInfo getOutputInterruptInfo() 获取云转推输出断流信息，仅当 Status 取值 OutputInterrupted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputInterruptInfo(StreamConnectOutputInterruptInfo $OutputInterruptInfo) 设置云转推输出断流信息，仅当 Status 取值 OutputInterrupted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProjectStreamConnectStatusChangedEvent extends AbstractModel
{
    /**
     * @var string 项目 Id。
     */
    public $ProjectId;

    /**
     * @var string 项目状态，取值有：
<li>Working：云转推推流开始；</li>
<li>Stopped：云转推推流结束；</li>
<li>InputInterrupted：云转推输入断流；</li>
<li>OutputInterrupted：云转推输出断流。</li>
     */
    public $Status;

    /**
     * @var StreamConnectInputInterruptInfo 云转推输入断流信息，仅当 Status 取值 InputInterrupted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputInterruptInfo;

    /**
     * @var StreamConnectOutputInterruptInfo 云转推输出断流信息，仅当 Status 取值 OutputInterrupted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputInterruptInfo;

    /**
     * @param string $ProjectId 项目 Id。
     * @param string $Status 项目状态，取值有：
<li>Working：云转推推流开始；</li>
<li>Stopped：云转推推流结束；</li>
<li>InputInterrupted：云转推输入断流；</li>
<li>OutputInterrupted：云转推输出断流。</li>
     * @param StreamConnectInputInterruptInfo $InputInterruptInfo 云转推输入断流信息，仅当 Status 取值 InputInterrupted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param StreamConnectOutputInterruptInfo $OutputInterruptInfo 云转推输出断流信息，仅当 Status 取值 OutputInterrupted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InputInterruptInfo",$param) and $param["InputInterruptInfo"] !== null) {
            $this->InputInterruptInfo = new StreamConnectInputInterruptInfo();
            $this->InputInterruptInfo->deserialize($param["InputInterruptInfo"]);
        }

        if (array_key_exists("OutputInterruptInfo",$param) and $param["OutputInterruptInfo"] !== null) {
            $this->OutputInterruptInfo = new StreamConnectOutputInterruptInfo();
            $this->OutputInterruptInfo->deserialize($param["OutputInterruptInfo"]);
        }
    }
}
