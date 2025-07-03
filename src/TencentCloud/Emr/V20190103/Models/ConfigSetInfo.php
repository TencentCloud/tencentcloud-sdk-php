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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源调度-配置集信息
 *
 * @method string getConfigSet() 获取配置集名称
 * @method void setConfigSet(string $ConfigSet) 设置配置集名称
 * @method array getLabelParams() 获取容量调度器会使用，里面设置了标签相关的配置。key的取值与**DescribeYarnQueue**返回的字段一致。
key的取值信息如下：
- labelName，标签名称，标签管理里的标签。
- capacity，容量，取值为**数字字符串**
- maximum-capacity，最大容量，取值为**数字字符串**
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelParams(array $LabelParams) 设置容量调度器会使用，里面设置了标签相关的配置。key的取值与**DescribeYarnQueue**返回的字段一致。
key的取值信息如下：
- labelName，标签名称，标签管理里的标签。
- capacity，容量，取值为**数字字符串**
- maximum-capacity，最大容量，取值为**数字字符串**
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBasicParams() 获取设置配置集相关的参数。key的取值与**DescribeYarnQueue**返回的字段一致。
###### 公平调度器
key的取值信息如下：
- minResources，最大资源量，取值为**YarnResource类型的json串**或**null**
- maxResources，最大资源量，取值为**YarnResource类型的json串**或**null**
- maxChildResources，能够分配给为未声明子队列的最大资源量，取值为**数字字符串**或**null**
- maxRunningApps，最高可同时处于运行的App数量，取值为**数字字符串**或**null**
- weight，权重，取值为**数字字符串**或**null**
- maxAMShare，App Master最大份额，取值为**数字字符串**或**null**，其中数字的范围是[0，1]或-1

```
type YarnResource struct {
	Vcores *int `json:"vcores"`
	Memory *int `json:"memory"`
	Type *string `json:"type"` // 取值为`percent`或`null`当值为`percent`时，表示使用的百分比，否则就是使用的绝对数值。只有maxResources、maxChildResources才可以取值为`percent`
}
```

###### 容量调度器
key的取值信息如下：
- minimum-user-limit-percent，用户最小容量，取值为**YarnResource类型的json串**或**null**，其中数字的范围是[0，100]
- user-limit-factor，用户资源因子，取值为**YarnResource类型的json串**或**null**
- maximum-applications，最大应用数Max-Applications，取值为**数字字符串**或**null**，其中数字为正整数
- maximum-am-resource-percent，最大AM比例，取值为**数字字符串**或**null**，其中数字的范围是[0，1]或-1
- default-application-priority，资源池优先级，取值为**数字字符串**或**null**，其中数字为正整数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBasicParams(array $BasicParams) 设置设置配置集相关的参数。key的取值与**DescribeYarnQueue**返回的字段一致。
###### 公平调度器
key的取值信息如下：
- minResources，最大资源量，取值为**YarnResource类型的json串**或**null**
- maxResources，最大资源量，取值为**YarnResource类型的json串**或**null**
- maxChildResources，能够分配给为未声明子队列的最大资源量，取值为**数字字符串**或**null**
- maxRunningApps，最高可同时处于运行的App数量，取值为**数字字符串**或**null**
- weight，权重，取值为**数字字符串**或**null**
- maxAMShare，App Master最大份额，取值为**数字字符串**或**null**，其中数字的范围是[0，1]或-1

```
type YarnResource struct {
	Vcores *int `json:"vcores"`
	Memory *int `json:"memory"`
	Type *string `json:"type"` // 取值为`percent`或`null`当值为`percent`时，表示使用的百分比，否则就是使用的绝对数值。只有maxResources、maxChildResources才可以取值为`percent`
}
```

