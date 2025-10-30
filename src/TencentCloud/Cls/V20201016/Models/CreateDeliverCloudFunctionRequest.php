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
 * CreateDeliverCloudFunction请求参数结构体
 *
 * @method string getTopicId() 获取投递规则属于的TopicId。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。
 * @method void setTopicId(string $TopicId) 设置投递规则属于的TopicId。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。
 * @method string getFunctionName() 获取投递的云函数名字。仅支持[事件函数](https://cloud.tencent.com/document/product/583/9694#scf-.E4.BA.8B.E4.BB.B6.E5.87.BD.E6.95.B0) （[函数类型选型](https://cloud.tencent.com/document/product/583/73483)）
通过 [获取函数列表](https://cloud.tencent.com/document/product/583/18582) 获取函数信息。
 * @method void setFunctionName(string $FunctionName) 设置投递的云函数名字。仅支持[事件函数](https://cloud.tencent.com/document/product/583/9694#scf-.E4.BA.8B.E4.BB.B6.E5.87.BD.E6.95.B0) （[函数类型选型](https://cloud.tencent.com/document/product/583/73483)）
通过 [获取函数列表](https://cloud.tencent.com/document/product/583/18582) 获取函数信息。
 * @method string getNamespace() 获取命名空间。参考 [命名空间管理](https://cloud.tencent.com/document/product/583/35913)
- 通过 [列出命名空间列表](https://cloud.tencent.com/document/product/583/37158) 获取Name。
 * @method void setNamespace(string $Namespace) 设置命名空间。参考 [命名空间管理](https://cloud.tencent.com/document/product/583/35913)
- 通过 [列出命名空间列表](https://cloud.tencent.com/document/product/583/37158) 获取Name。
 * @method string getQualifier() 获取函数版本。
- 通过 [查询函数版本 ](https://cloud.tencent.com/document/product/583/37162) 获取函数版本。
 * @method void setQualifier(string $Qualifier) 设置函数版本。
- 通过 [查询函数版本 ](https://cloud.tencent.com/document/product/583/37162) 获取函数版本。
 * @method integer getTimeout() 获取投递最长等待时间，单位：秒。 默认：60
 * @method void setTimeout(integer $Timeout) 设置投递最长等待时间，单位：秒。 默认：60
 * @method integer getMaxMsgNum() 获取投递最大消息数。默认为100。支持范围[1,10000]
 * @method void setMaxMsgNum(integer $MaxMsgNum) 设置投递最大消息数。默认为100。支持范围[1,10000]
 */
class CreateDeliverCloudFunctionRequest extends AbstractModel
{
    /**
     * @var string 投递规则属于的TopicId。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。
     */
    public $TopicId;

    /**
     * @var string 投递的云函数名字。仅支持[事件函数](https://cloud.tencent.com/document/product/583/9694#scf-.E4.BA.8B.E4.BB.B6.E5.87.BD.E6.95.B0) （[函数类型选型](https://cloud.tencent.com/document/product/583/73483)）
通过 [获取函数列表](https://cloud.tencent.com/document/product/583/18582) 获取函数信息。
     */
    public $FunctionName;

    /**
     * @var string 命名空间。参考 [命名空间管理](https://cloud.tencent.com/document/product/583/35913)
- 通过 [列出命名空间列表](https://cloud.tencent.com/document/product/583/37158) 获取Name。
     */
    public $Namespace;

    /**
     * @var string 函数版本。
- 通过 [查询函数版本 ](https://cloud.tencent.com/document/product/583/37162) 获取函数版本。
     */
    public $Qualifier;

    /**
     * @var integer 投递最长等待时间，单位：秒。 默认：60
     */
    public $Timeout;

    /**
     * @var integer 投递最大消息数。默认为100。支持范围[1,10000]
     */
    public $MaxMsgNum;

    /**
     * @param string $TopicId 投递规则属于的TopicId。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。
     * @param string $FunctionName 投递的云函数名字。仅支持[事件函数](https://cloud.tencent.com/document/product/583/9694#scf-.E4.BA.8B.E4.BB.B6.E5.87.BD.E6.95.B0) （[函数类型选型](https://cloud.tencent.com/document/product/583/73483)）
通过 [获取函数列表](https://cloud.tencent.com/document/product/583/18582) 获取函数信息。
     * @param string $Namespace 命名空间。参考 [命名空间管理](https://cloud.tencent.com/document/product/583/35913)
- 通过 [列出命名空间列表](https://cloud.tencent.com/document/product/583/37158) 获取Name。
     * @param string $Qualifier 函数版本。
- 通过 [查询函数版本 ](https://cloud.tencent.com/document/product/583/37162) 获取函数版本。
     * @param integer $Timeout 投递最长等待时间，单位：秒。 默认：60
     * @param integer $MaxMsgNum 投递最大消息数。默认为100。支持范围[1,10000]
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("MaxMsgNum",$param) and $param["MaxMsgNum"] !== null) {
            $this->MaxMsgNum = $param["MaxMsgNum"];
        }
    }
}
