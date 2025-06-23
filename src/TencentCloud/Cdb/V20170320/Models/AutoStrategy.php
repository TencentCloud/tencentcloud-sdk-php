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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CPU 弹性扩容的自动扩容策略。
 *
 * @method integer getExpandThreshold() 获取自动扩容阈值，可选值40、50、60、70、80、90，代表 CPU 利用率达到40%、50%、60%、70%、80%、90%时后台进行自动扩容。
 * @method void setExpandThreshold(integer $ExpandThreshold) 设置自动扩容阈值，可选值40、50、60、70、80、90，代表 CPU 利用率达到40%、50%、60%、70%、80%、90%时后台进行自动扩容。
 * @method integer getShrinkThreshold() 获取自动缩容阈值，可选值10、20、30，代表CPU利用率达到10%、20%、30%时后台进行自动缩容
 * @method void setShrinkThreshold(integer $ShrinkThreshold) 设置自动缩容阈值，可选值10、20、30，代表CPU利用率达到10%、20%、30%时后台进行自动缩容
 * @method integer getExpandPeriod() 获取自动扩容观测周期，单位是分钟，可选值1、3、5、10、15、30。后台会按照配置的周期进行扩容判断。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpandPeriod(integer $ExpandPeriod) 设置自动扩容观测周期，单位是分钟，可选值1、3、5、10、15、30。后台会按照配置的周期进行扩容判断。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getShrinkPeriod() 获取自动缩容观测周期，单位是分钟，可选值5、10、15、30。后台会按照配置的周期进行缩容判断。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShrinkPeriod(integer $ShrinkPeriod) 设置自动缩容观测周期，单位是分钟，可选值5、10、15、30。后台会按照配置的周期进行缩容判断。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpandSecondPeriod() 获取弹性扩容观测周期（秒级），可取值为：5，30，45，60，180，300，600，900，1800。
 * @method void setExpandSecondPeriod(integer $ExpandSecondPeriod) 设置弹性扩容观测周期（秒级），可取值为：5，30，45，60，180，300，600，900，1800。
 * @method integer getShrinkSecondPeriod() 获取缩容观测周期（秒级），可取值为：300。
 * @method void setShrinkSecondPeriod(integer $ShrinkSecondPeriod) 设置缩容观测周期（秒级），可取值为：300。
 */
class AutoStrategy extends AbstractModel
{
    /**
     * @var integer 自动扩容阈值，可选值40、50、60、70、80、90，代表 CPU 利用率达到40%、50%、60%、70%、80%、90%时后台进行自动扩容。
     */
    public $ExpandThreshold;

    /**
     * @var integer 自动缩容阈值，可选值10、20、30，代表CPU利用率达到10%、20%、30%时后台进行自动缩容
     */
    public $ShrinkThreshold;

    /**
     * @var integer 自动扩容观测周期，单位是分钟，可选值1、3、5、10、15、30。后台会按照配置的周期进行扩容判断。
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $ExpandPeriod;

    /**
     * @var integer 自动缩容观测周期，单位是分钟，可选值5、10、15、30。后台会按照配置的周期进行缩容判断。
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $ShrinkPeriod;

    /**
     * @var integer 弹性扩容观测周期（秒级），可取值为：5，30，45，60，180，300，600，900，1800。
     */
    public $ExpandSecondPeriod;

    /**
     * @var integer 缩容观测周期（秒级），可取值为：300。
     */
    public $ShrinkSecondPeriod;

    /**
     * @param integer $ExpandThreshold 自动扩容阈值，可选值40、50、60、70、80、90，代表 CPU 利用率达到40%、50%、60%、70%、80%、90%时后台进行自动扩容。
     * @param integer $ShrinkThreshold 自动缩容阈值，可选值10、20、30，代表CPU利用率达到10%、20%、30%时后台进行自动缩容
     * @param integer $ExpandPeriod 自动扩容观测周期，单位是分钟，可选值1、3、5、10、15、30。后台会按照配置的周期进行扩容判断。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ShrinkPeriod 自动缩容观测周期，单位是分钟，可选值5、10、15、30。后台会按照配置的周期进行缩容判断。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpandSecondPeriod 弹性扩容观测周期（秒级），可取值为：5，30，45，60，180，300，600，900，1800。
     * @param integer $ShrinkSecondPeriod 缩容观测周期（秒级），可取值为：300。
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
        if (array_key_exists("ExpandThreshold",$param) and $param["ExpandThreshold"] !== null) {
            $this->ExpandThreshold = $param["ExpandThreshold"];
        }

        if (array_key_exists("ShrinkThreshold",$param) and $param["ShrinkThreshold"] !== null) {
            $this->ShrinkThreshold = $param["ShrinkThreshold"];
        }

        if (array_key_exists("ExpandPeriod",$param) and $param["ExpandPeriod"] !== null) {
            $this->ExpandPeriod = $param["ExpandPeriod"];
        }

        if (array_key_exists("ShrinkPeriod",$param) and $param["ShrinkPeriod"] !== null) {
            $this->ShrinkPeriod = $param["ShrinkPeriod"];
        }

        if (array_key_exists("ExpandSecondPeriod",$param) and $param["ExpandSecondPeriod"] !== null) {
            $this->ExpandSecondPeriod = $param["ExpandSecondPeriod"];
        }

        if (array_key_exists("ShrinkSecondPeriod",$param) and $param["ShrinkSecondPeriod"] !== null) {
            $this->ShrinkSecondPeriod = $param["ShrinkSecondPeriod"];
        }
    }
}
