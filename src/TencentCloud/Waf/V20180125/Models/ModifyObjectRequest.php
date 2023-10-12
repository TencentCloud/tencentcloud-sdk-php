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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyObject请求参数结构体
 *
 * @method string getObjectId() 获取修改对象标识
 * @method void setObjectId(string $ObjectId) 设置修改对象标识
 * @method string getOpType() 获取改动作类型:Status修改开关，InstanceId绑定实例
 * @method void setOpType(string $OpType) 设置改动作类型:Status修改开关，InstanceId绑定实例
 * @method integer getStatus() 获取新的Waf开关状态，如果和已有状态相同认为修改成功
 * @method void setStatus(integer $Status) 设置新的Waf开关状态，如果和已有状态相同认为修改成功
 * @method string getInstanceId() 获取新的实例ID，如果和已绑定的实例相同认为修改成功
 * @method void setInstanceId(string $InstanceId) 设置新的实例ID，如果和已绑定的实例相同认为修改成功
 */
class ModifyObjectRequest extends AbstractModel
{
    /**
     * @var string 修改对象标识
     */
    public $ObjectId;

    /**
     * @var string 改动作类型:Status修改开关，InstanceId绑定实例
     */
    public $OpType;

    /**
     * @var integer 新的Waf开关状态，如果和已有状态相同认为修改成功
     */
    public $Status;

    /**
     * @var string 新的实例ID，如果和已绑定的实例相同认为修改成功
     */
    public $InstanceId;

    /**
     * @param string $ObjectId 修改对象标识
     * @param string $OpType 改动作类型:Status修改开关，InstanceId绑定实例
     * @param integer $Status 新的Waf开关状态，如果和已有状态相同认为修改成功
     * @param string $InstanceId 新的实例ID，如果和已绑定的实例相同认为修改成功
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
        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }

        if (array_key_exists("OpType",$param) and $param["OpType"] !== null) {
            $this->OpType = $param["OpType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
