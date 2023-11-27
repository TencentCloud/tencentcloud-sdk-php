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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDeliverCloudFunction请求参数结构体
 *
 * @method string getTopicId() 获取投递规则属于的 topic id
 * @method void setTopicId(string $TopicId) 设置投递规则属于的 topic id
 * @method string getFunctionName() 获取投递的云函数名字
 * @method void setFunctionName(string $FunctionName) 设置投递的云函数名字
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getQualifier() 获取函数版本
 * @method void setQualifier(string $Qualifier) 设置函数版本
 * @method integer getTimeout() 获取投递最长等待时间，单位：秒
 * @method void setTimeout(integer $Timeout) 设置投递最长等待时间，单位：秒
 * @method integer getMaxMsgNum() 获取投递最大消息数
 * @method void setMaxMsgNum(integer $MaxMsgNum) 设置投递最大消息数
 */
class CreateDeliverCloudFunctionRequest extends AbstractModel
{
    /**
     * @var string 投递规则属于的 topic id
     */
    public $TopicId;

    /**
     * @var string 投递的云函数名字
     */
    public $FunctionName;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 函数版本
     */
    public $Qualifier;

    /**
     * @var integer 投递最长等待时间，单位：秒
     */
    public $Timeout;

    /**
     * @var integer 投递最大消息数
     */
    public $MaxMsgNum;

    /**
     * @param string $TopicId 投递规则属于的 topic id
     * @param string $FunctionName 投递的云函数名字
     * @param string $Namespace 命名空间
     * @param string $Qualifier 函数版本
     * @param integer $Timeout 投递最长等待时间，单位：秒
     * @param integer $MaxMsgNum 投递最大消息数
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
