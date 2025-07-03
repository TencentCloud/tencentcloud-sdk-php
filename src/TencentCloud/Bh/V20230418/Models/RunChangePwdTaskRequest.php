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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunChangePwdTask请求参数结构体
 *
 * @method string getOperationId() 获取任务Id
 * @method void setOperationId(string $OperationId) 设置任务Id
 * @method string getDepartmentId() 获取部门id
 * @method void setDepartmentId(string $DepartmentId) 设置部门id
 * @method array getDetails() 获取改密任务详情
 * @method void setDetails(array $Details) 设置改密任务详情
 */
class RunChangePwdTaskRequest extends AbstractModel
{
    /**
     * @var string 任务Id
     */
    public $OperationId;

    /**
     * @var string 部门id
     */
    public $DepartmentId;

    /**
     * @var array 改密任务详情
     */
    public $Details;

    /**
     * @param string $OperationId 任务Id
     * @param string $DepartmentId 部门id
     * @param array $Details 改密任务详情
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
        if (array_key_exists("OperationId",$param) and $param["OperationId"] !== null) {
            $this->OperationId = $param["OperationId"];
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new RunChangePwdTaskDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }
    }
}
