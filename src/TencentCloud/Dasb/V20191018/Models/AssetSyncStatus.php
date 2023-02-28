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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产同步状态
 *
 * @method string getLastTime() 获取上一次同步完成的时间
 * @method void setLastTime(string $LastTime) 设置上一次同步完成的时间
 * @method integer getLastStatus() 获取上一次同步的结果。 0 - 从未进行, 1 - 成功， 2 - 失败
 * @method void setLastStatus(integer $LastStatus) 设置上一次同步的结果。 0 - 从未进行, 1 - 成功， 2 - 失败
 * @method boolean getInProcess() 获取同步任务是否正在进行中
 * @method void setInProcess(boolean $InProcess) 设置同步任务是否正在进行中
 */
class AssetSyncStatus extends AbstractModel
{
    /**
     * @var string 上一次同步完成的时间
     */
    public $LastTime;

    /**
     * @var integer 上一次同步的结果。 0 - 从未进行, 1 - 成功， 2 - 失败
     */
    public $LastStatus;

    /**
     * @var boolean 同步任务是否正在进行中
     */
    public $InProcess;

    /**
     * @param string $LastTime 上一次同步完成的时间
     * @param integer $LastStatus 上一次同步的结果。 0 - 从未进行, 1 - 成功， 2 - 失败
     * @param boolean $InProcess 同步任务是否正在进行中
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
        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("LastStatus",$param) and $param["LastStatus"] !== null) {
            $this->LastStatus = $param["LastStatus"];
        }

        if (array_key_exists("InProcess",$param) and $param["InProcess"] !== null) {
            $this->InProcess = $param["InProcess"];
        }
    }
}
