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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAutoCalloutTask返回参数结构体
 *
 * @method string getName() 获取任务名
 * @method void setName(string $Name) 设置任务名
 * @method string getDescription() 获取任务描述
 * @method void setDescription(string $Description) 设置任务描述
 * @method integer getNotBefore() 获取任务起始时间戳
 * @method void setNotBefore(integer $NotBefore) 设置任务起始时间戳
 * @method integer getNotAfter() 获取任务结束时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotAfter(integer $NotAfter) 设置任务结束时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCallers() 获取主叫列表
 * @method void setCallers(array $Callers) 设置主叫列表
 * @method array getCallees() 获取被叫信息列表
 * @method void setCallees(array $Callees) 设置被叫信息列表
 * @method integer getIvrId() 获取任务使用的IvrId
 * @method void setIvrId(integer $IvrId) 设置任务使用的IvrId
 * @method integer getState() 获取任务状态 0初始 1运行中 2已完成 3结束中 4已终止
 * @method void setState(integer $State) 设置任务状态 0初始 1运行中 2已完成 3结束中 4已终止
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAutoCalloutTaskResponse extends AbstractModel
{
    /**
     * @var string 任务名
     */
    public $Name;

    /**
     * @var string 任务描述
     */
    public $Description;

    /**
     * @var integer 任务起始时间戳
     */
    public $NotBefore;

    /**
     * @var integer 任务结束时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotAfter;

    /**
     * @var array 主叫列表
     */
    public $Callers;

    /**
     * @var array 被叫信息列表
     */
    public $Callees;

    /**
     * @var integer 任务使用的IvrId
     */
    public $IvrId;

    /**
     * @var integer 任务状态 0初始 1运行中 2已完成 3结束中 4已终止
     */
    public $State;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name 任务名
     * @param string $Description 任务描述
     * @param integer $NotBefore 任务起始时间戳
     * @param integer $NotAfter 任务结束时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Callers 主叫列表
     * @param array $Callees 被叫信息列表
     * @param integer $IvrId 任务使用的IvrId
     * @param integer $State 任务状态 0初始 1运行中 2已完成 3结束中 4已终止
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NotBefore",$param) and $param["NotBefore"] !== null) {
            $this->NotBefore = $param["NotBefore"];
        }

        if (array_key_exists("NotAfter",$param) and $param["NotAfter"] !== null) {
            $this->NotAfter = $param["NotAfter"];
        }

        if (array_key_exists("Callers",$param) and $param["Callers"] !== null) {
            $this->Callers = $param["Callers"];
        }

        if (array_key_exists("Callees",$param) and $param["Callees"] !== null) {
            $this->Callees = [];
            foreach ($param["Callees"] as $key => $value){
                $obj = new AutoCalloutTaskCalleeInfo();
                $obj->deserialize($value);
                array_push($this->Callees, $obj);
            }
        }

        if (array_key_exists("IvrId",$param) and $param["IvrId"] !== null) {
            $this->IvrId = $param["IvrId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
