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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 历史实例信息
 *
 * @method string getInstanceDate() 获取<p>实例生成时间</p>
 * @method void setInstanceDate(string $InstanceDate) 设置<p>实例生成时间</p>
 * @method integer getRunningOrderId() 获取<p>实例id</p>
 * @method void setRunningOrderId(integer $RunningOrderId) 设置<p>实例id</p>
 */
class RealtimeTaskInstanceVO extends AbstractModel
{
    /**
     * @var string <p>实例生成时间</p>
     */
    public $InstanceDate;

    /**
     * @var integer <p>实例id</p>
     */
    public $RunningOrderId;

    /**
     * @param string $InstanceDate <p>实例生成时间</p>
     * @param integer $RunningOrderId <p>实例id</p>
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
        if (array_key_exists("InstanceDate",$param) and $param["InstanceDate"] !== null) {
            $this->InstanceDate = $param["InstanceDate"];
        }

        if (array_key_exists("RunningOrderId",$param) and $param["RunningOrderId"] !== null) {
            $this->RunningOrderId = $param["RunningOrderId"];
        }
    }
}
