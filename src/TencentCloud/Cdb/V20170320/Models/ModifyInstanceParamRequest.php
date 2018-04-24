<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getInstanceIds() 获取实例短Id列表。
 * @method void setInstanceIds(array $InstanceIds) 设置实例短Id列表。
 * @method array getParamList() 获取要修改的参数列表。每一个元素是name和currentValue的组合。name是参数名，currentValue是要修改成的值。
 * @method void setParamList(array $ParamList) 设置要修改的参数列表。每一个元素是name和currentValue的组合。name是参数名，currentValue是要修改成的值。
 */

/**
 *ModifyInstanceParam请求参数结构体
 */
class ModifyInstanceParamRequest extends AbstractModel
{
    /**
     * @var array 实例短Id列表。
     */
    public $InstanceIds;

    /**
     * @var array 要修改的参数列表。每一个元素是name和currentValue的组合。name是参数名，currentValue是要修改成的值。
     */
    public $ParamList;
    /**
     * @param array $InstanceIds 实例短Id列表。
     * @param array $ParamList 要修改的参数列表。每一个元素是name和currentValue的组合。name是参数名，currentValue是要修改成的值。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new Parameter();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }
    }
}
