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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckFunction请求参数结构体
 *
 * @method string getEtlContent() 获取加工语句。 当FuncType为2时，EtlContent必须使用[log_auto_output](https://cloud.tencent.com/document/product/614/70733#b3c58797-4825-4807-bef4-68106e25024f) 

其他参考文档：

- [创建加工任务](https://cloud.tencent.com/document/product/614/63940) 
-  [函数总览](https://cloud.tencent.com/document/product/614/70395)
 * @method void setEtlContent(string $EtlContent) 设置加工语句。 当FuncType为2时，EtlContent必须使用[log_auto_output](https://cloud.tencent.com/document/product/614/70733#b3c58797-4825-4807-bef4-68106e25024f) 

其他参考文档：

- [创建加工任务](https://cloud.tencent.com/document/product/614/63940) 
-  [函数总览](https://cloud.tencent.com/document/product/614/70395)
 * @method array getDstResources() 获取加工任务目标topic_id以及别名，当 FuncType 为 1 时，必填。
目标日志主题ID通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
 * @method void setDstResources(array $DstResources) 设置加工任务目标topic_id以及别名，当 FuncType 为 1 时，必填。
目标日志主题ID通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
 * @method integer getFuncType() 获取数据加工目标主题的类型. 1 固定主题 2动态创建
 * @method void setFuncType(integer $FuncType) 设置数据加工目标主题的类型. 1 固定主题 2动态创建
 */
class CheckFunctionRequest extends AbstractModel
{
    /**
     * @var string 加工语句。 当FuncType为2时，EtlContent必须使用[log_auto_output](https://cloud.tencent.com/document/product/614/70733#b3c58797-4825-4807-bef4-68106e25024f) 

其他参考文档：

- [创建加工任务](https://cloud.tencent.com/document/product/614/63940) 
-  [函数总览](https://cloud.tencent.com/document/product/614/70395)
     */
    public $EtlContent;

    /**
     * @var array 加工任务目标topic_id以及别名，当 FuncType 为 1 时，必填。
目标日志主题ID通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
     */
    public $DstResources;

    /**
     * @var integer 数据加工目标主题的类型. 1 固定主题 2动态创建
     */
    public $FuncType;

    /**
     * @param string $EtlContent 加工语句。 当FuncType为2时，EtlContent必须使用[log_auto_output](https://cloud.tencent.com/document/product/614/70733#b3c58797-4825-4807-bef4-68106e25024f) 

其他参考文档：

- [创建加工任务](https://cloud.tencent.com/document/product/614/63940) 
-  [函数总览](https://cloud.tencent.com/document/product/614/70395)
     * @param array $DstResources 加工任务目标topic_id以及别名，当 FuncType 为 1 时，必填。
目标日志主题ID通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
     * @param integer $FuncType 数据加工目标主题的类型. 1 固定主题 2动态创建
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
        if (array_key_exists("EtlContent",$param) and $param["EtlContent"] !== null) {
            $this->EtlContent = $param["EtlContent"];
        }

        if (array_key_exists("DstResources",$param) and $param["DstResources"] !== null) {
            $this->DstResources = [];
            foreach ($param["DstResources"] as $key => $value){
                $obj = new DataTransformResouceInfo();
                $obj->deserialize($value);
                array_push($this->DstResources, $obj);
            }
        }

        if (array_key_exists("FuncType",$param) and $param["FuncType"] !== null) {
            $this->FuncType = $param["FuncType"];
        }
    }
}
