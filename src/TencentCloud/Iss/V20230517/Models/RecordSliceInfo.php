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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 录像切片信息
 *
 * @method string getPlanId() 获取计划ID
 * @method void setPlanId(string $PlanId) 设置计划ID
 * @method array getList() 获取录像切片开始和结束时间列表
 * @method void setList(array $List) 设置录像切片开始和结束时间列表
 */
class RecordSliceInfo extends AbstractModel
{
    /**
     * @var string 计划ID
     */
    public $PlanId;

    /**
     * @var array 录像切片开始和结束时间列表
     */
    public $List;

    /**
     * @param string $PlanId 计划ID
     * @param array $List 录像切片开始和结束时间列表
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new RecordTimeLine();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
