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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rabbitmq路由关系列表成员
 *
 * @method integer getBindingId() 获取<p>路由关系id</p>
 * @method void setBindingId(integer $BindingId) 设置<p>路由关系id</p>
 * @method string getVirtualHost() 获取<p>Vhost参数</p>
 * @method void setVirtualHost(string $VirtualHost) 设置<p>Vhost参数</p>
 * @method string getSource() 获取<p>源exchange名称</p>
 * @method void setSource(string $Source) 设置<p>源exchange名称</p>
 * @method string getDestinationType() 获取<p>目标类型,queue或exchange</p>
 * @method void setDestinationType(string $DestinationType) 设置<p>目标类型,queue或exchange</p>
 * @method string getDestination() 获取<p>目标资源名称</p>
 * @method void setDestination(string $Destination) 设置<p>目标资源名称</p>
 * @method string getRoutingKey() 获取<p>绑定key</p>
 * @method void setRoutingKey(string $RoutingKey) 设置<p>绑定key</p>
 * @method string getSourceExchangeType() 获取<p>源exchange类型</p>
 * @method void setSourceExchangeType(string $SourceExchangeType) 设置<p>源exchange类型</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getModifyTime() 获取<p>修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间</p>
 * @method array getArguments() 获取<p>绑定参数，header类型的Exchange绑定时，可以传入参数。其它类型 Exchange 无需传入</p>
 * @method void setArguments(array $Arguments) 设置<p>绑定参数，header类型的Exchange绑定时，可以传入参数。其它类型 Exchange 无需传入</p>
 */
class RabbitMQBindingListInfo extends AbstractModel
{
    /**
     * @var integer <p>路由关系id</p>
     */
    public $BindingId;

    /**
     * @var string <p>Vhost参数</p>
     */
    public $VirtualHost;

    /**
     * @var string <p>源exchange名称</p>
     */
    public $Source;

    /**
     * @var string <p>目标类型,queue或exchange</p>
     */
    public $DestinationType;

    /**
     * @var string <p>目标资源名称</p>
     */
    public $Destination;

    /**
     * @var string <p>绑定key</p>
     */
    public $RoutingKey;

    /**
     * @var string <p>源exchange类型</p>
     */
    public $SourceExchangeType;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var array <p>绑定参数，header类型的Exchange绑定时，可以传入参数。其它类型 Exchange 无需传入</p>
     */
    public $Arguments;

    /**
     * @param integer $BindingId <p>路由关系id</p>
     * @param string $VirtualHost <p>Vhost参数</p>
     * @param string $Source <p>源exchange名称</p>
     * @param string $DestinationType <p>目标类型,queue或exchange</p>
     * @param string $Destination <p>目标资源名称</p>
     * @param string $RoutingKey <p>绑定key</p>
     * @param string $SourceExchangeType <p>源exchange类型</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $ModifyTime <p>修改时间</p>
     * @param array $Arguments <p>绑定参数，header类型的Exchange绑定时，可以传入参数。其它类型 Exchange 无需传入</p>
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
        if (array_key_exists("BindingId",$param) and $param["BindingId"] !== null) {
            $this->BindingId = $param["BindingId"];
        }

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("DestinationType",$param) and $param["DestinationType"] !== null) {
            $this->DestinationType = $param["DestinationType"];
        }

        if (array_key_exists("Destination",$param) and $param["Destination"] !== null) {
            $this->Destination = $param["Destination"];
        }

        if (array_key_exists("RoutingKey",$param) and $param["RoutingKey"] !== null) {
            $this->RoutingKey = $param["RoutingKey"];
        }

        if (array_key_exists("SourceExchangeType",$param) and $param["SourceExchangeType"] !== null) {
            $this->SourceExchangeType = $param["SourceExchangeType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Arguments",$param) and $param["Arguments"] !== null) {
            $this->Arguments = [];
            foreach ($param["Arguments"] as $key => $value){
                $obj = new RabbitMQServerlessKeyValuePair();
                $obj->deserialize($value);
                array_push($this->Arguments, $obj);
            }
        }
    }
}
