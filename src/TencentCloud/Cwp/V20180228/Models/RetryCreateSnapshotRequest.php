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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RetryCreateSnapshot请求参数结构体
 *
 * @method integer getFixId() 获取修复任务id
 * @method void setFixId(integer $FixId) 设置修复任务id
 * @method string getQuuid() 获取主机quuid
 * @method void setQuuid(string $Quuid) 设置主机quuid
 * @method integer getId() 获取任务进度返回的快照唯一Id
 * @method void setId(integer $Id) 设置任务进度返回的快照唯一Id
 */
class RetryCreateSnapshotRequest extends AbstractModel
{
    /**
     * @var integer 修复任务id
     */
    public $FixId;

    /**
     * @var string 主机quuid
     */
    public $Quuid;

    /**
     * @var integer 任务进度返回的快照唯一Id
     */
    public $Id;

    /**
     * @param integer $FixId 修复任务id
     * @param string $Quuid 主机quuid
     * @param integer $Id 任务进度返回的快照唯一Id
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
        if (array_key_exists("FixId",$param) and $param["FixId"] !== null) {
            $this->FixId = $param["FixId"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
