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
 * 导播台项目状态变更事件
 *
 * @method string getProjectId() 获取导播台项目 Id。
 * @method void setProjectId(string $ProjectId) 设置导播台项目 Id。
 * @method string getStatus() 获取导播台项目状态，可取值有：
<li>Started：导播台启动；</li>
<li>Stopped：导播台停止；</li>
<li>PvwStarted：导播台 PVW 开启；</li>
<li>PgmStarted：导播台 PGM 开启，输出推流开始；</li>
<li>PvwStopped：导播台 PVW 停止；</li>
<li>PgmStopped：导播台 PGM 停止，输出推流结束。</li>
 * @method void setStatus(string $Status) 设置导播台项目状态，可取值有：
<li>Started：导播台启动；</li>
<li>Stopped：导播台停止；</li>
<li>PvwStarted：导播台 PVW 开启；</li>
<li>PgmStarted：导播台 PGM 开启，输出推流开始；</li>
<li>PvwStopped：导播台 PVW 停止；</li>
<li>PgmStopped：导播台 PGM 停止，输出推流结束。</li>
 */
class ProjectSwitcherStatusChangedEvent extends AbstractModel
{
    /**
     * @var string 导播台项目 Id。
     */
    public $ProjectId;

    /**
     * @var string 导播台项目状态，可取值有：
<li>Started：导播台启动；</li>
<li>Stopped：导播台停止；</li>
<li>PvwStarted：导播台 PVW 开启；</li>
<li>PgmStarted：导播台 PGM 开启，输出推流开始；</li>
<li>PvwStopped：导播台 PVW 停止；</li>
<li>PgmStopped：导播台 PGM 停止，输出推流结束。</li>
     */
    public $Status;

    /**
     * @param string $ProjectId 导播台项目 Id。
     * @param string $Status 导播台项目状态，可取值有：
<li>Started：导播台启动；</li>
<li>Stopped：导播台停止；</li>
<li>PvwStarted：导播台 PVW 开启；</li>
<li>PgmStarted：导播台 PGM 开启，输出推流开始；</li>
<li>PvwStopped：导播台 PVW 停止；</li>
<li>PgmStopped：导播台 PGM 停止，输出推流结束。</li>
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
    }
}
