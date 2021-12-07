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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVirusScanAgain请求参数结构体
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method array getContainerIds() 获取需要扫描的容器id集合
 * @method void setContainerIds(array $ContainerIds) 设置需要扫描的容器id集合
 * @method boolean getTimeoutAll() 获取是否是扫描全部超时的
 * @method void setTimeoutAll(boolean $TimeoutAll) 设置是否是扫描全部超时的
 * @method integer getTimeout() 获取重新设置的超时时长
 * @method void setTimeout(integer $Timeout) 设置重新设置的超时时长
 */
class CreateVirusScanAgainRequest extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var array 需要扫描的容器id集合
     */
    public $ContainerIds;

    /**
     * @var boolean 是否是扫描全部超时的
     */
    public $TimeoutAll;

    /**
     * @var integer 重新设置的超时时长
     */
    public $Timeout;

    /**
     * @param string $TaskId 任务id
     * @param array $ContainerIds 需要扫描的容器id集合
     * @param boolean $TimeoutAll 是否是扫描全部超时的
     * @param integer $Timeout 重新设置的超时时长
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ContainerIds",$param) and $param["ContainerIds"] !== null) {
            $this->ContainerIds = $param["ContainerIds"];
        }

        if (array_key_exists("TimeoutAll",$param) and $param["TimeoutAll"] !== null) {
            $this->TimeoutAll = $param["TimeoutAll"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
