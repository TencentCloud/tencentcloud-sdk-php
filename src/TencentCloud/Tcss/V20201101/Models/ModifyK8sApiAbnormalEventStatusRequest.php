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
 * ModifyK8sApiAbnormalEventStatus请求参数结构体
 *
 * @method array getEventIDSet() 获取事件ID集合
 * @method void setEventIDSet(array $EventIDSet) 设置事件ID集合
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class ModifyK8sApiAbnormalEventStatusRequest extends AbstractModel
{
    /**
     * @var array 事件ID集合
     */
    public $EventIDSet;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param array $EventIDSet 事件ID集合
     * @param string $Status 状态
     * @param string $Remark 备注
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
        if (array_key_exists("EventIDSet",$param) and $param["EventIDSet"] !== null) {
            $this->EventIDSet = $param["EventIDSet"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
