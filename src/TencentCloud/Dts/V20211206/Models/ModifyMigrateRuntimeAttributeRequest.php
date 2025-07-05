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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMigrateRuntimeAttribute请求参数结构体
 *
 * @method string getJobId() 获取迁移任务id，如：dts-2rgv0f09
 * @method void setJobId(string $JobId) 设置迁移任务id，如：dts-2rgv0f09
 * @method array getOtherOptions() 获取需要修改的属性，此结构设计为通用结构，用于屏蔽多个业务的定制属性。<br>例如对于Redis:<br>{<br>	 "Key": "DstWriteMode",	//目标库写入模式<br> 	"Value": "normal"	          //clearData(清空目标实例数据)、overwrite(以覆盖写的方式执行任务)、normal(跟正常流程一样，不做额外动作，默认为此值) <br>},<br>{<br/>	 "Key": "IsDstReadOnly",	//是否在迁移时设置目标库只读<br/> 	"Value": "true"	          //true(设置只读)、false(不设置只读) <br/>} 
 * @method void setOtherOptions(array $OtherOptions) 设置需要修改的属性，此结构设计为通用结构，用于屏蔽多个业务的定制属性。<br>例如对于Redis:<br>{<br>	 "Key": "DstWriteMode",	//目标库写入模式<br> 	"Value": "normal"	          //clearData(清空目标实例数据)、overwrite(以覆盖写的方式执行任务)、normal(跟正常流程一样，不做额外动作，默认为此值) <br>},<br>{<br/>	 "Key": "IsDstReadOnly",	//是否在迁移时设置目标库只读<br/> 	"Value": "true"	          //true(设置只读)、false(不设置只读) <br/>} 
 */
class ModifyMigrateRuntimeAttributeRequest extends AbstractModel
{
    /**
     * @var string 迁移任务id，如：dts-2rgv0f09
     */
    public $JobId;

    /**
     * @var array 需要修改的属性，此结构设计为通用结构，用于屏蔽多个业务的定制属性。<br>例如对于Redis:<br>{<br>	 "Key": "DstWriteMode",	//目标库写入模式<br> 	"Value": "normal"	          //clearData(清空目标实例数据)、overwrite(以覆盖写的方式执行任务)、normal(跟正常流程一样，不做额外动作，默认为此值) <br>},<br>{<br/>	 "Key": "IsDstReadOnly",	//是否在迁移时设置目标库只读<br/> 	"Value": "true"	          //true(设置只读)、false(不设置只读) <br/>} 
     */
    public $OtherOptions;

    /**
     * @param string $JobId 迁移任务id，如：dts-2rgv0f09
     * @param array $OtherOptions 需要修改的属性，此结构设计为通用结构，用于屏蔽多个业务的定制属性。<br>例如对于Redis:<br>{<br>	 "Key": "DstWriteMode",	//目标库写入模式<br> 	"Value": "normal"	          //clearData(清空目标实例数据)、overwrite(以覆盖写的方式执行任务)、normal(跟正常流程一样，不做额外动作，默认为此值) <br>},<br>{<br/>	 "Key": "IsDstReadOnly",	//是否在迁移时设置目标库只读<br/> 	"Value": "true"	          //true(设置只读)、false(不设置只读) <br/>} 
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("OtherOptions",$param) and $param["OtherOptions"] !== null) {
            $this->OtherOptions = [];
            foreach ($param["OtherOptions"] as $key => $value){
                $obj = new KeyValuePairOption();
                $obj->deserialize($value);
                array_push($this->OtherOptions, $obj);
            }
        }
    }
}
