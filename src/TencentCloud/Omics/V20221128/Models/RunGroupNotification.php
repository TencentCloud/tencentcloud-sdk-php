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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务批次通知。
 *
 * @method RunGroupResultNotification getResultNotification() 获取结果通知。
 * @method void setResultNotification(RunGroupResultNotification $ResultNotification) 设置结果通知。
 * @method RunGroupTimeoutNotification getTimeoutNotification() 获取超时通知。
 * @method void setTimeoutNotification(RunGroupTimeoutNotification $TimeoutNotification) 设置超时通知。
 */
class RunGroupNotification extends AbstractModel
{
    /**
     * @var RunGroupResultNotification 结果通知。
     */
    public $ResultNotification;

    /**
     * @var RunGroupTimeoutNotification 超时通知。
     */
    public $TimeoutNotification;

    /**
     * @param RunGroupResultNotification $ResultNotification 结果通知。
     * @param RunGroupTimeoutNotification $TimeoutNotification 超时通知。
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
        if (array_key_exists("ResultNotification",$param) and $param["ResultNotification"] !== null) {
            $this->ResultNotification = new RunGroupResultNotification();
            $this->ResultNotification->deserialize($param["ResultNotification"]);
        }

        if (array_key_exists("TimeoutNotification",$param) and $param["TimeoutNotification"] !== null) {
            $this->TimeoutNotification = new RunGroupTimeoutNotification();
            $this->TimeoutNotification->deserialize($param["TimeoutNotification"]);
        }
    }
}
