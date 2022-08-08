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
 * 批量操作结果
 *
 * @method integer getRunning() 获取正在运行的任务数
 * @method void setRunning(integer $Running) 设置正在运行的任务数
 * @method integer getSuccess() 获取执行成功的任务数
 * @method void setSuccess(integer $Success) 设置执行成功的任务数
 * @method integer getFailed() 获取执行失败的任务数
 * @method void setFailed(integer $Failed) 设置执行失败的任务数
 * @method integer getTotal() 获取总任务数
 * @method void setTotal(integer $Total) 设置总任务数
 */
class BatchResult extends AbstractModel
{
    /**
     * @var integer 正在运行的任务数
     */
    public $Running;

    /**
     * @var integer 执行成功的任务数
     */
    public $Success;

    /**
     * @var integer 执行失败的任务数
     */
    public $Failed;

    /**
     * @var integer 总任务数
     */
    public $Total;

    /**
     * @param integer $Running 正在运行的任务数
     * @param integer $Success 执行成功的任务数
     * @param integer $Failed 执行失败的任务数
     * @param integer $Total 总任务数
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
        if (array_key_exists("Running",$param) and $param["Running"] !== null) {
            $this->Running = $param["Running"];
        }

        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("Failed",$param) and $param["Failed"] !== null) {
            $this->Failed = $param["Failed"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
