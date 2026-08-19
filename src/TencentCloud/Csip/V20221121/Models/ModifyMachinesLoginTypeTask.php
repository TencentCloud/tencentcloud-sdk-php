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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量修改主机登录方式任务
 *
 * @method integer getId() 获取<p>任务ID</p>
 * @method void setId(integer $Id) 设置<p>任务ID</p>
 * @method integer getStatus() 获取<p>1-进行中，2已完成</p>
 * @method void setStatus(integer $Status) 设置<p>1-进行中，2已完成</p>
 * @method integer getSuccessCount() 获取<p>执行成功数量</p>
 * @method void setSuccessCount(integer $SuccessCount) 设置<p>执行成功数量</p>
 * @method array getFailList() 获取<p>执行失败主机列表</p>
 * @method void setFailList(array $FailList) 设置<p>执行失败主机列表</p>
 * @method array getSuccessInstances() 获取<p>修改成功的实例ID列表</p>
 * @method void setSuccessInstances(array $SuccessInstances) 设置<p>修改成功的实例ID列表</p>
 * @method array getProgressingInstances() 获取<p>修改中的实例ID列表</p>
 * @method void setProgressingInstances(array $ProgressingInstances) 设置<p>修改中的实例ID列表</p>
 * @method integer getFailedHostCount() 获取<p>失败主机数</p>
 * @method void setFailedHostCount(integer $FailedHostCount) 设置<p>失败主机数</p>
 */
class ModifyMachinesLoginTypeTask extends AbstractModel
{
    /**
     * @var integer <p>任务ID</p>
     */
    public $Id;

    /**
     * @var integer <p>1-进行中，2已完成</p>
     */
    public $Status;

    /**
     * @var integer <p>执行成功数量</p>
     */
    public $SuccessCount;

    /**
     * @var array <p>执行失败主机列表</p>
     */
    public $FailList;

    /**
     * @var array <p>修改成功的实例ID列表</p>
     */
    public $SuccessInstances;

    /**
     * @var array <p>修改中的实例ID列表</p>
     */
    public $ProgressingInstances;

    /**
     * @var integer <p>失败主机数</p>
     */
    public $FailedHostCount;

    /**
     * @param integer $Id <p>任务ID</p>
     * @param integer $Status <p>1-进行中，2已完成</p>
     * @param integer $SuccessCount <p>执行成功数量</p>
     * @param array $FailList <p>执行失败主机列表</p>
     * @param array $SuccessInstances <p>修改成功的实例ID列表</p>
     * @param array $ProgressingInstances <p>修改中的实例ID列表</p>
     * @param integer $FailedHostCount <p>失败主机数</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailList",$param) and $param["FailList"] !== null) {
            $this->FailList = [];
            foreach ($param["FailList"] as $key => $value){
                $obj = new ModifyLoginTypeFailInfo();
                $obj->deserialize($value);
                array_push($this->FailList, $obj);
            }
        }

        if (array_key_exists("SuccessInstances",$param) and $param["SuccessInstances"] !== null) {
            $this->SuccessInstances = $param["SuccessInstances"];
        }

        if (array_key_exists("ProgressingInstances",$param) and $param["ProgressingInstances"] !== null) {
            $this->ProgressingInstances = $param["ProgressingInstances"];
        }

        if (array_key_exists("FailedHostCount",$param) and $param["FailedHostCount"] !== null) {
            $this->FailedHostCount = $param["FailedHostCount"];
        }
    }
}
