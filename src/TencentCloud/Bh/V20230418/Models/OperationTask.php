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
 * 运维任务信息
 *
 * @method integer getId() 获取运维任务主键ID
 * @method void setId(integer $Id) 设置运维任务主键ID
 * @method string getOperationId() 获取运维任务ID
 * @method void setOperationId(string $OperationId) 设置运维任务ID
 * @method string getName() 获取运维任务名称
 * @method void setName(string $Name) 设置运维任务名称
 * @method string getUserName() 获取创建用户
 * @method void setUserName(string $UserName) 设置创建用户
 * @method string getRealName() 获取运维人员姓名
 * @method void setRealName(string $RealName) 设置运维人员姓名
 * @method integer getType() 获取任务类型，1 - 手工执行任务， 2 - 周期性任务
 * @method void setType(integer $Type) 设置任务类型，1 - 手工执行任务， 2 - 周期性任务
 * @method integer getPeriod() 获取周期性任务执行间隔，单位天
 * @method void setPeriod(integer $Period) 设置周期性任务执行间隔，单位天
 * @method string getNextTime() 获取执行账户
 * @method void setNextTime(string $NextTime) 设置执行账户
 * @method string getFirstTime() 获取下一次执行时间
 * @method void setFirstTime(string $FirstTime) 设置下一次执行时间
 */
class OperationTask extends AbstractModel
{
    /**
     * @var integer 运维任务主键ID
     */
    public $Id;

    /**
     * @var string 运维任务ID
     */
    public $OperationId;

    /**
     * @var string 运维任务名称
     */
    public $Name;

    /**
     * @var string 创建用户
     */
    public $UserName;

    /**
     * @var string 运维人员姓名
     */
    public $RealName;

    /**
     * @var integer 任务类型，1 - 手工执行任务， 2 - 周期性任务
     */
    public $Type;

    /**
     * @var integer 周期性任务执行间隔，单位天
     */
    public $Period;

    /**
     * @var string 执行账户
     */
    public $NextTime;

    /**
     * @var string 下一次执行时间
     */
    public $FirstTime;

    /**
     * @param integer $Id 运维任务主键ID
     * @param string $OperationId 运维任务ID
     * @param string $Name 运维任务名称
     * @param string $UserName 创建用户
     * @param string $RealName 运维人员姓名
     * @param integer $Type 任务类型，1 - 手工执行任务， 2 - 周期性任务
     * @param integer $Period 周期性任务执行间隔，单位天
     * @param string $NextTime 执行账户
     * @param string $FirstTime 下一次执行时间
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

        if (array_key_exists("OperationId",$param) and $param["OperationId"] !== null) {
            $this->OperationId = $param["OperationId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            $this->RealName = $param["RealName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("NextTime",$param) and $param["NextTime"] !== null) {
            $this->NextTime = $param["NextTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }
    }
}
