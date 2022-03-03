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
 * AMQP Exchange信息
 *
 * @method string getName() 获取Exchange名称
 * @method void setName(string $Name) 设置Exchange名称
 * @method string getType() 获取Exchange的类别，为枚举类型:Direct, Fanout, Topic
 * @method void setType(string $Type) 设置Exchange的类别，为枚举类型:Direct, Fanout, Topic
 * @method integer getSourceBindedNum() 获取主绑定数
 * @method void setSourceBindedNum(integer $SourceBindedNum) 设置主绑定数
 * @method string getRemark() 获取说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDestBindedNum() 获取被绑定数
 * @method void setDestBindedNum(integer $DestBindedNum) 设置被绑定数
 * @method integer getCreateTime() 获取创建时间，以毫秒为单位
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，以毫秒为单位
 * @method integer getUpdateTime() 获取创建时间，以毫秒为单位
 * @method void setUpdateTime(integer $UpdateTime) 设置创建时间，以毫秒为单位
 * @method boolean getInternal() 获取是否为内部Exchange(以amq.前缀开头的)
 * @method void setInternal(boolean $Internal) 设置是否为内部Exchange(以amq.前缀开头的)
 * @method string getAlternateExchange() 获取备用Exchange名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlternateExchange(string $AlternateExchange) 设置备用Exchange名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAlternateExchangeDeleteMark() 获取备用Exchange是否删除标识: true(已删除)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlternateExchangeDeleteMark(boolean $AlternateExchangeDeleteMark) 设置备用Exchange是否删除标识: true(已删除)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDelayType() 获取延迟Exchange的类别，为枚举类型:Direct, Fanout, Topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelayType(string $DelayType) 设置延迟Exchange的类别，为枚举类型:Direct, Fanout, Topic
注意：此字段可能返回 null，表示取不到有效值。
 */
class AMQPExchange extends AbstractModel
{
    /**
     * @var string Exchange名称
     */
    public $Name;

    /**
     * @var string Exchange的类别，为枚举类型:Direct, Fanout, Topic
     */
    public $Type;

    /**
     * @var integer 主绑定数
     */
    public $SourceBindedNum;

    /**
     * @var string 说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var integer 被绑定数
     */
    public $DestBindedNum;

    /**
     * @var integer 创建时间，以毫秒为单位
     */
    public $CreateTime;

    /**
     * @var integer 创建时间，以毫秒为单位
     */
    public $UpdateTime;

    /**
     * @var boolean 是否为内部Exchange(以amq.前缀开头的)
     */
    public $Internal;

    /**
     * @var string 备用Exchange名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlternateExchange;

    /**
     * @var boolean 备用Exchange是否删除标识: true(已删除)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlternateExchangeDeleteMark;

    /**
     * @var string 延迟Exchange的类别，为枚举类型:Direct, Fanout, Topic
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelayType;

    /**
     * @param string $Name Exchange名称
     * @param string $Type Exchange的类别，为枚举类型:Direct, Fanout, Topic
     * @param integer $SourceBindedNum 主绑定数
     * @param string $Remark 说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DestBindedNum 被绑定数
     * @param integer $CreateTime 创建时间，以毫秒为单位
     * @param integer $UpdateTime 创建时间，以毫秒为单位
     * @param boolean $Internal 是否为内部Exchange(以amq.前缀开头的)
     * @param string $AlternateExchange 备用Exchange名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AlternateExchangeDeleteMark 备用Exchange是否删除标识: true(已删除)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DelayType 延迟Exchange的类别，为枚举类型:Direct, Fanout, Topic
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SourceBindedNum",$param) and $param["SourceBindedNum"] !== null) {
            $this->SourceBindedNum = $param["SourceBindedNum"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("DestBindedNum",$param) and $param["DestBindedNum"] !== null) {
            $this->DestBindedNum = $param["DestBindedNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Internal",$param) and $param["Internal"] !== null) {
            $this->Internal = $param["Internal"];
        }

        if (array_key_exists("AlternateExchange",$param) and $param["AlternateExchange"] !== null) {
            $this->AlternateExchange = $param["AlternateExchange"];
        }

        if (array_key_exists("AlternateExchangeDeleteMark",$param) and $param["AlternateExchangeDeleteMark"] !== null) {
            $this->AlternateExchangeDeleteMark = $param["AlternateExchangeDeleteMark"];
        }

        if (array_key_exists("DelayType",$param) and $param["DelayType"] !== null) {
            $this->DelayType = $param["DelayType"];
        }
    }
}
