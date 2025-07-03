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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateTriggerStatus请求参数结构体
 *
 * @method string getEnable() 获取触发器的初始是能状态OPEN表示开启 CLOSE表示关闭
 * @method void setEnable(string $Enable) 设置触发器的初始是能状态OPEN表示开启 CLOSE表示关闭
 * @method string getFunctionName() 获取函数名称
 * @method void setFunctionName(string $FunctionName) 设置函数名称
 * @method string getTriggerName() 获取触发器名称
 * @method void setTriggerName(string $TriggerName) 设置触发器名称
 * @method string getType() 获取触发器类型，触发器类型，目前只支持 timer、 cos  、 ckafka三种类型
 * @method void setType(string $Type) 设置触发器类型，触发器类型，目前只支持 timer、 cos  、 ckafka三种类型
 * @method string getQualifier() 获取触发器在创建时所指向的触发别名或版本，默认值为$LATEST
 * @method void setQualifier(string $Qualifier) 设置触发器在创建时所指向的触发别名或版本，默认值为$LATEST
 * @method string getNamespace() 获取函数所在的命名空间，默认值为default
 * @method void setNamespace(string $Namespace) 设置函数所在的命名空间，默认值为default
 * @method string getTriggerDesc() 获取如果更新的触发器类型为 COS 触发器，该字段为必填值，存放 JSON 格式的数据 {"event":"cos:ObjectCreated:*"}，数据内容和 SetTrigger 接口中该字段的格式相同；如果更新的触发器类型为定时触发器或 CMQ 触发器，可以不指定该字段
 * @method void setTriggerDesc(string $TriggerDesc) 设置如果更新的触发器类型为 COS 触发器，该字段为必填值，存放 JSON 格式的数据 {"event":"cos:ObjectCreated:*"}，数据内容和 SetTrigger 接口中该字段的格式相同；如果更新的触发器类型为定时触发器或 CMQ 触发器，可以不指定该字段
 */
class UpdateTriggerStatusRequest extends AbstractModel
{
    /**
     * @var string 触发器的初始是能状态OPEN表示开启 CLOSE表示关闭
     */
    public $Enable;

    /**
     * @var string 函数名称
     */
    public $FunctionName;

    /**
     * @var string 触发器名称
     */
    public $TriggerName;

    /**
     * @var string 触发器类型，触发器类型，目前只支持 timer、 cos  、 ckafka三种类型
     */
    public $Type;

    /**
     * @var string 触发器在创建时所指向的触发别名或版本，默认值为$LATEST
     */
    public $Qualifier;

    /**
     * @var string 函数所在的命名空间，默认值为default
     */
    public $Namespace;

    /**
     * @var string 如果更新的触发器类型为 COS 触发器，该字段为必填值，存放 JSON 格式的数据 {"event":"cos:ObjectCreated:*"}，数据内容和 SetTrigger 接口中该字段的格式相同；如果更新的触发器类型为定时触发器或 CMQ 触发器，可以不指定该字段
     */
    public $TriggerDesc;

    /**
     * @param string $Enable 触发器的初始是能状态OPEN表示开启 CLOSE表示关闭
     * @param string $FunctionName 函数名称
     * @param string $TriggerName 触发器名称
     * @param string $Type 触发器类型，触发器类型，目前只支持 timer、 cos  、 ckafka三种类型
     * @param string $Qualifier 触发器在创建时所指向的触发别名或版本，默认值为$LATEST
     * @param string $Namespace 函数所在的命名空间，默认值为default
     * @param string $TriggerDesc 如果更新的触发器类型为 COS 触发器，该字段为必填值，存放 JSON 格式的数据 {"event":"cos:ObjectCreated:*"}，数据内容和 SetTrigger 接口中该字段的格式相同；如果更新的触发器类型为定时触发器或 CMQ 触发器，可以不指定该字段
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            $this->TriggerName = $param["TriggerName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("TriggerDesc",$param) and $param["TriggerDesc"] !== null) {
            $this->TriggerDesc = $param["TriggerDesc"];
        }
    }
}
