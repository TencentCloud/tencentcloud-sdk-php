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
 * ModifyAMQPExchange请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getVHostId() 获取Vhost间名称
 * @method void setVHostId(string $VHostId) 设置Vhost间名称
 * @method string getExchange() 获取交换机名称
 * @method void setExchange(string $Exchange) 设置交换机名称
 * @method string getRemark() 获取说明信息，最大128个字符
 * @method void setRemark(string $Remark) 设置说明信息，最大128个字符
 */
class ModifyAMQPExchangeRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string Vhost间名称
     */
    public $VHostId;

    /**
     * @var string 交换机名称
     */
    public $Exchange;

    /**
     * @var string 说明信息，最大128个字符
     */
    public $Remark;

    /**
     * @param string $ClusterId 集群ID
     * @param string $VHostId Vhost间名称
     * @param string $Exchange 交换机名称
     * @param string $Remark 说明信息，最大128个字符
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

        if (array_key_exists("Exchange",$param) and $param["Exchange"] !== null) {
            $this->Exchange = $param["Exchange"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
