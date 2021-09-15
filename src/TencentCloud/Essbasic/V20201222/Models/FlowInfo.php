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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构体 (FlowInfo) 用于描述流程信息。
 *
 * @method string getFlowName() 获取合同名字
 * @method void setFlowName(string $FlowName) 设置合同名字
 * @method integer getDeadline() 获取签署截止时间戳，超过有效签署时间则该签署流程失败
 * @method void setDeadline(integer $Deadline) 设置签署截止时间戳，超过有效签署时间则该签署流程失败
 * @method string getFlowDescription() 获取合同描述
 * @method void setFlowDescription(string $FlowDescription) 设置合同描述
 * @method string getFlowType() 获取合同类型：
1. “劳务”
2. “销售”
3. “租赁”
4. “其他”
 * @method void setFlowType(string $FlowType) 设置合同类型：
1. “劳务”
2. “销售”
3. “租赁”
4. “其他”
 * @method string getCallbackUrl() 获取回调地址
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调地址
 * @method string getUserData() 获取用户自定义数据
 * @method void setUserData(string $UserData) 设置用户自定义数据
 */
class FlowInfo extends AbstractModel
{
    /**
     * @var string 合同名字
     */
    public $FlowName;

    /**
     * @var integer 签署截止时间戳，超过有效签署时间则该签署流程失败
     */
    public $Deadline;

    /**
     * @var string 合同描述
     */
    public $FlowDescription;

    /**
     * @var string 合同类型：
1. “劳务”
2. “销售”
3. “租赁”
4. “其他”
     */
    public $FlowType;

    /**
     * @var string 回调地址
     */
    public $CallbackUrl;

    /**
     * @var string 用户自定义数据
     */
    public $UserData;

    /**
     * @param string $FlowName 合同名字
     * @param integer $Deadline 签署截止时间戳，超过有效签署时间则该签署流程失败
     * @param string $FlowDescription 合同描述
     * @param string $FlowType 合同类型：
1. “劳务”
2. “销售”
3. “租赁”
4. “其他”
     * @param string $CallbackUrl 回调地址
     * @param string $UserData 用户自定义数据
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
        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }
    }
}
