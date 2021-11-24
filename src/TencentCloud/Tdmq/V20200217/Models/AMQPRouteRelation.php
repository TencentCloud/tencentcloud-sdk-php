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
 * AMQP路由关系
 *
 * @method string getRouteRelationId() 获取路由关系ID
 * @method void setRouteRelationId(string $RouteRelationId) 设置路由关系ID
 * @method string getSourceExchange() 获取源Exchange
 * @method void setSourceExchange(string $SourceExchange) 设置源Exchange
 * @method string getDestType() 获取目标类型:Queue|Exchange
 * @method void setDestType(string $DestType) 设置目标类型:Queue|Exchange
 * @method string getDestValue() 获取目标值
 * @method void setDestValue(string $DestValue) 设置目标值
 * @method string getRoutingKey() 获取绑定key
 * @method void setRoutingKey(string $RoutingKey) 设置绑定key
 * @method string getSourceExchangeType() 获取源路由类型:Direct|Topic|Fanout
 * @method void setSourceExchangeType(string $SourceExchangeType) 设置源路由类型:Direct|Topic|Fanout
 * @method integer getCreateTime() 获取创建时间，以毫秒为单位
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，以毫秒为单位
 * @method integer getUpdateTime() 获取修改时间，以毫秒为单位
 * @method void setUpdateTime(integer $UpdateTime) 设置修改时间，以毫秒为单位
 * @method string getRemark() 获取说明信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置说明信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class AMQPRouteRelation extends AbstractModel
{
    /**
     * @var string 路由关系ID
     */
    public $RouteRelationId;

    /**
     * @var string 源Exchange
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
     * @var string 绑定key
     */
    public $RoutingKey;

    /**
     * @var string 源路由类型:Direct|Topic|Fanout
     */
    public $SourceExchangeType;

    /**
     * @var integer 创建时间，以毫秒为单位
     */
    public $CreateTime;

    /**
     * @var integer 修改时间，以毫秒为单位
     */
    public $UpdateTime;

    /**
     * @var string 说明信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @param string $RouteRelationId 路由关系ID
     * @param string $SourceExchange 源Exchange
     * @param string $DestType 目标类型:Queue|Exchange
     * @param string $DestValue 目标值
     * @param string $RoutingKey 绑定key
     * @param string $SourceExchangeType 源路由类型:Direct|Topic|Fanout
     * @param integer $CreateTime 创建时间，以毫秒为单位
     * @param integer $UpdateTime 修改时间，以毫秒为单位
     * @param string $Remark 说明信息
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
        if (array_key_exists("RouteRelationId",$param) and $param["RouteRelationId"] !== null) {
            $this->RouteRelationId = $param["RouteRelationId"];
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

        if (array_key_exists("RoutingKey",$param) and $param["RoutingKey"] !== null) {
            $this->RoutingKey = $param["RoutingKey"];
        }

        if (array_key_exists("SourceExchangeType",$param) and $param["SourceExchangeType"] !== null) {
            $this->SourceExchangeType = $param["SourceExchangeType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
