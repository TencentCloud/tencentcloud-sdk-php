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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 该channel下面Program的调度信息。
 *
 * @method string getProgramName() 获取<p>program名称。</p>
 * @method void setProgramName(string $ProgramName) 设置<p>program名称。</p>
 * @method string getProgramId() 获取<p>program id。</p>
 * @method void setProgramId(string $ProgramId) 设置<p>program id。</p>
 * @method string getSourceType() 获取<p>source类型。</p>
 * @method void setSourceType(string $SourceType) 设置<p>source类型。</p>
 * @method string getSourceId() 获取<p>source id。</p>
 * @method void setSourceId(string $SourceId) 设置<p>source id。</p>
 * @method string getSourceLocationId() 获取<p>source location的id。</p>
 * @method void setSourceLocationId(string $SourceLocationId) 设置<p>source location的id。</p>
 * @method integer getStartTime() 获取<p>开始时间戳。</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间戳。</p>
 * @method string getDuration() 获取<p>持续时长。</p>
 * @method void setDuration(string $Duration) 设置<p>持续时长。</p>
 */
class ProgramScheduleInfo extends AbstractModel
{
    /**
     * @var string <p>program名称。</p>
     */
    public $ProgramName;

    /**
     * @var string <p>program id。</p>
     */
    public $ProgramId;

    /**
     * @var string <p>source类型。</p>
     */
    public $SourceType;

    /**
     * @var string <p>source id。</p>
     */
    public $SourceId;

    /**
     * @var string <p>source location的id。</p>
     */
    public $SourceLocationId;

    /**
     * @var integer <p>开始时间戳。</p>
     */
    public $StartTime;

    /**
     * @var string <p>持续时长。</p>
     */
    public $Duration;

    /**
     * @param string $ProgramName <p>program名称。</p>
     * @param string $ProgramId <p>program id。</p>
     * @param string $SourceType <p>source类型。</p>
     * @param string $SourceId <p>source id。</p>
     * @param string $SourceLocationId <p>source location的id。</p>
     * @param integer $StartTime <p>开始时间戳。</p>
     * @param string $Duration <p>持续时长。</p>
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
        if (array_key_exists("ProgramName",$param) and $param["ProgramName"] !== null) {
            $this->ProgramName = $param["ProgramName"];
        }

        if (array_key_exists("ProgramId",$param) and $param["ProgramId"] !== null) {
            $this->ProgramId = $param["ProgramId"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("SourceLocationId",$param) and $param["SourceLocationId"] !== null) {
            $this->SourceLocationId = $param["SourceLocationId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
