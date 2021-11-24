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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAMQPVHost请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getVHostId() 获取vhost名称，3-64个字符，只能包含字母、数字、“-”及“_”
 * @method void setVHostId(string $VHostId) 设置vhost名称，3-64个字符，只能包含字母、数字、“-”及“_”
 * @method integer getMsgTtl() 获取未消费消息的保留时间，以毫秒为单位，60秒-15天
 * @method void setMsgTtl(integer $MsgTtl) 设置未消费消息的保留时间，以毫秒为单位，60秒-15天
 * @method string getRemark() 获取说明，最大128个字符
 * @method void setRemark(string $Remark) 设置说明，最大128个字符
 */
class ModifyAMQPVHostRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string vhost名称，3-64个字符，只能包含字母、数字、“-”及“_”
     */
    public $VHostId;

    /**
     * @var integer 未消费消息的保留时间，以毫秒为单位，60秒-15天
     */
    public $MsgTtl;

    /**
     * @var string 说明，最大128个字符
     */
    public $Remark;

    /**
     * @param string $ClusterId 集群ID
     * @param string $VHostId vhost名称，3-64个字符，只能包含字母、数字、“-”及“_”
     * @param integer $MsgTtl 未消费消息的保留时间，以毫秒为单位，60秒-15天
     * @param string $Remark 说明，最大128个字符
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("VHostId",$param) and $param["VHostId"] !== null) {
            $this->VHostId = $param["VHostId"];
        }

        if (array_key_exists("MsgTtl",$param) and $param["MsgTtl"] !== null) {
            $this->MsgTtl = $param["MsgTtl"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
