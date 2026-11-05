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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库资源信息
 *
 * @method string getInstanceId() 获取<p>数据库唯一标识</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>数据库唯一标识</p>
 * @method string getStatus() 获取<p>状态。包含以下取值：</p><li>INITIALIZING：资源初始化中</li><li>RUNNING：运行中，可正常使用的状态</li><li>UNUSABLE：禁用，不可用</li><li>OVERDUE：资源过期</li>
 * @method void setStatus(string $Status) 设置<p>状态。包含以下取值：</p><li>INITIALIZING：资源初始化中</li><li>RUNNING：运行中，可正常使用的状态</li><li>UNUSABLE：禁用，不可用</li><li>OVERDUE：资源过期</li>
 * @method string getRegion() 获取<p>所属地域。<br>当前支持ap-shanghai</p>
 * @method void setRegion(string $Region) 设置<p>所属地域。<br>当前支持ap-shanghai</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 */
class DatabasesInfo extends AbstractModel
{
    /**
     * @var string <p>数据库唯一标识</p>
     */
    public $InstanceId;

    /**
     * @var string <p>状态。包含以下取值：</p><li>INITIALIZING：资源初始化中</li><li>RUNNING：运行中，可正常使用的状态</li><li>UNUSABLE：禁用，不可用</li><li>OVERDUE：资源过期</li>
     */
    public $Status;

    /**
     * @var string <p>所属地域。<br>当前支持ap-shanghai</p>
     */
    public $Region;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @param string $InstanceId <p>数据库唯一标识</p>
     * @param string $Status <p>状态。包含以下取值：</p><li>INITIALIZING：资源初始化中</li><li>RUNNING：运行中，可正常使用的状态</li><li>UNUSABLE：禁用，不可用</li><li>OVERDUE：资源过期</li>
     * @param string $Region <p>所属地域。<br>当前支持ap-shanghai</p>
     * @param string $UpdateTime <p>更新时间</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
