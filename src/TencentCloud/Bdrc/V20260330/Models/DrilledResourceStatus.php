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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 演练组关联的演练资源的状态数量统计
 *
 * @method string getResourceStatus() 获取演练组关联的演练资源的状态
 * @method void setResourceStatus(string $ResourceStatus) 设置演练组关联的演练资源的状态
 * @method integer getResourceCount() 获取演练组关联演练资源处于某个状态的数量
 * @method void setResourceCount(integer $ResourceCount) 设置演练组关联演练资源处于某个状态的数量
 */
class DrilledResourceStatus extends AbstractModel
{
    /**
     * @var string 演练组关联的演练资源的状态
     */
    public $ResourceStatus;

    /**
     * @var integer 演练组关联演练资源处于某个状态的数量
     */
    public $ResourceCount;

    /**
     * @param string $ResourceStatus 演练组关联的演练资源的状态
     * @param integer $ResourceCount 演练组关联演练资源处于某个状态的数量
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
        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }

        if (array_key_exists("ResourceCount",$param) and $param["ResourceCount"] !== null) {
            $this->ResourceCount = $param["ResourceCount"];
        }
    }
}
