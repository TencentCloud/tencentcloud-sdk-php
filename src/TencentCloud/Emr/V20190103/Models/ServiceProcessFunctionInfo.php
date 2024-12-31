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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 进程检测信息
 *
 * @method string getDetectAlert() 获取探测告警级别
 * @method void setDetectAlert(string $DetectAlert) 设置探测告警级别
 * @method string getDetetcFunctionKey() 获取探测功能描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetetcFunctionKey(string $DetetcFunctionKey) 设置探测功能描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDetetcFunctionValue() 获取探测功能结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetetcFunctionValue(string $DetetcFunctionValue) 设置探测功能结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDetetcTime() 获取探测结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetetcTime(string $DetetcTime) 设置探测结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDetectFunctionKey() 获取探测功能描述
 * @method void setDetectFunctionKey(string $DetectFunctionKey) 设置探测功能描述
 * @method string getDetectFunctionValue() 获取探测功能结果
 * @method void setDetectFunctionValue(string $DetectFunctionValue) 设置探测功能结果
 * @method string getDetectTime() 获取探测结果
 * @method void setDetectTime(string $DetectTime) 设置探测结果
 */
class ServiceProcessFunctionInfo extends AbstractModel
{
    /**
     * @var string 探测告警级别
     */
    public $DetectAlert;

    /**
     * @var string 探测功能描述
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $DetetcFunctionKey;

    /**
     * @var string 探测功能结果
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $DetetcFunctionValue;

    /**
     * @var string 探测结果
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $DetetcTime;

    /**
     * @var string 探测功能描述
     */
    public $DetectFunctionKey;

    /**
     * @var string 探测功能结果
     */
    public $DetectFunctionValue;

    /**
     * @var string 探测结果
     */
    public $DetectTime;

    /**
     * @param string $DetectAlert 探测告警级别
     * @param string $DetetcFunctionKey 探测功能描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DetetcFunctionValue 探测功能结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DetetcTime 探测结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DetectFunctionKey 探测功能描述
     * @param string $DetectFunctionValue 探测功能结果
     * @param string $DetectTime 探测结果
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
        if (array_key_exists("DetectAlert",$param) and $param["DetectAlert"] !== null) {
            $this->DetectAlert = $param["DetectAlert"];
        }

        if (array_key_exists("DetetcFunctionKey",$param) and $param["DetetcFunctionKey"] !== null) {
            $this->DetetcFunctionKey = $param["DetetcFunctionKey"];
        }

        if (array_key_exists("DetetcFunctionValue",$param) and $param["DetetcFunctionValue"] !== null) {
            $this->DetetcFunctionValue = $param["DetetcFunctionValue"];
        }

        if (array_key_exists("DetetcTime",$param) and $param["DetetcTime"] !== null) {
            $this->DetetcTime = $param["DetetcTime"];
        }

        if (array_key_exists("DetectFunctionKey",$param) and $param["DetectFunctionKey"] !== null) {
            $this->DetectFunctionKey = $param["DetectFunctionKey"];
        }

        if (array_key_exists("DetectFunctionValue",$param) and $param["DetectFunctionValue"] !== null) {
            $this->DetectFunctionValue = $param["DetectFunctionValue"];
        }

        if (array_key_exists("DetectTime",$param) and $param["DetectTime"] !== null) {
            $this->DetectTime = $param["DetectTime"];
        }
    }
}
