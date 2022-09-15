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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 未处置事件详情
 *
 * @method array getEventTableListStruct() 获取伪攻击链类型
 * @method void setEventTableListStruct(array $EventTableListStruct) 设置伪攻击链类型
 * @method integer getBaseLineUser() 获取1 是  0否
 * @method void setBaseLineUser(integer $BaseLineUser) 设置1 是  0否
 * @method integer getBaseLineInSwitch() 获取1 打开 0 关闭
 * @method void setBaseLineInSwitch(integer $BaseLineInSwitch) 设置1 打开 0 关闭
 * @method integer getBaseLineOutSwitch() 获取1 打开 0 关闭
 * @method void setBaseLineOutSwitch(integer $BaseLineOutSwitch) 设置1 打开 0 关闭
 * @method integer getVpcFwCount() 获取vpc间防火墙实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcFwCount(integer $VpcFwCount) 设置vpc间防火墙实例数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class UnHandleEvent extends AbstractModel
{
    /**
     * @var array 伪攻击链类型
     */
    public $EventTableListStruct;

    /**
     * @var integer 1 是  0否
     */
    public $BaseLineUser;

    /**
     * @var integer 1 打开 0 关闭
     */
    public $BaseLineInSwitch;

    /**
     * @var integer 1 打开 0 关闭
     */
    public $BaseLineOutSwitch;

    /**
     * @var integer vpc间防火墙实例数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcFwCount;

    /**
     * @param array $EventTableListStruct 伪攻击链类型
     * @param integer $BaseLineUser 1 是  0否
     * @param integer $BaseLineInSwitch 1 打开 0 关闭
     * @param integer $BaseLineOutSwitch 1 打开 0 关闭
     * @param integer $VpcFwCount vpc间防火墙实例数量
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
        if (array_key_exists("EventTableListStruct",$param) and $param["EventTableListStruct"] !== null) {
            $this->EventTableListStruct = [];
            foreach ($param["EventTableListStruct"] as $key => $value){
                $obj = new UnHandleEventDetail();
                $obj->deserialize($value);
                array_push($this->EventTableListStruct, $obj);
            }
        }

        if (array_key_exists("BaseLineUser",$param) and $param["BaseLineUser"] !== null) {
            $this->BaseLineUser = $param["BaseLineUser"];
        }

        if (array_key_exists("BaseLineInSwitch",$param) and $param["BaseLineInSwitch"] !== null) {
            $this->BaseLineInSwitch = $param["BaseLineInSwitch"];
        }

        if (array_key_exists("BaseLineOutSwitch",$param) and $param["BaseLineOutSwitch"] !== null) {
            $this->BaseLineOutSwitch = $param["BaseLineOutSwitch"];
        }

        if (array_key_exists("VpcFwCount",$param) and $param["VpcFwCount"] !== null) {
            $this->VpcFwCount = $param["VpcFwCount"];
        }
    }
}
