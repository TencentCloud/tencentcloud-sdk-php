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
 * RocketMQ主题信息
 *
 * @method string getName() 获取主题名称
 * @method void setName(string $Name) 设置主题名称
 * @method string getType() 获取主题的类别，为枚举类型，Normal，GlobalOrder，PartitionedOrder，Transaction，Retry及DeadLetter
 * @method void setType(string $Type) 设置主题的类别，为枚举类型，Normal，GlobalOrder，PartitionedOrder，Transaction，Retry及DeadLetter
 * @method integer getGroupNum() 获取订阅组数量
 * @method void setGroupNum(integer $GroupNum) 设置订阅组数量
 * @method string getRemark() 获取说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPartitionNum() 获取读写分区数
 * @method void setPartitionNum(integer $PartitionNum) 设置读写分区数
 * @method integer getCreateTime() 获取创建时间，以毫秒为单位
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，以毫秒为单位
 * @method integer getUpdateTime() 获取创建时间，以毫秒为单位
 * @method void setUpdateTime(integer $UpdateTime) 设置创建时间，以毫秒为单位
 */
class RocketMQTopic extends AbstractModel
{
    /**
     * @var string 主题名称
     */
    public $Name;

    /**
     * @var string 主题的类别，为枚举类型，Normal，GlobalOrder，PartitionedOrder，Transaction，Retry及DeadLetter
     */
    public $Type;

    /**
     * @var integer 订阅组数量
     */
    public $GroupNum;

    /**
     * @var string 说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var integer 读写分区数
     */
    public $PartitionNum;

    /**
     * @var integer 创建时间，以毫秒为单位
     */
    public $CreateTime;

    /**
     * @var integer 创建时间，以毫秒为单位
     */
    public $UpdateTime;

    /**
     * @param string $Name 主题名称
     * @param string $Type 主题的类别，为枚举类型，Normal，GlobalOrder，PartitionedOrder，Transaction，Retry及DeadLetter
     * @param integer $GroupNum 订阅组数量
     * @param string $Remark 说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PartitionNum 读写分区数
     * @param integer $CreateTime 创建时间，以毫秒为单位
     * @param integer $UpdateTime 创建时间，以毫秒为单位
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

        if (array_key_exists("GroupNum",$param) and $param["GroupNum"] !== null) {
            $this->GroupNum = $param["GroupNum"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