###### 容量调度器
key的取值信息如下：
- minimum-user-limit-percent，用户最小容量，取值为**YarnResource类型的json串**或**null**，其中数字的范围是[0，100]
- user-limit-factor，用户资源因子，取值为**YarnResource类型的json串**或**null**
- maximum-applications，最大应用数Max-Applications，取值为**数字字符串**或**null**，其中数字为正整数
- maximum-am-resource-percent，最大AM比例，取值为**数字字符串**或**null**，其中数字的范围是[0，1]或-1
- default-application-priority，资源池优先级，取值为**数字字符串**或**null**，其中数字为正整数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConfigSetInfo extends AbstractModel
{
    /**
     * @var string 配置集名称
     */
    public $ConfigSet;

    /**
     * @var array 容量调度器会使用，里面设置了标签相关的配置。key的取值与**DescribeYarnQueue**返回的字段一致。
key的取值信息如下：
- labelName，标签名称，标签管理里的标签。
- capacity，容量，取值为**数字字符串**
- maximum-capacity，最大容量，取值为**数字字符串**
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelParams;

    /**
     * @var array 设置配置集相关的参数。key的取值与**DescribeYarnQueue**返回的字段一致。
###### 公平调度器
key的取值信息如下：
- minResources，最大资源量，取值为**YarnResource类型的json串**或**null**
- maxResources，最大资源量，取值为**YarnResource类型的json串**或**null**
- maxChildResources，能够分配给为未声明子队列的最大资源量，取值为**数字字符串**或**null**
- maxRunningApps，最高可同时处于运行的App数量，取值为**数字字符串**或**null**
- weight，权重，取值为**数字字符串**或**null**
- maxAMShare，App Master最大份额，取值为**数字字符串**或**null**，其中数字的范围是[0，1]或-1

```
type YarnResource struct {
	Vcores *int `json:"vcores"`
	Memory *int `json:"memory"`
	Type *string `json:"type"` // 取值为`percent`或`null`当值为`percent`时，表示使用的百分比，否则就是使用的绝对数值。只有maxResources、maxChildResources才可以取值为`percent`
}
```

###### 容量调度器
key的取值信息如下：
- minimum-user-limit-percent，用户最小容量，取值为**YarnResource类型的json串**或**null**，其中数字的范围是[0，100]
- user-limit-factor，用户资源因子，取值为**YarnResource类型的json串**或**null**
- maximum-applications，最大应用数Max-Applications，取值为**数字字符串**或**null**，其中数字为正整数
- maximum-am-resource-percent，最大AM比例，取值为**数字字符串**或**null**，其中数字的范围是[0，1]或-1
- default-application-priority，资源池优先级，取值为**数字字符串**或**null**，其中数字为正整数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BasicParams;

    /**
     * @param string $ConfigSet 配置集名称
     * @param array $LabelParams 容量调度器会使用，里面设置了标签相关的配置。key的取值与**DescribeYarnQueue**返回的字段一致。
key的取值信息如下：
- labelName，标签名称，标签管理里的标签。
- capacity，容量，取值为**数字字符串**
- maximum-capacity，最大容量，取值为**数字字符串**
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BasicParams 设置配置集相关的参数。key的取值与**DescribeYarnQueue**返回的字段一致。
###### 公平调度器
key的取值信息如下：
- minResources，最大资源量，取值为**YarnResource类型的json串**或**null**
- maxResources，最大资源量，取值为**YarnResource类型的json串**或**null**
- maxChildResources，能够分配给为未声明子队列的最大资源量，取值为**数字字符串**或**null**
- maxRunningApps，最高可同时处于运行的App数量，取值为**数字字符串**或**null**
- weight，权重，取值为**数字字符串**或**null**
- maxAMShare，App Master最大份额，取值为**数字字符串**或**null**，其中数字的范围是[0，1]或-1

```
type YarnResource struct {
	Vcores *int `json:"vcores"`
	Memory *int `json:"memory"`
	Type *string `json:"type"` // 取值为`percent`或`null`当值为`percent`时，表示使用的百分比，否则就是使用的绝对数值。只有maxResources、maxChildResources才可以取值为`percent`
}
```

###### 容量调度器
key的取值信息如下：
- minimum-user-limit-percent，用户最小容量，取值为**YarnResource类型的json串**或**null**，其中数字的范围是[0，100]
- user-limit-factor，用户资源因子，取值为**YarnResource类型的json串**或**null**
- maximum-applications，最大应用数Max-Applications，取值为**数字字符串**或**null**，其中数字为正整数
- maximum-am-resource-percent，最大AM比例，取值为**数字字符串**或**null**，其中数字的范围是[0，1]或-1
- default-application-priority，资源池优先级，取值为**数字字符串**或**null**，其中数字为正整数
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ConfigSet",$param) and $param["ConfigSet"] !== null) {
            $this->ConfigSet = $param["ConfigSet"];
        }

        if (array_key_exists("LabelParams",$param) and $param["LabelParams"] !== null) {
            $this->LabelParams = [];
            foreach ($param["LabelParams"] as $key => $value){
                $obj = new ItemSeq();
                $obj->deserialize($value);
                array_push($this->LabelParams, $obj);
            }
        }

        if (array_key_exists("BasicParams",$param) and $param["BasicParams"] !== null) {
            $this->BasicParams = [];
            foreach ($param["BasicParams"] as $key => $value){
                $obj = new Item();
                $obj->deserialize($value);
                array_push($this->BasicParams, $obj);
            }
        }
    }
}
