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
 * UpdateBatchTaskInCharge请求参数结构体
 *
 * @method array getTaskIds() 获取待更新的任务ID
 * @method void setTaskIds(array $TaskIds) 设置待更新的任务ID
 * @method string getInCharge() 获取责任人
 * @method void setInCharge(string $InCharge) 设置责任人
 * @method string getInChargeId() 获取责任人Id
 * @method void setInChargeId(string $InChargeId) 设置责任人Id
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 */
class UpdateBatchTaskInChargeRequest extends AbstractModel
{
    /**
     * @var array 待更新的任务ID
     */
    public $TaskIds;

    /**
     * @var string 责任人
     */
    public $InCharge;

    /**
     * @var string 责任人Id
     */
    public $InChargeId;

    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @param array $TaskIds 待更新的任务ID
     * @param string $InCharge 责任人
     * @param string $InChargeId 责任人Id
     * @param string $ProjectId 项目Id
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("InChargeId",$param) and $param["InChargeId"] !== null) {
            $this->InChargeId = $param["InChargeId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
