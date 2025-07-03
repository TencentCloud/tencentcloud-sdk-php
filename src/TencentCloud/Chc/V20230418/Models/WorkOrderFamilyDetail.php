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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 带有分类的工单类型列表
 *
 * @method string getWorkOrderFamily() 获取工单类型大类的名称
 * @method void setWorkOrderFamily(string $WorkOrderFamily) 设置工单类型大类的名称
 * @method array getWorkOrderTypeSet() 获取工单类型详情列表
 * @method void setWorkOrderTypeSet(array $WorkOrderTypeSet) 设置工单类型详情列表
 */
class WorkOrderFamilyDetail extends AbstractModel
{
    /**
     * @var string 工单类型大类的名称
     */
    public $WorkOrderFamily;

    /**
     * @var array 工单类型详情列表
     */
    public $WorkOrderTypeSet;

    /**
     * @param string $WorkOrderFamily 工单类型大类的名称
     * @param array $WorkOrderTypeSet 工单类型详情列表
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
        if (array_key_exists("WorkOrderFamily",$param) and $param["WorkOrderFamily"] !== null) {
            $this->WorkOrderFamily = $param["WorkOrderFamily"];
        }

        if (array_key_exists("WorkOrderTypeSet",$param) and $param["WorkOrderTypeSet"] !== null) {
            $this->WorkOrderTypeSet = [];
            foreach ($param["WorkOrderTypeSet"] as $key => $value){
                $obj = new WorkOrderTypeDetail();
                $obj->deserialize($value);
                array_push($this->WorkOrderTypeSet, $obj);
            }
        }
    }
}
