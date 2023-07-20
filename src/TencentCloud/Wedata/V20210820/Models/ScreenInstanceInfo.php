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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例统计信息展示
 *
 * @method integer getCountTag() 获取统计标示 0：全部、1：当前天、2：昨天
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountTag(integer $CountTag) 设置统计标示 0：全部、1：当前天、2：昨天
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalNum() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalNum(integer $TotalNum) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunningNum() 获取运行中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningNum(integer $RunningNum) 设置运行中
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWaitRunningNum() 获取等待运行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaitRunningNum(integer $WaitRunningNum) 设置等待运行
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDependencyNum() 获取等待上游
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyNum(integer $DependencyNum) 设置等待上游
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWaitEventNum() 获取等待事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaitEventNum(string $WaitEventNum) 设置等待事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStoppingNum() 获取正在终止
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoppingNum(integer $StoppingNum) 设置正在终止
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSucceedNum() 获取成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSucceedNum(integer $SucceedNum) 设置成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailedNum() 获取失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedNum(integer $FailedNum) 设置失败
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScreenInstanceInfo extends AbstractModel
{
    /**
     * @var integer 统计标示 0：全部、1：当前天、2：昨天
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CountTag;

    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalNum;

    /**
     * @var integer 运行中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningNum;

    /**
     * @var integer 等待运行
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaitRunningNum;

    /**
     * @var integer 等待上游
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyNum;

    /**
     * @var string 等待事件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaitEventNum;

    /**
     * @var integer 正在终止
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoppingNum;

    /**
     * @var integer 成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SucceedNum;

    /**
     * @var integer 失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedNum;

    /**
     * @param integer $CountTag 统计标示 0：全部、1：当前天、2：昨天
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalNum 总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunningNum 运行中
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WaitRunningNum 等待运行
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DependencyNum 等待上游
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WaitEventNum 等待事件
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StoppingNum 正在终止
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SucceedNum 成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailedNum 失败
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
        if (array_key_exists("CountTag",$param) and $param["CountTag"] !== null) {
            $this->CountTag = $param["CountTag"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("RunningNum",$param) and $param["RunningNum"] !== null) {
            $this->RunningNum = $param["RunningNum"];
        }

        if (array_key_exists("WaitRunningNum",$param) and $param["WaitRunningNum"] !== null) {
            $this->WaitRunningNum = $param["WaitRunningNum"];
        }

        if (array_key_exists("DependencyNum",$param) and $param["DependencyNum"] !== null) {
            $this->DependencyNum = $param["DependencyNum"];
        }

        if (array_key_exists("WaitEventNum",$param) and $param["WaitEventNum"] !== null) {
            $this->WaitEventNum = $param["WaitEventNum"];
        }

        if (array_key_exists("StoppingNum",$param) and $param["StoppingNum"] !== null) {
            $this->StoppingNum = $param["StoppingNum"];
        }

        if (array_key_exists("SucceedNum",$param) and $param["SucceedNum"] !== null) {
            $this->SucceedNum = $param["SucceedNum"];
        }

        if (array_key_exists("FailedNum",$param) and $param["FailedNum"] !== null) {
            $this->FailedNum = $param["FailedNum"];
        }
    }
}
