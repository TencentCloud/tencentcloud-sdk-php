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
 *  点播转直播项目状态变更事件。
 *
 * @method string getProjectId() 获取项目 Id。
 * @method void setProjectId(string $ProjectId) 设置项目 Id。
 * @method string getStatus() 获取项目状态，取值有：
<li>Started：点播转直播开始；</li>
<li>Stopped：点播转直播结束；</li>
<li>SourceInterrupted：点播转直播输入断流；</li>
<li>DestinationInterrupted：点播转直播输出断流。</li>
 * @method void setStatus(string $Status) 设置项目状态，取值有：
<li>Started：点播转直播开始；</li>
<li>Stopped：点播转直播结束；</li>
<li>SourceInterrupted：点播转直播输入断流；</li>
<li>DestinationInterrupted：点播转直播输出断流。</li>
 * @method MediaCastSourceInterruptInfo getSourceInterruptInfo() 获取点播转直播输入断流信息，仅当 Status 取值 SourceInterrupted 时有效。
 * @method void setSourceInterruptInfo(MediaCastSourceInterruptInfo $SourceInterruptInfo) 设置点播转直播输入断流信息，仅当 Status 取值 SourceInterrupted 时有效。
 * @method MediaCastDestinationInterruptInfo getDestinationInterruptInfo() 获取点播转直播输出断流信息，仅当 Status 取值 DestinationInterrupted 时有效。
 * @method void setDestinationInterruptInfo(MediaCastDestinationInterruptInfo $DestinationInterruptInfo) 设置点播转直播输出断流信息，仅当 Status 取值 DestinationInterrupted 时有效。
 */
class ProjectMediaCastStatusChangedEvent extends AbstractModel
{
    /**
     * @var string 项目 Id。
     */
    public $ProjectId;

    /**
     * @var string 项目状态，取值有：
<li>Started：点播转直播开始；</li>
<li>Stopped：点播转直播结束；</li>
<li>SourceInterrupted：点播转直播输入断流；</li>
<li>DestinationInterrupted：点播转直播输出断流。</li>
     */
    public $Status;

    /**
     * @var MediaCastSourceInterruptInfo 点播转直播输入断流信息，仅当 Status 取值 SourceInterrupted 时有效。
     */
    public $SourceInterruptInfo;

    /**
     * @var MediaCastDestinationInterruptInfo 点播转直播输出断流信息，仅当 Status 取值 DestinationInterrupted 时有效。
     */
    public $DestinationInterruptInfo;

    /**
     * @param string $ProjectId 项目 Id。
     * @param string $Status 项目状态，取值有：
<li>Started：点播转直播开始；</li>
<li>Stopped：点播转直播结束；</li>
<li>SourceInterrupted：点播转直播输入断流；</li>
<li>DestinationInterrupted：点播转直播输出断流。</li>
     * @param MediaCastSourceInterruptInfo $SourceInterruptInfo 点播转直播输入断流信息，仅当 Status 取值 SourceInterrupted 时有效。
     * @param MediaCastDestinationInterruptInfo $DestinationInterruptInfo 点播转直播输出断流信息，仅当 Status 取值 DestinationInterrupted 时有效。
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

        if (array_key_exists("SourceInterruptInfo",$param) and $param["SourceInterruptInfo"] !== null) {
            $this->SourceInterruptInfo = new MediaCastSourceInterruptInfo();
            $this->SourceInterruptInfo->deserialize($param["SourceInterruptInfo"]);
        }

        if (array_key_exists("DestinationInterruptInfo",$param) and $param["DestinationInterruptInfo"] !== null) {
            $this->DestinationInterruptInfo = new MediaCastDestinationInterruptInfo();
            $this->DestinationInterruptInfo->deserialize($param["DestinationInterruptInfo"]);
        }
    }
}
