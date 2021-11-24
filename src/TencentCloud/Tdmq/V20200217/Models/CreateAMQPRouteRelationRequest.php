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
 * CreateAMQPRouteRelation请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getVHostId() 获取交换机所在的vhost
 * @method void setVHostId(string $VHostId) 设置交换机所在的vhost
 * @method string getSourceExchange() 获取源Exchange名称
 * @method void setSourceExchange(string $SourceExchange) 设置源Exchange名称
 * @method string getDestType() 获取目标类型:Queue|Exchange
 * @method void setDestType(string $DestType) 设置目标类型:Queue|Exchange
 * @method string getDestValue() 获取目标值
 * @method void setDestValue(string $DestValue) 设置目标值
 * @method string getRemark() 获取交换机说明，最大128个字符
 * @method void setRemark(string $Remark) 设置交换机说明，最大128个字符
 * @method string getRoutingKey() 获取绑定key,缺省值为default
 * @method void setRoutingKey(string $RoutingKey) 设置绑定key,缺省值为default
 */
class CreateAMQPRouteRelationRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 交换机所在的vhost
     */
    public $VHostId;

    /**
     * @var string 源Exchange名称
     */
    public $SourceExchange;

    /**
     * @var string 目标类型:Queue|Exchange
     */
    public $DestType;

    /**
     * @var string 目标值
     */
    public $DestValue;

    /**
     * @var string 交换机说明，最大128个字符
     */
    public $Remark;

    /**
     * @var string 绑定key,缺省值为default
     */
    public $RoutingKey;

    /**
     * @param string $ClusterId 集群ID
     * @param string $VHostId 交换机所在的vhost
     * @param string $SourceExchange 源Exchange名称
     * @param string $DestType 目标类型:Queue|Exchange
     * @param string $DestValue 目标值
     * @param string $Remark 交换机说明，最大128个字符
     * @param string $RoutingKey 绑定key,缺省值为default
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

        if (array_key_exists("SourceExchange",$param) and $param["SourceExchange"] !== null) {
            $this->SourceExchange = $param["SourceExchange"];
        }

        if (array_key_exists("DestType",$param) and $param["DestType"] !== null) {
            $this->DestType = $param["DestType"];
        }

        if (array_key_exists("DestValue",$param) and $param["DestValue"] !== null) {
            $this->DestValue = $param["DestValue"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RoutingKey",$param) and $param["RoutingKey"] !== null) {
            $this->RoutingKey = $param["RoutingKey"];
        }
    }
}
